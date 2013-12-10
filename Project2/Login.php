<!--
File name: Login.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description: Login page of Garlacov Tournaments
-->

<?php
$page = "Login";
include('ConnectVars.php');
include('Header.php');



?>



<?php
include('Content.php');
?>

<?

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
	echo 'You are already signed in, you can <a href="Logout.php">log out</a> if you want.';
}
else
{	
    if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
                  
                    echo '<form method="post" action="">
			Username: <input type="text" name="user_name" /></br>
			Password: <input type="password" name="user_pass"></br>
			<input type="submit" value="Log In" />
                      </form>';
	}
	else
	{
                $errors = array();
                
		if(!isset($_POST['user_name']))
		{
			$errors[] = 'The username field must not be empty.';
		}
		
		if(!isset($_POST['user_pass']))
		{
			$errors[] = 'The password field must not be empty.';
		}
                		
		if(!empty($errors))
		{
			echo 'The username and password field must not be empty.';
			echo '<ul>';
			foreach($errors as $key => $value) 
			{
				echo '<li>' . $value . '</li>';
			}
			echo '</ul>';
                }
		else
		{
                        
			$query = "SELECT 
						user_id,
						user_name,
						user_pass
					FROM
						tournament_users
					WHERE
						user_name = '" . mysqli_real_escape_string($dbc, ($_POST['user_name'])) . "'
					AND
						user_pass = '" . sha1($_POST['user_pass']) . "'";
                        
               
						
			$result = mysqli_query($dbc, $query);
			if(!$result)
			{
				
				echo 'Something went wrong while signing in. Please try again later.';
			        //echo mysql_error(); 
			}
			else
			{
			
				if(mysqli_num_rows($result) == 0)
				{
					echo 'You have supplied a wrong username/password combination.';
                                       
				}
			
                                else
				{
					
					$_SESSION['signed_in'] = true;
					
					while($row = mysqli_fetch_assoc($result))
					{
                                                $_SESSION['user_id'] 	= $row['user_id'];
						$_SESSION['user_name'] 	= $row['user_name'];
						$_SESSION['user_level'] = $row['user_level'];
					}
				
					echo 'Welcome, ' . $_SESSION['user_name'] . '. <a href="Home.php">Return to the Home page.</a>.';
                                      
                                        
                                        
                                }
			}
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
