<?php

    $connect = mysqli_connect('db_host', 'db_username', 'db_password', 'bd_name');

    if (!$connect) {
        die('Error connect to database');
    }
