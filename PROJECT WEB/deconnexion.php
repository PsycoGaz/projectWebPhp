<?php
    session_start();
    session_unset();
    unset($_SESSION['login']); // Replace 'key' with the actual key you want to delete from the session
    
    header("location:login.php"); 
?>