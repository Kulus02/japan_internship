<?php
include '../config/database.php';

if (!$_GET['user_id']){
    $user_id = '';
}else{
    $user_id = $_GET['user_id'];
}


?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="../layout/header.css">
    </head>
<body>
    <div class="container">
        <div class="header">
            <h3 class="header_text">Internship Japan</h3>
            <div class="header_mar">
                <a href="../pages/index.php?user_id=<?php echo $user_id ?>"> <h4 class="header_pos">Home</h4></a>
                <a href="../pages/about.php?user_id=<?php echo $user_id ?>"> <h4 class="header_pos">About</h4></a>
                <a href="../pages/services.php?user_id=<?php echo $user_id ?>"> <h4 class="header_pos">Services</h4></a>
                <a href="../pages/contact.php?user_id=<?php echo $user_id ?>"> <h4 class="header_pos">Contact</h4></a>
                <a href="../pages/profile.php?user_id=<?php echo $user_id ?>"> <h4 class="header_pos">Profile</h4></a>
            </div>
            <a href="../login/login.php?user_id="> <h4 class="header_login">Login</h4></a>
        </div>
