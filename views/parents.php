<?php
/**
 * Created by PhpStorm.
 * User: muhib
 * Date: 5/14/18
 * Time: 1:30 AM
 */
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

<!-- DOCUMENTATION NAVBAR -->



<!-- Inside of a Container -->
<div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- This is the actual code that create the "hamburger icon" -->
    <!-- The data-target grabs ids to put into the icon -->


    <!-- Anything inside of collapse navbar-collapse goes into the "hamburger" -->
    <div class="navbar btn-sm navbar-expand-sm navbar-dark bg-info navbar-fixed-top col-md-12" style="background-color: skyblue" >


        <img src="../resources/images/Logo.png" style="height: 50px;width:120px; margin-right: 40%" alt="">

        <ul class="nav navbar-nav navbar-right" style="font-size: 20px">
            <li class="active"><a href="../index.php">Home </a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Our team</a></li>
            <li><a href="#"><?php echo strtoupper($_SESSION['username'])?></a></li>

        </ul>



    </div>
</div>
<div class="row"  style="margin-left: 40px;height: auto;width: 100%; margin-top: 5%">
    <div class="col-md-6"  style="margin-top: 4%">
        <img src="../resources/images/baby.jpg" alt="">
        <h2><b>Baby name</b></h2>
        <h4><b>Age</b></h4>

    </div>
    <div class=" col-md-6" style="margin-top: 80px" >
        <h1 style="text-decoration: underline"><b>Assigned doctor</b></h1>
        <h2>Dr.Sams Manwar</h2>
        <h5> <a href=""> Email </a> <br> Specialist <br> Degree </h5>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias totam, aperiam molestias illum voluptatem modi repellendus ab asperiores! Reprehenderit, ad neque adipisci odit ipsum asperiores, officiis tempora debitis fuga commodi!</p>
        <h1 style="text-decoration: underline"><b>Food chart</b></h1>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Time</th>
                <th>Item</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Morning</td>
                <td>Demo</td>

            </tr>
            <tr>
                <td>Noon</td>
                <td>Demo</td>

            </tr>
            <tr>
                <td>Night</td>
                <td>Demo</td>

            </tr>


            </tbody>
        </table>

        <button>Select your own</button>
    </div>
</div>



<script
    src="http://code.jquery.com/jquery-3.1.1.js"
    integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
    crossorigin="anonymous"></script>  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</body>
</html>

