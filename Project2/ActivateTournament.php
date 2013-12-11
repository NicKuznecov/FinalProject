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
                        <input type="submit" value="Activate Tournament" />
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
                
		
               
                $result = mysql_query($query);
              
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
