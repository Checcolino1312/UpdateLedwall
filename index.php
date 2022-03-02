<?php
include_once "connessione.php";



?>


<!DOCTYPE html>
<html>
    <head>
        <title>Recupero email</title>
        <link href="stile.css" rel="stylesheet" type="text/css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
        <form method="POST" action="risposta.php">
            <h3>Inserisci NOME e COGNOME per recuperare la mail che hai utilizzato</h3>
            
            <input class="input" type="text" id="nome" placeholder="Nome" name="nome" value="">
            <br><br>
            <input class="input" type="text" id="cognome" placeholder="Cognome" name="cognome" value="">
            <br><br><br>
            <button class="button" type="submit" name="recupera">Recupera</button>
            
        </form>
        </div>
    </body>
</html>