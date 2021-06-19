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
            User name<br>
            <input class="sub" placeholder="Username" type=text name="user_name" required> <br>
            wachtwoord<br>
            <input class="sub"  placeholder="Password" type="password" name="password" required>
            <input class="sub"  type="submit" value="submit" name="submit"/>
        </form>
        <a href="sign_up.php?user_id=<?php echo $user_id?>"><h4 >Register here </4>
        </div>
        </div>
        <?php
        if(isset($_POST['submit'])){
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];

            $result = $conn->query("SELECT * FROM users WHERE `user_name` LIKE '$user_name'");
            if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $real_user_name = $row['user_name'];
                $real_password = $row['password'];
                $user_id = $row['id'];
            }
            }else{
                $real_user_name = '';
            }     
            if($real_user_name != '' && $user_name == $real_user_name && $password == $real_password) {
            header('Location: ../pages/index.php?user_id='.$user_id.'');

            }else{
            echo 'password/username incorrect!';
            }
        }
        ?>
        </div>
    </div>
    
</body>

</html>