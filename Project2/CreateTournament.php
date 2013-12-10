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
if($_SESSION['signed_in'] == false )//| $_SESSION['user_level'] != 1 )
{
	
	echo 'Sorry, you do not have sufficient rights to access this page.';
}
else
{
	
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		
		echo '<form method="post" action="">
			Tournament name: <input type="text" name="tournament_name" /><br />
			Tournament description:<br /> <textarea name="tournament_description" /></textarea><br /><br />
			Player #1: <input type="text" name="register_name" /><br />
                        Player #2: <input type="text" name="register_name" /><br />
                        Player #3: <input type="text" name="register_name" /><br />
                        Player #4: <input type="text" name="register_name" /><br />
                        Player #5: <input type="text" name="register_name" /><br />
                        Player #6: <input type="text" name="register_name" /><br />
                        Player #7: <input type="text" name="register_name" /><br />
                        Player #8: <input type="text" name="register_name" /><br />
                        Player #9: <input type="text" name="register_name" /><br />
                        Player #10: <input type="text" name="register_name" /><br />
                        Player #11: <input type="text" name="register_name" /><br />
                        Player #12: <input type="text" name="register_name" /><br />
                        Player #13: <input type="text" name="register_name" /><br />
                        Player #14: <input type="text" name="register_name" /><br />
                        Player #15: <input type="text" name="register_name" /><br />
                        Player #16: <input type="text" name="register_name" /><br />
                        <input type="submit" value="Start Tournament" />
		 </form>';
	}
	else
	{
		
            $register_query = "INSERT INTO
                                            registers
                                                    (register_name,
                                                     register_tournament)
                        VALUES('" . mysql_real_escape_string($_POST['register_name']) . "',

                        '" . mysql_real_escape_string($_POST['register_tournament']) . "'
       
       
                                  )";


            $registered = mysql_query($register_query);
               
            $query = "INSERT INTO 
                                    tournaments
                                                (tournament_name, 
                                                tournament_description 
                                                )
		   
                          VALUES('" . mysql_real_escape_string($_POST['tournament_name']) . "',
                        '" . mysql_real_escape_string($_POST['tournament_description']) . "'
              
       
                                  )";
                
		
               
                $result = mysql_query($query);
              
		if(!$result)
		{
		
			echo 'Error' . mysql_error();
                     
		}
		else
		{
			echo 'New tournament succesfully added.';
		}
                if(!$registered)
		{
		
			echo 'Error registering players' . mysql_error();
                     
		}
		else
		{
			echo 'Players succesfully registered.';
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