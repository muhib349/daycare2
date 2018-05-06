<?php
/**
 * Created by PhpStorm.
 * User: muhib
 * Date: 5/3/18
 * Time: 9:06 PM
 */

class RetriveData
{
    private function getConnection(){
        return new mysqli("localhost",'root','','daycare');
    }

    public function userAuthentication($username,$password){
        $db=$this->getConnection();
        $sql = "SELECT * FROM `users` WHERE username='".$username."' AND password= '".$password."'";
        $res=$db->query($sql);
        $db->close();
        return $res;
    }

    public function searchDoctors($name){
        $db=$this->getConnection();
        $sql = "SELECT * FROM (SELECT CONCAT(doctors.firstname,' ',doctors.lastname) AS name ,doctor_id FROM doctors) AS tbl WHERE tbl.name LIKE '%$name%' ";
        $res=$db->query($sql);
        $db->close();
        return $res;
    }

    public function getDoctor($id){
        $db=$this->getConnection();
        $sql = "SELECT image,firstname,lastname,email,phone,address,specialist,summery,dayfrom,dayto,TIME_FORMAT(timefrom, '%h:%i %p') timefrom ,TIME_FORMAT(timeto, '%h:%i %p') timeto FROM doctors WHERE doctor_id =$id";
        $res=$db->query($sql);
        $db->close();
        return $res;
    }

}