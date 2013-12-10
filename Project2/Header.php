<!--
File name: header.php
Authors name: Nick Kuznecov, Jake Garland
Web-site name: Garlacov Tournaments
File Description: Header page which consists of the nav menu, and css/js includes. Also everything written after this page(header.php) and before sideContent.php will show up on the left div.
-->   


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="A short description." />
	<meta name="keywords" content="put, keywords, here" />
	<title>Garlacov Tournaments</title>
	<link rel="shortcut icon"  href="images/garlacov.ico"/>
        <link rel="stylesheet" href="styles/styles.css"/>
    
        <style>
                <?php echo "#".$page; ?>
                {
                    background: rgb(19,19,19); /* Old browsers */
                    background: -moz-linear-gradient(top, rgba(19,19,19,1) 0%, rgba(0,0,0,1) 0%, rgba(28,28,28,1) 9%, rgba(43,43,43,1) 24%, rgba(44,44,44,1) 29%, rgba(44,44,44,1) 34%, rgba(76,76,76,1) 47%, rgba(71,71,71,1) 56%, rgba(76,76,76,1) 63%, rgba(102,102,102,1) 75%, rgba(89,89,89,1) 88%, rgba(76,76,76,1) 100%); /* FF3.6+ */
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(19,19,19,1)), color-stop(0%,rgba(0,0,0,1)), color-stop(9%,rgba(28,28,28,1)), color-stop(24%,rgba(43,43,43,1)), color-stop(29%,rgba(44,44,44,1)), color-stop(34%,rgba(44,44,44,1)), color-stop(47%,rgba(76,76,76,1)), color-stop(56%,rgba(71,71,71,1)), color-stop(63%,rgba(76,76,76,1)), color-stop(75%,rgba(102,102,102,1)), color-stop(88%,rgba(89,89,89,1)), color-stop(100%,rgba(76,76,76,1))); /* Chrome,Safari4+ */
                    background: -webkit-linear-gradient(top, rgba(19,19,19,1) 0%,rgba(0,0,0,1) 0%,rgba(28,28,28,1) 9%,rgba(43,43,43,1) 24%,rgba(44,44,44,1) 29%,rgba(44,44,44,1) 34%,rgba(76,76,76,1) 47%,rgba(71,71,71,1) 56%,rgba(76,76,76,1) 63%,rgba(102,102,102,1) 75%,rgba(89,89,89,1) 88%,rgba(76,76,76,1) 100%); /* Chrome10+,Safari5.1+ */
                    background: -o-linear-gradient(top, rgba(19,19,19,1) 0%,rgba(0,0,0,1) 0%,rgba(28,28,28,1) 9%,rgba(43,43,43,1) 24%,rgba(44,44,44,1) 29%,rgba(44,44,44,1) 34%,rgba(76,76,76,1) 47%,rgba(71,71,71,1) 56%,rgba(76,76,76,1) 63%,rgba(102,102,102,1) 75%,rgba(89,89,89,1) 88%,rgba(76,76,76,1) 100%); /* Opera 11.10+ */
                    background: -ms-linear-gradient(top, rgba(19,19,19,1) 0%,rgba(0,0,0,1) 0%,rgba(28,28,28,1) 9%,rgba(43,43,43,1) 24%,rgba(44,44,44,1) 29%,rgba(44,44,44,1) 34%,rgba(76,76,76,1) 47%,rgba(71,71,71,1) 56%,rgba(76,76,76,1) 63%,rgba(102,102,102,1) 75%,rgba(89,89,89,1) 88%,rgba(76,76,76,1) 100%); /* IE10+ */
                    background: linear-gradient(to bottom, rgba(19,19,19,1) 0%,rgba(0,0,0,1) 0%,rgba(28,28,28,1) 9%,rgba(43,43,43,1) 24%,rgba(44,44,44,1) 29%,rgba(44,44,44,1) 34%,rgba(76,76,76,1) 47%,rgba(71,71,71,1) 56%,rgba(76,76,76,1) 63%,rgba(102,102,102,1) 75%,rgba(89,89,89,1) 88%,rgba(76,76,76,1) 100%); /* W3C */
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#131313', endColorstr='#4c4c4c',GradientType=0 ); /* IE6-9 */
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
            <a id="Profile" class="item" <?php echo ' <a href="Profile.php?id=' . $_SESSION['user_id'] . '"> My Profile/Tournaments'  ?> </a>
            <p>Garlacov Tournaments</p>
           
        </div>
    </div>
    <div id="BannerAd">
    <!-- <img src ="images/garlacov.png"/> -->
    <img src = "images/bannerAdPlaceholder2.png" />
    </div>
    <div id="Content"> 

 