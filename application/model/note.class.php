<?php

!defined('IN_ASK2') && exit('Access Denied');

class notemodel {

    var $db;
    var $base;
    var $xs;
    var $search;
    

    function notemodel(&$base) {
        $this->base = $base;
        $this->db = $base->db;
        if ($this->base->setting['xunsearch_open'])
        {
        	require ASK2_APP_ROOT."/model/notexs.class.php";
            $this->xs = new notexsclass($this->db,$this->base->setting['xunsearch_sdk_file']);
            $this->search = $this->xs->search;
        }
        
    }
    
    //获取搜索的热词
    function get_hotquery($limit=6 ,$type='total'){
        $hotkey= array();
        if ($this->base->setting['xunsearch_open'])
        {
        	$hotkey= $this->search->getHotQuery($limit,$type);
        }
        return $hotkey;
    }
    // 获取相关搜索 
    function get_relatedquery($key,$limit=6){
        $relates = array();
        if ($this->base->setting['xunsearch_open'])
        {
        	$relates = $this->search->getRelatedQuery($key,$limit);
        }
        return $relates;
        
    }
    
    
    
    
    //获取纠错热词
    //在搜索的数据很少的时候调用
    // 比如搜索没有结果的时候
    function get_correctedquery($key){
        $corrects = array();
        if ($this->base->setting['xunsearch_open'])
        {
        	$corrects =$this->search->getCorrectedQuery($key);
        }
        return $corrects;
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    function get($id) {
        $note = $this->db->fetch_first("SELECT * FROM " . DB_TABLEPRE . "note WHERE id='$id'");
        $note['format_time'] = tdate($note['time'], 3, 0);

           $note['title'] = checkwordsglobal($note['title']);
        $note['content'] = checkwordsglobal($note['content']);
          $note['artlen'] = strlen(strip_tags($note['content']));
          $note['avatar']=get_avatar_dir($note['authorid']);
        return $note;
    }

    function get_list($start = 0, $limit = 10) {
        $notelist = array();
        $query = $this->db->query("select * from " . DB_TABLEPRE . "note order by id desc limit $start,$limit");
        while ($note = $this->db->fetch_array($query)) {
            $note['format_time'] = tdate($note['time'], 3, 0);
            $note['sortime'] = $note['time'];//用于排序
              $note['title'] = checkwordsglobal($note['title']);
       $note['avatar']=get_avatar_dir($note['authorid']);
          $note['image']=getfirstimg($note['content']);
              $note['content']=cutstr( checkwordsglobal(strip_tags($note['content'])), 240,'...');
              
            $notelist[] = $note;
        }
        return $notelist;
    }
    //获取置顶公告
    function get_toplist($start = 0, $limit = 10) {
        $notelist = array();
        $query = $this->db->query("select * from " . DB_TABLEPRE . "note where indextop =1 order by `time` desc limit $start,$limit");
        while ($note = $this->db->fetch_array($query)) {
            $note['format_time'] = tdate($note['time'], 3, 0);
            $note['sortime'] = $note['time'];//用于排序
            $note['title'] = checkwordsglobal($note['title']);
            $note['avatar']=get_avatar_dir($note['authorid']);
            $note['image']=getfirstimg($note['content']);
            $note['content']=cutstr( checkwordsglobal(strip_tags($note['content'])), 240,'...');
            $notelist[] = $note;
        }
        return $notelist;
    }
    //更新置顶公告
    function update_indextop($indextop,$noteid) {
        $this->db->query("UPDATE " . DB_TABLEPRE . "note SET indextop='$indextop',time='{$this->base->time}' WHERE `id`='$noteid'");
    }
    function add($title, $url, $content) {
        $username = $this->base->user['realname'];
        $uid = $this->base->user['uid'];
        $this->db->query('INSERT INTO ' . DB_TABLEPRE . "note(title,authorid,author,url,content,time) values ('$title','$uid','$username','$url','$content','{$this->base->time}')");
        $nid=$this->db->insert_id();
        if ($this->base->setting['xunsearch_open']&&$nid)
        {
            $note = $this->db->fetch_first("select * from ".DB_TABLEPRE."note where id = $nid");
            $data = array();
            $data['id'] = $note['id'];
            $data['authorid'] =$note['authorid'];
            $data['author'] = $note['author'];
            $data['title'] = $note['title'];
            $data['content'] =$note['content'];
            $data['time'] = $note['time'];
            $data['views'] = $note['views'];
            $data['comments'] =$note['comments'];
            $data['indextop'] =$note['indextop'];
            $doc = new XSDocument;
            $doc->setFields($data);
            $this->xs->index->add($doc);

        }
        
        
        
        return $nid;
    }
    //更新讯搜文章
    function updateindex($nid){
        if ($this->base->setting['xunsearch_open'])
        {
        	$note = $this->db->fetch_first("select * from ".DB_TABLEPRE."note where id = $nid");
            $data = array();
            $data['id'] = $note['id'];
            $data['authorid'] =$note['authorid'];
            $data['author'] = $note['author'];
            $data['title'] = $note['title'];
            $data['content'] =$note['content'];
            $data['time'] = $note['time'];
            $data['views'] = $note['views'];
            $data['comments'] =$note['comments'];
            $data['indextop'] =$note['indextop'];
            $doc = new XSDocument;
            $doc->setFields($data);
            $this->xs->index->update($doc);
        }
        
    }

    function update_views($noteid) {
        $this->db->query("UPDATE " . DB_TABLEPRE . "note SET views=views+1 WHERE `id`='$noteid'");
    }

    function update_comments($noteid) {
        $this->db->query("UPDATE " . DB_TABLEPRE . "note SET comments=comments+1 WHERE `id`='$noteid'");
    }

    function update($id, $title, $url, $content) {
        $username = $this->base->user['username'];
        $this->db->query('update  ' . DB_TABLEPRE . "note  set title='$title',author='$username',url='$url',content='$content',time='{$this->base->time}' where id=$id ");
        $this->updateindex($id);
        
    }

    function remove_by_id($ids) {
        $this->db->query("DELETE FROM `" . DB_TABLEPRE . "note` WHERE `id` IN ($ids)");
    }
    
    function searchnote($keyword ,$start =0 , $limit =10){
        $notelist = array();
        if ($this->base->setting['xunsearch_open'])
        {
            $query =$this->search->setQuery($keyword)->setLimit($limit,$start)->search();
            foreach ($query as $note)
            {
                $data = array();
                $data['id'] = $note->id;
                $data['authorid'] = $note->authorid;
            	$data['author'] = $note->author;
                $data['authoravatar'] = get_avatar_dir($note->authorid);
                $data['avatar'] = get_avatar_dir($data['authorid']);
                $data['title'] = $this->search->highlight($note->title);
                
                $data['content'] =$note->content;
                $data['content'] =$this->search-> highlight(cutstr(checkwordsglobal(strip_tags($data['content'])), 240, '...'));
                $data['time'] = tdate($note->time);
                
                $data['comments'] =$note->comments;
                $data['views'] = $note->views;
                $data['indextop'] =$note->indextop;
                $notelist[]= $data;
            }
            
        	
        }else
        {
        	$query=$this->db->query("select * from ".DB_TABLEPRE."note where title like '%$keyword%' or content like '%$keyword%'");
            while ($note =$this->db->fetch_array($query))
            {
             
                $note['title'] = $this->search->highlight($note['title']);
                $note['content'] =   highlight(cutstr(checkwordsglobal(strip_tags($note['content'])), 240, '...'), $note['title']);
            	
                $note['time'] = tdate($note['time']);
                $note['authoravatar'] = get_avatar_dir($note['authorid']);
                $note['avatar'] = get_avatar_dir($note['authorid']);
                $notelist[] =$note;
            }
            
            
        }
        return $notelist;
        
    
    }
    
    function searchrownum($keyword){
        $rownum =0;
        if ($this->base->setting['xunsearch_open'])
        {
            $rownum = $this->search->getLastCount();
        	
        }else
        {
        	$rownum = $this->db->result_frist("select count(*) from ".DB_TABLEPRE."note where title like '%$keyword%'or content like '%$keyword%'");
        }
        return $rownum;
        
        
    
    }
    
    //更新索引
    function makeindex(){
    
        if ($this->base->setting['xunsearch_open'])
        {
        	$this->xs->makeindex();
        }
        
    }
    
    
    
    
    

}

?>
