<?php

session_start();
$_SESSION["isLogged"] = true;
header("Location: http://".$_SERVER["HTTP_HOST"]."/admin/index.php");
exit();