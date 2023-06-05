<?php
//mulai session 
session_start(); 
session_destroy(); 
header('Location: ./login.php');
exit();
if(isset($_COOKIE['login'])){
    $time = time(); 
    setcookie("login", $time - 3600);
}
?>
    