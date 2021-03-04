<?php
$db = mysqli_connect('localhost',
    'root',
    'root',
    'homework');

if (!$db){
    die('Error connect to database');
}