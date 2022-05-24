<?php
include 'connect.php';
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
// $name = addslashes($_POST['name']);
// $address = addslashes($_POST['address']);
// $phone = addslashes($_POST['phone']);

//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
if (!$username || !$password )
{
	echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
	exit;
}

$post1 = "insert into Register (id, username, password) VALUE (NULL, '{$username}', '{$password}')";

//Lưu thông tin thành viên vào bảng
$addmember = mysqli_query($conn, $post1);
if ($addmember){
	echo "Đăng ký thành công. <a href='javascript: history.go(-1)'>Back</a>";
	
	exit;
}
else
	{
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";
    }
?>
