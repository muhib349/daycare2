<?php
/**
 * Created by PhpStorm.
 * User: muhib
 * Date: 5/3/18
 * Time: 8:29 PM
 */
session_start();

include "../datasource/RetriveData.php";

$obj = new RetriveData();

if(isset($_GET['id'])){
    $res = $obj->getDoctor($_GET['id']);
    if($res->num_rows >0){
        $rows = $res->fetch_assoc();
    }
}
else{
    header("Location:../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- This is the actual code that create the "hamburger icon" -->
    <!-- The data-target grabs ids to put into the icon -->


    <!-- Anything inside of collapse navbar-collapse goes into the "hamburger" -->
    <div class="navbar btn-sm navbar-expand-sm navbar-dark bg-info navbar-fixed-top col-md-12" style="background-color: skyblue">
        <img src="../resources/images/Logo.png" style="height: 50px;width:120px; margin-right: 40%" alt="">

        <ul class="navbar-nav nav navbar-right" style="font-size: 20px">
            <li class="active"><a href="../index.php">Home </a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Our team</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo strtoupper($_SESSION['username'])?></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="views/parents.php">Doctor</a>
                    <a class="dropdown-item" href="#">Food Chart</a>
                    <a class="dropdown-item" href="views/logout.php">Logout</a>
                </div>
            </li>
        </ul>

    </div>
</div>
<div class="row"  style="margin-left: 40px;margin-top:50px;height: auto;width: 100% ">
    <div class="col-md-6">
        <img src="../resources/images/dd.jpg" alt="">

    </div>
    <div class=" col-md-6" style="margin-top: 80px" >
        <h2><?php echo $rows['firstname'].' '.$rows['lastname']?></h2>
        <h5> <a href="#"> Email:<? echo $rows['email'] ?> </a> <br> <?php echo $rows['specialist']?></h5>
        <p> <?php echo $rows['summery']?></p>
        <h1>Available Day And Time</h1><br>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td><?php echo $rows['dayfrom'].'-'. $rows['dayto'] ?></td>
                <td><?php echo $rows['timefrom'].'-'. $rows['timeto'] ?></td>
            </tr>

            </tbody>
        </table>

        <div>
            <h3>Make an appointment</h3>
            <?php if (isset($_SESSION['username'])): ?>
                <form>
                    <div class="form-group">
                        <label for="meeting">Meeting Date : </label>
                        <input id="meeting" name="date" type="date" value="<?php echo date('m-d-y')?>" required/>
                    </div>
                    <div class="form-group">
                        <input type="textarea" name="about" placeholder="About Your Baby"/>
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
            <?php else: ?>
                <label style="text-decoration-color: #721c24">You have to <a href="#">login</a> first</label>
            <?php endif; ?>

        </div>
    </div>


</div>
<script src="../resources/js/verifyDate.js"></script>
<script src="http://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
        crossorigin="anonymous"></script>  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
