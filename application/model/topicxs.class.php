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
