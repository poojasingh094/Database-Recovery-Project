<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="path/to/your/bootstrap.min.css">
    <style>
      
       /* Add the provided CSS styles here */
body {
    background-color: #f8f9fa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.card {
    background-color: #ffffff;
    margin: auto;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card-header {
    /* background-color: lightgrey; */
    border-bottom: none;
}

.card-title {
    margin-bottom: 0;
    font-size: 28px;
    /* font-weight: bold; */
}

.card-body {
    padding: 25px;
    font-size: 24px;
    width: 480px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    /* font-weight: bold; */
}
input{
    width: 100%;
  padding: 12px;
  border-radius: 3px;
  border: 1px solid #ccc;
}
h3{
    text-align: center;
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
.float-right {
    float: right;
}

    </style>
</head>

<?php
session_start();
include('../admin/includes/header.php');
include('../config-db/dbcon1.php');

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $query = "SELECT * FROM register WHERE id='$user_id' LIMIT 1";
    $query_run = mysqli_query($con, $query); 
    if (mysqli_num_rows($query_run) > 0) {
        $row = mysqli_fetch_assoc($query_run);
        ?>
        <div class="content-wrapper">
            <div class="content-header">
                
                <div class="container-fluid">
                    <div class="row mb-2">
    
                    </div><!-- /.row -->
                </div>
            </div><!-- /.content-header -->
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Edit-Profile</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form action="../admin/fetch.php" method="POST">
                                                <div class="modal-body">
                                                    <input type="hidden" name="user_id" value="<?php echo $row['id'] ?>">
                                                    <div class="form-group">
                                                        <label for="">First Name </label>
                                                        <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>"
                                                            class="form-control" placeholder="First Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Last Name</label>
                                                        <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>"
                                                            class="form-control" placeholder="Last Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Email Id</label>
                                                        <input type="email" name="email" value="<?php echo $row['email'] ?>"
                                                            class="form-control" placeholder="Email Id"></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Phone Number</label>
                                                        <input type="text" name="number" value="<?php echo $row['number'] ?>"
                                                            class="form-control" placeholder="Number">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Date Of Birth</label>
                                                        <input type="date" name="dob" value="<?php echo $row['dob'] ?>"
                                                            class="form-control" placeholder="DOB">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Password</label>
                                                        <input type="text" name="password" value="<?php echo $row['password'] ?>"
                                                            class="form-control" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" name="updateUser" class="btn btn-primary button1">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
    } else {
        echo "<h4>No Record Found!</h4>";
    }
}
?>

<?php include('../admin/includes/script.php'); ?>
