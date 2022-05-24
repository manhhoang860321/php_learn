<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <div>
        <form method="POST" action="process_register.php">
            <h1>Nhập thông tin</h1>
            username: <input type="text" name="username" value=""><br>
            password: <input type="text" name="password" value=""><br>
            <input type="submit" name="form_click" value="Đăng Ký">

        </form>
        <form method="POST" action="process_show.php">
            <h1>list</h1>
            <input type="submit" name="form_click" value="Show">

        </form>
    </div>

    
</body>
</html>