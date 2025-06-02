<?php
$connect = mysqli_connect("localhost", "root", "", "from_1");


if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dept = $_POST['dept'];
}
    $query = "INSERT INTO insertdatabase(Id, Name, Email, PHN, Dept)
              VALUES ('$id', '$name', '$email', '$phone', '$dept')";

    $insert = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Insert</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="id" placeholder="ID"><br><br>
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="text" name="phone" placeholder="Phone"><br><br>
        <select name="dept">
            <option value="CES">CES</option>
            <option value="IT">IT</option>
            <option value="Phar">Phar</option>
        </select><br><br>
        <button type="submit" name="send">Send</button>
    </form>
</body>
</html>
