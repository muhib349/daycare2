<?php
/**
 * Created by PhpStorm.
 * User: muhib
 * Date: 5/3/18
 * Time: 10:35 PM
 */

session_start();

unset($_SESSION['username']);
session_destroy();
header('Location:../index.php');
?>