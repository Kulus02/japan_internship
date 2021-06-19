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

    </div>
    <div class="contact">  
            <form id="contact" action="" method="post">
                <h3>Fill this in if you need help/contact us!</h3>
                <fieldset>
                <input class="sub" placeholder="Name" type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                <input class="sub" placeholder="Email" type="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                <textarea class="sub" placeholder="Message...." tabindex="5" required></textarea>
                </fieldset>
                <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit bericht</button>
                </fieldset>
        </form>
            </div>
    

    
</body>

</html>