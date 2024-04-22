<?php
session_start();
include('../config-db/dbcon1.php');

//Admin credentials
$admin_email = "pooja@admin.com";
$admin_password = "password";

if(isset($_POST['login_btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email === $admin_email && $password === $admin_password) {
        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_id' => 'admin',
            'user_email' => $admin_email
        ];
        $_SESSION['status'] = "Logged In Successfully as Admin";
        header('location: ../admin/index.php');
        exit(); 
    }

    $user_query = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
    $user_query_run = mysqli_query($con, $user_query);

    if(mysqli_num_rows($user_query_run) > 0){
        $user_row = mysqli_fetch_assoc($user_query_run);
        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_id' => $user_row['id'],
            'user_email' => $user_row['email']
        ];
        $_SESSION['status'] = "Logged In Successfully";
        header('location: ../user/index.php?user_id=' . $user_row['id']);
        exit(); // Ensure to terminate the script after redirection
    } else {
        $_SESSION['status'] = "Invalid Email or Password";
        header('location: login.php');
        exit(); // Ensure to terminate the script after redirection
    }
} 

if (isset($_POST['reg_btn'])){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $number =$_POST['number'];
    $dob =$_POST['dob'];
    $password = $_POST['password'];

    $user_query = "INSERT INTO register (firstName, lastName,email,number,dob,password) VALUES ('$firstName',' $lastName',' $email',' $number',' $dob','$password')";
    $user_query_run = mysqli_query($con, $user_query);

    if ($user_query_run) {
        $_SESSION['status'] = "Registration Successful";
        header("location: index.php");
        exit(); // Ensure to terminate the script after redirection
    } else {
        $_SESSION['status'] = "Registration failed";
        header("location: register.php");
        exit(); // Ensure to terminate the script after redirection
    }
} 
?>
