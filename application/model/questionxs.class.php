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
            $data['description'] = $question['description'];
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
            $data['description'] = $question['description'];
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
            $data['description'] = $question['description'];
            $doc = new XSDocument;
            $doc->setFields($data);
            $this->indexfoss->add($doc);
        }
        
    }
    
    
}
