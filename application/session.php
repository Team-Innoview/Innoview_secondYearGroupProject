<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "innoview_db");
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT user_name from login where user_name = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['user_name'];
