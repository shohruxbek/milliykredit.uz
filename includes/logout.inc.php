<?php

if(isset($_POST['submit'])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../123qwe678-sd.php");
    exit();
}