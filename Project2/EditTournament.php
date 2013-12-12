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
if($_SESSION['signed_in'] == false )//| $_SESSION['user_level'] != 1 )
{
	
	echo 'Sorry, you do not have sufficient rights to access this page.';
}
else
{
	
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		include('EditTournamentTable.php');
//		echo '<form method="post" action="">
//			Player #1: <input type="text" name="register" class="1" /><br />
//                        <input type="submit" value="Activate Tournament" />
//                        Player #2: <input type="text" name="register" class="2" /><br />
//                        <input type="submit" value="Activate Tournament" />
//                        Player #3: <input type="text" name="register" class="3"/><br />
//                        <input type="submit" value="Activate Tournament" />
//                        Player #4: <input type="text" name="register" class="4"/><br />
//                        <input type="submit" value="Activate Tournament" />
//                        Player #5: <input type="text" name="register" class="5"/><br />
//                        <input type="submit" value="Activate Tournament" />                        
//                        Player #6: <input type="text" name="register" class="6"/><br />
//                        <input type="submit" value="Activate Tournament" />
//                        Player #7: <input type="text" name="register" class="7"/><br />
//                        <input type="submit" value="Activate Tournament" />
//                        Player #8: <input type="text" name="register" class="8"/><br />
//                        <input type="submit" value="Activate Tournament" />
//                        Player #9: <input type="text" name="register" class="9"/><br />
//                        <input type="submit" value="Activate Tournament" />
//                        Player #10: <input type="text" name="register" class="10"/><br />
//                        <input type="submit" value="Activate Tournament" />
//                        Player #11: <input type="text" name="register" class="11"/><br />
//                        <input type="submit" value="Activate Tournament" />
//                        Player #12: <input type="text" name="register" class="12"/><br />
//                        <input type="submit" value="Activate Tournament" />                       
//                        Player #13: <input type="text" name="register" class="13"/><br />
//                        <input type="submit" value="Activate Tournament" />
//                        Player #14: <input type="text" name="register" class="14"/><br />
//                        <input type="submit" value="Activate Tournament" />
//                        Player #15: <input type="text" name="register" class="15"/><br />
//                        <input type="submit" value="Activate Tournament" />                        
//                        Player #16: <input type="text" name="register" class="16"/><br />
//                        <input type="submit" value="Activate Tournament" />
//		 </form>';
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
