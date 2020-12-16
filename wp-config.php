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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']qFW+30ugxxd?t>6:x#WUQBUtw+y/RVrKwbn7/L|Wq(JkNUO$wb4jR}7$RBbRoBB' );
define( 'SECURE_AUTH_KEY',  'd/{cJd0PH%tmh_dhTNoMQy8E^}u+Uj{}7Of9E*N9)A|E|W+(mSQC)(bB_bdgjK7%' );
define( 'LOGGED_IN_KEY',    'E_T&8LA^2Uw=IG42{)cQ/8*+~mBvq`Q|/.6N.60n)<P:)%_/9[On@}@iR;J#J[M5' );
define( 'NONCE_KEY',        'DrDL*{(n`=?%YrqS(?NNL1B3D&Q/l//)syt0.$V,rO$Et5mb8fUbV4zJeA?L*Du^' );
define( 'AUTH_SALT',        'EE8X0IOc;~F8SZp+t)8}`MtV[9]c(ymAi?u,pb<E#g.s4U#;y)0(HR.f>``x8f`n' );
define( 'SECURE_AUTH_SALT', 'p*R(+H}{:MN)@XcBH>!piRH)tqBfk7UV[oOk</F&$b;Pxn_;S0up1*UG!Si4Dpy)' );
define( 'LOGGED_IN_SALT',   ';l{sT,w,:`mNs{z1qeFW?^U+y[#^IF_akyd8X)8m-c,HMx&ywU8xF$WozSu.Vf4k' );
define( 'NONCE_SALT',       'mbY/Y~)z .&9$2~=VC!_Tj{ebC@Npe-uQ}Kfbs~LMg{ LhipixwH&WF,oLCN-PiY' );
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
