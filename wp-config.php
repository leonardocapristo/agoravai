<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'teste' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '73czTim%q|H:$,RAPL}8,~KCD*F:QeN;8!1(Y#m//-/P~,4Dm3Ny32Q=]xw:5@Lp' );
define( 'SECURE_AUTH_KEY',  '3!hhwfJQ3cAnZ3J/BPbdJKqtqa)!MC;T^Flg~YhGiSj:c%w)#>Xw>5q<?YF8cIkC' );
define( 'LOGGED_IN_KEY',    'lxsG{WG(CKC_*%]~Hw2khjMSXK_%B`aOuhfSE@w/D-8e[OhpIs1wj-I]5x05Bs|Q' );
define( 'NONCE_KEY',        '6 l7sVw5kT4th9=#92.@Sy* <mfS(4%kdFcr3!l*eY{RkU-n; 3M#rx=?Qn0|+)O' );
define( 'AUTH_SALT',        '}USO+xJSIws<E`Az7_q;J3^c)K%H f&%A;5{TJgs<zY,s$6p,W2gWFY`E% Yyhbj' );
define( 'SECURE_AUTH_SALT', '2D+vtOgJK+g/UxC*9=o.7QiSia?uNkw0IZ^{#HOK+cD1L%3u/H.S.1Ab9Bpml3lr' );
define( 'LOGGED_IN_SALT',   '`PQU]w051h%Oq^&IA7BcKVe tV9y!i-.&Z}`3J5x-MIfq hK&ZUMP0,C;kbNc.yz' );
define( 'NONCE_SALT',       ';eVSM7vEI1!]|iN.>A}40Z4DXtv{x0rZf K?=X;JG2w]vo|G .tn[0jJqm6#8Zxk' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
