<!-- 
  Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
  Gestire il tutto con due file diversi.
  Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server. 
-->

<!DOCTYPE html>
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
      <form action="./no_badwords.php" method="get">

        <div class="input-group">
          <label for="user-badword">Parola da censurare: </label>
          <br>
          <input type="text" name="badword" id="user-badword" placeholder="Scrivi una parola..." required>
        </div>
        
        <div class="input-group">
          <label for="user-text">Testo da esaminare: </label>
          <br>
          <textarea name="userText" id="user-text" placeholder="Scrivi qui un testo...(minimo 10 caratteri)" minlength="10" required></textarea>
        </div>

        <button type="submit">Invia</button>
        
      </form>      
    </main>
  </body>

</html>