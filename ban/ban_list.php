<?php

$ban_list = array("127.0.0.1");
// $ban_list = array("192.168.1.1", "127.0.0.1", "10.0.0.1");

if(in_array($_SERVER['REMOTE_ADDR'], $ban_list)) {
    header('location: error.php');
    exit();
}

?>