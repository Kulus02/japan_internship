<?php
include '../config/database.php';
?>
<html>
<head>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php
    include '../layout/header.php';
    ?>
    <div class="main">
        <div class="volume">
            
            </div>
            <div class="containerLogin">

        <div class="main-div">
        <form method="POST" action="">
            <p class="mro_text">Username</p>
            <input class="sub" placeholder="Username" type=text name="user_name" required> <br>
            <p class="mro_text">Password</p>
            <input class="sub"  placeholder="Password" type="text" name="password" required>
            <p class="mro_text">Information</p>
            <input class="sub"  placeholder="name" type="text" name="name" required>
            <input class="sub"  placeholder="birthday" type="date" name="birthday" required>
            <input class="sub"  placeholder="country" type="text" name="country" required>
            <input class="sub"  placeholder="field" type="text" name="field" required>
            <p class="mro_text">About you</p>
            <input class="sub"  placeholder="about_me" type="text" name="about_me" required>
            <input class="sub"  type="submit" value="submit" name="submit"/>
        </form>
        </div>
        </div>
        <?php
        if(isset($_POST['submit'])){
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $birthday = $_POST['birthday'];
            $country = $_POST['country'];
            $field = $_POST['field'];
            $about_me = $_POST['about_me'];


            if(isset($_POST['submit'])){
                $result = "INSERT INTO `users` (`user_name`, `password`, `name`, `birthday`, `country`, `field`, `about_me`) VALUES ('$user_name', '$password', '$name', '$birthday', '$country', '$field', '$about_me')";
                $conn->query($result);
                header('Location: ../pages/index.php?user_id='.$user_id.'');
            
        }
    }
        ?>
        </div>
    </div>
    
</body>

</html>