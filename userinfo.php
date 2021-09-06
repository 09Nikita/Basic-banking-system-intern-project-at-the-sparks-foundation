<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'tubeuserdata');

$user = $POST['user'];
$email = $POST['email'];
$mobile = $POST['mobile'];
$Comments = $POST['Comments'];

$query = "insert into userdata (user,email,mobile,Comments)
values ('$user','$email','$mobile','$Comments')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php')
?>
