<!--
File name: EditTournament.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description: EditTournament page of the Garlacov Tournaments web-site.
-->      
<?php

$page = "Profile";
include('ConnectVars.php');
include('AppVars.php');
include('Header.php');
?>


<?php
include('Content.php');
?>

<?php                     
echo '<h2>Edit Tournament</h2>';
//If user is not signed in than show error message
if($_SESSION['signed_in'] == false )//| $_SESSION['user_level'] != 1 )
{
	
	echo 'Sorry, you do not have sufficient rights to access this page.';
}
else
{
	//Post the tournament table
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		include('EditTournamentTable.php');

	}
	else
	{
		

              
		if(!$result)
		{
		
			echo 'Error' . mysql_error();
                     
		}
		else
		{
			echo 'Tournament succesfully edited.';
		}

	}
}
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
