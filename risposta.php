<?php
include_once "connessione.php";


?>


<html>
<head>
    <title>redirect</title>
     <link href="stile.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    
    
    
    
    
<body>
    <table>
  <?php  
    $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
$sql = "SELECT email from utenti where nome='$nome'  and cognome='$cognome'";
$result = $connection-> query($sql);

if (!empty($result) && $result->num_rows > 0){
    while ($row = $result-> fetch_assoc()){
        
        echo "L'email utilizzata durante l'iscrizione per $nome $cognome è: "."<br>".$row["email"]."  <br>";
        
    }
    echo "</table>";
    
    
}
else{
    echo "Nessun risultato per questo nome, assicurati di aver digitato bene.";
}

$connection->close();

    ?>
    <br>
        <a href="index.php"><button class=button>Riprova</button></a>
    
    
    </table>
    
    
    </body>

</html>