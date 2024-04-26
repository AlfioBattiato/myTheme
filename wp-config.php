<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'db_myTheme' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't?{*!3V={e0-KAD7N/uV@&Q:/R7I{b0~ E$LpqU284KKyMV j3dBEOQAsWDmlS2<' );
define( 'SECURE_AUTH_KEY',  'VWDkjN)}%YFR*vQ.*iZnvsc%P Ds,e;?_ra*r@:]s+x!y;_lAKgbq~ayL9IB?wDS' );
define( 'LOGGED_IN_KEY',    'E}/#wEPJg*jW44wyBNo&8q!Q5@j%BBHw4O9.|.RCx*>FLSJ;BwVOMtT[pSzeEQH]' );
define( 'NONCE_KEY',        ']O6a,ntU+W_,VBr/G Ev;v4Lz4tE6[M]ErEgSR8:l@@p45cyZ-Vn>Z:Ts$p]GLn)' );
define( 'AUTH_SALT',        ' =!c)Tn5H N)B_3GN-HI1VQ3#e.&?ov*@DB|eQ@WE[h`-ph@s76;;n5%iI[Se#W/' );
define( 'SECURE_AUTH_SALT', ']MlR,Cf5 B*4BH=3sk8!_o e9c`YWBu75;qA4-YSfnpNRXSN*fhk|69#J;Pdc6O3' );
define( 'LOGGED_IN_SALT',   'JQ@Sw< /8zR4/SGhgpI`&B7V>*=Qhrk,t>GQlZv|pAEzp@bbEOt<sjofW`5xh:~&' );
define( 'NONCE_SALT',       'sowakSSy4 k<pMmw=a&GQ;iE;O]~Id4.}iCi qn_&iP-#8mp|9nxmjqT^]#Vr0fG' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli sviluppatori di temi e plugin di utilizzare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungi qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
