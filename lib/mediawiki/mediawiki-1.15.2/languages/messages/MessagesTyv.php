<?php
/** Tuvinian (Тыва дыл)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Krice from Tyvanet.com
 * @author Sborsody
 * @author friends at tyvawiki.org
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'Медиа', //Media
	NS_SPECIAL          => 'Тускай', //Special
	NS_MAIN	            => '',
	NS_TALK	            => 'Чугаа', //Talk
	NS_USER             => 'Aжыглакчы', //User
	NS_USER_TALK        => 'Aжыглакчы_чугаа', //User_talk
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK     => '$1_чугаа', //_talk
	NS_FILE             => 'Чурук', //Image
	NS_FILE_TALK        => 'Чурук_чугаа', //Image_talk
	NS_MEDIAWIKI        => 'МедиаВики', //MediaWiki
	NS_MEDIAWIKI_TALK   => 'МедиаВики_чугаа', //MediaWiki_talk
	NS_TEMPLATE         => 'Хээ', //Template
	NS_TEMPLATE_TALK    => 'Хээ_чугаа', //Template_talk
	NS_HELP             => 'Дуза', //Help
	NS_HELP_TALK        => 'Дуза_чугаа', //Help_talk
	NS_CATEGORY         => 'Бөлүк', //Category
	NS_CATEGORY_TALK    => 'Бөлүк_чугаа', //Category_talk
);


$bookstoreList = array(
	'ОЗОН' => 'http://www.ozon.ru/?context=advsearch_book&isbn=$1',
	'Books.Ru' => 'http://www.books.ru/shop/search/advanced?as%5Btype%5D=books&as%5Bname%5D=&as%5Bisbn%5D=$1&as%5Bauthor%5D=&as%5Bmaker%5D=&as%5Bcontents%5D=&as%5Binfo%5D=&as%5Bdate_after%5D=&as%5Bdate_before%5D=&as%5Bprice_less%5D=&as%5Bprice_more%5D=&as%5Bstrict%5D=%E4%E0&as%5Bsub%5D=%E8%F1%EA%E0%F2%FC&x=22&y=8',
	'Яндекс.Маркет' => 'http://market.yandex.ru/search.xml?text=$1',
	'Amazon.com' => 'http://www.amazon.com/exec/obidos/ISBN=$1',
	'AddALL' => 'http://www.addall.com/New/Partner.cgi?query=$1&type=ISBN',
	'PriceSCAN' => 'http://www.pricescan.com/books/bookDetail.asp?isbn=$1',
	'Barnes & Noble' => 'http://shop.barnesandnoble.com/bookSearch/isbnInquiry.asp?isbn=$1'
);

$fallback8bitEncoding = "windows-1251";

$messages = array(
# User preference toggles
'tog-highlightbroken'  => '<a href="" class="new">Бо ышкаш</a> бузук холбааларны форматтап ирги.  (азы: бо ышкаш<a href="" class="internal">?</a>).',
'tog-hideminor'        => 'Сөөлгү өскерлиишкиннер арында бичии өскерлиишкиннерни чажырар',
'tog-showtoolbar'      => 'Өскертир херекселдерни көргүзер (JavaScript)',
'tog-editondblclick'   => 'Арынны өскертирде ийи катап базар (JavaScript)',
'tog-rememberpassword' => 'Мени сактып алыр',

'underline-always'  => 'Кезээде',
'underline-never'   => 'Кажан-даа',
'underline-default' => 'Веб-браузерниң ниити үнези',

# Dates
'sunday'        => 'Улуг хүн',
'monday'        => 'Бир дугаар хүн',
'tuesday'       => 'Ийи дугаар хүн',
'wednesday'     => 'Үш дугаар хүн',
'thursday'      => 'Дөрт дугаар хүн',
'friday'        => 'Беш дугаар хүн',
'saturday'      => 'Чартык улуг хүн',
'january'       => 'Бир ай',
'february'      => 'ийи ай',
'march'         => 'Үш ай',
'april'         => 'Дөрт ай',
'may_long'      => 'Беш ай',
'june'          => 'Алды ай',
'july'          => 'Чеди ай',
'august'        => 'Сес ай',
'september'     => 'Тос ай',
'october'       => 'Он ай',
'november'      => 'Он бир ай',
'december'      => 'Он ийи ай',
'january-gen'   => 'Бир ай',
'february-gen'  => 'Ийи ай',
'march-gen'     => 'Үш ай',
'april-gen'     => 'Дөрт ай',
'may-gen'       => 'Беш ай',
'june-gen'      => 'Алды ай',
'july-gen'      => 'Чеди ай',
'august-gen'    => 'Сес ай',
'september-gen' => 'Тос ай',
'october-gen'   => 'Он ай',
'november-gen'  => 'Он бир ай',
'december-gen'  => 'Он ийи ай',
'jan'           => '1.ай',
'feb'           => '2.ай',
'mar'           => '3.ай',
'apr'           => '4.ай',
'may'           => '5.ай',
'jun'           => '6.ай',
'jul'           => '7.ай',
'aug'           => '8.ай',
'sep'           => '9.ай',
'oct'           => '10.ай',
'nov'           => '11.ай',
'dec'           => '12.ай',

# Categories related messages
'pagecategories'           => '{{PLURAL:$1|Бөлүк|Бөлүктер}}',
'category_header'          => '"$1" деп бөлүкте арыннар',
'subcategories'            => 'Бичии бөлүктер',
'category-media-header'    => '"$1" деп бөлүкте медиа',
'category-empty'           => "''Амгы бо бөлүкте медиа база арыннар чок.''",
'hidden-categories'        => '{{PLURAL:$1|Чажыт бөлүк|Чажыт бөлүктер}}',
'hidden-category-category' => 'Чажыт бөлүктер', # Name of the category where hidden categories will be listed

'about'          => 'Дугайында',
'article'        => 'Допчу арын',
'newwindow'      => '(чаа көзенээ ажыытынар)',
'cancel'         => 'Соксаары',
'qbfind'         => 'Тывар',
'qbbrowse'       => 'Ажыдар',
'qbedit'         => 'Өскертир',
'qbpageoptions'  => 'Бо арын',
'qbmyoptions'    => 'Мээң арыннарым',
'qbspecialpages' => 'Тускай арыннар',
'moredotdotdot'  => 'Ам-даа...',
'mypage'         => 'Мээң арыным',
'mytalk'         => 'Мээң чугаалажырым',
'anontalk'       => 'Бо ИП-адрестиң чугаа',
'navigation'     => 'Навигация',
'and'            => '&#32;болгаш',

'errorpagetitle'    => 'Алдаг',
'returnto'          => '$1 деп арынже эглири.',
'tagline'           => '{{grammar:ablative|{{SITENAME}}}}',
'help'              => 'Дуза',
'search'            => 'Дилээри',
'searchbutton'      => 'Дилээри',
'go'                => 'Чоруур',
'searcharticle'     => 'Чорууру',
'history'           => 'Арынның Төөгүзү',
'history_short'     => 'Төөгү',
'info_short'        => 'Медеглел',
'printableversion'  => 'Саазынга үндүрерин көөрү',
'permalink'         => 'Үргүлчү холбаа',
'print'             => 'Саазынга үндүрер',
'edit'              => 'Өскертири',
'create'            => 'Кылыры',
'editthispage'      => 'Бо арынны өскертири',
'create-this-page'  => 'Бо арынны кылыр',
'delete'            => 'Ап каары',
'deletethispage'    => 'Бо арынны ап каар',
'protect'           => 'Камгалаары',
'protect_change'    => 'өскертири',
'protectthispage'   => 'Бо арынны камгалаар',
'unprotect'         => 'Камгалалды ап каар',
'unprotectthispage' => 'Бо арынның камгалалын ап каар',
'newpage'           => 'Чаа арын',
'talkpage'          => 'Бо арын дугайында чугаалажыры',
'talkpagelinktext'  => 'Чугаалажыры',
'specialpage'       => 'Тускай Арын',
'personaltools'     => 'Хууда херекселдер',
'postcomment'       => 'Комментарийни чогаадыр',
'articlepage'       => 'Допчу арынны көөр',
'talk'              => 'Чугаалажыры',
'views'             => 'Көрүштер',
'toolbox'           => 'Херекселдер',
'userpage'          => 'Ажыглакчының арынын көөр',
'projectpage'       => 'Проект арынын көөр',
'imagepage'         => 'Файл арнызын көөр',
'mediawikipage'     => 'Чагаа арынын көөр',
'templatepage'      => 'Хээ арынын көөр',
'viewhelppage'      => 'Дуза арынын көөр',
'categorypage'      => 'Бөлүк арынын көөр',
'viewtalkpage'      => 'Чугаалажырыны көөр',
'otherlanguages'    => 'Өске дылдарга',
'lastmodifiedat'    => 'Бо арын сөөлгү каттап $2, $1 өскерилген.', # $1 date, $2 time
'jumptonavigation'  => 'навигация',
'jumptosearch'      => 'дилээри',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => '{{SITENAME}} дугайында',
'aboutpage'            => 'Project:Дугайында',
'currentevents'        => 'Амгы үеде болуушкуннар',
'currentevents-url'    => 'Project:Амгы үеде болуушкуннар',
'edithelp'             => 'Өскертиринге дуза',
'edithelppage'         => 'Help:Өскертири',
'helppage'             => 'Help:Допчузу',
'mainpage'             => 'Кол Арын',
'mainpage-description' => 'Кол Арын',
'policy-url'           => 'Project:Политика',
'portal'               => 'Ниитилелдиң хаалгазы',
'portal-url'           => 'Project:Ниитилелдиң хаалгазы',

'retrievedfrom'       => '"$1" деп арынында парлаттынган',
'youhavenewmessages'  => 'Силерде $1 ($2) бар.',
'newmessageslink'     => 'чаа чагаалар',
'newmessagesdifflink' => 'бурунгу өскерлиишкин',
'editsection'         => 'өскертири',
'editold'             => 'өскертири',
'editlink'            => 'өскертири',
'editsectionhint'     => '$1 бөгүмнү өскертири',
'toc'                 => 'Допчу',
'showtoc'             => 'көргүзери',
'hidetoc'             => 'чажырары',
'viewdeleted'         => '{{grammar:accusative|$1}} көөр?',
'restorelink'         => '{{PLURAL:$1|$1 балаттынган өскерилгелер}}',
'feedlinks'           => 'Агым:',
'site-rss-feed'       => '$1 РСС Медээ Агымы',
'site-atom-feed'      => '$1 Атом Медээ Агымы',
'page-rss-feed'       => '"$1" РСС Медээ Агымы',
'page-atom-feed'      => '"$1" Атом Медээ Агымы',
'red-link-title'      => '$1 (арынны чок)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Арын',
'nstab-user'      => 'Ажыглакчының арыны',
'nstab-media'     => 'Медиа арыны',
'nstab-special'   => 'Тускай арын',
'nstab-project'   => 'Проект арыны',
'nstab-image'     => 'Файл',
'nstab-mediawiki' => 'Чагаа',
'nstab-template'  => 'Хээ',
'nstab-help'      => 'Дуза',
'nstab-category'  => 'Бөлүк',

# Main script and global functions
'nosuchaction'      => 'Ындыг ажыл чок',
'nosuchspecialpage' => 'Ындыг арын чок',

# General errors
'error'              => 'Алдаг',
'databaseerror'      => 'Медээ шыгжамыры алдаг',
'noconnect'          => 'Буруулуг болдувус! Викиде чамдык техниктиг бергедээшкиннер бар болганындан database серверинче коштунмаан. <br />
$1',
'laggedslavemode'    => 'Оваарымчалыг: Бо арында чаартыышкыннар чок болуп болур',
'readonly'           => 'шоочалаарынга медээ шыгжамыры',
'internalerror'      => 'Иштики алдаг',
'internalerror_info' => 'Иштики алдаг: $1',
'badtitle'           => 'Багай ат',
'viewsource'         => 'Бажы көөрү',

# Login and logout pages
'logouttitle'        => 'Ажыглакчы үнери',
'loginpagetitle'     => 'Ажыглакчы кирери',
'yourname'           => 'Aжыглакчының ады',
'yourpassword'       => 'Чажыт сөс',
'remembermypassword' => 'Адымны сактып алыры',
'login'              => 'Кирери',
'userlogin'          => 'Кирери / кирерини чогаадып кылыры',
'logout'             => 'Үнери',
'userlogout'         => 'Үнери',
'notloggedin'        => 'Кирери евес',
'nologinlink'        => 'Кирерини чогаадып кылыры',
'createaccount'      => 'Кирерини чогаадып кылыр',
'gotaccountlink'     => 'Кирер',
'createaccountmail'  => 'е-чагаа-биле',
'badretype'          => 'Силерниң парлаан чажыт созуңер таарышпас.',
'userexists'         => 'Силерниң парлаан адыңар амгы уеде ажыглаттынып турар. өске аттан шилип алыңар.',
'youremail'          => 'Э-чагааңар:',
'username'           => 'Aжыглакчының ады:',
'yourrealname'       => 'Шын адыңар *',
'yourlanguage'       => 'Дылыңар:',
'yournick'           => 'Шола ат:',
'gender-male'        => 'Эр',
'gender-female'      => 'Кыс',
'email'              => 'Э-чагаа',
'loginerror'         => 'Багай кирери',
'loginsuccesstitle'  => 'Чедимчелиг кирери',
'mailmypassword'     => 'Меңээ чаа чажыт сөсту чорудаары',
'accountcreated'     => 'Кирерини бүдүрген',
'accountcreatedtext' => '$1 ажыглакчының кирерин бүдүрген.',
'loginlanguagelabel' => 'Дыл: $1',

# Password reset dialog
'resetpass'                 => 'Чажыт сөзү өскертир',
'resetpass_header'          => 'Чажыт сөстү катап чогаадып кылыр',
'oldpassword'               => 'Эгри чажыт сөс:',
'newpassword'               => 'Чаа чажыт сөс:',
'resetpass_submit'          => 'Чажыт сөстү чоогадып кылыр база кирер.',
'resetpass_forbidden'       => '{{grammar:locative|{{SITENAME}}}} чажыт сөстү өскертивейн болбас',
'resetpass-submit-loggedin' => 'Чажыт сөзү өскертир',

# Edit page toolbar
'bold_sample'     => 'Карартыр',
'italic_sample'   => 'Ийлендирер',
'link_sample'     => 'Холбаа ады',
'link_tip'        => 'Иштики холбаа',
'extlink_sample'  => 'http://www.example.com холбаа ады',
'extlink_tip'     => 'Даштыкы холбаа ("http://" чүве сактып алыр)',
'headline_sample' => 'Кол сөс сөзүглел',
'nowiki_sample'   => 'Форматтаваан сөзүглелини бээр салыры',
'nowiki_tip'      => 'Вики форматтаарын херекке албас',
'image_sample'    => 'Чижек.jpg',
'media_sample'    => 'Чижек.ogg',
'media_tip'       => 'Файл холбаазы',

# Edit pages
'summary'            => 'Түңнел:',
'subject'            => 'Кол сөс:',
'minoredit'          => 'Бо өскерлиишкин биче-дир',
'watchthis'          => 'Бо арынны хайгаараары',
'savearticle'        => 'Арынны шыгжаары',
'preview'            => 'Чижеглей көөрү',
'showpreview'        => 'Чижеглей көөрү',
'showdiff'           => 'Өскерлиишкиннерни көргүзери',
'missingcommenttext' => 'Комментарийни адаанда чогаадыңар.',
'summary-preview'    => 'Түңнелдү чижеглей көөрү:',
'subject-preview'    => 'Кол сөс чижеглей көөр:',
'nosuchsectiontitle' => 'Ындыг бөлгүм чок',
'loginreqlink'       => 'кирер',
'accmailtitle'       => 'Чажыт сөс чоргустунган.',
'accmailtext'        => '"{{grammar:genitive|$1}}" чажыт сөстү {{grammar:directive1|$2}} чоргузуптувус.',
'newarticle'         => '(Чаа)',
'editing'            => '$1 деп арынны өскертип турар',
'editingsection'     => '$1 деп арынның бөлгүмүн өскертип турар',
'editingcomment'     => '$1 (комментарий) өскертип турар',
'yourtext'           => 'Силерниң сөзүглелиңер',
'yourdiff'           => 'Ылгалдар',
'template-protected' => '(камгалаан)',

# History pages
'nohistory'           => 'Бо арынның өскерлиишкин төөгүзү чок.',
'currentrev'          => 'Амгы үе үндүрери',
'previousrevision'    => '←Артык эрги үндүрери',
'nextrevision'        => 'Артык чаа үндүрери→',
'currentrevisionlink' => 'Амгы үе үндүрери',
'cur'                 => 'амгы',
'next'                => 'соонда',
'last'                => 'бурунгу',
'page_first'          => 'бирги',
'page_last'           => 'сөөлгү',
'deletedrev'          => '[ап каан]',
'histfirst'           => 'Эң эрте',
'histlast'            => 'Эң дээм чаагы',
'historysize'         => '({{PLURAL:$1|$1 байт}})',
'historyempty'        => '(куруг)',

# Revision feed
'history-feed-title' => 'Үндүрериниң төөгүзү',

# Revision deletion
'rev-deleted-comment'    => '(комментарийни ап каан)',
'rev-deleted-user'       => '(ажыглакчының адын ап каан)',
'rev-deleted-event'      => '(болуушкунну ап каан)',
'rev-delundel'           => 'көргүзери/чажырары',
'revisiondelete'         => 'Үндүрерилерни ап каар/диргисир',
'revdelete-hide-comment' => 'Өскерлиишкинниң комментарийн чажырар',
'revdelete-hide-user'    => 'Чогаалчының адын/ИП-адресин чажырар',

# History merging
'mergehistory-reason' => 'Чылдагаан:',

# Diffs
'history-title'           => '"$1" деп арынның үндүрери төөгүзү',
'lineno'                  => '$1 одуруг:',
'compareselectedversions' => 'Шилип алган хевирлери деңнээри',
'diff-width'              => 'калбаа',
'diff-height'             => 'бедии',

# Search results
'searchresults'      => 'Түңнелдер',
'prevn'              => 'бүрүнгү $1',
'nextn'              => 'соонда $1',
'viewprevnext'       => '($1 {{int:pipe-separator}} $2) ($3) көөрү',
'searchhelp-url'     => 'Help:Допчузу',
'search-result-size' => '$1 ({{PLURAL:$2|$2 сөс}})',
'powersearch'        => 'Дилээр',

# Preferences page
'preferences'               => 'Шилиирилер',
'mypreferences'             => 'Мээң шилиирилерим',
'changepassword'            => 'Чажыт сөстү өскертир',
'skin'                      => 'Кеш',
'skin-preview'              => 'Чижеглей көөр',
'math_unknown_error'        => 'билбес алдаг',
'prefs-personal'            => 'Ажыглакчының медээлери',
'prefs-rc'                  => 'Дээм чаагы өскерлиишкиннер',
'prefs-watchlist'           => 'Хайгаарылга даңзызы',
'saveprefs'                 => 'Шыгжаар',
'textboxsize'               => 'Өскертир',
'rows'                      => 'Одуруглар:',
'columns'                   => 'Баганалар:',
'searchresultshead'         => 'Дилээр',
'servertime'                => 'Серверниң шагы:',
'timezoneregion-africa'     => 'Африка',
'timezoneregion-america'    => 'Америка',
'timezoneregion-antarctica' => 'Антарктика',
'timezoneregion-arctic'     => 'Арктика',
'timezoneregion-asia'       => 'Азия',
'timezoneregion-australia'  => 'Австралия',
'timezoneregion-europe'     => 'Европа',
'default'                   => 'ниити',
'files'                     => 'файлдар',

# User rights
'editinguser' => '<b>$1</b> деп ажыглакчыны өскертип турар ([[User talk:$1|{{int:talkpagelinktext}}]] | [[Special:Contributions/$1|{{int:contribslink}}]])',

# Groups
'group'     => 'Бөлүк:',
'group-bot' => 'Боттар',
'group-all' => '(шупту)',

'group-bot-member' => 'Бот',

'grouppage-sysop' => '{{ns:project}}:Администраторлар',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => 'бо арынны өскертир',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|өскерлиишкин}}',
'recentchanges'                     => 'Амгы өскерлиишкиннер',
'rcshowhideminor'                   => 'Бичии өскерлиишкиннерни $1',
'rcshowhidebots'                    => 'Боттарну $1',
'rcshowhideliu'                     => 'Кирер ажыглакчыларны $1',
'rcshowhideanons'                   => 'Ат эвес ажыглакчыларны $1',
'rcshowhidemine'                    => 'Мээң өскерлиишкинимни $1',
'diff'                              => 'ылгал',
'hist'                              => 'төөгү',
'hide'                              => 'чажырары',
'show'                              => 'көргүзери',
'number_of_watching_users_pageview' => '[$1 хайгаараар {{PLURAL:$1|ажыглакчы}}]',
'newsectionsummary'                 => '/* $1 */ чаа бөлгүм',

# Recent changes linked
'recentchangeslinked-page' => 'Арынның ады:',

# Upload
'upload'            => 'Файлды киирери',
'uploadbtn'         => 'Файлды киирер',
'reupload'          => 'Катап киирер',
'uploadnologin'     => 'Кирбес',
'uploaderror'       => 'Кииреринге алдаг',
'filename'          => 'файлдың ады:',
'filedesc'          => 'Түңнел',
'fileuploadsummary' => 'Түңнел:',
'filesource'        => 'Эгези:',
'savefile'          => 'файлды шыгжаар',
'watchthisupload'   => 'Бо арынны хайгаараар',

'upload-file-error' => 'Иштики алдаг',
'upload-misc-error' => 'Билбес кииреринге алдаг',

# Special:ListFiles
'imgfile'               => 'файл',
'listfiles'             => 'Файл даңзызы',
'listfiles_name'        => 'Ат',
'listfiles_user'        => 'Ажыглакчы',
'listfiles_size'        => 'Хемчээл',
'listfiles_description' => 'Тодарадып бижээни',

# File description page
'filehist'           => 'Файлдың төөгүзү',
'filehist-deleteall' => 'шуптуну ап каар',
'filehist-deleteone' => 'мону ап каар',
'filehist-current'   => 'амгы',
'filehist-datetime'  => 'Үе/Шак',
'filehist-user'      => 'Ажыглакчы',
'filehist-filesize'  => 'Файл хемчээли',
'filehist-comment'   => 'Комментарий',
'imagelinks'         => 'Файлдың xолбаалары',
'noimage-linktext'   => 'Ону киирер',

# File reversion
'filerevert-comment' => 'Комментарий:',

# File deletion
'filedelete'         => '$1 деп файлды ап каар',
'filedelete-legend'  => 'Файлды ап каар',
'filedelete-comment' => 'Комментарий:',
'filedelete-submit'  => 'Ап каар',

# MIME search
'download' => 'алыр',

# Unwatched pages
'unwatchedpages' => 'Хайгаарабас арыннар',

# Unused templates
'unusedtemplates'    => 'Ажыглаан эвес хээлер',
'unusedtemplateswlh' => 'өске холбаалар',

# Random page
'randompage' => 'Даап арын',

'brokenredirects-edit'   => '(өскертир)',
'brokenredirects-delete' => '(ап каар)',

'withoutinterwiki' => 'Дыл холбаалар эвес арыннар',

'fewestrevisions' => 'Эң эвээш үндүрери арыннар',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|байт}}',
'ncategories'             => '$1 {{PLURAL:$1|бөлүк}}',
'nlinks'                  => '$1 {{PLURAL:$1|холбаа}}',
'nmembers'                => '$1 {{PLURAL:$1|кежигүн}}',
'nrevisions'              => '$1 {{PLURAL:$1|үндүрери}}',
'nviews'                  => '$1 {{PLURAL:$1|көрүш}}',
'specialpage-empty'       => 'Бо илеткелдиң түңнели чок.',
'lonelypages'             => 'Чааскаан арыннар',
'uncategorizedpages'      => 'Бөлүк эвес арыннар',
'uncategorizedcategories' => 'Бөлүк эвес бөлүктер',
'uncategorizedimages'     => 'Бөлүк эвес файлдар',
'uncategorizedtemplates'  => 'Бөлүк эвес хээлер',
'unusedcategories'        => 'Ажыглаваан бөлүктер',
'unusedimages'            => 'Ажыглаваан файлдар',
'popularpages'            => 'Чоннуң арыннар',
'wantedcategories'        => 'Күзээринге бөлүктер',
'wantedpages'             => 'Күзээрүнге арыннар',
'mostlinked'              => 'Эң холбаалар арыннар',
'mostlinkedcategories'    => 'Эң холбаалар бөлүктер',
'mostlinkedtemplates'     => 'Эң холбаалар хээлер',
'mostcategories'          => 'Эңне бөлүктер арыннар',
'mostimages'              => 'Эң холбаалар файлдар',
'shortpages'              => 'Чолдак арыннар',
'longpages'               => 'Узун арыннар',
'protectedpages'          => 'Камгалаган арыннар',
'listusers'               => 'Ажыглакчы даңзызы',
'newpages'                => 'Чаа арыннар',
'newpages-username'       => 'Ажыглакчының ады:',
'ancientpages'            => 'Эң эрги арыннар',
'move'                    => 'Шимчээри',
'movethispage'            => 'Бо арынны шимчээри',

# Book sources
'booksources-go' => 'Чорууру',

# Special:Log
'specialloguserlabel'  => 'Ажыглакчы:',
'speciallogtitlelabel' => 'Ат:',

# Special:AllPages
'allpages'       => 'Шупту арыннар',
'nextpage'       => 'Соонда арын ($1)',
'prevpage'       => 'Бүрүнгү арын ($1)',
'allarticles'    => 'Шупту арыннар',
'allpagesprev'   => 'Пертинде',
'allpagesnext'   => 'Соонда',
'allpagessubmit' => 'Чорууру',

# Special:Categories
'categories' => 'Бөлүктер',

# Special:ListUsers
'listusers-submit' => 'Көргүзер',

# E-mail user
'emailuser'       => 'Бо ажыглакчыга э-чагааны чорудаары',
'defemailsubject' => '{{grammar:ablative|{{SITENAME}}}} э-чагаа',
'emailfrom'       => 'Кайыын:',
'emailto'         => 'Каяа:',
'emailsubject'    => 'Кол сөс:',
'emailmessage'    => 'Чагаа:',
'emailsend'       => 'Чорудар',

# Watchlist
'watchlist'       => 'Мээң хайгаарылга даңзызым',
'mywatchlist'     => 'Мээң хайгаарылга даңзызым',
'nowatchlist'     => 'Чүү-даа силерниң хайгаарылга даңзызыда чок.',
'watchnologin'    => 'Кирбес',
'watch'           => 'Хайгаараары',
'watchthispage'   => 'Бо арынны хайгаараары',
'unwatch'         => 'Хайгааравас',
'unwatchthispage' => 'Бо арынны хайгаарабас',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Хайгаарап турар...',
'unwatching' => 'Хайгааравайн турар...',

'enotif_newpagetext'           => 'Бо чаа арын-дыр.',
'enotif_impersonal_salutation' => '{{grammar:genitive|{{SITENAME}}}} ажыглакчызы',
'enotif_anon_editor'           => 'ат эвес ажыглакчы $1',

# Delete
'deletepage'     => 'Арынны ап каары',
'exblank'        => 'Арын куруг турган',
'actioncomplete' => 'Ажыл доосту',
'deletedarticle' => '"[[$1]]" деп арынны ап каан',

# Protect
'protectcomment'      => 'Чылдагаан:',
'protect-default'     => '(ниити)',
'protect-level-sysop' => 'Чүгле сисоплар',
'pagesize'            => '(байттар)',

# Restrictions (nouns)
'restriction-edit' => 'Өскертир',
'restriction-move' => 'Шимчээр',

# Undelete
'undeletebtn'            => 'Диргисир',
'undeletecomment'        => 'Комментарий:',
'undelete-search-submit' => 'Дилээр',

# Namespace form on various pages
'blanknamespace' => '(Кол)',

# Contributions
'contributions' => 'Ажыглакчыниң немелделери',
'mycontris'     => 'Мээң немелделерим',
'uctop'         => '(баш)',

'sp-contributions-newbies'  => 'Чүгле чаа кирерилерниң немелделерин көргүзерн',
'sp-contributions-username' => 'ИП-адрес азы ажыглачының ады:',
'sp-contributions-submit'   => 'Дилээри',

# What links here
'whatlinkshere'       => 'Pages that link here',
'whatlinkshere-page'  => 'Арын:',
'whatlinkshere-links' => '← холбаалар',

# Block/unblock
'ipaddress'                => 'ИП-адрес',
'ipadressorusername'       => 'ИП-адрес азы aжыглaкчының aды',
'ipbreason'                => 'Чылдагаан:',
'ipbreasonotherlist'       => 'Өске чылдагаан',
'ipbother'                 => 'Өске шак:',
'ipbotheroption'           => 'өске',
'ipbotherreason'           => 'Өске/немелде чылдагаан:',
'badipaddress'             => 'Багай ИП-адрес',
'ipblocklist-username'     => 'Ажыглакчының ады азы ИП-адрес:',
'ipblocklist-submit'       => 'Дилээр',
'infiniteblock'            => 'кезээ-мөңгеде',
'contribslink'             => 'немелделер',
'block-log-flags-anononly' => 'чүгле ат эвес ажыглакчылар',

# Developer tools
'lockdb'    => 'Медээ шыгжамырын шоочалаар',
'unlockdb'  => 'Медээ шыгжамырын ажыттынар',
'lockbtn'   => 'Медээ шыгжамырын шоочалаар',
'unlockbtn' => 'Медээ шыгжамырын ажыттынар',

# Move page
'move-page-legend' => 'Арынны шимчээр',
'movearticle'      => 'Бо арынны шимчээри:',
'move-watch'       => 'Бо арынны хайгаараары',
'movepagebtn'      => 'Арынны шимчээри',
'movereason'       => 'Чылдагаан:',
'delete_and_move'  => 'Ап каар болгаш шимчээр',

# Namespace 8 related
'allmessages'        => 'Системниң дыңнадыглары',
'allmessagesname'    => 'Ат',
'allmessagesdefault' => 'Ниити сөзүглел',
'allmessagescurrent' => 'Амгы сөзүглел',

# Special:Import
'import-comment' => 'Комментарий:',

# Import log
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|үндүрери}}',

# Tooltip help for the actions
'tooltip-pt-userpage'       => 'Силерниң ажыглакчы арыныңнар',
'tooltip-pt-mytalk'         => 'Силерниң чугаалажыр арныңар',
'tooltip-pt-mycontris'      => 'Силерниң немелделериңерның даңзызы',
'tooltip-pt-logout'         => 'Үнери',
'tooltip-ca-talk'           => 'Допчу арны дугайында чыгаалажыры',
'tooltip-ca-protect'        => 'Бо арынны камгалаары',
'tooltip-ca-delete'         => 'Бо арынны ап каары',
'tooltip-ca-move'           => 'Бо арынны шимчээри',
'tooltip-search'            => '{{grammar:locative|{{SITENAME}}}} дилээри',
'tooltip-p-logo'            => 'Кол Арын',
'tooltip-n-mainpage'        => 'Кол Арынны баары',
'tooltip-n-recentchanges'   => 'Викиниң дээм чагы өскерлиишкиннери',
'tooltip-feed-rss'          => 'Бо арының РСС медээ агымы',
'tooltip-feed-atom'         => 'Бо арының Атом медээ агымы',
'tooltip-t-contributions'   => 'Бо ажыглакчының немелделериниң даңзазын көөрү.',
'tooltip-t-emailuser'       => 'Бо ажыглакчыга э-чагааны чорудаары',
'tooltip-t-upload'          => 'Файлдар киирери',
'tooltip-t-specialpages'    => 'Шупту тускай арыннар даңзызы',
'tooltip-ca-nstab-main'     => 'Допчы арынын көөрү',
'tooltip-ca-nstab-user'     => 'Ажыглакчының арынын көөрү',
'tooltip-ca-nstab-media'    => 'Медиа арынын көөр',
'tooltip-ca-nstab-project'  => 'Проект арнызын көөрү',
'tooltip-ca-nstab-image'    => 'Файлдың арынын көөрү',
'tooltip-ca-nstab-template' => 'Хээни көөрү',
'tooltip-ca-nstab-help'     => 'Дуза арынын көөр',
'tooltip-ca-nstab-category' => 'Бөлүк арынын көөрү',
'tooltip-save'              => 'Силерниң өскерлиишкиннериңерни шыгжаары',

# Attribution
'anonymous' => '{{grammar:genitive|{{SITENAME}}}} ат эвес {{PLURAL:$1|ажыглакчызы|ажыглакчылары}}',

# Skin names
'skinname-standard'    => 'Classic',
'skinname-nostalgia'   => 'Nostalgia',
'skinname-cologneblue' => 'Cologne Blue',
'skinname-monobook'    => 'Моно-Ном',
'skinname-myskin'      => 'MySkin',
'skinname-chick'       => 'Chick',

# Image deletion
'filedelete-missing' => '"$1" деп файл чок, ынчангаш ол ап калдынмас.',

# Browsing diffs
'previousdiff' => '← Бүрүнгү үндүрери',
'nextdiff'     => 'Соонда үндүрери →',

# Media information
'widthheightpage' => '$1x$2, $3 {{PLURAL:$3|арын}}',

# Special:NewFiles
'showhidebots' => '(боцду $1)',
'noimages'     => 'Чуруклар чок.',
'ilsubmit'     => 'Дилээр',

# EXIF tags
'exif-imagewidth'       => 'Калбаа',
'exif-imagelength'      => 'Бедик',
'exif-imagedescription' => 'Чуруктуң ады',
'exif-artist'           => 'Чогаадыкчы',
'exif-usercomment'      => 'Ажыглакчы комментарийлери',

'exif-subjectdistancerange-2' => 'Чоок көрүш',
'exif-subjectdistancerange-3' => 'ырак көрүш',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'шупту',
'imagelistall'     => 'шупту',
'watchlistall2'    => 'шупту',
'namespacesall'    => 'шупту',
'monthsall'        => 'шупту',

# Multipage image navigation
'imgmultipageprev' => '← бүрүнгү арын',
'imgmultipagenext' => 'соонда арын →',
'imgmultigo'       => 'Чоруур',

# Table pager
'table_pager_next'         => 'Соонда арын',
'table_pager_prev'         => 'Бүрүнгү арын',
'table_pager_first'        => 'Бирги арын',
'table_pager_last'         => 'Сөөлгү арын',
'table_pager_limit_submit' => 'Чоруур',
'table_pager_empty'        => 'Түңнеллер чок',

# Auto-summaries
'autosumm-new' => 'Чаа арын: $1',

# Watchlist editor
'watchlistedit-normal-title'  => 'Хайгаарылга даңзын өскертир',
'watchlistedit-normal-submit' => 'Адарны ап каар',
'watchlistedit-raw-title'     => 'Чиг хайгаарылга даңзын өскертир',
'watchlistedit-raw-legend'    => 'Чиг хайгаарылга даңзын өскертир',
'watchlistedit-raw-titles'    => 'Адар:',

# Watchlist editing tools
'watchlisttools-edit' => 'Хайгаарылга даңзызын көөрү болгаш өскертири',
'watchlisttools-raw'  => 'Чиг хайгаарылга даңзызын өскертири',

# Special:Version
'version' => 'Үндүрери', # Not used as normal message but as header for the special page itself

# Special:SpecialPages
'specialpages' => 'Тускай арыннар',

);
