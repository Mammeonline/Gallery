<?php
/**
*
* acp_styles [Italian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @copyright (c) 2010 phpBB.it - translated on 2010-11-16
* @copyright (c) 2011 phpBBItalia.net - translated on 2011-06-27
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_IMAGESETS_EXPLAIN'	=> 'Un <i>set-immagini</i> contiene le immagini per bottoni, forum, cartelle oltre ad altre immagini dello stile in uso. Puoi aggiornare, esportare o cancellare un set-immagini esistente ed importare o attivarne di nuovi.',
	'ACP_STYLES_EXPLAIN'	=> 'Da qui puoi gestire gli stili presenti. Uno stile è formato da template, temi e set-immagini. Puoi modificare gli stili esistenti, cancellarli, disattivarli, riattivarli, crearne o importarne di nuovi. Puoi anche valutare l’effetto di uno stile installato usando la funzione di anteprima. Lo stile predefinito è indicato con un asterisco (*). Appare anche il conteggio totale degli utenti che usano un certo stile; non viene tenuto conto dell’eventuale annullamento dello stile scelto dall’utente.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Il template comprende tutti i markup usati per generare lo schema delle pagine. Qui puoi modificare i template, cancellarli, esportarli, importarli e vederne l’anteprima. Puoi addirittura modificare la codifica utilizzata per generare i BBCode.',
	'ACP_THEMES_EXPLAIN'	=> 'Da qui puoi creare, installare, modificare, cancellare ed esportare i temi. Per <i>tema</i> si intende la combinazione di colori ed immagini applicabili al template per cambiarne l’aspetto. Il numero di opzioni disponibili dipende dalla configurazione del server e dall’installazione phpBB, come riportato sul manuale. Nota che per creare dei nuovi temi non è obbligatorio usare un tema già esistente come base di partenza.',
	'ADD_IMAGESET'			=> 'Crea set-immagini',
	'ADD_IMAGESET_EXPLAIN'	=> 'Da qui puoi creare un nuovo set-immagini. A seconda della configurazione del server e dei permessi file, potresti avere opzioni aggiuntive a disposizione. Puoi, ad esempio, prendere come spunto un set-immagini già esistente. Volendo puoi caricare, o importare un archivio di set-immagini (dalla cartella store). Se carichi, o importi un set-immagini, il nome può essere acquisito dall’archivio (basta lasciare vuoto il campo del nome del set-immagini).',
	'ADD_STYLE'				=> 'Crea stile',
	'ADD_STYLE_EXPLAIN'		=> 'Da qui puoi creare un nuovo stile. A seconda della configurazione del server e dei permessi file, potresti avere opzioni aggiuntive a disposizione. Puoi, ad esempio, prendere come spunto uno stile già esistente. Volendo puoi caricare, o importare un archivio di stile (dalla cartella store). Se carichi, o importi uno stile, il nome può essere acquisito dall’archivio (basta lasciare vuoto il campo del nome dello stile).',
	'ADD_TEMPLATE'			=> 'Crea template',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Da qui puoi aggiungere un nuovo template. A seconda della configurazione del server e dei permessi file, potresti avere opzioni aggiuntive a disposizione. Puoi, ad esempio, prendere come spunto un template già esistente. Volendo puoi caricare, o importare un archivio di template (dalla cartella store). Se carichi, o importi un template, il nome può essere acquisito dall’archivio (basta lasciare vuoto il campo del nome del template).',
	'ADD_THEME'				=> 'Crea tema',
	'ADD_THEME_EXPLAIN'		=> 'Da qui puoi aggiungere un nuovo tema. A seconda della configurazione del server e dei permessi file, potresti avere opzioni aggiuntive a disposizione. Puoi, ad esempio, prendere come spunto un tema già esistente. Volendo puoi caricare, o importare un archivio di tema (dalla cartella store). Se carichi, o importi un tema, il nome può essere acquisito dall’archivio (basta lasciare vuoto il campo del nome del tema).',
	'ARCHIVE_FORMAT'		=> 'Tipo file archivio',
	'AUTOMATIC_EXPLAIN'     => 'Lascia vuoto per tentare la rilevazione automatica.',

	'BACKGROUND'			=> 'Sfondo',
	'BACKGROUND_COLOUR'		=> 'Colore di sfondo',
	'BACKGROUND_IMAGE'		=> 'Immagine di sfondo',
	'BACKGROUND_REPEAT'		=> 'Ripeti sfondo',
	'BOLD'					=> 'Grassetto',

	'CACHE'					=> 'Cache',
	'CACHE_CACHED'			=> 'Inserito in cache',
	'CACHE_FILENAME'		=> 'File template',
	'CACHE_FILESIZE'		=> 'Dimensione file',
	'CACHE_MODIFIED'		=> 'Modificato',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Sei sicuro di voler aggiornare i dati del set-immagini? I valori del file di configurazione immagini (cfg) cancelleranno le eventuali modifiche effettuate.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Sei sicuro di voler cancellare le versioni dei file template in memoria cache?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Sei sicuro di voler aggiornare i dati del template in database coi contenuti del template presente sul server? Se hai effettuato modifiche con l’editor dei template senza salvare su server, andranno perse.',
	'CONFIRM_THEME_REFRESH'			=> 'Sei sicuro di voler aggiornare i dati del tema in database coi contenuti del tema presente sul server? Se hai effettuato modifiche con l’editor dei temi senza salvare su server, andranno perse.',
	'COPYRIGHT'					=> 'Copyright',
	'CREATE_IMAGESET'			=> 'Crea nuovo set-immagini',
	'CREATE_STYLE'				=> 'Crea nuovo stile',
	'CREATE_TEMPLATE'			=> 'Crea nuovo template',
	'CREATE_THEME'				=> 'Crea nuovo tema',
	'CURRENT_IMAGE'				=> 'Immagine corrente',
	'DEACTIVATE_DEFAULT'		=> 'Non puoi disattivare lo stile <i>predefinito</i>.',
	'DELETE_FROM_FS'			=> 'Cancella dal server',
	'DELETE_IMAGESET'			=> 'Cancella set-immagini',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Qui è possibile rimuovere il set-immagini selezionato dal database. <strong>Attenzione:</strong> non è possibile annullare l’operazione. È consigliabile esportare preventivamente il set-immagini per un eventuale ripristino futuro.',
	'DELETE_STYLE'				=> 'Cancella stile',
	'DELETE_STYLE_EXPLAIN'		=> 'Qui è possibile rimuovere lo stile selezionato. <strong>Attenzione:</strong> non è possibile annullare l’operazione.',
	'DELETE_TEMPLATE'			=> 'Cancella template',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Qui è possibile rimuovere il template selezionato dal database. <strong>Attenzione:</strong> non è possibile annullare l’operazione. È consigliabile esportare preventivamente il template per un eventuale ripristino futuro.',
	'DELETE_THEME'				=> 'Cancella tema',
	'DELETE_THEME_EXPLAIN'		=> 'Qui è possibile rimuovere il tema selezionato dal database. <strong>Attenzione:</strong> non è possibile annullare l’operazione. È consigliabile esportare preventivamente il tema per un eventuale ripristino futuro.',
	'DETAILS'					=> 'Dettagli',
	'DIMENSIONS_EXPLAIN'		=> 'Scegliendo "Sì" verranno inclusi i parametri larghezza/altezza.',
	'EDIT_DETAILS_IMAGESET'				=> 'Modifica dettagli set-immagini',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Puoi modificare i dettagli relativi al set-immagini per esempio cambiare il nome.',
	'EDIT_DETAILS_STYLE'				=> 'Modifica stile',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Puoi modificare lo stile usando il modulo qui sotto. Si può cambiare la combinazione di moduli, temi e immagini che definiscono lo stile. È qui che si può decidere quale stile sia predefinito.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Modifica dettagli template',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Qui si modificano alcune caratteristiche del template, per esempio il nome. Puoi cambiare la definizione degli stili dal file di configurazione al database e viceversa. Possibilità che dipende dalla configurazione PHP del server e se il web server ha il permesso di scrivere i file.',
	'EDIT_DETAILS_THEME'				=> 'Modifica dettagli tema',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Qui si modificano alcune caratteristiche dei temi, per esempio il nome. Puoi cambiare la definizione degli stili dal file di configurazione al database e viceversa. Possibilità che dipende dalla configurazione PHP del server e se il web server ha il permesso di scrivere i file.',
	'EDIT_IMAGESET'						=> 'Modifica set-immagini',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Qui puoi cambiare le singole immagini che compongono il set-immagini. Per ogni immagine puoi decidere di impostarne le dimensioni, anche se è una scelta opzionale. Impostare le dimensioni potrebbe essere utile per evitare comportamenti imprevedibili da parte di alcuni browser, ma facendolo si appesantisce il database.',
	'EDIT_TEMPLATE'						=> 'Modifica template',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Qui puoi modificare direttamente i template. Se PHP è in grado di scrivere sulla cartella degli stili, i cambiamenti fatti saranno scritti direttamente su file. Attenzione: queste modifiche, una volta fatte, sono permanenti e non si può più tornare indietro. Se PHP non ha i permessi di scrittura su file di sistema, le modifiche saranno copiate nel database e i cambiamenti saranno effettuati solo lì. Attenzione a modificare i template, tutte le variabili di rimpiazzo devono essere chiuse tra graffe {XXXX} come anche le istruzioni condizionali.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Impossibile scrivere su server il file template quindi le modifiche sono state salvate nel database.',
	'EDIT_THEME'						=> 'Modifica tema',
	'EDIT_THEME_EXPLAIN'				=> 'Qui puoi modificare il tema selezionato, si possono cambiare colori, immagini, ecc.',
	'EDIT_THEME_STORED_DB'				=> 'Impossibile scrivere su server il foglio di stile quindi le modifiche sono state salvate nel database.',
	'EDIT_THEME_STORE_PARSED'			=> 'Il tema richiede che il suo foglio di stile sia processato. Questo risulta possibile solo se è memorizzato nel database.',
    'EDITOR_DISABLED'                   => 'L’editor del template è disabilitato.',
	'EXPORT'							=> 'Esporta',

	'FOREGROUND'			=> 'Primo piano',
	'FONT_COLOUR'			=> 'Colore carattere',
	'FONT_FACE'				=> 'Tipo di carattere',
	'FONT_FACE_EXPLAIN'		=> 'Puoi specificare più caratteri separandoli con virgole. Per chi non disponesse del primo tipo di carattere scelto, il sistema cercherà il primo disponibile tra gli altri caratteri.',
	'FONT_SIZE'				=> 'Dimensione carattere',

	'GLOBAL_IMAGES'			=> 'Globale',

	'HIDE_CSS'				=> 'Nascondi CSS',

	'IMAGE_WIDTH'				=> 'Larghezza immagine',
	'IMAGE_HEIGHT'				=> 'Altezza immagine',
	'IMAGE'						=> 'Immagine',
	'IMAGE_NAME'				=> 'Nome immagine',
	'IMAGE_PARAMETER'			=> 'Parametri',
	'IMAGE_VALUE'				=> 'Valore',
	'IMAGESET_ADDED'			=> 'Nuovo set-immagini riportato nel file di configurazione.',
	'IMAGESET_ADDED_DB'			=> 'Nuovo set-immagini riportato nel database.',
	'IMAGESET_DELETED'			=> 'Set-immagini cancellato.',
	'IMAGESET_DELETED_FS'		=> 'Set-immagini cancellato dal database ma alcuni file potrebbero essere rimasti nei file di sistema.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Aggiornati dettagli set-immagini.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Scegli un metodo di archiviazione.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Il copyright non può superare i 60 caratteri.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Il nome del set-immagini può contenere solo caratteri alfanumerici, -, +, _ e spazi.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Esiste già un set-immagini con lo stesso nome.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Il nome del set-immagini non può superare 30 caratteri.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'L’archivio indicato non contiene immagini valide.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'È obbligatorio mettere un nome.',
	'IMAGESET_EXPORT'			=> 'Esporta set-immagini',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Qui puoi esportare un set-immagini in formato archivio. L’archivio conterrà tutti i dati necessari ad installare il set anche su altri forum. Puoi decidere se scaricare direttamente, piuttosto che metterlo nella cartella di transito per scaricarlo successivamente con un client FTP.',
	'IMAGESET_EXPORTED'			=> 'Set-immagini esportato e registrato in %s.',
	'IMAGESET_NAME'				=> 'Nome set-immagini',
	'IMAGESET_REFRESHED'		=> 'Set-immagini aggiornato.',
	'IMAGESET_UPDATED'			=> 'Set-immagini modificato.',
	'ITALIC'					=> 'Corsivo',

	'IMG_CAT_BUTTONS'		=> 'Bottoni localizzati',
	'IMG_CAT_CUSTOM'		=> 'Immagini personalizzate',
	'IMG_CAT_FOLDERS'		=> 'Icone argomento',
	'IMG_CAT_FORUMS'		=> 'Icone forum',
	'IMG_CAT_ICONS'			=> 'Icone generiche',
	'IMG_CAT_LOGOS'			=> 'Logo',
	'IMG_CAT_POLLS'			=> 'Immagini sondaggi',
	'IMG_CAT_UI'			=> 'Elementi interfaccia uso generico',
	'IMG_CAT_USER'			=> 'Altre immagini',

	'IMG_SITE_LOGO'			=> 'Logo principale',
	'IMG_UPLOAD_BAR'		=> 'Carica barra di progresso',
	'IMG_POLL_LEFT'			=> 'Parte sinistra sondaggio',
	'IMG_POLL_CENTER'		=> 'Centro sondaggio',
	'IMG_POLL_RIGHT'		=> 'Parte destra sondaggio',
	'IMG_ICON_FRIEND'		=> 'Segna come amico',
	'IMG_ICON_FOE'			=> 'Segna come ignorato',

	'IMG_FORUM_LINK'			=> 'Forum link',
	'IMG_FORUM_READ'			=> 'Forum',
	'IMG_FORUM_READ_LOCKED'		=> 'Forum bloccato',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Subforum',
	'IMG_FORUM_UNREAD'			=> 'Forum messaggi non letti',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Forum messaggi non letti bloccati',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Subforum messaggi non letti',
	'IMG_SUBFORUM_READ'			=> 'Legenda subforum',
	'IMG_SUBFORUM_UNREAD'		=> 'Legenda subforum messaggi non letti',
	
	'IMG_TOPIC_MOVED'			=> 'Argomento spostato',

	'IMG_TOPIC_READ'				=> 'Argomento',
	'IMG_TOPIC_READ_MINE'			=> 'Argomento inviato',
	'IMG_TOPIC_READ_HOT'			=> 'Argomento popolare',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Argomento popolare inviato',
	'IMG_TOPIC_READ_LOCKED'			=> 'Argomento bloccato',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Argomento inviato bloccato',

	'IMG_TOPIC_UNREAD'				=> 'Argomento con messaggi da leggere',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Argomento inviato da leggere',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Angomento popolare con messaggi da leggere',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Argomento popolare inviato da leggere',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Argomento bloccato da leggere',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Argomento bloccato inviato da leggere',

	'IMG_STICKY_READ'				=> 'Argomento importante',
	'IMG_STICKY_READ_MINE'			=> 'Argomento importante inviato',
	'IMG_STICKY_READ_LOCKED'		=> 'Argomento importante bloccato',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Argomento importante bloccato inviato',
	'IMG_STICKY_UNREAD'				=> 'Argomento importante con messaggi da leggere',
	'IMG_STICKY_UNREAD_MINE'		=> 'Argomento importante inviato da leggere',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Argomento importante bloccato con messaggi da leggere',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Argomento importante bloccato inviato da leggere',
	
	'IMG_ANNOUNCE_READ'					=> 'Annunci',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Annuncio inviato',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Annuncio bloccato',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Annuncio bloccato inviato',
	'IMG_ANNOUNCE_UNREAD'				=> 'Annuncio con messaggi da leggere',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Annuncio inviato da leggere',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Annuncio bloccato con messaggi da leggere',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Annuncio bloccato inviato da leggere',
	
	'IMG_GLOBAL_READ'					=> 'Annuncio Globale',
	'IMG_GLOBAL_READ_MINE'				=> 'Annuncio Globale inviato',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Annuncio Globale bloccato',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Annuncio Globale bloccato inviato',
	'IMG_GLOBAL_UNREAD'					=> 'Annuncio Globale con messaggi da leggere',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Annuncio Globale inviato da leggere',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Annuncio Globale bloccato con messaggi da leggere',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Annuncio Globale bloccato inviato da leggere',
	
	'IMG_PM_READ'		=> 'Messaggio privato letto',
	'IMG_PM_UNREAD'		=> 'Messaggio privato non letto',

	'IMG_ICON_BACK_TOP'		=> 'Top',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Invia e-mail',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSN',
	'IMG_ICON_CONTACT_PM'		=> 'Invia messaggio',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Sito Web',

	'IMG_ICON_POST_DELETE'			=> 'Cancella messaggio',
	'IMG_ICON_POST_REPORT_SPAM'		=> 'Report spam post',
	'IMG_ICON_POST_EDIT'			=> 'Modifica messaggio',
	'IMG_ICON_POST_INFO'			=> 'Mostra dettagli messaggio',
	'IMG_ICON_POST_QUOTE'			=> 'Riporta messaggio',
	'IMG_ICON_POST_REPORT'			=> 'Segnala il messaggio',
	'IMG_ICON_POST_TARGET'			=> 'Minimessaggio',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Nuovo minimessaggio',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Allegato',
	'IMG_ICON_TOPIC_LATEST'			=> 'Ultimo messaggio',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Ultimo messaggio non letto',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Messaggio con segnalazione',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Messaggio non approvato',

	'IMG_ICON_USER_ONLINE'		=> 'Utente connesso',
	'IMG_ICON_USER_OFFLINE'		=> 'Utente non connesso',
	'IMG_ICON_USER_PROFILE'		=> 'Mostra profilo',
	'IMG_ICON_USER_SEARCH'		=> 'Cerca messaggi',
	'IMG_ICON_USER_WARN'		=> 'Diffida utente',

	'IMG_BUTTON_PM_FORWARD'		=> 'Inoltra messaggio privato',
	'IMG_BUTTON_PM_NEW'			=> 'Nuovo messaggio privato',
	'IMG_BUTTON_PM_REPLY'		=> 'Rispondi a messaggio privato',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Argomento bloccato',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Nuovo argomento',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Rispondi argomento',

	'IMG_USER_ICON1'		=> 'Immagine personalizzata 1',
	'IMG_USER_ICON2'		=> 'Immagine personalizzata 2',
	'IMG_USER_ICON3'		=> 'Immagine personalizzata 3',
	'IMG_USER_ICON4'		=> 'Immagine personalizzata 4',
	'IMG_USER_ICON5'		=> 'Immagine personalizzata 5',
	'IMG_USER_ICON6'		=> 'Immagine personalizzata 6',
	'IMG_USER_ICON7'		=> 'Immagine personalizzata 7',
	'IMG_USER_ICON8'		=> 'Immagine personalizzata 8',
	'IMG_USER_ICON9'		=> 'Immagine personalizzata 9',
	'IMG_USER_ICON10'		=> 'Immagine personalizzata 10',

	'INCLUDE_DIMENSIONS'		=> 'Includi dimensioni',
	'INCLUDE_IMAGESET'			=> 'Includi set-immagini',
	'INCLUDE_TEMPLATE'			=> 'Includi template',
	'INCLUDE_THEME'				=> 'Includi tema',
	'INHERITING_FROM'           => 'Dipendente da',
	'INSTALL_IMAGESET'			=> 'Installa set-immagini',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Qui puoi installare il set-immagini desiderato. Puoi modificare alcuni dettagli o usare i parametri di installazione predefiniti.',
	'INSTALL_STYLE'				=> 'Installa stile',
	'INSTALL_STYLE_EXPLAIN'		=> 'Qui puoi installare uno stile nuovo e gli elementi stilistici appropriati. Se gli elementi stilistici fossero già installati saranno eliminati. Esistono tuttavia degli stili che richiedono la precedente installazione di alcuni elementi stilistici. Se tali elementi risultassero mancanti per uno stile di questo tipo, verrà emesso un messaggio di avviso.',
	'INSTALL_TEMPLATE'			=> 'Installa template',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Qui puoi installare un nuovo template. Le opzioni disponibili in questa fase dipendono dal tipo di server a disposizione.',
	'INSTALL_THEME'				=> 'Installa tema',
	'INSTALL_THEME_EXPLAIN'		=> 'Qui puoi installare il tema scelto. Puoi modificare alcuni dettagli o usare i parametri di installazione predefiniti.',
	'INSTALLED_IMAGESET'		=> 'Set-immagini installati',
	'INSTALLED_STYLE'			=> 'Stili installati',
	'INSTALLED_TEMPLATE'		=> 'Template installati',
	'INSTALLED_THEME'			=> 'Temi installati',
    'KEEP_IMAGESET'				=> 'Mantieni “%s” set-immagini',
	'KEEP_TEMPLATE'				=> 'Mantieni “%s” template',
	'KEEP_THEME'				=> 'Mantieni “%s” temi',
	
	
	'LINE_SPACING'				=> 'Spaziatura linea',
	'LOCALISED_IMAGES'			=> 'Localizzato',
	'LOCATION_DISABLED_EXPLAIN' => 'Questa impostazione è dipendente da altra e non può essere cambiata.',

	'NO_CLASS'					=> 'Non trovo la classe nel foglio di stile.',
	'NO_IMAGESET'				=> 'Non trovo il set-immagini nel server.',
	'NO_IMAGE'					=> 'Nessuna immagine',
	'NO_IMAGE_ERROR'			=> 'Non trovo l’immagine nel server.',
	'NO_STYLE'					=> 'Non trovo lo stile nel server.',
	'NO_TEMPLATE'				=> 'Non trovo il template nel server.',
	'NO_THEME'					=> 'Non trovo il tema nel server.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Nessun set-immagini da installare.',
	'NO_UNINSTALLED_STYLE'		=> 'Nessuno stile da installare.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Nessun template da installare.',
	'NO_UNINSTALLED_THEME'		=> 'Nessun tema da installare.',
	'NO_UNIT'					=> 'Nessuno',

	'ONLY_IMAGESET'			=> 'Questo è l’unico set-immagini, non puoi cancellarlo.',
	'ONLY_STYLE'			=> 'Questo è l’unico stile, non puoi cancellarlo.',
	'ONLY_TEMPLATE'			=> 'Questo è l’unico set-template, non puoi cancellarlo.',
	'ONLY_THEME'			=> 'Questo è l’unico tema, non puoi cancellarlo.',
	'OPTIONAL_BASIS'		=> 'Opzioni di base',

	'REFRESH'					=> 'Aggiorna',
	'REPEAT_NO'					=> 'Nessuno',
	'REPEAT_X'					=> 'Solo orizzontalmente',
	'REPEAT_Y'					=> 'Solo verticalmente',
	'REPEAT_ALL'				=> 'Entrambe le direzioni',
	'REPLACE_IMAGESET'			=> 'Sostituisci set-immagini con',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Questo set-immagini sostituirà quello cancellato negli stili in uso.',
	'REPLACE_STYLE'				=> 'Sostituisci stile con',
	'REPLACE_STYLE_EXPLAIN'		=> 'Questo stile sostituirà quello cancellato per gli utenti che lo utilizzano.',
	'REPLACE_TEMPLATE'			=> 'Sostituisci template con',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Questo set-template sostituirà quello cancellato negli stili che lo utilizzano.',
	'REPLACE_THEME'				=> 'Sostituisci tema con',
	'REPLACE_THEME_EXPLAIN'		=> 'Questo tema sostituirà quello cancellato negli stili che lo utilizzano.',
	'REPLACE_WITH_OPTION'		=> 'Sostituisci con “%s”',
	'REQUIRES_IMAGESET'			=> 'Questo stile richiede che sia installato il set-immagini %s.',
	'REQUIRES_TEMPLATE'			=> 'Questo stile richiede che sia installato il template %s.',
	'REQUIRES_THEME'			=> 'Questo stile richiede che sia installato il tema %s.',

	'SELECT_IMAGE'				=> 'Seleziona immagine',
	'SELECT_TEMPLATE'			=> 'Seleziona file template',
	'SELECT_THEME'				=> 'Seleziona file tema',
	'SELECTED_IMAGE'			=> 'Immagine selezionata',
	'SELECTED_IMAGESET'			=> 'Set-immagini selezionato',
	'SELECTED_TEMPLATE'			=> 'Template selezionato',
	'SELECTED_TEMPLATE_FILE'	=> 'File template selezionato',
	'SELECTED_THEME'			=> 'Tema selezionato',
	'SELECTED_THEME_FILE'		=> 'File tema selezionato',
	'STORE_DATABASE'			=> 'Database',
	'STORE_FILESYSTEM'			=> 'Server',
	'STYLE_ACTIVATE'			=> 'Attivare',
	'STYLE_ACTIVE'				=> 'Attivo',
	'STYLE_ADDED'				=> 'Stile aggiunto.',
	'STYLE_DEACTIVATE'			=> 'Disattiva',
	'STYLE_DEFAULT'				=> 'Rendi stile predefinito',
	'STYLE_DELETED'				=> 'Stile cancellato.',
	'STYLE_DETAILS_UPDATED'		=> 'Stile modificato.',
	'STYLE_ERR_ARCHIVE'			=> 'Selezionare un metodo di archiviazione.',
	'STYLE_ERR_COPY_LONG'		=> 'Il copyright non può essere più lungo di 60 caratteri.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Devi selezionare almeno un elemento di stile.',
	'STYLE_ERR_NAME_CHARS'		=> 'Il nome dello stile può contenere solo caratteri alfanumerici, -, +, _ e spazi.',
	'STYLE_ERR_NAME_EXIST'		=> 'Esiste già uno stile con lo stesso nome.',
	'STYLE_ERR_NAME_LONG'		=> 'Il nome dello stile non può superare i 30 caratteri.',
	'STYLE_ERR_NO_IDS'			=> 'Per questo stile si deve scegliere un template, un tema e un set-immagini.',
	'STYLE_ERR_NOT_STYLE'		=> 'Il file importato o caricato sul sito non contiene un archivio stile valido.',
	'STYLE_ERR_STYLE_NAME'		=> 'Lo stile deve essere identificato da un nome.',
	'STYLE_EXPORT'				=> 'Esporta stile',
	'STYLE_EXPORT_EXPLAIN'		=> 'Qui puoi esportare uno stile sotto forma di archivio. Uno stile non deve necessariamente contenere tutti gli elementi ma ne deve contenerne per lo meno uno. Per esempio, creando un nuovo tema e un set-immagini per un template di uso comune puoi semplicemente esportare tema e set-immagini. Il file potrà essere scaricato direttamente o messo nella cartella di transito per fare successivamente un download via FTP.',
	'STYLE_EXPORTED'			=> 'Stile esportato e salvato in %s.',
	'STYLE_IMAGESET'			=> 'Set-immagini',
	'STYLE_NAME'				=> 'Nome stile',
	'STYLE_TEMPLATE'			=> 'Template',
	'STYLE_THEME'				=> 'Tema',
	'STYLE_USED_BY'				=> 'Usato da (compresi Bot)',

	'TEMPLATE_ADDED'			=> 'Aggiunto template e salvato su server.',
	'TEMPLATE_ADDED_DB'			=> 'Aggiunto template e salvato in database.',
	'TEMPLATE_CACHE'			=> 'Cache template',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'PhpBB, come opzione predefinita, memorizza i template in cache. Questo per diminuire il carico sul server e anche il tempo di generazione della paginata. Da qui puoi vedere la situazione di ogni file in cache e cancellare il singolo file, o l’intera cache, se necessario.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Cache template vuotata.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Non ci sono template in cache.',
	'TEMPLATE_DELETED'			=> 'Set di template cancellati.',
    'TEMPLATE_DELETE_DEPENDENT' => 'Il set del template non può essere eliminato in quanto uno o più altri template dipendono da esso:',
	'TEMPLATE_DELETED_FS'		=> 'Il set del template è stato cancellato dal database, ma nei file potrebbero essere rimaste alcune parti.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Dettagli template aggiornati.',
	'TEMPLATE_EDITOR'			=> 'Modifica template HTML',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Altezza editor template',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Scegli un metodo di archiviazione.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'La cartella di cache non è scrivibile.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Il copyright non può superare i 60 caratteri.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Il nome del template può contenere solo caratteri alfanumerici, -, +, _ e spazi.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Esiste già un set-template con lo stesso nome.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Il nome del template non può superare i 30 caratteri.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'L’archivio specificato non contiene un valido set del template.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'Il nuovo set del template richiede che il template %s sia installato e non dipendente da un altro.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Devi specificare il nome del template.',
	'TEMPLATE_EXPORT'			=> 'Esporta template',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Qui puoi esportare uno set-template in forma di archivio. Conterrà tutto quel che serve per installarlo su un altro forum. Il file potrà essere scaricato direttamente sul sito o messo nella cartella di transito per fare successivamente un download via FTP.',
	'TEMPLATE_EXPORTED'			=> 'Template esportati e salvati in %s.',
	'TEMPLATE_FILE'				=> 'File template',
	'TEMPLATE_FILE_UPDATED'		=> 'File template modificato.',
	'TEMPLATE_INHERITS'         => 'Questo set del template dipende da %s quindi non può avere impostazioni di posizionamento diverse dal suo template principale.',
	'TEMPLATE_LOCATION'			=> 'Salva template in',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Le immagini sono sempre salvate su server.',
	'TEMPLATE_NAME'				=> 'Nome template',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Impossibile scrivere nel file %s. Per favore controlla i permessi per la cartella ed i file.',
	'TEMPLATE_REFRESHED'		=> 'Template aggiornato.',

	'THEME_ADDED'				=> 'Nuovo tema aggiunto su file.',
	'THEME_ADDED_DB'			=> 'Nuovo tema aggiunto al database.',
	'THEME_CLASS_ADDED'			=> 'Classe personalizzata aggiunta.',
	'THEME_DELETED'				=> 'Tema cancellato.',
	'THEME_DELETED_FS'			=> 'Il tema è stato rimosso dal database, ma i file possono ancora essere sul sito.',
	'THEME_DETAILS_UPDATED'		=> 'Dettagli tema aggiornati.',
	'THEME_EDITOR'				=> 'Editor temi',
	'THEME_EDITOR_HEIGHT'		=> 'Altezza editor temi',
	'THEME_ERR_ARCHIVE'			=> 'Scegliere un metodo di archiviazione.',
	'THEME_ERR_CLASS_CHARS'		=> 'Un nome di <i>classe</i> può utilizzare solo caratteri alfanumerici più ., :, -, _ e #.',
	'THEME_ERR_COPY_LONG'		=> 'Il copyright non può superare i 60 caratteri.',
	'THEME_ERR_NAME_CHARS'		=> 'Il nome del tema può contenere solo caratteri alfanumerici, -, +, _ e spazi.',
	'THEME_ERR_NAME_EXIST'		=> 'Esiste già un tema con lo stesso nome.',
	'THEME_ERR_NAME_LONG'		=> 'Il nome del tema non può superare i 30 caratteri.',
	'THEME_ERR_NOT_THEME'		=> 'L’archivio specificato non contiene un tema valido.',
	'THEME_ERR_REFRESH_FS'		=> 'Tema presente solo su file per cui è inutile effettuare un aggiornamento.',
	'THEME_ERR_STYLE_NAME'		=> 'Questo tema deve avere un nome.',
	'THEME_FILE'				=> 'File tema',
	'THEME_EXPORT'				=> 'Esporta tema',
	'THEME_EXPORT_EXPLAIN'		=> 'Qui puoi esportare un tema in forma di archivio. L’archivio conterrà le informazioni necessarie a installare il tema su un altro forum. Il file potrà essere scaricato direttamente sul sito o messo nella cartella di transito per fare successivamente un download via FTP.',
	'THEME_EXPORTED'			=> 'Tema esportato e salvato in %s.',
	'THEME_LOCATION'			=> 'Salva foglio stile in',
	'THEME_LOCATION_EXPLAIN'	=> 'Le immagini sono sempre salvate su server.',
	'THEME_NAME'				=> 'Nome tema',
	'THEME_REFRESHED'			=> 'Tema aggiornato.',
	'THEME_UPDATED'				=> 'Tema modificato.',

	'UNDERLINE'				=> 'Sottolinea',
	'UNINSTALLED_IMAGESET'	=> 'Set-immagini non installati',
	'UNINSTALLED_STYLE'		=> 'Stili non installati',
	'UNINSTALLED_TEMPLATE'	=> 'Template non installati',
	'UNINSTALLED_THEME'		=> 'Temi non installati',
	'UNSET'					=> 'Indefinito',

));
?>
