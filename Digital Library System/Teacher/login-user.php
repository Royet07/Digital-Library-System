
<?php 
    require_once "controllerUserData.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="../bootstrap_4_5_2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login_signup.css">

    <style>
		
		img.bg {
			/* Set rules to fill background */
			min-height: 100%;
			min-width: 1024px;
			
			/* Set up proportionate scaling */
			width: 100%;
			height: auto;
			
			/* Set up positioning */
			position: fixed;
			top: 0;
			left: 0;
		}
		
		@media screen and (max-width: 1024px){
			img.bg {
				left: 50%;
				margin-left: -512px; }
		}
		
		#page-wrap 
        { 
            position: relative; 
            width: 400px; 
            margin: 50px auto; 
            padding: 20px; 
            background: white; 
            -moz-box-shadow: 0 0 20px black; 
            -webkit-box-shadow: 0 0 20px black; 
            box-shadow: 0 0 20px black; 
        }
	</style>

</head>
<body>
    <!---Background Cover--->
    <img src="../images/background.jpg" class="bg">

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group mt-4">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php if(isset($_POST['email'])) { echo $email; } ?>">
                    </div>
                    <div class="form-group mt-4">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <!--- <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div> --->
                    <div class="form-group mt-4">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>


    
</body>
</html>