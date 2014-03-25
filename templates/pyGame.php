
<!-- <?php
echo 'The value of the py_visited is ' .$_SESSION['py_visited'];

?> -->

<!DOCTYPE html>
<html lang="en">
	<head>	
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<title>pyBall information</title>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<link rel="stylesheet" href="./stylesheets/napkin.css" type="text/css" media="screen" />
		<script src="http://use.typekit.com/mus0ckc.js" type="text/javascript"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		 <link href="styles/bootstrap.min.css" rel="stylesheet">
 <link href="styles/bootstrap-theme.min.css" rel="stylesheet">
 <link href="styles/main.css" rel="stylesheet">

		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-34091476-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();		
		</script>		
	</head> 
	<body>
		<div id = "page">
			<div class = "topcorner">
     <form class="logout-button" role="form" action="pyGameToHome" method="post" >
    <button class="btn btn-lg btn-primary " type="submit">Return to Homepage</button>
     </form>
    </div>
			<div id = "content">
				<!-- <img class="imgl" src="images/pythonGame.jpg" alt="" /> -->
				<div class="row text-center">
				<h1>Introducing pyBall</h1>
				<img src="images/pythonGame.jpg" alt="" class="img-rounded">
				</div>
				</a>
	
			</div>
			
			<br>
			<br>
			<div class="container">
			<div class="col-md-offset-4">
			<img src="images/pyGamethumb1.jpg" alt="" class="img-thumbnail">
			<img src="images/pyGamethumb2.jpg" alt="" class="img-thumbnail">
			</div>
			<?php
	 			 		$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
	 			 		$result = $mysqli->query("select cast(avg(rating) as decimal(3,2)) from user_project_reviews where project_id = 1");
	 			 		
		 			 	while ($row = $result->fetch_assoc()) {
			 			 	$rating = $row["cast(avg(rating) as decimal(3,2))"];
			 			 	}
			 			 	?>
			 <h2> Average User Rating: <?php echo $rating; ?>  </h2>
			<h3> Please select one of the following ratings </h3> 
<!-- <form class="radio-rating" role="form" action="rate-pygame" method="post" > -->
<form class="textarea" role="form" action="review-pygame-comment" method="post" >
					<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked>
    <h4 >1 &mdash;Trash! </h4>
  </label>
</div>
			<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="2" checked>
    <h4 >2 &mdash;This product needs a lot of work, not ready for public! </h4>
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="3">
  <h4 >3 &mdash;Needs work but ready for public and can be improved over time! </h4>
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="4" checked>
    <h4 >4 &mdash;Public ready! </h4>
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="5" checked>
    <h4 >5 &mdash;I want to buy this NOW! </h4>
  </label>
</div>
<!-- <button class="btn  btn-primary" type="submit">Rate!</button> -->
<!-- </form> -->

				 <!-- <form class="textarea" role="form" action="review-pygame-comment" method="post" > -->
				 	<h3> Comment </h3> 
				   <textarea name= "pygame-comment" class="form-control" rows="4" cols="50" placeholder="Leave a review - users reviews are anonymous..."></textarea>
				   <br>
				    <button class="btn  btn-primary" type="submit">Submit</button>
                 </form>
			</div>
			
 <br>
 <br>
 			<div class="container">
 			<table class="table">
 			 	
 			 	<tr>
	 			 	<th><h3>Comments</h3></th>
 			 	</tr>	
	 			 	
	 			 	<?php
	 			 		$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
	 			 		$result = $mysqli->query("select review_text from user_project_reviews where project_id = 1");
		 			 	//$transactions = mysql_query("SELECT * FROM transactions WHERE email='$email'");
		 			 	while ($row = $result->fetch_assoc()) {
			 			 	$review = $row["review_text"];
			 			 	?>
			 			 	<tr>
			 			 	<td><input name="review" type="hidden" value="<?php echo "someone said:";?>"><?php echo "someone said:"; ?></td>
			 			 	 <td><input name="review" type="hidden" value="<?php echo $review ?>"><?php echo $review ?></td>
			 			 	</tr>
			 	<?php
	 			}
	 			?>
  			</table>
 			</div>
			<div id = "footer">
			</div>				
			
		</div>	
	</body>
</html>
