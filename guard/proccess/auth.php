<?php

session_start();
if(!isset($_SESSION['ADMIN_ID'])&& empty($_SESSION['ADMIN_ID'])) {
    header('Location:index.php');
    
}