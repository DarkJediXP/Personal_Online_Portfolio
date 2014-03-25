<?php
/**
 * Step 1: Require the Slim Framework
 *
 * If you are not using Composer, you need to require the
 * Slim Framework and register its PSR-0 autoloader.
 *
 * If you are using Composer, you can skip this step.
 */

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

session_cache_limiter(false);
session_start(); //native php session

require 'Slim/Slim.php';
require 'Slim/krumo/class.krumo.php';

\Slim\Slim::registerAutoloader();

/**
 * Step 2: Instantiate a Slim application
 *
 * This example instantiates a Slim application using
 * its default settings. However, you will usually configure
 * your Slim application now by passing an associative array
 * of setting names and values into the application constructor.
 */
$app = new \Slim\Slim();
// DB Connection
$app->Database = new \Portfolio\Database();
$app->LoggedUser = null;

// debugger enabled or disabled
krumo::enable();
//krumo::disable();
//krumo($_SESSION);
if(isset($_SESSION['user_id'])){
	$app->LoggedUser = new \Portfolio\User($_SESSION['user_id']);
	//krumo($app->LoggedUser);
}

/**
 * Step 3: Define the Slim application routes
 *
 * Here we define several Slim application routes that respond
 * to appropriate HTTP request methods. In this example, the second
 * argument for `Slim::get`, `Slim::post`, `Slim::put`, `Slim::patch`, and `Slim::delete`
 * is an anonymous function.
 */

// GET route
$app->get('/', function () use ($app) {
	if($app->LoggedUser == null){
		// show login screen
		$app->render('login.php');
	}
	else{
		$_SESSION['name'] = $app->LoggedUser->getUserName();
		//$app->render('user.php', array('name' => $app->LoggedUser->getUserName()));
		$app->render('projects.php');
	}
});

$app->post('/review', function() use ($app) {
	// put code to remember a review here...
	header("Location: /testing/");
});

$app->post('/login', function() use ($app){
	$res = \Portfolio\User::checkLogin($_POST['email'], $_POST['password']);	
	if($res !== FALSE){
		$_SESSION['user_id'] = $res; // log in
		$app->render('projects.php');
	}
	else{
		unset($_SESSION['user_id']); // log out
		$app->render('badpass.php');
		
	}
});


/*
	If a user hits the log out butotn his session
	will have ended and the logged out page will have 
	rendered
*/
$app->post('/loggedout', function() use ($app){
		unset($_SESSION['user_id']); // log out
		$_SESSION['py_visited'] = null;
		$_SESSION['csharp_visited'] = null;
		$_SESSION['android_visited'] = null;
		$app->render('login.php');

});


// These methods are used when the user clicks button to 
// homepage upon clicking the button the user will 
// post that they have visited the product 
$app->post('/pyGameToHome', function() use ($app){
		$app->render('projects.php');
		$_SESSION['py_visited'] = 'yes';

});

$app->post('/androidGameToHome', function() use ($app){
		$app->render('projects.php');
		$_SESSION['android_visited'] = 'yes';

});

$app->post('/csharpGameToHome', function() use ($app){
		$app->render('projects.php');
		$_SESSION['csharp_visited'] = 'yes';

});

// These methods check to see if a user as visited a product 
// and sets a variable in their session to yes
$app->post('/androidGame', function() use ($app){
		$app->render('androidGame.php');
		$_SESSION['android_visited'] = 'yes';

});
$app->post('/pyGame', function() use ($app){
		$app->render('pyGame.php');
		$_SESSION['py_visited'] = 'yes';

});
$app->post('/csharpGame', function() use ($app){
		$app->render('csharpGame.php');
		$_SESSION['csharp_visited'] = 'yes';

});

// Methods to deal with users comments and ratings and database
$app->post('/review-pygame-comment', function() use ($app){
	$conn = $app->Database->getConn();
	$pycomment = $_POST['pygame-comment']; //review_text
	$pyrating = $_POST['optionsRadios']; //rating
	$pyuserid = $_SESSION['user_id']; //user_id
	$pyprojectid = 1;//project_id
	
	 $stmt = $conn->prepare("INSERT INTO user_project_reviews (user_id, project_id, rating, review_text) VALUES (? , ?, ? ,?)");
	 $stmt->bind_param('ssss', $pyuserid, $pyprojectid, $pyrating, $pycomment);
	 $stmt->execute();
	//header("refresh:5;url=pyGame.php");
	 //echo("We thank you for your feed back you will be redirected in 5 seconds to our homepage");
	 $app->render('pyGame.php');
	
});
$app->post('/review-androidgame-comment', function() use ($app){
	$conn = $app->Database->getConn();
	$andcomment = $_POST['androidgame-comment']; //review_text
	$andrating = $_POST['optionsRadios']; //rating
	$anduserid = $_SESSION['user_id']; //user_id
	$andprojectid = 2;//project_id
	
	 $stmt = $conn->prepare("INSERT INTO user_project_reviews (user_id, project_id, rating, review_text) VALUES (? , ?, ? ,?)");
	 $stmt->bind_param('ssss', $anduserid, $andprojectid, $andrating, $andcomment);
	 $stmt->execute();	
	 //header("refresh:5;url=androidGame.php");
	// echo("We thank you for your feed back you will be redirected in 5 seconds to our homepage");
	 $app->render('androidGame.php');
});
$app->post('/review-csharpgame-comment', function() use ($app){
	$conn = $app->Database->getConn();
	$ccomment = $_POST['csharpgame-comment']; //review_text
	$crating = $_POST['optionsRadios']; //rating
	$cuserid = $_SESSION['user_id']; //user_id
	$cprojectid = 3;//project_id
	
	 $stmt = $conn->prepare("INSERT INTO user_project_reviews (user_id, project_id, rating, review_text) VALUES (? , ?, ? ,?)");
	 $stmt->bind_param('ssss', $cuserid, $cprojectid, $crating, $ccomment);
	 $stmt->execute();
	 //header("refresh:5;url=/templates/csharpGame.php");
	 //echo("We thank you for your feed back you will be redirected in 5 seconds to our homepage");
	 $app->render('csharpGame.php');
	
});
/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();
?>