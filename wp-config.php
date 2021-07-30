<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         't?xcuI~y+y$|n<yww !rKh63E+>(p@r*>T_*p5RBHb1~;)Y@9oZ7A-oL@$tw5z^7' );
define( 'SECURE_AUTH_KEY',  ';+FDx(.OEcJVc7`2,|r?}?A_Ne<ty0*OS(&1>?H*97= ^!T,HhDFIZq`*Vg%KGxc' );
define( 'LOGGED_IN_KEY',    'vw|0QL^7o~nf}]YthhHDhp~q.)D_+mn^7wzV8hXqEO6o+bJhG!y6|65,$E<<N`Yl' );
define( 'NONCE_KEY',        '.|Ug:2Nfq}I~j7R3c.2=3@4,a2a?h1-fj9s[TMsaqX.9VZ@`bPEo3*lAztB[OVw]' );
define( 'AUTH_SALT',        'Ud9U<}8@EHcKi-[H=3v>.}e# iSCH+{JJ~(9?@&z2|M`XzS7Zs!Lialzb&h@SI4&' );
define( 'SECURE_AUTH_SALT', 'ge|[AZJ}7P;PUxFd?GnDBZDP=8yNQyN-$*i~CZU/=6u^ka(1!E<Qztg8?Y~+X@N^' );
define( 'LOGGED_IN_SALT',   'V6>WXA+Sk.-<nB7E]4!n?!pF+{[20LjwQ/anU!xJfU%Z&(V*N6Tx0_3W2PmWPP?f' );
define( 'NONCE_SALT',       '+0qYZ2,$=PoKH{1a/=~cqDm$6L:dtD5Btk/K0Ax+u6 gX}Zz,bpdM3Ekcp]H]Bk~' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
