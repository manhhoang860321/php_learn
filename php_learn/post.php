<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<?php 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = null;
    $db = "test";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: ");
?>
    <form method="POST">
        username:<input type="text" name="username" value=""/><br>
        password:<input type="password" name="password" value=""/><br>
        <input type="submit" name="form_click" value="Gửi yêu cầu"><br>
        <?php
        if(isset($_POST['form_click'])){
            echo "tài khoản:" . $_POST['username'];
            echo '<br>';
            echo "mật khẩu: " . $_POST['password'];
        }
        ?>
    </form>

</body>
</html>