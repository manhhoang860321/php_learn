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
    
    <?php
    $_GET = array(
        'id' => '12',
        'title' => 'method_get'
    );
    if(isset ($_GET['id']))
    $id = $_GET['id'];
    // <h1><br></h1>;
    echo $id;
    echo"<br>";

    $title = $_GET['title'];
    echo $title;
    ?>
    </div>
</body>
</html>