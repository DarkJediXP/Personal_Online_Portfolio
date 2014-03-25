
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>OnlineFolio</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
 <!-- Bootstrap -->
 <link href="styles/bootstrap.min.css" rel="stylesheet">
 <link href="styles/bootstrap-theme.min.css" rel="stylesheet">
 <link href="styles/main.css" rel="stylesheet">
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/mootools.js"></script>
</head>
<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="header">
    <!--<p class="toggler"><a href="#socialise">Open &amp; Close SocialBar</a></p>-->
    <div id="logo">
      <h1><a href="#">GiveMeFeedBack.com</a></h1>
      <p>Project 1 CISC474</p>
    </div>
    <div class = "topcorner">
     <form class="form-signin" role="form" action="loggedout" method="post" >
    <button class="btn btn-lg btn-primary " type="submit">logout</button>
     </form>
    </div>
    <div id="topnav">
      <ul style="text-align: right">
        <li class="active"><a href="index.html">Homepage</a></li>
        <li><a href="style-demo.html">Reviews</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="intro">
    <div class="box1">
      <h2>Project 1: Website for feedback</h2>
      <p>
      Goal: The first project will build off of our first class examples and extend the online portfolio we have built. You must work alone on this one as it is the main introduction to web programming. We will use PHP and the Slim framework to build out our   application. Your application must do the following: 
      </p> 
      <li>(1) Validate the user login off of the provided database.</li>
      <li> (2) Using the Session (or the built-in cookie from Slim), persist that user login and provide them a way to log out.</li>
      <li> (3) After a user has logged in, show them a list of all 'Projects' you have.</li>
      <li>(4) Allow the user to 'review' the project with a number rating and leave a paragraph of feedback.</li>
      <li> (5) Now, from the list of projects, show the user which ones they have already reviewed and what they said.</li>
      <li>(6) Also show what other users have said and their review. Add an 'average' review to the top of the project.</li>
    </div>
    <div class="box">
      <h2>My Technical Know-How !</h2>
      <ul>
		  <li>Knowledge of Java, C++, C, Php, Python, SQL, and C#</li>
		  <li>Experience in a professional IT setting</li>
		  <li>Experience working with Microsoft technologies to deploy software packages</li>
		  <li>Experience with Debian and Gentoo Linux distributions</li>
		  <li>Experience with providing systems administration in a linux environment</li>
		  <li>Experience working in small teams solving technical problems</li>
	  </ul>
    </div>
    <div class="box">
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div class="overview">
    <h2 id="title">Previous Projects</h2>
    <ul>
      <li>
        <div class="imgholder"><img src="/images/python.png" alt="" /></div>
        <h2>Backup tree compare implementation in Python</h2>
        <p>Python script to recursively check a file system with a back up for discrepencies</p>
       <!-- <div class = "topcorner"> -->
     <form class="form-signin" role="form" action="pyGame" method="post" >
    <button class="btn btn-primary btn-large" type="submit">Learn & Comment</button>
    <?php 
    	if($_SESSION['py_visited'] == 'yes'){
    		echo '<span class="label label-success">Viewed!</span>';
		}
    ?>
     </form>
      </li>
      <li>
        <div class="imgholder"><img src="images/android.gif" alt="" /></div>
        <h2>Todo list app with sub todo progression Android app</h2>
        <p>Android productivity app that has cloud integration and sub task with progress bar</p>
        <!--<p class="readmore"><a href="#">Continue Reading &raquo;</a></p> -->
        <form class="form-signin" role="form" action="androidGame" method="post" >
    <button class="btn btn-primary btn-large" type="submit">Learn & Comment</button>
    <?php 
    	if($_SESSION['android_visited'] == 'yes'){
    		echo '<span class="label label-success">Viewed!</span>';
		}
    ?>
     </form>
      </li>
      <li class="last">
        <div class="imgholder"><img src="images/csharp.png" alt="" /></div>
        <h2>Gemini Simulator in Csharp</h2>
        <p>Gemini architecture simulator with built in assembler. Enhanced with branch prediction and context switching.</p>
        <form class="form-signin" role="form" action="csharpGame" method="post" >
    <button class="btn btn-primary btn-large" type="submit">Learn & Comment</button>
     <?php 
    	if($_SESSION['csharp_visited'] == 'yes'){
    		echo '<span class="label label-success">Viewed!</span>';
		}
     ?>
     </form>
       <!-- <p class="readmore"><a href="#">Continue Reading &raquo;</a></p> -->
      </li>
    </ul>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    <div class="box1">
      <h2>About Me</h2>
      <img class="imgl" src="images/HeadShotCISC374.jpg" alt="" />
      <p>
      Name is Sean McDaniel, currently studying Computer Science at the University of Delaware. This website is my first foray into php
	  programming. So far so good!    
      </p>
    </div>
    <div class="box contactdetails">
      <h2>My Contact Details !</h2>
      <ul>
        <li>University of Delawre</li>
        <li>Computer Science</li>
        <li>seanmcd@udel.edu</li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### 
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2011 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
####################################################################################################### -->
<script type="text/javascript" src="scripts/toggle.js"></script>
</body>
</html>


