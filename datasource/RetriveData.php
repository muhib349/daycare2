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

}