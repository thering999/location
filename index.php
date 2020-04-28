<?php 
require_once "condb.php";
$db = new Connect;
$db->ConDB();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ระบบรายงานจุดพิกัดจังหวัดมุกดาหาร</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="jquery-2.0.3.min.js"></script>

<script type="text/javascript">

//popup search location on google map
function insert_address_search(location,latitude,longitude,address){
    $("#location").val(location);
    $("#latitude").val(latitude);
    $("#longitude").val(longitude);
    $("#address").val(address);
}

function chk_form () {

    if(form1.location.value==""){

        alert('Please select location!');
        return false;
    }
}

//popup windows
function popup(url,name,windowWidth,windowHeight){    
    myleft=(screen.width)?(screen.width-windowWidth)/2:100; 
    mytop=(screen.height)?(screen.height-windowHeight)/2:100;   
    properties = "width="+windowWidth+",height="+windowHeight;
    properties +=",scrollbars=yes, top="+mytop+",left="+myleft;   
    window.open(url,name,properties);
}

</script>




</head>

<body>
<h1>ระบบรายงานจุดพิกัดจังหวัดมุกดาหาร</h1>
<left>

  <a href="https://www.facebook.com/sakarin.habusaya"><h4>คลิก Search เพื่อแจ้งพิกัดและ inbox บอกได้ครับ<br></a>
  <div id="map"></div>
<br>
<left>
    


<!-- show gis map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1184.2174646150402!2d104.72572776359294!3d16.547175675409342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313dc64062b3efa5%3A0xb8daf471958f2a2a!2z4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4Liq4Liy4LiY4Liy4Lij4LiT4Liq4Li44LiC4LiI4Lix4LiH4Lir4Lin4Lix4LiU4Lih4Li44LiB4LiU4Liy4Lir4Liy4Lij!5e1!3m2!1sth!2sth!4v1418699286895"
width="1400" height="350" frameborder="1" style="border:1"></iframe>
                     


<!-- insert into -->
<?php if($_REQUEST['data']=='save'){

$sql = $db->conn->query("insert location set Loc_Location = '$_REQUEST[location]',Loc_Latitude = '$_REQUEST[latitude]',Loc_Longitude = '$_REQUEST[longitude]',Loc_Address = '$_REQUEST[address]',Loc_Date = now()")or die ($db->conn->error());

if($sql==true){
echo "<script>alert('Save complete...');</script>";
}
else {
   echo "<script>alert('Save not complete!');</script>"; 
}

}

?>


<form name="form1" action="?data=save" method="post" onsubmit="return chk_form();" >

                                    <label>Location</label>
                                    <input name="location" type="text" id="location" placeholder="Location" readonly >

                                    <button type="button" onClick="javascript:popup('search_location.php','',1000,600)">Search</button>
                                     &nbsp;
                                     
                                    <button type="button" onClick="javascript:popup('show_data.php','',1000,600)">Show</button>
                                    &nbsp;

                                    <button type="button" onClick="javascript:popup('json.php','',1000,600)">Get JSON</button>
                                     &nbsp;
                                    <br>

                                    <label>Latitude</label>
                                    <input name="latitude" type="text" id="latitude" readonly>

                                    <label>Longitude</label>
                                    <input name="longitude" type="text" id="longitude" readonly>

                                    &nbsp;

                                    <label>Address</label>
                                    <textarea name="address" id="address" rows="3" style="width:600px; class="form-control" readonly></textarea>

                                    <br><br>

                                    <button type="submit">Submit</button>

</form>

<script type="text/javascript" src="https://www.stat-counter.org/count/2krg"></script><br>
 <a href='http://www.counter-zaehler.de'>counter blog</a> <script type='text/javascript' src='https://whomania.com/ctr?id=66acb3d764e94d7c4def42cf6c36194c5ae709eb'></script>

</body>
</html>
