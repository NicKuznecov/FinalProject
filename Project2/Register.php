<?php
$page = "Register";
include 'ConnectVars.php';
include 'Header.php';



?>

<?php
include('Content.php');
?>

<?php

echo '<h3>Sign Up</h3>';

if($_SERVER['REQUEST_METHOD'] != 'POST')
{

    echo '<form method="post" action="">
 	 	Username: <input type="text" name="user_name" />              </br>
 		Password: <input type="password" name="user_pass">            </br>
		Password again: <input type="password" name="user_pass_check"></br>
		First Name: <input type="text" name="user_firstName">    </br>
                Last Name: <input type="text" name="user_lastName">     </br>
                Country <input type="text" name="user_country">        </br>              
                E-mail: <input type="email" name="user_email">                </br>
 		Profile Picture: <input type="file" name="user_Picture">      </br>
                <input type="submit" value="Submit Information" />
 	 </form>';
}
else
{

	$errors = array(); 
	
	if(isset($_POST['user_name']))
	{
		
		if(!preg_match('/^[a-z\d_]{4,28}$/i',($_POST['user_name'])))
		{
			$errors[] = 'The username can only contain letters and digits.';
		}
		if(strlen($_POST['user_name']) > 30)
		{
			$errors[] = 'The username cannot be longer than 30 characters.';
		}
	}
	else
	{
		$errors[] = 'The username field must not be empty.';
	}
	
        
        if(isset($_POST['user_pass']))
	{
		if($_POST['user_pass'] != $_POST['user_pass_check'])
		{
			$errors[] = 'The two passwords did not match.';
		}
	}
	else
	{
		$errors[] = 'The password field cannot be empty.';
	}
	
        
        if(isset($_POST['user_firstName']))
	{
	
		if(!ctype_alnum($_POST['user_firstName']))
		{
			$errors[] = 'The first name field can only contain letters and digits.';
		}
		if(strlen($_POST['user_firstName']) > 30)
		{
			$errors[] = 'The first name field cannot be longer than 30 characters.';
		}
	}
	else
	{
		$errors[] = 'The first name field must not be empty.';
	}	
        
        
        if(isset($_POST['user_lastName']))
	{
		
		if(!ctype_alnum($_POST['user_lastName']))
		{
			$errors[] = 'The last name field can only contain letters and digits.';
		}
		if(strlen($_POST['user_lastName']) > 30)
		{
			$errors[] = 'The last name field cannot be longer than 30 characters.';
		}
	}
	else
	{
		$errors[] = 'The last name field must not be empty.';
	}	
      
        
        if(isset($_POST['user_country']))
	{
		
		if(!ctype_alnum($_POST['user_country']))
		{
			$errors[] = 'The country field can only contain letters and digits.';
		}
		if(strlen($_POST['user_country']) > 30)
		{
			$errors[] = 'The country field cannot be longer than 30 characters.';
		}
	}
	else
	{
		$errors[] = 'The country field must not be empty.';
	}	
	
        
        if(!empty($errors)) 
	{
		echo 'Uh-oh.. a couple of fields are not filled in correctly..';
		echo '<ul>';
		foreach($errors as $key => $value)
		{
			echo '<li>' . $value . '</li>';
		}
		echo '</ul>';
	}
	else
	{

		$sql = "INSERT INTO
					tournament_users(user_name, user_pass, user_email, user_firstName, user_lastName, user_country, user_Picture, user_date, user_level)
				VALUES('" . mysql_real_escape_string($_POST['user_name']) . "',
					   '" . sha1($_POST['user_pass']) . "',
					   '" . mysql_real_escape_string($_POST['user_email']) . "',
                                           '" . mysql_real_escape_string($_POST['user_firstName']) . "',
                                           '" . mysql_real_escape_string($_POST['user_lastName']) . "',
                                           '" . mysql_real_escape_string($_POST['user_country']) . "',
                                           '" . mysql_real_escape_string($_POST['user_Picture']) . "', 
						NOW(),
						0)";
						
		$result = mysql_query($sql);
		if(!$result)
		{
			
			echo 'Something went wrong while registering. Please try again later.';
		        echo mysql_error(); 
		}
		else
		{
			echo 'Successfully registered. You can now <a href="Login.php">sign in</a> and start posting!';
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
include 'Footer.php';
?>