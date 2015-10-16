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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '6K@QN?~@:.2>VRudlaA65-fU&5XJhJJ&3E8eg7yP>;UR%O^[4tpLy7f5qf]}kYzL');
define('SECURE_AUTH_KEY',  ')yX]TfT[K^m.}s:&P|--|5Vi-47d+l:/*CqD?@s<Toy>!pspO9p8oi7f-p;h<Nl*');
define('LOGGED_IN_KEY',    'V}OG9h&|ZcUfoo+K+tqJd6W=.g$V*`1]ps<+ds+l`c]jpeC8d7KDirjf=N}TM{AH');
define('NONCE_KEY',        'H`T|4^qI(b&5s`2EUvE|H0Ti5-B|Z2G*.=-/`|BQr_Hu>c+OPA<2 dX|rD!+/2#b');
define('AUTH_SALT',        '$ C^XLE-NDN#<!xSMn6;Zd;BC 6kB{j*E88^H pwAj~U-%nYc+$8}qmm6ZGe+iwX');
define('SECURE_AUTH_SALT', 'RT)pDtmLSl0nHN>=@lQfGNRZ]CX$tH:}(5XdL+ukh|#Fle|@rsa[k/p-aMARqa>L');
define('LOGGED_IN_SALT',   '.Q_hU2:%+D4i&28mt]RJv%f`)< %4+@R&.PaWEt]SKknac?x-A R!{V<X:VM+S5K');
define('NONCE_SALT',       'AqkmCLgT3t-|`M2`I$BjmqH$Gzkv{S.{f89&]9?Kpr%t6TA2z2buoo^ZgL>(?0Mo');

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
