<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'test');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'ukm9uOWr');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
define('FTP_PLUGIN_DIR', '/wp-content/plugins/');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G*P8~djPl4XxCm>D,gTS`2K7lS4U`4ZXsjDI8zATET{0>sNm}8g#<DuKDVNV%J0=');
define('SECURE_AUTH_KEY',  '56;/fyD8OW<{67nsd@lJ!@kxf)!)v`g!t%~r.bq?g*X-o)wt:6PJ%_3|BG*QhIik');
define('LOGGED_IN_KEY',    'su?})>PkyFc1k0Q1=xVQd:p8>wF8?PGn!!N=) K*RxC&jf!mM:Ka;4&Etd)UeZky');
define('NONCE_KEY',        'b`5]N_{|GA.c>Q$nVgn!h_G/n~3j?6UK<aUuIdY <bNrjH4kIHp}9nb.iP0tLT8#');
define('AUTH_SALT',        '{eJLn2WYNhc1i:)00-0(=4Nee}-#tx6MX{)CaS]|?Oj~5=UV/?}!=Hnrt:Sp>zyy');
define('SECURE_AUTH_SALT', '8MbBR4X5:SDuzQq3q2yiCO(m(n;KeWx_4qh48E!%jlAV?HfsvGoO~%)G~iHym$$~');
define('LOGGED_IN_SALT',   'R30Z>.A^HT^#-{U-L^5$q7^;_TXgNk+2y6QBIpGqhNV}#?L/Cg2u]xG?XwB=y%,]');
define('NONCE_SALT',       'NY@@*-WC7h|FmHp<gy;ZCOX?im#*&IkEd3T=TZT$rc.NCT0_Ekjh56[3S=VZIOjc');
define('FS_METHOD', 'direct');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
