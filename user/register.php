<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Georgia, serif;
            background-image: linear-gradient(rgba(0, 0, 50, 0.6), rgba(0, 0, 50, 0.4)), url(./img/img1.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .card {
    border: 1px solid #ccc;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 2px 3px rgba(0, 0, 0, 1);
    background-color: #fff;
    margin: 0px auto;
  max-width: 650px;
  padding: 40px;
}
        h5 {
            /* margin-top: 5px; */
            text-decoration: underline;
            font-size: 26px;
            font-weight: bold;
        }

        .form-group {
            margin-top: 10px;
            text-align: left;
        }

        input[type="text"],
        input[type="password"],
        input[type="tel"],
        input[type="date"] {
            width: 100%;
            padding: 25px;
            border-radius: 8px;
            border: 2px solid lightgray;
        }
p{
    text-align: center;
    margin-top: 10px;
}
        .button1 {
            width: 100%;
            padding: 15px;
            background-color: #3457D5;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .button1:hover {
            background-color: green;
        }

        a {
            color: #3457D5;
            text-decoration: none;
         
        }

        a:hover {
            text-decoration: underline;
        }
</style>
</head>

<body>
   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
            <div class="card">
                <h5 class="card-title">Registration</h5>
                <?php
                if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                    ?>
                    <h4><?php echo $_SESSION['status'] ?></h4>
                    <?php
                    unset($_SESSION['status']);
                }
                ?>
                <form action="logcode.php" method="POST">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="fame">First Name:</label>
                            <input type="text" id="fname" name="firstName" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lname">Last Name:</label>
                            <input type="text" id="lname" name="lastName" class="form-control" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" id="phone" name="number" class="form-control" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" name="reg_btn" class="btn btn-primary button1">Create an account</button>
                        <p>Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</html>