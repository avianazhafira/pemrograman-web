<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style>
        .inputan {
            width: 100px;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type=submit]{
            background-color:#4CAF50;
            border:none;
            color:white;
            padding:16px 32px;
            text-decoration: none;
            margin:4px 2px;
            cursor:pointer;
        }
    </style>
</head>
<body>
    <p>Registrasi </p>
    <form method="POST" action="konfirmasi.php">
        <label>Username</label>
        <input class="inputan" type="text" name="username">
        <label><br>Password</label>
        <input class="inputan" type="password" name="password">
        <label><br>Nama Depan</label>
        <input class="inputan" type="text" name="namadepan">
        <label><br>Nama Belakang</label>
        <input class="inputan" type="text" name="namabelakang">
        <label><br>Email</label>
        <input class="inputan" type="text" name="email"><br>
        <input type="submit" name="tombolSubmit" value="Login">

    </form>
</body>
</html>