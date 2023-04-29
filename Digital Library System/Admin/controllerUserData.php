<?php 
session_start();
require "../connection.php";

$errors = array();

//if user click login button
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_email = "SELECT * FROM admin WHERE email = '$email'";
    $res = mysqli_query($con, $check_email);
    if(mysqli_num_rows($res) > 0)
    {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        $role = $fetch['role'];
        if($password == $fetch_pass)
        {
            if($role == 'Admin')
            {
                $_SESSION['admin_id'] = $fetch['id'];
                $_SESSION['email'] = $fetch['email'];
                $_SESSION['username'] = $fetch['username'];
                $role = $fetch['role'];
                echo "<script>if(confirm('Login Successfully !')){document.location.href='./home.php'};</script>";
            }
        }else{
            $errors['email'] = "Incorrect email or password!";
        } 
    }else{
        $errors['email'] = "It's look like you're not yet registered! Click on the bottom link to signup.";
    }
}
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login-user.php');
    }
?>