<!-- 
  Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
  - stampare a schermo il paragrafo e la sua lunghezza
  - stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare 
-->
<!DOCTYPE html>

<?php
  $badword = trim($_GET['badword']);
  $userText = $_GET['userText'];
?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>PHP Badwords</title>
  </head>

  <body>
    <header>
      <h1>PHP Badwords</h1>
    </header>

    <main>
        <?php
          $textLength = strlen($userText);
          echo "
            <p> <b>Testo originale</b>: ' $userText '. 
            <br/>
            Lunghezza del testo originale: $textLength. </p>";
            
          $userTextCensored = str_ireplace($badword,'***',$userText);
          $textLengthCensored = strlen($userTextCensored);
          
          echo "
            <p> <b>Testo censurato</b>: ' $userTextCensored '. 
            <br/>
            Lunghezza del testo censurato: $textLengthCensored. </p>";
        ?>
    </main>
  </body>

</html>