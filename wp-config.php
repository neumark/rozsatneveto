<?php
/** 
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} 
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni 
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define('DB_NAME', 'wordpress');

/** MySQL felhasználónév */
define('DB_USER', 'wordpress');


/** MySQL jelszó. */
define('DB_PASSWORD', 'budapest');

/** MySQL  kiszolgáló neve */
define('DB_HOST', '127.0.0.1');

/** Az adatbázis karakter kódolása */
define('DB_CHARSET', 'utf8');

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról. 
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'QWx}Wo^[#sIA|5O$w?NeImJ?|y7yhZSo lW#`/qlq:wps63i%uG/eu0f!mt1Bi}v');
define('SECURE_AUTH_KEY', ' MP>FqVt |QGo21xIVBasJ^Z}t;/@6,6kCGmIHS3-#0Y4;bbf+*{g3br0KW1)n1T');
define('LOGGED_IN_KEY', 'k/u$^*3jUo@$1K@mRFtwHGw>r+%]B@k!;MS9h}H9neV=snE8QM`squbG3_j}b_3$');
define('NONCE_KEY', 'sBlF<lCwAaHsT45af+n%_E1_b/;YJb;L|kL6U@KuJQcAfEV~ EB3 XNEzi:/Fp`.');
define('AUTH_SALT',        '8@4cb=AF:_XZL+0.@UtS?`;{l_0CAOP2.CHH9Sykmj3gV:+yl9(39yPs#zY+?;;)');
define('SECURE_AUTH_SALT', 'g7+UEbu|r&@72`bW&qPo<:_Y8WT/QM7>dlAJMLip;2nu/U{.W9 T`f~#M}TKL2#V');
define('LOGGED_IN_SALT',   'ODmDq>=/)w1@;^%_X6e`C+#xb%{c)w0ovG9[[`AReEE#XA[;!r4;00QX:cWb1t<+');
define('NONCE_SALT',       'UDfTvaz7+SN@wX<!Q9}RRJlQ59@>V$,M#d6ov.cjCe?P4![j)67J[,APX$@2~B)Y');

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix  = 'wp_';

/**
 * WordPress nyelve. Ahhoz, hogy magyarul működjön az oldal, ennek az értéknek
 * 'hu_HU'-nak kell lennie. Üresen hagyva az oldal angolul fog megjelenni.
 *
 * A beállított nyelv .mo fájljának telepítve kell lennie a wp-content/languages
 * könyvtárba, ahogyan ez a magyar telepítőben alapértelmezetten benne is van.
 *  
 * Például: be kell másolni a hu_HU.mo fájlokat a wp-content/languages könyvtárba, 
 * és be kell állítani a WPLANG konstanst 'hu_HU'-ra, 
 * hogy a magyar nyelvi támogatást bekapcsolásra kerüljön.
 */

define ('WPLANG', 'hu_HU');

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során. 
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', true);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');

