<?php
include('../database/dbconnect.php');
session_start();
if(isset($_SESSION["user_id"]))
{
    $user_id = $_SESSION['user_id'];
  $select = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'");
            $fetch = mysqli_fetch_assoc($select);
    echo 'username: ' . $fetch['username'] . ' <br>';
    echo 'Email: '  . $fetch['email'] . '<br>';
    // echo 'Contact Number: ' $fetch['contact_no']  '<br>';
}

?>