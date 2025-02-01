<?php

session_start();
session_destroy();

setcookie("usuario","", time() - 3600 , "/");

header("Location: login.php");
exit();

?>