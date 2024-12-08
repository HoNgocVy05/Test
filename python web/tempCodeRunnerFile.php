<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registration</title>
</head>
<body>
    <h1>Đăng ký tài khoản</h1>
    <form method="POST" action="">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" id="password" required><br><br>

        <button type="submit">Đăng ký</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        echo "<h2>Kết quả:</h2>";
        echo "Tên đăng nhập: $username <br>";
        echo "Mật khẩu: " . str_repeat('*', strlen($password)); // Không hiển thị mật khẩu thật
    }
    ?>
</body>
</html>