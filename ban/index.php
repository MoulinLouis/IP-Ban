<?php

require_once('ban_list.php');

if(!in_array($_SERVER['REMOTE_ADDR'], $ban_list)) {
    header('location: success.php');
}

?>