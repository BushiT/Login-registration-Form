<?php
namespace admin;

class Auth {
    static $loginUrl = '../index.php';

    static function check(){
        if(isset($_SESSION['user_array'])){
            return $_SESSION['user_array'];
            if($_SESSION['user_array']['role'] !== 'admin'){
                header("location:../user-dashboard.php");
            }
        }else{
            header('location:../login.php');
        }
    }
}