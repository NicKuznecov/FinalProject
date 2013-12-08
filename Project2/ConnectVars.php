<?php 


  define('DB_HOST', 'webdesign4.georgianc.on.ca');
  define('DB_USER', 'db200231116');      
  define('DB_PASSWORD','23798');        
  define('DB_NAME', 'db200231116');


session_start();


if(!mysql_connect(DB_HOST, DB_USER, DB_PASSWORD))
{
 	exit('Error: could not establish database connection');
}
if(!mysql_select_db(DB_NAME))
{
 	exit('Error: could not select the database');
}
?>