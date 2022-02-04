<meta charset="utf-8" />
<!DOCTYPE html>
<html>
	<head>
		<title>:: ตย.ระบบบันทึกการประเมิน  devbanban.com ::</title>
	</head>
	<body>
		<h3>:: ตย.ระบบบันทึกการประเมิน  devbanban.com ::</h3>
		<form action="save_db.php" method="post" name="form1"   id="form1">
			<style>
			input[type=number]{
			width: 60px;
			}
			</style>
			<p> ข้อ 1 กรุณากรอกคะแนนระหว่าง 0-5:
				<input type='number' name='score[1]' value="0" min="0" max="5"/>
			</p>
			<p> ข้อ 2 กรุณากรอกคะแนนระหว่าง 0-5:
				<input type='number' name='score[2]' value="0" min="0" max="5"/>
			</p>
			<p> ข้อ 3 กรุณากรอกคะแนนระหว่าง 0-5:
				<input type='number' name='score[3]' value="0" min="0" max="5"/>
			</p>
			<p> ข้อ 4 กรุณากรอกคะแนนระหว่าง 0-5:
				<input type='number' name='score[4]' value="0" min="0" max="5"/>
			</p>
			<p> ข้อ 5 กรุณากรอกคะแนนระหว่าง 0-5:
				<input type='number' name='score[5]' value="0" min="0" max="5"/>
			</p>
			<input type='submit' name='button' id='button' value='SAVE' />
		</form>
	</body>
</html>