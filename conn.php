<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'devcom');
if(!$conn){
    die("connection error".mysqli_connect_error());
}