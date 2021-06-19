<?php
include '../config/database.php';
?>
<html>
<head>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
    include '../layout/header.php';
    ?>
    <div class="main">
        <div class="volume">
            <div class="box overlay">
                <p class="mro_text">Most recent opportunity's</p>
            </div>
        </div>
        <div class="box box_comp">
                <p class="mro_text">Company name</p>
                <p class="">lorum</p>
                <p class="mro_text">Description company</p>
                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi dicta enim nam voluptas nostrum animi magnam voluptatibus. A, nihil! Numquam velit sunt qui vel id deleniti sed aliquam eveniet voluptate!</p>
            </div>

            <P class="app_text">Search for aplicantions</p>
            <input type="text" class="search" placeholder="Search..">

            <div class="box_reg">
                <p class="mro_text">New intern</p>
                <p class="">Create account here</p>
                <a href="../login/sign_up.php"> <p class="reg_text">register</p> </a>
            </div>
    </div>
</body>
</html>