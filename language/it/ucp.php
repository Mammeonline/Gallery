<?php
/**
*
* ucp [Italian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @copyright (c) 2010 phpBB.it - translated on 2010-03-01
* @copyright (c) 2011 phpBBItalia.net - translated on 2011-11-21
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
// *** 3. di aver letto la Nota sul <a href="http://www.mammeonline.net/phpBB3/ucp.php?mode=privacy">Trattamento dei dati personali</a>;
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Accedendo a “%1$s” (in seguito “noi”, “nostro”,  “%1$s”, “%2$s”), l’utente accetta di essere vincolato legalmente alle seguenti condizioni d’uso. Se non accetti di essere limitato legalmente alle condizioni d’uso seguenti non utilizzare i servizi offerti da “%1$s”. Le condizioni d’uso possono cambiare in qualunque momento, sarà nostra premura avvisarti di tali modifiche, benché sia opportuno controllare con frequenza queste pagine per eventuali modifiche, dato che l’uso continuato dei servizi di “%1$s” implica la completa accettazione delle condizioni d’uso.<br />
	<br />
	“%1$s” utilizza il sistema phpBB (in seguito “loro”, “phpBB software”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams”) che è un software per la creazione di comunità web rilasciata sotto “<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>” (in seguito “GPL”) liberamente scaricabile da <a href="http://www.phpbb.com/">www.phpbb.com</a>. Il software phpBB facilita le aree di discussione internet, phpBB Group non è responsabile dei contenuti e della gestione. Per ulteriori informazioni su phpBB: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Accetti di non inviare alcun tipo di offesa, oscenità, volgarità, calunnia, minaccia, o qualsiasi altro tipo di materiale che può violare una qualsiasi legge del proprio Stato, o dello Stato dove “%1$s” è ospitato, o di una legge internazionale. Fare ciò porta all’immediato e permanente divieto di accesso, con notifica al tuo provider Internet se è ritenuto da noi opportuno. Tutti gli indirizzi IP sono registrati per salvaguardare e rinforzare queste condizioni. Accetti che “%1$s” abbia il diritto di rimuovere, riscrivere, spostare o chiudere qualsiasi argomento in qualsiasi momento lo ritenga necessario. Come fruitore di questo servizio, accetti che ogni informazione tu abbia inviato sia conservata in un database. Al contempo queste informazioni non saranno divulgate a nessuno senza il tuo consenso, nè “%1$s” o phpBB sono da ritenersi responsabili per qualsiasi violazione al sistema che possa compromettere queste informazioni.<br />
<br />
	Mammeonline Network Ltd raccoglie e utilizza i dati personali dei propri utenti secondo le norme del Decreto Legislativo n. 196/2003 ("Codice in materia di protezione dei dati personali"). Titolare del trattamento è Mammeonline Network Ltd, con sede in 1592 Sofia (BG), 1 Amsterdam Str. Per esercitare i diritti previsti dall\'art. 7 del Codice in materia di protezione dei dati personali, per avere ulteriori informazioni sulle modalità di raccolta e utilizzo dei tuoi dati personali, oppure per domande e suggerimenti, contatta direttamente Mammeonline Network Ltd.
Mammeonline Network Ltd è tenuta, ai sensi dell\'art. 13 del Codice in materia di protezione dei dati personali, a fornire ai propri utenti alcune specifiche informazioni in merito alle finalità e alle modalità di utilizzo dei dati personali.
Di seguito riportiamo la suddetta informativa legale, in modo di consentire a ciascun utente di sapere, anche senza iniziare il processo di registrazione al Servizio, in che modo Mammeonline Network Ltd adempie agli obblighi di carattere informativo prescritti dalla legge a garanzia dei propri utenti.<br />
<br />
<a name="condizioni">CONDIZIONI GENERALI PER LA FORNITURA DEI SERVIZI DI MAMMEONLINE.NET</a><br />
<br />
1.	PREMESSE E DEFINIZIONI
<br />
1.1	Le presenti Condizioni Generali disciplinano tutti i termini e le condizioni relative alla fornitura dei servizi gratuiti offerti di volta in volta da Mammeonline.net (d\'ora innanzi i "Servizi").
<br />
2.	ISCRIZIONE.
<br />
2.1	L\'iscrizione ai Servizi offerti da Mammeonline.net è gratuita e presuppone l\'accettazione delle presenti Condizioni generali. Per poter accedere ai servizi offerti da Mammeonline.net, l\'Utente deve compilare la scheda di registrazione.
<br />
2.2	L\'Utente deve essere maggiorenne e si impegna a fornire il proprio nome, i propri dati anagrafici, l\'indirizzo e-mail e ogni altro dato richiesto in modo corretto e veritiero. L\'Utente si impegna ad aggiornare tempestivamente i propri dati anagrafici registrati, incluso il proprio indirizzo e-mail, affinché questi risultino in ogni momento completi e veritieri.
<br />
3.	DURATA E RECESSO
<br />
3.1	L\'erogazione dei Servizi decorrerà dalla data di registrazione da parte dell\'Utente e si intenderà a tempo indeterminato, salvo il diritto dell\'Utente di recedere e rinunciare all\'utilizzo del Servizio. Il recesso da parte dell\'Utente potrà avvenire in ogni momento e con effetto immediato a mezzo di comunicazione scritta inviata a Mammeonline, via e-mail all\'indirizzo admin[AT]mammeonline.com . La comunicazione può essere inviata anche mediante fax al n. 1786083846
<br />
3.2	Mammeonline potrà recedere dai Servizi offerti all\'Utente in qualsiasi momento a partire dal primo giorno di calendario successivo alla registrazione dello stesso, mediante comunicazione inviata via e-mail all\'indirizzo fornito dall\'Utente e con effetto immediato.
<br />
3.3	In caso di violazione da parte dell\'Utente di una qualsiasi delle presenti Condizioni Generali, Mammeonline si riserva il diritto, senza alcun obbligo di preavviso, interrompere l\'erogazione dei Servizi a favore dell\'Utente.
<br />
3.4	Eventuali reclami sul funzionamento del Servizio potranno essere inviati via e-mail a admin[AT]mammeonline.com o via fax al n. 1786083846
<br />
4.	UTILIZZO DEI SERVIZI.
<br />
4.1	Il diritto di utilizzare i Servizi offerti da Mammeonline  è personale e non trasferibile a nessun soggetto diverso dall\'Utente.
<br />
4.2	Dopo aver completato la procedura di registrazione, l\'Utente sarà titolare di un account personale, accessibile tramite un\'identificazione anonima (Nickname) ed una parola chiave (password). La parole chiave è strettamente personale e confidenziale. L\'Utente si impegna a non divulgare la parola chiave per nessuna ragione. L\'Utente sarà ritenuto responsabile per eventuali azioni e comportamenti in contrasto con le leggi vigenti o con le presenti Condizioni Generali commessi da tutti coloro i quali utilizzeranno in sua vece l\'account personale. L\'Utente si impegna a segnalare tempestivamente a Mammeonline.net l\'eventuale furto, smarrimento o perdita della password, nonché qualsiasi uso scorretto da parte di terzi del account o della sua parola chiave di cui sia venuto a conoscenza.
<br />
4.3	E\' fatto espresso divieto all\'Utente di inserire o trasmettere, attraverso i Servizi, alcun tipo di materiale che violi diritti di terzi, che sia contrario alla legge, all\'ordine pubblico ed al buon costume, che sia minaccioso, offensivo e/o diffamatorio, che violi i diritti inerenti alla vita pubblica e privata, che sia volgare, osceno, blasfemo o in altro modo inopportuno, che inciti ad azioni criminali, ad azioni che siano causa di responsabilità civile, ad azioni che siano comunque illegali e che, senza la preventiva ed espressa approvazione della Mammeonline.net, contengano messaggi pubblicitari o promozionali.
<br />
4.4	Mammeonline.net si riserva la facoltà di controllare il contenuto dei Servizi, comprese le chat room e i forum, per verificare che sia conforme a quanto previsto dalle Condizioni Generali ed alle leggi vigenti.
<br />
5.	ESCLUSIONE DI GARANZIA
<br />
5.1	E\' espressamente esclusa ogni forma di garanzia da parte di Mammeonline Network Ltd relativamente alla continuità dei Servizi, ad eventuali interruzioni, sospensioni od errori.
<br />
5.2	Mammeonline Network Ltd si riserva il diritto di modificare e/o sospendere e/o cessare, parzialmente o integralmente i Servizi, nonché di variarne contenuti, orari, disponibilità e mezzi tecnici necessari per accedere ed utilizzare i Servizi stessi, ed ad ogni altro aspetto ad essi inerente, dandone comunicazione all\'Utente tramite e-mail con congruo anticipo.
<br />
6.	LIMITAZIONE DI RESPONSABILITA\'
<br />
6.1	E\' esclusa qualsivoglia responsabilità di Mammeonline Network Ltd relativamente a qualsivoglia danno o infortunio inerente l\'erogazione dei Servizi causato da qualsiasi cattivo funzionamento, omissione, cancellazione, interruzione, errore, difetto, ritardo operativo e di trasmissione, virus del computer, cattivo funzionamento della linea di comunicazione, furto, distruzione, accesso non autorizzato, alterazione e uso della documentazione.
<br />
6.2	L\'Utente riconosce espressamente che Mammeonline Network Ltd non potrà essere ritenuto responsabile della eventuale condotta diffamatoria, offensiva e illegale di altri Utenti o di terzi, e che il rischio di eventuali danni ricade interamente sotto la responsabilità personale dell\'Utente stesso.
<br />
6.3	Il sito Mammeonline.net  può contenere links hypertext che rimandano ad altri siti Internet. Mammeonline Network Ltd  non può essere considerata responsabile del contenuto dei siti esterni, del funzionamento dell\'accesso a questi siti, delle relazioni tra l\'Utente ed i titolari di questi siti.
<br />
7.	MARCHI REGISTRATI
<br />
7.1	" Mammeonline.net" e ciascun logo presente sul sito Mammeonline.net costituisce un marchio e/o dominio registrato.
<br />
7.2	Tutti gli altri marchi che appaiono su Mammeonline.net appartengono ai loro rispettivi proprietari.
<br />
8.	DIRITTO D\'AUTORE
<br />
8.1	Mammeonline.net  contiene materiale registrato e protetto da copyright, marchi e altre informazioni soggette a proprietà riservata, compresi testi, foto, video, software, grafica, musiche, suoni, e altro.
<br />
8.2	E\' fatto espresso divieto all\'Utente di  modificare, pubblicare o trasmettere tale materiale e di sfruttare i relativi contenuti, né per intero, né parzialmente, senza il preventivo consenso scritto di Mammeonline Network Ltd.
<br />
8.3	L\'Utente si impegna a non introdurre sul sito Mammeonline.net  materiale protetto da copyright, marchio o proprietà riservata di terzi, se non dietro espressa autorizzazione del possessore di tale diritto di copyright, marchio o proprietà riservata. L\'onere di determinare se il materiale non sia soggetto a qualche diritto di copyright spetta allo stesso Utente, il quale sarà l\'unico responsabile degli eventuali danni prodotti dalla violazione di eventuali diritti di copyright, proprietà riservate e di qualunque altro danno derivante dal materiale da lui proposto.
<br />
8.4	L\'Utente, riconosce a Mammeonline Network Ltd  e/o a soggetti dallo stesso autorizzati, il diritto di utilizzare, copiare, riprodurre, rivedere, pubblicare cedere e distribuire qualunque materiale in qualsiasi forma, dall\'Utente stesso messo a disposizione di Mammeonline Network Ltd attraverso il sito Mammeonline.net, cedendo fin d’ora a Mammeonline Network Ltd  espressamente la titolarità in via esclusiva di  ogni e qualsiasi diritto di proprietà e di uso nonché di  utilizzo anche economico.
<br />
9.	MODIFICHE ALLE CONDIZIONI GENERALI
<br />
9.1	Mammeonline Network Ltd  si riserva il diritto di cambiare o modificare le presenti Condizioni Generali. Tali eventuali cambiamenti, modifiche, cancellazioni e aggiunte verranno ritenute effettive immediatamente dopo la avvenuta comunicazione delle stesse. Tale comunicazione potrà avvenire attraverso una nota su Mammeonline.net, ovvero attraverso posta elettronica o convenzionale. Da tale momento qualunque accesso ed uso, da parte dell\'Utente, di Mammeonline Network Ltd, dovrà essere interpretato come completa accettazione, da parte sua, di tali eventuali cambiamenti, modifiche e aggiunte.
<br />
10.	CONTROVERSIE E LEGGE APPLICABILE
<br />
10.1	Qualsiasi controversia in ordine all\'interpretazione e esecuzione delle presenti Condizioni Generali che dovesse insorgere tra le Parti sarà devoluta all\'esclusiva competenza del Foro di Sofia (Bg).<br />
<br />
Cliccando il bottone di CONFERMA dichiari:
<br />
1. di richiedere la fornitura dei servizi gratuiti offerti da Mammeonline.net;
<br />
2. che le informazioni contenute nel modulo sono corrette e veritiere;
<br />
3. di aver letto la Nota sul <a href="https://www.iubenda.com/privacy-policy/63419905/full-legal">Trattamento dei dati personali</a>;
<br />
4. di prestare il tuo consenso al trattamento dei Dati Personali;
<br />
5. di aver letto, compreso approvato ed  accettato le <a href="#condizioni">Condizioni Generali</a>.',

	'PRIVACY_POLICY'		=> 'Questo paragrafo spiega dettagliatamente come “%1$s” ed eventuali affiliati (in seguito “noi”, “nostro”, “%1$s”, “%2$s”) e phpBB (in seguito “essi”, “loro”, “phpBB software”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams”) usano le informazioni raccolte durante qualsiasi sessione d’uso da te effettuata (in seguito “le tue informazioni”).<br />
	<br />
	Le tue informazioni sono raccolte in due modi. In primo luogo, mentre si naviga in “%1$s” il software phpBB creerà un certo numero di cookie, che sono piccoli file di testo che vengono scaricati nei file temporanei del tuo browser. I primi due cookie contengono solo un identificativo utente (in seguito “user-id”) ed un identificativo anonimo di sessione (in seguito “session-id”), assegnato automaticamente dal software phpBB. Un terzo cookie viene creato quando si naviga tra gli argomenti di “%1$s” e viene usato per memorizzare gli argomenti letti da quelli ancora da leggere, quindi agevolando la lettura nelle tue visite future.<br />
	<br />
	Possiamo anche generare cookie esterni al software phpBB mentre navighi su “%1$s”, benché questi siano estranei agli scopi di questo documento che intende trattare solo quelli creati dal software phpBB. Il secondo metodo di raccolta delle tue informazioni è dato da quello che tu inserisci volontariamente. Con questo sono intesi e non limitati ad essi: inviare messaggi come utente ospite (in seguito “messaggi da ospite”), registrarsi a “%1$s” (in seguito “il tuo account”) e l’invio di messaggi dopo la registrazione e l’accesso (di seguito “i tuoi messaggi”).<br />
	<br />
	Il tuo account avrà, di base, un unico nome identificativo (in seguito “il tuo nome utente”), una password da usare per accedere al tuo account (in seguito “la tua password”) ed un indirizzo e-mail valido (in seguito “la tua e-mail”). Le informazioni rilasciate per l’apertura dell’account a “%1$s” sono protette dalle leggi sulla privacy dello Stato che ospita il server. In aggiunta alle informazioni di nome utente, password ed indirizzo e-mail richiesti durante il processo di registrazione a “%1$s”, quale altra informazione sia obbligatoria o opzionale, è a totale discrezione di “%1$s”. In tutti i casi, hai la possibilità di selezionare quali delle informazioni che hai fornito possano essere rese pubbliche. All’interno del tuo account, hai facoltà di opt-in o opt-out sul generatore automatico di e-mail del software phpBB.<br />
	<br />
	La password viene criptata (hash unidirezionale) per motivi di sicurezza. In ogni caso ti raccomandiamo di non utilizzare la stessa password in troppi siti. La tua password è il metodo di accesso al tuo account a “%1$s”, quindi proteggila attentamente. Ricorda che in nessuna circostanza affiliati di “%1$s”, phpBB o terzi possono legittimamente richiedere la tua password. Nel caso dimenticassi la tua password, puoi utilizzare l’opzione “Ho dimenticato la password” prevista nel software phpBB. Durante questo procedimento ti verrà richiesto il tuo nome utente ed indirizzo e-mail, in modo che il software phpBB possa generare una nuova password che ti permetterà di accedere nuovamente al tuo account.<br /> 
<br /> 
INFORMAZIONI SULLA TUTELA DEI DATI PERSONALI<br />
<br /> 
I Dati di Registrazione nonché ogni altra eventuale informazione associabile, direttamente o indirettamente, ad un Utente determinato, sono raccolti ed utilizzati in conformità al Decreto Legislativo n.196/2003 ("Codice in materia di protezione dei dati personali").
<br /> 
Ai sensi e per gli effetti dell\'articolo 13 del Codice in materia di protezione dei dati personali,  Mammeonline Network Ltd informa che:
<br /> 
I Dati di Registrazione forniti dagli Utenti sono raccolti ed utilizzati da  Mammeonline Network Ltd, anche mediante strumenti e procedure informatiche, per le seguenti finalità: <br />(i) finalità direttamente connesse e strumentali all\'erogazione e alla gestione del Servizio; <br />(ii) previo consenso dell\'Utente, informazione commerciale, marketing e vendita diretta; <br />(iii) previo consenso dell\'Utente, comunicazione dei dati personali da Lei forniti, nonché dei profili commerciali da noi elaborati a soggetti terzi operanti nei settore del commercio e comunicazione, per finalità di marketing, di comunicazione commerciale e vendita diretta.
<br />
I Dati personali liberamente comunicatici  compilando il questionario verranno memorizzati su supporto informatico  e trattati in via del tutto riservata allo scopo di consentire l\'accesso ai ns. servizi. Il trattamento dei Dati avverrà mediante strumenti idonei a garantire la sicurezza nonché la riservatezza e potrà essere effettuato anche mediante strumenti automatizzati atti a memorizzare, gestire e trasmettere i dati stessi.
<br />
Il conferimento dei Dati di Registrazione ha natura facoltativa. Tuttavia, il mancato conferimento, anche parziale, dei dati indicati espressamente come necessari per il perseguimento delle finalità di cui al precedente punto 1, lett. i) determinerà l\'impossibilità per Mammeonline Network Ltd di procedere all\'erogazione del Servizio. Il mancato conferimento dei dati non espressamente indicati come necessari per le finalità di cui al precedente punto 1, lett. i) non pregiudicherà in alcun modo l\'erogazione del Servizio.
<br /> 
Alcuni dati potranno essere comunicati da Mammeonline Network Ltd, previo consenso dell\'Utente - a società terze che offrono beni e/o servizi, con le quali Mammeonline Network Ltd.com abbia stipulato accordi commerciali o di partnership volti a favorire la diffusione di beni e/o servizi. 
Titolare del trattamento è la società Mammeonline Network Ltd, con sede in 1592 Sofia (BG), 1 Amsterdam Str.
<br /> 
L\'articolo 7 del Codice in materia di protezione dei dati personali conferisce all\'Utente la possibilità di esercitare specifici diritti, tra cui quelli di ottenere dal Titolare del trattamento la conferma dell\'esistenza o meno di propri dati personali e la loro messa a disposizione in forma intelligibile; di avere conoscenza dell\'origine dei dati, nonché della logica e delle finalità su cui si basa il trattamento; di ottenere la cancellazione, la trasformazione in forma anonima o il blocco dei dati trattati in violazione di legge, nonché l\'aggiornamento, la rettificazione o, se vi è interesse, l\'integrazione dei dati; di opporsi al trattamento, per motivi legittimi, ovvero opporsi, in ogni momento, ai trattamenti finalizzati al marketing e all\'informazione. Per far valere tali diritti, l\'Utente può rivolgersi direttamente a Mammeonline Network Ltd - admin[AT]mammeonline.com.<br />',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Il tuo account è stato attivato. Grazie per esserti registrato.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'L’account è stato attivato.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Il tuo account è stato riattivato.',
	'ACCOUNT_ADDED'					=> 'Grazie per esserti registrato, il tuo account è stato creato. Ora puoi accedere usando il tuo nome utente e password.',
	'ACCOUNT_COPPA'					=> 'Il tuo account è stato creato ma deve essere approvato, controlla i dettagli al tuo indirizzo di posta elettronica.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Il tuo account è stato aggiornato. Tuttavia, il sistema richiede la riattivazione dell’account per il cambio di indirizzo e-mail. Una chiave di attivazione è stata inviata al nuovo indirizzo che hai fornito. Controlla la tua posta per maggiori informazioni.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Il tuo account è stato aggiornato. Tuttavia, il sistema richiede la riattivazione dell’account da parte di un amministratore per il cambio di indirizzo e-mail. Un’e-mail è stata inviata agli amministratori e verrai informato quando il tuo account sarà riattivato.',
	'ACCOUNT_INACTIVE'				=> 'Il tuo account è stato creato. Tuttavia, il sistema richiede l’attivazione dell’account, una chiave di attivazione è stata inviata all’indirizzo e-mail che hai fornito. Controlla la tua posta per maggiori informazioni.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Il tuo account è stato creato. Tuttavia, il sistema richiede l’attivazione dell’account da parte di un amministratore. Un’e-mail è stata inviata agli amministratori, verrai informato quando il tuo account sarà attivato.',
	'ACTIVATION_EMAIL_SENT'			=> 'L’e-mail di attivazione è stata inviata al tuo indirizzo di posta elettronica.',
	'ACTIVATION_EMAIL_SENT_ADMIN'   => 'L’e-mail di attivazione è stata inviata agli indirizzi di posta elettronica degli amministratori.',
	'ADD'							=> 'Aggiungi',
	'ADD_BCC'						=> 'Aggiungi [CCN]',
	'ADD_FOES'						=> 'Aggiungi nuovi ignorati',
	'ADD_FOES_EXPLAIN'				=> 'Puoi inserire più nomi utente, uno per linea.',
	'ADD_FOLDER'					=> 'Aggiungi cartella',
	'ADD_FRIENDS'					=> 'Aggiungi nuovi amici',
	'ADD_FRIENDS_EXPLAIN'			=> 'Puoi inserire più nomi utente, uno per linea.',
	'ADD_NEW_RULE'					=> 'Aggiungi nuova regola',
	'ADD_RULE'						=> 'Aggiungi regola',
	'ADD_TO'						=> 'Aggiungi [A]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Qui è possibile aggiungere nuovi utenti al gruppo. È possibile scegliere se gli utenti selezionati devono essere predefiniti a questo gruppo. Si prega di inserire ciascun nome utente su una linea separata.',
	'ADMIN_EMAIL'					=> 'Gli amministratori possono inviarti e-mail',
	'AGREE'							=> 'Accetto queste condizioni d’uso',
	'ALLOW_PM'						=> 'Gli utenti possono inviarti messaggi privati',
	'ALLOW_PM_EXPLAIN'				=> 'Amministratori e moderatori potranno sempre inviarti messaggi.',
	'ALREADY_ACTIVATED'				=> 'Hai già attivato il tuo account.',
	'ATTACHMENTS_EXPLAIN'			=> 'Questa è la lista di allegati che hai aggiunto ai messaggi.',
	'ATTACHMENTS_DELETED'			=> 'Gli allegati sono stati cancellati.',
	'ATTACHMENT_DELETED'			=> 'L’allegato è stato cancellato.',
	'AVATAR_CATEGORY'				=> 'Categoria',
	'AVATAR_EXPLAIN'				=> 'Dimensioni massime: larghezza: %1$d pixel, altezza: %2$d pixel, grandezza file: %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'L’inserimento avatar è disabilitato.',
	'AVATAR_GALLERY'				=> 'Galleria locale',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Impossibile caricare avatar in %s.',
	'AVATAR_NOT_ALLOWED'			=> 'Il tuo avatar non può essere visualizzato perché gli avatar sono stati disabilitati.',
	'AVATAR_PAGE'					=> 'Pagina',
    'AVATAR_TYPE_NOT_ALLOWED'       => 'Il tuo avatar non può essere visualizzato perché è di un tipo disabilitato.',

	'BACK_TO_DRAFTS'			=> 'Torna a bozze salvate',
	'BACK_TO_LOGIN'				=> 'Torna alla schermata di accesso',
	'BIRTHDAY'					=> 'Compleanno',
	'BIRTHDAY_EXPLAIN'			=> 'Inserendo l’anno, la tua età verrà indicata al tuo compleanno.',
	'BOARD_DATE_FORMAT'			=> 'Formato data',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'La sintassi della data è uguale alla funzione <a href="http://www.php.net/date">date()</a> del PHP.',
	'BOARD_DST'					=> 'Ora legale in vigore',
	'BOARD_LANGUAGE'			=> 'Lingua',
	'BOARD_STYLE'				=> 'Stile',
	'BOARD_TIMEZONE'			=> 'Fuso orario',
	'BOOKMARKS'					=> 'Segnalibri',
	'BOOKMARKS_EXPLAIN'			=> 'Puoi inserire segnalibri agli argomenti per rivederli in futuro. Seleziona nella lista i segnalibri che vuoi cancellare, poi clicca <em>Rimuovi segnalibri selezionati</em>.',
	'BOOKMARKS_DISABLED'		=> 'I segnalibri non sono attivi.',
	'BOOKMARKS_REMOVED'			=> 'I segnalibri sono stati rimossi.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Non è più possibile modificare o cancellare quel messaggio.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'I messaggi non possono essere spostati nella cartella che vuoi rimuovere.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'I messaggi non possono essere spostati nella cartella posta in uscita.',
	'CANNOT_RENAME_FOLDER'		=> 'Questa cartella non può essere rinominata.',
	'CANNOT_REMOVE_FOLDER'		=> 'Questa cartella non può essere rimossa.',
	'CHANGE_DEFAULT_GROUP'		=> 'Cambia gruppo predefinito',
	'CHANGE_PASSWORD'			=> 'Cambia password',
	'CLICK_GOTO_FOLDER'			=> '%1$sVai alla tua “%3$s” cartella%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sRitorna alla tua cartella “%3$s”%2$s',
	'CONFIRMATION'				=> 'Conferma di registrazione',
	'CONFIRM_CHANGES'			=> 'Conferma variazioni',	
	'CONFIRM_EMAIL'				=> 'Conferma indirizzo e-mail',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Questo va specificato solo se stai cambiando indirizzo e-mail.',
	'CONFIRM_EXPLAIN'			=> 'Per impedire registrazioni automatiche il sistema richiede l’inserimento di un codice di conferma. Il codice è visualizzato nell’immagine che dovresti vedere qui sotto. Se per qualsiasi motivo non riuscissi a leggere il codice contatta un %samministratore%s.',
	'VC_REFRESH'				=> 'Ricarica il codice di conferma',
    'VC_REFRESH_EXPLAIN'		=> 'Se non riesci a leggere il codice puoi richiederne un altro cliccando il pulsante.',
	'CONFIRM_PASSWORD'			=> 'Conferma password',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Devi confermare la password solo se l’hai cambiata sopra.',
	'COPPA_BIRTHDAY'			=> 'Per continuare la procedura di registrazione, specifica quando sei nato:',
	'COPPA_COMPLIANCE'			=> 'Adeguamento COPPA',
	'COPPA_EXPLAIN'				=> 'Cliccando Invia il tuo account verrà creato. Tuttavia non potrà essere attivato fintanto che un genitore o il tutore approvi la tua registrazione. Ti verrà inviato via e-mail il modulo da compilare ed i dettagli di dove inviarlo.',
	'CREATE_FOLDER'				=> 'Aggiungi cartella…',
	'CURRENT_IMAGE'				=> 'Immagine attuale',
	'CURRENT_PASSWORD'			=> 'Password attuale',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Devi confermare la tua password attuale se vuoi cambiarla, oppure se stai modificando l’indirizzo e-mail o il nome utente.',
	'CUR_PASSWORD_EMPTY'		=> 'Non hai inserito la password attuale.',
	'CUR_PASSWORD_ERROR'		=> 'La password attuale inserita non è corretta.',
	'CUSTOM_DATEFORMAT'			=> 'Personalizza…',

	'DEFAULT_ACTION'			=> 'Azione predefinita',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Questa azione verrà eseguita nel caso in cui nessuna delle precedenti sia applicabile.',
	'DEFAULT_ADD_SIG'			=> 'Mostra sempre la mia firma',
	'DEFAULT_BBCODE'			=> 'Attiva sempre il BBCode',
	'DEFAULT_NOTIFY'			=> 'Avvertimi sempre quando viene scritta una risposta',
	'DEFAULT_SMILIES'			=> 'Visualizza sempre le emoticon',
	'DEFINED_RULES'				=> 'Regole definite',
	'DELETED_TOPIC'				=> 'L’argomento è stato cancellato',
	'DELETE_ATTACHMENT'			=> 'Cancella allegato',
	'DELETE_ATTACHMENTS'		=> 'Cancella allegati',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Sei sicuro di voler cancellare l’allegato?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Sei sicuro di voler cancellare gli allegati?',
	'DELETE_AVATAR'				=> 'Cancella immagine',
	'DELETE_COOKIES_CONFIRM'	=> 'Sei sicuro di volere cancellare tutti i cookie di questa Board?',
	'DELETE_MARKED_PM'			=> 'Cancella i messaggi selezionati',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Sei sicuro di voler cancellare tutti i messaggi selezionati?',
	'DELETE_OLDEST_MESSAGES'	=> 'Cancella i messaggi più vecchi',
	'DELETE_MESSAGE'			=> 'Cancella messaggio',
	'DELETE_MESSAGE_CONFIRM'	=> 'Sei sicuro di voler cancellare questo messaggio privato?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Cancella tutti i messaggi dalla cartella rimossa',
	'DELETE_RULE'				=> 'Cancella regola',
	'DELETE_RULE_CONFIRM'		=> 'Sei sicuro di voler cancellare questa regola?',
	'DEMOTE_SELECTED'			=> 'Cedi gestione selezionati',
	'DISABLE_CENSORS'			=> 'Attiva censura parole',
	'DISPLAY_GALLERY'			=> 'Visualizza galleria',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'L’indirizzo e-mail inserito non ha un dominio valido.',
	'DOWNLOADS'					=> 'Download',
	'DRAFTS_DELETED'			=> 'Tutte le bozze selezionate sono state cancellate.',
	'DRAFTS_EXPLAIN'			=> 'Qui puoi leggere, modificare e cancellare le bozze dei tuoi messaggi.',
	'DRAFT_UPDATED'				=> 'La bozza è stata aggiornata.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Qui puoi modificare la tua bozza. Le bozze non contengono allegati e dati di sondaggio.',
	'EMAIL_BANNED_EMAIL'		=> 'L’e-mail inserita non può essere usata.',
	'EMAIL_INVALID_EMAIL'		=> 'L’indirizzo e-mail inserito non è valido.',
	'EMAIL_REMIND'				=> 'Deve essere l’indirizzo e-mail che hai inserito durante la registrazione.',
	'EMAIL_TAKEN_EMAIL'			=> 'L’indirizzo e-mail inserito è già in uso.',
	'EMPTY_DRAFT'				=> 'Devi inserire un messaggio per apportare i cambiamenti.',
	'EMPTY_DRAFT_TITLE'			=> 'Devi inserire un titolo per la bozza.',
	'EXPORT_AS_XML'				=> 'Esporta come XML',
	'EXPORT_AS_CSV'				=> 'Esporta come CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Esporta come CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Esporta come TXT',
	'EXPORT_AS_MSG'				=> 'Esporta come MSG',
	'EXPORT_FOLDER'				=> 'Esporta come visualizzato',

	'FIELD_REQUIRED'					=> 'Il campo “%s” deve essere completato.',
	'FIELD_TOO_SHORT'					=> 'Il campo “%1$s” è troppo corto, è richiesto un minimo di %2$d caratteri.',
	'FIELD_TOO_LONG'					=> 'Il campo “%1$s” è troppo lungo, è consentito un massimo di %2$d caratteri.',
	'FIELD_TOO_SMALL'					=> 'Il valore di “%1$s” è troppo piccolo, è richiesto un valore minimo di %2$d.',
	'FIELD_TOO_LARGE'					=> 'Il valore di “%1$s” è troppo grande, è consentito un valore massimo di %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Il campo “%s” contiene caratteri non validi, sono ammessi solo numeri.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Il campo “%s” contiene caratteri non validi, sono ammessi solo caratteri alfanumerici.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Il campo “%s” contiene caratteri non validi, sono ammessi solo caratteri alfanumerici, spazio o -+_[].',
	'FIELD_INVALID_DATE'				=> 'Il campo “%s” riporta una data non valida.',
	
	'FIELD_INVALID_VALUE'				=> 'Il campo “%s” ha un valore non valido.',

	'FOE_MESSAGE'				=> 'Messaggio da ignorato',
	'FOES_EXPLAIN'				=> 'Gli ignorati sono utenti che non vengono presi in considerazione. I messaggi di questi utenti non saranno completamente visibili. I messaggi privati sono comunque permessi. Tieni presente che non puoi ignorare moderatori o amministratori.',
	'FOES_UPDATED'				=> 'La lista ignorati è stata aggiornata.',
	'FOLDER_ADDED'				=> 'La cartella è stata aggiunta.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d di %2$d messaggi memorizzati',
	'FOLDER_NAME_EMPTY'			=> 'È necessario inserire un nome per questa cartella',
	'FOLDER_NAME_EXIST'			=> 'La cartella <strong>%s</strong> esiste già.',
	'FOLDER_OPTIONS'			=> 'Opzioni cartella',
	'FOLDER_RENAMED'			=> 'La cartella è stata rinominata.',
	'FOLDER_REMOVED'			=> 'La cartella è stata rimossa.',
	'FOLDER_STATUS_MSG'			=> 'La cartella è piena al %1$d%% (%2$d di %3$d messaggi memorizzati)',
	'FORWARD_PM'				=> 'Inoltra MP',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Prima di poter continuare a consultare i forum devi cambiare password.',
	'FRIEND_MESSAGE'			=> 'Messaggio da amico',
	'FRIENDS'					=> 'Amici',
	'FRIENDS_EXPLAIN'			=> 'La funzione Amici permette un accesso veloce agli utenti con cui comunichi frequentemente. Se il template è predisposto, ogni messaggio fatto da un amico sarà evidenziato.',
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'FRIENDS_UPDATED'			=> 'La lista amici è stata aggiornata.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'L’azione da intraprendere quando la cartella è piena, è stata modificata.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Messaggio originale --------',
	'FWD_SUBJECT'				=> 'Titolo: %s',
	'FWD_DATE'					=> 'Data: %s',
	'FWD_FROM'					=> 'Da: %s',
	'FWD_TO'					=> 'A: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Annuncio globale',

	'HIDE_ONLINE'				=> 'Accedi come utente nascosto',
	'HIDE_ONLINE_EXPLAIN'		=> 'La modifica sarà effettiva al tuo prossimo accesso al sistema.',
	'HOLD_NEW_MESSAGES'			=> 'Non accettare nuovi messaggi (i nuovi messaggi saranno trattenuti finché mancherà lo spazio necessario)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Nessun messaggio sarà trattenuto',

	'IF_FOLDER_FULL'			=> 'Se la cartella è piena',
	'IMPORTANT_NEWS'			=> 'Annunci globali',
	'INVALID_USER_BIRTHDAY'		=> 'La data del compleanno non è stata inserita correttamente.',
	'INVALID_CHARS_USERNAME'	=> 'Il nome utente contiene caratteri non consentiti.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'La password non contiene i caratteri richiesti.',
	'ITEMS_REQUIRED'			=> 'Le voci contrassegnate con * sono campi del profilo obbligatori che devono essere compilati.',

	'JOIN_SELECTED'				=> 'Aderisci a selezionati',

	'LANGUAGE'					=> 'Lingua',
	'LINK_REMOTE_AVATAR'		=> 'Collegamento esterno',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Inserisci il percorso URL dove risiede l’immagine dell’avatar che intendi utilizzare.',
	'LINK_REMOTE_SIZE'			=> 'Dimensioni avatar',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Specifica larghezza ed altezza dell’avatar, lascia vuoto per provare la verifica automatica.',
	'LOGIN_EXPLAIN_UCP'			=> 'Devi essere connesso per accedere al Pannello di Controllo Utente.',
	'LOGIN_REDIRECT'			=> 'Accesso effettuato.',
	'LOGOUT_FAILED'				=> 'Non sei stato disconnesso, perché la richiesta non coincide con la sessione. Contatta un amministratore se dovesse ripresentarsi il problema.',
	'LOGOUT_REDIRECT'			=> 'Disconnessione effettuata.',

	'MARK_IMPORTANT'				=> 'Evidenzia come importante',
	'MARKED_MESSAGE'				=> 'Messaggio in evidenza',
	'MAX_FOLDER_REACHED'			=> 'Numero massimo di cartelle permesse raggiunto.',
	'MESSAGE_BY_AUTHOR'				=> 'da',
	'MESSAGE_COLOURS'				=> 'Colori messaggio',
	'MESSAGE_DELETED'				=> 'Il messaggio è stato cancellato.',
	'MESSAGE_HISTORY'				=> 'Storico messaggio',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Il messaggio è stato rimosso dall’autore prima che venisse recapitato.',
	'MESSAGE_SENT_ON'				=> 'il',
	'MESSAGE_STORED'				=> 'Il messaggio è stato inviato.',
	'MESSAGE_TO'					=> 'A',
	'MESSAGES_DELETED'				=> 'I messaggi sono stati cancellati',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Sposta i messaggi della cartella rimossa in',
	'MOVE_DOWN'						=> 'Sposta giù',
	'MOVE_MARKED_TO_FOLDER'			=> 'Sposta evidenziati in %s',
	'MOVE_PM_ERROR'					=> 'C’è stato un errore spostando i messaggi alla nuova cartella e solo %1d su %2d messaggi sono stati spostati.',
	'MOVE_TO_FOLDER'				=> 'Sposta nella cartella',
	'MOVE_UP'						=> 'Sposta su',

	'NEW_EMAIL_CONFIRM_EMPTY'		=> 'Non hai inserito un indirizzo e-mail di conferma.',
	'NEW_EMAIL_ERROR'				=> 'L’indirizzo e-mail inserito non coincide.',
	'NEW_FOLDER_NAME'				=> 'Nuovo nome cartella',
	'NEW_PASSWORD'					=> 'Nuova password',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'Non hai inserito la password di conferma.',
	'NEW_PASSWORD_ERROR'			=> 'Le password che hai inserito non coincidono.',
	'NOTIFY_METHOD'					=> 'Metodo di avviso',
	'NOTIFY_METHOD_BOTH'			=> 'Entrambi',
	'NOTIFY_METHOD_EMAIL'			=> 'Solo e-mail',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Metodo per l’invio di messaggi e-mail da questo sistema.',
	'NOTIFY_METHOD_IM'				=> 'Solo Jabber',
	'NOTIFY_ON_PM'					=> 'Avviso e-mail per nuovi messaggi privati',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Non puoi aggiungere utenti anonimi alla lista amici.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Non puoi aggiungere Bot alla tua lista amici.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Non puoi aggiungere utenti alla lista amici se già presenti in quella ignorati.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Non puoi aggiungere te stesso alla lista amici.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Non puoi aggiungere amministratori e moderatori nella lista ignorati.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Non puoi aggiungere utenti anonimi alla lista ignorati.',
	'NOT_ADDED_FOES_BOTS'			=> 'Non puoi aggiungere Bot alla lista ignorati.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Non puoi aggiungere utenti alla lista ignorati se già presenti in quella amici.',
	'NOT_ADDED_FOES_SELF'			=> 'Non puoi aggiungere te stesso alla lista utenti ignorati.',
	'NOT_AGREE'						=> 'Non accetto queste condizioni d’uso',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'La cartella di destinazione “%s” risulta piena. L’azione richiesta non è stata portata a termine.',
	'NOT_MOVED_MESSAGE'				=> 'Hai 1 messaggio privato attualmente trattenuto a causa di cartella piena.',
	'NOT_MOVED_MESSAGES'			=> 'Hai %d messaggi privati attualmente trattenuti a causa di cartella piena.',
	'NO_ACTION_MODE'				=> 'Nessuna azione specificata.',
	'NO_AUTHOR'						=> 'Nessun autore definito per questo messaggio',
	'NO_AVATAR_CATEGORY'			=> 'Nessuna',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Non sei autorizzato a cancellare messaggi privati.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Non sei autorizzato a modificare messaggi privati.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Non sei autorizzato ad inoltrare messaggi privati.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Non sei autorizzato ad inviare messaggi privati ai gruppi.',
	'NO_AUTH_PASSWORD_REMINDER'     => 'Non sei autorizzato a richiedere una nuova password.',
    'NO_AUTH_READ_HOLD_MESSAGE'     => 'Non sei autorizzato a leggere i messaggi privati trattenuti.',
	'NO_AUTH_READ_MESSAGE'			=> 'Non sei autorizzato a leggere messaggi privati.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Non puoi leggere questo messaggio perché è stato rimosso dall’autore.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Non sei autorizzato ad inviare messaggi privati.',
	'NO_AUTH_SIGNATURE'				=> 'Non sei autorizzato a creare una firma.',

	'NO_BCC_RECIPIENT'			=> 'Nessuno',
	'NO_BOOKMARKS'				=> 'Non hai segnalibri.',
	'NO_BOOKMARKS_SELECTED'		=> 'Non hai selezionato alcun segnalibro.',
	'NO_EDIT_READ_MESSAGE'		=> 'Il messaggio privato non può essere modificato perché è già stato letto.',
	'NO_EMAIL_USER'				=> 'Le informazioni e-mail o nome utente fornite non sono state trovate.',
	'NO_FOES'					=> 'Nessun utente ignorato definito',
	'NO_FRIENDS'				=> 'Nessun amico definito',
	'NO_FRIENDS_OFFLINE'		=> 'Nessun amico offline',
	'NO_FRIENDS_ONLINE'			=> 'Nessun amico online',
	'NO_GROUP_SELECTED'			=> 'Nessun gruppo specificato.',
	'NO_IMPORTANT_NEWS'			=> 'Nessun annuncio globale presente.',
	'NO_MESSAGE'				=> 'Il messaggio privato non è stato trovato.',
	'NO_NEW_FOLDER_NAME'		=> 'Devi specificare un nuovo nome per la cartella.',
	'NO_NEWER_PM'				=> 'Nessun messaggio seguente.',
	'NO_OLDER_PM'				=> 'Nessun messaggio precedente.',
	'NO_PASSWORD_SUPPLIED'		=> 'Non puoi accedere senza una password.',
	'NO_RECIPIENT'				=> 'Nessun destinatario definito.',
	'NO_RULES_DEFINED'			=> 'Nessuna regola definita.',
	'NO_SAVED_DRAFTS'			=> 'Nessuna bozza salvata.',
	'NO_TO_RECIPIENT'			=> 'Nessuno',
	'NO_WATCHED_FORUMS'			=> 'Non stai controllando alcun forum.',
	'NO_WATCHED_SELECTED'       => 'Non hai selezionato nessun argomento o forum controllato.',
	'NO_WATCHED_TOPICS'			=> 'Non stai controllando alcun argomento.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'La password deve avere minimo %1$d e massimo %2$d caratteri, deve contenere numeri e lettere sia maiuscole che minuscole.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Deve avere tra %1$d e %2$d caratteri.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'La password deve avere minimo %1$d e massimo %2$d caratteri, deve contenere lettere sia maiuscole che minuscole.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'La password deve avere minimo %1$d e massimo %2$d caratteri, deve contenere numeri, simboli e lettere sia maiuscole che minuscole.',
	'PASSWORD'					=> 'Password',
	'PASSWORD_ACTIVATED'		=> 'La tua nuova password è stata attivata.',
	'PASSWORD_UPDATED'			=> 'Una nuova password è stata inviata al tuo indirizzo e-mail.',
	'PERMISSIONS_RESTORED'		=> 'Permessi originali ripristinati.',
	'PERMISSIONS_TRANSFERRED'	=> 'Permessi da <strong>%s</strong> trasferiti, ora puoi visitare il sistema con i permessi dell’utente.<br />I permessi di amministratore non sono stati trasferiti. Puoi ritornare ai tuoi permessi originali in ogni momento.',
	'PM_DISABLED'				=> 'I messaggi privati sono disabilitati.',
	'PM_FROM'					=> 'Da',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Questo messaggio è stato spedito da un utente non più registrato.',
	'PM_ICON'					=> 'Icona MP',
	'PM_INBOX'					=> 'Messaggi in arrivo',
	'PM_NO_USERS'				=> 'Gli utenti da aggiungere richiesti non esistono.',
	'PM_OUTBOX'					=> 'Messaggi in uscita',
	'PM_SENTBOX'				=> 'Messaggi spediti',
	'PM_SUBJECT'				=> 'Messaggio',
	'PM_TO'						=> 'Invia a',
	'PM_USERS_REMOVED_NO_PM'	=> 'Alcuni utenti non sono stati aggiunti in quanto hanno disabilitato la ricezione dei messaggi privati.',
	'POPUP_ON_PM'				=> 'Pop up per nuovo messaggio privato',
	'POST_EDIT_PM'				=> 'Modifica messaggio',
	'POST_FORWARD_PM'			=> 'Inoltra messaggio',
	'POST_NEW_PM'				=> 'Nuovo messaggio',
	'POST_PM_LOCKED'			=> 'L’invio di messaggi privati è bloccato.',
	'POST_PM_POST'				=> 'Riporta argomento',
	'POST_QUOTE_PM'				=> 'Riporta messaggio',
	'POST_REPLY_PM'				=> 'Rispondi al messaggio',
	'PRINT_PM'					=> 'Stampa',
	'PREFERENCES_UPDATED'		=> 'Le tue preferenze sono state aggiornate.',
	'PROFILE_INFO_NOTICE'		=> 'N.B. queste informazioni possono essere visibili ad altri utenti. Fai attenzione quando inserisci i tuoi dettagli personali. Ogni voce marcata con * deve essere completata.',
	'PROFILE_UPDATED'			=> 'Il tuo profilo è stato aggiornato.',

	'RECIPIENT'							=> 'Destinatario',
	'RECIPIENTS'						=> 'Destinatari',
	'REGISTRATION'						=> 'Registrazione',
	'RELEASE_MESSAGES'					=> '%sSblocca tutti i messaggi trattenuti%s… saranno indirizzati nelle cartelle appropriate se lo spazio lo consente.',
	'REMOVE_ADDRESS'					=> 'Rimuovi indirizzo',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Rimuovi segnalibri selezionati',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Sei sicuro di voler cancellare i segnalibri selezionati?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Rimuovi segnalibro selezionato',
	'REMOVE_FOLDER'						=> 'Rimuovi cartella',
	'REMOVE_FOLDER_CONFIRM'				=> 'Sei sicuro di voler rimuovere questa cartella?',
	'RENAME'							=> 'Rinomina',
	'RENAME_FOLDER'						=> 'Rinomina cartella',
	'REPLIED_MESSAGE'					=> 'Risposto a messaggio',
	'REPLY_TO_ALL'						=> 'Rispondi al mittente e a tutti i destinatari.',
	'REPORT_PM'							=> 'Segnala il messaggio privato',
	'RESIGN_SELECTED'					=> 'Abbandona selezionato',
	'RETURN_FOLDER'						=> '%1$sRitorna alla cartella precedente%2$s',
	'RETURN_UCP'						=> '%sRitorna al Pannello di Controllo Utente%s',
	'RULE_ADDED'						=> 'La regola è stata aggiunta.',
	'RULE_ALREADY_DEFINED'				=> 'Questa regola era già stata definita.',
	'RULE_DELETED'						=> 'La regola è stata rimossa.',
	'RULE_NOT_DEFINED'					=> 'La regola non è stata definita correttamente.',
	'RULE_REMOVED_MESSAGE'				=> 'Un messaggio privato è stato rimosso su azione di filtri dei messaggi.',
	'RULE_REMOVED_MESSAGES'				=> '%d messaggi privati sono stati rimossi su azione di filtri dei messaggi.',

	'SAME_PASSWORD_ERROR'		=> 'La nuova password inserita è identica alla password attuale.',
	'SEARCH_YOUR_POSTS'			=> 'Mostra i tuoi argomenti',
	'SEND_PASSWORD'				=> 'Genera nuova password',
	'SENT_AT'					=> 'Inviato',			// Used before dates in private messages
	'SHOW_EMAIL'				=> 'Rendi visibile il tuo indirizzo e-mail',
	'SIGNATURE_EXPLAIN'			=> 'Questo è un blocco di testo che può essere aggiunto in fondo ai tuoi messaggi. Il limite caratteri è di %d.',
	'SIGNATURE_PREVIEW'			=> 'Così apparirà la firma nei tuoi messaggi',
	'SIGNATURE_TOO_LONG'		=> 'La tua firma è troppo lunga.',
	'SORT'						=> 'Ordina',
	'SORT_COMMENT'				=> 'Commento file',
	'SORT_DOWNLOADS'			=> 'Download',
	'SORT_EXTENSION'			=> 'Estensione',
	'SORT_FILENAME'				=> 'Nome file',
	'SORT_POST_TIME'			=> 'Ora invio',
	'SORT_SIZE'					=> 'Grandezza file',

	'TIMEZONE'					=> 'Fuso orario',
	'TO'						=> 'A',
	'TOO_MANY_RECIPIENTS'		=> 'Hai cercato di inviare un messaggio a troppi destinatari.',
	'TOO_MANY_REGISTERS'		=> 'Hai superato il numero massimo di tentativi di registrazione per questa sessione. Riprova più tardi.',

	'UCP'						=> 'Pannello di Controllo Utente',
	'UCP_ACTIVATE'				=> 'Attiva account',
	'UCP_ADMIN_ACTIVATE'		=> 'N.B. devi inserire un indirizzo e-mail valido per l’attivazione del tuo account. Un amministratore valuterà la tua richiesta di registrazione e se approvato riceverai una comunicazione all’indirizzo che hai specificato.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Gestione allegati',
	'UCP_COPPA_BEFORE'			=> 'Prima del %s',
	'UCP_COPPA_ON_AFTER'		=> 'Dal %s in poi',
	'UCP_EMAIL_ACTIVATE'		=> 'N.B. devi inserire un indirizzo e-mail valido per l’attivazione del tuo account. Riceverai un’e-mail all’indirizzo che hai specificato, contenente un collegamento per l’attivazione dell’account.',
	'UCP_ICQ'					=> 'Numero ICQ',
	'UCP_JABBER'				=> 'Indirizzo Jabber',

	'UCP_MAIN'					=> 'Panoramica',
	'UCP_MAIN_ATTACHMENTS'		=> 'Gestione allegati',
	'UCP_MAIN_BOOKMARKS'		=> 'Gestione segnalibri',
	'UCP_MAIN_DRAFTS'			=> 'Gestione bozze',
	'UCP_MAIN_FRONT'			=> 'Prima pagina',
	'UCP_MAIN_SUBSCRIBED'		=> 'Gestione sottoscrizioni',

	'UCP_MSNM'					=> 'WL/MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Non hai allegati.',

	'UCP_PREFS'					=> 'Preferenze',
	'UCP_PREFS_PERSONAL'		=> 'Preferenze globali',
	'UCP_PREFS_POST'			=> 'Preferenze messaggi',
	'UCP_PREFS_VIEW'			=> 'Opzioni di visualizzazione',
	
	'UCP_PM'					=> 'Messaggi privati',
	'UCP_PM_COMPOSE'			=> 'Scrivi messaggio',
	'UCP_PM_DRAFTS'				=> 'Gestione bozze MP',
	'UCP_PM_OPTIONS'			=> 'Regole, cartelle e preferenze',
	'UCP_PM_POPUP'				=> 'Messaggi privati',
	'UCP_PM_POPUP_TITLE'		=> 'Popup messaggi privati',
	'UCP_PM_UNREAD'				=> 'Messaggi non letti',
	'UCP_PM_VIEW'				=> 'Vedi messaggi',

	'UCP_PROFILE'				=> 'Profilo',
	'UCP_PROFILE_AVATAR'		=> 'Modifica avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Modifica profilo',
	'UCP_PROFILE_REG_DETAILS'	=> 'Modifica account',
	'UCP_PROFILE_SIGNATURE'		=> 'Modifica firma',

	'UCP_USERGROUPS'			=> 'Gruppi',
	'UCP_USERGROUPS_MEMBER'		=> 'Modifica iscrizioni',
	'UCP_USERGROUPS_MANAGE'		=> 'Gestione gruppi',

	'UCP_REGISTER_DISABLE'			=> 'La creazione di un nuovo account non è attualmente possibile.',
	'UCP_REMIND'					=> 'Invia password',
	'UCP_RESEND'					=> 'Invia e-mail di attivazione',
	'UCP_WELCOME'					=> 'Benvenuto nel Pannello di Controllo Utente. Da qui puoi monitorare, modificare o aggiornare il tuo <em>Profilo</em>. Puoi gestire tutte le tue <em>Preferenze</em>, attivare o disattivare la sottoscrizione a forum e/o argomenti. Se consentito, tramite l’apposita funzione <em>Messaggi Privati</em>, puoi scambiare messaggi privati con altri utenti. Puoi anche gestire le tue iscrizioni ai <em>Gruppi</em> e, tramite l’opzione <em>Amici &amp; Ignorati</em>, mantenere i contatti con le persone che conosci. Lo Staff potrebbe rilasciare degli annunci a tutti gli utenti del forum, che verranno visualizzati in questa pagina.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Amici &amp; Ignorati',
	'UCP_ZEBRA_FOES'				=> 'Gestione ignorati',
	'UCP_ZEBRA_FRIENDS'				=> 'Gestione amici',
	'UNDISCLOSED_RECIPIENT'			=> 'Beneficiari riservati',	
	'UNKNOWN_FOLDER'				=> 'Cartella sconosciuta',
	'UNWATCH_MARKED'				=> 'Smetti di controllare selezionati',
	'UPLOAD_AVATAR_FILE'			=> 'Carica dal tuo computer',
	'UPLOAD_AVATAR_URL'				=> 'Carica da un URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Inserisci l’indirizzo URL di dove risiede l’immagine e verrà copiata su questo sito.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Il nome utente deve avere minimo %1$d e massimo %2$d caratteri, deve contenere solo caratteri alfanumerici.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Il nome utente deve avere minimo %1$d e massimo %2$d caratteri, deve contenere caratteri alfanumerici, lo spazio o -+_[].',
	'USERNAME_ASCII_EXPLAIN'		=> 'Il nome utente deve avere minimo %1$d e massimo %2$d caratteri, deve contenere solo caratteri ASCII, quindi niente simboli speciali.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Il nome utente deve avere minimo %1$d e massimo %2$d caratteri, deve contenere solo lettere o numeri.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Il nome utente deve avere minimo %1$d e massimo %2$d caratteri, deve contenere lettere, numeri, lo spazio o -+_[].',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'La lunghezza deve essere di minimo %1$d e massimo %2$d caratteri.',
	'USERNAME_TAKEN_USERNAME'		=> 'Il nome utente inserito è già in uso, inserisci un’alternativa.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Il nome utente inserito è stato respinto o contiene una parola non ammessa. Scegli un altro nome.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'I nomi utente specificati non sono stati trovati o appartengono a utenti non attivi.',

	'VIEW_AVATARS'				=> 'Visualizza gli avatar',
	'VIEW_EDIT'					=> 'Visualizza/Modifica',
	'VIEW_FLASH'				=> 'Visualizza animazioni Flash',
	'VIEW_IMAGES'				=> 'Visualizza immagini nei messaggi',
	'VIEW_NEXT_HISTORY'			=> 'MP seguente in cronologia',
	'VIEW_NEXT_PM'				=> 'MP seguente',
	'VIEW_PM'					=> 'Visualizza messaggio',
	'VIEW_PM_INFO'				=> 'Dettagli messaggio',
	'VIEW_PM_MESSAGE'			=> '1 messaggio',
	'VIEW_PM_MESSAGES'			=> '%d messaggi',
	'VIEW_PREVIOUS_HISTORY'		=> 'MP precedente in cronologia',
	'VIEW_PREVIOUS_PM'			=> 'MP precedente',
	'VIEW_SIGS'					=> 'Visualizza firme',
	'VIEW_SMILIES'				=> 'Visualizza emoticon come immagini',
	'VIEW_TOPICS_DAYS'			=> 'Visualizza argomenti dei giorni scorsi',
	'VIEW_TOPICS_DIR'			=> 'Visualizza ordinamento degli argomenti',
	'VIEW_TOPICS_KEY'			=> 'Visualizza argomenti ordinati per',
	'VIEW_POSTS_DAYS'			=> 'Visualizza messaggi dei giorni scorsi',
	'VIEW_POSTS_DIR'			=> 'Visualizza ordinamento dei messaggi',
	'VIEW_POSTS_KEY'			=> 'Visualizza messaggi ordinati per',

	'WATCHED_EXPLAIN'			=> 'La sottoscrizione permette di tenere sotto controllo un argomento o un intero forum, avvisandoti quando un nuovo messaggio viene inserito. Questa è la lista di forum ed argomenti per i quali hai attivato una sottoscrizione. Per rimuoverla, seleziona il forum o l’argomento e clicca <em>Smetti di controllare selezionati</em>.',
	'WATCHED_FORUMS'			=> 'Forum controllati',
	'WATCHED_TOPICS'			=> 'Argomenti controllati',
	'WRONG_ACTIVATION'			=> 'La chiave di attivazione fornita non coincide con nessuna del database.',

	'YOUR_DETAILS'				=> 'Le tue attività',
	'YOUR_FOES'					=> 'I tuoi ignorati',
	'YOUR_FOES_EXPLAIN'			=> 'Per rimuovere nomi utente, selezionali e clicca invia.',
	'YOUR_FRIENDS'				=> 'I tuoi amici',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Per rimuovere nomi utente, selezionali e clicca invia.',
	'YOUR_WARNINGS'				=> 'Il tuo livello di richiami',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Inserisci nella cartella',
		'MARK_AS_READ'		=> 'Segna come già letto',
		'MARK_AS_IMPORTANT'	=> 'Evidenzia messaggio',
		'DELETE_MESSAGE'	=> 'Cancella messaggio'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Titolo',
		'SENDER'	=> 'Mittente',
		'MESSAGE'	=> 'Messaggio',
		'STATUS'	=> 'Stato del messaggio',
		'TO'		=> 'Inviato a'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'è uguale a',
		'IS_NOT_LIKE'	=> 'è diverso da',
		'IS'			=> 'è',
		'IS_NOT'		=> 'non è',
		'BEGINS_WITH'	=> 'inizia con',
		'ENDS_WITH'		=> 'finisce con',
		'IS_FRIEND'		=> 'è amico',
		'IS_FOE'		=> 'è ignorato',
		'IS_USER'		=> 'è utente',
		'IS_GROUP'		=> 'è nel gruppo',
		'ANSWERED'		=> 'risposto',
		'FORWARDED'		=> 'inoltrato',
		'TO_GROUP'		=> 'al mio gruppo predefinito',
		'TO_ME'			=> 'a me'
	),


	'GROUPS_EXPLAIN'	=> 'I gruppi permettono agli amministratori di gestire al meglio gli utenti. All’inizio verrai inserito in un gruppo che sarà il tuo gruppo predefinito. Questo gruppo definisce come tu apparirai agli altri utenti, ad esempio la colorazione del tuo nome utente, l’avatar, il livello, ecc. Qualora gli amministratori lo concedano, potrai cambiare il tuo gruppo predefinito. Potresti essere inserito in altri gruppi o avere la possibilità di iscriverti. Alcuni gruppi potrebbero darti permessi aggiuntivi per vedere contenuti o aumentare le tue possibilità in altre sezioni del forum.',
	'GROUP_LEADER'		=> 'Leader gruppo',
	'GROUP_MEMBER'		=> 'Iscrizioni',
	'GROUP_PENDING'		=> 'Iscrizione in attesa',
	'GROUP_NONMEMBER'	=> 'Non iscritti',
	'GROUP_DETAILS'		=> 'Dettagli gruppo',

	'NO_LEADER'		=> 'Nessun leader di gruppo',
	'NO_MEMBER'		=> 'Nessun iscritto al gruppo',
	'NO_PENDING'	=> 'Nessuna iscrizione in attesa',
	'NO_NONMEMBER'	=> 'Nessun gruppo non iscritto',
));

?>
