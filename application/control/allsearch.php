<?php
!defined('IN_ASK2')&&exit('Access Denied');
/**
 * allsearch short summary.
 *
 * allsearch description.
 *
 * @version 1.0
 * @author wujie
 */
class allsearchcontrol extends base
{
    
    
    function allsearchcontrol(&$get,&$post){
        $this->base($get,$post);
        $this->load('topic');
        $this->load('question');
        $this->load('note');
        $this->load('category');
        
    }
    //统一的搜索
    function ondefault(){
        
        $hidefooter='hidefooter';
        
        $type="allsearch";
        $word =urldecode($this->get[2]);
        
        if ($this->post['word']) {
            header("Location:" . SITE_URL . '?search-'. urlencode($this->post['word']));
            exit();
        }

        $word = str_replace(array("\\","'"," ","/","&"),"", $word);
        $word = strip_tags($word);
        $word = htmlspecialchars($word);
        $word = taddslashes($word, 1);
        (!$word) && $this->message("搜索关键词不能为空!", 'BACK');
        
        if(isset($_SERVER['HTTP_X_REWRITE_URL'])){
            
            if(function_exists("iconv")&&$this->get[2]!=null){
                $word= iconv("GB2312", "UTF-8//IGNORE", $this->get[2]);
                
            }
        }
        $navtitle = $word ;
        //$cid = intval($this->get[3])?$this->get[3]:'all';
        @$page = max(1, intval($this->get[3]));
        $pagesize = 5;//每项显示5个栏位4*5月20个
        $startindex = ($page - 1) * $pagesize;
        $seo_description=$word;
        $seo_keywords= $word;
        
       
        //文章
        $topiclist = $_ENV['topic']->get_bylikename($word,$startindex,$pagesize,''); //查询所有的 cfiled=''
        $topicnum = $_ENV['topic']->rownum_by_title($word,'');
        foreach ($topiclist as $key=>$value)
        {
            $topiclist[$key]['srcs']=$_ENV['category']->subcatorypath($value['articleclassid']);
        }
        
        
        
       //问题 
        $questionlist = $_ENV['question']->search_title($word,'',0,$startindex,$pagesize,'',0);
        $questionnum = $_ENV['question']->search_title_num($word,'','cid1',0);
        foreach ($questionlist as $key=>$value)
        {
        	$questionlist[$key]['srcs'] =$_ENV['category']->subcatorypath($value['cid']);
        }
        
        
        //公告
        
        $notelist = $_ENV['note']->searchnote($word,$startindex,$pagesize);
        $notenum = $_ENV['note']->searchrownum($word);
        
        //专题
        
        $categorynum = $_ENV['category']->rownumbycondition(" `name` like '%$word%'  ");
        
        $catlist = $_ENV['category']->list_by_name($word, $startindex, $pagesize,'all');
        foreach ($catlist as $key=>$value)
        {
            
        	$catlist[$key]['srcs']=$_ENV['category']->subcatorypath($value['id']);
        }
        
        
       
        $maxcats = array(  @ceil($topicnum/$pagesize)=>$topicnum.','.$pagesize,@ceil($questionnum/$pagesize)=>$questionnum.','.$pagesize
            , @ceil($notenum/$pagesize)=>$notenum.','.$pagesize, @ceil($categorynum/$pagesize)=>$categorynum.','.$pagesize);
        $max = array_search(max($maxcats),$maxcats);
        //var_dump($maxcats);
        
        //var_dump($max);
        //echo $maxcats[$max][17];
        //var_dump($maxcats[$max]); 
        //var_dump($maxcats[$max][0]);
        //var_dump($maxcats[$max][1]);
        $rownum = $topicnum+$questionnum+$notenum+$categorynum;

        $departstr = page(explode(',',$maxcats[$max])[0],explode(',', $maxcats[$max])[1], $page, "allsearch/default/$word"); //每页20条 暂时安装最大分页数来分页吧
        //后面再考虑是否可以按照一页多少条来处理分页

        
        include template('allsearch');
        
        
    
    }
    
    
    
}
