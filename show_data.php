<meta charset="UTF-8">
<h2 align="center" class="style1">ตรวจสอบรายการจุดพิกัดจังหวัดมุกดาหาร</h2>
<p align="center"><a href="index.php">กลับไปยังหน้าหลัก</a></p>
<?php
//1. เชื่อมต่อ database: 
require_once "condb.php";
$db = new Connect;
$db->ConDB();
//ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//2. query ข้อมูลจากตาราง : 
$sql = $db->conn->query("select * from location order by Loc_ID desc");
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
#$result = mysqli_query($db, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 

echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'><td>ID</td><td>ชื่อ</td><td>Lat</td><td>Long</td><td>ที่อยู่</td><td>วันที่บันทึก</td></tr>";
#<td>แก้ไข</td><td>ลบ</td></tr>";


while ($row = $sql->fetch_assoc()){
  echo "<tr>";
  echo "<td>" .$row["Loc_ID"] .  "</td> "; 
  echo "<td>" .$row["Loc_Location"] .  "</td> ";  
  echo "<td>" .$row["Loc_Latitude"] .  "</td> ";
  echo "<td>" .$row["Loc_Longitude"] .  "</td> ";
  echo "<td>" .$row["Loc_Address"] .  "</td> ";
  echo "<td>" .$row["Loc_Date"] .  "</td> ";
  //แก้ไขข้อมูล
 # echo "<td><a href='UserUpdateForm.php?ID=$row[0]'>edit</a></td> ";
  
  //ลบข้อมูล
#  echo "<td><a href='UserDelete.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
  echo "</tr>";
}
echo "</table>";

//5. close connection
#mysqli_close($con);
?>