<?php

!defined('IN_ASK2') && exit('Access Denied');
/**
 * questionxs short summary.
 *
 * questionxs description.
 *
 * @version 1.0
 * @author wujie
 */
class questionxsclass
{
    var $db;
    
    var $index ;
    var $indexadv;
    
    var $search;
    var $searchadv;
    
    var $indexfoss;
    var $searchfoss;
    function questionxsclass( &$db ,$xsstr){
        require_once $xsstr;
        $xs = new XS('question');
        $this->index = $xs->index;
        $this->search = $xs->search;
        
        $xs = new XS('questionadvisor');
        $this ->indexadv = $xs->index;
        $this->searchadv = $xs ->search;
        $xs = new XS('questionfoss');
        $this->indexfoss = $xs->index;
        $this->searchfoss = $xs->search;
        
        $this->db = $db;
        
        
    }
    
    function makeindex(){
        $this->index->clean();
        $query = $this->db->query("SELECT * FROM " . DB_TABLEPRE . "question ");
        while ($question = $this->db->fetch_array($query)) {
            $data = array();
            $data['id'] = $question['id'];
            $data['cid'] = $question['cid'];
            $data['cid1'] = $question['cid1'];
            $data['cid2'] = $question['cid2'];
            $data['cid3'] = $question['cid3'];
            $data['author'] = $question['author'];
            $data['authorid'] = $question['authorid'];
            $data['authoritycontrol'] = $question['authoritycontrol'];
            $data['answers'] = $question['answers'];
            $data['price'] = $question['price'];
            $data['attentions'] = $question['attentions'];
            $data['shangjin'] = $question['shangjin'];
            $data['status'] = $question['status'];
            $data['time'] = $question['time'];
            $data['title'] = $question['title'];
          
            $data['description'] = $question['description'].$question['supplysearch'];
            $doc = new XSDocument;
            $doc->setFields($data);
            $this->index->add($doc);
        }
    }
    
    
    function makeindexadv(){
        $this->indexadv->clean();
        $query = $this->db->query("select * from ".DB_TABLEPRE."question where authoritycontrol= 2 ");
        while ($question =$this->db->fetch_array($query))
        {
        	$data = array();
            $data['id'] = $question['id'];
            $data['cid'] = $question['cid'];
            $data['cid1'] = $question['cid1'];
            $data['cid2'] = $question['cid2'];
            $data['cid3'] = $question['cid3'];
            $data['author'] = $question['author'];
            $data['authorid'] = $question['authorid'];
            $data['authoritycontrol'] = $question['authoritycontrol'];
            $data['answers'] = $question['answers'];
            $data['price'] = $question['price'];
            $data['attentions'] = $question['attentions'];
            $data['shangjin'] = $question['shangjin'];
            $data['status'] = $question['status'];
            $data['time'] = $question['time'];
            $data['title'] = $question['title'];
        
            $data['description'] = $question['description'].$question['supplysearch'];
            $doc = new XSDocument;
            $doc->setFields($data);
            $this->indexadv->add($doc);
        }
        
    }
    
    
    function makeindexfoss(){
        $this->indexfoss->clean();
        $query = $this->db->query( "select * from ".DB_TABLEPRE."question where   exists(select * from ".DB_TABLEPRE."category where isFOSS =1 and id = cid)");
        while ($question = $this->db->fetch_array($query))
        {
        	$data = array();
            $data['id'] = $question['id'];
            $data['cid'] = $question['cid'];
            $data['cid1'] = $question['cid1'];
            $data['cid2'] = $question['cid2'];
            $data['cid3'] = $question['cid3'];
            $data['author'] = $question['author'];
            $data['authorid'] = $question['authorid'];
            $data['authoritycontrol'] = $question['authoritycontrol'];
            $data['answers'] = $question['answers'];
            $data['price'] = $question['price'];
            $data['attentions'] = $question['attentions'];
            $data['shangjin'] = $question['shangjin'];
            $data['status'] = $question['status'];
            $data['time'] = $question['time'];
            $data['title'] = $question['title'];
        
            $data['description'] = $question['description'].$question['supplysearch']; //搜索内容包括相关信息
            $doc = new XSDocument;
            $doc->setFields($data);
            $this->indexfoss->add($doc);
        }
        
    }
    
    //添加索引
    //
    function addindex($doc,$authoridentity ,$cid){
        $count =0;
        $count = $this->db->result_first("select count (*) from ".DB_TABLEPRE."question where   exists(select * from ".DB_TABLEPRE."category where isFOSS =1 and id = $cid)");
        if ($count)
        {
        	$this->index->add($doc);
            $this->indexfoss->add($doc);
            
        }else if($authoridentity==2){
            $this->index->add($doc);
            $this->indexadv->add($doc);
        }else
        {
            $this->index->add($doc);
        }
        
        
    }
    
    //删除索引
    //直接在所有分词库里面删掉索引数据
    function delindex($qids){
        $this->index->del($qids);
        $this->indexadv->del($qids);
        $this->indexfoss->del($qids);
    }
    //更新问题索引
    function updateindex($doc ,$authoridentity,$cid){
        //根据用户来分类更新文章还是不准确
        // 创建是根据  文章的属性创建的；
        //分类也应该按照属性分类
        //文件是不是分类文章   
        
        $count = $this->db->result_first("select count (*) from ".DB_TABLEPRE."question where   exists(select * from ".DB_TABLEPRE."category where isFOSS =1 and id = $cid)");
        if ($count)
        {
            $this->index->update($doc);
            $this->indexfoss->update($doc);
        }else if($authoridentity==2){
            $this->index->update($doc);
            $this->indexadv->update($doc);
        }else
        {
            $this->index->update($doc);
        }
        

        
        
    }
    
    
}
