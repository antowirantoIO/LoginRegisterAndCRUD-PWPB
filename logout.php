<?php 
    require 'connection.php';

    session_destroy();

    header('location: formLogin.php', true)
?>