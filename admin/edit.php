<?php
include('includes/header.php');
include('../config-db/dbcon1.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Users</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div><!-- /.content-header -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit-Users</h3>
                            <a href="index.php" class="btn btn-danger float-right">BACK</a>
                        </div>
                        <div class="card-body">
                            <div class="row"></div>
                            <div class="col-md-6">
                                <form action="fetch.php" method="POST">
                                    <div class="modal-body">

                                        <?php
                                        if (isset($_GET['user_id'])) {
                                            $user_id = $_GET['user_id'];
                                            $query = "SELECT * FROM register WHERE id='$user_id' LIMIT 1";
                                            $query_run = mysqli_query($con, $query);
                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $row) {
                                                    ?>
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
                                                    <?php
                                                }
                                            } else {
                                                echo "<h4>No Record Found!</h4>";
                                            }
                                        }
                                        ?>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="updateCourse" class="btn btn-info">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<?php include('includes/script.php'); ?>
