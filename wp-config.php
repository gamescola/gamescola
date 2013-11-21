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
define('DB_NAME', 'gamescola');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'cjSJS21#0C!t|.;==nKU[mvM*fP2C#dTn0 wQFkde$}y%AY*Z*9p;=jOY(0Vcc$K');
define('SECURE_AUTH_KEY',  '~7U+Fn0-`QR!28ePs1?JS9i3I&)Lf^b8MZ3EpQ8{sFbNdMiL<0ED_R2lv<H^:1?w');
define('LOGGED_IN_KEY',    'X>tbe3u`AyRp%_]D+Jwk4t_EG{-m7u rDxFh/J^Ofwpt<HFvV,JR^<+t,e.*F^]#');
define('NONCE_KEY',        '6{SJ,X#_pFF9y/MnWk>~(+bRa{UP>dYa2mI[H~P{N).L(Ee~=8&zYw+8r`.e 3z^');
define('AUTH_SALT',        ' ?:|D:aPsbJ/23~a+RA2v3jmS@X=<[^o6Nwy4|>Ga<q3o2kQ,+,ewkKo]h9$1tYB');
define('SECURE_AUTH_SALT', 'DR-s4,O~EG<9n&d#nM>z`G}m[rLSRc;h$-Q|;)RrJ}Sd.Og@}JugA!mdv?Ip^fZ1');
define('LOGGED_IN_SALT',   'bP(=pK*-n)?lPilO||@o+dB1ieG.I)3hC5f/9)P,{,00)Xv`6Om1e/&5?3~v`dVG');
define('NONCE_SALT',       'MZgRBdN]IU]|&:g4F#X;vm]DXAi+R<[G;3$Tc3R`WqW6Zj,<!UvM)+3gle|&n&VU');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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
