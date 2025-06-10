<?php
  require_once "check_session.php";
  if(checkSession()) { // se la sessione è già stata definita, reindirizzo alla home
    header("Location: hmw1.php");
    exit();
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']) or die(mysqli_error($conn)); // connessione al db con i dati del require_once

            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $query = "SELECT * FROM utente WHERE username = '$username'";

            $res = mysqli_query($conn, $query);
            if(mysqli_num_rows($res) > 0) {
              $dati = mysqli_fetch_assoc($res);
              if (password_verify($_POST['password'], $dati['password'])) {
                $_SESSION["_agora_username"] = $dati['username'];
                $_SESSION["_agora_user_id"] = $dati['id'];
                header("Location: hmw1.php");
                mysqli_free_result($res);
                mysqli_close($conn);
                exit();
              } else {
                $error = "Password errata.";
                mysqli_free_result($res);
                mysqli_close($conn);
              }
            } else {
            $error = "Account non esistente.";
            mysqli_close($conn); 
            }
        } else {
            $error = "Compila tutti i campi.";
        }    
    } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina di Login</title>
    <link rel="stylesheet" href="login_signup.css?v=<?php echo time(); ?>">
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
              <a href="https://www.apple.com/it/" data-index="3">iPhone</a>
            </li>
            <li class="link-container">
              <a href="https://www.apple.com/it/" data-index="4">Watch</a>
            </li>
            <li class="link-container">
              <a href="https://www.apple.com/it/" data-index="5">AirPods</a>
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
              <a href="signup.php">Sign up</a> 
            </li>
          </ul>
        </nav>
    </header>
    <section>
        <div id="welcome-container">
            <div id="welcome-container-logo">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50"><path d="M 44.527344 34.75 C 43.449219 37.144531 42.929688 38.214844 41.542969 40.328125 C 39.601563 43.28125 36.863281 46.96875 33.480469 46.992188 C 30.46875 47.019531 29.691406 45.027344 25.601563 45.0625 C 21.515625 45.082031 20.664063 47.03125 17.648438 47 C 14.261719 46.96875 11.671875 43.648438 9.730469 40.699219 C 4.300781 32.429688 3.726563 22.734375 7.082031 17.578125 C 9.457031 13.921875 13.210938 11.773438 16.738281 11.773438 C 20.332031 11.773438 22.589844 13.746094 25.558594 13.746094 C 28.441406 13.746094 30.195313 11.769531 34.351563 11.769531 C 37.492188 11.769531 40.8125 13.480469 43.1875 16.433594 C 35.421875 20.691406 36.683594 31.78125 44.527344 34.75 Z M 31.195313 8.46875 C 32.707031 6.527344 33.855469 3.789063 33.4375 1 C 30.972656 1.167969 28.089844 2.742188 26.40625 4.78125 C 24.878906 6.640625 23.613281 9.398438 24.105469 12.066406 C 26.796875 12.152344 29.582031 10.546875 31.195313 8.46875 Z"></path></svg>
                <h1>Welcome back to our website</h1>
            </div>
            <p>Log in to get started!</p>
        </div>
        <div id="form-container">
            <form name="signup" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="input-container">
                    <label for="username">Username</label>
                    <input type="text" name="username" <?php if(isset($_POST["username"])){echo "value=".$_POST["username"];} ?>>
                </div>
                <div class="input-container">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <?php
                    if (isset($error)){
                      echo "<div class='error'><img src='https://img.icons8.com/?size=100&id=11997&format=png&color=000000'><span>".$error."</span></div>";
                    }
                ?>
                <div class="submit-container">
                    <input type='submit' value="Submit" id="submit">
                </div>
            </form>
        </div>
    </section>
</body>
</html>