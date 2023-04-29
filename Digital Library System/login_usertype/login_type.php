<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Select Login</title>
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
    <img src="../images/background.jpg" class="bg">

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Digital Library System</h2>
                    <p class="text-center">Please select login type.</p>

                    <div class="form-group mt-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href="../Admin/login-user.php" class="card-text" style="text-decoration: none; cursor: pointer; padding: 1.3rem 3rem;">
                                    Librarian
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href="../login-user.php" class="card-text" style="text-decoration: none; cursor: pointer; padding: 1.3rem 6rem;">
                                    Student
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href="../Teacher/login-user.php" class="card-text" style="text-decoration: none; cursor: pointer; padding: 1.3rem 6rem;">
                                    Teacher
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</body>

</html>