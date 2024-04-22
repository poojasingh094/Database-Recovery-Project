<?php
include ('includes/header.php');
include ('../config-db/dbcon1.php');



?>
<style>
    .table th,
    .table td {
        white-space: nowrap;
    }
.container{
    margin-top: 55px;
}
</style>



    <!-- Modal -->
    <div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="fetch.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">First Name </label>
                            <input type="text" name="firstName" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lastName" class="form-control" placeholder="Last Name">
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
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="adduser" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete User -->
    <!-- Modal -->
    <div class="modal fade" id="DeletModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">remove User</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="fetch.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id" class="delete_user_id">
                        <p>
                            Are you sure, you want to remove this user?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="DeleteUser" class="btn btn-primary">Yes, Remove.</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>

<section class="content">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Registered Users</h3>
                        <a href="#" data-toggle="modal" data-target="#AddUserModal"
                            class="btn btn-primary float-right">Add User</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>User Id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email Id</th>
                                        <th>Phone Number</th>
                                        <th>Date of Birth</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM register";
                                    $query_run = mysqli_query($con, $query);
                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $row) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['firstName']; ?></td>
                                                <td><?php echo $row['lastName']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['number']; ?></td>
                                                <td><?php echo $row['dob']; ?></td>
                                                <td><?php echo $row['password']; ?></td>
                                                <td>
                                                    <a href="edit.php?user_id=<?php echo $row['id']; ?>"
                                                        class="btn btn-info btn-sm">Edit</a>
                                                    <button type="button" value="<?php echo $row['id']; ?>"
                                                        class="btn btn-danger btn-sm deletebtn">Delete</button>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td>No record Found</td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
<a href="DB-backup/backup.php" class="btn btn-danger btn-sm ">Backup Data</a>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
</div>

<?php include ('includes/script.php'); ?>
<script>
    $(document).ready(function () {
        $('.deletebtn').click(function (e) {
            e.preventDefault();
            var user_id = $(this).val();
            // console.log(user_id);
            $('.delete_user_id').val(user_id);
            $('#DeletModal').modal('show');
        });
    });
</script>