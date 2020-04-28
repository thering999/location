<?php
header("Content-type:application/json; charset=UTF-8");        
header("Cache-Control: no-store, no-cache, must-revalidate");       
header("Cache-Control: post-check=0, pre-check=0", false);  
// ส่วนติดต่อกับฐานข้อมูล
require_once "condb.php";
$db = new Connect;
$db->ConDB();    

$sql = $db->conn->query("select * from location order by Loc_ID desc");
while ($row = $sql->fetch_assoc()){
    $json_data[]=array(
        "Loc_ID"=>$row['Loc_ID'],
        "Loc_Location"=>$row['Loc_Location'],
        "Loc_Latitude"=>$row['Loc_Latitude'],
        "Loc_Longitude"=>$row['Loc_Longitude'],
        "Loc_Address"=>$row['Loc_Address'],
        "Loc_Date"=>$row['Loc_Date'],
    );  
}
$json= json_encode($json_data);
if(isset($_GET['callback']) && $_GET['callback']!=""){
echo $_GET['callback']."(".$json.");";    
}else{
echo $json;
}
?>