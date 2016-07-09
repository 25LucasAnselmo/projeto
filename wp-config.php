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
define('DB_NAME', 'db_projeto');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'projeto');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'projeto');

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
define('AUTH_KEY',         '5$F%45*4@Ch=apqW>,A(?e21C{,g/}Pqh.66[E-h[7IiYc-50`K:a)oTYE<Y{[vb');
define('SECURE_AUTH_KEY',  'U3KBSRoMr>9QZqA+(u|+s]sA@G(|`@ iZABGTZ1]z~_R3G[W7wn]3pVSsE;*[Ib:');
define('LOGGED_IN_KEY',    ' EIZWgPvwW>(XE8KH/c1wHYh0Zk2<5inBISNPH$SS9&Wvry~0^Zr~Sr-w;55043h');
define('NONCE_KEY',        'Fh`J!!MEX15^N0f[Xy~f28]`wsua/6V2K#`i%[$QP%1DgxPC-H-*Ir/-N0O8_m;w');
define('AUTH_SALT',        'a_{.|5BoE(}bA{c,%pjVX-5!BX4p5yD3jr_GK?D6.1E.NA9J&Or08(DWsdP~QKm&');
define('SECURE_AUTH_SALT', '[dbL+$h#giZM*i$(GE]EK^_7QF-9fogK -rnw2}1>b*3dc&T5@CeDD|HN9h(Ek.V');
define('LOGGED_IN_SALT',   '1IdsD,@e<MjPe Im{7`M;?KS<7Psg7Ibs#HrJ.z8ks+cqR~byAm]9O~]D1QgG}f.');
define('NONCE_SALT',       'C<H?+M>kpS3EV_V}.R{cFlh8H49l#0cg%Nhl98u:4/esMnf-q)]>,YMW/L_#oE^0');

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
