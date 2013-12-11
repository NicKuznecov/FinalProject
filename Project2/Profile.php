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


 // if (!isset($_GET['user_id'])) {
  //  $query = "SELECT user_name, user_firstName, user_lastName, user_city, user_country, picture FROM users WHERE user_id = '$user_id'";
 // }
 // else {
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
    
    echo '<table>';
    if (!empty($row['user_Picture'])) {
      echo '<tr><td class="label">Profile Picture </br> <img src="' . MM_UPLOADPATH . $row['user_Picture'] .
        '" alt="Profile Picture" /></td></tr>';
    }
    

    
    if (!empty($row['user_name'])) {
      echo '<tr><td class="label">Username: ' . $row['user_name'] . '</td></tr>';
    }
    if (!empty($row['user_email'])) {
      echo '<tr><td class="label">Email: ' . $row['user_email'] . '</td></tr>';
    }
    if (!empty($row['user_firstName'])) {
      echo '<tr><td class="label">First name: ' . $row['user_firstName'] . '</td></tr>';
    }
    if (!empty($row['user_lastName'])) {
      echo '<tr><td class="label">Last name: ' . $row['user_lastName'] . '</td></tr>';
    }
      echo '</td></tr>';
    if (!empty($row['user_city']) || !empty($row['user_country'])) {
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

   
 
            $query = "SELECT 
                        tournament_name,
                        tournament_description,
                        tournament_id
            
            FROM tournaments 
                LEFT JOIN registers ON registers.register_tournament = tournaments.tournament_id
                LEFT JOIN tournament_users ON tournament_users.user_id = registers.register_by
            WHERE tournament_owner = '" . $_GET['id'] . "'";

   $tournament_data = mysqli_query($dbc, $query);
  if(!$tournament_data)
  {
                      echo 'The tournaments could not be displayed, please try again later.';
                
  }
 else {
  if (mysqli_num_rows($tournament_data) == 0) 
     {
    echo '<p class="error">There was a problem accessing your tournaments.</p>';
  }
  else
  {
    $row1 = mysqli_fetch_array($tournament_data);
        	


     			
		while($row1 = mysqli_fetch_assoc($tournament_data))
		{   
                        echo'<table>';
                            if (!empty($row1['tournament_name'])) 
                            {
                                echo '<tr><td class="label">Tournament: ' . $row1['tournament_name'] . '</td></tr>';
                            }

                            if (!empty($row1['tournament_description'])) 
                            {
                                echo '<tr><td class="label">Description: ' . $row1['tournament_description'] . '</td></tr>';
                            }
                            if (!empty($row1['tournament_description'])) 
                            {
                                echo '<p>Would you like to <a href="ActivateTournament.php?id=' . $row1['tournament_id'] . '">' . 'activate ' . $row1['tournament_name'] .'</a>?</p>';
                            }

                }
                     echo '</td></tr>';
                     echo '</table>';

 
  }
 }
       if (!isset($_GET['user_id']) || ($user_id == $_GET['user_id'])) {
      echo '<p> <a href="CreateTournament.php?id=' . $_GET['tournament_id'] . '">' . 'Create Tournament</a>?</p>'; 
      
        
      }
 
  mysqli_close($dbc);
?>
    
<?php
include('MainContent.php');
?>


<?php
include ('Footer.php');
?>
