<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Select</title>
</head>
<body>
    <form action="save.php" method="post"> 
    ประเภทสินค้า :
        <select name="type_id">  
            <option value="">- กรุณาเลือก -</option>
            <option value="1">PC</option>
            <option value="2">Mobile</option>
            <option value="3">Tablet</option>
        </select>
        <br>
        <button type="submit">เลือก</button>
    </form>    
</body>
</html>