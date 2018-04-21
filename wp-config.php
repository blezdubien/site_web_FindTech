<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'FindTech');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ARv&8)i]K:zL?WZg`E;e}}RtygjcsAzI&2_;Ct]FgAP1EgiqN;N<v{9)I28UOo*_');
define('SECURE_AUTH_KEY',  'RPr]]N-6Lw}jpCBG`6O$5}#5_?t.LRo,2q4;0t|oc?AnFg^<t_3Fp|%.5*FK o%*');
define('LOGGED_IN_KEY',    '^q/T&V-FlX9Q9=lKDs2iZA8vbjbU:z[F%9nlm!Ko/M-UJ}(5[QY>OofI2]$(p&4r');
define('NONCE_KEY',        'ahI:ss4#)<0w^/508)t?b#}U~kE^dTU!J$ISW^8<Dd2WN|5S#B_,E_C`+Q@.fRwr');
define('AUTH_SALT',        'qqu(#hMIJkZCMtX~[ZRc5ey?;<jvsLC2t<*{Lb^Z[.z-x$we2e}g6Hg blvha3?N');
define('SECURE_AUTH_SALT', '^#;VK[.dr#s[n5GNKp-V&2jT+I9 cgqRc$/nyFM rm+C!9?T+FUxRtbS*Bj.(|JU');
define('LOGGED_IN_SALT',   'z79`RiHN{Hqd%QOD?E+:BoQlboA@7TSVR4%&}%wa8}i1ThoO0Fm<{!O[J|XF1qG ');
define('NONCE_SALT',       'g?tZ04`W/t6+Xc@v3^t${bhPErk-1E)ToJd9`~b^W!^I>n~vLK2)YZ]9z+T*@N7s');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'find_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');