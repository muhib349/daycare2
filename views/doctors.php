<?php
/**
 * Created by PhpStorm.
 * User: muhib
 * Date: 5/3/18
 * Time: 8:29 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<body>
<div class="fluid container col-md-12">
    <div class="navbar btn-sm navbar-expand-sm navbar-dark bg-info col-md-12">

        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="navbar-brand" href="#">
                        <img  src="../resources/images/Logo.png" style="width:150px;height: auto" alt="">
                    </a>
                </li>

                <li class="nav-item active" style="margin-left:760px">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">SERVICES</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">DOCTORS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT_US</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">USER</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row"  style="margin-left: 40px;height: auto;width: 100%">
    <div class="col-md-6">
        <img src="../resources/images/dd.jpg" alt="">

    </div>
    <div class=" col-md-6" style="margin-top: 80px" >
        <h2>Dr.Sams Manwar</h2>
        <h5> <a href=""> Email </a> <br> Specialist <br> Degree </h5>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias totam, aperiam molestias illum voluptatem modi repellendus ab asperiores! Reprehenderit, ad neque adipisci odit ipsum asperiores, officiis tempora debitis fuga commodi!</p>
        <h1>Make an apointment</h1><br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Day</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Saturday-monday</td>
                <td>Slot1</td>
                <td>Available</td>
            </tr>
            <tr>
                <td>tuesday-thursday</td>
                <td>Slot2</td>
                <td>Active</td>
            </tr>
            <tr>
                <td>Sunday</td>
                <td>12:30-2:30</td>
                <td>Nonavailable</td>
            </tr>
            <tr>
                <td>Monday</td>
                <td>10:00-12:00</td>
                <td>Not-Active</td>
            </tr>

            </tbody>
        </table>

    </div>


</div>

</body>
</html>
