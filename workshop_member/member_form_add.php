<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form add member</title>
</head>
<body>
    <h1>เพิ่มข้อมูลพนักงาน</h1>
    <form action="member_form_add_db.php" method="post">
        Username :
        <input type="text" name="username" id="" placeholder="username" required><br>
        Password :
        <input type="password" name="password" id="" placeholder="password" required><br>
        NAME :
        <input type="text" name="name" id="" placeholder="ชื่อ - นามสกุล" required><br>
        PHONE :
        <input type="text" name="phone" id="" placeholder="เบอร์โทรศัพท์ 10 หลัก" required><br>
        EMAIL :
        <input type="email" name="email" id="" placeholder="อีเมลล์" required><br>
        <button type="submit">Save</button>


    </form>
</body>
</html>