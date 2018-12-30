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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_mariajose');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'T:{:>8j3~>B$9HUj!!4ZU`/]bFx:bFnC>zP bBO^u/*P=pfSu Atz)I+lcI>77T[');
define('SECURE_AUTH_KEY',  'bm0>Z{WjBlzPjeO2_=NeUV*c_(p|%_b~&w*72By9rQ|(mUrnafoN3y,do(VbP~5:');
define('LOGGED_IN_KEY',    '|=f|g!dq=GEPok(ZKjp>-S`4g$9- 3m_XFHRr*2Doq~lSQZralC,(Sj*:QtI!W|R');
define('NONCE_KEY',        'hW.%rFxQ|G/X_!3i#l:R$%lSP@{6rIli,cE/(SVmDZpHURFxD*#.W5`|&IgAtKHE');
define('AUTH_SALT',        'h.m:T:Tw8NRdeHUB!@d }1g1;W+8,92>hQ8,$Y2(Ab`=kav}<Gvt=RCP`*N6vDd%');
define('SECURE_AUTH_SALT', '?9mJXIa$pSm-t^,^kF!7@[e`%<t-Kz{v&4w}Ax_>g)f-[KfUL*6F 16q+$@jh^}=');
define('LOGGED_IN_SALT',   '72-uL7OI;F8/aaR{Ll>=j^9>LT=9<&RnBNoh5{GnYcsp7<{ (FpD]l$^S&0B%<aG');
define('NONCE_SALT',       'Blmx@*/xtD0J{%LJ7S)p5^vs!WHR?5ftN5/Q1:GAU@mdDO!Z%c^Nok)o8dJcPjWv');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_mariajose';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
