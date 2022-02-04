<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Form Register</h1>
    <form action="save.php" method="POST">
        Username : 
        <input type="input" name="username" required>
        <br>
        Password :
        <input type="password" name="password" required>
        <br>
        Name :
        <input type="text" name="member_name" required>
        <br>
        Tel :
        <input type="text" name="member_tel" required>
        <br>
        Email :
        <input type="email" name="Email" required>
        <br>
        <button type="submit">สมัครสมาชิก</button>
    </form>
</body>
</html>