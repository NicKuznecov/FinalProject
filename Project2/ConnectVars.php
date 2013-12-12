<!--
File name: ConnectVars.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description: Connect Variables page of the Garlacov Tournaments web-site.
-->      

<?php 
//start session
session_start();

   //database sign-in information.
  define('DB_HOST', 'webdesign4.georgianc.on.ca');
  define('DB_USER', 'db200231116');      
  define('DB_PASSWORD','23798');        
  define('DB_NAME', 'db200231116');

//error message if the username, host, or password is incorrect.
if(!mysql_connect(DB_HOST, DB_USER, DB_PASSWORD))
{
 	exit('Error: could not establish database connection');
}

//error message if the name is incorrect.
if(!mysql_select_db(DB_NAME))
{
 	exit('Error: could not select the database');
}
?>