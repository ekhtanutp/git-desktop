<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From upload</title>
</head>
<body>
    <form action="save.php" method="post" enctype="multipart/form-data">
        Upload :
        <input type="file" name="myfile" required accept="image/*">
        <br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>