<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'gypanews');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A@ZY?e}0ty~;#PBev9*64q]%|BFBa1[*|V}/P_4oISKr0|&Vdr!xUXR{%JfQeh#a');
define('SECURE_AUTH_KEY',  'DGcM^+8?@=+K4!S&5?1qxF:p4b;@CYmm-}  |qup?{4a[n6 +F(?y=EhiwijkFHJ');
define('LOGGED_IN_KEY',    'dM2_>AteAN?:>8PD/lX*Oem?VbvEVm^Vm+i!wU<S{ymb|&n^dew+KDbf:Phl#hX>');
define('NONCE_KEY',        'n0{*OTS]KA: 5#+6:uK=sHT;=*N8#vMRn)lzvI$$7/1(f#8 ?.5n]PH^}Hjhp13o');
define('AUTH_SALT',        'F$KuHhyb82:@}--wlExQreAHdI]~/pusCOd`fb,T02u.?lR~oHNLn#xsJKBUiKB!');
define('SECURE_AUTH_SALT', 'faH;Ni#xM_=b%6vIP/)Fo<L|<O,KTCFf jO+WKpU%toT;up#yFSsp7Vav-t3c.p*');
define('LOGGED_IN_SALT',   ']MlUzph.JhbB,3=O:Ok=34V8(s<4*|K(#g!La(C1r5DJ!>,n1Fld)3.?hJ,a%B-,');
define('NONCE_SALT',       'D|i)u`[T,$tdhUd%,:/%}:Qa;/y| JA<u?S[8[4{x_a*S4E^ tLy$_YxvB++2Gm?');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
