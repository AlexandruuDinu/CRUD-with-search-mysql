<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);
    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        header("Location: index.php");
        exit(0);
    } else {
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['save_student'])) {
    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);

    $query = "INSERT INTO students (firstName, lastname, email, phone) VALUES
     ('$firstName', '$lastName', '$email', '$phone')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        header('Location: student-create.php');
        exit(0);
    } else {
        header('Location: student-create.php');
        exit(0);
    }
}
?>