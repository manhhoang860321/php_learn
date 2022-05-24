<?php
include 'connect.php';

$sql = "SELECT id, username, password FROM Register";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "id= ". $row["id"]. " - Username: ". $row["username"]." ". "-Password: ". $row["password"]. "<br>";
    }
}
else{
    echo "khong co thong tin";

}
