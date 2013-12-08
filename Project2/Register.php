<?php
//signup.php
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
    /*the form hasn't been posted yet, display it
	  note that the action="" will cause the form to post to the same page it is on */
    echo '<form method="post" action="">
 	 	Username: <input type="text" name="user_name" />              </br>
 		Password: <input type="password" name="user_pass">            </br>
		Password again: <input type="password" name="user_pass_check"></br>
		First Name: <input type="text" name="user_fName">    </br>
                Last Name: <input type="text" name="user_lName">     </br>
                Country <input type="text" name="user_country">        </br>              
                E-mail: <input type="email" name="user_email">                </br>
 		Profile Picture: <input type="file" name="user_profilepic">      </br>
                <input type="submit" value="Submit Information" />
 	 </form>';
}
else
{

	$errors = array(); /* declare the array for later use */
	
	if(isset($_POST['user_name']))
	{
		//the user name exists
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
	
        
        if(isset($_POST['user_fName']))
	{
		//the user name exists
		if(!ctype_alnum($_POST['user_fName']))
		{
			$errors[] = 'The first name field can only contain letters and digits.';
		}
		if(strlen($_POST['user_fName']) > 30)
		{
			$errors[] = 'The first name field cannot be longer than 30 characters.';
		}
	}
	else
	{
		$errors[] = 'The first name field must not be empty.';
	}	
        
        
        if(isset($_POST['user_lName']))
	{
		//the user name exists
		if(!ctype_alnum($_POST['user_lName']))
		{
			$errors[] = 'The last name field can only contain letters and digits.';
		}
		if(strlen($_POST['user_lName']) > 30)
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
		//the user name exists
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
	
        
        if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (*/
	{
		echo 'Uh-oh.. a couple of fields are not filled in correctly..';
		echo '<ul>';
		foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
		{
			echo '<li>' . $value . '</li>'; /* this generates a nice error list */
		}
		echo '</ul>';
	}
	else
	{

		$sql = "INSERT INTO
					users_tournament(user_name, user_pass, user_email, user_fName, user_lName, user_country, user_profilepic, user_date, user_level)
				VALUES('" . mysql_real_escape_string($_POST['user_name']) . "',
					   '" . sha1($_POST['user_pass']) . "',
					   '" . mysql_real_escape_string($_POST['user_email']) . "',
                                           '" . mysql_real_escape_string($_POST['user_fName']) . "',
                                           '" . mysql_real_escape_string($_POST['user_lName']) . "',
                                           '" . mysql_real_escape_string($_POST['user_country']) . "',
                                           '" . mysql_real_escape_string($_POST['user_profilepic']) . "', 
						NOW(),
						0)";
						
		$result = mysql_query($sql);
		if(!$result)
		{
			//something went wrong, display the error
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