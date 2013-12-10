<!--
File name: Reply.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description: Reply page of Garlacov Tournaments
-->

<?php
$page = "Login";
include('ConnectVars.php');
include('Header.php');

?>

<?php
include('Content.php');
?>


<?php
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
	
	echo 'This file cannot be called directly.';
}
else
{
	
	if(!$_SESSION['signed_in'])
	{
		echo 'You must be signed in to post a reply.';
	}
	else
	{
		
		$sql = "INSERT INTO 
					tournament_posts(post_content,
						  post_date,
						  post_tournament,
						  post_by) 
				VALUES ('" . $_POST['reply-content'] . "',
						NOW(),
						" . mysql_real_escape_string($_GET['id']) . ",
						" . $_SESSION['user_id'] . ")";
						
		$result = mysql_query($sql);
						
		if(!$result)
		{
			echo 'Your reply has not been saved, please try again later.';
		}
		else
		{
			echo 'Your reply has been saved, check out <a href="Tournaments.php?id=' . htmlentities($_GET['id']) . '">the tournament</a>.';
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
