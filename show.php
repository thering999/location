<?php
require_once "condb.php";
$db = new Connect;
$db->ConDB();
?>

<!--$sql = "select * from location order by Loc_ID desc"; -->

<style type="text/css">

.style1 {
	color: #0000FF;
	font-weight: bold;
}


</style>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<!-- <h2 align="center"><img src="./images/Header.jpg" width="970" height="160" border="2" /></h2> -->
<h2 align="center" class="style1">ตรวจสอบรายการที่พิกัดน้ำท่วม</h2>
<p align="center"><a href="index.php">กลับไปยังหน้าหลัก</a></p>
<table border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>

    <td><div align="center"><abbr title="Loc_ID">Loc_ID</abbr><img src="b_views.png" border="0" /></a></div></td>
    <td><div align="center"><abbr title="Location">Loc_Location<img src="b_views.png" border="0" /></a></abbr></div></td>
    <td><div align="center"><abbr title="Latitude">Loc_Latitude<img src="b_views.png" border="0" /></a></abbr></div></td>
    <td><div align="center"><abbr title="Longitude">Loc_Address<img src="b_views.png" border="0" /></a></abbr></div></td>
    <td><div align="center"><abbr title="Address">Address<img src="b_views.png" border="0" /></a></abbr></div></td>
    <td><div align="center"><abbr title="Date">Loc_Date<img src="b_views.png" border="0" /></a></abbr></div></td>
  </tr>

  <?php


  $sql = "select * from location order by Loc_ID desc";
 $objQuery = mysqli_query($sql) or die(mysqli_error());
 while($row = mysqli_fetch_array($objQuery))
{
 ?>
  <tr>
    
    
    <td><div align="right"><? echo ($row['Loc_ID']); ?></div></td>
 
    <td><div align="right"><? echo ($row['Loc_Location']); ?></div></td>

   <td><div align="right"><? echo ($row['Loc_Latitude']); ?></div></td>
  
   <td><div align="right"><? echo ($row['Loc_Longitude']); ?></div></td>

   <td><div align="right"><? echo ($row['Loc_Address']); ?></div></td>
    
   <td><div align="right"><? echo ($row['Loc_Date']); ?></div></td>
	 
  <?
 }
 ?>

</table>


<div id="example1" class="target" title="The content of this tooltip is provided by the 'title' attribute of the target element.">DESIGN BY SAKARIN HABUSAYA </div>