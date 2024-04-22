<?php
session_start();
include('../config-db/dbcon1.php');

if (isset($_POST['adduser'])) {
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    
    $user_query = "INSERT INTO register (firstName,lastName,email,number,dob,password) VALUES ('$fname',' $lname','$email','$number','dob','password')";
    $user_query_run = mysqli_query($con, $user_query);
    
    if ($user_query_run) {
        $_SESSION['status'] = " New User added successfully";
        header("location: index.php");
    } else {
        $_SESSION['status'] = "User modification failed";
        header("location:index.php");
    }
}

if (isset($_POST['updateCourse'])) {
    $user_id = $_POST['user_id'];
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    
    $query = "UPDATE register SET firstName='$fname', lastName='$lname', email='$email',number='$number', dob='$dob', password='$password'  WHERE id='$user_id'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run) {
        $_SESSION['status'] = "User updated successfully";
        header("location: index.php");
    } else {
        $_SESSION['status'] = "User updation failed";
        header("location: index.php");
    }
}

if (isset($_POST['DeleteUser'])) {
    $userid = $_POST['delete_id'];
    $query = "DELETE FROM register WHERE id= '$userid'";
    $query_run = mysqli_query($con, $query);
    
    if ($query_run) {
        $_SESSION['status'] = "User deleted successfully";
        header("location: index.php");
    } else {
        $_SESSION['status'] = "User deletion failed";
        header("location: index.php");
    }
}
?>
