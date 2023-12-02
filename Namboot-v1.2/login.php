<?php 
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $name_user = $_POST["username"];
    $pass_user = $_POST["password"];
 
    $sql = "SELECT * FROM db_login WHERE name_user='$name_user' && pass_user='$pass_user'";
    $result = mysqli_query($conn, $sql);
 
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: adminventory.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <br>

        <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>
