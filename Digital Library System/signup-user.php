<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="./bootstrap_4_5_2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/login_signup.css">

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

    @media screen and (max-width: 1024px) {
        img.bg {
            left: 50%;
            margin-left: -512px;
        }
    }

    #page-wrap {
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
    <img src="./images/background.jpg" class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>

                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                    <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                        <?php echo $_SESSION['info']; ?>
                    </div>
                    <?php
                    }
                    ?>
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

                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required
                            value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group d-inline-flex justify-content-lg-between col-md-12 mr-0 p-0">
                        <div class="d-block">
                            <label for="name">Email Address</label>
                            <input class="form-control mr-4" type="email" name="email" placeholder="Email Address"
                                required value="<?php echo $email; ?>">
                        </div>
                        <div class="d-block">
                            <label for="name">Username</label>
                            <input class="form-control mr-4" type="text" name="username" placeholder="Username"
                                required value="<?php echo $username; ?>">
                        </div>
                    </div>
                    <div class="form-group d-inline-flex justify-content-lg-between col-md-12 mr-0 p-0">
                        <div class="d-block">
                            <label for="course">Password</label>
                            <input class="form-control mr-4" type="password" name="password" placeholder="Password"
                                required>
                        </div>
                        <div class="d-block">
                            <label for="course">Confirm Password</label>
                            <input class="form-control mr-4" type="password" name="cpassword"
                                placeholder="Confirm password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member?
                        <a href="login-user.php">
                            <?php unset($_SESSION['info']); ?>
                            Login here
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>