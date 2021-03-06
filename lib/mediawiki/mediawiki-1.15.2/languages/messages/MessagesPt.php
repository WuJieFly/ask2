<?php
/** Portuguese (Português)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Crazymadlover
 * @author Daemorris
 * @author Giro720
 * @author Hamilton Abreu
 * @author Heldergeovane
 * @author Jorge Morais
 * @author Leonardo.stabile
 * @author Lijealso
 * @author Lugusto
 * @author MCruz
 * @author Malafaya
 * @author Manuel Menezes de Sequeira
 * @author Minh Nguyen
 * @author Nuno Tavares
 * @author Paulo Juntas
 * @author Rafael Vargas
 * @author Rei-artur
 * @author Remember the dot
 * @author RmSilva
 * @author Rodrigo Calanca Nishino
 * @author Sir Lestaty de Lioncourt
 * @author Sérgio Ribeiro
 * @author Urhixidur
 * @author Villate
 * @author Waldir
 * @author Yves Marques Junqueira
 * @author לערי ריינהארט
 * @author 555
 */

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Especial',
	NS_TALK             => 'Discussão',
	NS_USER             => 'Usuário',
	NS_USER_TALK        => 'Usuário_Discussão',
	NS_PROJECT_TALK     => '$1_Discussão',
	NS_FILE             => 'Ficheiro',
	NS_FILE_TALK        => 'Ficheiro_Discussão',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_Discussão',
	NS_TEMPLATE         => 'Predefinição',
	NS_TEMPLATE_TALK    => 'Predefinição_Discussão',
	NS_HELP             => 'Ajuda',
	NS_HELP_TALK        => 'Ajuda_Discussão',
	NS_CATEGORY         => 'Categoria',
	NS_CATEGORY_TALK    => 'Categoria_Discussão',
);

$namespaceAliases = array(
	'Imagem' => NS_FILE,
	'Imagem_Discussão' => NS_FILE_TALK,
	'Arquivo' => NS_FILE,
	'Arquivo_Discussão' => NS_FILE_TALK,
);


$defaultDateFormat = 'dmy';

$dateFormats = array(

	'dmy time' => 'H\hi\m\i\n',
	'dmy date' => 'j \d\e F \d\e Y',
	'dmy both' => 'H\hi\m\i\n \d\e j \d\e F \d\e Y',

);

$separatorTransformTable = array(',' => ' ', '.' => ',' );
#$linkTrail = '/^([a-z]+)(.*)$/sD';# ignore list

$specialPageAliases = array(
	'DoubleRedirects'           => array( 'Redireccionamentos duplos', 'Redirecionamentos duplos' ),
	'BrokenRedirects'           => array( 'Redireccionamentos quebrados', 'Redirecionamentos quebrados' ),
	'Disambiguations'           => array( 'Páginas de desambiguação', 'Desambiguar', 'Desambiguações' ),
	'Userlogin'                 => array( 'Entrar', 'Login' ),
	'Userlogout'                => array( 'Sair', 'Logout' ),
	'CreateAccount'             => array( 'Criar conta' ),
	'Preferences'               => array( 'Preferências' ),
	'Watchlist'                 => array( 'Páginas vigiadas', 'Artigos vigiados', 'Vigiados' ),
	'Recentchanges'             => array( 'Mudanças recentes' ),
	'Upload'                    => array( 'Carregar imagem', 'Carregar ficheiro', 'Carregar arquivo', 'Enviar' ),
	'Listfiles'                 => array( 'Lista de imagens', 'Lista de ficheiros', 'Lista de arquivos' ),
	'Newimages'                 => array( 'Imagens novas', 'Ficheiros novos', 'Arquivos novos' ),
	'Listusers'                 => array( 'Lista de utilizadores', 'Lista de usuários' ),
	'Listgrouprights'           => array( 'Listar privilégios de grupos' ),
	'Statistics'                => array( 'Estatísticas' ),
	'Randompage'                => array( 'Aleatória', 'Aleatório', 'Página aleatória', 'Artigo aleatório' ),
	'Lonelypages'               => array( 'Páginas órfãs', 'Artigos órfãos', 'Páginas sem afluentes', 'Artigos sem afluentes' ),
	'Uncategorizedpages'        => array( 'Páginas sem categorias', 'Artigos sem categorias' ),
	'Uncategorizedcategories'   => array( 'Categorias sem categorias' ),
	'Uncategorizedimages'       => array( 'Imagens sem categorias', 'Ficheiros sem categorias', 'Arquivos sem categorias' ),
	'Uncategorizedtemplates'    => array( 'Predefinições não categorizadas', 'Predefinições sem categorias' ),
	'Unusedcategories'          => array( 'Categorias não utilizadas', 'Categorias sem uso' ),
	'Unusedimages'              => array( 'Imagens sem uso', 'Imagens não utilizadas', 'Ficheiros sem uso', 'Ficheiros não utilizados', 'Arquivos sem uso', 'Arquivos não utilizados' ),
	'Wantedpages'               => array( 'Páginas em falta', 'Artigos em falta', 'Páginas pedidas', 'Artigos pedidos' ),
	'Wantedcategories'          => array( 'Categorias em falta', 'Categorias inexistentes' ),
	'Wantedfiles'               => array( 'Ficheiros em falta', 'Arquivos em falta', 'Imagens em falta' ),
	'Wantedtemplates'           => array( 'Predefinições em falta' ),
	'Mostlinked'                => array( 'Páginas com mais afluentes', 'Artigos com mais afluentes' ),
	'Mostlinkedcategories'      => array( 'Categorias com mais afluentes' ),
	'Mostlinkedtemplates'       => array( 'Predefinições com mais afluentes' ),
	'Mostimages'                => array( 'Imagens com mais afluentes', 'Ficheiros com mais afluentes', 'Arquivos com mais afluentes' ),
	'Mostcategories'            => array( 'Páginas com mais categorias', 'Artigos com mais categorias' ),
	'Mostrevisions'             => array( 'Páginas com mais edições', 'Artigos com mais edições' ),
	'Fewestrevisions'           => array( 'Páginas com menos edições', 'Artigos com menos edições', 'Artigos menos editados' ),
	'Shortpages'                => array( 'Páginas curtas', 'Artigos curtos' ),
	'Longpages'                 => array( 'Páginas longas', 'Artigos extensos' ),
	'Newpages'                  => array( 'Páginas novas', 'Artigos novos' ),
	'Ancientpages'              => array( 'Páginas inativas', 'Artigos inativos' ),
	'Deadendpages'              => array( 'Páginas sem saída', 'Artigos sem saída' ),
	'Protectedpages'            => array( 'Páginas protegidas', 'Artigos protegidos' ),
	'Protectedtitles'           => array( 'Títulos protegidos' ),
	'Allpages'                  => array( 'Todas as páginas', 'Todos os artigos', 'Todas páginas', 'Todos artigos' ),
	'Prefixindex'               => array( 'Índice de prefixo', 'Índice por prefixo' ),
	'Ipblocklist'               => array( 'Registo de bloqueios', 'Registro de bloqueios', 'IPs bloqueados', 'Utilizadores bloqueados', 'Usuários bloqueados' ),
	'Specialpages'              => array( 'Páginas especiais' ),
	'Contributions'             => array( 'Contribuições' ),
	'Emailuser'                 => array( 'Contactar utilizador', 'Contactar usuário', 'Contatar usuário' ),
	'Confirmemail'              => array( 'Confirmar e-mail', 'Confirmar email' ),
	'Whatlinkshere'             => array( 'Páginas afluentes', 'Artigos afluentes' ),
	'Recentchangeslinked'       => array( 'Novidades relacionadas', 'Mudanças relacionadas' ),
	'Movepage'                  => array( 'Mover', 'Mover página', 'Mover artigo' ),
	'Blockme'                   => array( 'Bloquear-me', 'Auto-bloqueio' ),
	'Booksources'               => array( 'Fontes de livros' ),
	'Categories'                => array( 'Categorias' ),
	'Export'                    => array( 'Exportar' ),
	'Version'                   => array( 'Versão', 'Sobre' ),
	'Allmessages'               => array( 'Todas as mensagens', 'Todas mensagens' ),
	'Log'                       => array( 'Registo', 'Registro', 'Registos', 'Registros' ),
	'Blockip'                   => array( 'Bloquear', 'Bloquear IP', 'Bloquear utilizador', 'Bloquear usuário' ),
	'Undelete'                  => array( 'Restaurar', 'Restaurar páginas eliminadas', 'Restaurar artigos eliminados' ),
	'Import'                    => array( 'Importar' ),
	'Lockdb'                    => array( 'Bloquear a base de dados', 'Bloquear banco de dados' ),
	'Unlockdb'                  => array( 'Desbloquear a base de dados', 'Desbloquear banco de dados' ),
	'Userrights'                => array( 'Privilégios', 'Direitos', 'Estatutos' ),
	'MIMEsearch'                => array( 'Busca MIME' ),
	'FileDuplicateSearch'       => array( 'Busca de ficheiros duplicados', 'Busca de arquivos duplicados' ),
	'Unwatchedpages'            => array( 'Páginas não-vigiadas', 'Páginas não vigiadas', 'Artigos não-vigiados', 'Artigos não vigiados' ),
	'Listredirects'             => array( 'Redireccionamentos', 'Redirecionamentos', 'Lista de redireccionamentos', 'Lista de redirecionamentos' ),
	'Revisiondelete'            => array( 'Eliminar edição', 'Eliminar revisão', 'Apagar edição', 'Apagar revisão' ),
	'Unusedtemplates'           => array( 'Predefinições sem uso', 'Predefinições não utilizadas' ),
	'Randomredirect'            => array( 'Redireccionamento aleatório', 'Redirecionamento aleatório' ),
	'Mypage'                    => array( 'Minha página' ),
	'Mytalk'                    => array( 'Minha discussão' ),
	'Mycontributions'           => array( 'Minhas contribuições', 'Minhas edições', 'Minhas constribuições' ),
	'Listadmins'                => array( 'Administradores', 'Admins', 'Lista de administradores', 'Lista de admins' ),
	'Listbots'                  => array( 'Bots', 'Lista de bots' ),
	'Popularpages'              => array( 'Páginas populares', 'Artigos populares' ),
	'Search'                    => array( 'Busca', 'Buscar', 'Procurar', 'Pesquisar', 'Pesquisa' ),
	'Resetpass'                 => array( 'Repor senha', 'Zerar senha' ),
	'Withoutinterwiki'          => array( 'Páginas sem interwikis', 'Artigos sem interwikis' ),
	'MergeHistory'              => array( 'Fundir históricos', 'Fundir edições' ),
	'Filepath'                  => array( 'Diretório de ficheiro', 'Diretório de arquivo' ),
	'Invalidateemail'           => array( 'Invalidar e-mail' ),
	'Blankpage'                 => array( 'Página em branco' ),
	'LinkSearch'                => array( 'Pesquisar links' ),
	'DeletedContributions'      => array( 'Contribuições eliminadas', 'Edições eliminadas' ),
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Sublinhar ligações:',
'tog-highlightbroken'         => 'Formatar ligações para páginas inexistentes <a href="" class="new">assim</a> (alternativa: assim<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Justificar parágrafos',
'tog-hideminor'               => 'Esconder edições menores nas mudanças recentes',
'tog-hidepatrolled'           => 'Esconder edições patrulhadas nas mudanças recentes',
'tog-newpageshidepatrolled'   => 'Esconder páginas patrulhadas na lista de páginas novas',
'tog-extendwatchlist'         => 'Listagem expandida de todas as alterações às páginas vigiadas, não apenas das mais recentes',
'tog-usenewrc'                => 'Usar a versão melhorada das mudanças recentes (requer JavaScript)',
'tog-numberheadings'          => 'Auto-numerar cabeçalhos',
'tog-showtoolbar'             => 'Mostrar barra de edição (JavaScript)',
'tog-editondblclick'          => 'Editar páginas quando houver um clique duplo (JavaScript)',
'tog-editsection'             => 'Possibilitar a edição de secções com ligações [editar]',
'tog-editsectiononrightclick' => 'Possibilitar a edição de secções por clique com o botão direito no título da secção (JavaScript)',
'tog-showtoc'                 => 'Mostrar índice (para páginas com mais de três secções)',
'tog-rememberpassword'        => 'Recordar a minha palavra-chave entre sessões',
'tog-editwidth'               => 'Aumentar a largura da caixa de edição para preencher todo o ecrã',
'tog-watchcreations'          => 'Adicionar as páginas que eu criar às minhas páginas vigiadas',
'tog-watchdefault'            => 'Adicionar as páginas que eu editar às minhas páginas vigiadas',
'tog-watchmoves'              => 'Adicionar as páginas que eu mover às minhas páginas vigiadas',
'tog-watchdeletion'           => 'Adicionar as páginas que eu eliminar às minhas páginas vigiadas',
'tog-minordefault'            => 'Por omissão, marcar todas as edições como menores',
'tog-previewontop'            => 'Mostrar a antevisão antes da caixa de edição',
'tog-previewonfirst'          => 'Mostrar a antevisão na primeira edição',
'tog-nocache'                 => 'Desactivar caching de páginas',
'tog-enotifwatchlistpages'    => 'Notificar-me por correio electrónico quando uma página vigiada é alterada',
'tog-enotifusertalkpages'     => 'Notificar-me por correio electrónico quando a minha página de discussão é editada',
'tog-enotifminoredits'        => 'Notificar-me por correio electrónico também quando as edições forem menores',
'tog-enotifrevealaddr'        => 'Revelar o meu endereço de correio electrónico nas notificações',
'tog-shownumberswatching'     => 'Mostrar o número de utilizadores a vigiar',
'tog-fancysig'                => 'Tratar assinatura como wikitexto (sem ligação automática)',
'tog-externaleditor'          => 'Por omissão, utilizar um editor externo (só para utilizadores avançados, exige configurações adicionais no seu computador)',
'tog-externaldiff'            => 'Por omissão, utilizar diferenças externas (só para utilizadores avançados, exige configurações adicionais no seu computador)',
'tog-showjumplinks'           => 'Possibilitar ligações de acessibilidade "{{int:jumpto}}"',
'tog-uselivepreview'          => 'Usar a antevisão em tempo real (JavaScript) (Experimental)',
'tog-forceeditsummary'        => 'Avisar-me ao introduzir um sumário vazio',
'tog-watchlisthideown'        => 'Esconder as minhas edições ao listar mudanças às páginas vigiadas',
'tog-watchlisthidebots'       => 'Esconder edições de robôs ao listar mudanças às páginas vigiadas',
'tog-watchlisthideminor'      => 'Esconder edições menores ao listar mudanças às páginas vigiadas',
'tog-watchlisthideliu'        => 'Esconder edições de utilizadores autenticados ao listar mudanças às páginas vigiadas',
'tog-watchlisthideanons'      => 'Esconder edições de utilizadores anónimos ao listar mudanças às páginas vigiadas',
'tog-watchlisthidepatrolled'  => 'Esconder edições patrulhadas ao listar mudanças às páginas vigiadas',
'tog-nolangconversion'        => 'Impossibilitar a conversão de variantes da língua',
'tog-ccmeonemails'            => 'Enviar-me cópias do correio electrónico que eu enviar a outros utilizadores',
'tog-diffonly'                => 'Não mostrar o conteúdo da página ao comparar duas edições',
'tog-showhiddencats'          => 'Mostrar categorias ocultas',
'tog-noconvertlink'           => 'Impossibilitar a conversão dos títulos de ligações',
'tog-norollbackdiff'          => 'Omitir diferenças depois de reverter edições em bloco',

'underline-always'  => 'Sempre',
'underline-never'   => 'Nunca',
'underline-default' => 'Usar a configuração do navegador',

# Dates
'sunday'        => 'domingo',
'monday'        => 'segunda-feira',
'tuesday'       => 'terça-feira',
'wednesday'     => 'quarta-feira',
'thursday'      => 'quinta-feira',
'friday'        => 'sexta-feira',
'saturday'      => 'sábado',
'sun'           => 'dom',
'mon'           => 'seg',
'tue'           => 'ter',
'wed'           => 'qua',
'thu'           => 'qui',
'fri'           => 'sex',
'sat'           => 'sáb',
'january'       => 'Janeiro',
'february'      => 'Fevereiro',
'march'         => 'Março',
'april'         => 'Abril',
'may_long'      => 'Maio',
'june'          => 'Junho',
'july'          => 'Julho',
'august'        => 'Agosto',
'september'     => 'Setembro',
'october'       => 'Outubro',
'november'      => 'Novembro',
'december'      => 'Dezembro',
'january-gen'   => 'Janeiro',
'february-gen'  => 'Fevereiro',
'march-gen'     => 'Março',
'april-gen'     => 'Abril',
'may-gen'       => 'Maio',
'june-gen'      => 'Junho',
'july-gen'      => 'Julho',
'august-gen'    => 'Agosto',
'september-gen' => 'Setembro',
'october-gen'   => 'Outubro',
'november-gen'  => 'Novembro',
'december-gen'  => 'Dezembro',
'jan'           => 'Jan.',
'feb'           => 'Fev.',
'mar'           => 'Mar.',
'apr'           => 'Abr.',
'may'           => 'Mai.',
'jun'           => 'Jun.',
'jul'           => 'Jul.',
'aug'           => 'Ago.',
'sep'           => 'Set.',
'oct'           => 'Out.',
'nov'           => 'Nov.',
'dec'           => 'Dez.',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Categoria|Categorias}}',
'category_header'                => 'Páginas na categoria "$1"',
'subcategories'                  => 'Subcategorias',
'category-media-header'          => 'Multimédia na categoria "$1"',
'category-empty'                 => "''Esta categoria não contém actualmente nenhuma página ou ficheiro multimédia.''",
'hidden-categories'              => '{{PLURAL:$1|Categoria oculta|Categorias ocultas}}',
'hidden-category-category'       => 'Categorias ocultas', # Name of the category where hidden categories will be listed
'category-subcat-count'          => '{{PLURAL:$2|Esta categoria só contém a seguinte subcategoria.|Esta categoria contém {{PLURAL:$1|a seguinte subcategoria|as seguintes $1 subcategorias}} (de um total de $2).}}',
'category-subcat-count-limited'  => 'Esta categoria possui {{PLURAL:$1|a seguinte subcategoria|as $1 subcategorias a seguir}}.',
'category-article-count'         => '{{PLURAL:$2|Esta categoria só contém a seguinte página.|Esta categoria contém {{PLURAL:$1|a seguinte página|as seguintes $1 páginas}} (de um total de $2).}}',
'category-article-count-limited' => 'Há, nesta categoria, {{PLURAL:$1|a página a seguir|as $1 páginas a seguir}}.',
'category-file-count'            => '{{PLURAL:$2|Esta categoria só contém o seguinte ficheiro.|Esta categoria contém {{PLURAL:$1|o seguinte ficheiro|os seguintes $1 ficheiros}} (de um total de $2).}}',
'category-file-count-limited'    => 'Nesta categoria há {{PLURAL:$1|um ficheiro|$1 ficheiros}}.',
'listingcontinuesabbrev'         => 'cont.',

'mainpagetext'      => "<big>'''MediaWiki instalado com sucesso.'''</big>",
'mainpagedocfooter' => 'Consulte o [http://meta.wikimedia.org/wiki/Help:Contents Guia de Utilizadores] para informações sobre o uso do software wiki.

== Onde começar ==

* [http://www.mediawiki.org/wiki/Manual:Configuration_settings Lista de opções de configuração]
* [http://www.mediawiki.org/wiki/Manual:FAQ Perguntas e respostas frequentes sobre o MediaWiki]
* [https://lists.wikimedia.org/mailman/listinfo/mediawiki-announce Subscreva a lista de divulgação de novas versões do MediaWiki]',

'about'          => 'Sobre',
'article'        => 'Página de conteúdo',
'newwindow'      => '(abre numa nova janela)',
'cancel'         => 'Cancelar',
'qbfind'         => 'Procurar',
'qbbrowse'       => 'Navegar',
'qbedit'         => 'Editar',
'qbpageoptions'  => 'Esta página',
'qbpageinfo'     => 'Contexto',
'qbmyoptions'    => 'Minhas páginas',
'qbspecialpages' => 'Páginas especiais',
'moredotdotdot'  => 'Mais...',
'mypage'         => 'Minha página',
'mytalk'         => 'Minha discussão',
'anontalk'       => 'Discussão para este IP',
'navigation'     => 'Navegação',
'and'            => '&#32;e',

# Metadata in edit box
'metadata_help' => 'Metadados:',

'errorpagetitle'    => 'Erro',
'returnto'          => 'Voltar para $1.',
'tagline'           => 'Da {{SITENAME}}',
'help'              => 'Ajuda',
'search'            => 'Pesquisa',
'searchbutton'      => 'Pesquisar',
'go'                => 'Prosseguir',
'searcharticle'     => 'Ir',
'history'           => 'Histórico',
'history_short'     => 'Histórico',
'updatedmarker'     => 'actualizado desde a minha última visita',
'info_short'        => 'Informação',
'printableversion'  => 'Versão para impressão',
'permalink'         => 'Ligação permanente',
'print'             => 'Imprimir',
'edit'              => 'Editar',
'create'            => 'Criar',
'editthispage'      => 'Editar esta página',
'create-this-page'  => 'Criar/iniciar esta página',
'delete'            => 'Eliminar',
'deletethispage'    => 'Eliminar esta página',
'undelete_short'    => 'Restaurar {{PLURAL:$1|uma edição|$1 edições}}',
'protect'           => 'Proteger',
'protect_change'    => 'alterar',
'protectthispage'   => 'Proteger esta página',
'unprotect'         => 'Desproteger',
'unprotectthispage' => 'Desproteger esta página',
'newpage'           => 'Nova página',
'talkpage'          => 'Discutir esta página',
'talkpagelinktext'  => 'discussão',
'specialpage'       => 'Página especial',
'personaltools'     => 'Ferramentas pessoais',
'postcomment'       => 'Nova secção',
'articlepage'       => 'Ver página de conteúdo',
'talk'              => 'Discussão',
'views'             => 'Acessos',
'toolbox'           => 'Ferramentas',
'userpage'          => 'Ver página de utilizador',
'projectpage'       => 'Ver página de projecto',
'imagepage'         => 'Ver página de ficheiro',
'mediawikipage'     => 'Ver página de mensagens',
'templatepage'      => 'Ver página de predefinições',
'viewhelppage'      => 'Ver página de ajuda',
'categorypage'      => 'Ver página de categorias',
'viewtalkpage'      => 'Ver discussão',
'otherlanguages'    => 'Noutras línguas',
'redirectedfrom'    => '(Redireccionado de $1)',
'redirectpagesub'   => 'Página de redireccionamento',
'lastmodifiedat'    => 'Esta página foi modificada pela última vez às $2 de $1.', # $1 date, $2 time
'viewcount'         => 'Esta página foi acedida {{PLURAL:$1|uma vez|$1 vezes}}.',
'protectedpage'     => 'Página protegida',
'jumpto'            => 'Ir para:',
'jumptonavigation'  => 'navegação',
'jumptosearch'      => 'pesquisa',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => 'Sobre a {{SITENAME}}',
'aboutpage'            => 'Project:Sobre',
'copyright'            => 'Conteúdo disponibilizado nos termos da $1.',
'copyrightpagename'    => 'Direitos de autor de {{SITENAME}}',
'copyrightpage'        => '{{ns:project}}:Direitos_de_autor',
'currentevents'        => 'Notícias',
'currentevents-url'    => 'Project:Notícias',
'disclaimers'          => 'Alerta de Conteúdo',
'disclaimerpage'       => 'Project:Aviso_geral',
'edithelp'             => 'Ajuda de edição',
'edithelppage'         => 'Help:Editar',
'faq'                  => 'FAQ',
'faqpage'              => 'Project:FAQ',
'helppage'             => 'Help:Conteúdos',
'mainpage'             => 'Página principal',
'mainpage-description' => 'Página principal',
'policy-url'           => 'Project:Políticas',
'portal'               => 'Portal comunitário',
'portal-url'           => 'Project:Portal comunitário',
'privacy'              => 'Política de privacidade',
'privacypage'          => 'Project:Política_de_privacidade',

'badaccess'        => 'Erro de permissão',
'badaccess-group0' => 'Não está autorizado a executar a acção solicitada.',
'badaccess-groups' => 'A acção que solicitou está limitada a utilizadores {{PLURAL:$2|do grupo|de um dos seguintes grupos}}: $1.',

'versionrequired'     => 'É necessária a versão $1 do MediaWiki',
'versionrequiredtext' => 'É necessária a versão $1 do MediaWiki para usar esta página.
Consulte a página da [[Special:Version|versão do sistema]].',

'ok'                      => 'OK',
'retrievedfrom'           => 'Obtido em "$1"',
'youhavenewmessages'      => 'Tem $1 ($2).',
'newmessageslink'         => 'mensagens novas',
'newmessagesdifflink'     => 'comparar com a penúltima revisão',
'youhavenewmessagesmulti' => 'Tem mensagens novas em $1',
'editsection'             => 'editar',
'editold'                 => 'editar',
'viewsourceold'           => 'ver código',
'editlink'                => 'editar',
'viewsourcelink'          => 'ver fonte',
'editsectionhint'         => 'Editar secção: $1',
'toc'                     => 'Índice',
'showtoc'                 => 'mostrar',
'hidetoc'                 => 'esconder',
'thisisdeleted'           => 'Ver ou restaurar $1?',
'viewdeleted'             => 'Ver $1?',
'restorelink'             => '{{PLURAL:$1|uma edição eliminada|$1 edições eliminadas}}',
'feedlinks'               => "''Feed'':",
'feed-invalid'            => "Tipo de subscrição de ''feed'' inválido.",
'feed-unavailable'        => 'Os "feeds" não se encontram disponíveis',
'site-rss-feed'           => "''Feed'' RSS $1",
'site-atom-feed'          => "''Feed'' Atom $1",
'page-rss-feed'           => "''Feed'' RSS de \"\$1\"",
'page-atom-feed'          => "''Feed'' Atom de \"\$1\"",
'red-link-title'          => '$1 (página não existe)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Página',
'nstab-user'      => 'Página de utilizador',
'nstab-media'     => 'Multimédia',
'nstab-special'   => 'Página especial',
'nstab-project'   => 'Página de projecto',
'nstab-image'     => 'Ficheiro',
'nstab-mediawiki' => 'Mensagem',
'nstab-template'  => 'Predefinição',
'nstab-help'      => 'Ajuda',
'nstab-category'  => 'Categoria',

# Main script and global functions
'nosuchaction'      => 'Acção não existente',
'nosuchactiontext'  => 'A acção especificada pela URL é inválida.
É possível que tenha escrito mal a URL ou seguido uma ligação incorrecta.
Isto pode também ser indicativo de um defeito no programa usado pela {{SITENAME}}.',
'nosuchspecialpage' => 'Esta página especial não existe',
'nospecialpagetext' => '<strong>Solicitou uma página especial inválida.</strong>

Uma lista das páginas especiais válidas pode ser encontrada em [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error'                => 'Erro',
'databaseerror'        => 'Erro na base de dados',
'dberrortext'          => 'Ocorreu um erro sintáctico na pesquisa à base de dados.
Isto pode indicar um defeito neste programa.
A última tentativa de consulta à base de dados foi:
<blockquote><tt>$1</tt></blockquote>
na função "<tt>$2</tt>".
A base de dados devolveu o erro "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'Ocorreu um erro sintáctico na pesquisa à base de dados.
A última tentativa de consulta à base de dados foi:
"$1"
na função "$2".
A base de dados devolveu o erro "$3: $4"',
'noconnect'            => 'Desculpe! O wiki está a experimentar algumas dificuldades técnicas e não pode contactar o servidor da base de dados.<br />
$1',
'nodb'                 => 'Não foi possível seleccionar a base de dados $1',
'cachederror'          => 'A página apresentada é uma cópia em cache da página requisitada e pode não estar actualizada.',
'laggedslavemode'      => "'''Aviso:''' A página pode não conter as actualizações mais recentes.",
'readonly'             => 'Base de dados trancada (limitada a leituras)',
'enterlockreason'      => 'Introduza um motivo para trancar, incluindo uma estimativa de quando poderá ser destrancada',
'readonlytext'         => 'A base de dados está trancada para impedir a inserção e modificação de dados, provavelmente para uma manutenção de rotina, após a qual a situação será normalizada.

O administrador que a trancou deu a seguinte explicação: $1',
'missing-article'      => 'A base de dados não encontrou o texto de uma página que deveria ter encontrado, com o nome "$1" $2.

Geralmente, esta situação ocorre ao clicar uma ligação para diferenças desactualizada ou para o histórico de uma página que tenha sido removida.

Se nenhuma destas situações se verifica, pode ter encontrado um defeito no programa.
Por favor, anote a URL e reporte este incidente a um [[Special:ListUsers/sysop|administrador]].',
'missingarticle-rev'   => '(revisão#: $1)',
'missingarticle-diff'  => '(Dif.: $1, $2)',
'readonly_lag'         => 'A base de dados foi automaticamente trancada enquanto os servidores secundários se sincronizam com o primário',
'internalerror'        => 'Erro interno',
'internalerror_info'   => 'Erro interno: $1',
'filecopyerror'        => 'Não foi possível copiar o ficheiro "$1" para "$2".',
'filerenameerror'      => 'Não foi possível renomear o ficheiro "$1" para "$2".',
'filedeleteerror'      => 'Não foi possível eliminar o ficheiro "$1".',
'directorycreateerror' => 'Não foi possível criar o directório "$1".',
'filenotfound'         => 'Não foi possível encontrar o ficheiro "$1".',
'fileexistserror'      => 'Não foi possível gravar no ficheiro "$1": ele já existe',
'unexpected'           => 'Valor não esperado: "$1"="$2".',
'formerror'            => 'Erro: Não foi possível enviar o formulário',
'badarticleerror'      => 'Esta acção não pode ser realizada nesta página.',
'cannotdelete'         => 'Não foi possível eliminar a página ou ficheiro especificado (provavelmente por já ter sido eliminada por outra pessoa.)',
'badtitle'             => 'Título inválido',
'badtitletext'         => 'O título de página solicitado era inválido, vazio, ou uma ligação interlínguas ou interwikis incorrecta.
Talvez contenha um ou mais caracteres que não podem ser usados em títulos.',
'perfcached'           => "Os seguintes dados encontram-se armazenados na ''cache'' e podem não estar actualizados.",
'perfcachedts'         => "Os seguintes dados encontram-se armazenados na ''cache'' e foram actualizados pela última vez a $1.",
'querypage-no-updates' => 'As actualizações estão presentemente desactivadas para esta página.
Por enquanto, os dados aqui presentes não poderão ser actualizados.',
'wrong_wfQuery_params' => 'Parâmetros incorrectos para wfQuery()<br />
Função: $1<br />
Consulta: $2',
'viewsource'           => 'Ver conteúdo',
'viewsourcefor'        => 'para $1',
'actionthrottled'      => 'Acção limitada',
'actionthrottledtext'  => "Como medida anti-''spam'', está impedido de realizar esta operação demasiadas vezes num curto espaço de tempo e já excedeu esse limite. Por favor, tente de novo dentro de alguns minutos.",
'protectedpagetext'    => 'Esta página foi protegida contra novas edições.',
'viewsourcetext'       => 'Pode ver e copiar o conteúdo desta página:',
'protectedinterface'   => 'Esta página fornece texto de interface ao software e encontra-se trancada para prevenir abusos.',
'editinginterface'     => "'''Aviso:''' Está a editar uma página usada para fornecer texto de interface ao software. Alterações a esta página afectarão a aparência da interface de utilizador para os outros utilizadores. Para traduções, considere utilizar a [http://translatewiki.net/wiki/Main_Page?setlang=pt translatewiki.net], um projecto destinado à tradução do MediaWiki.",
'sqlhidden'            => '(Consulta SQL em segundo-plano)',
'cascadeprotected'     => 'Esta página foi protegida contra edições por estar incluída {{PLURAL:$1|na página listada|nas páginas listadas}} a seguir, ({{PLURAL:$1|página essa que está protegida|páginas essas que estão protegidas}} com a opção de protecção "em cascata" activada):
$2',
'namespaceprotected'   => "Não possui permissão para editar páginas no espaço nominal '''$1'''.",
'customcssjsprotected' => 'Não possui permissão para editar esta página, porque ela contém as configurações pessoais de outro utilizador.',
'ns-specialprotected'  => 'Não é possível editar páginas especiais',
'titleprotected'       => 'Este título foi protegido contra criação por [[User:$1|$1]].
A justificação foi "\'\'$2\'\'".',

# Virus scanner
'virus-badscanner'     => "Má configuração: antivírus desconhecido: ''$1''",
'virus-scanfailed'     => 'a verificação falhou (código $1)',
'virus-unknownscanner' => 'antivírus desconhecido:',

# Login and logout pages
'logouttitle'                => 'Desautenticar do sistema',
'logouttext'                 => "'''Já não está autenticado.'''

Pode continuar a utilizar a {{SITENAME}} anonimamente, ou pode [[Special:UserLogin|autenticar-se novamente]] com o mesmo nome de utilizador ou com um nome de utilizador diferente.
Tenha em atenção que algumas páginas poderão continuar a ser apresentadas como se ainda estivesse autenticado até limpar a ''cache'' do seu navegador.",
'welcomecreation'            => '== Bem-vindo, $1! ==
A sua conta foi criada.
Não se esqueça de personalizar as suas [[Special:Preferences|preferências na {{SITENAME}}]].',
'loginpagetitle'             => 'Autenticação de utilizador',
'yourname'                   => 'Nome de utilizador:',
'yourpassword'               => 'Palavra-chave:',
'yourpasswordagain'          => 'Repita a palavra-chave:',
'remembermypassword'         => 'Recordar a minha palavra-chave entre sessões',
'yourdomainname'             => 'O seu domínio:',
'externaldberror'            => 'Ocorreu um erro externo à base de dados durante a autenticação ou não lhe é permitido actualizar a sua conta externa.',
'login'                      => 'Autenticação',
'nav-login-createaccount'    => 'Entrar / criar conta',
'loginprompt'                => "É necessário ter os ''cookies'' activados no seu navegador para poder autenticar-se na {{SITENAME}}.",
'userlogin'                  => 'Criar uma conta ou entrar',
'logout'                     => 'Sair',
'userlogout'                 => 'Sair',
'notloggedin'                => 'Não autenticado',
'nologin'                    => "Não possui uma conta? '''$1'''.",
'nologinlink'                => 'Criar uma conta',
'createaccount'              => 'Criar conta',
'gotaccount'                 => "Já possui uma conta? '''$1'''.",
'gotaccountlink'             => 'Autentique-se',
'createaccountmail'          => 'por correio electrónico',
'badretype'                  => 'As palavras-chave que introduziu não são iguais.',
'userexists'                 => 'O nome de utilizador que introduziu já existe.
Escolha um nome diferente.',
'youremail'                  => 'Correio electrónico:',
'username'                   => 'Nome de utilizador:',
'uid'                        => 'Número de identificação:',
'prefs-memberingroups'       => 'Membro {{PLURAL:$1|do grupo|dos grupos}}:',
'yourrealname'               => 'Nome verdadeiro:',
'yourlanguage'               => 'Língua:',
'yourvariant'                => 'Variante',
'yournick'                   => 'Assinatura:',
'badsig'                     => 'Assinatura inválida; verifique o código HTML utilizado.',
'badsiglength'               => 'A sua assinatura é muito longa.
Não deverá ter mais de $1 {{PLURAL:$1|caráter|carateres}}.',
'yourgender'                 => 'Sexo:',
'gender-unknown'             => 'Não especificado',
'gender-male'                => 'Masculino',
'gender-female'              => 'Feminino',
'prefs-help-gender'          => 'Opcional: usado pelo programa para ajuste das mensagens ao género do utilizador.
Esta informação será pública.',
'email'                      => 'Correio electrónico',
'prefs-help-realname'        => 'Opcional: se optar por revelar o seu nome verdadeiro, este será utilizado para atribuir-lhe crédito pelo seu trabalho.',
'loginerror'                 => 'Erro de autenticação',
'prefs-help-email'           => 'Opcional: o endereço de correio electrónico é opcional, mas permite-nos enviar-lhe uma nova palavra-chave caso esqueça a antiga.
Também permite que outros entrem em contacto consigo através da sua página de utilizador ou de discussão sem lhes revelar a sua identidade.',
'prefs-help-email-required'  => 'O endereço de correio electrónico é requerido.',
'nocookiesnew'               => "A conta de utilizador foi criada, mas neste momento não está autenticado.
A {{SITENAME}} utiliza ''cookies'' para autenticar os utilizadores.
Os ''cookies'' estão desactivados no seu navegador.
Por favor, active-os e autentique-se com o seu nome de utilizador e a sua palavra-chave.",
'nocookieslogin'             => "A {{SITENAME}} utiliza ''cookies'' para autenticar os utilizadores.
Os ''cookies'' estão desactivados no seu navegador.
Por favor, active-os e tente novamente.",
'noname'                     => 'Não especificou um nome de utilizador válido.',
'loginsuccesstitle'          => 'Login bem sucedido',
'loginsuccess'               => "'''Encontra-se agora ligado à {{SITENAME}} como \"\$1\"'''.",
'nosuchuser'                 => 'Não existe nenhum utilizador com o nome "$1".
Os nomes de utilizador são sensíveis à capitalização.
Verifique a ortografia, ou [[Special:UserLogin/signup|crie uma nova conta]].',
'nosuchusershort'            => 'Não existe um utilizador com o nome "<nowiki>$1</nowiki>". Verifique o nome que introduziu.',
'nouserspecified'            => 'Precisa de especificar um nome de utilizador.',
'wrongpassword'              => 'A palavra-chave que introduziu é inválida. Por favor, tente novamente.',
'wrongpasswordempty'         => 'A palavra-chave introduzida está em branco. Por favor, tente novamente.',
'passwordtooshort'           => 'A sua palavra-chave é inválida ou demasiado curta.
Deve de ter no mínimo {{PLURAL:$1|1 caracter|$1 caracteres}} e ser diferente do seu nome de utilizador.',
'mailmypassword'             => 'Enviar uma palavra-chave nova por correio electrónico',
'passwordremindertitle'      => 'Nova palavra-chave temporária na {{SITENAME}}',
'passwordremindertext'       => 'Alguém (provavelmente você, a partir do endereço IP $1) solicitou uma nova palavra-chave para a sua conta na {{SITENAME}} ($4).
Foi criada a palavra-chave temporária "$3" para o utilizador "$2".
Se o pedido foi feito por si, entre agora na sua conta e escolha uma nova palavra-chave.
A palavra-chave temporária expira após {{PLURAL:$5|um dia|$5 dias}}.

Caso outra pessoa tenha feito o pedido, ou se entretanto se recordou da sua palavra-chave e já não deseja alterá-la, ignore esta mensagem e continue a utilizar a palavra-chave antiga.',
'noemail'                    => 'Não foi registado um endereço de correio electrónico para o utilizador "$1".',
'passwordsent'               => 'Foi enviada uma palavra-chave nova para o endereço de correio electrónico do utilizador "$1".
Por favor, volte a autenticar-se após recebê-la.',
'blocked-mailpassword'       => 'O seu endereço IP foi bloqueado e, portanto, não será possível utilizar a função de recuperação da palavra-chave, para prevenir o uso abusivo.',
'eauthentsent'               => 'Foi enviada uma mensagem de confirmação para o endereço de correio electrónico que nomeou.
Antes que seja enviada qualquer outra mensagem para a conta, terá de seguir as instruções na mensagem enviada, de modo a confirmar que a conta é mesmo sua.',
'throttled-mailpassword'     => 'Já foi enviada uma recuperação de palavra-chave {{PLURAL:$1|na última hora|nas últimas $1 horas}}.
Para prevenir abusos, só uma recuperação pode ser enviada a cada {{PLURAL:$1|hora|$1 horas}}.',
'mailerror'                  => 'Erro ao enviar correio: $1',
'acct_creation_throttle_hit' => 'Visitantes desta wiki utilizando o seu endereço IP criaram $1 {{PLURAL:$1|conta|contas}} no último dia, o que é o máximo permitido neste período de tempo.
Em resultado, visitantes que usam este endereço IP não podem criar mais nenhuma conta de momento.',
'emailauthenticated'         => 'O seu endereço de correio electrónico foi autenticado a $2 às $3.',
'emailnotauthenticated'      => 'O seu endereço de correio electrónico ainda não foi autenticado. Não lhe será enviado nenhum correio sobre nenhuma das seguintes funcionalidades.',
'noemailprefs'               => 'Especifique um endereço de correio electrónico nas suas preferências para activar estas funcionalidades.',
'emailconfirmlink'           => 'Confirme o seu endereço de correio electrónico',
'invalidemailaddress'        => 'O endereço de correio electrónico não pode ser aceite porque parece ter um formato inválido.
Introduza um endereço formatado correctamente ou deixe o campo vazio.',
'accountcreated'             => 'Conta criada',
'accountcreatedtext'         => 'A conta de utilizador para $1 foi criada.',
'createaccount-title'        => 'Criação de conta na {{SITENAME}}',
'createaccount-text'         => 'Alguém criou uma conta com o nome $2 para o seu endereço de correio electrónico, na wiki {{SITENAME}} ($4), com a palavra-chave "$3".
Deve agora autenticar-se e alterar a sua palavra-chave.

Se a conta foi criada por engano, pode ignorar esta mensagem.',
'login-throttled'            => 'Realizou demasiadas tentativas de autenticação com esta conta.
Por favor, aguarde antes de tentar novamente.',
'loginlanguagelabel'         => 'Língua: $1',

# Password reset dialog
'resetpass'                 => 'Alterar palavra-chave',
'resetpass_announce'        => 'Autenticou-se usando uma palavra-chave temporária enviada por correio electrónico.
Para prosseguir, será necessário definir uma nova palavra-chave.',
'resetpass_text'            => '<!-- Adicionar texto aqui -->',
'resetpass_header'          => 'Alterar palavra-chave da conta',
'oldpassword'               => 'Palavra-chave anterior:',
'newpassword'               => 'Palavra-chave nova:',
'retypenew'                 => 'Repita a palavra-chave nova:',
'resetpass_submit'          => 'Definir palavra-chave e entrar',
'resetpass_success'         => 'Sua palavra-chave foi alterada com sucesso! Autenticando-se...',
'resetpass_bad_temporary'   => 'Palavra-chave temporária incorrecta. Pode ser que você já tenha conseguido alterar a sua palavra-chave ou pedido que uma nova temporária fosse gerada.',
'resetpass_forbidden'       => 'Não é possível alterar palavras-chave',
'resetpass-no-info'         => 'Precisa estar autenticado para aceder directamente a esta página.',
'resetpass-submit-loggedin' => 'Alterar palavra-chave',
'resetpass-wrong-oldpass'   => 'Palavra-chave temporária ou actual inválida. 
Pode ter já alterado com sucesso a sua palavra-chave ou solicitado uma nova palavra-chave temporária.',
'resetpass-temp-password'   => 'Palavra-chave temporária:',
'resetpass-log'             => 'Registo de reposições de palavra-chave',
'resetpass-logtext'         => 'Abaixo encontra-se um registo dos utilizadores que tiveram a sua palavra-chave reposta por um administrador.',
'resetpass-logentry'        => 'alterou a palavra-chave de $1',
'resetpass-comment'         => 'Motivo da reposição de palavra-chave:',

# Edit page toolbar
'bold_sample'     => 'Texto a negrito',
'bold_tip'        => 'Texto a negrito',
'italic_sample'   => 'Texto em itálico',
'italic_tip'      => 'Texto em itálico',
'link_sample'     => 'Título da ligação',
'link_tip'        => 'Ligação interna',
'extlink_sample'  => 'http://www.example.com ligação externa',
'extlink_tip'     => 'Ligação externa (lembre-se do prefixo http://)',
'headline_sample' => 'Texto do cabeçalho',
'headline_tip'    => 'Secção de nível 2',
'math_sample'     => 'Inserir fórmula aqui',
'math_tip'        => 'Fórmula matemática (LaTeX)',
'nowiki_sample'   => 'Inserir texto não-formatado aqui',
'nowiki_tip'      => 'Ignorar formatação wiki',
'image_sample'    => 'Exemplo.jpg',
'image_tip'       => 'Ficheiro embutido',
'media_sample'    => 'Exemplo.ogg',
'media_tip'       => 'Ligação para ficheiro',
'sig_tip'         => 'A sua assinatura, com hora e data',
'hr_tip'          => 'Linha horizontal (utilize moderadamente)',

# Edit pages
'summary'                          => 'Sumário:',
'subject'                          => 'Assunto/cabeçalho:',
'minoredit'                        => 'Marcar como edição menor',
'watchthis'                        => 'Vigiar esta página',
'savearticle'                      => 'Gravar página',
'preview'                          => 'Antevisão',
'showpreview'                      => 'Antever resultado',
'showlivepreview'                  => 'Antevisão em tempo real',
'showdiff'                         => 'Mostrar alterações',
'anoneditwarning'                  => "'''Aviso''': Não se encontra autenticado.
O seu endereço IP será registado no histórico de edições desta página.",
'missingsummary'                   => "'''Atenção:''' Não introduziu um sumário de edição.
Se clicar novamente em \"Gravar página\" a sua edição será gravada sem sumário.",
'missingcommenttext'               => 'Por favor, introduzida um comentário abaixo.',
'missingcommentheader'             => "'''Atenção:''' Não introduziu um assunto ou cabeçalho para este comentário. Se clicar novamente em \"Gravar página\" a sua edição será gravada sem assunto ou cabeçalho.",
'summary-preview'                  => 'Antevisão do sumário:',
'subject-preview'                  => 'Antevisão do assunto/cabeçalho:',
'blockedtitle'                     => 'O utilizador está bloqueado',
'blockedtext'                      => '<big>O seu nome de utilizador ou endereço IP foram bloqueados</big>

O bloqueio foi realizado por $1.
O motivo apresentado foi \'\'$2\'\'.

* Início do bloqueio: $8
* Expiração do bloqueio: $6
* Destinatário do bloqueio: $7

Pode contactar $1 ou outro [[{{MediaWiki:Grouppage-sysop}}|administrador]] para discutir o bloqueio.

Note que para utilizar a funcionalidade "Contactar utilizador" precisa de ter um endereço de correio electrónico válido nas suas [[Special:Preferences|preferências de utilizador]] e de não lhe ter sido bloqueado o uso desta funcionalidade.

O seu endereço IP neste momento é $3 e a identificação (ID) do bloqueio é #$5.
Por favor, inclua todos os detalhes acima em quaisquer contactos relacionados com este bloqueio.',
'autoblockedtext'                  => 'O seu endereço IP foi bloqueado de forma automática, uma vez que foi utilizado recentemente por outro utilizador, o qual foi bloqueado por $1.
O motivo apresentado foi:

:\'\'$2\'\'

* Início do bloqueio: $8
* Expiração do bloqueio: $6
* Destinatário do bloqueio: $7

Pode contactar $1 ou outro [[{{MediaWiki:Grouppage-sysop}}|administrador]] para discutir o bloqueio.

Note que para utilizar a funcionalidade "Contactar utilizador" precisa de ter um endereço de correio electrónico válido nas suas [[Special:Preferences|preferências de utilizador]] e de não lhe ter sido bloqueado o uso desta funcionalidade.

O seu endereço IP neste momento é $3 e a identificação (ID) do bloqueio é #$5.
Por favor, inclua todos os detalhes acima em quaisquer contactos relacionados com este bloqueio.',
'blockednoreason'                  => 'sem motivo especificado',
'blockedoriginalsource'            => "O código de '''$1''' é mostrado abaixo:",
'blockededitsource'                => "O texto das '''suas edições''' em '''$1''' é mostrado abaixo:",
'whitelistedittitle'               => 'É necessário autenticar-se para editar páginas',
'whitelistedittext'                => 'Precisa de se $1 para poder editar páginas.',
'confirmedittitle'                 => 'Confirmação de e-mail requerida para editar',
'confirmedittext'                  => 'Precisa de confirmar o seu endereço de correio electrónico antes de começar a editar páginas.
Por favor, introduza e valide o endereço através das [[Special:Preferences|preferências de utilizador]].',
'nosuchsectiontitle'               => 'Não foi possível encontrar a secção',
'nosuchsectiontext'                => 'Tentou editar uma secção que não existe.
Ela pode ter sido movida ou removida enquanto estava a ver a página.',
'loginreqtitle'                    => 'Autenticação Requerida',
'loginreqlink'                     => 'autenticar-se',
'loginreqpagetext'                 => 'Precisa de $1 para poder visualizar outras páginas.',
'accmailtitle'                     => 'Palavra-chave enviada.',
'accmailtext'                      => 'Uma palavra-chave gerada aleatoriamente para [[User talk:$1|$1]] foi enviada para $2.

A palavra-chave para esta nova conta pode ser alterada na página [[Special:ChangePassword|alterar palavra-chave]] após autenticação.',
'newarticle'                       => '(Nova)',
'newarticletext'                   => "Seguiu uma ligação para uma página que ainda não existe.
Para criá-la, escreva o seu conteúdo na caixa abaixo (consulte a [[{{MediaWiki:Helppage}}|página de ajuda]] para mais detalhes).
Se chegou aqui por engano, clique no botão '''voltar''' (ou ''back'') do seu navegador.",
'anontalkpagetext'                 => "----''Esta é a página de discussão de um utilizador anónimo que ainda não criou uma conta ou não a utiliza, pelo que temos de utilizar o endereço IP para identificá-lo(a).
Um endereço IP pode ser partilhado por vários utilizadores.
Se é um utilizador anónimo e sente que lhe foram direccionados comentários irrelevantes, por favor [[Special:UserLogin/signup|crie uma conta]] ou [[Special:UserLogin|autentique-se]] para evitar futuras confusões com outros utilizadores anónimos.''",
'noarticletext'                    => 'Ainda não existe texto nesta página.
Pode [[Special:Search/{{PAGENAME}}|pesquisar o título desta página]] noutras páginas,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} procurar registos relacionados]
ou [{{fullurl:{{FULLPAGENAME}}|action=edit}} editar esta página]</span>.',
'userpage-userdoesnotexist'        => 'A conta "$1" não se encontra registada.
Por favor, verifique se deseja mesmo criar/editar esta página.',
'clearyourcache'                   => "'''Nota:''' Após gravar, terá de limpar a ''cache'' do seu navegador para ver as alterações.'''
'''Mozilla / Firefox / Safari:''' pressione ''Shift'' enquanto clica em ''Recarregar'', ou pressione ''Ctrl-F5'' ou ''Ctrl-R'' (''Command-R'' num Macintosh);
'''Konqueror:''': clique no botão ''Recarregar'' ou pressione ''F5'';
'''Opera:''' limpe a ''cache'' em ''Ferramentas → Preferências'' (''Tools → Preferences'');
'''Internet Explorer:''' pressione ''Ctrl'' enquanto clica em ''Recarregar'' ou pressione ''Ctrl-F5''.",
'usercssjsyoucanpreview'           => "'''Dica:''' Utilize o botão \"Mostrar previsão\" para testar seu novo CSS/JS antes de salvar.",
'usercsspreview'                   => "'''Lembre-se de que está apenas a antever o seu CSS particular.
Este ainda não foi gravado!'''",
'userjspreview'                    => "'''Lembre-se que está apenas a testar ou antever o seu JavaScript particular.'''
Este ainda não foi gravado!",
'userinvalidcssjstitle'            => "'''Aviso:''' Não existe um tema \"\$1\". Lembre-se que as páginas .css e  .js utilizam um título em minúsculas, exemplo: {{ns:user}}:Alguém/monobook.css aposto a {{ns:user}}:Alguém/Monobook.css.",
'updated'                          => '(Actualizado)',
'note'                             => "'''Nota:'''",
'previewnote'                      => "'''Lembre-se que esta é apenas uma antevisão do resultado.'''
As modificações ainda não foram gravadas!",
'previewconflict'                  => 'Esta antevisão do resultado apresenta o texto da caixa de edição acima tal como este aparecerá se escolher gravá-lo.',
'session_fail_preview'             => "'''Não foi possível processar a sua edição devido à perda de dados da sua sessão.
Por favor tente novamente.
Caso continue a não funcionar, tente [[Special:UserLogout|sair]] e voltar a entrar na sua conta.'''",
'session_fail_preview_html'        => "'''Não foi possível processar a sua edição devido à perda dos dados da sessão.'''

''Como a wiki {{SITENAME}} possibilita o uso de HTML bruto, a antevisão está oculta por precaução contra ataques com JavaScript.''

'''Se esta é uma tentativa legítima de edição tente novamente, por favor.'''
Caso continue a não funcionar, tente [[Special:UserLogout|{{lc:{{MediaWiki:logout/pt}}}}]] e voltar a entrar na sua conta.",
'token_suffix_mismatch'            => "'''A sua edição foi rejeitada uma vez que seu software de navegação mutilou os sinais de pontuação no identificador de edição. A edição foi rejeitada para evitar perdas no texto da página.
Isso acontece ocasionalmente quando se usa um serviço de proxy anonimizador mal configurado.'''",
'editing'                          => 'Editando $1',
'editingsection'                   => 'Editando $1 (secção)',
'editingcomment'                   => 'Editando $1 (nova secção)',
'editconflict'                     => 'Conflito de edição: $1',
'explainconflict'                  => "Alguém mudou a página enquanto você a editava.
A caixa de texto acima mostra o texto existente, na forma como está neste momento.
As suas mudanças são mostradas na caixa abaixo.
Terá de reintegrar as suas mudanças no texto da caixa acima.
'''Só''' o texto na caixa acima será gravado quando clicar \"Gravar página\".<br />",
'yourtext'                         => 'O seu texto',
'storedversion'                    => 'Versão guardada',
'nonunicodebrowser'                => "'''Aviso: O seu navegador não é compatível com as especificações Unicode.
Foi activado um sistema de edição alternativo que lhe permite editar as páginas com segurança: os caracteres não-ASCII aparecerão na caixa de edição no formato de códigos hexadecimais.'''",
'editingold'                       => "'''Aviso: Está editando uma revisão desactualizada desta página.'''
Se gravar, todas as mudanças feitas a partir desta revisão serão perdidas.",
'yourdiff'                         => 'Diferenças',
'copyrightwarning'                 => "Por favor, note que todas as suas contribuições na {{SITENAME}} são consideradas publicadas nos termos da licença $2 (veja $1 para detalhes). Se não deseja que o seu texto possa ser inexoravelmente editado e redistribuído desta forma, não o envie.
Garante-nos também que isto é algo escrito por si, ou copiado do domínio público ou de outra fonte de teor livre.<br />
'''NÃO ENVIE TRABALHO PROTEGIDO POR DIREITOS DE AUTOR SEM A DEVIDA PERMISSÃO!'''",
'copyrightwarning2'                => "Por favor, note que todas as suas contribuições na {{SITENAME}} podem ser editadas, alteradas ou removidas por outros utilizadores. Se não deseja que o seu texto seja inexoravelmente editado, não o envie.
Garante-nos também que isto é algo escrito por si, ou copiado do domínio público ou de outra fonte de teor livre (veja $1 para detalhes).<br />
'''NÃO ENVIE TRABALHO PROTEGIDO POR DIREITOS DE AUTOR SEM A DEVIDA PERMISSÃO!'''",
'longpagewarning'                  => "'''AVISO:''' Esta página possui $1 kilobytes; alguns
navegadores possuem problemas em editar páginas maiores que 32 kb.
Por favor, considere seccionar a página em secções de menor dimensão.",
'longpageerror'                    => "'''Erro: O texto que submeteu ocupa $1 KB, um espaço superior ao máximo de $2 KB.
A página não pode ser gravada.'''",
'readonlywarning'                  => "'''Aviso: A base de dados foi bloqueada para manutenção, pelo que não poderá gravar a sua edição neste momento.'''
Pode, no entanto, copiar o seu texto para um editor externo e guardá-lo para posterior submissão.

O administrador que bloqueou a base de dados forneceu a seguinte explicação: $1",
'protectedpagewarning'             => "'''AVISO: Esta página foi protegida e poderá ser editada apenas por utilizadores com privilégios sysop (administradores).'''",
'semiprotectedpagewarning'         => "'''Nota:''' Esta página foi protegida de modo a que apenas utilizadores registados a possam editar.",
'cascadeprotectedwarning'          => "'''Aviso:''' Esta página está protegida de forma que apenas os administradores possam editá-la, porque se encontra incluída {{PLURAL:$1|na seguinte página protegida|nas seguintes páginas protegidas}} em cascata:",
'titleprotectedwarning'            => "'''ATENÇÃO: Esta página foi protegida por forma a que [[Special:ListGroupRights|privilégios específicos]] sejam necessários para criá-la.'''",
'templatesused'                    => 'Predefinições utilizadas nesta página:',
'templatesusedpreview'             => 'Predefinições utilizadas nesta previsão:',
'templatesusedsection'             => 'Predefinições utilizadas nesta secção:',
'template-protected'               => '(protegida)',
'template-semiprotected'           => '(semi-protegida)',
'hiddencategories'                 => 'Esta página pertence a {{PLURAL:$1|uma categoria oculta|$1 categorias ocultas}}:',
'edittools'                        => '<!-- O texto colocado aqui será mostrado abaixo dos formulários de edição e de envio de ficheiros. -->',
'nocreatetitle'                    => 'A criação de páginas encontra-se limitada',
'nocreatetext'                     => 'A {{SITENAME}} restringe a criação de novas páginas por utilizadores anónimos.
Pode voltar atrás e editar uma página já existente, ou [[Special:UserLogin|autenticar-se ou criar uma conta]].',
'nocreate-loggedin'                => 'Não possui permissão para criar novas páginas.',
'permissionserrors'                => 'Erros de permissões',
'permissionserrorstext'            => 'Não possui permissão para fazer isso, {{PLURAL:$1|pelo seguinte motivo|pelos seguintes motivos}}:',
'permissionserrorstext-withaction' => 'Não possui permissão para $2, {{PLURAL:$1|pelo seguinte motivo|pelos seguintes motivos}}:',
'recreate-deleted-warn'            => "'''Atenção: Você está criando novamente uma página já eliminada em outra ocasião.'''

Certifique-se de que seja adequado prosseguir editando esta página.
O registo de eliminação desta página é exibido a seguir, para sua comodidade:",
'deleted-notice'                   => 'Esta página foi eliminada. Disponibiliza-se abaixo o registo de eliminações para esta página, para referência.',
'deletelog-fulllog'                => 'Ver registo completo',
'edit-hook-aborted'                => 'Edição abortada por hook.
Ele não deu nenhuma explicação.',
'edit-gone-missing'                => 'Não foi possível atualizar a página.
Ela foi, aparentemente, eliminada.',
'edit-conflict'                    => 'Conflito de edição.',
'edit-no-change'                   => 'A sua edição foi ignorada, uma vez que o texto não sofreu alterações.',
'edit-already-exists'              => 'Não foi possível criar uma nova página.
Ela já existia.',

# Parser/template warnings
'expensive-parserfunction-warning'        => 'Aviso: Esta página contém demasiadas chamadas a funções exigentes do analisador sintáctico.

Devia ter menos de $2 {{PLURAL:$2|chamada|chamadas}}. Neste momento tem $1 {{PLURAL:$1|chamada|chamadas}}.',
'expensive-parserfunction-category'       => 'Páginas com demasiadas chamadas a funções exigentes',
'post-expand-template-inclusion-warning'  => 'Aviso: O tamanho de inclusão de predefinições é demasiado grande, algumas predefinições não serão incluídas.',
'post-expand-template-inclusion-category' => 'Páginas onde o tamanho de inclusão de predefinições é excedido',
'post-expand-template-argument-warning'   => 'Aviso: Esta página contém pelo menos um argumento de predefinição com um tamanho expandido demasiado grande.
Estes argumentos foram omitidos.',
'post-expand-template-argument-category'  => 'Páginas com omissões de argumentos em predefinições',
'parser-template-loop-warning'            => 'Ciclo de predefinições detectado: [[$1]]',
'parser-template-recursion-depth-warning' => 'Atingido o limite de profundidade de recursividade de predefinição ($1)',

# "Undo" feature
'undo-success' => 'A edição pode ser desfeita.
Por favor, verifique a seguinte comparação para se certificar de que é o que pretende fazer, e grave abaixo as alterações para finalizar e desfazer a edição.',
'undo-failure' => 'A edição não pôde ser desfeita devido a alterações intermediárias conflitantes.',
'undo-norev'   => 'A edição não pôde ser desfeita porque não existe ou foi apagada.',
'undo-summary' => 'Desfeita a edição $1 de [[Special:Contributions/$2|$2]] ([[User talk:$2|Discussão]])',

# Account creation failure
'cantcreateaccounttitle' => 'Não é possível criar uma conta',
'cantcreateaccount-text' => "Este IP ('''$1''') foi bloqueado de criar novas contas por [[User:$3|$3]].

A justificativa apresentada por $3 foi ''$2''",

# History pages
'viewpagelogs'           => 'Ver registos para esta página',
'nohistory'              => 'Não há histórico de edições para esta página.',
'currentrev'             => 'Revisão actual',
'currentrev-asof'        => 'Edição actual tal como $1',
'revisionasof'           => 'Edição tal como às $1',
'revision-info'          => 'Revisão de $1; $2', # Additionally available: $3: revision id
'previousrevision'       => '← Revisão anterior',
'nextrevision'           => 'Revisão seguinte →',
'currentrevisionlink'    => 'Revisão actual',
'cur'                    => 'act',
'next'                   => 'prox',
'last'                   => 'ant',
'page_first'             => 'primeira',
'page_last'              => 'última',
'histlegend'             => "Selecção de diferenças: use os botões de opção para marcar as versões que deseja comparar.
Pressione 'Enter' ou clique o botão \"{{int:compareselectedversions}}\".<br />
Legenda: '''({{int:cur}})''' = diferenças para a versão actual,
'''({{int:last}})''' = diferenças para a versão anterior,
'''{{int:minoreditletter}}''' = edição menor",
'history-fieldset-title' => 'Navegar pelo histórico',
'deletedrev'             => '[eliminada]',
'histfirst'              => 'Mais antigas',
'histlast'               => 'Mais recentes',
'historysize'            => '({{PLURAL:$1|1 byte|$1 bytes}})',
'historyempty'           => '(vazia)',

# Revision feed
'history-feed-title'          => 'História de revisão',
'history-feed-description'    => 'Histórico de edições para esta página nesta wiki',
'history-feed-item-nocomment' => '$1 em $2', # user at time
'history-feed-empty'          => 'A página solicitada não existe.
Pode ter sido eliminada da wiki ou o nome sido alterado.
Tente [[Special:Search|pesquisar na wiki]] novas páginas relevantes.',

# Revision deletion
'rev-deleted-comment'            => '(comentário removido)',
'rev-deleted-user'               => '(nome de utilizador removido)',
'rev-deleted-event'              => '(entrada removida)',
'rev-deleted-text-permission'    => "Esta edição desta página foi '''eliminada'''.
Poderão existir detalhes no [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} registo de eliminação].",
'rev-deleted-text-view'          => "Esta edição desta página foi '''eliminada'''.
Por ser um administrador, você pode vê-la; poderão existir detalhes no [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} registo de eliminação].",
'rev-deleted-no-diff'            => "Você não pode ver estas diferenças porque uma das revisões foi '''eliminada'''.
Poderá haver detalhes no [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} registo de eliminações].",
'rev-deleted-unhide-diff'        => "Uma das revisões destas diferenças foi '''eliminada'''.
Poderá haver detalhes no [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} registo de eliminações].
Por ser um administrador, você pode mesmo assim [$1 ver estas diferenças], se desejar prosseguir.",
'rev-delundel'                   => 'mostrar/esconder',
'revisiondelete'                 => 'Eliminar/restaurar edições',
'revdelete-nooldid-title'        => 'Edição de destino inválida',
'revdelete-nooldid-text'         => 'Ocorreu uma das seguintes: não especificou a revisão (ou revisões) de destino para realizar esta função, a revisão que especificou não existe, ou está tentando ocultar a revisão actual.',
'revdelete-nologtype-title'      => 'Tipo de registo não especificado',
'revdelete-nologtype-text'       => 'Não especificou um tipo de registo sobre o qual executar esta acção.',
'revdelete-toomanytargets-title' => 'Demasiados alvos',
'revdelete-toomanytargets-text'  => 'Você especificou demasiados tipos de alvos sobre os quais executar esta ação.',
'revdelete-nologid-title'        => 'Entrada de registo inválida',
'revdelete-nologid-text'         => 'Ou não especificou um evento do registo sobre o qual executar esta função, ou a entrada que especificou não existe.',
'revdelete-selected'             => "'''{{PLURAL:$2|Edição seleccionada|Edições seleccionadas}} de [[:$1]]:'''",
'logdelete-selected'             => "'''{{PLURAL:$1|Evento do registo seleccionado|Eventos do registo seleccionados}}:'''",
'revdelete-text'                 => "'''Edições e eventos eliminados continuarão a aparecer no histórico e registos da página, mas partes do seu conteúdo estarão inacessíveis ao público.'''

Outros administradores em {{SITENAME}} continuarão a poder aceder ao conteúdo escondido e podem restaurá-lo novamente através desta mesma interface, a menos que restrições adicionais sejam definidas.
Por favor, confirme que pretende fazer isto, que compreende as consequências, e que vai fazê-lo em concordância com [[{{MediaWiki:Policy-url}}|a política]].",
'revdelete-suppress-text'        => "A supressão '''só''' deverá ser usada nos seguintes casos:
* Informação potencialmente caluniosa, difamatória ou injuriosa
* Informação pessoal imprópria
*: ''endereços de domicílio e números de telefone, números da segurança social, etc''",
'revdelete-legend'               => 'Definir restrições de visualização',
'revdelete-hide-text'            => 'Ocultar texto da edição',
'revdelete-hide-name'            => 'Ocultar acção e alvo',
'revdelete-hide-comment'         => 'Ocultar sumário de edição',
'revdelete-hide-user'            => 'Ocultar nome de utilizador/IP',
'revdelete-hide-restricted'      => 'Ocultar dados dos administradores e de todos os outros',
'revdelete-suppress'             => 'Ocultar dados dos administradores e de todos os outros',
'revdelete-hide-image'           => 'Ocultar conteúdo do ficheiro',
'revdelete-unsuppress'           => 'Remover restrições das revisões restauradas',
'revdelete-log'                  => 'Motivo da eliminação:',
'revdelete-submit'               => 'Aplicar à edição seleccionada',
'revdelete-logentry'             => 'modificou visibilidade das revisões de [[$1]]',
'logdelete-logentry'             => 'alterou visibilidade de eventos do [[$1]]',
'revdelete-success'              => "'''A visibilidade da revisão foi actualizada com sucesso.'''",
'logdelete-success'              => "'''Visibilidade de evento definida com sucesso.'''",
'revdel-restore'                 => 'Alterar visibilidade',
'pagehist'                       => 'Histórico da página',
'deletedhist'                    => 'Histórico de eliminações',
'revdelete-content'              => 'conteúdo',
'revdelete-summary'              => 'sumário de edição',
'revdelete-uname'                => 'nome de utilizador',
'revdelete-restricted'           => 'restrições a administradores aplicadas',
'revdelete-unrestricted'         => 'restrições a administradores removidas',
'revdelete-hid'                  => 'ocultou $1',
'revdelete-unhid'                => 'desocultou $1',
'revdelete-log-message'          => '$1 para $2 {{PLURAL:$2|revisão|revisões}}',
'logdelete-log-message'          => '$1 para $2 {{PLURAL:$2|evento|eventos}}',

# Suppression log
'suppressionlog'     => 'Registo de supressões',
'suppressionlogtext' => 'Abaixo está uma lista das remoções e bloqueios envolvendo conteúdo ocultado por administradores.
Veja a [[Special:IPBlockList|lista de bloqueios]] para uma lista de banimentos e bloqueios em efeito neste momento.',

# History merging
'mergehistory'                     => 'Fundir histórico de páginas',
'mergehistory-header'              => 'Esta página permite fundir o histórico de revisões de uma página no de outra.
Certifique-se de que esta alteração manterá a continuidade histórica da página.',
'mergehistory-box'                 => 'Fundir edições de duas páginas:',
'mergehistory-from'                => 'Página de origem:',
'mergehistory-into'                => 'Página de destino:',
'mergehistory-list'                => 'Histórico de edições fundíveis',
'mergehistory-merge'               => 'As seguintes revisões de [[:$1]] podem fundir-se em [[:$2]].
Usando os botões de opção, pode escolher fundir apenas as revisões até àquela que marcar.
Note que, se usar as ligações de navegação, os botões de opção voltarão aos valores originais.',
'mergehistory-go'                  => 'Mostrar edições que podem ser fundidas',
'mergehistory-submit'              => 'Fundir edições',
'mergehistory-empty'               => 'Não existem revisões fundíveis.',
'mergehistory-success'             => 'Foram fundidas $3 {{PLURAL:$3|edição|edições}} de [[:$1]] em [[:$2]].',
'mergehistory-fail'                => 'Não foi possível fundir os históricos; por favor, verifique a página e os parâmetros de tempo.',
'mergehistory-no-source'           => 'A página de origem ($1) não existe.',
'mergehistory-no-destination'      => 'A página de destino ($1) não existe.',
'mergehistory-invalid-source'      => 'A página de origem precisa ser um título válido.',
'mergehistory-invalid-destination' => 'A página de destino precisa ser um título válido.',
'mergehistory-autocomment'         => '[[:$1]] fundido em [[:$2]]',
'mergehistory-comment'             => '[[:$1]] fundido em [[:$2]]: $3',
'mergehistory-same-destination'    => 'As páginas de origem e de destino não podem ser as mesmas',
'mergehistory-reason'              => 'Motivo:',

# Merge log
'mergelog'           => 'Registo de fusão de históricos',
'pagemerge-logentry' => '[[$1]] foi fundida em [[$2]] (até a edição $3)',
'revertmerge'        => 'Desfazer fusão',
'mergelogpagetext'   => 'Segue-se um registo das mais recentes fusões de históricos de páginas.',

# Diffs
'history-title'           => 'Histórico de edições de "$1"',
'difference'              => '(Diferença entre edições)',
'lineno'                  => 'Linha $1:',
'compareselectedversions' => 'Compare as versões seleccionadas',
'visualcomparison'        => 'Comparação visual',
'wikicodecomparison'      => 'Comparação de wikitexto',
'editundo'                => 'desfazer',
'diff-multi'              => '({{PLURAL:$1|uma edição intermédia não apresentada|$1 edições intermédias não apresentadas}})',
'diff-movedto'            => 'movido para $1',
'diff-styleadded'         => 'estilo $1 adicionado',
'diff-added'              => '$1 adicionado',
'diff-changedto'          => 'alterado para $1',
'diff-movedoutof'         => 'movido para fora de $1',
'diff-styleremoved'       => 'estilo $1 removido',
'diff-removed'            => '$1 removido',
'diff-changedfrom'        => 'alterado de $1',
'diff-src'                => 'fonte',
'diff-withdestination'    => 'com destino $1',
'diff-with'               => '&#32;com $1 $2',
'diff-with-final'         => '&#32;e $1 $2',
'diff-width'              => 'largura',
'diff-height'             => 'altura',
'diff-p'                  => "um '''parágrafo'''",
'diff-blockquote'         => "uma '''citação'''",
'diff-h1'                 => "um '''cabeçalho (de nível 1)'''",
'diff-h2'                 => "um '''cabeçalho (de nível 2)'''",
'diff-h3'                 => "um '''cabeçalho (de nível 3)'''",
'diff-h4'                 => "um '''cabeçalho (de nível 4)'''",
'diff-h5'                 => "um '''cabeçalho (de nível 5)'''",
'diff-pre'                => "um '''bloco pré-formatado'''",
'diff-div'                => "uma '''divisão'''",
'diff-ul'                 => "uma '''lista sem ordenação'''",
'diff-ol'                 => "uma '''lista ordenada'''",
'diff-li'                 => "um '''item de lista'''",
'diff-table'              => "uma '''tabela'''",
'diff-tbody'              => "o '''conteúdo de uma tabela'''",
'diff-tr'                 => "uma '''linha'''",
'diff-td'                 => "uma '''célula'''",
'diff-th'                 => "um '''cabeçalho'''",
'diff-br'                 => "uma '''quebra de linha'''",
'diff-hr'                 => "uma '''linha horizontal'''",
'diff-code'               => "um '''bloco de código computacional'''",
'diff-dl'                 => "uma '''lista de definições'''",
'diff-dt'                 => "uma '''definição do termo'''",
'diff-dd'                 => "uma '''definição'''",
'diff-input'              => "uma '''entrada de dados'''",
'diff-form'               => "um '''formulário'''",
'diff-img'                => "uma '''imagem'''",
'diff-span'               => "um '''span'''",
'diff-a'                  => "uma '''ligação'''",
'diff-i'                  => "'''itálico'''",
'diff-b'                  => "'''negrito'''",
'diff-strong'             => "'''forte'''",
'diff-em'                 => "'''ênfase'''",
'diff-font'               => "'''tipo de letra'''",
'diff-big'                => "'''grande'''",
'diff-del'                => "'''apagado'''",
'diff-tt'                 => "'''largura fixa'''",
'diff-sub'                => "'''sub script'''",
'diff-sup'                => "'''super script'''",
'diff-strike'             => "'''paralizado através de'''",

# Search results
'searchresults'                    => 'Resultados da pesquisa',
'searchresults-title'              => 'Resultados da pesquisa de "$1"',
'searchresulttext'                 => 'Para mais informações sobre pesquisas na {{SITENAME}}, consulte [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle'                   => 'Pesquisou \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|páginas iniciadas por "$1"]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|páginas que apontam para "$1"]])',
'searchsubtitleinvalid'            => 'Pesquisou "$1"',
'noexactmatch'                     => "'''Não existe uma página com o título \"\$1\".''' Você pode [[:\$1|criar tal página]].",
'noexactmatch-nocreate'            => "'''Não há uma página intitulada como \"\$1\".'''",
'toomanymatches'                   => 'Foram devolvidos demasiados resultados. Por favor, tente um filtro de pesquisa diferente',
'titlematches'                     => 'Resultados nos títulos das páginas',
'notitlematches'                   => 'Nenhum título de página coincide com o termo pesquisado',
'textmatches'                      => 'Resultados nos textos das páginas',
'notextmatches'                    => 'Não foi possível localizar, no conteúdo das páginas, o termo pesquisado',
'prevn'                            => 'anteriores $1',
'nextn'                            => 'próximos $1',
'prevn-title'                      => '$1 {{PLURAL:$1|resultado anterior|resultados anteriores}}',
'nextn-title'                      => '{{PLURAL:$1|próximo|próximos}} $1 {{PLURAL:$1|resultado|resultados}}',
'shown-title'                      => 'Mostrar $1 {{PLURAL:$1|resultado|resultados}} por página',
'viewprevnext'                     => 'Ver ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-legend'                => 'Opções de pesquisa',
'searchmenu-exists'                => "'''Há uma página com o nome \"[[:\$1]]\" nesta wiki'''",
'searchmenu-new'                   => "'''Crie a página \"[[:\$1]]\" nesta wiki!'''",
'searchhelp-url'                   => 'Help:Conteúdos',
'searchmenu-prefix'                => '[[Special:PrefixIndex/$1|Navegue por páginas com este prefixo]]',
'searchprofile-articles'           => 'Páginas de conteúdo',
'searchprofile-articles-and-proj'  => 'Páginas de conteúdo e de projecto',
'searchprofile-project'            => 'Páginas de projecto',
'searchprofile-images'             => 'Ficheiros',
'searchprofile-everything'         => 'Todas',
'searchprofile-advanced'           => 'Personalizar',
'searchprofile-articles-tooltip'   => 'Pesquisar em $1',
'searchprofile-project-tooltip'    => 'Pesquisar em $1',
'searchprofile-images-tooltip'     => 'Pesquisar em ficheiros',
'searchprofile-everything-tooltip' => 'Pesquisar em todo o conteúdo (incluindo páginas de discussão)',
'searchprofile-advanced-tooltip'   => 'Personalizar os espaços nominais onde pesquisar',
'prefs-search-nsdefault'           => 'Pesquisar usando as definições padrão:',
'prefs-search-nscustom'            => 'Pesquisar domínios personalizados:',
'search-result-size'               => '$1 ({{PLURAL:$2|1 palavra|$2 palavras}})',
'search-result-score'              => 'Relevancia: $1%',
'search-redirect'                  => '(redirecionamento de $1)',
'search-section'                   => '(secção $1)',
'search-suggest'                   => 'Será que queria dizer: $1',
'search-interwiki-caption'         => 'Projectos associados',
'search-interwiki-default'         => 'Resultados de $1:',
'search-interwiki-more'            => '(mais)',
'search-mwsuggest-enabled'         => 'com sugestões',
'search-mwsuggest-disabled'        => 'sem sugestões',
'search-relatedarticle'            => 'Relacionado',
'mwsuggest-disable'                => 'Desactivar sugestões AJAX',
'searchrelated'                    => 'relacionados',
'searchall'                        => 'todos',
'showingresults'                   => "{{PLURAL:$1|É apresentado '''um''' resultado|São apresentados até '''$1''' resultados}} abaixo{{PLURAL:$1||, começando pelo '''$2'''º}}.",
'showingresultsnum'                => "{{PLURAL:$3|É apresentado '''um''' resultado|São apresentados '''$3''' resultados}} abaixo{{PLURAL:$3||, começando pelo '''$2'''º}}.",
'showingresultstotal'              => "Exibindo {{PLURAL:$4|o resultado '''$1''' de '''$3'''|os resultados '''$1 a $2''' de '''$3'''}}",
'nonefound'                        => "'''Nota''': Por omissão, só alguns dos espaços nominais são pesquisados.
Tente usar o prefixo ''all:'' para pesquisar todo o conteúdo (incluindo páginas de discussão, predefinições, etc.), ou use como prefixo o espaço nominal desejado.",
'search-nonefound'                 => 'Não houve resultados para a pesquisa.',
'powersearch'                      => 'Pesquisa avançada',
'powersearch-legend'               => 'Pesquisa avançada',
'powersearch-ns'                   => 'Pesquisar nos espaços nominais:',
'powersearch-redir'                => 'Listar redireccionamentos',
'powersearch-field'                => 'Pesquisar',
'search-external'                  => 'Pesquisa externa',
'searchdisabled'                   => 'Foi impossibilitada a realização de pesquisas na {{SITENAME}}.
Entretanto, pode realizar pesquisas através do Google.
Note, no entanto, que a indexação da {{SITENAME}} neste motor de busca pode estar desactualizada.',

# Preferences page
'preferences'               => 'Preferências',
'mypreferences'             => 'Minhas preferências',
'prefs-edits'               => 'Número de edições:',
'prefsnologin'              => 'Não autenticado',
'prefsnologintext'          => 'Precisa de estar <span class="plainlinks">[{{fullurl:Special:UserLogin|returnto=$1}} autenticado]</span> para definir as suas preferências.',
'prefsreset'                => 'As preferências foram restauradas tal como se encontravam na base de dados.',
'qbsettings'                => 'Barra Rápida',
'qbsettings-none'           => 'Nenhuma',
'qbsettings-fixedleft'      => 'Fixo à esquerda',
'qbsettings-fixedright'     => 'Fixo à direita',
'qbsettings-floatingleft'   => 'Flutuando à esquerda',
'qbsettings-floatingright'  => 'Flutuando à direita',
'changepassword'            => 'Alterar palavra-chave',
'skin'                      => 'Tema',
'skin-preview'              => 'Antever tema',
'math'                      => 'Matemática',
'dateformat'                => 'Formato da data',
'datedefault'               => 'Sem preferência',
'datetime'                  => 'Data e hora',
'math_failure'              => 'Falhou ao verificar gramática',
'math_unknown_error'        => 'Erro desconhecido',
'math_unknown_function'     => 'Função desconhecida',
'math_lexing_error'         => 'Erro léxico',
'math_syntax_error'         => 'Erro de sintaxe',
'math_image_error'          => 'Falha na conversão para PNG. Verifique a instalação do latex, dvips, gs e convert',
'math_bad_tmpdir'           => "Não foi possível criar o directório temporário ''math'' ou, se já existe, escrever nele",
'math_bad_output'           => "Não foi possível criar o directório de resultados ''math'' ou, se já existe, escrever nele",
'math_notexvc'              => 'O executável texvc não foi encontrado. Consulte math/README para instruções da configuração.',
'prefs-personal'            => 'Perfil de utilizador',
'prefs-rc'                  => 'Mudanças recentes',
'prefs-watchlist'           => 'Páginas vigiadas',
'prefs-watchlist-days'      => 'Dias a mostrar, ao listar mudanças às páginas vigiadas:',
'prefs-watchlist-days-max'  => '(máximo: 7 dias)',
'prefs-watchlist-edits'     => 'Número de edições a mostrar na listagem expandida:',
'prefs-watchlist-edits-max' => '(máximo: 1000)',
'prefs-misc'                => 'Diversos',
'prefs-resetpass'           => 'Alterar palavra-chave',
'saveprefs'                 => 'Gravar',
'resetprefs'                => 'Eliminar as alterações que não foram gravadas',
'restoreprefs'              => 'Repor todas as configurações padrão',
'textboxsize'               => 'Opções de edição',
'prefs-edit-boxsize'        => 'Dimensões da janela de edição.',
'rows'                      => 'Linhas:',
'columns'                   => 'Colunas:',
'searchresultshead'         => 'Pesquisa',
'resultsperpage'            => 'Resultados por página:',
'contextlines'              => 'Linhas por resultado:',
'contextchars'              => 'Contexto por linha:',
'stub-threshold'            => 'Ligações a páginas provisórias \'\'(stubs)\'\' terão <a href="#" class="stub">este formato</a> se elas ocuparem menos de (bytes):',
'recentchangesdays'         => 'Dias a apresentar nas mudanças recentes:',
'recentchangesdays-max'     => '(máximo: $1 {{PLURAL:$1|dia|dias}})',
'recentchangescount'        => 'Número de edições a serem exibidas nas mudanças recentes, históricos de páginas e páginas de registos, por defeito:',
'savedprefs'                => 'As suas preferências foram gravadas.',
'timezonelegend'            => 'Fuso horário:',
'timezonetext'              => '¹Número de horas que o seu horário local difere do horário do servidor (UTC).',
'localtime'                 => 'Hora local:',
'timezoneselect'            => 'Fuso horário:',
'timezoneuseserverdefault'  => 'Usar padrão do servidor',
'timezoneuseoffset'         => 'Outro (especificar diferença)',
'timezoneoffset'            => 'Diferença horária¹:',
'servertime'                => 'Hora do servidor:',
'guesstimezone'             => 'Preencher a partir do navegador',
'timezoneregion-africa'     => 'África',
'timezoneregion-america'    => 'América',
'timezoneregion-antarctica' => 'Antártida',
'timezoneregion-arctic'     => 'Ártico',
'timezoneregion-asia'       => 'Ásia',
'timezoneregion-atlantic'   => 'Oceano Atlântico',
'timezoneregion-australia'  => 'Austrália',
'timezoneregion-europe'     => 'Europa',
'timezoneregion-indian'     => 'Oceano Índico',
'timezoneregion-pacific'    => 'Oceano Pacífico',
'allowemail'                => 'Aceitar correio electrónico de outros utilizadores',
'prefs-searchoptions'       => 'Pesquisa',
'prefs-namespaces'          => 'Espaços nominais',
'defaultns'                 => 'Pesquisar por defeito nestes espaços nominais:',
'default'                   => 'padrão',
'files'                     => 'Ficheiros',
'prefs-custom-css'          => 'CSS personalizada',
'prefs-custom-js'           => 'JS personalizado',

# User rights
'userrights'                  => 'Privilégios dos utilizadores', # Not used as normal message but as header for the special page itself
'userrights-lookup-user'      => 'Gerir grupos do utilizador',
'userrights-user-editname'    => 'Introduza um nome de utilizador:',
'editusergroup'               => 'Editar grupos do utilizador',
'editinguser'                 => "A modificar os privilégios do utilizador '''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]]{{int:pipe-separator}}[[Special:Contributions/$1|{{int:contribslink}}]])",
'userrights-editusergroup'    => 'Editar grupos do utilizador',
'saveusergroups'              => 'Gravar grupos do utilizador',
'userrights-groupsmember'     => 'Membro de:',
'userrights-groups-help'      => 'É possível alterar os grupos a que este utilizador pertence:
* Uma caixa de selecção marcada significa que o utilizador se encontra no grupo.
* Uma caixa de selecção desmarcada significa que o utilizador não se encontra no grupo.
* Um asterisco (*) indica que não pode remover o grupo depois de o adicionar, ou vice-versa.',
'userrights-reason'           => 'Motivo:',
'userrights-no-interwiki'     => 'Não possui permissão de alterar os privilégios de utilizadores noutras wikis.',
'userrights-nodatabase'       => 'A base de dados $1 não existe ou não é uma base de dados local.',
'userrights-nologin'          => 'Precisa [[Special:UserLogin|autenticar-se]] com uma conta de administrador para atribuir privilégios aos utilizadores.',
'userrights-notallowed'       => 'A sua conta não possui permissão para conceder privilégios a utilizadores.',
'userrights-changeable-col'   => 'Grupos que pode alterar',
'userrights-unchangeable-col' => 'Grupos que não pode alterar',

# Groups
'group'               => 'Grupo:',
'group-user'          => 'Utilizadores',
'group-autoconfirmed' => 'Utilizadores auto-confirmados',
'group-bot'           => 'Robôs',
'group-sysop'         => 'Administradores',
'group-bureaucrat'    => 'Burocratas',
'group-suppress'      => 'Supervisores',
'group-all'           => '(todos)',

'group-user-member'          => 'Utilizador',
'group-autoconfirmed-member' => 'Utilizador auto-confirmado',
'group-bot-member'           => 'Robô',
'group-sysop-member'         => 'Administrador',
'group-bureaucrat-member'    => 'Burocrata',
'group-suppress-member'      => 'Supervisor',

'grouppage-user'          => '{{ns:project}}:Utilizadores',
'grouppage-autoconfirmed' => '{{ns:project}}:Auto-confirmados',
'grouppage-bot'           => '{{ns:project}}:Robôs',
'grouppage-sysop'         => '{{ns:project}}:Administradores',
'grouppage-bureaucrat'    => '{{ns:project}}:Burocratas',
'grouppage-suppress'      => '{{ns:project}}:Supervisores',

# Rights
'right-read'                  => 'Ler páginas',
'right-edit'                  => 'Editar páginas',
'right-createpage'            => 'Criar páginas (que não sejam páginas de discussão)',
'right-createtalk'            => 'Criar páginas de discussão',
'right-createaccount'         => 'Criar novas contas de utilizador',
'right-minoredit'             => 'Marcar edições como menores',
'right-move'                  => 'Mover páginas',
'right-move-subpages'         => 'Mover páginas com as suas subpáginas',
'right-move-rootuserpages'    => 'Mover páginas raiz de utilizadores',
'right-movefile'              => 'Mover ficheiros',
'right-suppressredirect'      => 'Não criar um redireccionamento do nome antigo quando uma página é movida',
'right-upload'                => 'Carregar ficheiros',
'right-reupload'              => 'Sobrescrever um ficheiro existente',
'right-reupload-own'          => 'Sobrescrever um ficheiro existente carregado pelo mesmo utilizador',
'right-reupload-shared'       => 'Sobrescrever localmente ficheiros no repositório partilhado de imagens',
'right-upload_by_url'         => 'Carregar um ficheiro de um endereço URL',
'right-purge'                 => "Purgar a ''cache'' de uma página no servidor sem confirmação",
'right-autoconfirmed'         => 'Editar páginas semi-protegidas',
'right-bot'                   => 'Ser tratado como um processo automatizado',
'right-nominornewtalk'        => 'Não despoletar o aviso de novas mensagens ao fazer edições menores a páginas de discussão',
'right-apihighlimits'         => "Usar limites superiores em consultas ''(queries)'' via API",
'right-writeapi'              => 'Usar a API de escrita',
'right-delete'                => 'Eliminar páginas',
'right-bigdelete'             => 'Eliminar páginas com histórico grande',
'right-deleterevision'        => 'Eliminar e restaurar edições específicas de páginas',
'right-deletedhistory'        => 'Ver entradas de histórico eliminadas, sem o texto associado',
'right-browsearchive'         => 'Pesquisar páginas eliminadas',
'right-undelete'              => 'Restaurar uma página',
'right-suppressrevision'      => 'Rever e restaurar revisões ocultadas dos administradores',
'right-suppressionlog'        => 'Ver registos privados',
'right-block'                 => 'Impedir outros utilizadores de editarem',
'right-blockemail'            => 'Impedir um utilizador de enviar correio electrónico',
'right-hideuser'              => 'Bloquear um nome de utilizador, escondendo-o do público',
'right-ipblock-exempt'        => 'Contornar bloqueios de IP, bloqueios automáticos e bloqueios de gamas de IPs',
'right-proxyunbannable'       => 'Contornar bloqueios automáticos de proxies',
'right-protect'               => 'Mudar níveis de protecção e editar páginas protegidas',
'right-editprotected'         => 'Editar páginas protegidas (sem protecção em cascata)',
'right-editinterface'         => 'Editar a interface de utilizador',
'right-editusercssjs'         => 'Editar os ficheiros CSS e JS de outros utilizadores',
'right-rollback'              => 'Reverter rapidamente as edições do último utilizador que editou uma página em particular',
'right-markbotedits'          => 'Marcar edições revertidas como edições de bot',
'right-noratelimit'           => 'Não ser afectado pelos limites de velocidade de operação',
'right-import'                => 'Importar páginas de outras wikis',
'right-importupload'          => 'Importar páginas de um ficheiro xml',
'right-patrol'                => 'Marcar edições de outros utilizadores como patrulhadas',
'right-autopatrol'            => 'Ter edições automaticamente marcadas como patrulhadas',
'right-patrolmarks'           => 'Usar funcionalidades de patrulhagem das mudanças recentes',
'right-unwatchedpages'        => 'Ver uma lista de páginas não vigiadas',
'right-trackback'             => "Submeter um ''trackback''",
'right-mergehistory'          => 'Fundir o histórico de edições de páginas',
'right-userrights'            => 'Editar todos os privilégios de utilizador',
'right-userrights-interwiki'  => 'Editar privilégios de utilizadores noutras wikis',
'right-siteadmin'             => 'Bloquear e desbloquear a base de dados',
'right-reset-passwords'       => 'Repor a palavra-chave de outros utilizadores',
'right-override-export-depth' => 'Exportar páginas incluindo páginas ligadas até uma profundidade de 5',

# User rights log
'rightslog'      => 'Registo de privilégios de utilizador',
'rightslogtext'  => 'Este é um registo de mudanças nos privilégios dos utilizadores.',
'rightslogentry' => 'alterou grupo de acesso de $1 (de $2 para $3)',
'rightsnone'     => '(nenhum)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read'                 => 'ler esta página',
'action-edit'                 => 'editar esta página',
'action-createpage'           => 'criar páginas',
'action-createtalk'           => 'criar páginas de discussão',
'action-createaccount'        => 'criar esta conta de utilizador',
'action-minoredit'            => 'marcar esta edição como uma edição menor',
'action-move'                 => 'mover esta página',
'action-move-subpages'        => 'mover esta página e as respectivas subpáginas',
'action-move-rootuserpages'   => 'mover páginas raiz de utilizadores',
'action-movefile'             => 'mover este ficheiro',
'action-upload'               => 'enviar este ficheiro',
'action-reupload'             => 'sobrepor este ficheiro existente',
'action-reupload-shared'      => 'sobrepor este ficheiro num repositório partilhado',
'action-upload_by_url'        => 'enviar este ficheiro através de uma URL',
'action-writeapi'             => 'utilizar o modo de escrita da API',
'action-delete'               => 'eliminar esta página',
'action-deleterevision'       => 'eliminar esta edição',
'action-deletedhistory'       => 'ver o histórico de edições eliminadas desta página',
'action-browsearchive'        => 'pesquisar páginas eliminadas',
'action-undelete'             => 'restaurar esta página',
'action-suppressrevision'     => 'rever e restaurar esta edição oculta',
'action-suppressionlog'       => 'ver este registo privado',
'action-block'                => 'impedir este utilizador de editar',
'action-protect'              => 'alterar os níveis de proteção desta página',
'action-import'               => 'importar esta página a partir de outra wiki',
'action-importupload'         => 'importar esta página a partir de um ficheiro xml',
'action-patrol'               => 'marcar as edições de outros utilizadores como patrulhadas',
'action-autopatrol'           => 'marcar como patrulhadas as suas próprias edições',
'action-unwatchedpages'       => 'ver a lista de páginas não-vigiadas',
'action-trackback'            => "submeter um ''trackback''",
'action-mergehistory'         => 'fundir o histórico de edições desta página',
'action-userrights'           => 'editar os privilégios de utilizadores',
'action-userrights-interwiki' => 'editar privilégios de utilizadores de outras wikis',
'action-siteadmin'            => 'bloquear ou desbloquear a base de dados',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|alteração|alterações}}',
'recentchanges'                     => 'Mudanças recentes',
'recentchanges-legend'              => 'Opções das mudanças recentes',
'recentchangestext'                 => 'Acompanhe nesta página as mudanças mais recentes da wiki.',
'recentchanges-feed-description'    => "Acompanhe neste ''feed'' as mudanças mais recentes da wiki.",
'rcnote'                            => "A seguir {{PLURAL:$1|está listada '''uma''' alteração ocorrida|estão listadas '''$1''' alterações ocorridas}} {{PLURAL:$2|no último dia|nos últimos '''$2''' dias}}, a partir das $5 de $4.",
'rcnotefrom'                        => 'Abaixo estão as mudanças desde <b>$2</b> (mostradas até <b>$1</b>).',
'rclistfrom'                        => 'Mostrar as novas mudanças a partir das $1',
'rcshowhideminor'                   => '$1 edições menores',
'rcshowhidebots'                    => '$1 robôs',
'rcshowhideliu'                     => '$1 utilizadores registados',
'rcshowhideanons'                   => '$1 utilizadores anónimos',
'rcshowhidepatr'                    => '$1 edições patrulhadas',
'rcshowhidemine'                    => '$1 as minhas edições',
'rclinks'                           => 'Mostrar as últimas $1 mudanças nos últimos $2 dias<br />$3',
'diff'                              => 'dif',
'hist'                              => 'hist',
'hide'                              => 'Esconder',
'show'                              => 'Mostrar',
'minoreditletter'                   => 'm',
'newpageletter'                     => 'N',
'boteditletter'                     => 'b',
'number_of_watching_users_pageview' => '[{{PLURAL:$1|$1 utilizador|$1 utilizadores}} a vigiar]',
'rc_categories'                     => 'Limitar às categorias (separar com "|")',
'rc_categories_any'                 => 'Qualquer',
'newsectionsummary'                 => '/* $1 */ nova secção',
'rc-enhanced-expand'                => 'Mostrar detalhes (requer JavaScript)',
'rc-enhanced-hide'                  => 'Esconder detalhes',

# Recent changes linked
'recentchangeslinked'          => 'Alterações relacionadas',
'recentchangeslinked-title'    => 'Alterações relacionadas com "$1"',
'recentchangeslinked-noresult' => 'Não ocorreram alterações em páginas para as quais a página fornecida contém ligações, no intervalo de tempo escolhido.',
'recentchangeslinked-summary'  => "Lista das mudanças recentes a todas as páginas para as quais a página fornecida contém ligações (ou de todas as que pertencem à categoria fornecida).
As suas [[Special:Watchlist|páginas vigiadas]] aparecem a '''negrito'''.",
'recentchangeslinked-page'     => 'Nome da página:',
'recentchangeslinked-to'       => 'Inversamente, mostrar mudanças às páginas que contêm ligações para esta',

# Upload
'upload'                      => 'Carregar ficheiro',
'uploadbtn'                   => 'Carregar ficheiro',
'reupload'                    => 'Re-enviar',
'reuploaddesc'                => 'Cancelar o envio e voltar ao formulário de carregamento',
'uploadnologin'               => 'Não autenticado',
'uploadnologintext'           => 'Tem de estar [[Special:UserLogin|autenticado]] para enviar ficheiros.',
'upload_directory_missing'    => 'O directório de carregamento de ficheiros ($1) não existe e o servidor de internet não conseguiu criá-lo.',
'upload_directory_read_only'  => 'O servidor de internet não possui permissão de escrita no directório de carregamento de ficheiros ($1).',
'uploaderror'                 => 'Erro ao carregar',
'uploadtext'                  => "Utilize o formulário abaixo para carregar novos ficheiros.
Para ver ou pesquisar ficheiros anteriormente carregados, consulte a [[Special:FileList|lista de ficheiros]].
Os recarregamentos de um ficheiro são também registados no [[Special:Log/upload|registo de carregamentos]] e as eliminações no [[Special:Log/delete|registo de eliminações]].

Para utilizar um ficheiro numa página, depois de carregado, insira uma ligação com um dos seguintes formatos:
* '''<tt><nowiki>[[</nowiki>{{ns:file}}<nowiki>:ficheiro.jpg]]</nowiki></tt>''' para mostrar uma imagem nas suas dimensões originais;
* '''<tt><nowiki>[[</nowiki>{{ns:file}}<nowiki>:ficheiro.png|200px|thumb|left|texto]]</nowiki></tt>''' para mostrar uma imagem com a dimensão horizontal de 200 pixels, dentro de uma caixa, na margem esquerda, contendo 'texto' como descrição (pode usar subconjuntos destas características);
* '''<tt><nowiki>[[</nowiki>{{ns:media}}<nowiki>:ficheiro.ogg]]</nowiki></tt>''' para apresentar uma ligação directa para o ficheiro em vez de mostrá-lo, quer este tenha por conteúdo uma imagem ou outros dados.",
'upload-permitted'            => 'Tipos de ficheiros permitidos: $1.',
'upload-preferred'            => 'Tipos de ficheiros preferidos: $1.',
'upload-prohibited'           => 'Tipos de ficheiro proibidos: $1.',
'uploadlog'                   => 'registo de carregamento',
'uploadlogpage'               => 'Registo de carregamento',
'uploadlogpagetext'           => 'Segue-se uma lista dos carregamentos mais recentes.
Consulte a [[Special:NewFiles|galeria de novos ficheiros]] para uma visualização mais amigável.',
'filename'                    => 'Nome do ficheiro',
'filedesc'                    => 'Descrição do ficheiro',
'fileuploadsummary'           => 'Sumário:',
'filereuploadsummary'         => 'Alterações ao ficheiro:',
'filestatus'                  => 'Estado dos direitos de autor:',
'filesource'                  => 'Fonte:',
'uploadedfiles'               => 'Ficheiros carregados',
'ignorewarning'               => 'Ignorar o aviso e gravar o ficheiro.',
'ignorewarnings'              => 'Ignorar todos os avisos',
'minlength1'                  => 'Os nomes de ficheiros devem de ter pelo menos uma letra.',
'illegalfilename'             => 'O ficheiro "$1" possui caracteres que não são permitidos no título de uma página. Por favor, altere o nome do ficheiro e tente carregar novamente.',
'badfilename'                 => 'O nome do ficheiro foi alterado para "$1".',
'filetype-badmime'            => 'Não é permitido carregar ficheiros do tipo MIME "$1".',
'filetype-bad-ie-mime'        => 'Este ficheiro não pôde ser carregado porque o Internet Explorer o iria detectar como "$1", que é um tipo de ficheiro não permitido e potencialmente perigoso.',
'filetype-unwanted-type'      => "'''\".\$1\"''' não é um tipo de ficheiro desejado.
{{PLURAL:\$3|O tipo preferido é|Os tipos preferidos são}} \$2.",
'filetype-banned-type'        => "'''\".\$1\"''' não é um tipo de ficheiro permitido.
{{PLURAL:\$3|O tipo permitido é|Os tipos permitidos são}} \$2.",
'filetype-missing'            => 'O ficheiro não possui uma extensão (como, por exemplo, ".jpg").',
'large-file'                  => 'É recomendável que os ficheiros não sejam maiores que $1;
este tem $2.',
'largefileserver'             => 'O tamanho deste ficheiro é superior ao permitido pela configuração do servidor.',
'emptyfile'                   => 'O ficheiro que está a tentar carregar parece encontrar-se vazio. Isto poderá ser devido a um erro na escrita do nome do ficheiro. Por favor verifique se realmente deseja carregar este ficheiro.',
'fileexists'                  => "Já existe um ficheiro com este nome.
Por favor, verifique '''<tt>[[:$1]]</tt>''' caso não tenha a certeza se deseja alterar o ficheiro actual.
[[$1|thumb]]",
'filepageexists'              => "A página de descrição deste ficheiro já foi criada em '''<tt>[[:$1]]</tt>''', mas neste momento não existe nenhum ficheiro com este nome.
O sumário que introduzir não aparecerá na página de descrição.
Para fazê-lo aparecer, terá de editar a página manualmente.
[[$1|thumb]]",
'fileexists-extension'        => "Já existe um ficheiro de nome semelhante: [[$2|thumb]]
* Nome do ficheiro que está sendo carregado: '''<tt>[[:$1]]</tt>'''
* Nome do ficheiro existente: '''<tt>[[:$2]]</tt>'''
Por favor, escolha um nome diferente.",
'fileexists-thumb'            => "<center>'''Ficheiro existente'''</center>",
'fileexists-thumbnail-yes'    => "O ficheiro aparenta ser uma imagem de tamanho reduzido (''miniatura'', ou ''thumbnail)''. [[$1|thumb]]
Por favor, verifique o ficheiro '''<tt>[[:$1]]</tt>'''.
Se este ficheiro é a mesma imagem mas no tamanho original, não é necessário carregar uma miniatura.",
'file-thumbnail-no'           => "O nome do ficheiro começa por '''<tt>$1</tt>'''.
Parece ser uma imagem de tamanho reduzido (uma ''miniatura'' ou ''thumbnail)''.
Se tiver a imagem original de maior dimensão, envie-a em vez desta. Se não, por favor altere o nome do ficheiro.",
'fileexists-forbidden'        => 'Já existe um ficheiro com este nome, e não pode ser reescrito.
Se ainda pretende carregar o seu ficheiro, por favor, volte atrás e use um novo nome. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Já existe um ficheiro com este nome no repositório de ficheiros partilhados. 
Caso deseje, mesmo assim, carregar o seu ficheiro, volte atrás e envie-o com um novo nome. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate'       => 'Este ficheiro é um duplicado {{PLURAL:$1|do seguinte|dos seguintes}}:',
'file-deleted-duplicate'      => 'Um ficheiro idêntico a este ([[$1]]) foi eliminado anteriormente.
Verifique o motivo da eliminação do ficheiro antes de prosseguir com o re-envio.',
'successfulupload'            => 'Envio efectuado com sucesso',
'uploadwarning'               => 'Aviso de envio',
'savefile'                    => 'Gravar ficheiro',
'uploadedimage'               => 'carregou "[[$1]]"',
'overwroteimage'              => 'foi enviada uma nova versão de "[[$1]]"',
'uploaddisabled'              => 'Carregamentos impossibilitados',
'uploaddisabledtext'          => 'O carregamento de ficheiros está impossibilitado.',
'php-uploaddisabledtext'      => 'O carregamento de ficheiros está impossibilitado no PHP.
Por favor, verifique a configuração file_uploads.',
'uploadscripted'              => 'Este ficheiro contém HTML ou código que pode ser erradamente interpretado por um navegador.',
'uploadcorrupt'               => 'O ficheiro está corrompido ou a extensão indicada no nome não corresponde ao tipo de ficheiro.
Por favor, verifique o ficheiro e a extensão e tente carregá-lo novamente.',
'uploadvirus'                 => 'O ficheiro contém um vírus! Detalhes: $1',
'sourcefilename'              => 'Nome do ficheiro de origem:',
'destfilename'                => 'Nome do ficheiro de destino:',
'upload-maxfilesize'          => 'Tamanho máximo do ficheiro: $1',
'watchthisupload'             => 'Vigiar este ficheiro',
'filewasdeleted'              => 'Um ficheiro com este nome foi carregado anteriormente e subsequentemente eliminado.
Deverá verificar o $1 antes de voltar a enviá-lo.',
'upload-wasdeleted'           => "'''Aviso: Está a carregar um ficheiro anteriormente eliminado.'''

Verifique se é apropriado prosseguir este envio.
Para sua conveniência, é apresentado de seguida o registo de eliminação do ficheiro:",
'filename-bad-prefix'         => "O nome do ficheiro que está a carregar começa por '''\"\$1\"''', um nome pouco explicativo, normalmente originado de forma automática por câmaras digitais. Por favor, escolha um nome de ficheiro mais explicativo.",
'filename-prefix-blacklist'   => ' #<!-- deixe esta linha exactamente como está --> <pre>
# A sintaxe é a seguinte:
#   * Tudo a partir do caractere "#" até ao fim da linha é um comentário
#   * Todas as linhas não vazias são um prefixo para nomes de ficheiros típicos atribuídos automaticamente por câmaras digitais
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # alguns telefones móveis
IMG # genérico
JD # Jenoptik
MGP # Pentax
PICT # misc.
 #</pre> <!-- deixe esta linha exactamente como está -->',

'upload-proto-error'      => 'Protocolo incorrecto',
'upload-proto-error-text' => 'O carregamento remoto de ficheiros requer endereços URL começados por <code>http://</code> ou <code>ftp://</code>.',
'upload-file-error'       => 'Erro interno',
'upload-file-error-text'  => 'Ocorreu um erro interno ao tentar criar um ficheiro temporário no servidor.
Por favor, contacte um [[Special:ListUsers/sysop|administrador]].',
'upload-misc-error'       => 'Erro desconhecido de envio',
'upload-misc-error-text'  => 'Ocorreu um erro desconhecido durante o envio.
Verifique se o endereço (URL) é válido e acessível e tente novamente.
Caso o problema persista, contacte um [[Special:ListUsers/sysop|administrador]].',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'Não foi possível aceder à URL',
'upload-curl-error6-text'  => 'Não foi possível aceder à URL.
Por favor, verifique se o endereço está correcto e o sítio disponível.',
'upload-curl-error28'      => 'Tempo limite para o envio do ficheiro excedido',
'upload-curl-error28-text' => 'O sítio demorou muito tempo a responder. Por favor, verifique se o sítio está acessível, aguarde alguns momentos e tente novamente. Talvez possa tentar num horário menos congestionado.',

'license'            => 'Licença:',
'nolicense'          => 'Nenhuma seleccionada',
'license-nopreview'  => '(Antevisão não disponível)',
'upload_source_url'  => ' (uma URL válida, publicamente acessível)',
'upload_source_file' => ' (um ficheiro no seu computador)',

# Special:ListFiles
'listfiles-summary'     => 'Esta página especial mostra todos os ficheiros carregados.
Por omissão, os últimos ficheiros carregados aparecem no topo da lista.
Clique um cabeçalho de coluna para alterar a ordenação.',
'listfiles_search_for'  => 'Pesquisar por nome de imagem:',
'imgfile'               => 'ficheiro',
'listfiles'             => 'Ficheiros',
'listfiles_date'        => 'Data',
'listfiles_name'        => 'Nome',
'listfiles_user'        => 'Utilizador',
'listfiles_size'        => 'Tamanho',
'listfiles_description' => 'Descrição',
'listfiles_count'       => 'Versões',

# File description page
'filehist'                  => 'Histórico do ficheiro',
'filehist-help'             => 'Clique numa data/hora para ver o ficheiro tal como se encontrava nesse momento.',
'filehist-deleteall'        => 'eliminar todas',
'filehist-deleteone'        => 'eliminar',
'filehist-revert'           => 'restaurar',
'filehist-current'          => 'actual',
'filehist-datetime'         => 'Data/Hora',
'filehist-thumb'            => 'Miniatura',
'filehist-thumbtext'        => 'Miniatura da versão das $1',
'filehist-nothumb'          => 'Miniatura indisponível',
'filehist-user'             => 'Utilizador',
'filehist-dimensions'       => 'Dimensões',
'filehist-filesize'         => 'Tamanho do ficheiro',
'filehist-comment'          => 'Comentário',
'imagelinks'                => 'Ligações para este ficheiro',
'linkstoimage'              => '{{PLURAL:$1|A seguinte página contém|As seguintes $1 páginas contêm}} ligações para este ficheiro:',
'linkstoimage-more'         => 'Mais de {{PLURAL:$1|uma página contém|$1 páginas contêm}} ligações para este ficheiro.
A lista abaixo apresenta apenas {{PLURAL:$1|a primeira página|as primeiras $1 páginas}}.
Encontra-se disponível uma [[Special:WhatLinksHere/$2|lista completa]].',
'nolinkstoimage'            => 'Nenhuma página contém ligações para este ficheiro.',
'morelinkstoimage'          => 'Ver a [[Special:WhatLinksHere/$1|lista completa]] de páginas que contêm ligações para este ficheiro.',
'redirectstofile'           => '{{PLURAL:$1|O seguinte ficheiro redirecciona|Os seguintes ficheiros redireccionam}} para este ficheiro:',
'duplicatesoffile'          => '{{PLURAL:$1|O seguinte ficheiro é duplicado|Os seguintes $1 ficheiros são duplicados}} deste ficheiro ([[Special:FileDuplicateSearch/$2|mais detalhes]]):',
'sharedupload'              => 'Este ficheiro provém de $1 e pode ser utilizado por outros projectos.', # $1 is the repo name, $2 is shareduploadwiki(-desc)
'shareduploadwiki'          => 'Por favor, consulte a $1 para mais informações.',
'shareduploadwiki-desc'     => 'A descrição lá na sua $1 é mostrada abaixo.',
'shareduploadwiki-linktext' => 'página de descrição de ficheiro',
'noimage'                   => 'Não existe nenhum ficheiro com este nome, mas pode $1.',
'noimage-linktext'          => 'carregá-lo',
'uploadnewversion-linktext' => 'Carregar uma nova versão deste ficheiro',
'shared-repo-from'          => 'de $1', # $1 is the repository name
'shared-repo'               => 'um repositório partilhado', # used when shared-repo-NAME does not exist

# File reversion
'filerevert'                => 'Reverter $1',
'filerevert-legend'         => 'Reverter ficheiro',
'filerevert-intro'          => "Está prestes a reverter o ficheiro '''[[Media:$1|$1]]''' para a [$4 versão das $3 de $2].",
'filerevert-comment'        => 'Comentário:',
'filerevert-defaultcomment' => 'Revertido para a versão de $1 - $2',
'filerevert-submit'         => 'Reverter',
'filerevert-success'        => "'''[[Media:$1|$1]]''' foi revertida para a [$4 versão das $3 de $2].",
'filerevert-badversion'     => 'Não há uma versão local anterior deste ficheiro no período de tempo especificado.',

# File deletion
'filedelete'                  => 'Eliminar $1',
'filedelete-legend'           => 'Eliminar ficheiro',
'filedelete-intro'            => "Está prestes a eliminar o ficheiro '''[[Media:$1|$1]]''' e todo o seu histórico.",
'filedelete-intro-old'        => "Está prestes a eliminar a versão de '''[[Media:$1|$1]]''' tal como se encontrava em [$4 $3, $2].",
'filedelete-comment'          => 'Motivo de eliminação:',
'filedelete-submit'           => 'Eliminar',
'filedelete-success'          => "'''$1''' foi eliminado.",
'filedelete-success-old'      => "A versão de '''[[Media:$1|$1]]''' tal como $3, $2 foi eliminada.",
'filedelete-nofile'           => "'''$1''' não existe.",
'filedelete-nofile-old'       => "Não há uma versão de '''$1''' em arquivo com os parâmetros especificados.",
'filedelete-otherreason'      => 'Outro/motivo adicional:',
'filedelete-reason-otherlist' => 'Outro motivo',
'filedelete-reason-dropdown'  => '*Motivos comuns para eliminação
** Violação de direitos de autor
** Ficheiro duplicado',
'filedelete-edit-reasonlist'  => 'Editar motivos de eliminação',

# MIME search
'mimesearch'         => 'Pesquisa MIME',
'mimesearch-summary' => 'Esta página permite pesquisar os ficheiros da wiki, filtrando-os a partir do seu tipo MIME. O tipo MIME deve ser especificado na forma: tipo/subtipo. Alguns exemplos de tipos frequentes: <tt>image/jpeg</tt>, <tt>image/gif</tt>, <tt>image/png</tt>, <tt>application/pdf</tt>, <tt>application/vnd.ms-excel</tt>, <tt>application/zip</tt>, <tt>application/vnd.ms-powerpoint</tt>.',
'mimetype'           => 'Tipo MIME:',
'download'           => 'download',

# Unwatched pages
'unwatchedpages' => 'Páginas não vigiadas',

# List redirects
'listredirects' => 'Redireccionamentos',

# Unused templates
'unusedtemplates'     => 'Predefinições não utilizadas',
'unusedtemplatestext' => 'Esta página lista todas as páginas no espaço nominal {{ns:template}} que não são incluídas em nenhuma outra página. Lembre-se de verificar a existência de outras ligações para as predefinições, antes de as eliminar.',
'unusedtemplateswlh'  => 'outras ligações',

# Random page
'randompage'         => 'Página aleatória',
'randompage-nopages' => 'Não há páginas no espaço nominal "$1".',

# Random redirect
'randomredirect'         => 'Redireccionamento aleatório',
'randomredirect-nopages' => 'Não há redireccionamentos no espaço nominal "$1".',

# Statistics
'statistics'                   => 'Estatísticas',
'statistics-header-pages'      => 'Estatísticas de páginas',
'statistics-header-edits'      => 'Estatísticas de edições',
'statistics-header-views'      => 'Ver estatísticas',
'statistics-header-users'      => 'Estatísticas de utilizadores',
'statistics-articles'          => 'Páginas de conteúdo',
'statistics-pages'             => 'Páginas',
'statistics-pages-desc'        => 'Todas as páginas da wiki, incluindo páginas de discussão, redireccionamentos, etc.',
'statistics-files'             => 'Ficheiros carregados',
'statistics-edits'             => 'Edições de página desde que a {{SITENAME}} foi instalada',
'statistics-edits-average'     => 'Média de edições por página',
'statistics-views-total'       => 'Total de visualizações',
'statistics-views-peredit'     => 'Visualizações por edição',
'statistics-jobqueue'          => 'Tamanho da [http://www.mediawiki.org/wiki/Manual:Job_queue fila de tarefas]',
'statistics-users'             => '[[Special:ListUsers|Utilizadores]] registados',
'statistics-users-active'      => 'Utilizadores activos',
'statistics-users-active-desc' => 'Utilizadores que efectuaram uma ação {{PLURAL:$1|no último dia|nos últimos $1 dias}}',
'statistics-mostpopular'       => 'Páginas mais vistas',

'disambiguations'      => 'Desambiguações',
'disambiguationspage'  => 'Template:disambig',
'disambiguations-text' => 'As páginas abaixo contêm ligações para páginas de desambiguação.
Estas ligações deviam ser desambiguadas, apontando-as para a página apropriada.<br /> 
Considera-se que uma página é de desambiguação se nela for utilizada uma predefinição que esteja definida em [[MediaWiki:Disambiguationspage]].',

'doubleredirects'            => 'Redireccionamentos duplos',
'doubleredirectstext'        => 'Esta página lista todas as páginas que redireccionam para outras páginas de redireccionamento.
Cada linha contém ligações para o primeiro e segundo redireccionamentos, bem como o destino do segundo redireccionamento, geralmente contendo a verdadeira página de destino, que devia ser o destino do primeiro redireccionamento.
<s>Entradas cortadas</s> foram já solucionadas.',
'double-redirect-fixed-move' => '[[$1]] foi movido, passando a redirecionar para [[$2]]',
'double-redirect-fixer'      => 'Corretor de redirecionamentos',

'brokenredirects'        => 'Redireccionamentos quebrados',
'brokenredirectstext'    => 'Os seguintes redireccionamentos ligam para páginas inexistentes:',
'brokenredirects-edit'   => '(editar)',
'brokenredirects-delete' => '(eliminar)',

'withoutinterwiki'         => 'Páginas sem ligações interlínguas',
'withoutinterwiki-summary' => 'As seguintes páginas não possuem ligações para versões noutras línguas.',
'withoutinterwiki-legend'  => 'Prefixo',
'withoutinterwiki-submit'  => 'Mostrar',

'fewestrevisions' => 'Páginas com menos revisões',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories'             => '$1 {{PLURAL:$1|categoria|categorias}}',
'nlinks'                  => '$1 {{PLURAL:$1|ligação|ligações}}',
'nmembers'                => '$1 {{PLURAL:$1|membro|membros}}',
'nrevisions'              => '$1 {{PLURAL:$1|edição|edições}}',
'nviews'                  => '$1 {{PLURAL:$1|visita|visitas}}',
'specialpage-empty'       => 'Não existem dados para apresentar.',
'lonelypages'             => 'Páginas órfãs',
'lonelypagestext'         => 'As seguintes páginas não são destino de ligações nem são transcluídas a partir de outras páginas nesta wiki.',
'uncategorizedpages'      => 'Páginas não categorizadas',
'uncategorizedcategories' => 'Categorias não categorizadas',
'uncategorizedimages'     => 'Ficheiros não categorizados',
'uncategorizedtemplates'  => 'Predefinições não categorizadas',
'unusedcategories'        => 'Categorias não utilizadas',
'unusedimages'            => 'Ficheiros não utilizados',
'popularpages'            => 'Páginas populares',
'wantedcategories'        => 'Categorias desejadas',
'wantedpages'             => 'Páginas desejadas',
'wantedpages-badtitle'    => 'Título inválido no conjunto de resultados: $1',
'wantedfiles'             => 'Ficheiros desejados',
'wantedtemplates'         => 'Predefinições desejadas',
'mostlinked'              => 'Páginas com mais afluentes',
'mostlinkedcategories'    => 'Categorias com mais membros',
'mostlinkedtemplates'     => 'Predefinições com mais afluentes',
'mostcategories'          => 'Páginas com mais categorias',
'mostimages'              => 'Ficheiros com mais afluentes',
'mostrevisions'           => 'Páginas com mais revisões',
'prefixindex'             => 'Todas as páginas iniciadas por',
'shortpages'              => 'Páginas curtas',
'longpages'               => 'Páginas longas',
'deadendpages'            => 'Páginas sem saída',
'deadendpagestext'        => 'As seguintes páginas não contêm ligações para outras páginas nesta wiki.',
'protectedpages'          => 'Páginas protegidas',
'protectedpages-indef'    => 'Apenas protecções infinitas',
'protectedpages-cascade'  => 'Apenas protecções em cascata',
'protectedpagestext'      => 'As seguintes páginas encontram-se protegidas contra edições ou movimentações',
'protectedpagesempty'     => 'Neste momento, nenhuma página está protegida com estes parâmetros.',
'protectedtitles'         => 'Títulos protegidos',
'protectedtitlestext'     => 'Os títulos a seguir encontram-se protegidos contra criação',
'protectedtitlesempty'    => 'Neste momento, nenhum título está protegido com estes parâmetros.',
'listusers'               => 'Utilizadores',
'listusers-editsonly'     => 'Mostrar apenas utilizadores com edições',
'listusers-creationsort'  => 'Ordenar por data de criação',
'usereditcount'           => '$1 {{PLURAL:$1|edição|edições}}',
'usercreated'             => 'Criado em $1 às $2',
'newpages'                => 'Páginas recentes',
'newpages-username'       => 'Nome de utilizador:',
'ancientpages'            => 'Páginas mais antigas',
'move'                    => 'Mover',
'movethispage'            => 'Mover esta página',
'unusedimagestext'        => 'Os seguintes ficheiros existem mas não são usados na wiki.
No entanto, outros sítios na internet podem fazer ligações para um ficheiro através de uma URL directa e, por isso, podem estar listados ficheiros que estão a ser activamente usados por entidades externas.',
'unusedcategoriestext'    => 'As seguintes categorias existem, embora nenhuma página ou categoria faça uso delas.',
'notargettitle'           => 'Sem alvo',
'notargettext'            => 'Especifique sobre que página alvo ou utilizador pretende executar esta função.',
'nopagetitle'             => 'Página alvo não existe',
'nopagetext'              => 'A página alvo especificada não existe.',
'pager-newer-n'           => '{{PLURAL:$1|posterior|$1 posteriores}}',
'pager-older-n'           => '{{PLURAL:$1|1 anterior|$1 anteriores}}',
'suppress'                => 'Supervisor',

# Book sources
'booksources'               => 'Fontes de livros',
'booksources-search-legend' => 'Procurar fontes de livros',
'booksources-go'            => 'Prosseguir',
'booksources-text'          => 'É apresentada abaixo uma lista de ligações para outros sítios na internet que vendem livros novos e usados e talvez possuam informações adicionais sobre os livros que procura:',
'booksources-invalid-isbn'  => 'O número ISBN fornecido não parece ser válido; verifique a existência de erros ao copiar da fonte original.',

# Special:Log
'specialloguserlabel'  => 'Utilizador:',
'speciallogtitlelabel' => 'Título:',
'log'                  => 'Registos',
'all-logs-page'        => 'Todos os registos públicos',
'alllogstext'          => 'Apresentação combinada de todos os registos disponíveis na wiki {{SITENAME}}.
Pode reduzir a lista escolhendo um tipo de registo, um nome de utilizador ou um título de página. Respeite maiúsculas e minúsculas.',
'logempty'             => 'Não há dados a apresentar.',
'log-title-wildcard'   => 'Procurar títulos iniciados por este texto',

# Special:AllPages
'allpages'          => 'Todas as páginas',
'alphaindexline'    => '$1 até $2',
'nextpage'          => 'Página seguinte ($1)',
'prevpage'          => 'Página anterior ($1)',
'allpagesfrom'      => 'Apresentar páginas desde:',
'allpagesto'        => 'Apresentar páginas até:',
'allarticles'       => 'Todas as páginas',
'allinnamespace'    => 'Todas as páginas (espaço nominal $1)',
'allnotinnamespace' => 'Todas as páginas (excepto as do espaço nominal $1)',
'allpagesprev'      => 'Anterior',
'allpagesnext'      => 'Próximo',
'allpagessubmit'    => 'Prosseguir',
'allpagesprefix'    => 'Apresentar páginas iniciadas por:',
'allpagesbadtitle'  => 'O título de página fornecido era inválido ou tinha um prefixo de ligação interlínguas ou interwikis.
Talvez contenha um ou mais caracteres que não podem ser usados em títulos.',
'allpages-bad-ns'   => 'A {{SITENAME}} não possui o espaço nominal "$1".',

# Special:Categories
'categories'                    => 'Categorias',
'categoriespagetext'            => 'As seguintes categorias contêm páginas ou multimédia.
As [[Special:UnusedCategories|categorias não utilizadas]] não são exibidas nesta listagem.
Veja também as [[Special:WantedCategories|categorias em falta]].',
'categoriesfrom'                => 'Listar categorias começando por:',
'special-categories-sort-count' => 'ordenar por contagem',
'special-categories-sort-abc'   => 'ordenar alfabeticamente',

# Special:DeletedContributions
'deletedcontributions'       => 'Edições eliminadas',
'deletedcontributions-title' => 'Edições eliminadas',

# Special:LinkSearch
'linksearch'       => 'Ligações externas',
'linksearch-pat'   => 'Padrão de busca:',
'linksearch-ns'    => 'Espaço nominal:',
'linksearch-ok'    => 'Prosseguir',
'linksearch-text'  => "É possível usar caracteres de substituição ''(wildcards)'' no padrão de busca, como por exemplo: \"*.wikipedia.org\".<br />Protocolos suportados: <tt>\$1</tt>",
'linksearch-line'  => 'Ligação para $1 na página $2',
'linksearch-error' => "Caracteres de substituição ''(wildcards)'' só podem ser usados no início do endereço.",

# Special:ListUsers
'listusersfrom'      => 'Mostrar utilizadores começando em:',
'listusers-submit'   => 'Mostrar',
'listusers-noresult' => 'Não foram encontrados utilizadores para a forma pesquisada.',

# Special:Log/newusers
'newuserlogpage'              => 'Registo de criação de utilizadores',
'newuserlogpagetext'          => 'Este é um registo de novas contas de utilizador',
'newuserlog-byemail'          => 'palavra-chave enviada por correio-electrónico',
'newuserlog-create-entry'     => 'Novo utilizador',
'newuserlog-create2-entry'    => 'criou nova conta $1',
'newuserlog-autocreate-entry' => 'Conta criada automaticamente',

# Special:ListGroupRights
'listgrouprights'                 => 'Privilégios dos grupos de utilizadores',
'listgrouprights-summary'         => 'A seguinte lista contém os grupos de utilizadores definidos nesta wiki, com os respectivos privilégios de acesso.
Encontram-se disponíveis [[{{MediaWiki:Listgrouprights-helppage}}|informações adicionais]] sobre privilégios individuais.',
'listgrouprights-group'           => 'Grupo',
'listgrouprights-rights'          => 'Privilégios',
'listgrouprights-helppage'        => 'Help:Privilégios de grupo',
'listgrouprights-members'         => '(lista de membros)',
'listgrouprights-addgroup'        => 'Adicionar utilizadores {{PLURAL:$2|ao grupo|aos grupos}}: $1',
'listgrouprights-removegroup'     => 'Remover utilizadores {{PLURAL:$2|do grupo|dos grupos}}: $1',
'listgrouprights-addgroup-all'    => 'Adicionar utilizadores a todos os grupos',
'listgrouprights-removegroup-all' => 'Remover utilizadores de todos os grupos',

# E-mail user
'mailnologin'      => 'Nenhum endereço de envio',
'mailnologintext'  => 'Precisa de estar [[Special:UserLogin|autenticado]] e possuir um endereço de correio válido nas suas [[Special:Preferences|preferências]], para poder enviar correio electrónico a outros utilizadores.',
'emailuser'        => 'Contactar este utilizador',
'emailpage'        => 'Contactar utilizador',
'emailpagetext'    => 'Pode usar o formulário abaixo para enviar uma mensagem por correio electrónico para este utilizador.
O endereço de correio que introduziu nas [[Special:Preferences|suas preferências]] irá aparecer no campo do remetente da mensagem "De:", para que o destinatário lhe possa responder directamente.',
'usermailererror'  => 'O sistema de correio devolveu o erro:',
'defemailsubject'  => 'Correio da {{SITENAME}}',
'noemailtitle'     => 'Sem endereço de correio electrónico',
'noemailtext'      => 'Este utilizador não especificou um endereço de correio electrónico válido.',
'nowikiemailtitle' => 'Correio electrónico não é permitido',
'nowikiemailtext'  => 'Este utilizador optou por não receber correio electrónico de outros utilizadores.',
'email-legend'     => 'Enviar correio electrónico para outro utilizador da {{SITENAME}}',
'emailfrom'        => 'De:',
'emailto'          => 'Para:',
'emailsubject'     => 'Assunto:',
'emailmessage'     => 'Mensagem:',
'emailsend'        => 'Enviar',
'emailccme'        => 'Enviar uma cópia desta mensagem para o meu correio electrónico.',
'emailccsubject'   => 'Cópia da sua mensagem para $1: $2',
'emailsent'        => 'Mensagem enviada',
'emailsenttext'    => 'A sua mensagem foi enviada.',
'emailuserfooter'  => 'Esta mensagem foi enviada por $1 para $2 usando a opção "Contactar este utilizador" da {{SITENAME}}.',

# Watchlist
'watchlist'            => 'Páginas vigiadas',
'mywatchlist'          => 'Páginas vigiadas',
'watchlistfor'         => "(para '''$1''')",
'nowatchlist'          => 'A sua lista de páginas vigiadas está vazia.',
'watchlistanontext'    => 'Por favor, $1 para ver ou editar a sua lista de páginas vigiadas.',
'watchnologin'         => 'Não está autenticado',
'watchnologintext'     => 'Precisa de estar [[Special:UserLogin|autenticado]] para modificar a sua lista de páginas vigiadas.',
'addedwatch'           => 'Adicionado à lista',
'addedwatchtext'       => "A página \"[[:\$1]]\" foi adicionada à sua lista de [[Special:Watchlist|páginas vigiadas]], onde serão indicadas quaisquer
modificações futuras desta página e da respectiva página de discussão.
O nome desta página passará a aparecer a '''negrito''' na lista de [[Special:RecentChanges|mudanças recentes]] para que a encontre facilmente.",
'removedwatch'         => 'Removida da lista de páginas vigiadas',
'removedwatchtext'     => 'A página "[[:$1]]" foi removida da sua lista de [[Special:Watchlist|páginas vigiadas]].',
'watch'                => 'Vigiar',
'watchthispage'        => 'Vigiar esta página',
'unwatch'              => 'Desinteressar-se',
'unwatchthispage'      => 'Parar de vigiar esta página',
'notanarticle'         => 'Não é uma página de conteúdo',
'notvisiblerev'        => 'Edição eliminada',
'watchnochange'        => 'Nenhuma das páginas vigiadas foi editada no período apresentado.',
'watchlist-details'    => '{{PLURAL:$1|Existe $1 página|Existem $1 páginas}} na sua lista de páginas vigiadas, excluindo páginas de discussão.',
'wlheader-enotif'      => '* A notificação por correio electrónico está activada.',
'wlheader-showupdated' => "* As páginas modificadas desde a última vez que as visitou aparecem destacadas a '''negrito'''",
'watchmethod-recent'   => 'verificando as mudanças recentes em busca de páginas vigiadas',
'watchmethod-list'     => 'verificando as páginas vigiadas em busca de mudanças recentes',
'watchlistcontains'    => 'A sua lista de páginas vigiadas contém $1 {{PLURAL:$1|página|páginas}}.',
'iteminvalidname'      => "Problema com item '$1', nome inválido...",
'wlnote'               => "A seguir {{PLURAL:$1|está a última alteração ocorrida|estão as últimas '''$1''' alterações ocorridas}} {{PLURAL:$2|na última hora|nas últimas '''$2''' horas}}.",
'wlshowlast'           => 'Ver últimas $1 horas $2 dias $3',
'watchlist-options'    => 'Opções da lista de páginas vigiadas',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'A vigiar...',
'unwatching' => 'Deixando de vigiar...',

'enotif_mailer'                => 'Gerador de Notificações da {{SITENAME}}',
'enotif_reset'                 => 'Marcar todas as páginas como visitadas',
'enotif_newpagetext'           => 'Esta é uma página nova.',
'enotif_impersonal_salutation' => 'Utilizador do projeto "{{SITENAME}}"',
'changed'                      => 'alterada',
'created'                      => 'criada',
'enotif_subject'               => '{{SITENAME}}: A página $PAGETITLE foi $CHANGEDORCREATED por $PAGEEDITOR',
'enotif_lastvisited'           => 'Consulte $1 para todas as alterações efectuadas desde a sua última visita.',
'enotif_lastdiff'              => 'Consulte $1 para ver esta alteração.',
'enotif_anon_editor'           => 'utilizador anonimo $1',
'enotif_body'                  => 'Caro $WATCHINGUSERNAME,


A página $PAGETITLE na {{SITENAME}} foi $CHANGEDORCREATED a $PAGEEDITDATE por $PAGEEDITOR; consulte $PAGETITLE_URL para a versão actual.

$NEWPAGE

Sumário de edição: $PAGESUMMARY $PAGEMINOREDIT

Contacte o editor:
e-mail: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Não haverá mais notificações no caso de futuras alterações a não ser que visite esta página. Poderá também restaurar as bandeiras de notificação para todas as suas páginas vigiadas na sua lista de vigiados.

             O seu amigável sistema de notificação da {{SITENAME}}

--
Para alterar as suas preferências da lista de vigiados, visite
{{fullurl:Special:Watchlist/edit}}

Contacto e assistência:
{{fullurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage'             => 'Eliminar página',
'confirm'                => 'Confirmar',
'excontent'              => "o conteúdo era: '$1'",
'excontentauthor'        => "o conteúdo era: '$1' (e o único editor era '[[Special:Contributions/$2|$2]]')",
'exbeforeblank'          => "o conteúdo antes de esvaziar era: '$1'",
'exblank'                => 'página esvaziada',
'delete-confirm'         => 'Eliminar "$1"',
'delete-legend'          => 'Eliminar',
'historywarning'         => 'Aviso: A página que está prestes a eliminar possui um histórico:',
'confirmdeletetext'      => 'Está prestes a eliminar permanentemente uma página ou uma imagem e todo o seu histórico.
Por favor, confirme que é realmente esta a sua intenção, que compreende as consequências e que o faz de acordo com as [[{{MediaWiki:Policy-url}}|políticas]] do projecto.',
'actioncomplete'         => 'Operação executada',
'deletedtext'            => '"<nowiki>$1</nowiki>" foi eliminada.
Consulte $2 para um registo de eliminações recentes.',
'deletedarticle'         => 'eliminou "[[$1]]"',
'suppressedarticle'      => 'suprimiu "[[$1]]"',
'dellogpage'             => 'Registo de eliminações',
'dellogpagetext'         => 'Abaixo uma lista das eliminações mais recentes.',
'deletionlog'            => 'registo de eliminações',
'reverted'               => 'Revertido para versão anterior',
'deletecomment'          => 'Motivo de eliminação:',
'deleteotherreason'      => 'Outro/motivo adicional:',
'deletereasonotherlist'  => 'Outro motivo',
'deletereason-dropdown'  => '* Motivos de eliminação comuns
** Pedido do autor
** Violação de direitos de autor
** Vandalismo',
'delete-edit-reasonlist' => 'Editar motivos de eliminação',
'delete-toobig'          => 'Esta página possui um longo histórico, com mais de $1 {{PLURAL:$1|edição|edições}}.
A eliminação de tais páginas foi restringida na {{SITENAME}}, para evitar problemas acidentais.',
'delete-warning-toobig'  => 'Esta página possui um longo histórico de edições, com mais de $1 {{PLURAL:$1|edição|edições}}.
Eliminá-la poderá causar problemas na base de dados da {{SITENAME}};
prossiga com precaução.',

# Rollback
'rollback'         => 'Reverter edições',
'rollback_short'   => 'Voltar',
'rollbacklink'     => 'voltar',
'rollbackfailed'   => 'A reversão falhou',
'cantrollback'     => 'Não foi possível reverter a edição; o último contribuidor é o único autor desta página',
'alreadyrolled'    => 'Não foi possível reverter as edições de [[:$1]] por [[User:$2|$2]] ([[User talk:$2|discussão]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]);
alguém editou ou já reverteu a página.

A última edição foi de [[User:$3|$3]] ([[User talk:$3|discussão]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment'      => "O sumário de edição era: \"''\$1''\".", # only shown if there is an edit comment
'revertpage'       => 'Foram revertidas as edições de [[Special:Contributions/$2|$2]] ([[User talk:$2|disc]]) para a última versão por [[User:$1|$1]]', # Additionally available: $3: revid of the revision reverted to, $4: timestamp of the revision reverted to, $5: revid of the revision reverted from, $6: timestamp of the revision reverted from
'rollback-success' => 'Foram revertidas as edições de $1, com o conteúdo passando a estar como na última edição de $2.',
'sessionfailure'   => 'Foram detectados problemas com a sua sessão;
Esta acção foi cancelada como medida de protecção contra a intercepção de sessões.
Experimente usar o botão "Voltar" e recarregar a página de onde veio e tente novamente.',

# Protect
'protectlogpage'              => 'Registo de protecção',
'protectlogtext'              => 'Abaixo encontra-se o registo de protecção e desprotecção de páginas.
Veja a [[Special:ProtectedPages|lista de páginas protegidas]] para uma listagem das páginas que se encontram protegidas no momento.',
'protectedarticle'            => 'protegeu "[[$1]]"',
'modifiedarticleprotection'   => 'alterou o nível de protecção para "[[$1]]"',
'unprotectedarticle'          => 'desprotegeu "[[$1]]"',
'movedarticleprotection'      => 'moveu as configurações de proteção de "[[$2]]" para "[[$1]]"',
'protect-title'               => 'Protegendo "$1"',
'prot_1movedto2'              => 'moveu [[$1]] para [[$2]]',
'protect-legend'              => 'Confirmar protecção',
'protectcomment'              => 'Motivo:',
'protectexpiry'               => 'Expiração:',
'protect_expiry_invalid'      => 'O tempo de expiração fornecido é inválido.',
'protect_expiry_old'          => 'O tempo de expiração fornecido situa-se no passado.',
'protect-unchain'             => 'Desbloquear permissões de moção',
'protect-text'                => "Pode ver e alterar aqui o nível de protecção da página '''<nowiki>$1</nowiki>'''.",
'protect-locked-blocked'      => "Não pode alterar níveis de protecção enquanto estiver bloqueado.
Esta é a configuração presente para a página '''$1''':",
'protect-locked-dblock'       => "Não é possível alterar os níveis de proteção, uma vez que a base de dados se encontra trancada.
Esta é a configuração atual para a página '''$1''':",
'protect-locked-access'       => "A sua conta não possui permissões para alterar os níveis de protecção de uma página.
Esta é a configuração actual da página '''$1''':",
'protect-cascadeon'           => 'Esta página está protegida porque se encontra incluída {{PLURAL:$1|na página listada a seguir, protegida|nas páginas listadas a seguir, protegidas}} com protecção em cascata.
Pode alterar o nível de protecção desta página, mas isso não afectará a protecção em cascata.',
'protect-default'             => 'Permitir todos os utilizadores',
'protect-fallback'            => 'É necessário o privilégio de "$1"',
'protect-level-autoconfirmed' => 'Bloquear utilizadores novos e não registados',
'protect-level-sysop'         => 'Apenas administradores',
'protect-summary-cascade'     => 'em cascata',
'protect-expiring'            => 'expira em $1 (UTC)',
'protect-expiry-indefinite'   => 'infinito',
'protect-cascade'             => 'Proteja quaisquer páginas que estejam incluídas nesta (protecção em cascata)',
'protect-cantedit'            => 'Não pode alterar o nível de protecção desta página, porque não tem permissão para editá-la.',
'protect-othertime'           => 'Outra duração:',
'protect-othertime-op'        => 'outra duração',
'protect-existing-expiry'     => 'A proteção atual expirará às $3 de $2',
'protect-otherreason'         => 'Outro motivo/motivo adicional:',
'protect-otherreason-op'      => 'outro/motivo adicional',
'protect-dropdown'            => "*Motivos comuns para protecção
** Vandalismo excessivo
** ''Spam'' excessivo
** Guerra de edições improdutiva
** Página muito visitada",
'protect-edit-reasonlist'     => 'Editar motivos de protecção',
'protect-expiry-options'      => '1 hora:1 hour,1 dia:1 day,1 semana:1 week,2 semanas:2 weeks,1 mês:1 month,3 meses:3 months,6 meses:6 months,1 ano:1 year,indefinido:infinite', # display1:time1,display2:time2,...
'restriction-type'            => 'Permissão:',
'restriction-level'           => 'Nível de restrição:',
'minimum-size'                => 'Tamanho mín.',
'maximum-size'                => 'Tamanho máx.:',
'pagesize'                    => '(bytes)',

# Restrictions (nouns)
'restriction-edit'   => 'Editar',
'restriction-move'   => 'Mover',
'restriction-create' => 'Criar',
'restriction-upload' => 'Carregar',

# Restriction levels
'restriction-level-sysop'         => 'totalmente protegida',
'restriction-level-autoconfirmed' => 'semi-protegida',
'restriction-level-all'           => 'qualquer nível',

# Undelete
'undelete'                     => 'Ver páginas eliminadas',
'undeletepage'                 => 'Ver e restaurar páginas eliminadas',
'undeletepagetitle'            => "'''Seguem-se as edições eliminadas de [[:$1]]'''.",
'viewdeletedpage'              => 'Ver páginas eliminadas',
'undeletepagetext'             => '{{PLURAL:$1|A seguinte página foi eliminada|As seguintes páginas foram eliminadas}}, mas ainda {{PLURAL:$1|permanece|permanecem}} na base de dados e poderem ser restauradas. O arquivo pode ser limpo periodicamente.',
'undelete-fieldset-title'      => 'Restaurar edições',
'undeleteextrahelp'            => "Para restaurar o histórico de edições completo desta página, desmarque todas as caixas de selecção e clique em '''''Restaurar'''''.
Para efectuar uma restauração selectiva, marque as caixas correspondentes às edições que pretende restaurar e clique em '''''Restaurar'''''.
Clicar em '''''Limpar''''' irá limpar o campo de comentário e todas as caixas de selecção.",
'undeleterevisions'            => '$1 {{PLURAL:$1|edição disponível|edições disponíveis}}',
'undeletehistory'              => 'Se restaurar uma página, todas as edições serão restauradas para o histórico.
Se uma nova página foi criada com o mesmo nome desde a eliminação, as edições restauradas aparecerão no histórico anterior.',
'undeleterevdel'               => 'O restauro não será efectuado se resulta na remoção parcial da versão mais recente da página ou ficheiro.
Nestes casos, deverá desmarcar ou revelar a versão eliminada mais recente.',
'undeletehistorynoadmin'       => 'Esta página foi eliminada. O motivo de eliminação é apresentado no súmario abaixo, junto dos detalhes do utilizador que editou esta página antes de eliminar. O texto actual destas edições eliminadas encontra-se agora apenas disponível para administradores.',
'undelete-revision'            => 'Edição eliminada da página $1 (das $5 de $4), por $3:',
'undeleterevision-missing'     => 'Edição inválida ou não encontrada.
Pode ter usado uma ligação incorrecta ou talvez a revisão tenha sido restaurada ou removida do arquivo.',
'undelete-nodiff'              => 'Não foram encontradas edições anteriores.',
'undeletebtn'                  => 'Restaurar',
'undeletelink'                 => 'ver/restaurar',
'undeletereset'                => 'Limpar',
'undeleteinvert'               => 'Inverter selecção',
'undeletecomment'              => 'Comentário:',
'undeletedarticle'             => 'restaurado "[[$1]]"',
'undeletedrevisions'           => '$1 {{PLURAL:$1|edição restaurada|edições restauradas}}',
'undeletedrevisions-files'     => '$1 {{PLURAL:$2|edição restaurada|edições restauradas}} e $2 {{PLURAL:$2|ficheiro restaurado|ficheiros restaurados}}',
'undeletedfiles'               => '{{PLURAL:$1|ficheiro restaurado|$1 ficheiros restaurados}}',
'cannotundelete'               => 'Restauração falhada; alguém talvez já restaurou a página.',
'undeletedpage'                => "<big>'''$1 foi restaurada'''</big>

Consulte o [[Special:Log/delete|registo de eliminações]] para um registo das eliminações e restaurações mais recentes.",
'undelete-header'              => 'Consulte o [[Special:Log/delete|registo de eliminações]] para ver as páginas eliminadas recentemente.',
'undelete-search-box'          => 'Pesquisar páginas eliminadas',
'undelete-search-prefix'       => 'Mostrar páginas que começam por:',
'undelete-search-submit'       => 'Pesquisar',
'undelete-no-results'          => 'Não foram encontradas páginas eliminadas, para esse critério de pesquisa, no arquivo de eliminações.',
'undelete-filename-mismatch'   => 'Não foi possível restaurar a versão do ficheiro de $1: nome de ficheiro não combina',
'undelete-bad-store-key'       => 'Não foi possível restaurar a versão do ficheiro de $1: já não existia antes da eliminação.',
'undelete-cleanup-error'       => 'Erro ao eliminar o ficheiro não utilizado "$1".',
'undelete-missing-filearchive' => 'Não é possível restaurar o ficheiro de ID $1, uma vez que ele não se encontra na base de dados. Isso pode significar que já tenha sido restaurado.',
'undelete-error-short'         => 'Erro ao restaurar ficheiro: $1',
'undelete-error-long'          => 'Foram encontrados erros ao tentar restaurar o ficheiro:

$1',
'undelete-show-file-confirm'   => 'Tem a certeza de que quer ver a revisão eliminada do ficheiro "<nowiki>$1</nowiki>" de $2 às $3?',
'undelete-show-file-submit'    => 'Sim',

# Namespace form on various pages
'namespace'      => 'Espaço nominal:',
'invert'         => 'Inverter selecção',
'blanknamespace' => '(Principal)',

# Contributions
'contributions'       => 'Contribuições do utilizador',
'contributions-title' => 'Contribuições {{GENDER:$1|do utilizador|da utilizadora}} $1',
'mycontris'           => 'Minhas contribuições',
'contribsub2'         => 'Para $1 ($2)',
'nocontribs'          => 'Não foram encontradas alterações com este critério.', # Optional parameter: $1 is the user name
'uctop'               => ' (edição actual)',
'month'               => 'Mês (inclusive anteriores):',
'year'                => 'Ano (inclusive anteriores):',

'sp-contributions-newbies'       => 'Pesquisar apenas nas contribuições de contas recentes',
'sp-contributions-newbies-sub'   => 'Para contas novas',
'sp-contributions-newbies-title' => 'Contribuições de contas novas',
'sp-contributions-blocklog'      => 'registo de bloqueios',
'sp-contributions-logs'          => 'registos',
'sp-contributions-search'        => 'Pesquisar contribuições',
'sp-contributions-username'      => 'Endereço IP ou utilizador:',
'sp-contributions-submit'        => 'Pesquisar',

# What links here
'whatlinkshere'            => 'Páginas afluentes',
'whatlinkshere-title'      => 'Páginas que possuem ligações para "$1"',
'whatlinkshere-page'       => 'Página:',
'linkshere'                => "As seguintes páginas possuem ligações para '''[[:$1]]''':",
'nolinkshere'              => "Não existem ligações para '''[[:$1]]'''.",
'nolinkshere-ns'           => "Não existem ligações para '''[[:$1]]''' no espaço nominal seleccionado.",
'isredirect'               => 'página de redireccionamento',
'istemplate'               => 'inclusão',
'isimage'                  => 'ligação para imagem',
'whatlinkshere-prev'       => '{{PLURAL:$1|anterior|$1 anteriores}}',
'whatlinkshere-next'       => '{{PLURAL:$1|próximo|próximos $1}}',
'whatlinkshere-links'      => '← ligações',
'whatlinkshere-hideredirs' => '$1 redireccionamentos',
'whatlinkshere-hidetrans'  => '$1 transclusões',
'whatlinkshere-hidelinks'  => '$1 ligações',
'whatlinkshere-hideimages' => '$1 ligações para imagens',
'whatlinkshere-filters'    => 'Filtros',

# Block/unblock
'blockip'                         => 'Bloquear utilizador',
'blockip-legend'                  => 'Bloquear utilizador',
'blockiptext'                     => 'Utilize o formulário abaixo para bloquear o acesso de escrita a um endereço IP específico ou a um nome de utilizador.
Isto só deve ser feito para prevenir vandalismo e de acordo com a [[{{MediaWiki:Policy-url}}|política]]. Indique a seguir um motivo de bloqueio específico (por exemplo, indicando as páginas que foram alvo de vandalismo).',
'ipaddress'                       => 'Endereço IP:',
'ipadressorusername'              => 'Endereço IP ou nome de utilizador:',
'ipbexpiry'                       => 'Expiração:',
'ipbreason'                       => 'Motivo:',
'ipbreasonotherlist'              => 'Outro motivo',
'ipbreason-dropdown'              => '*Razões comuns para um bloqueio
** Inserção de informações falsas
** Remoção de conteúdos de páginas
** Inserção de "spam" para sítios externos
** Inserção de conteúdo sem sentido/incompreensível nas páginas
** Comportamento intimidador/inoportuno
** Uso abusivo de contas múltiplas
** Nome de utilizador inaceitável',
'ipbanononly'                     => 'Bloquear apenas utilizadores anónimos',
'ipbcreateaccount'                => 'Impedir criação de contas de utilizador',
'ipbemailban'                     => 'Impedir utilizador de enviar correio electrónico',
'ipbenableautoblock'              => 'Bloquear automaticamente o endereço IP mais recente deste utilizador e todos os endereços IP subsequentes a partir dos quais ele tente editar',
'ipbsubmit'                       => 'Bloquear este utilizador',
'ipbother'                        => 'Outro período:',
'ipboptions'                      => '2 horas:2 hours,1 dia:1 day,3 dias:3 days,1 semana:1 week,2 semanas:2 weeks,1 mês:1 month,3 meses:3 months,6 meses:6 months,1 ano:1 year,indefinido:infinite', # display1:time1,display2:time2,...
'ipbotheroption'                  => 'outro',
'ipbotherreason'                  => 'Outro motivo/motivo adicional:',
'ipbhidename'                     => 'Ocultar nome de utilizador em edições e listas',
'ipbwatchuser'                    => 'Vigiar as páginas de utilizador e de discussão deste utilizador',
'ipballowusertalk'                => 'Permitir que este utilizador edite a sua própria página de discussão mesmo estando bloqueado',
'ipb-change-block'                => 'Voltar a bloquear o utilizador com estes parâmetros',
'badipaddress'                    => 'Endereço IP inválido',
'blockipsuccesssub'               => 'Bloqueio bem sucedido',
'blockipsuccesstext'              => '[[Special:Contributions/$1|$1]] foi bloqueado.<br />
Consulte a [[Special:IPBlockList|lista de IPs bloqueados]] para rever os bloqueios.',
'ipb-edit-dropdown'               => 'Editar motivos de bloqueio',
'ipb-unblock-addr'                => 'Desbloquear $1',
'ipb-unblock'                     => 'Desbloquear um utilizador ou endereço IP',
'ipb-blocklist-addr'              => 'Bloqueios em vigência para $1',
'ipb-blocklist'                   => 'Ver bloqueios em vigência',
'ipb-blocklist-contribs'          => 'Contribuições de $1',
'unblockip'                       => 'Desbloquear utilizador',
'unblockiptext'                   => 'Utilize o formulário abaixo para restaurar o acesso de escrita de um endereço IP ou utilizador previamente bloqueado.',
'ipusubmit'                       => 'Remover este bloqueio',
'unblocked'                       => '[[User:$1|$1]] foi desbloqueado',
'unblocked-id'                    => 'O bloqueio de $1 foi removido com sucesso',
'ipblocklist'                     => 'Utilizadores e endereços IP bloqueados',
'ipblocklist-legend'              => 'Procurar um utilizador bloqueado',
'ipblocklist-username'            => 'Nome de utilizador ou endereço IP:',
'ipblocklist-sh-userblocks'       => '$1 bloqueios de contas',
'ipblocklist-sh-tempblocks'       => '$1 bloqueios temporários',
'ipblocklist-sh-addressblocks'    => '$1 bloqueios de IP único',
'ipblocklist-submit'              => 'Pesquisar',
'blocklistline'                   => '$1, $2 bloqueou $3 ($4)',
'infiniteblock'                   => 'infinito',
'expiringblock'                   => 'expira em $1',
'anononlyblock'                   => 'apenas anón.',
'noautoblockblock'                => 'bloqueio automático impossibilitado',
'createaccountblock'              => 'criação de conta bloqueada',
'emailblock'                      => 'correio electrónico bloqueado',
'blocklist-nousertalk'            => 'impedido de editar a própria página de discussão',
'ipblocklist-empty'               => 'A lista de bloqueios encontra-se vazia.',
'ipblocklist-no-results'          => 'O endereço IP ou nome de utilizador procurado não se encontra bloqueado.',
'blocklink'                       => 'bloquear',
'unblocklink'                     => 'desbloquear',
'change-blocklink'                => 'alterar bloqueio',
'contribslink'                    => 'contribs',
'autoblocker'                     => 'Foi automaticamente bloqueado, pois o seu endereço IP foi recentemente usado por "[[User:$1|$1]]". O motivo apresentado para o bloqueio de $1 foi: "$2".',
'blocklogpage'                    => 'Registo de bloqueio',
'blocklog-fulllog'                => 'Registo completo de bloqueios',
'blocklogentry'                   => 'bloqueou "[[$1]]" com expiração em $2 $3',
'reblock-logentry'                => 'modificou parâmetros de bloqueio de [[$1]] com expiração em $2 $3',
'blocklogtext'                    => 'Este é um registo de acções de bloqueio e desbloqueio.
Endereços IP sujeitos a bloqueio automático não são listados.
Consulte a [[Special:IPBlockList|lista de IPs bloqueados]] para obter a lista de bloqueios e banimentos actualmente válidos.',
'unblocklogentry'                 => 'desbloqueou $1',
'block-log-flags-anononly'        => 'apenas utilizadores anónimos',
'block-log-flags-nocreate'        => 'criação de contas impossibilitada',
'block-log-flags-noautoblock'     => 'bloqueio automático impossibilitado',
'block-log-flags-noemail'         => 'correio electrónico bloqueado',
'block-log-flags-nousertalk'      => 'impossibilitado de editar a própria página de discussão',
'block-log-flags-angry-autoblock' => 'autobloqueio melhorado activado',
'block-log-flags-hiddenname'      => 'nome de utilizador ocultado',
'range_block_disabled'            => 'A funcionalidade de administrador para o bloqueio de gamas de IPs está desactivada.',
'ipb_expiry_invalid'              => 'Tempo de expiração inválido.',
'ipb_expiry_temp'                 => 'Bloqueios com nome de utilizador ocultado devem ser permanentes.',
'ipb_hide_invalid'                => 'Não foi possível suprimir esta conta; ela poderá ter demasiadas edições.',
'ipb_already_blocked'             => '"$1" já se encontra bloqueado',
'ipb-needreblock'                 => '== Já se encontra bloqueado ==
$1 já se encontra bloqueado. Deseja alterar as configurações?',
'ipb_cant_unblock'                => 'Erro: Bloqueio com ID $1 não encontrado. Poderá já ter sido desbloqueado.',
'ipb_blocked_as_range'            => 'Erro: O IP $1 não se encontra bloqueado de forma direta, não podendo ser desbloqueado deste modo. Se encontra bloqueado como parte do "range" $2, o qual pode ser desbloqueado.',
'ip_range_invalid'                => 'Gama de IPs inválida.',
'blockme'                         => 'Bloquear-me',
'proxyblocker'                    => 'Bloqueador de proxy',
'proxyblocker-disabled'           => 'Esta função foi impossibilitada.',
'proxyblockreason'                => "O seu endereço IP foi bloqueado por ser um ''proxy'' público.
Por favor, contacte o seu fornecedor do serviço de internet ou o seu serviço de apoio técnico e informe-os deste problema de segurança grave.",
'proxyblocksuccess'               => 'Concluído.',
'sorbsreason'                     => "O seu endereço IP encontra-se listado como ''proxy'' aberto na DNSBL utilizada pela {{SITENAME}}.",
'sorbs_create_account_reason'     => "O seu endereço IP encontra-se listado como ''proxy'' aberto na DNSBL utilizada pela {{SITENAME}}. Não pode criar uma conta",
'cant-block-while-blocked'        => 'Não pode bloquear outros utilizadores enquanto estiver bloqueado.',

# Developer tools
'lockdb'              => 'Bloquear base de dados',
'unlockdb'            => 'Desbloquear base de dados',
'lockdbtext'          => 'Trancar a base de dados impedirá todos os utilizadores de editar páginas, mudar as suas preferências, editar a lista de páginas vigiadas e executar qualquer outra acção que requer mudanças na base de dados.
Por favor, confirme que é precisamente isso que pretende fazer e que vai destrancar a base de dados quando a manutenção estiver concluída.',
'unlockdbtext'        => 'Destrancar a base de dados vai possibilitar a todos os utilizadores editar páginas, mudar as suas preferências, alterar as suas listas de páginas vigiadas e executar qualquer outra acção que requer mudanças na base de dados. Por favor, confirme que é isso que pretende fazer.',
'lockconfirm'         => 'Sim, eu realmente desejo bloquear a base de dados.',
'unlockconfirm'       => 'Sim, eu realmente desejo desbloquear a base de dados.',
'lockbtn'             => 'Bloquear base de dados',
'unlockbtn'           => 'Desbloquear base de dados',
'locknoconfirm'       => 'Não marcou a caixa de confirmação.',
'lockdbsuccesssub'    => 'Bloqueio bem sucedido',
'unlockdbsuccesssub'  => 'Desbloqueio bem sucedido',
'lockdbsuccesstext'   => 'A base de dados da {{SITENAME}} foi bloqueada.<br />
Lembre-se de [[Special:UnlockDB|remover o bloqueio]] após a manutenção.',
'unlockdbsuccesstext' => 'A base de dados foi desbloqueada.',
'lockfilenotwritable' => 'O ficheiro de bloqueio da base de dados não pode ser escrito. Para bloquear ou desbloquear a base de dados, este precisa de poder ser escrito pelo servidor Web.',
'databasenotlocked'   => 'A base de dados não encontra-se bloqueada.',

# Move page
'move-page'                    => 'Mover $1',
'move-page-legend'             => 'Mover página',
'movepagetext'                 => "Usando o formulário abaixo pode mover esta página e todo o seu histórico de edições para uma nova página com outro nome.
A página original será transformada num redireccionamento para a nova página.
Pode corrigir de forma automática os redireccionamentos existentes que apontam para a página original.
Caso escolha não o fazer, certifique-se de que não existem [[Special:DoubleRedirects|redireccionamentos duplos]] ou [[Special:BrokenRedirects|quebrados]].
É da sua responsabilidade verificar que as ligações continuam a apontar para onde é suposto que apontem.

Note que a página '''não''' será movida se já existir uma página com o novo nome, a menos que esta esteja vazia ou seja um redireccionamento sem qualquer histórico de edições.
Isto significa que pode mover uma página de volta para o seu nome original se cometeu algum engano e que não pode mover uma página para cima de outra já existente.

'''CUIDADO!'''
Para uma página popular esta acção pode representar uma mudança drástica e inesperada;
por favor, certifique-se de que compreende as consequências da mudança antes de prosseguir.",
'movepagetalktext'             => "Se existir uma página de discussão associada, ela será automaticamente movida, '''a não ser que:'''
*já exista uma página de discussão com o novo título que não esteja vazia, ou
*desmarque a correspondente caixa de selecção abaixo.

Nestes casos, terá de mover a página de discussão manualmente, ou fundi-la com a existente, se assim desejar.",
'movearticle'                  => 'Mover página',
'movenologin'                  => 'Não autenticado',
'movenologintext'              => 'Precisa de ser um utilizador registado e [[Special:UserLogin|autenticado]] para poder mover uma página.',
'movenotallowed'               => 'Não possui permissão para mover páginas.',
'movenotallowedfile'           => 'Não possui permissão para mover ficheiros.',
'cant-move-user-page'          => 'Não possui permissão de mover páginas de utilizadores (pode mover sub-páginas).',
'cant-move-to-user-page'       => 'Não possui permissão de mover uma página para uma página de utilizador (pode movê-la para uma subpágina de utilizador).',
'newtitle'                     => 'Para novo título',
'move-watch'                   => 'Vigiar esta página',
'movepagebtn'                  => 'Mover página',
'pagemovedsub'                 => 'Página movida com sucesso',
'movepage-moved'               => '<big>\'\'\'"$1" foi movida para "$2"\'\'\'</big>', # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'movepage-moved-redirect'      => 'Um redireccionamento foi criado.',
'movepage-moved-noredirect'    => 'A criação de um redirecionamento foi suprimida.',
'articleexists'                => 'Uma página com este título já existe, ou o título que escolheu é inválido.
Por favor, escolha outro nome.',
'cantmove-titleprotected'      => 'Não pode mover uma página para esse destino, porque o novo título foi protegido para evitar a sua criação',
'talkexists'                   => "'''A página em si foi movida com sucesso, mas a página de discussão não foi movida porque já existia uma com o mesmo título.
Por favor, faça a fusão manual das páginas de discussão.'''",
'movedto'                      => 'movido para',
'movetalk'                     => 'Mover também a página de discussão associada.',
'move-subpages'                => 'Mover subpáginas (até $1)',
'move-talk-subpages'           => 'Mover subpáginas da página de discussão (até $1)',
'movepage-page-exists'         => 'A página $1 já existe e não pode ser substituída.',
'movepage-page-moved'          => 'A página $1 foi movida para $2',
'movepage-page-unmoved'        => 'A página $1 não pôde ser movida para $2.',
'movepage-max-pages'           => 'O limite de $1 {{PLURAL:$1|página movida|páginas movidas}} foi atingido; não será possível mover mais páginas de forma automática.',
'1movedto2'                    => 'moveu [[$1]] para [[$2]]',
'1movedto2_redir'              => 'moveu [[$1]] para [[$2]] sobre redirecionamento',
'move-redirect-suppressed'     => 'redirecionamento suprimido',
'movelogpage'                  => 'Registo de movimento',
'movelogpagetext'              => 'Abaixo encontra-se uma lista de páginas movidas.',
'movesubpage'                  => '{{PLURAL:$1|Subpágina|Subpáginas}}',
'movesubpagetext'              => 'Esta página tem $1 {{PLURAL:$1|subpágina mostrada|subpáginas mostradas}} abaixo.',
'movenosubpage'                => 'Esta página não tem subpáginas.',
'movereason'                   => 'Motivo:',
'revertmove'                   => 'reverter',
'delete_and_move'              => 'Eliminar e mover',
'delete_and_move_text'         => '==Eliminação necessária==
A página de destino ("[[:$1]]") já existe. Deseja eliminá-la de modo a poder mover?',
'delete_and_move_confirm'      => 'Sim, eliminar a página',
'delete_and_move_reason'       => 'Eliminada para poder mover outra página para este título',
'selfmove'                     => 'O título de origem e de destinato são os mesmos; 
não é possível mover uma página para ela mesma.',
'immobile-source-namespace'    => 'Não é possível mover páginas no espaço nominal "$1"',
'immobile-target-namespace'    => 'Não é possível mover páginas para o espaço nominal "$1"',
'immobile-target-namespace-iw' => 'Uma ligação interwikis não é um destino válido para uma movimentação de página.',
'immobile-source-page'         => 'Esta página não pode ser movida.',
'immobile-target-page'         => 'Não é possível mover para esse título de destino.',
'imagenocrossnamespace'        => 'Não é possível mover imagem para espaço nominal que não de imagens',
'imagetypemismatch'            => 'A extensão do novo ficheiro não corresponde ao seu tipo',
'imageinvalidfilename'         => 'O nome do ficheiro alvo é inválido',
'fix-double-redirects'         => 'Atualizar todos os redirecionamentos que apontem para o título original',
'move-leave-redirect'          => 'Criar um redireccionamento',

# Export
'export'            => 'Exportação de páginas',
'exporttext'        => 'Pode exportar o texto e o histórico de edições de uma página em particular para um ficheiro XML. Poderá então importar esse conteúdo noutra wiki que utilize o programa MediaWiki, através da [[Special:Import|página de importações]].

Para exportar páginas, introduza os títulos na caixa de texto abaixo (um título por linha) e seleccione se deseja todas as versões, com as linhas de histórico de edições, ou apenas a edição actual e informações sobre a mais recente das edições.

Se desejar, pode utilizar uma ligação (por exemplo, [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] para a [[{{MediaWiki:Mainpage}}]]).',
'exportcuronly'     => 'Incluir apenas a edição actual, não o histórico inteiro',
'exportnohistory'   => "----
'''Nota:''' a exportação do histórico completo das páginas através deste formulário foi desactivada por afectar o desempenho.",
'export-submit'     => 'Exportar',
'export-addcattext' => 'Adicionar à lista páginas da categoria:',
'export-addcat'     => 'Adicionar',
'export-addnstext'  => 'Adicionar páginas do espaço nominal:',
'export-addns'      => 'Adicionar',
'export-download'   => 'Gravar em ficheiro',
'export-templates'  => 'Incluir predefinições',
'export-pagelinks'  => 'Incluir páginas ligadas, até uma profundidade de:',

# Namespace 8 related
'allmessages'               => 'Mensagens de sistema',
'allmessagesname'           => 'Nome',
'allmessagesdefault'        => 'Texto padrão',
'allmessagescurrent'        => 'Texto actual',
'allmessagestext'           => 'Esta é uma lista das mensagens de sistema disponíveis no espaço nominal {{ns:mediawiki}}.
Por favor visite [http://www.mediawiki.org/wiki/Localisation MediaWiki Localisation] e [http://translatewiki.net translatewiki.net] se deseja participar na localização do MediaWiki.',
'allmessagesnotsupportedDB' => "Esta página não pode ser utilizada, uma vez que '''\$wgUseDatabaseMessages''' foi desativado.",
'allmessagesfilter'         => 'Filtro de nome de mensagem:',
'allmessagesmodified'       => 'Mostrar apenas modificados',

# Thumbnails
'thumbnail-more'           => 'Ampliar',
'filemissing'              => 'Ficheiro não encontrado',
'thumbnail_error'          => 'Erro ao criar miniatura: $1',
'djvu_page_error'          => 'página DjVu inacessível',
'djvu_no_xml'              => 'Não foi possível aceder ao XML para o ficheiro DjVU',
'thumbnail_invalid_params' => 'Parâmetros de miniatura inválidos',
'thumbnail_dest_directory' => 'Não foi possível criar o directório de destino',

# Special:Import
'import'                     => 'Importar páginas',
'importinterwiki'            => 'Importação transwikis',
'import-interwiki-text'      => 'Seleccione uma wiki e um título de página a importar.
As datas das edições e os seus editores serão mantidos.
Todas as acções de importação transwikis são registadas no [[Special:Log/import|Registo de importações]].',
'import-interwiki-source'    => 'Wiki ou página de origem:',
'import-interwiki-history'   => 'Copiar todas as edições desta página',
'import-interwiki-templates' => 'Incluir todas as predefinições',
'import-interwiki-submit'    => 'Importar',
'import-interwiki-namespace' => 'Espaço nominal de destino:',
'import-upload-filename'     => 'Nome do ficheiro:',
'import-comment'             => 'Comentário:',
'importtext'                 => 'Por favor, exporte o ficheiro da wiki de origem utilizando a página especial [[Special:Export|exportação de páginas]].
Grave o ficheiro no seu computador e importe-o aqui.',
'importstart'                => 'Importando páginas...',
'import-revision-count'      => '{{PLURAL:$1|uma edição|$1 edições}}',
'importnopages'              => 'Não existem páginas a importar.',
'importfailed'               => 'A importação falhou: $1',
'importunknownsource'        => 'Tipo de fonte de importação desconhecida',
'importcantopen'             => 'Não foi possível abrir o ficheiro de importação',
'importbadinterwiki'         => 'Ligação interwikis incorrecta',
'importnotext'               => 'Vazio ou sem texto',
'importsuccess'              => 'Importação completa!',
'importhistoryconflict'      => 'Existem conflitos de edições no histórico (talvez esta página já foi importada antes)',
'importnosources'            => 'Não foram definidas fontes de importação transwiki e o carregamento directo de históricos encontra-se desactivado.',
'importnofile'               => 'Nenhum ficheiro de importação foi carregado.',
'importuploaderrorsize'      => 'O carregamento do ficheiro importado falhou.
O ficheiro é maior do que o tamanho máximo permitido.',
'importuploaderrorpartial'   => 'O carregamento do ficheiro importado falhou.
O ficheiro foi recebido parcialmente.',
'importuploaderrortemp'      => 'O carregamento do ficheiro importado falhou.
Não há um directório temporário.',
'import-parse-failure'       => 'Falha ao importar dados XML',
'import-noarticle'           => 'Sem páginas para importar!',
'import-nonewrevisions'      => 'Todas as edições já foram importadas.',
'xml-error-string'           => '$1 na linha $2, coluna $3 (byte $4): $5',
'import-upload'              => 'Enviar dados em XML',
'import-token-mismatch'      => 'Perda dos dados da sessão. Por favor tente novamente.',
'import-invalid-interwiki'   => 'Não é possível importar da wiki especificada.',

# Import log
'importlogpage'                    => 'Registo de importações',
'importlogpagetext'                => 'Importações administrativas de páginas com a preservação do histórico de edição de outras wikis.',
'import-logentry-upload'           => 'importou [[$1]] através de ficheiro de importação',
'import-logentry-upload-detail'    => '{{PLURAL:$1|uma edição|$1 edições}}',
'import-logentry-interwiki'        => 'transwikis $1',
'import-logentry-interwiki-detail' => '{{PLURAL:$1|$1 edição|$1 edições}} de $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'A sua página de utilizador',
'tooltip-pt-anonuserpage'         => 'A página de utilizador para o ip que está a utilizar para editar',
'tooltip-pt-mytalk'               => 'A sua página de discussão',
'tooltip-pt-anontalk'             => 'Discussão sobre edições feitas a partir deste endereço IP',
'tooltip-pt-preferences'          => 'Configuração dos comportamentos da wiki que prefere',
'tooltip-pt-watchlist'            => 'Lista das páginas cujas alterações está a vigiar',
'tooltip-pt-mycontris'            => 'Lista das suas edições de páginas',
'tooltip-pt-login'                => 'É encorajado a autenticar-se, apesar de não ser obrigatório.',
'tooltip-pt-anonlogin'            => 'É encorajado a autenticar-se, apesar de não ser obrigatório.',
'tooltip-pt-logout'               => 'Terminar esta sessão na wiki',
'tooltip-ca-talk'                 => 'Discussão sobre o conteúdo da página',
'tooltip-ca-edit'                 => 'Pode editar esta página.
Por favor, utilize o botão "Antever resultado" antes de gravar.',
'tooltip-ca-addsection'           => 'Iniciar uma nova secção',
'tooltip-ca-viewsource'           => 'Esta página está protegida; só pode visualizar o conteúdo.',
'tooltip-ca-history'              => 'Edições anteriores desta página.',
'tooltip-ca-protect'              => 'Proteger esta página',
'tooltip-ca-delete'               => 'Apagar esta página',
'tooltip-ca-undelete'             => 'Restaurar edições feitas a esta página antes da eliminação',
'tooltip-ca-move'                 => 'Mover esta página',
'tooltip-ca-watch'                => 'Adicionar esta página à lista de páginas vigiadas',
'tooltip-ca-unwatch'              => 'Remover esta página da lista de páginas vigiadas',
'tooltip-search'                  => 'Pesquisar nesta wiki',
'tooltip-search-go'               => 'Ir para uma página com este nome exacto, caso exista',
'tooltip-search-fulltext'         => 'Procurar páginas que contêm este texto',
'tooltip-p-logo'                  => 'Visite a página principal',
'tooltip-n-mainpage'              => 'Visitar a página principal',
'tooltip-n-portal'                => 'Sobre o projecto',
'tooltip-n-currentevents'         => 'Informação temática sobre acontecimentos actuais',
'tooltip-n-recentchanges'         => 'A lista de mudanças recentes nesta wiki.',
'tooltip-n-randompage'            => 'Carregar página aleatória',
'tooltip-n-help'                  => 'Um local reservado para auxílio.',
'tooltip-t-whatlinkshere'         => 'Lista de todas as páginas que contêm ligações para esta',
'tooltip-t-recentchangeslinked'   => 'Mudanças recentes em páginas para as quais esta contém ligações',
'tooltip-feed-rss'                => "''Feed'' RSS desta página",
'tooltip-feed-atom'               => "''Feed'' Atom desta página",
'tooltip-t-contributions'         => 'Ver as contribuições deste utilizador',
'tooltip-t-emailuser'             => 'Enviar uma mensagem de correio a este utilizador',
'tooltip-t-upload'                => 'Carregar ficheiros',
'tooltip-t-specialpages'          => 'Lista de páginas especiais',
'tooltip-t-print'                 => 'Versão para impressão desta página',
'tooltip-t-permalink'             => 'Ligação permanente para esta versão desta página',
'tooltip-ca-nstab-main'           => 'Ver a página de conteúdo',
'tooltip-ca-nstab-user'           => 'Ver a página de utilizador',
'tooltip-ca-nstab-media'          => 'Ver a página de media',
'tooltip-ca-nstab-special'        => 'Esta é uma página especial, não pode ser editada.',
'tooltip-ca-nstab-project'        => 'Ver a página de projecto',
'tooltip-ca-nstab-image'          => 'Ver a página de ficheiro',
'tooltip-ca-nstab-mediawiki'      => 'Ver a mensagem de sistema',
'tooltip-ca-nstab-template'       => 'Ver a predefinição',
'tooltip-ca-nstab-help'           => 'Ver a página de ajuda',
'tooltip-ca-nstab-category'       => 'Ver a página da categoria',
'tooltip-minoredit'               => 'Marcar como edição menor',
'tooltip-save'                    => 'Gravar as alterações',
'tooltip-preview'                 => 'Antever as suas alterações. Por favor, utilize antes de gravar!',
'tooltip-diff'                    => 'Mostrar alterações que fez a este texto.',
'tooltip-compareselectedversions' => 'Ver as diferenças entre as duas versões seleccionadas desta página.',
'tooltip-watch'                   => 'Adicionar esta página à lista de páginas vigiadas',
'tooltip-recreate'                => 'Recriar a página apesar de ter sido eliminada',
'tooltip-upload'                  => 'Iniciar o carregamento',
'tooltip-rollback'                => '"{{int:rollbacklink}}" reverte, com um só clique, as edições do último editor desta página.',
'tooltip-undo'                    => '"desfazer" reverte esta edição e apresenta a página de edição no modo de antevisão.
Permite colocar uma justificação no sumário da edição.',

# Stylesheets
'common.css'      => '/* Código CSS colocado aqui será aplicado a todos os temas */',
'standard.css'    => '/* Código CSS colocado aqui afectará os utilizadores do tema Clássico */',
'nostalgia.css'   => '/* Código CSS colocado aqui afectará os utilizadores do tema Nostalgia */',
'cologneblue.css' => '/* Código CSS colocado aqui afectará os utilizadores do tema Azul colonial */',
'monobook.css'    => '/* Código CSS colocado aqui afectará os utilizadores do tema Monobook */',
'myskin.css'      => '/* Código CSS colocado aqui afectará os utilizadores do tema MySkin */',
'chick.css'       => '/* Código CSS colocado aqui afectará os utilizadores do tema Chique */',
'simple.css'      => '/* Código CSS colocado aqui afectará os utilizadores do tema Simples */',
'modern.css'      => '/* Código CSS colocado aqui afectará os utilizadores do tema Moderno */',
'print.css'       => '/* Código CSS colocado aqui afectará as impressões */',
'handheld.css'    => '/* Código CSS colocado aqui afectará dispositivos móveis baseados no tema configurado em $wgHandheldStyle */',

# Scripts
'common.js'      => '/* Código Javascript colocado aqui será carregado para todos os utilizadores em cada carregamento de página */',
'standard.js'    => '/* Código Javascript colocado aqui será carregado para utilizadores do tema Clássico */',
'nostalgia.js'   => '/* Código Javascript colocado aqui será carregado para utilizadores do tema Nostalgia */',
'cologneblue.js' => '/* Código Javascript colocado aqui será carregado para utilizadores do tema Azul colonial */',
'monobook.js'    => '/* Código Javascript colocado aqui será carregado para utilizadores do tema Monobook */',
'myskin.js'      => '/* Código Javascript colocado aqui será carregado para utilizadores do tema MySkin */',
'chick.js'       => '/* Código Javascript colocado aqui será carregado para utilizadores do tema Chick */',
'simple.js'      => '/* Código Javascript colocado aqui será carregado para utilizadores do tema Simples */',
'modern.js'      => '/* Código Javascript colocado aqui será carregado para utilizadores do tema Moderno */',

# Metadata
'nodublincore'      => 'Os metadados RDF para Dublin Core foram impossibilitados neste servidor.',
'nocreativecommons' => 'Os metadados RDF para Creative Commons foram impossibilitados neste servidor.',
'notacceptable'     => 'O servidor não pode fornecer os dados num formato que o seu cliente possa ler.',

# Attribution
'anonymous'        => '{{PLURAL:$1|Utilizador anónimo|Utilizadores anónimos}} da {{SITENAME}}',
'siteuser'         => 'um utilizador da {{SITENAME}}: $1',
'lastmodifiedatby' => 'Esta página foi modificada pela última vez às $2 de $1 por $3.', # $1 date, $2 time, $3 user
'othercontribs'    => 'Baseado no trabalho de $1.',
'others'           => 'outros',
'siteusers'        => '{{PLURAL:$2|um utilizador|$2 utilizadores}} da {{SITENAME}}: $1',
'creditspage'      => 'Créditos da página',
'nocredits'        => 'Não há informação disponível sobre os créditos desta página.',

# Spam protection
'spamprotectiontitle' => 'Filtro de protecção contra spam',
'spamprotectiontext'  => "A página que deseja gravar foi bloqueada pelo filtro de ''spam''.
Este bloqueio foi provavelmente causado por uma ligação para um sítio externo que consta da lista negra.",
'spamprotectionmatch' => 'O seguinte texto activou o filtro de spam: $1',
'spambot_username'    => 'MediaWiki limpeza de spam',
'spam_reverting'      => 'Revertendo para a última revisão que não contém ligações para $1',
'spam_blanking'       => 'Todas as revisões continham ligações para $1, limpando',

# Info page
'infosubtitle'   => 'Informação para página',
'numedits'       => 'Número de edições (página): $1',
'numtalkedits'   => 'Número de edições (página de discussão): $1',
'numwatchers'    => 'Número de pessoas vigiando: $1',
'numauthors'     => 'Número de autores distintos (página): $1',
'numtalkauthors' => 'Número de autores distintos (página de discussão): $1',

# Skin names
'skinname-standard'    => 'Clássico',
'skinname-nostalgia'   => 'Nostalgia',
'skinname-cologneblue' => 'Azul colonial',
'skinname-monobook'    => 'MonoBook',
'skinname-myskin'      => 'MySkin',
'skinname-chick'       => 'Chique',
'skinname-simple'      => 'Simples',
'skinname-modern'      => 'Moderno',

# Math options
'mw_math_png'    => 'Gerar sempre como PNG',
'mw_math_simple' => 'HTML caso seja simples, caso contrário, PNG',
'mw_math_html'   => 'HTML se possível, caso contrário, PNG',
'mw_math_source' => 'Deixar como TeX (para navegadores de texto)',
'mw_math_modern' => 'Recomendado para navegadores modernos',
'mw_math_mathml' => 'MathML se possível (experimental)',

# Patrolling
'markaspatrolleddiff'                 => 'Marcar como patrulhada',
'markaspatrolledtext'                 => 'Marcar esta página como patrulhada',
'markedaspatrolled'                   => 'Marcada como patrulhada',
'markedaspatrolledtext'               => 'A edição seleccionada foi marcada como patrulhada.',
'rcpatroldisabled'                    => 'Edições patrulhadas nas Mudanças Recentes desactivadas',
'rcpatroldisabledtext'                => 'A funcionalidade de edições patrulhadas nas Mudanças Recentes está actualmente desactivada.',
'markedaspatrollederror'              => 'Não é possível marcar como patrulhada',
'markedaspatrollederrortext'          => 'É necessário especificar uma edição a ser marcada como patrulhada.',
'markedaspatrollederror-noautopatrol' => 'Não está autorizado a marcar as suas próprias edições como edições patrulhadas.',

# Patrol log
'patrol-log-page'      => 'Registo de edições patrulhadas',
'patrol-log-header'    => 'Este é um registo de edições patrulhadas.',
'patrol-log-line'      => 'marcou a $1 de $2 como uma edição patrulhada $3',
'patrol-log-auto'      => 'automaticamente',
'patrol-log-diff'      => 'edição $1',
'log-show-hide-patrol' => '$1 registo de edições patrulhadas',

# Image deletion
'deletedrevision'                 => 'Apagada a versão antiga $1',
'filedeleteerror-short'           => 'Erro ao eliminar ficheiro: $1',
'filedeleteerror-long'            => 'Foram encontrados erros ao tentar eliminar o ficheiro:

$1',
'filedelete-missing'              => 'Não é possível eliminar "$1" já que o ficheiro não existe.',
'filedelete-old-unregistered'     => 'A edição de ficheiro especificada para "$1" não se encontra na base de dados.',
'filedelete-current-unregistered' => 'O ficheiro "$1" não se encontra na base de dados.',
'filedelete-archive-read-only'    => 'O servidor de internet não é capaz de fazer alterações no directório "$1".',

# Browsing diffs
'previousdiff' => '← Edição anterior',
'nextdiff'     => 'Edição posterior →',

# Visual comparison
'visual-comparison' => 'Comparação visual',

# Media information
'mediawarning'         => "'''Aviso''': Este tipo de ficheiro pode conter código malicioso.
Executá-lo poderá comprometer a segurança do seu sistema.<hr />",
'imagemaxsize'         => 'Limitar imagens nas páginas de descrição a:',
'thumbsize'            => 'Tamanho de miniaturas:',
'widthheightpage'      => '$1×$2, $3 {{PLURAL:$3|página|páginas}}',
'file-info'            => '(tamanho: $1, tipo MIME: $2)',
'file-info-size'       => '($1 × $2 pixels, tamanho: $3, tipo MIME: $4)',
'file-nohires'         => '<small>Sem resolução maior disponível.</small>',
'svg-long-desc'        => '(ficheiro SVG, de $1 × $2 pixels, tamanho: $3)',
'show-big-image'       => 'Resolução completa',
'show-big-image-thumb' => '<small>Dimensões desta antevisão: $1 × $2 pixels</small>',

# Special:NewFiles
'newimages'             => 'Galeria de novos ficheiros',
'imagelisttext'         => "Abaixo é apresentada uma lista {{PLURAL:$1|de '''um''' ficheiro, organizado|de '''$1''' ficheiros, organizados}} $2.",
'newimages-summary'     => 'Esta página especial mostra os ficheiros mais recentemente enviados.',
'newimages-legend'      => 'Filtrar',
'newimages-label'       => 'Nome de ficheiro (ou parte dele):',
'showhidebots'          => '($1 robôs)',
'noimages'              => 'Nada para ver.',
'ilsubmit'              => 'Procurar',
'bydate'                => 'por data',
'sp-newimages-showfrom' => 'Mostrar novos ficheiros a partir de $2, $1',

# Bad image list
'bad_image_list' => 'O formato é o seguinte:

Só são reconhecidos elementos na forma de lista (linhas começadas por *).
A primeira ligação em cada linha deve ser uma ligação ao ficheiro que se pretende bloquear.
Quaisquer outras ligações nessa mesma linha são consideradas excepções (ou seja, páginas de onde se pode aceder ao ficheiro).',

# Metadata
'metadata'          => 'Metadados',
'metadata-help'     => 'Este ficheiro contém informação adicional, provavelmente acrescentada pela câmara digital ou pelo digitalizador usados para criá-lo.
Caso o ficheiro tenha sido modificado a partir do seu estado original, alguns detalhes poderão não reflectir completamente as mudanças efectuadas.',
'metadata-expand'   => 'Mostrar detalhes adicionais',
'metadata-collapse' => 'Esconder detalhes adicionais',
'metadata-fields'   => 'Os campos de metadados EXIF listados nesta mensagem serão incluídos na página de descrição da imagem quando a tabela de metadados não estiver no modo "expandida". Por omissão, outros campos estarão ocultos.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength', # Do not translate list items

# EXIF tags
'exif-imagewidth'                  => 'Largura',
'exif-imagelength'                 => 'Altura',
'exif-bitspersample'               => 'Bits por componente',
'exif-compression'                 => 'Esquema de compressão',
'exif-photometricinterpretation'   => 'Composição pixel',
'exif-orientation'                 => 'Orientação',
'exif-samplesperpixel'             => 'Número de componentes',
'exif-planarconfiguration'         => 'Arranjo de dados',
'exif-ycbcrsubsampling'            => 'Percentagem de submistura do canal amarelo para o ciano',
'exif-ycbcrpositioning'            => 'Posicionamento Y e C',
'exif-xresolution'                 => 'Resolução horizontal',
'exif-yresolution'                 => 'Resolução vertical',
'exif-resolutionunit'              => 'Unidade de resolução X e Y',
'exif-stripoffsets'                => 'Localização dos dados da imagem',
'exif-rowsperstrip'                => 'Número de linhas por tira',
'exif-stripbytecounts'             => 'Bytes por tira comprimida',
'exif-jpeginterchangeformat'       => 'Desvio para SOI de JPEG',
'exif-jpeginterchangeformatlength' => 'Bytes de dados JPEG',
'exif-transferfunction'            => 'Função de transferência',
'exif-whitepoint'                  => 'Cromatismo do ponto branco',
'exif-primarychromaticities'       => 'Cromatismo das cores primárias',
'exif-ycbcrcoefficients'           => 'Coeficientes da matriz de transformação do espaço de cores',
'exif-referenceblackwhite'         => 'Par de valores de referência de preto e branco',
'exif-datetime'                    => 'Data e hora de modificação do ficheiro',
'exif-imagedescription'            => 'Título',
'exif-make'                        => 'Fabricante da câmara',
'exif-model'                       => 'Modelo da câmara',
'exif-software'                    => 'Software utilizado',
'exif-artist'                      => 'Autor',
'exif-copyright'                   => 'Titular dos direitos de autor',
'exif-exifversion'                 => 'Versão Exif',
'exif-flashpixversion'             => 'Versão de Flashpix suportada',
'exif-colorspace'                  => 'Espaço de cores',
'exif-componentsconfiguration'     => 'Significado de cada componente',
'exif-compressedbitsperpixel'      => 'Modo de compressão da imagem',
'exif-pixelydimension'             => 'Largura da imagem válida',
'exif-pixelxdimension'             => 'Altura da imagem válida',
'exif-makernote'                   => 'Anotações do fabricante',
'exif-usercomment'                 => 'Comentários de utilizadores',
'exif-relatedsoundfile'            => 'Ficheiro áudio relacionado',
'exif-datetimeoriginal'            => 'Data e hora de geração de dados',
'exif-datetimedigitized'           => 'Data e hora de digitalização',
'exif-subsectime'                  => 'Subsegundos DataHora',
'exif-subsectimeoriginal'          => 'Subsegundos DataHoraOriginal',
'exif-subsectimedigitized'         => 'Subsegundos DataHoraDigitalizado',
'exif-exposuretime'                => 'Tempo de exposição',
'exif-exposuretime-format'         => '$1 seg ($2)',
'exif-fnumber'                     => 'Número F',
'exif-exposureprogram'             => 'Programa de exposição',
'exif-spectralsensitivity'         => 'Sensibilidade espectral',
'exif-isospeedratings'             => 'Taxa de velocidade ISO',
'exif-oecf'                        => 'Factor de conversão optoelectrónica',
'exif-shutterspeedvalue'           => 'Velocidade do obturador',
'exif-aperturevalue'               => 'Abertura',
'exif-brightnessvalue'             => 'Brilho',
'exif-exposurebiasvalue'           => 'Compensação da exposição',
'exif-maxaperturevalue'            => 'Abertura máxima',
'exif-subjectdistance'             => 'Distância do motivo',
'exif-meteringmode'                => 'Modo de medição',
'exif-lightsource'                 => 'Fonte de luz',
'exif-flash'                       => 'Flash',
'exif-focallength'                 => 'Distância focal da lente',
'exif-subjectarea'                 => 'Área do motivo',
'exif-flashenergy'                 => 'Energia do flash',
'exif-spatialfrequencyresponse'    => 'Resposta em frequência espacial',
'exif-focalplanexresolution'       => 'Resolução do plano focal X',
'exif-focalplaneyresolution'       => 'Resolução do plano focal Y',
'exif-focalplaneresolutionunit'    => 'Unidade de resolução do plano focal',
'exif-subjectlocation'             => 'Localização do motivo',
'exif-exposureindex'               => 'Índice de exposição',
'exif-sensingmethod'               => 'Método de sensação',
'exif-filesource'                  => 'Fonte do ficheiro',
'exif-scenetype'                   => 'Tipo de cena',
'exif-cfapattern'                  => 'padrão CFA',
'exif-customrendered'              => 'Processamento de imagem personalizado',
'exif-exposuremode'                => 'Modo de exposição',
'exif-whitebalance'                => 'Balanço de brancos',
'exif-digitalzoomratio'            => 'Proporção do zoom digital',
'exif-focallengthin35mmfilm'       => 'Distância focal em filme de 35 mm',
'exif-scenecapturetype'            => 'Tipo de captura de cena',
'exif-gaincontrol'                 => 'Controlo de cena',
'exif-contrast'                    => 'Contraste',
'exif-saturation'                  => 'Saturação',
'exif-sharpness'                   => 'Nitidez',
'exif-devicesettingdescription'    => 'Descrição das configurações do dispositivo',
'exif-subjectdistancerange'        => 'Distância de alcance do motivo',
'exif-imageuniqueid'               => 'Identificação única da imagem',
'exif-gpsversionid'                => 'Versão de GPS',
'exif-gpslatituderef'              => 'Latitude Norte ou Sul',
'exif-gpslatitude'                 => 'Latitude',
'exif-gpslongituderef'             => 'Longitude Este ou Oeste',
'exif-gpslongitude'                => 'Longitude',
'exif-gpsaltituderef'              => 'Referência de altitude',
'exif-gpsaltitude'                 => 'Altitude',
'exif-gpstimestamp'                => 'Tempo GPS (relógio atómico)',
'exif-gpssatellites'               => 'Satélites utilizados para a medição',
'exif-gpsstatus'                   => 'Estado do receptor',
'exif-gpsmeasuremode'              => 'Modo da medição',
'exif-gpsdop'                      => 'Precisão da medição',
'exif-gpsspeedref'                 => 'Unidade da velocidade',
'exif-gpsspeed'                    => 'Velocidade do receptor GPS',
'exif-gpstrackref'                 => 'Referência para a direcção do movimento',
'exif-gpstrack'                    => 'Direcção do movimento',
'exif-gpsimgdirectionref'          => 'Referência para a direcção da imagem',
'exif-gpsimgdirection'             => 'Direcção da imagem',
'exif-gpsmapdatum'                 => 'Utilizados dados do estudo Geodetic',
'exif-gpsdestlatituderef'          => 'Referência para a latitude do destino',
'exif-gpsdestlatitude'             => 'Latitude do destino',
'exif-gpsdestlongituderef'         => 'Referência para a longitude do destino',
'exif-gpsdestlongitude'            => 'Longitude do destino',
'exif-gpsdestbearingref'           => 'Referência para o azimute do destino',
'exif-gpsdestbearing'              => 'Azimute do destino',
'exif-gpsdestdistanceref'          => 'Referência de distância para o destino',
'exif-gpsdestdistance'             => 'Distância para o destino',
'exif-gpsprocessingmethod'         => 'Nome do método de processamento do GPS',
'exif-gpsareainformation'          => 'Nome da área do GPS',
'exif-gpsdatestamp'                => 'Data do GPS',
'exif-gpsdifferential'             => 'Correcção do diferencial do GPS',

# EXIF attributes
'exif-compression-1' => 'Descomprimido',

'exif-unknowndate' => 'Data desconhecida',

'exif-orientation-1' => 'Normal', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Espelhamento horizontal', # 0th row: top; 0th column: right
'exif-orientation-3' => 'Rotacionado em 180°', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Invertido na vertical', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Rodado 90º no sentido anti-horário e invertido na vertical', # 0th row: left; 0th column: top
'exif-orientation-6' => 'Rodado 90° no sentido horário', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Rodado 90° no sentido horário e invertido na vertical', # 0th row: right; 0th column: bottom
'exif-orientation-8' => 'Rodado 90° no sentido anti-horário', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'formato irregular',
'exif-planarconfiguration-2' => 'formato plano',

'exif-componentsconfiguration-0' => 'não existe',

'exif-exposureprogram-0' => 'Não definido',
'exif-exposureprogram-1' => 'Manual',
'exif-exposureprogram-2' => 'Programa normal',
'exif-exposureprogram-3' => 'Prioridade da abertura',
'exif-exposureprogram-4' => 'Prioridade do obturador',
'exif-exposureprogram-5' => 'Programa criativo (tendência para a profundidade de campo)',
'exif-exposureprogram-6' => 'Programa de movimento (tendência para velocidade de disparo mais rápida)',
'exif-exposureprogram-7' => 'Modo de retrato (para fotografia de perto, com o fundo desfocado)',
'exif-exposureprogram-8' => 'Modo de paisagem (para fotografia de paisagens com o fundo focado)',

'exif-subjectdistance-value' => '$1 metros',

'exif-meteringmode-0'   => 'Desconhecido',
'exif-meteringmode-1'   => 'Média',
'exif-meteringmode-2'   => 'MédiaPonderadaAoCentro',
'exif-meteringmode-3'   => 'Ponto',
'exif-meteringmode-4'   => 'MultiPonto',
'exif-meteringmode-5'   => 'Padrão',
'exif-meteringmode-6'   => 'Parcial',
'exif-meteringmode-255' => 'Outro',

'exif-lightsource-0'   => 'Desconhecida',
'exif-lightsource-1'   => 'Luz do dia',
'exif-lightsource-2'   => 'Fluorescente',
'exif-lightsource-3'   => 'Tungsténio (luz incandescente)',
'exif-lightsource-4'   => 'Flash',
'exif-lightsource-9'   => 'Tempo bom',
'exif-lightsource-10'  => 'Tempo nublado',
'exif-lightsource-11'  => 'Sombra',
'exif-lightsource-12'  => 'Fluorescente luz do dia (D 5700 – 7100K)',
'exif-lightsource-13'  => 'Fluorescente branco luz do dia (N 4600 – 5400K)',
'exif-lightsource-14'  => 'Fluorescente branco frio (W 3900 – 4500K)',
'exif-lightsource-15'  => 'Fluorescente branco (WW 3200 – 3700K)',
'exif-lightsource-17'  => 'Luz normal A',
'exif-lightsource-18'  => 'Luz normal B',
'exif-lightsource-19'  => 'Luz normal C',
'exif-lightsource-24'  => 'Tungsténio de estúdio ISO',
'exif-lightsource-255' => 'Outra fonte de luz',

# Flash modes
'exif-flash-fired-0'    => 'Flash não disparou',
'exif-flash-fired-1'    => 'Flash disparado',
'exif-flash-return-0'   => 'nenhuma função de detecção de luz de retorno',
'exif-flash-return-2'   => 'luz de retorno não detectada',
'exif-flash-return-3'   => 'luz de retorno detectada',
'exif-flash-mode-1'     => 'disparo de flash forçado',
'exif-flash-mode-2'     => 'disparo de flash suprimido',
'exif-flash-mode-3'     => 'modo auto',
'exif-flash-function-1' => 'Sem função de flash',
'exif-flash-redeye-1'   => 'modo de redução de olhos vermelhos',

'exif-focalplaneresolutionunit-2' => 'polegadas',

'exif-sensingmethod-1' => 'Indefinido',
'exif-sensingmethod-2' => 'Sensor de áreas de cores de um chip',
'exif-sensingmethod-3' => 'Sensor de áreas de cores de dois chips',
'exif-sensingmethod-4' => 'Sensor de áreas de cores de três chips',
'exif-sensingmethod-5' => 'Sensor de área sequencial de cores',
'exif-sensingmethod-7' => 'Sensor trilinear',
'exif-sensingmethod-8' => 'Sensor linear sequencial de cores',

'exif-scenetype-1' => 'Imagem fotografada directamente',

'exif-customrendered-0' => 'Processo normal',
'exif-customrendered-1' => 'Processo personalizado',

'exif-exposuremode-0' => 'Exposição automática',
'exif-exposuremode-1' => 'Exposição manual',
'exif-exposuremode-2' => 'Bracket automático',

'exif-whitebalance-0' => 'Balanço de brancos automático',
'exif-whitebalance-1' => 'Balanço de brancos manual',

'exif-scenecapturetype-0' => 'Padrão',
'exif-scenecapturetype-1' => 'Paisagem',
'exif-scenecapturetype-2' => 'Retrato',
'exif-scenecapturetype-3' => 'Cena nocturna',

'exif-gaincontrol-0' => 'Nenhum',
'exif-gaincontrol-1' => 'Ganho positivo baixo',
'exif-gaincontrol-2' => 'Ganho positivo alto',
'exif-gaincontrol-3' => 'Ganho negativo baixo',
'exif-gaincontrol-4' => 'Ganho negativo alto',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Suave',
'exif-contrast-2' => 'Alto',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Saturação baixa',
'exif-saturation-2' => 'Saturação alta',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'Fraco',
'exif-sharpness-2' => 'Forte',

'exif-subjectdistancerange-0' => 'Desconhecida',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Vista próxima',
'exif-subjectdistancerange-3' => 'Vista distante',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Latitude Norte',
'exif-gpslatitude-s' => 'Latitude Sul',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Longitude Este',
'exif-gpslongitude-w' => 'Longitude Oeste',

'exif-gpsstatus-a' => 'Medição em progresso',
'exif-gpsstatus-v' => 'Interoperabilidade de medição',

'exif-gpsmeasuremode-2' => 'Medição bidimensional',
'exif-gpsmeasuremode-3' => 'Medição tridimensional',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'Quilómetros por hora',
'exif-gpsspeed-m' => 'Milhas por hora',
'exif-gpsspeed-n' => 'Nós',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Direcção real',
'exif-gpsdirection-m' => 'Direcção magnética',

# External editor support
'edit-externally'      => 'Editar este ficheiro utilizando uma aplicação externa',
'edit-externally-help' => '(Consulte as [http://www.mediawiki.org/wiki/Manual:External_editors instruções de instalação] para mais informações)',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'todas',
'imagelistall'     => 'todas',
'watchlistall2'    => 'todas',
'namespacesall'    => 'todos',
'monthsall'        => 'todos',

# E-mail address confirmation
'confirmemail'             => 'Confirmar endereço de correio electrónico',
'confirmemail_noemail'     => 'Não tem um endereço de correio electrónico válido nas suas [[Special:Preferences|preferências de utilizador]].',
'confirmemail_text'        => 'A {{SITENAME}} requer que valide o seu endereço de correio electrónico antes de usar as funcionalidades de correio.
Clique o botão abaixo para enviar uma mensagem de confirmação para o seu endereço.
A mensagem incluíra uma URL que contém um código;
insira a URL no seu navegador para confirmar que o seu endereço de correio electrónico é válido.',
'confirmemail_pending'     => 'Um código de confirmação já lhe foi enviado;
caso tenha criado a conta recentemente, é recomendado que aguarde alguns minutos até o receber antes de tentar pedir um novo código.',
'confirmemail_send'        => 'Enviar código de confirmação',
'confirmemail_sent'        => 'Correio de confirmação enviado.',
'confirmemail_oncreate'    => 'Foi enviado um código de confirmação para o seu endereço de correio electrónico.
Este código não é necessário para se autenticar no sistema, mas será necessário para activar qualquer funcionalidade baseada no uso de correio na wiki.',
'confirmemail_sendfailed'  => 'A {{SITENAME}} não conseguiu enviar o correio de confirmação.
Verifique se o seu endereço de correio electrónico possui caracteres inválidos.

O sistema de correio devolveu o erro: $1',
'confirmemail_invalid'     => 'Código de confirmação inválido. O código poderá ter expirado.',
'confirmemail_needlogin'   => 'Precisa de $1 para confirmar o seu endereço de correio electrónico.',
'confirmemail_success'     => 'O seu endereço de correio electrónico foi confirmado.
Pode agora [[Special:UserLogin|autenticar-se]] e disfrutar da wiki.',
'confirmemail_loggedin'    => 'O seu endereço de correio electrónico foi confirmado.',
'confirmemail_error'       => 'Alguma coisa correu mal ao gravar a sua confirmação.',
'confirmemail_subject'     => 'Confirmação de endereço de correio electrónico da {{SITENAME}}',
'confirmemail_body'        => 'Alguém, provavelmente você com o endereço de IP $1,
registou uma conta "$2" com este endereço de e-mail em {{SITENAME}}.

Para confirmar que esta conta realmente é sua, e para activar
as funcionalidades de e-mail em {{SITENAME}},
abra o seguinte endereço no seu navegador:

$3

Caso este *não* seja você, siga o seguinte endereço
para cancelar a confirmação do endereço de e-mail:

$5

Este código de confirmação irá expirar a $4.',
'confirmemail_invalidated' => 'Confirmação de endereço de correio electrónico cancelada',
'invalidateemail'          => 'Cancelar confirmação de correio electrónico',

# Scary transclusion
'scarytranscludedisabled' => '[Transclusão interwikis foi impossibilitada]',
'scarytranscludefailed'   => '[Não foi possível obter a predefinição a partir de $1]',
'scarytranscludetoolong'  => '[URL longa demais]',

# Trackbacks
'trackbackbox'      => "Ligações ''trackback'' para esta página:<br />
$1",
'trackbackremove'   => '([$1 Eliminar])',
'trackbacklink'     => "''Trackback''",
'trackbackdeleteok' => "O ''trackback'' foi eliminado com sucesso.",

# Delete conflict
'deletedwhileediting' => "'''Aviso''': Esta página foi eliminada após ter começado a editá-la!",
'confirmrecreate'     => "Enquanto você editava esta página, o utilizador [[User:$1|$1]] ([[User talk:$1|Discussão]]) eliminou-a pelo seguinte motivo:
: ''$2''
Por favor, confirme que deseja realmente recriar esta página.",
'recreate'            => 'Recriar',

# action=purge
'confirm_purge_button' => 'OK',
'confirm-purge-top'    => 'Limpar a memória cache desta página?',
'confirm-purge-bottom' => 'Purgar uma página limpa a cache e força a sua versão mais recente a aparecer.',

# Multipage image navigation
'imgmultipageprev' => '← página anterior',
'imgmultipagenext' => 'página seguinte →',
'imgmultigo'       => 'Ir!',
'imgmultigoto'     => 'Ir para a página $1',

# Table pager
'ascending_abbrev'         => 'asc',
'descending_abbrev'        => 'desc',
'table_pager_next'         => 'Página seguinte',
'table_pager_prev'         => 'Página anterior',
'table_pager_first'        => 'Primeira página',
'table_pager_last'         => 'Última página',
'table_pager_limit'        => 'Mostrar $1 por página',
'table_pager_limit_submit' => 'Ir',
'table_pager_empty'        => 'Sem resultados',

# Auto-summaries
'autosumm-blank'   => 'Limpou toda a página',
'autosumm-replace' => "Página substituída por '$1'",
'autoredircomment' => 'Redireccionando para [[$1]]',
'autosumm-new'     => "Criou nova página com '$1'",

# Live preview
'livepreview-loading' => 'A carregar…',
'livepreview-ready'   => 'A carregando… Terminado!',
'livepreview-failed'  => 'A antevisão instantânea falhou!
Tente a antevisão normal.',
'livepreview-error'   => 'Falha ao ligar: $1 "$2"
Tente a antevisão normal.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Alterações realizadas {{PLURAL:$1|no último segundo|nos últimos $1 segundos}} podem não constar desta lista.',
'lag-warn-high'   => 'Devido a latência elevada do servidor da base de dados, as alterações realizadas {{PLURAL:$1|no último segundo|nos últimos $1 segundos}} podem não constar desta lista.',

# Watchlist editor
'watchlistedit-numitems'       => 'A sua lista de páginas vigiadas contém {{PLURAL:$1|uma página|$1 páginas}}, excluindo páginas de discussão.',
'watchlistedit-noitems'        => 'A sua lista de páginas vigiadas está vazia.',
'watchlistedit-normal-title'   => 'Editar lista de páginas vigiadas',
'watchlistedit-normal-legend'  => 'Remover páginas da lista de páginas vigiadas',
'watchlistedit-normal-explain' => 'As suas páginas vigiadas são listadas abaixo.
Para remover uma página, marque a caixa de selecção correspondente e clique o botão "Remover páginas".
Também pode [[Special:Watchlist/raw|editar a lista de páginas vigiadas em forma de texto]].',
'watchlistedit-normal-submit'  => 'Remover páginas',
'watchlistedit-normal-done'    => '{{PLURAL:$1|Foi removida uma página|Foram removidas $1 páginas}} da sua lista de páginas vigiadas:',
'watchlistedit-raw-title'      => 'Editar a lista de páginas vigiadas em forma de texto',
'watchlistedit-raw-legend'     => 'Editar a lista de páginas vigiadas em forma de texto',
'watchlistedit-raw-explain'    => 'A sua lista de páginas vigiadas é apresentada abaixo.
Pode adicionar novas linhas ou remover linhas para aumentar ou reduzir a lista, desde que mantenha uma única página por linha.
Quando terminar, clique no botão "Actualizar a lista de páginas vigiadas".
Também pode [[Special:Watchlist/edit|editar a lista da maneira convencional]].',
'watchlistedit-raw-titles'     => 'Páginas:',
'watchlistedit-raw-submit'     => 'Actualizar a lista de páginas vigiadas',
'watchlistedit-raw-done'       => 'A sua lista de páginas vigiadas foi actualizada.',
'watchlistedit-raw-added'      => '{{PLURAL:$1|Foi adicionada uma página|Foram adicionadas $1 páginas}}:',
'watchlistedit-raw-removed'    => '{{PLURAL:$1|Foi removida uma página|Foram removidas $1 páginas}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Ver alterações relevantes',
'watchlisttools-edit' => 'Ver e editar a lista de páginas vigiadas',
'watchlisttools-raw'  => 'Editar a lista de páginas vigiadas em forma de texto',

# Core parser functions
'unknown_extension_tag' => '"$1" é uma tag de extensão desconhecida',
'duplicate-defaultsort' => 'Aviso: A chave de ordenação padrão "$2" sobrepõe-se à anterior chave de ordenação padrão "$1".',

# Special:Version
'version'                          => 'Versão', # Not used as normal message but as header for the special page itself
'version-extensions'               => 'Extensões instaladas',
'version-specialpages'             => 'Páginas especiais',
'version-parserhooks'              => "''Hooks'' do analisador sintáctico",
'version-variables'                => 'Variáveis',
'version-other'                    => 'Diversos',
'version-mediahandlers'            => 'Leitura e tratamento de multimédia',
'version-hooks'                    => 'Hooks',
'version-extension-functions'      => 'Funções de extensão',
'version-parser-extensiontags'     => 'Extensões do analisador sintáctico',
'version-parser-function-hooks'    => "''Hooks'' das funções do analisador sintáctico",
'version-skin-extension-functions' => 'Funções para extensão de temas',
'version-hook-name'                => 'Nome do hook',
'version-hook-subscribedby'        => 'Subscrito por',
'version-version'                  => 'Versão',
'version-license'                  => 'Licença',
'version-software'                 => 'Software instalado',
'version-software-product'         => 'Produto',
'version-software-version'         => 'Versão',

# Special:FilePath
'filepath'         => 'Endereço de ficheiro',
'filepath-page'    => 'Ficheiro:',
'filepath-submit'  => 'Endereço',
'filepath-summary' => 'Esta página especial retorna o endereço completo de um ficheiro ao seu navegador, que irá processá-lo.
Imagens serão apresentadas pelo navegador na resolução máxima.
Ficheiros de outro tipo serão arrancados pelo navegador directamente no programa que lhes está associado no seu computador.

Introduza o nome do ficheiro sem o prefixo "{{ns:file}}:".',

# Special:FileDuplicateSearch
'fileduplicatesearch'          => 'Ficheiros duplicados',
'fileduplicatesearch-summary'  => "Procure ficheiros duplicados tendo por base o seu resumo criptográfico ''(hash value)''.

Introduza o nome do ficheiro sem o prefixo \"{{ns:file}}:\".",
'fileduplicatesearch-legend'   => 'Procurar duplicados',
'fileduplicatesearch-filename' => 'Ficheiro:',
'fileduplicatesearch-submit'   => 'Procurar',
'fileduplicatesearch-info'     => '$1 × $2 pixels<br />Tamanho: $3<br />tipo MIME: $4',
'fileduplicatesearch-result-1' => 'O ficheiro "$1" não possui cópias idênticas.',
'fileduplicatesearch-result-n' => 'O ficheiro "$1" possui {{PLURAL:$2|uma cópia idêntica|$2 cópias idênticas}}.',

# Special:SpecialPages
'specialpages'                   => 'Páginas especiais',
'specialpages-note'              => '----
* Páginas especiais normais.
* <strong class="mw-specialpagerestricted">Páginas especiais restritas.</strong>',
'specialpages-group-maintenance' => 'Relatórios de manutenção',
'specialpages-group-other'       => 'Outras páginas especiais',
'specialpages-group-login'       => 'Entrar / registar-se',
'specialpages-group-changes'     => 'Mudanças e registos recentes',
'specialpages-group-media'       => 'Listas e carregamento de ficheiros',
'specialpages-group-users'       => 'Utilizadores e privilégios',
'specialpages-group-highuse'     => 'Páginas muito usadas',
'specialpages-group-pages'       => 'Listas de páginas',
'specialpages-group-pagetools'   => 'Ferramentas de páginas',
'specialpages-group-wiki'        => 'Dados e ferramentas da wiki',
'specialpages-group-redirects'   => 'Pesquisas e aleatoriedade',
'specialpages-group-spam'        => 'Ferramentas anti-spam',

# Special:BlankPage
'blankpage'              => 'Página em branco',
'intentionallyblankpage' => 'Esta página foi intencionalmente deixada em branco',

# External image whitelist
'external_image_whitelist' => ' # Deixe esta linha exatamente como ela está<pre> 
# Coloque fragmentos de expressões regulares (apenas a parte entre //) em baixo
# Estas serão comparadas com as URLs das imagens externas (com ligação directa)
# As que corresponderem serão apresentadas como imagens, caso contrário apenas será apresentada uma ligação para a imagem
# As linhas que começam com um símbolo de cardinal (#) são tratadas como comentários
# Esta lista não é sensível a maiúsculas ou minúsculas

# Coloque todos os fragmentos de expressões regulares (regex) acima desta linha. Deixe esta linha exatamente como ela está</pre>',

# Special:Tags
'tags'                    => 'Etiquetas de modificação válidas',
'tag-filter'              => 'Filtro de [[Special:Tags|etiquetas]]:',
'tag-filter-submit'       => 'Filtrar',
'tags-title'              => 'Etiquetas',
'tags-intro'              => 'Esta página lista as etiquetas com que o software poderá marcar uma edição, e o seu significado.',
'tags-tag'                => 'Nome da etiqueta',
'tags-display-header'     => 'Aparência nas listas de modificações',
'tags-description-header' => 'Descrição completa do significado',
'tags-hitcount-header'    => 'Modificações etiquetadas',
'tags-edit'               => 'editar',
'tags-hitcount'           => '$1 {{PLURAL:$1|modificação|modificações}}',

# Database error messages
'dberr-header'      => 'Esta wiki tem um problema',
'dberr-problems'    => 'Desculpe! Este sítio está a experienciar dificuldades técnicas.',
'dberr-again'       => 'Experimente esperar uns minutos e atualizar.',
'dberr-info'        => '(Não foi possível contactar o servidor de base de dados: $1)',
'dberr-usegoogle'   => 'Pode tentar pesquisar no Google entretanto.',
'dberr-outofdate'   => 'Note que os seus índices relativos ao nosso conteúdo podem estar desatualizados.',
'dberr-cachederror' => 'A seguinte página é uma cópia em cache da página pedida e pode não estar atualizada.',

);
