<!--
File name: Logout.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description: Logout page of Garlacov Tournaments
-->

<?php
$page = "Login";
include('ConnectVars.php');
include('Header.php');



?>



<?php
include('Content.php');
?>

<?php
echo '<h2>Sign out</h2>';


if($_SESSION['signed_in'] == true)
{
	
	$_SESSION['signed_in'] = NULL;
	$_SESSION['user_name'] = NULL;
	$_SESSION['user_id']   = NULL;

	echo 'Succesfully signed out, thank you for visiting.';
}
else
{
	echo 'You are not signed in. Would you <a href="signIn.php">like to</a>?';
}

 $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/Home.php';

 ?>
 
 
<?php
include('SideContent.php');
?>


    
<?php
include('MainContent.php');
?>


<?php
include ('Footer.php');
?>
