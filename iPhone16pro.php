<?php
    require_once 'check_session.php';
    if(!checkSession()){
        header("Location: login.php");
        exit;
    }
    $conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="iphone16.css?v=<?php echo time(); ?>">
    <script src="iphone16.js?v=<?php echo time(); ?>" defer></script>
    <title>iPhone 16 Pro</title>
</head>
<body>
    <header id="global-header">
        <nav id="global-nav">
          <ul>
            <li id="mela" class="logo-container">
              <a href="https://www.apple.com/it/">
                  <svg
                  height="44"
                  viewBox="0 0 17 44"
                  width="17"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                      d="m15.5752 19.0792a4.2055 4.2055 0 0 0 -2.01 3.5376 4.0931 4.0931 0 0 0 2.4908 3.7542 9.7779 9.7779 0 0 1 -1.2755 2.6351c-.7941 1.1431-1.6244 2.2862-2.8878 2.2862s-1.5883-.734-3.0443-.734c-1.42 0-1.9252.7581-3.08.7581s-1.9611-1.0589-2.8876-2.3584a11.3987 11.3987 0 0 1 -1.9373-6.1487c0-3.61 2.3464-5.523 4.6566-5.523 1.2274 0 2.25.8062 3.02.8062.734 0 1.8771-.8543 3.2729-.8543a4.3778 4.3778 0 0 1 3.6822 1.841zm-6.8586-2.0456a1.3865 1.3865 0 0 1 -.2527-.024 1.6557 1.6557 0 0 1 -.0361-.337 4.0341 4.0341 0 0 1 1.0228-2.5148 4.1571 4.1571 0 0 1 2.7314-1.4078 1.7815 1.7815 0 0 1 .0361.373 4.1487 4.1487 0 0 1 -.9867 2.587 3.6039 3.6039 0 0 1 -2.5148 1.3236z"
                  ></path>
                  </svg>
              </a>
            </li>
            <li class="link-container">
              <a href="https://www.apple.com/it/" data-index="0">Store</a>
            </li>
            <li class="link-container">
              <a href="https://www.apple.com/it/" data-index="1">Mac</a>
            </li>
            <li class="link-container">
              <a href="https://www.apple.com/it/" data-index="2">iPad</a>
            </li>
            <li class="link-container">
              <a href="iPhone.php" data-index="3">iPhone</a>
            </li>
            <li class="link-container">
              <a href="https://www.apple.com/it/" data-index="4">Watch</a>
            </li>
            <li class="link-container">
              <a href="airpods.php" data-index="5">AirPods</a>
            </li>
            <li class="link-container">
              <a href="https://www.apple.com/it/" data-index="6">TV & Casa</a>
            </li>
            <li class="link-container">
              <a href="https://www.apple.com/it/" data-index="7">Intrattenimento</a>
            </li>
            <li class="link-container">
              <a href="https://www.apple.com/it/" data-index="8">Accessori</a>
            </li>
            <li class="link-container">
              <a href="https://www.apple.com/it/" data-index="9">Supporto</a>
            </li>
            <li class="link-container">
              <a href="logout.php">Log Out</a> 
            </li>
            <li class="link-container">
              <a href="hmw1.php">Home</a> 
            </li>
          </ul>
        </nav>
    </header>
    <section id="welcome-section">
        <div id="welcome-left-container">
            <h1>Acquista iPhone 16 Pro</h1>
            <span>Da € 58,00 al mese o € 1399,00</span>
            <div id="welcome-left-bottom-container">
                <img src="https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/iphone-selector-icon-apple-intelligence-202409?wid=34&hei=42&fmt=p-jpg&qlt=95&.v=QWZuaThLSTdGTzJUTDdmN2FYMDZUZ0VhQ2RFZ29wT2dyWFFGUWpaYm1PRVNJYmh2Rmh1d3d3Uk9aRnRrbHd2Y2dqL0VmNk9yeXdtbjlQTHVpTy9SZ3lrT3VSbnZSMWpmMWVuSlI3UlowWE9nN3VCbWp3Ujd4dnVUK1hBV2dzZTI" alt="">
                <span>Progettato per Apple Intelligence⁸</span>
            </div>
        </div>
        <div id="welcome-right-container">
            <div class="welcome-right-button-container"><a class="welcome-button" href="">Ricevi un credito da € 50 a € 770 con la permuta.</a></div>
            <div class="welcome-right-button-container"><a class="welcome-button" href="">Anche con finaziamento***</a></div>
        </div>
    </section>
    <section id="buy-section">
      <div id="buy-left-container">
        <img src="https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/iphone-16-pro-model-unselect-gallery-1-202409?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=aWs5czA5aDFXU0FlMGFGRlpYRXk2UWFRQXQ2R0JQTk5udUZxTkR3ZVlpTEJnOG9obkp6NERCS3lnVm1tcnlVUjBoUVhuTWlrY2hIK090ZGZZbk9HeEd5aFM4QSthSG1nSUl6WXJQME1SZ2xuaExFM0dqUXdPMnVsQThrb3JxakRGblJodVFEaGgxMERMNjl1RlVMTnp3&traceId=1">
      </div>
      <div id="buy-right-container">
        <div id="buy-right-text-container">
          <h2><span>Modello.</span> Quale fa al caso tuo?</h2>
          <form id="buy-buttons-container">
            <label class="form-label-button" for="model" data-size="iPhone 16 Pro">
              <input class="button-input" type="radio" name="model" id="model" value="iPhone 16 Pro">
              <div class="buy-buttons-text-container">
                <div id="buy-buttons-left-text">
                  <span id="phone">iPhone 16 Pro</span>
                  <span id="size">Display da 6,3"</span>
                </div>
                <div id="buy-buttons-right-text">
                </div>
              </div>
            </label>
            <label class="form-label-button" for="model1" data-size="iPhone 16 Pro Max">
              <input class="button-input" type="radio" name="model1" id="model1" value="iPhone 16 Pro Max">
              <div class="buy-buttons-text-container">
                <div id="buy-buttons-left-text">
                  <span id="phone">iPhone 16 Pro Max</span>
                  <span id="size">Display da 6,9"</span> 
                </div>
              </div>
            </label>
            <input class="form-label-button" id="acquista" type="submit" value="Acquista">
          </form>
        </div>
      </div>
    </section>
    <footer id="main-footer">
        <div id="contenitore-footer">
          <div id="contenitore-lista-principale">
            <ul>
              <li><span>1. Apple Intelligence è disponibile in versione beta su tutti i modelli di iPhone 16, su iPhone 15 Pro e iPhone 15 Pro Max, su iPad mini (A17 Pro) e sui modelli di iPad e Mac con chip M1 e successivi, impostando Siri e la lingua del dispositivo su inglese (Australia, Canada, Irlanda, Nuova Zelanda, Regno Unito, Stati Uniti o Sudafrica), come parte di un aggiornamento software di iOS 18, iPadOS 18 e macOS Sequoia. Da inizio aprile saranno disponibili ulteriori funzioni e il supporto per cinese (semplificato), coreano, francese, giapponese, inglese (India, Singapore), italiano, portoghese (Brasile), spagnolo e tedesco; altre lingue, tra cui il vietnamita, arriveranno nei mesi successivi. Alcune funzioni potrebbero non essere disponibili in tutte le aree geografiche o in tutte le lingue.</span></li>
              <li><span>2. Disponibili in due modelli: AirPods 4 e AirPods 4 con cancellazione attiva del rumore.</span></li>
              <li><span>3. Il valore di permuta dipende dalle condizioni, dall’anno di fabbricazione e dalla configurazione del dispositivo che restituisci. Per usufruire della permuta in cambio di una Apple Gift Card o di un credito devi avere compiuto almeno 18 anni. Non tutti i dispositivi danno diritto a ricevere un credito. Per maggiori dettagli sulla permuta dei dispositivi idonei puoi rivolgerti al nostro partner. Il servizio potrebbe essere soggetto a restrizioni e limitazioni. Il pagamento avverrà solo se il dispositivo ricevuto corrisponde alla descrizione fornita al momento della valutazione. Apple si riserva il diritto di rifiutare la permuta o limitarne la quantità per qualsiasi dispositivo e per qualsivoglia motivo. Il valore del tuo vecchio dispositivo potrà essere riconosciuto a fronte dell’acquisto di un nuovo dispositivo Apple. L’offerta potrebbe non essere disponibile in tutti gli Store. La permuta di computer desktop (computer fisso) è attualmente disponibile solo online e alcuni Apple Store potrebbero applicare restrizioni aggiuntive.</span></li>
              <li><span>Apple TV+ richiede un abbonamento.</span></li>
              <li><span>Le funzioni descritte possono subire modifiche. Alcune funzioni e applicazioni e alcuni servizi potrebbero non essere disponibili in tutte le aree geografiche o in tutte le lingue.</span></li>
            </ul>
          </div>
          <hr class="solid-line">
          <nav id="footer-nav">
            <div class="footer-column">
              <h3 class="titoli-lista">Scopri e acquista</h3>
              <ul class="footer-column-list">
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Store</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Mac</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">iPad</a></li>
                <li><a class="footer-nav-link" href="iPhone.php">iPhone</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Watch</a></li>
                <li><a class="footer-nav-link" href="airpods.php">AirPods</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">TV & Casa</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">AirTag</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Accessori</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Carte regalo</a></li>
              </ul>
              <h3 class="sotto-titoli-lista">Apple Wallet</h3>
              <ul class="footer-column-list">
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Apple pay</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h3 class="titoli-lista">Account</h3>
              <ul class="footer-column-list">
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Account</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Gestisci il tuo Apple Account</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">iCloud.com</a></li>
              </ul>
              <h3 class="sotto-titoli-lista">Intrattenimento</h3>
              <ul class="footer-column-list">
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Apple One</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Apple TV+</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Apple Music</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Apple Arcade</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Apple Fitness+</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Apple Podcasts</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Apple Books</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Apple Store</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h3 class="titoli-lista">Apple Store</h3>
              <ul class="footer-column-list">
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Trova uno Store</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Genious Bar</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Today at Apple</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Prenotazioni di gruppo</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Campo estivo Apple</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Ricondizionati certificati</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Apple Trade In</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Finanziamenti</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Stato dell'ordine</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Assistenza degli acquisti</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h3 class="titoli-lista">Business</h3>
              <ul class="footer-column-list">
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Apple per il business</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Acquisti per le aziende</a></li>
              </ul>
              <h3 class="titoli-lista">Istruzione</h3>
              <ul class="footer-column-list">
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Apple nell'istruzione</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Acquisti per l'università</a></li>
              </ul>
              <h3 class="titoli-lista">Per la salute</h3>
              <ul class="footer-column-list">
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Apple e la salute</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Il Mac nel settore sanitario</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Salute su Apple Watch</a></li>
              </ul>
            </div>
            <div class="footer-column">
              <h3 class="titoli-lista">I valori di Apple</h3>
              <ul class="footer-column-list">
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Accessibilità</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Istruzione</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Ambiente</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Privacy</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Filiera</a></li>
              </ul>
              <h3 class="titoli-lista">Info su Apple</h3>
              <ul class="footer-column-list">
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Newsroom</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Leadership Apple</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Opportunità di lavoro</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Garanzia</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Investitori</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Etica e rispetto per le norme</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Eventi</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Posti di lavoro in Europa</a></li>
                <li><a class="footer-nav-link" href="https://www.apple.com/it/">Contatti</a></li>
            </div>
          </nav>
          <div id="final1" class="contenitore-finale">
            <div>
              Altri modi per acquistare: <a class="footer-link" href="https://www.apple.com/it/">trova l’Apple Store</a> o il <a class="footer-link" href="https://www.apple.com/it/">rivenditore</a> più vicino. O chiama il numero <a class="footer-link" href="https://www.apple.com/it/">800 554 533</a>.
            </div>
          </div>
          <hr class="solid-line">
          <div id="final2" class="contenitore-finale">
            Copyright © 2025 Apple Inc. Tutti i diritti riservati. <br><br>
            <a href="https://www.apple.com/it/">Norme sulla Privay  |  Utilizzo dei Cookie  |  Condizioni d'uso   |   Vendite e Rimborsi   |  Note legali   |  Mappa del sito</a> 
          </div>
        </div>
      </footer>
      <div id="block"></div>
</body>
</html>