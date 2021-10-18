<!-- Esercizio di oggi: cartella/repo php-google-faq Riscrivere questa pagina del sito google https://policies.google.com/faq. 
Ci sono diverse domande con relative risposte. Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php
    $navbar = ['Introduzione','Norme sulla privacy','Termini di servizio','Tecnologie','Domande frequenti'];

    $faq = [
        "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?" => [
          "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
          "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
          "Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",
          "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",
          "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
        ],
        "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?" => [
          "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
          "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",
          "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.",
          "Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
        ],
        "Perché il mio account è associato a un paese?" => [
          "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:
          <ol>
            <li>La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:
              <ol style='list-style-type: lower-latin;'>
                <li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li>
                <li>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li>
              </ol>
            </li>
            <li>La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.</li>
          </ol>
          Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account."
        ],
        "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?" => [
          "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni."
        ],
        "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?" => [
          "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
        ]
      ];
    
    $footer = ['Google','Tutto su Google','Privacy','Termini'];

    $languages = ['italiano', 'Espanol','Deutsch','French','English'];

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- add css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- add fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- add bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <title>Document</title>
    </head>
    <body>
        <header class="position-fixed top-0 start-0 end-0 bg-light">
            <div class="top my-2 d-flex justify-content-between px-5">
                <!-- inizio parte sinistra -->
                <div>
                    <img id="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/Google_logo_%282010-2013%29.svg/2560px-Google_logo_%282010-2013%29.svg.png" alt="logo google">
                    <span class="text-secondary fs-4 align-middle">Privacy e termini</span>
                </div>
                <!-- fine parte sinistra -->

                <!-- inizio parte destra -->
                <div class="top my-2 d-flex justify-content-between align-items-center px-5">
                    <i class="fas fa-th text-secondary"></i>
                    <button type="button" class="btn btn-primary mx-3">Accedi</button>
                </div>
                <!-- fine parte destra -->
            </div>
            <div class="bottom border-bottom px-5">
                <ul class="list-inline">
                    <?php foreach($navbar as $link){?>
                        <li class="list-inline-item me-5"><a href="#" class="text-decoration-none text-secondary"><?php echo $link; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </header>

        <main class="mt-200 p-5 my-5">
            <div class="ms-container text-wrap">
               <?php foreach($faq as $question => $answers){ ?>
                 <h2 class="fs-4 fw-bold mt-5 mb-4"><?php echo $question; ?></h2> 
                 <?php foreach($answers as $answer){ ?>
                    <p class="my-5"><?php echo $answer; ?></p>
                    <?php } ?>
                <?php } ?>    
            </div>
        </main>
        
        <footer class="py-3">
            <div class="ms-container d-flex justify-content-around">
                <div class="left">
                    <ul class="list-inline">
                        <?php foreach($footer as $link){ ?>
                            <li class="list-inline-item me-3"><a href="#" class="text-decoration-none text-secondary"><?php echo $link ?></a></li>
                        <?php } ?>    
                    </ul>
                </div>
                <div class="right">
                    <i class="far fa-comment-alt"></i>
                    <select name="language" id="language" class="ms-2">
                        <?php foreach($languages as $lang){
                            echo '<option value="' . $lang . '">' . ucfirst($lang) . '</option>';
                        }?>
       
                    </select>
                </div>

            </div>
        </footer>
    </body>
    </html>