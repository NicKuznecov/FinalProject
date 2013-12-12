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
echo '<h2>Activate Tournament</h2>';
if($_SESSION['signed_in'] == false )//| $_SESSION['user_level'] != 1 )
{
	
	echo 'Sorry, you do not have sufficient rights to access this page.';
}
else
{
	
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		
		echo '<form method="post" action="">
			Player #1: <input type="text" name="register1" /><br />
                        Player #2: <input type="text" name="register2" /><br />
                        Player #3: <input type="text" name="register3" /><br />
                        Player #4: <input type="text" name="register4" /><br />
                        Player #5: <input type="text" name="register5" /><br />
                        Player #6: <input type="text" name="register6" /><br />
                        Player #7: <input type="text" name="register7" /><br />
                        Player #8: <input type="text" name="register8" /><br />
                        Player #9: <input type="text" name="register9" /><br />
                        Player #10: <input type="text" name="register10" /><br />
                        Player #11: <input type="text" name="register11" /><br />
                        Player #12: <input type="text" name="register12" /><br />
                        Player #13: <input type="text" name="register13" /><br />
                        Player #14: <input type="text" name="register14" /><br />
                        Player #15: <input type="text" name="register15" /><br />
                        Player #16: <input type="text" name="register16" /><br />
                        <input type="submit" value="Activate Tournament" />
		 </form>';
	}
	else
	{
                $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                $registers = array($_POST['register1'], $_POST['register2'], $_POST['register3'], $_POST['register4'], $_POST['register5'], $_POST['register6'], $_POST['register7'], $_POST['register8'], $_POST['register9'], $_POST['register10'], $_POST['register11'], $_POST['register12'], $_POST['register13'], $_POST['register14'], $_POST['register15'], $_POST['register16']);
                $i=1;
                

                foreach($registers as $register)
                {
                $sql = "INSERT INTO
					registers(
                                        register_name,
                                        register_tournament,
                                        register_by, 
                                        register_number, 
                                        register_date,
                                        register_level
                                        )
				
                                VALUES('" . mysql_real_escape_string($register) . "',
					   '" . $_GET['id'] . "',
                                           '" . $_SESSION['user_id'] . "',
                                           '" . $i++ . "',
                                           NOW(),
                                           0)"; 
						
                $sql2 = "UPDATE
					tournaments
                                        SET active = '1'
                                        WHERE
                                        tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);
		
               
                $result = mysql_query($sql);
                $result2 = mysql_query($sql2);
                }
		if(!$result)
		{
		
			echo 'Error' . mysql_error();
                     
		}
		else
		{
			echo 'Tournament succesfully activated.';
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
