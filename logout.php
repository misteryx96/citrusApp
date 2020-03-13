<?php
@session_start();
if(isset($_SESSION['role'])){
    unset($_SESSION['role']);
    unset($_SESSION['username']);
    @session_destroy();
    header("Location:index.php");
}