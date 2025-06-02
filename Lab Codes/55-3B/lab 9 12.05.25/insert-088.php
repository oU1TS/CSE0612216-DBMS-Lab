<?php
$connect = mysqli_connect("localhost","root","","database_connect_demo_55_088");

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dept=$_POST['dept'];
}

$query = "insert into insert_data(name,email,phone,dept) values('$name','$email','$phone','$dept')";

$insert = mysqli_query($connect,$query);


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert PHP</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="name" palceholder="name"><br>
    <input type="email" name="email" palceholder="email"><br>
    <input type="text" name="phone" palceholder="phone"><br>
    <select name="dept">
    <option>CSE</option>
    <option>IT</option>
    <option>Pharmacy</option>
</select>
    <button>Send</button>
</form>
</body>
</html>