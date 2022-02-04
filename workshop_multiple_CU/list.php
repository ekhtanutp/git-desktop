<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM tbl_q ORDER BY qid ASC";
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query)  or die("Error:" . mysqli_error()); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 

echo "<table border='1' align='center' width='300'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'>
  <td>item</td>
  <td>score</td>
  <td>update</td>
</tr>";
 foreach($result as $row){
 //form 
  echo "<form action='update_score.php' method='post'>";
  echo "<tr>";
  echo "<td align='center'>" .$row["qitem"] .  "</td> "; 
  echo "<td align='center'>" .$row["qscore"] .  "</td> ";
  //ส่งแบบ array value & key  , key คือไอดี (pk), value คือคะแนนใหม่ที่ต้องการอัพเดท *สังเกตตรง name & value
  echo "<td align='center'> <input type='number' name='update_score[$row[qid]]' value='$row[qscore]' min='0' max='5'></td>"; 
}
echo "</tr>";
  echo "<tr>";
  echo "<td colspan='3' align='right'> ปรับปรุงคะแนน <button type='submit'>Update</button>    </td>";
  echo "<tr>";
  echo '</form>';
echo "</table>";
//5. close connection
mysqli_close($con);
?>