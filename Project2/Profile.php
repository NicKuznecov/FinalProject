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
echo '<h2>My Profile</h2>';

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//if the user is not signed in ask them to sign in
if($_SESSION['signed_in'] == false)
{
	echo 'You are not signed in, <a href="Login.php">log in </a>.';
}
else
{
//Query selecting all user information for user who is signed in
    $query = "SELECT 
                        user_name, 
                        user_email, 
                        user_firstName, 
                        user_lastName, 
                        user_country, 
                        user_Picture 
            
            FROM tournament_users
            
            WHERE user_id = '" . $_GET['id'] . "'";
 // }
  $data = mysqli_query($dbc, $query);

  if (mysqli_num_rows($data) == 1) {
  
    $row = mysqli_fetch_array($data);
    
    
     //Table of user information
    echo '<table>';
    if (!empty($row['user_Picture'])) {
      echo '<tr><td class="label">Profile Picture </br> <img src="' . MM_UPLOADPATH . $row['user_Picture'] .
        '" alt="Profile Picture" /></td></tr>';
    }
    

    //Username displayed
    if (!empty($row['user_name'])) {
      echo '<tr><td class="label">Username: ' . $row['user_name'] . '</td></tr>';
    }
    //User email is displayed
    if (!empty($row['user_email'])) {
      echo '<tr><td class="label">Email: ' . $row['user_email'] . '</td></tr>';
    }
    //User first name is displayed
    if (!empty($row['user_firstName'])) {
      echo '<tr><td class="label">First name: ' . $row['user_firstName'] . '</td></tr>';
    }
    //User last name is displayed
    if (!empty($row['user_lastName'])) {
      echo '<tr><td class="label">Last name: ' . $row['user_lastName'] . '</td></tr>';
    }
      echo '</td></tr>';
    //User country is displayed
     if (!empty($row['user_country'])) {
      echo '<tr><td class="label">Location: ' . $row['user_country'] . '</td></tr>';
    }

    echo '</table>';
 
    
    
    if (!isset($_GET['user_id']) || ($user_id == $_GET['user_id'])) {
      echo '<p>Would you like to <a href="EditProfile.php?id=' . $_GET['id'] . '">' . 'edit your profile</a>?</p>';
  }
  
  else {
    echo '<p class="error">There was a problem accessing your profile.</p>';
  }
 }

include('SideContent.php');



 echo '<h2>My Tournaments</h2>';
// get tournament information
   
 
            $query = "SELECT 
                        tournament_name,
                        tournament_description,
                        tournament_id,
                        active
            
            FROM tournaments 

            WHERE tournament_owner = '" . $_GET['id'] . "'";

   $tournament_data = mysqli_query($dbc, $query);
  //if tournament data couldnt be acquired give error
   if(!$tournament_data)
  {
                      echo 'The tournaments could not be displayed, please try again later.';
                
  }
 else {
    //if no rows are acquired then give appropriate message
     if (mysqli_num_rows($tournament_data) == 0) 
     {
    echo '<p class="error">You do not have any tournaments at this time.</p>';
  }
  else
  {
    $row1 = mysqli_fetch_array($tournament_data);
                            
                            echo'<table>';
                            //display tournament name
                            if (!empty($row1['tournament_name'])) 
                            {
                                echo '<tr><td class="label">Tournament: ' . $row1['tournament_name'] . '</td></tr>';
                            }
                            //display tournament description
                            if (!empty($row1['tournament_description'])) 
                            {
                                echo '<tr><td class="label">Description: ' . $row1['tournament_description'] . '</td></tr>';
                            }
                           
                    if($row1['active']  == 0)
                    {
                            //display link to activate tournament if tournament is not active
                            if (!empty($row1['tournament_description'])) 
                            {
                                echo '<tr><td class="label">Would you like to <a href="ActivateTournament.php?id=' . $row1['tournament_id'] . '">' . 'activate ' . $row1['tournament_name'] .'</a>?</td></tr>';
                            }
                    }
                    if($row1['active']  == 1) 
                    {
                        //display link to edit tournamaent if tournament is active
                            if (!empty($row1['tournament_description'])) 
                            {
                                echo '<tr><td class="label">Would you like to <a href="EditTournament.php?id=' . $row1['tournament_id'] . '">' . 'edit ' . $row1['tournament_name'] .'</a>?</td></tr>';
                                 echo '<tr><td class="label">Would you like to <a href="CompleteTournament.php?id=' . $row1['tournament_id'] . '">' . 'complete ' . $row1['tournament_name'] .'</a>?</td></tr>';
                            }
                    }
    
		while($row1 = mysqli_fetch_assoc($tournament_data))
		{   
                           //display tournament name
                            if (!empty($row1['tournament_name'])) 
                            {
                                echo '<tr><td class="label">Tournament: ' . $row1['tournament_name'] . '</td></tr>';
                            }
                            //display tournament description
                            if (!empty($row1['tournament_description'])) 
                            {
                                echo '<tr><td class="label">Description: ' . $row1['tournament_description'] . '</td></tr>';
                            }
                          
                            
                         if($row1['active'] == 0)
                         {     
                           //display link to activate tournament if tournament is not active
                             if (!empty($row1['tournament_description'])) 
                            {
                                echo '<tr><td class="label">Would you like to <a href="ActivateTournament.php?id=' . $row1['tournament_id'] . '">' . 'activate ' . $row1['tournament_name'] .'</a>?</td></tr>';
                            }
                         }
                          if($row1['active'] == 1)
                         {
                         //display link to edit tournamaent if tournament is active
                         if (!empty($row1['tournament_description'])) 
                         {
                              echo '<tr><td class="label">Would you like to <a href="EditTournament.php?id=' . $row1['tournament_id'] . '">' . 'edit ' . $row1['tournament_name'] .'</a>?</td></tr>';
                          echo '<tr><td class="label">Would you like to <a href="CompleteTournament.php?id=' . $row1['tournament_id'] . '">' . 'complete ' . $row1['tournament_name'] .'</a>?</td></tr>';
                              
                         }
                              
                         }
                            
                            
                           

                }
                     echo '</td></tr>';
                     echo '</table>';

 
  }
 }
       //create tournament link
        if (!isset($_GET['user_id']) || ($user_id == $_GET['user_id'])) {
      echo '<p>Would you like to <a href="CreateTournament.php?id=' . $_GET['tournament_id'] . '">' . 'create a tournament</a>?</p>';
      
        
      }
}
  mysqli_close($dbc);
?>
    
<?php
include('MainContent.php');
?>


<?php
include ('Footer.php');
?>
