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
echo '<h2>My Profile/Tournaments</h2>';


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
    
          echo '<table>';
    if (!empty($row['user_profilepic'])) {
      echo '<tr><td class="label">Tournaments</br> <img src="' . $row['user_Picture'] .
         '/></td></tr>';
    }
      
      
      
        echo '</table>';
    }
  } 
  else {
    echo '<p class="error">There was a problem accessing your profile.</p>';
  }

  mysqli_close($dbc);
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
