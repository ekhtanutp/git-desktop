<meta charset="utf-8" />
<?php
include('condb.php');
// print array ออกมาดู
echo '<pre>';
	print_r($_POST);
echo '</pre>';
//exit;
foreach($_POST['update_score']  as $item=>$value){
//item คือid ประเมิน pk ในตาราง
//value คือคะแนนประเมิน *ที่อัพเดท
$sql = "UPDATE tbl_q SET qscore=$value WHERE qid=$item";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
//แสดงผลลัพธ์การอัพเดท
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


?>