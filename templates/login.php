<?php include('header.php'); 
	$_SESSION['py_visited'] = null;
		$_SESSION['csharp_visited'] = null;
		$_SESSION['android_visited'] = null;
?>

    <div class="container">
      <form class="form-signin" role="form" action="login?var=1&var2=2" method="post" >
        <input type="hidden" name="myHiddenVal" value="thisishidden" />
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input name="remember" type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div> <!-- /container -->

<?php include('footer.php'); ?>