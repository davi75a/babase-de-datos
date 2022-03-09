<?php
 function conectar(){
  $user="root";
  $pass="123456";
  $server="localhost";
  $db="db";
  $con=mysql_connect($server,$user,$pass) or die ("Error al conectar con la base de datos".mysql_error());
  mysql_select_db($db,$con);

  return $con;
 }
?>