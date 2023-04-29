<?php 
session_start();
require "connection.php";

$name='';
$username='';
$email='';

$errors = array();

//if user signup button
if(isset($_POST['signup']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
        return;
    }
    $email_check = "SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
        return;
    }
    
    if(count($errors) === 0){
        $encpass = $password; //password_hash($password, PASSWORD_BCRYPT);
        $role = "Student";

        $insert_data = "INSERT INTO user (name, username, email, password, role)
                        values('$name', '$username', '$email', '$encpass','$role')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check)
        {
            if($data_check)
            {
                $info = "You have successfully signed up. Click the link below to sign in.";
                $_SESSION['info'] = $info;
                header('location: signup-user.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed to Save Record";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}


//if user click login button
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_email = "SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($con, $check_email);
    if(mysqli_num_rows($res) > 0)
    {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        $name = $fetch['name'];
        $role = $fetch['role'];
        if($password == $fetch_pass)
        {
            if($role == 'Student')
            {
                $_SESSION['admin_id'] = $fetch['id'];
                $_SESSION['email'] = $fetch['email'];
                $_SESSION['name'] = $fetch['name'];
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