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
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
<body>
   <div class="container col-md-12">
      <div class="navbar btn-sm navbar-expand-sm navbar-dark bg-info col-md-12">

          <div class="collapse navbar-collapse" id="mainmenu">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a class="navbar-brand" href="#">
                        <img  src="resources/images/Logo.png" style="width:150px;height: auto" alt="">
                      </a>
                  </li>

                 <li class="nav-item active" style="margin-left: 30%">
                    <a class="nav-link" href="#">HOME</a>
                    </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">OUR TEAM</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="#">SERVICES</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT US</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ADMISSION</a>
                  </li>

                    <?php if(isset($_SESSION['username'])): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']?></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Doctor</a>
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
          </div>
   </div>

   <div class="container">
      <div class="col-md-12">
         <div class="text-center"><h3 >A great place to grow </h3></div>
         <div class="col-md-12">
            <div class="text-center"><h5  >Quality child care… Good beginnings never end.</h5></div>

             <div class="form-group row">
                 <div class="col-10">
                     <input class="form-control" type="search"  id="src" placeholder="search">
                 </div>
             </div>

         </div>

      </div>
   </div>
    </div>
   <div class="container">
   <div class=" ">
      <div id="slider" class="carousel slide " data-ride="carousel">
                  <ul class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0"class="active" ></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                  </ul>
                  <div class="carousel-inner"  >
                    <div class="carousel-item ">
                      <img src="resources/images/b.jpg" style="width: 100%;height: 300px" alt="">
                      <div class="carousel-caption">

                      </div>
                    </div>
                    <div class="carousel-item" >
                      <img src="resources/images/a.jpg" style="width: 100%;height: 300px" alt="">
                      <div class="carousel-caption">

                           </div>
                    </div>
                     <div class="carousel-item active" >
                      <img src="resources/images/d.jpg" style="width: 100%;height: 300px"  alt="">
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
          <h1 style="text-align: center"> welcome to our daycare</h1>
          <p style="text-align: center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus reiciendis modi non. Ad commodi similique vel explicabo perferendis error placeat cupiditate nobis. Libero iste, earum vero veniam est quisquam veritatis.</p>

       </div>

    </div>
    <script src="resources/js/search.js"></script>
    </body>
</html>
