<?php

define("MEDIAWIKI_PATH", ASK2_ROOT."/lib/mediawiki/mediawiki-1.15.2/");

/* Include our helper class */
require_once ASK2_ROOT."/lib/mediawiki/mediawiki-zhconverter.inc.php";

/*翻译需要的语言*/
function convertlange($content,   $lange='zh-tw')
{
    return	MediaWikiZhConverter::convert($content,$lange);
}



/*判断字符串中是否包含繁体尽可能判断 */
function stristraditioncal($str)
{
	return iconv('UTF-8','GB2312',$str)===false?true:false;
}
