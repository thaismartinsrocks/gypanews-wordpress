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

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define('DB_NAME', 'gypanews');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
} elseif ($_SERVER['HTTP_HOST'] == 'thaismartins.rocks') {
    define('DB_NAME', 'thaismar_gypanews');
    define('DB_USER', 'thaismar_gypanew');
    define('DB_PASSWORD', 'gypa@2015');
    define('DB_HOST', 'localhost');
} else {
    define('DB_NAME', '');
    define('DB_USER', '');
    define('DB_PASSWORD', '');
    define('DB_HOST', '');
}
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
define('AUTH_KEY',         'AJ/^]pM|j-U+]@i:Rr5w+>:|Jd@tSmYNVRWrL?bQh|#Z5ew<R5J|OF,BVSuje<SO');
define('SECURE_AUTH_KEY',  'SMSWMk/oeeK0?kJBPzHd[WT2UW3Z_Y=/Y6Z-h!+<IL~hht:8JfFML{u|]z(Xpa^#');
define('LOGGED_IN_KEY',    'pwKP=R$gbLX[6_B-X<D&i]a~Cb-Pz:1Soo%4(g;-NJGi+Qq%,rt=}VZAders !^U');
define('NONCE_KEY',        'mooCZ }v~)Rh*=?Lt33,u#E^LM-X{{=`v[:`Jl  moCq:a7_..cU9&s9&z)8y-[I');
define('AUTH_SALT',        '_sl3&:<I-S-E!OQOk!I^]RIgL-c%Aig_+GDJN?6uq)a-wm7@;%p?9|{~!@$N{{j,');
define('SECURE_AUTH_SALT', 'C?3:)Q++mE_1J:Cm$=7+q&T6?.J^I|ZYOXdP/v; >U!psTq-&bb/~.W*5`Cuqh.+');
define('LOGGED_IN_SALT',   'g#q(-b()9x@*M];-OtC>35[; ~xzDc!.9W_&rl=a-wNj<#K>apB,M1;r}Bx}LR+T');
define('NONCE_SALT',       '*||J])/S+4C2HfJ(DX9hgjpt e,[Pnk1qD4IP)gFXS r=+$~Qe%]_F$_U87yaO*|');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_gypa_';


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
