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
<?php 
    
?>
<!-- Tabs for tournament levels-->
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
                              <?php include('QuarterFinalTournamentTable.php');?>
                        </div> 
                    </div>
                    <div class="tab">
                        <input type="radio" id="Semifinals" name="tab-group-2">
                        <label for="Semifinals">Semifinals</label>

                        <div class="TabContent">
                             <?php include('SemiFinalTournamentTable.php');?>
                        </div> 
                    </div>
                    <div class="tab">
                        <input type="radio" id="Finals" name="tab-group-2">
                        <label for="Finals">Finals</label>

                        <div class="TabContent">
                              <?php include('FinalTournamentTable.php');?>
                        </div> 
                    </div>
                    <div class="tab">
                        <input type="radio" id="Champion!" name="tab-group-2">
                        <label for="Champion!">Summary</label>

                        <div class="TabContent">
                              <?php include('SummaryTournamentTable.php');?>
                        </div> 
                    </div>
                </div>


<?php
include('SideContent.php');
?>
<!-- Tab for tournaments-->
                <div class="tabs">
                    <div class="tab">
                        <input type="radio" id="LeftTab" name="tab-group-1" checked>
                        <label for="LeftTab">Tournaments</label>

                        <div class="TabContent">
                            

    
<?php

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  //get tournament information from database
 $query = "SELECT
			tournament_id,
			tournament_name,
			tournament_description,
                        tournament_owner,
                        tournament_date,
                        active,
                        tournament_status
                        
		
                 FROM
			tournaments
                 WHERE active = 1
  
                  ";

$result = mysqli_query($dbc, $query);
$latestPost = mysqli_query($dbc, $query);      

                
//if result is empty give error
if(!$result)
{
    
    echo 'The tournaments could not be displayed, please try again later.';
         
        
}
else
{
	//if no rows are returned dispaly error
        if(mysqli_num_rows($result) == 0)
	{
		echo 'No tournaments defined yet.';
	}
	else
	{
		//tournament list
		echo '<table border=1>
			  <tr>
				<th>Tournaments</th>
			
			  </tr>';	
			
		while($row = mysqli_fetch_assoc($result))
		{				
			echo '<tr>';
				echo '<td class="leftpart">';
					echo '<h3><a href="Tournaments.php?id=' . $row['tournament_id'] . '">' . $row['tournament_name'] . '</a></h3>' . $row['tournament_description'] . '</br>' . 'Created at: ' . $row['tournament_date'] . '</br> Created by: ' . $row['tournament_owner'] . '</br>Current Status: ' . $row['tournament_status'] . ' ';
				echo '</td>';
			echo '</tr>';
                        
		}
	}
}
?>
                    </table>
                        </div> 
                    </div>
                   
                    <!-- Tournament posts Tab-->
                    
                    <div class="tab">
                        <input type="radio" id="MiddleTab" name="tab-group-1"  >
                        <label for="MiddleTab">Tournament Posts</label>

                        <div class="TabContent">
<?php              
                            //get tournament information
                       $sql = "SELECT
                                                            tournament_id,
                                                            tournament_name

                                                    FROM
                                                            tournaments

                                                    WHERE
                                                            tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);
			
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
                                        //get tournament information
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
                                        //get tournament post information
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

                                        //if no posts are found then give error
                                        
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
                                        //if user is not logged in do not let them reply
                                        if(!$_SESSION['signed_in'])
                                        {
                                                echo '<tr><td colspan=2>You must be <a href="Login.php">signed in</a> to reply. You can also <a href="Register.php">sign up</a> for an account.';
                                        }
                                        else
                                        {
                                                //show reply box
                                                echo '<tr><td colspan="2"><h2>Reply:</h2><br />
                                                        <form method="post" action="Reply.php?id=' . $row['tournament_id'] . '">
                                                                <textarea name="reply-content"></textarea><br /><br />
                                                                <input type="submit" value="Submit reply" />
                                                        </form></td></tr>';
                                        }

                                        
                                        echo '</table>';
                                }
                        }
                }
?>
                        </div> 
                    </div>
                    <!-- Tournament members tab -->
                    <div class="tab">
                        <input type="radio" id="RightTab" name="tab-group-1"  >
                        <label for="RightTab">Tournament Members</label>

                        <div class="TabContent">
                            <div class="MemberTabContent">
                           <?php              
                            //get tournament information
                       $sql = "SELECT
                                                            tournament_id,
                                                            tournament_name

                                                    FROM
                                                            tournaments

                                                    WHERE
                                                            tournaments.tournament_id = " . mysqli_real_escape_string($dbc, $_GET['id']);
			
                $result = mysqli_query($dbc, $sql);
                //if tournament info is not found give error
                if(!$result)
                {
                        echo 'The tournament could not be displayed, please try again later.';
                }
                else
                {
                       //if no tournaments rows returned give error
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
                                        //fetch the registers from the database
                                        $posts_sql = "SELECT
                                                                tournament_id,
                                                                registers.register_id,
                                                                registers.register_name
                           
                                                        FROM
                                                                tournaments
                                                        LEFT JOIN
                                                                registers
                                                        ON
                                                                tournaments.tournament_id=  registers.register_tournament
                                                        WHERE
                                                                registers.register_tournament = " . mysqli_real_escape_string($dbc, $_GET['id']);

                                        $posts_result = mysqli_query($dbc, $posts_sql);
                                        //if posts cannot be found give error
                                        if(!$posts_result)
                                        {
                                                echo '<tr><td>The posts could not be displayed, please try again later.</tr></td></table>';
                                        }
                                        else
                                        {

                                                while($posts_row = mysqli_fetch_assoc($posts_result))
                                                {     
                                                        echo '<tr class="tournament-registers">
                                                                     
                                                                        <td class="user-post">' . '<img src="' . MM_UPLOADPATH . $posts_row['user_Picture'] . '">' . '<br/>' . $posts_row['register_name'] . '<br/>' . '</td>
                                          
                                                                  </tr>';
                                                }
                                        }

                                        
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
