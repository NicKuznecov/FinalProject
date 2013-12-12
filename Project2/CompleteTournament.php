<!--
File name: CompleteTournament.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description: Complete Tournament page of the Garlacov Tournaments web-site.
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
echo '<h1>Complete Tournament</h1>';
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
	echo '<h2>Are you sure you want to complete this tournament, it will be removed completely.</h2>';		
            echo '<form method="post" action="">
                        <input type="submit" value="Yes" />
		 </form>';

	}
	else
	{
            //If user decides to complete the tournament then delete it from the database
            
                             $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		            $query = "DELETE FROM tournaments
                                      WHERE tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);
                                                
	
                
                
            
            
            
            
            $result = mysql_query($query);
              // if there is no result show error, other give success message
		if(!$result)
		{
		
			echo 'Error' . mysql_error();
                     
		}
		else
		{
			echo 'Tournament succesfully completed.';
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
