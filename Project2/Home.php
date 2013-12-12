<!--
File name: Home.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description: Home page of the Garlacov Tournaments web-site.
-->

<?php

$page = "Home";
include('ConnectVars.php');
include('Header.php');

?>


<?php
include('Content.php');
?>
<!-- Home page content-->
<h1>Welcome to Garlacov Tournaments!</h1>

<p>Here at Garlacov Tournaments we aim to provide users with a comprehensive and capable tournament website. Users who register with us will have access to create their own tournament, which includes who advances to the next round, as well as a post board for each tournament. Users can also create their own profile and view the profile of other users. We hope to see you register for an account and making your own tournaments for free!</p>


<h2>Viewing Tournaments</h2>
<p>Select the tournament tab at the top of the screen to see our tournaments that are currently active or completed.
    
    
<h2>Creating Tournaments</h2>  
<p>To create a tournament go to your profile once you have logged in and on the side bar there is a link to create a tournament.</p>

<h2>Activating Tournaments</h2>
<p>To activate your tournament go to your profile page and under your newly created tournament there is a link to activate it </p>
<p>Once you have chosen 16 users and submitted them your tournament will now be active</p>

<h2>Editing Tournaments</h2>
<p>If your tournament is now active you are now able to edit that tournament, normally you would be able to promote each user through each stage of the tournament with the click of a button, but unfortunately this feature is not currently working. So the registers of each tournament have to be manually promoted through a database by increasing their register level, and the tournament table will do the rest by correctly placing each member in their respective position.</p>

<h2>Completing Tournaments</h2>
<p>If you choose to complete your tournament it will be cleared (deleted) from the web-site</p>



<?php
include('SideContent.php');
?>
<h1>Keep Connected </h1>
<h2>Jake Garland</h2>
 <a href="https://github.com/Jacobgarland"><img src="images/githubLogo.png" width="75" height="75" alt="github logo" /></a>
<a href="http://www.linkedin.com/profile/view?id=292073793&trk=nav_responsive_tab_profile_pic"> <img src="images/linkedinLogo.jpg" width ="75" height="75" alt="linkedin logo" /></a>
<h2>Nick Kuznecov</h2>
 <a href="https://github.com/NicKuznecov"><img src="images/githubLogo.png" width="75" height="75" alt="github logo" /></a>
 <a href="http://www.linkedin.com/pub/nick-kuznecov/84/716/196"> <img src="images/linkedinLogo.jpg" width ="75" height="75" alt="linkedin logo" /></a>
    
<?php
include('MainContent.php');
?>


<?php
include ('Footer.php');
?>
