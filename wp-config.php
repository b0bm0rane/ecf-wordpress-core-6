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
define( 'AUTH_KEY',         'F[KVb}z{#O:3Pc(U,aSn1-g3hdkI/TD<)m`BZJqB*-L=vNK)-7P)X@Wg1rb8!oh$' );
define( 'SECURE_AUTH_KEY',  'R1mh)kf}3`sI{WVx[QnWL+a`mUD%Q:8KbO:cX?Kr]8RScKtOQ=+DJAXz#rO(mB2g' );
define( 'LOGGED_IN_KEY',    '<@$V0RIcG@^X@YJmF~uxG`|;y~Qa8!rPZzX-UJ~b)E1#3,!cmF:V{ On;o:7teL*' );
define( 'NONCE_KEY',        'h^+Jk~np/9%*abG%y=hQF!5]C 4FL>3V!Q]i:s-FX.c*d2}nOuQ{<l+ZNcj-{;J&' );
define( 'AUTH_SALT',        'jIP5]NB3kj!FX=ur?4|fd2rTp[ )2qB.U36lsg5cQ!e5l=Q[pA}94UaVHr5/B[yx' );
define( 'SECURE_AUTH_SALT', 'ff^.,IWWIpq9lXHS?zK5v)-u&p4nS5pL]dShLnU^JBK3dKP:=G%af,v;ANEm8qW}' );
define( 'LOGGED_IN_SALT',   '9Ly@s3ZdK02uFa24,K;4>R2*PAn<UOlcvIl%{sI0?NSH_@`CEcQlXXU*%<C1g$%9' );
define( 'NONCE_SALT',       '*UAM1HI4oV`Nvg;3=] g_-?V94{p7ar(P*F3P hW+V`D,)+99zSDiTzS^E):*,B&' );
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
