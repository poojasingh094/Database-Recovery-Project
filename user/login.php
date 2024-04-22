
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

.section {
    background-image: linear-gradient(rgba(0, 0, 50, 0.6), rgba(0, 0, 50, 0.4)), url(./img/img2.png);
    font-family: "Gill Sans", sans-serif;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  min-height: 100vh; 
  display: flex;
  justify-content: center;
  align-items: center;
}

.card {
  margin: 50px auto;
  max-width: 600px;
  padding: 32px;
  border: 1px solid #ccc;
  border-radius: 10px;
  text-align: center;
  box-shadow:0 2px 3px rgba(0,0,0,1);
}
.form-group {
  margin-bottom: 20px;
}
label {
  display: block;
  text-align: left;
  font-weight: bold;
  font-size:17px;
  margin-bottom:10px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 25px;
  border-radius: 3px;
  border: 1px solid #ccc;
}

.button1 {
  width: 100%;
  padding: 16px;
  background-color: #3457D5;
  color: white;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  margin-top:30px;
}
.button1:hover {
  background-color: green;
}
</style>
</head>

<body>
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 my-5">
                <div class="card my-5">
                        <h5>Login Form </h5>
                    <div class="card-body">
                      
                        <form action="logcode.php" method="POST">
                            <div class="form-group">
                                <label for="">Email Id</label>
                                <input type="text" name="email" class="form-control" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <hr>
                            <div class="form-group">

                            <button type="submit" name="login_btn" class="btn btn-primary button1">Login </button>
                            <p>don't have an account? <a href="register.php">register now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
