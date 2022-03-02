


<?php 

$servername = "b6qqanrthfluv2nqs1yr-mysql.services.clever-cloud.com";
$username = "u9dicfz5upjwxzfn";
$password = "XgBV5WHNM6ESPkvVkI8k";
$databasename = "b6qqanrthfluv2nqs1yr";






//connessione
$connection = new mysqli($servername,$username,$password,
$databasename);

//test connessione
if($connection->connect_error){
    die("Errore di connessione:" . $connection->connect_error);
}



?>