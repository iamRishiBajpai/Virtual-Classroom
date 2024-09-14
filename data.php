<?php

$name = $_POST["Full Name"];
$message = $_POST["Username"];
$priority = filter_input(INPUT_POST, "Email", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "Password", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "PhoneNumber", FILTER_VALIDATE_BOOL);

if ( ! $terms) {
    die("confirmed details?");
}   

$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";
        
$conn = mysqli_connect(hostname: $host,
                       Firstname : $firstname,
                       Username: $username,
                       password:: $password
                       Phonenumber: $phoneNumber
                       Email: $email );
        
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}           
        
$sql = "INSERT INTO message (Full Name, Username , Email, PhoneNumber)
        VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssii",
                       $name,
                       $message,
                       $email,
                       $PhoneNumber);

mysqli_stmt_execute($stmt);

echo " saved.";
