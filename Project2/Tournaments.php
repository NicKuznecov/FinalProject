<!--
File name: Tournaments.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description: Tournaments page of the Garlacov Tournaments web-site.
-->

<?php

$page = "Tournaments";
include('ConnectVars.php');
include('Header.php');

?>


<?php
include('Content.php');
?>
                <div class="tabs">
                    <div class="tab">
                        <input type="radio" id="Roundof16" name="tab-group-2" checked>
                        <label for="Roundof16">Round of 16</label>

                        <div class="TabContent">
                               <?php include('TournamentTable.php');?>
                        </div> 
                    </div>
                    <div class="tab">
                        <input type="radio" id="Quarterfinals" name="tab-group-2">
                        <label for="Quarterfinals">Quarterfinals</label>

                        <div class="TabContent">
                              <?php include('TournamentTable.php');?>
                        </div> 
                    </div>
                    <div class="tab">
                        <input type="radio" id="Semifinals" name="tab-group-2">
                        <label for="Semifinals">Semifinals</label>

                        <div class="TabContent">
                             <?php include('TournamentTable.php');?>
                        </div> 
                    </div>
                    <div class="tab">
                        <input type="radio" id="Finals" name="tab-group-2">
                        <label for="Finals">Finals</label>

                        <div class="TabContent">
                              <?php include('TournamentTable.php');?>
                        </div> 
                    </div>
                    <div class="tab">
                        <input type="radio" id="Champion!" name="tab-group-2">
                        <label for="Champion!">Champion!</label>

                        <div class="TabContent">
                              <?php include('TournamentTable.php');?>
                        </div> 
                    </div>
                </div>


<?php
include('SideContent.php');
?>

                <div class="tabs">
                    <div class="tab">
                        <input type="radio" id="LeftTab" name="tab-group-1" checked>
                        <label for="LeftTab">Tournaments</label>

                        <div class="TabContent">
                            

    
<?php

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
 $query = "SELECT
			tournament_id,
			tournament_name,
			tournament_description,
                        tournament_owner,
                        active
                        
		
                 FROM
			tournaments
                 WHERE active = 1;
  
                  ";

$result = mysqli_query($dbc, $query);
$latestPost = mysqli_query($dbc, $query);      



if(!$result)
{
	echo 'The tournaments could not be displayed, please try again later.';
         
        
}
else
{
	
        if(mysqli_num_rows($result) == 0)
	{
		echo 'No tournaments defined yet.';
	}
	else
	{
		//prepare the table
		echo '<table border=1>
			  <tr>
				<th>Tournaments</th>
			
			  </tr>';	
			
		while($row = mysqli_fetch_assoc($result))
		{				
			echo '<tr>';
				echo '<td class="leftpart">';
					echo '<h3><a href="Tournaments.php?id=' . $row['tournament_id'] . '">' . $row['tournament_name'] . '</a></h3>' . $row['tournament_description'] . '</br>' . 'Created at: ' . $row['MAX(posts.post_date)'] . '</br> Created by: ' . $row['tournament_owner'] . ' ';
				echo '</td>';
			echo '</tr>';
                        
		}
	}
}
?>
                     </table>
                        </div> 
                    </div>
                   
                    <div class="tab">
                        <input type="radio" id="MiddleTab" name="tab-group-1"  >
                        <label for="MiddleTab">Tournament Posts</label>

                        <div class="TabContent">
<?php              
                            
                       $sql = "SELECT
			post_id,
			post_content

		FROM
			tournament_posts
                        
		WHERE
			tournament_posts.post_id = " . mysqli_real_escape_string($dbc, $_GET['id']);
			
                $result = mysqli_query($dbc, $sql);

                if(!$result)
                {
                        echo 'The tournament could not be displayed, please try again later.';
                }
                else
                {
                        if(mysqli_num_rows($result) == 0)
                        {
                                echo 'This tournament doesn&prime;t exist.';
                        }
                        else
                        {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                        //display post data
                                       $title_sql = "SELECT
                                                            tournament_id,
                                                            tournament_name

                                                    FROM
                                                            tournaments

                                                    WHERE
                                                            tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);
                                       
                                        $posts_title = mysqli_query($dbc, $title_sql);
                                        
                                        if(!$posts_title)
                                        {
                                                echo '<tr><td>We could not find the tournament .</tr></td></table>';
                                        }
                                        else
                                        {
                                            while($posts_row = mysqli_fetch_assoc($posts_title))
                                                    {  
                                                    echo '<table class="posts" border="1">
                                                                <tr><td colspan="2" class="post_title"><h2>'. $posts_row['tournament_name'] .'</h2><br /> </td></tr>';
                                                                '<tr>
                                                                        <th>User</th>
                                                                        <th>Post</th>
                                                                </tr>';
                                                    }
                                        }
                                        //fetch the posts from the database
                                        $posts_sql = "SELECT
                                                                tournament_posts.post_tournament,
                                                                tournament_posts.post_content,
                                                                tournament_posts.post_date,
                                                                tournament_posts.post_by,
                                                                tournament_users.user_id,
                                                                tournament_users.user_name,
                                                                tournament_users.user_Picture
                                                        FROM
                                                                tournament_posts
                                                        LEFT JOIN
                                                                tournament_users
                                                        ON
                                                                tournament_posts.post_by = tournament_users.user_id
                                                        WHERE
                                                                tournament_posts.post_tournament = " . mysqli_real_escape_string($dbc, $_GET['id']);

                                        $posts_result = mysqli_query($dbc, $posts_sql);

                                        if(!$posts_result)
                                        {
                                                echo '<tr><td>The posts could not be displayed, please try again later.</tr></td></table>';
                                        }
                                        else
                                        {

                                                while($posts_row = mysqli_fetch_assoc($posts_result))
                                                {     
                                                        echo '<tr class="tournament-post">
                                                                     
                                                                        <td class="user-post">' . '<img src="' . MM_UPLOADPATH . $posts_row['user_Picture'] . '">' . '<br/>' . $posts_row['user_name'] . '<br/>' . $posts_row['post_date']  . '</td>
                                                                        <td class="post-content">' . htmlentities(stripslashes($posts_row['post_content'])) . '</td>
                                                                  </tr>';
                                                }
                                        }

                                        if(!$_SESSION['signed_in'])
                                        {
                                                echo '<tr><td colspan=2>You must be <a href="Login.php">signed in</a> to reply. You can also <a href="Register.php">sign up</a> for an account.';
                                        }
                                        else
                                        {
                                                //show reply box
                                                echo '<tr><td colspan="2"><h2>Reply:</h2><br />
                                                        <form method="post" action="Reply.php?id=' . $row['post_id'] . '">
                                                                <textarea name="reply-content"></textarea><br /><br />
                                                                <input type="submit" value="Submit reply" />
                                                        </form></td></tr>';
                                        }

                                        //finish the table
                                        echo '</table>';
                                }
                        }
                }
?>
                        </div> 
                    </div>
                    <div class="tab">
                        <input type="radio" id="RightTab" name="tab-group-1"  >
                        <label for="RightTab">Tournament Members</label>

                        <div class="TabContent">
                            <div class="MemberTabContent">
                           <?php              
                            
                       $sql = "SELECT
			post_id,
			post_content

		FROM
			tournament_posts
                        
		WHERE
			tournament_posts.post_id = " . mysqli_real_escape_string($dbc, $_GET['id']);
			
                $result = mysqli_query($dbc, $sql);

                if(!$result)
                {
                        echo 'The tournament could not be displayed, please try again later.';
                }
                else
                {
                        if(mysqli_num_rows($result) == 0)
                        {
                                echo 'This tournament doesn&prime;t exist.';
                        }
                        else
                        {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                        //display post data
                                       $title_sql = "SELECT
                                                            tournament_id,
                                                            tournament_name

                                                    FROM
                                                            tournaments

                                                    WHERE
                                                            tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);
                                       
                                        $posts_title = mysqli_query($dbc, $title_sql);
                                        
                                        if(!$posts_title)
                                        {
                                                echo '<tr><td>We could not find the tournament .</tr></td></table>';
                                        }
                                        else
                                        {
                                            while($posts_row = mysqli_fetch_assoc($posts_title))
                                                    {  
                                                    echo '<table class="registers" border="1">
                                                                <tr><td colspan="2" class="post_title"><h2>'. $posts_row['tournament_name'] . '</br> ' . 'Registered Users' .  '</h2><br /> </td></tr>';
                                                                '<tr>
                                                                        <th>Users</th>
                                      
                                                                </tr>';
                                                    }
                                        }
                                        //fetch the posts from the database
                                        $posts_sql = "SELECT
                                                                tournament_posts.post_tournament,
                                                                tournament_posts.post_content,
                                                                tournament_posts.post_date,
                                                                tournament_posts.post_by,
                                                                tournament_users.user_id,
                                                                tournament_users.user_name,
                                                                tournament_users.user_Picture
                                                        FROM
                                                                tournament_posts
                                                        LEFT JOIN
                                                                tournament_users
                                                        ON
                                                                tournament_posts.post_by = tournament_users.user_id
                                                        WHERE
                                                                tournament_posts.post_tournament = " . mysqli_real_escape_string($dbc, $_GET['id']);

                                        $posts_result = mysqli_query($dbc, $posts_sql);

                                        if(!$posts_result)
                                        {
                                                echo '<tr><td>The posts could not be displayed, please try again later.</tr></td></table>';
                                        }
                                        else
                                        {

                                                while($posts_row = mysqli_fetch_assoc($posts_result))
                                                {     
                                                        echo '<tr class="tournament-registers">
                                                                     
                                                                        <td class="user-post">' . '<img src="' . MM_UPLOADPATH . $posts_row['user_Picture'] . '">' . '<br/>' . $posts_row['user_name'] . '<br/>' . '</td>
                                          
                                                                  </tr>';
                                                }
                                        }

                                        //finish the table
                                        echo '</table>';
                                }
                        }
                }
?>                      </div>
                        </div> 
                    </div>
                </div>
    
<?php
include('MainContent.php');
?>


<?php
include ('Footer.php');
?>
