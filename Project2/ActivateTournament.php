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
			Player #1: <input type="text" name="register" class="1" /><br />
                        Player #2: <input type="text" name="register" class="2" /><br />
                        Player #3: <input type="text" name="register" class="3"/><br />
                        Player #4: <input type="text" name="register" class="4"/><br />
                        Player #5: <input type="text" name="register" class="5"/><br />
                        Player #6: <input type="text" name="register" class="6"/><br />
                        Player #7: <input type="text" name="register" class="7"/><br />
                        Player #8: <input type="text" name="register" class="8"/><br />
                        Player #9: <input type="text" name="register" class="9"/><br />
                        Player #10: <input type="text" name="register" class="10"/><br />
                        Player #11: <input type="text" name="register" class="11"/><br />
                        Player #12: <input type="text" name="register" class="12"/><br />
                        Player #13: <input type="text" name="register" class="13"/><br />
                        Player #14: <input type="text" name="register" class="14"/><br />
                        Player #15: <input type="text" name="register" class="15"/><br />
                        Player #16: <input type="text" name="register" class="16"/><br />
                        <input type="submit" value="Activate Tournament" />
		 </form>';
	}
	else
	{
		
		$sql = "
                        
                        INSERT INTO
					registers(register_id, register_name, register_date, register_tournament, register_by, register_number, register_level)
				VALUES('" . mysql_real_escape_string($_POST['register_name']) . "',
					   NOW(),
					   " . $_SESSION['tournament_id'] . ",
                                           " . $_SESSION['user_id'] . ",
                                           " . mysql_real_escape_string($_POST[1+1])  . ",
                                           0)"; 
						
                
		
               
                $result = mysql_query($sql);
              
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
