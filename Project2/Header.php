<!--
File name: header.php
Authors name: Nick Kuznecov
Web-site name: Personal Portfolio
File Description: Header page which consists of the nav menu, and css/js includes. Also everything written after this page(header.php) and before sideContent.php will show up on the left div.
-->   


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="A short description." />
	<meta name="keywords" content="put, keywords, here" />
	<title>Personal Portfolio</title>
	<link rel="shortcut icon"  href="images/favicon.ico"/>
        <link rel="stylesheet" href="styles/styles.css"/>
    
        <style>
                <?php echo "#".$page; ?>
                {
                    background-color: #100873;
                        
                }

        </style>
        <script type="text/javascript">
            <!--
            if (screen.width <= 699) {
            document.location = "mobile.php";
            }
            //-->
        </script>

        
</head>
<body>  
 
    <div id="wrapper">
        <div id="menu">
            <a id="Home" class="item" href="Home.php">Home</a> 
            <a id="Tournaments" class="item" href="Tournaments.php">Tournaments</a> 
            <a id="Login" class="item" href="Login.php">Login</a> 
            <a id="Register" class="item" href="Register.php">Register</a> 
            <a id="Profile" class="item" href="Profile.php">Profile </a> 

        </div>
    </div>
    <div id="BannerAd">
    <img src = "images/bannerAdPlaceholder2.png" />
    </div>
    <div id="Content"> 

 