<?php
$server="localhost";
$login="root";
$passwd="";
$dbname="school";

//creation d'un objet de connexion a la base de donnees
$con = new PDO('mysql:host='.$server.';dbname='.$dbname.';charset=utf8',$login,$passwd);

?>