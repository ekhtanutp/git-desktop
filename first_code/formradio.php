<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save.php" method="post">
        <input type="radio" name="pay" value="1" required> เงินสด <br>
        <input type="radio" name="pay" value="2"> บัตรเครดิต <br>
        <input type="radio" name="pay" value="3"> โอนชำระ <br>
        <button type="submit">กดชำระเงิน</button>
    </form>
</body>
</html>