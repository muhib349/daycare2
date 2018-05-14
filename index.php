<?php
/**
 * Created by PhpStorm.
 * User: muhib
 * Date: 5/3/18
 * Time: 3:37 PM
 */
session_start();
include "datasource/RetriveData.php";
$message ='';

$obj = new RetriveData();

if(isset($_POST['login-form'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $res=$obj->userAuthentication($username,$password);

    if($res->num_rows >0){
        $datarow = $res->fetch_assoc();
        $usertype = $datarow['usertype'];
        $_SESSION['userid'] = $datarow['user_id'];
        $_SESSION['username'] = $datarow['username'];
    }
    else
    {
        $message = 'Incorrect Username or Password';
    }
}

if (isset($_GET['logout'])){
    echo 'hello';
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<body>


<div class="navbar-top-fixed">
    <div class="navbar btn-sm navbar-expand-sm navbar-dark bg-info col-md-12" style="width: 100%;height: 55px">

        <div class="collapse navbar-collapse">
            <div class="navbar-header">


                <a class="navbar-brand" href="#"><img src="resources/images/Logo.png" height="70px"; width="165px"; alt=""></a>
            </div>
            <nav>
                <form class="navbar-form navbar-left nav" style="margin-top: 10px;margin-left: 5px" role="search">
                    <div class="form-group">
                        <input type="text" id="src" class="form-control" placeholder="Search">
                    </div>
                </form>
            </nav>
            <ul class="navbar-nav nav" style="font-size: 15px;margin-left: 35%">


                <li class="nav-item active" style="">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICES</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Education</a>
                        <a class="dropdown-item" href="#">DoctorAssign</a>
                        <a class="dropdown-item" href="#">SelectFoodChart</a>
                        <a class="dropdown-item" href="#">Playground</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">OUR TEAM</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT US</a>
                </li>

                <?php if(isset($_SESSION['username'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo strtoupper($_SESSION['username'])?></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="views/parents.php">Doctor</a>
                            <a class="dropdown-item" href="#">Food Chart</a>
                            <a class="dropdown-item" href="views/logout.php">Logout</a>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="dropdown nav-item">
                        <a href="#" class="nav-link" class="dropdown-toggle" data-toggle="dropdown">LOGIN</a>
                        <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Login</b></h3></div>
                                <form  action="<?php echo $_SERVER['PHP_SELF']?>" method="post" role="form" autocomplete="off">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <label><?php echo  $message ?></label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off" required>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <input type="checkbox" tabindex="3" name="remember" id="remember">
                                                <label for="remember"> Remember Me</label>
                                            </div>
                                            <div class="col-xs-5 pull-right">
                                                <input type="submit" name="login-form" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Login">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
                                </form>
                            </div>
                        </ul>
                    </li>
                <?php endif ?>
            </ul>
            <!-- SEARCH BAR -->

        </div>
    </div>
</div>
<div class="container" style="margin-top: 5px">
    <div class=" ">
        <ul id="out" style="background-color: #c6c8ca">

        </ul>
        <div id="slider" class="carousel slide " data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0"class="active" ></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner"  >
                <div class="carousel-item ">
                    <img src="resources/images/a.jpg" style="width: 100%;height: 400px" alt="">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="carousel-item" >
                    <img src="resources/images/b.jpg" style="width: 100%;height: 400px" alt="">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="carousel-item active" >
                    <img src="resources/images/d.jpg" style="width: 100%;height: 400px"  alt="">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#slider" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slider" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>



    </div>
</div>
<div class="container">
    <div class="col-md-12">
        <h1 style="text-align: left;margin-top:40px"> welcome to our daycare</h1>
        <p style="text-align: left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus reiciendis modi non. Ad commodi similique vel explicabo perferendis error placeat cupiditate nobis. Libero iste, earum vero veniam est quisquam veritatis.</p>

    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top" src="resources/images/activity.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Our activity</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed nihil nisi dolores vel amet, molestiae minus molestias aperiam rem, maxime ex itaque tempore facilis quisquam praesentium laborum repellendus voluptatem!</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top" src="resources/images/service.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Our Services</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed nihil nisi dolores vel amet, molestiae minus molestias aperiam rem, maxime ex itaque tempore facilis quisquam praesentium laborum repellendus voluptatem!</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>

    </div>
</div>

<div style=" width: 100%;height: 60px; text-align: center; background-color:whitesmoke">
    <h4 style="text-align: center;margin-top: 5px">How to Enroll Your Child to Our Daycare?<button style="background-color: mediumpurple;text-align: center">Learn More</button></h4>
</div>

<script src="resources/js/search.js"></script>
</body>
</html>

