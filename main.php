<?php
include('admin/includes/header.php');
?>
<style>
    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex-wrap: wrap;
        height: 100vh
    }
  .aa{
    margin-left: 6vh;
  }
  .bb{
    margin-left: 6vh;
  }
    
    img{
        width: 100%;
        height: 90%;
    }
a{
    color: black;
}
    .red {
        height: 20px;
        width: 16px;
        background-color: lightgreen;
        display: inline-block;
        vertical-align: middle;
    }

    .head {
        text-align: start;
        /* Center text horizontally */
    }

    .head h1,
    h5 {
        margin-left: 45px;
    }

    .head h5 {
        margin-top: 30px;
        font-size: 20px;
    }

    .head h1 {
        margin-top: 120px;
        font-size: 55px;
        font-weight: bold;
        width: 500px;
        font-family: "Times New Roman", Times, serif;
    }

    .head p {
        margin-top: 60px;
        margin-left: 45px;
        font-size: 21px;
        font-weight: bold;
        font-family: "Times New Roman", Times, serif;
        background: linear-gradient(to right, #e9f2e9 70%, transparent 30%);
        padding: 0 40px;
        /* Optional padding to provide some space around text */

        line-height: 100px;

    }

    .head h5,
    .head p {
        margin-bottom: 20px;
    }
</style>
<div class="container-fluid">
<div class="row">
    <div class="head">
            <h1>How do you want to use this platform?</h1>
            <h5>We’ll personalize your setup experience accordingly.</h5>
            <a href="./admin/login.php">
                <p>I am here to login as an admin <i class="nav-icon fas fa-edit aa"></i></p>
                </a>
                <a href="./user/login.php">
                <p>I am here to login as a user<i class="nav-icon fas fa-edit bb"></i><p>
                </a>
        </div>
    </div>
    
</div>

   