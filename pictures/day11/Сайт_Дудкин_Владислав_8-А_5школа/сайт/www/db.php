<?php
$dblocation = "localhost";
$dbuser = "root";         
$dbpasswd = "";
$dbname = "nk";        
$dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
if (!$dbcnx) 
{
  echo("<P>В настоящий момент сервер базы данных не доступен, поэтому 
           корректное отображение страницы невозможно.</P>");
  exit();
}
// соединения с базой данных
if (!@mysql_select_db($dbname, $dbcnx)) 
{
  echo( "<P>В настоящий момент база данных не доступна, поэтому
            корректное отображение страницы невозможно.</P>" );
  exit();
}
?>