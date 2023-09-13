<?php

    require_once 'includes/connection.php';

    $id = $_GET['id'];
    $updateSql = "UPDATE FROM employees WHERE id=$id";

    if(mysqli_query($conn , $updateeSql)) {
        header('location:index.php');
    }