<?php
  require_once "check_session.php";
  if(!checkSession()){
    header("Location: index.php");
    exit();
  }
  $conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="hmw1.css?v=<?php echo time(); ?>" />
    <script src="hmw1.js?v=<?php echo time(); ?>" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Apple (Vittorio)</title>
  </head>
  <body>
    <div id="chat-box" class="hidden">
      <header id="chat-box-header">
        <ul id="chat-box-header-left">
          <li><svg height="44" viewBox="0 0 17 44" width="17" xmlns="http://www.w3.org/2000/svg"><path d="m15.5752 19.0792a4.2055 4.2055 0 0 0 -2.01 3.5376 4.0931 4.0931 0 0 0 2.4908 3.7542 9.7779 9.7779 0 0 1 -1.2755 2.6351c-.7941 1.1431-1.6244 2.2862-2.8878 2.2862s-1.5883-.734-3.0443-.734c-1.42 0-1.9252.7581-3.08.7581s-1.9611-1.0589-2.8876-2.3584a11.3987 11.3987 0 0 1 -1.9373-6.1487c0-3.61 2.3464-5.523 4.6566-5.523 1.2274 0 2.25.8062 3.02.8062.734 0 1.8771-.8543 3.2729-.8543a4.3778 4.3778 0 0 1 3.6822 1.841zm-6.8586-2.0456a1.3865 1.3865 0 0 1 -.2527-.024 1.6557 1.6557 0 0 1 -.0361-.337 4.0341 4.0341 0 0 1 1.0228-2.5148 4.1571 4.1571 0 0 1 2.7314-1.4078 1.7815 1.7815 0 0 1 .0361.373 4.1487 4.1487 0 0 1 -.9867 2.587 3.6039 3.6039 0 0 1 -2.5148 1.3236z"></path></svg></li>
          <li><h2>Chat con Apple</h2></li>
        </ul>
        <div id="button-box-container">
          <button id="minimize-box">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M200-440v-80h560v80H200Z"/></svg>
          </button>
          <button id="close-box">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
          </button>
        </div>
      </header>
      <input type="text" placeholder="Chatta con la nostra AI." id="chat-input"/>
    </div>
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
          <div id="search-shop-menu">
            <li class="logo-container">
              <button id="search-shop-menu-button">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="15px"
                  height="42px"
                  viewBox="0 0 15 42"
                >
                  <path
                    d="M14.298,27.202l-3.87-3.87c0.701-0.929,1.122-2.081,1.122-3.332c0-3.06-2.489-5.55-5.55-5.55c-3.06,0-5.55,2.49-5.55,5.55 c0,3.061,2.49,5.55,5.55,5.55c1.251,0,2.403-0.421,3.332-1.122l3.87,3.87c0.151,0.151,0.35,0.228,0.548,0.228 s0.396-0.076,0.548-0.228C14.601,27.995,14.601,27.505,14.298,27.202z M1.55,20c0-2.454,1.997-4.45,4.45-4.45 c2.454,0,4.45,1.997,4.45,4.45S8.454,24.45,6,24.45C3.546,24.45,1.55,22.454,1.55,20z"
                  ></path>
                </svg>
              </button>
            </li>
            <li class="logo-container">
              <button id="shop-menu-button">
                <svg
                  height="40"
                  viewBox="0 0 14 40"
                  width="14"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="m11.3535 16.0283h-1.0205a3.4229 3.4229 0 0 0 -3.333-2.9648 3.4229 3.4229 0 0 0 -3.333 2.9648h-1.02a2.1184 2.1184 0 0 0 -2.117 2.1162v7.7155a2.1186 2.1186 0 0 0 2.1162 2.1167h8.707a2.1186 2.1186 0 0 0 2.1168-2.1167v-7.7155a2.1184 2.1184 0 0 0 -2.1165-2.1162zm-4.3535-1.8652a2.3169 2.3169 0 0 1 2.2222 1.8652h-4.4444a2.3169 2.3169 0 0 1 2.2222-1.8652zm5.37 11.6969a1.0182 1.0182 0 0 1 -1.0166 1.0171h-8.7069a1.0182 1.0182 0 0 1 -1.0165-1.0171v-7.7155a1.0178 1.0178 0 0 1 1.0166-1.0166h8.707a1.0178 1.0178 0 0 1 1.0164 1.0166z"
                  ></path>
                </svg>
              </button>
            </li>
            <li class="logo-container">
              <button id="menu-button">
                <svg width="18" height="18" viewBox="0 0 18 18"><polyline id="globalnav-menutrigger-bread-bottom" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" points="2 12, 16 12" class="globalnav-menutrigger-bread globalnav-menutrigger-bread-bottom"><animate id="globalnav-anim-menutrigger-bread-bottom-open" attributeName="points" keyTimes="0;0.5;1" dur="0.24s" begin="indefinite" fill="freeze" calcMode="spline" keySplines="0.42, 0, 1, 1;0, 0, 0.58, 1" values=" 2 12, 16 12; 2 9, 16 9; 3.5 15, 15 3.5"></animate><animate id="globalnav-anim-menutrigger-bread-bottom-close" attributeName="points" keyTimes="0;0.5;1" dur="0.24s" begin="indefinite" fill="freeze" calcMode="spline" keySplines="0.42, 0, 1, 1;0, 0, 0.58, 1" values=" 3.5 15, 15 3.5; 2 9, 16 9; 2 12, 16 12"></animate></polyline><polyline id="globalnav-menutrigger-bread-top" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" points="2 5, 16 5" class="globalnav-menutrigger-bread globalnav-menutrigger-bread-top"><animate id="globalnav-anim-menutrigger-bread-top-open" attributeName="points" keyTimes="0;0.5;1" dur="0.24s" begin="indefinite" fill="freeze" calcMode="spline" keySplines="0.42, 0, 1, 1;0, 0, 0.58, 1" values=" 2 5, 16 5; 2 9, 16 9; 3.5 3.5, 15 15"></animate><animate id="globalnav-anim-menutrigger-bread-top-close" attributeName="points" keyTimes="0;0.5;1" dur="0.24s" begin="indefinite" fill="freeze" calcMode="spline" keySplines="0.42, 0, 1, 1;0, 0, 0.58, 1" values=" 3.5 3.5, 15 15; 2 9, 16 9; 2 5, 16 5"></animate></polyline></svg>
              </button>
            </li>
          </div>
        </ul>
      </nav>
      <div id="menu-dropdown-search" class="menu-dropdown hidden">
        <div class="menu-dropdown-content">
          <form>
            <div id="menu-dropdown-searchbar">
              <svg height="32" viewBox="0 0 30 32" width="30" xmlns="http://www.w3.org/2000/svg"><path d="m23.3291 23.3066-4.35-4.35c-.0105-.0105-.0247-.0136-.0355-.0235a6.8714 6.8714 0 1 0 -1.5736 1.4969c.0214.0256.03.0575.0542.0815l4.35 4.35a1.1 1.1 0 1 0 1.5557-1.5547zm-15.4507-8.582a5.6031 5.6031 0 1 1 5.603 5.61 5.613 5.613 0 0 1 -5.603-5.61z"></path></svg>
              <input type="text" placeholder="Cerca su Apple.com" id="searchbar-input"/>
            </div>
          </form>
          <div id="menu-dropdown-links-basic" class="menu-dropdown-links">
            <p>Link rapidi</p>
            <ul>
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a href="https://www.apple.com/it/">Trova uno Store</a>
              </li>
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a href="https://www.apple.com/it/">Accessori</a>
              </li>
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a href="airpods.php">Airpods</a>
              </li>
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a href="https://www.apple.com/it/">Airtag</a>
              </li>
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a href="https://www.apple.com/it/">Apple Trade In</a>
              </li>
            </ul>
          </div>
          <div id="menu-dropdown-links-search" class="menu-dropdown-links hidden">
            <p>Link rapidi</p>
            <ul id="search-results-links">
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a href="https://www.apple.com/it/">Trova uno Store</a>
              </li>
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a href="https://www.apple.com/it/">Accessori</a>
              </li>
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a href="airpods.php">Airpods</a>
              </li>
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a href="https://www.apple.com/it/">Airtag</a>
              </li>
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a href="https://www.apple.com/it/">Apple Trade In</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div id="menu-dropdown-shop" class="menu-dropdown hidden">
        <div class="menu-dropdown-content">
          <?php
            $user_id = $_SESSION['_agora_user_id'];  
            $query = "SELECT SUM(quantita) AS quantita FROM carrello_articoli WHERE carrello_id = '$user_id'"; 
            $res = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($res);

            if ($row['quantita'] > 0) {
                $query = "SELECT prezzo_totale FROM carrello WHERE id = '$user_id'";
                $res_2 = mysqli_query($conn, $query);
                $row_2 = mysqli_fetch_assoc($res_2);
                echo "<h2>La shopping bag contiene ".$row['quantita']." articoli: € ".$row_2['prezzo_totale']."</h2>";
            } else {
                echo "<h2>La shopping bag è vuota.</h2>";
            }
            ?>
          <p><a href="logout.php">Log Out</a>
          <div class="menu-dropdown-links">
            <p>Il mio profilo</p>
            <ul>
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a href="https://www.apple.com/it/">Ordini</a>
              </li>
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a href="">I tuoi articoli salvati</a>
              </li>
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a href="https://www.apple.com/it/">Account</a>
              </li>
              <li>
                <svg height="16" viewBox="0 0 9 16" width="9" xmlns="http://www.w3.org/2000/svg"><path d="m8.6124 8.1035-2.99 2.99a.5.5 0 0 1 -.7071-.7071l2.1366-2.1364h-6.316a.5.5 0 0 1 0-1h6.316l-2.1368-2.1367a.5.5 0 0 1 .7071-.7071l2.99 2.99a.5.5 0 0 1 .0002.7073z"></path></svg>
                <a id="svuota-carrello" href="">Svuota carrello</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div id="menu-dropdown-store" class="menu-dropdown menu-dropdown-flex hidden">
        <div class="menu-dropdown-content menu-flex">
          <div class="menu-dropdown-list">
            <p>Acquista</p>
            <ul>
              <li><a href="https://www.apple.com/it/">Acquista i nuovi prodotti</a></li>
              <li><a href="https://www.apple.com/it/">Mac</a></li>
              <li><a href="https://www.apple.com/it/">iPad</a></li>
              <li><a href="iPhone.php">iPhone</a></li>
              <li><a href="https://www.apple.com/it/">Apple Watch</a></li>
              <li><a href="https://www.apple.com/it/">Accessori</a></li>
            </ul>
          </div>
          <div class="menu-dropdown-list menu-dropdown-sublist">
            <p>Link rapidi</p>
            <ul>
              <li><a href="https://www.apple.com/it/">Trova uno store</a></li>
              <li><a href="https://www.apple.com/it/">Stato degli ordini</a></li>
              <li><a href="https://www.apple.com/it/">Apple Trade In</a></li>
              <li><a href="https://www.apple.com/it/">Finanziamenti</a></li>
              <li><a href="https://www.apple.com/it/">Setup personale</a></li>
            </ul>
          </div>
          <div class="menu-dropdown-list menu-dropdown-sublist">
            <p>Acquista sugli store dedicati</p>
            <ul>
              <li><a href="https://www.apple.com/it/">Ricondizionati certificati</a></li>
              <li><a href="https://www.apple.com/it/">Istruzione</a></li>
              <li><a href="https://www.apple.com/it/">Business</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="menu-dropdown-complete" class="menu-dropdown hidden">
        <div class="menu-dropdown-content">
          <div class="menu-dropdown-links">
            <ul>
              <li>
                <a href="https://www.apple.com/it/">Store</a>
              </li>
              <li>
                <a href="https://www.apple.com/it/">Mac</a>
              </li>
              <li>
                <a href="https://www.apple.com/it/">iPad</a>
              </li>
              <li>
                <a href="iPhone.php">iPhone</a>
              </li>
              <li>
                <a href="https://www.apple.com/it/">Watch</a>
              </li>
              <li>
                <a href="airpods.php">AirPods</a>
              </li>
              <li>
                <a href="https://www.apple.com/it/">Tv & Casa</a>
              </li>
              <li>
                <a href="https://www.apple.com/it/">Intrattenimento</a>
              </li>
              <li>
                <a href="https://www.apple.com/it/">Accessori</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <section class="blur hidden"></section>
    <section id="main-section">
      <div id="primary-banner" class="banner">
        <a href="iPhone.php" class="banner-link"></a>
        <div class="contenitore-banner">
          <div class="contenitore-superiore">
            <h2 class="banner-words">iPhone 16 Pro</h2>
            <p class="banner-words">Progettato per Apple Intelligence.</p>
          </div>
          <div class="contenitore-inferiore">
            <div class="contenitore-btn">
              <a class="scopridipiù" href="iPhone.php">Scopri di più</a>
              <a class="acquista" href="iPhone.php">Acquista</a>
            </div>
            <p class="disponibilità">Apple Intelligence sarà disponibile in italiano da inizio aprile.</p>
            </div>
          </div>
        </div>
      <div id="secondary-banner" class="banner">
        <a href="iPhone16.php" class="banner-link"></a>
        <div class="contenitore-banner">
          <div class="contenitore-superiore">
            <h2 class="banner-words">iPhone 16</h2>
            <p class="banner-words">Progettato per Apple Intelligence.</p>
          </div>
          <div class="contenitore-inferiore">
            <div class="contenitore-btn">
              <a class="scopridipiù" href="iPhone.php">Scopri di più</a>
              <a class="acquista" href="iPhone16.php">Acquista</a>
            </div>
            <p class="disponibilità">
              Apple Intelligence sarà disponibile in italiano da inizio aprile.
            </p>
          </div>
        </div>
      </div>
        <div id="third-banner" class="banner">
          <a href="airpods.php" class="banner-link"></a>
          <div class="contenitore-banner">
            <div class="contenitore-superiore">
              <h2 class="banner-words">AirPods 4</h2>
              <p class="banner-words">Anche con cancellazione attiva del rumore.</p>
            </div>
            <div class="contenitore-btn">
              <a class="scopridipiù" href="airpods.php">Scopri di più</a>
              <a class="acquista" href="airpods.php">Acquista</a>
            </div>
          </div>
        </div>
        <div id="movingBanner">
          <span id="movingSpan">Stay Hungry, Stay Foolish</span>
        </div>
        <div id="video-box">
        </div>
        <div id="fourth-banner" class="banner">
          <a href="https://www.apple.com/it/" class="banner-link"></a>
          <div class="contenitore-banner">
            <div class="contenitore-superiore">
              <div class="banner-words"></div>
              <p class="banner-words">Più schermo.Più stile.Più sottile.</p>
            </div>
            <div class="contenitore-btn">
              <a class="scopridipiù" href="https://www.apple.com/it/">Scopri di più</a>
              <a class="acquista" href="https://www.apple.com/it/">Acquista</a>
            </div>
          </div>
        </div>
    </section>
    <section id="secondary-section">
      <div id="mini-banner-container">
        <div id="fifth-banner" class="banner mini-banner">
          <a href="https://www.apple.com/it/" class="banner-link"></a>
          <div class="contenitore-banner">
            <div class="contenitore-superiore">
              <h3 class="banner-words">MacBook Air</h3>
              <p class="banner-words">Colore celeste.<br>E prestazioni eccezionali, con M4.</p>
              <div class="contenitore-btn">
                <a class="scopridipiù" href="https://www.apple.com/it/">Scopri di più</a>
                <a class="acquista" href="https://www.apple.com/it/">Acquista</a>
              </div>
            </div>
            <div class="contenitore-scritte-inferiore">
              <span class="gradient">Progettato per Apple Intelligence.</span>
              <p class="disponibilità">Apple Intelligence sarà disponibile in italiano da inizio aprile.</p>
            </div>
          </div>
        </div>
        <div id="sixth-banner" class="banner mini-banner">
          <a href="https://www.apple.com/it/" class="banner-link"></a>
          <div class="contenitore-banner">
            <div class="contenitore-superiore">
              <div class="banner-words"></div>
              <p class="banner-words">Adesso con i superpoteri del chip M3.</p>
              <div class="contenitore-btn">
                <a class="scopridipiù" href="https://www.apple.com/it/">Scopri di più</a>
                <a class="acquista" href="https://www.apple.com/it/">Acquista</a>
              </div>
            </div>
            <div class="contenitore-scritte-inferiore">
              <span class="gradient">Progettato per Apple Intelligence.</span>
              <p class="disponibilità">Apple Intelligence sarà disponibile in italiano da inizio aprile.</p>
            </div>
          </div>
        </div>
        <div id="seventh-banner" class="banner mini-banner">
          <a href="airpods.php" class="banner-link"></a>
          <div class="contenitore-banner">
            <div class="contenitore-superiore">
              <h3 class="banner-words">Airpods 4</h3>
              <p class="banner-words">Super. sonici.<br>Anche con cancellazione attiva del rumore.</p>
              <div class="contenitore-btn">
                <a class="scopridipiù" href="airpods.php">Scopri di più</a>
                <a class="acquista" href="airpods.php">Acquista</a>
              </div>
            </div>
          </div>
        </div>
        <div id="eighth-banner" class="banner mini-banner">
          <a href="https://www.apple.com/it/" class="banner-link"></a>
          <div class="contenitore-banner">
            <div class="contenitore-superiore">
              <h3 class="banner-words">Mac Studio</h3>
              <p class="banner-words">M4 Max e M3 Ultra.<br>Scegli il tuo superpotere.</p>
              <div class="contenitore-btn">
                <a class="scopridipiù" href="https://www.apple.com/it/">Scopri di più</a>
                <a class="acquista" href="https://www.apple.com/it/">Acquista</a>
              </div>
            </div>
            <div class="contenitore-scritte-inferiore">
              <span class="gradient">Progettato per Apple Intelligence.</span>
              <p class="disponibilità">Apple Intelligence sarà disponibile in italiano da inizio aprile.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="carousel-section">
      <button id="button-left" class="img-button"></button>
      <div class="carousel-container">
        <a href="https://www.apple.com/it/" class="carousel-link">
          <div class="carousel-main-btn">
            <button>
              <p>Guarda in streaming</p>
            </button>
              <span id="phrase">Drammatico • Non fidarti del vicino.</span>
          </div>
        </a>
      </div>
      <button id="button-right" class="img-button"></button>
    </section>
    <div id="carousel-buttons">
      <ul>
        <li><button data-index="0"class="selected"></button></li>
        <li><button data-index="1"></button></li>
        <li><button data-index="2"></button></li>
        <li><button data-index="3"></button></li>
        <li><button data-index="4"></button></li>
        <li><button data-index="5"></button></li>
        <li><button data-index="6"></button></li>
        <li><button data-index="7"></button></li>
        <li><button data-index="8"></button></li>
      </ul>
    </div>
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
              <li><a class="footer-nav-link" href="https://www.apple.com/it/">iPhone</a></li>
              <li><a class="footer-nav-link" href="https://www.apple.com/it/">Watch</a></li>
              <li><a class="footer-nav-link" href="https://www.apple.com/it/">AirPods</a></li>
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

