<?php
include '../config/database.php';

$id = $_GET['user_id'];

if(isset($_POST['submit_input'])){
    
    if($_POST['user_name_input'] == '' ||  $_POST['name_input'] == '' || $_POST['about_me_input'] == ''){
        echo 'all required fields must be filled in';
    }else{
        $input_user_name = $_POST['user_name_input'];
        $input_name = $_POST['name_input'];
        $input_about_me = $_POST['about_me_input'];
        
        $result_input = "UPDATE users SET `user_name` = '$input_user_name', `name` = '$input_name', `about_me` = '$input_about_me' WHERE `id` = $id";
        $conn->query($result_input);
        header('Location: ../pages/index.php?user_id='.$id.'');
    }
}

?>
<html>
<head>
    <link rel="stylesheet" href="main.css">
</head>
<body class="size">
    <?php
    include '../layout/header.php';
    ?>
    <div class="main">
        <div class="volume">
            <div class="box overlay">
                <p class="mro_text">Profiel</p>
            </div>
        </div>
    </div>

    <div class="profile">
        <div class="box img">
            <?php
                
                $result_img = $conn->query("SELECT img_url FROM pofilepicture INNER JOIN users ON pofilepicture.id = users.img_id WHERE users.id = $id");
                if($result_img->num_rows > 0){
                    while($row_img = $result_img->fetch_assoc()){
                        $pfp = $row_img['img_url'];
                        echo '<img class="pfp" src="'.$pfp.'" alt="smexy pfp">';
                    }
                }
            ?>
        </div>
        <div class="box">
            <form method="post">
                <?php
                    $result = $conn->query("SELECT * FROM users WHERE id = $id");
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $name = $row['name'];
                            $user_name = $row['user_name'];
                            $password = $row['password'];
                            $birthday = $row['birthday'];
                            $country = $row['country'];
                            $field = $row['field'];
                            $about_me = $row['about_me'];

                            echo '<p class="bold">Naam</p>
                                <input type="text" name="name_input" value="'.$name.'"><br><br>';
                            echo '<p class="bold">Gebruikers naam</p>
                                <input type="text" name="user_name_input" value="'.$user_name.'"><br><br>';
                            echo '<p class="bold">Wachtwoord</p>
                                <input type="password" name="password_input" value="'.$password.'" disabled><br><br>';
                            echo '<p class="bold">Birthday</p>
                                <input type="text" name="birthday_input" value="'.$birthday.'" disabled><br><br>';
                            echo '<p class="bold">Country</p>
                                <input type="text" name="country_input" value="'.$country.'" disabled><br><br>';
                            echo '<p class="bold">Field</p>
                                <input type="text" name="field_input" value="'.$field.'" disabled><br><br>';
                            echo '<p class="bold">About me</p>
                                <input type="text" name="about_me_input" value="'.$about_me.'"><br><br>';
                        }
                    }
                ?>
                <input type="submit" name="submit_input" id="submit_input">
            </form>
        </div>
    </div>

    
</body>

</html>