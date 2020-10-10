<?php

if(!$_SESSION['usuario']) {
    header('Location: html/login.php');
    exit();
}