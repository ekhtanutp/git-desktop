<meta charset="utf-8" />
<?php
include('condb.php');
// print array ออกมาดู
echo '<pre>';
	print_r($_POST);
echo '</pre>';
// exit;



$qmid=1; //id emp รหัสพนง. เอาไปทำต่อนะจ้ะ
foreach($_POST['score']  as $item=>$value){
//item คือข้อคำถามประเมิน
//value คือคะแนนประเมิน
$sql = "INSERT INTO  tbl_q
			(qitem, qscore, qmid)
			VALUES
			($item, '$value', '$qmid')
		";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

echo $sql;
echo '<hr>';

}

exit;
mysqli_close($con);
if($result){
			echo "<script type='text/javascript'>";
			echo  "alert('SAVE!!');";
			echo "window.location='index.php';";
			echo "</script>";
	  }
	  else{
		    echo "<script type='text/javascript'>";
				echo "window.location='index.php';";
			echo "</script>";
	  }
	
?>