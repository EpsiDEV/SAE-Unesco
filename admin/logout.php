<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: ../src/index.php");
    exit();
?>