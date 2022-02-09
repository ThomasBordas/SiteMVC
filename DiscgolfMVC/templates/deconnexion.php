<?php
session_start();
$_SESSION = array();
session_destroy();
require "templates/accueil.php";
?>