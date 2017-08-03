<?php



!defined('IN_ASK2') && exit('Access Denied');
/**
 * topicxs short summary.
 *
 * topicxs description.
 *
 * @version 1.0
 * @author wujie
 */
class topicxsclass
{
    
    
    var $db;
    
    var $index ;
    var $indexadv;
    
    var $search;
    var $searchadv;
    
    var $indexfoss;
    var $searchfoss;
    
  function topicxsclass( &$db,  $xsstr){
      require_once $xsstr;
      
      $xs = new XS('topic');
      $this->search = $xs->search;
      $this->index = $xs->index;
      $xs = new XS('topicadvisor');
      $this->indexadv = $xs->index;
      $this->searchadv = $xs->search;
      
      $xs = new XS('topicfoss');
      $this->indexfoss = $xs->index;
      $this->searchfoss = $xs->search;
      
      $this->db =$db;
  
  }
  
  
  
  
  
  //文章分类一定会存在
  function updateindex($doc ,$authoridentity,$cid){
    //根据用户来分类更新文章还是不准确
      // 创建是根据  文章的属性创建的；
      //分类也应该按照属性分类
      //文件是不是分类文章   
      
      $count = $this->db->result_first("select count (*) from ".DB_TABLEPRE."topic where   exists(select * from ".DB_TABLEPRE."category where isFOSS =1 and id = $cid)");
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
  
  
  
  function makeindex(){
      
      $this->index->clean();
      $query = $this->db->query("SELECT * FROM " . DB_TABLEPRE . "topic ");
      while ($topic = $this->db->fetch_array($query)) {
          $data = array();
          
          $data['id'] = $topic['id'];
          $data['articleclassid'] = $topic['articleclassid'];
          $data['image'] = $topic['image'];
          $data['author'] = $topic['author'];
          $data['authorid'] = $topic['authorid'];
          $data['authoritycontrol'] = $topic['authoritycontrol'];
          $data['views'] = $topic['views'];
          $data['articles'] = $topic['articles'];
          $data['likes'] = $topic['likes'];
          $data['viewtime'] = $topic['viewtime'];
          
          $data['cid1']= $topic['cid1'];
          $data['cid2']= $topic['cid2'];
          $data['cid3']= $topic['cid3'];

          $data['title'] = $topic['title'];
          $data['describtion'] = $topic['describtion'];
          $doc = new XSDocument;
          
          $doc->setFields($data);
          $this->index->add($doc);
          
      }
      
  }
  
  
  function makeindexadv(){
      $this->indexadv->clean();
      $query = $this->db->query("SELECT * FROM " . DB_TABLEPRE . "topic where authoritycontrol= 2 ");
      while ($topic = $this->db->fetch_array($query)) {
          $data = array();
          
          $data['id'] = $topic['id'];
          $data['articleclassid'] = $topic['articleclassid'];
          $data['image'] = $topic['image'];
          $data['author'] = $topic['author'];
          $data['authorid'] = $topic['authorid'];
          $data['authoritycontrol'] = $topic['authoritycontrol'];
          $data['views'] = $topic['views'];
          $data['articles'] = $topic['articles'];
          $data['likes'] = $topic['likes'];
          $data['viewtime'] = $topic['viewtime'];
          
          $data['cid1']= $topic['cid1'];
          $data['cid2']= $topic['cid2'];
          $data['cid3']= $topic['cid3'];

          $data['title'] = $topic['title'];
          $data['describtion'] = $topic['describtion'];
          $doc = new XSDocument;
          
          $doc->setFields($data);
          $this->indexadv->add($doc);
          
      }
  }
 
  
  function makeindexfoss(){
      $this->indexfoss->clean();
      $query = $this->db->query("select * from ".DB_TABLEPRE."topic where   exists(select * from ".DB_TABLEPRE."category where isFOSS =1 and id = articleclassid)");
      while ($topic = $this->db->fetch_array($query))
      {
          $data = array();
          
          $data['id'] = $topic['id'];
          $data['articleclassid'] = $topic['articleclassid'];
          $data['image'] = $topic['image'];
          $data['author'] = $topic['author'];
          $data['authorid'] = $topic['authorid'];
          $data['authoritycontrol'] = $topic['authoritycontrol'];
          $data['views'] = $topic['views'];
          $data['articles'] = $topic['articles'];
          $data['likes'] = $topic['likes'];
          $data['viewtime'] = $topic['viewtime'];
          
          $data['cid1']= $topic['cid1'];
          $data['cid2']= $topic['cid2'];
          $data['cid3']= $topic['cid3'];

          $data['title'] = $topic['title'];
          $data['describtion'] = $topic['describtion'];
          $doc = new XSDocument;
          
          $doc->setFields($data);
          $this->indexfoss->add($doc);
          
      }
      
      
  }
    
}
