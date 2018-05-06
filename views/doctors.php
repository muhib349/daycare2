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
                    <a class="nav-link" href="../index.php">HOME</a>
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

                <?php if (isset($_SESSION['username'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $_SESSION['username'] ?></a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LOGIN</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</div>
<div class="row"  style="margin-left: 40px;height: auto;width: 100% ">
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
</body>
</html>
