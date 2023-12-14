<?php 
$login = $_GET["login"];

switch($login ){
case 'gabriel' : 
header("Location :  paginalogada.php");
break;
default:
header('Location : paginabloqueio.php');
}

?>