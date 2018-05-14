<?php
/**
 * Created by PhpStorm.
 * User: muhib
 * Date: 5/4/18
 * Time: 1:23 AM
 */

include '../datasource/RetriveData.php';
$obj = new RetriveData();
//$output = '<li class="nav-item dropdown">'.'<div class="dropdown-menu">';
$output ='';
if(isset($_POST['name'])){
    $res = $obj->searchDoctors($_POST['name']);
    if($res->num_rows >0){
        while ($rows = $res->fetch_assoc()){

               $output .= '<li style="font-size: 20px"><a href="views/doctors.php?id='.$rows['doctor_id'].'">'.$rows['name'].'</a>'.'</li>';

        }
    }
    else{
        $output.='<li style="font-size: 20px">No Result Found</li>';
    }
    echo $output;
}

if(isset($_POST['date'])){
   $date = $_POST['date'];
   if($date >= date('y-m-d')){
       echo $date;
   }
   else
       echo "make a valid date";
}


?>