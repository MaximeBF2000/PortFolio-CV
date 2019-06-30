<?php

session_start();
if(!isset($_SESSION["isLogged"]) || $_SESSION["isLogged"] === false){
    header("Location: http://".$_SERVER["HTTP_HOST"]."/admin/login.php");
    exit();
}
