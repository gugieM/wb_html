<?php
//include config
require_once('includes/config.php');

//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: index.php'); }

//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($user->login($username,$password)){
		$_SESSION['username'] = $username;
		header('Location: memberpage.php');
		exit;

	} else {
		$error[] = 'Wrong username or password or your account has not been activated.';
	}

}//end if submit

//define page title
$title = 'Login';

//include header template
require('layout/header.php');
?>


<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<title>WorkandBe | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="" />

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />

	<!-- Javascript -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/kickstart.js"></script>
</head>
<body>
<div id="container" class="grid">
    <header>
	    <div class="col_6 column">
		    <h1><a href="index.html"><strong>Work</strong>andBe</a></h1>
			   </div>
					<div class="col_6 column right">
						<form id="add_job_link">
			        <button class="large green"><i class="icon-plus"></i>Add Job</button>
			</form>
		</div>
	 </header>

	 <div class="col_12 column">
		 <!-- Menu Horizontal -->
		  <ul class="menu">
			 <li class="current"><a href="index.html"><i class="icon-home" ></i> Home</a></li>
       <li><a href="jobs.html"><i class="icon-desktop" ></i> Browse Jobs</a></li>
      <li><a href="register.html"><i class="icon-user" ></i> Register</a></li>
      <li><a href="login.html"><i class="icon-key" ></i> Login<a/><li>
			</ul>
   </div> <!-- End Grid -->



			 <div class="col_12 column">
				 <legend>Login</legend>
         <form id="login_form">
          <fieldset>
            <p>
                  <label for="first_name">First Name</label>
                  <input id="first_name" name="first_name" type="text" />
            </p>
            <p>
                <label for="last_name">Last Name</label>
                <input id="last_name" name="last_name" type="text" />
          </p>
          <p>
              <label for="email">Email</label>
              <input id="email" name="email" type="email" />
					</p>
					<p>
           <label for="username">UserName</label>
           <input id="username" name="username" type="text" />
        </p>
        <p>
           <label for="password">Password</label>
					<input id="password" name="password" type="password" />
        </p>
        <p>
             <label for="password2"> Confirm Password</label>
             <input id="password2" name="password" type="password" />
        </p>
        <p>
           <input type="submit" value="Submit" />
        </p>
      </fieldset>
      </form>

    </div>

</div>
	<div class="clearfix"></div>
	<footer>
		<p>Copyright @copy; 2016, WorkandBe All Rights Reserved</p>
	</footer>
</body>
</html
