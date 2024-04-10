<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_salon' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8MKDLDS^jd|=l/dnrl/T=7.=2i!8wY=JH.83hq{Ob{CpEG&$URV{OnzmU}NU`-T}' );
define( 'SECURE_AUTH_KEY',  '(ZM^!Ud.m)q`cc{~ZzdOc$VC_EGX~i1./u@dEo;&&,Db%BQ|YDpx#=0wa[2XHfb6' );
define( 'LOGGED_IN_KEY',    'i5xhDwRd=gR*Af-MGH.d~8YnJ),Y+.G.FW4F4mDbv#xHdY+bpPi{i*Jv..t+a(L=' );
define( 'NONCE_KEY',        ';FN1C/ybEX5 fF:z?ULw|^(!_LuoqoOIPKT)~aeEnle{hd<j<u=b7!*;}9v3+Odu' );
define( 'AUTH_SALT',        'e2Ir#J,5sHpz~o-[Fjn&IGm6L qu=A9bQiLzk]Jvf7+G*m0b:;4,R92-1+Bo w]D' );
define( 'SECURE_AUTH_SALT', 'azR`}4<uLC^wW]vi]/u=vT/*>Exm>[nQ),y*sFc15a5<5&qxz<[Mb&s@lMN2bG]-' );
define( 'LOGGED_IN_SALT',   'y|EP{>_B<IHO+MKr=hTW{iExl):vgNke@AH/!v2DWyH+|z3+izRryDUL%(;#{bm2' );
define( 'NONCE_SALT',       '}VS9]=%#/D]#T{*O{a+2^>=l.cN` L/zRGPOGBbQ!bc*p#UHFDIc*8(*l8p^CIBA' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
