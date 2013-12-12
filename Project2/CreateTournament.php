<!--
File name: CreateTournament.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description: Create Tournament page of Garlacov Tournaments
-->

<?php
$page = "CreateTournament";
include('ConnectVars.php');
include('Header.php');



?>



<?php
include('Content.php');
?>

<?

echo '<h2>Create a Tournament</h2>';
//if user isnt signed in show error
if($_SESSION['signed_in'] == false )//| $_SESSION['user_level'] != 1 )
{
	
	echo 'Sorry, you do not have sufficient rights to access this page.';
}
else
{
	
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		//form for tournament information
		echo '<form method="post" action="">
			Tournament name: <input type="text" name="tournament_name" /><br />
			Tournament description:<br /> <textarea name="tournament_description" /></textarea><br /><br />

                        <input type="submit" value="Create Tournament" />
		 </form>';
	}
	else
	{
		


           //$registered = mysql_query($register_query);
           
           //insert information about tournament into database
            $query = "INSERT INTO 
                                    tournaments
                                                (tournament_name, 
                                                tournament_description,
                                                tournament_owner,
                                                tournament_date
                                                )
		   
                          VALUES('" . mysql_real_escape_string($_POST['tournament_name']) . "',
                         '" . mysql_real_escape_string($_POST['tournament_description']) . "',
                         " . $_SESSION['user_id'] . ",
                             NOW()
                                  )";
                
		
               
                $result = mysql_query($query);
              
                //if query returns no result show error
		if(!$result)
		{
		
			echo 'Error' . mysql_error();

		}
		//show success message if everything works
                else
		{
			echo 'New tournament succesfully added.';
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