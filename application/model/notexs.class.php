<?php

!defined('IN_ASK2')&&exit('Access Denied');
/**
 * notexs short summary.
 *
 * notexs description.
 *
 * @version 1.0
 * @author wujie
 */
class notexsclass
{
    var $index;
    var $search;
    var $db;

    function notexsclass(&$db,$xspath){
        require_once $xspath;
        $xs = new XS('note');
        $this->index =$xs->index;
        $this->search = $xs->search;
        $this->db = $db;
        
    }
    

    
    function makeindex(){
        $query = $this->db->query("select * from ".DB_TABLEPRE."note ");
        while ($note =$this->db->fetch_array($query))
        {
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
            $this->index->add($doc);
        	
        }
        
    }
    
}
