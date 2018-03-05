<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Page</title>
    <meta name="generator" content="WYSIWYG Web Builder 12 Trial Version - http://www.wysiwygwebbuilder.com">
    <link href="chooseRoom.css" rel="stylesheet">
    <link href="1ChooseRoom.css" rel="stylesheet">
</head>

<?php
$servername = "localhost";
$username   = "root";
$password   = "passw0rd";
$dbName     = "reservation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql    = "SELECT id, type FROM room_type";
    $result = $conn->query($sql);
}

?>


<?php
    $checkInDate = $_POST["checkInDate"];  
    $checkOutDate = $_POST["checkOutDate"];  
    $noOfRoom = $_POST["noOfRoom"];  
    $noOfAdults = $_POST["noOfAdults"];  
    $noOfKids = $_POST["noOfKids"];  
    $address = $_POST["address"];
    $roomTypeId = $_POST["roomType"];
    $roomTypeName = '';
    
    $sql    = "SELECT id, type FROM room_type WHERE type='".$roomTypeId."' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $roomTypeName = $row["type"] ;
        }
    }

    $sql    = "select
	b.type as bedType,
	room_desc,
	non_smoking,
	rate	
from
	room r,
	bed_type b
where
	r.room_type_fk = ".$roomTypeId;   

    $result = $conn->query($sql);




?>





<body>
    <a href="http://www.wysiwygwebbuilder.com" target="_blank">
        <img src="images/builtwithwwb12.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:967px;border-width:0;z-index:250">
    </a>
    <div id="wb_Form1" style="position:absolute;left:1px;top:0px;width:1226px;height:967px;z-index:15;">
        <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
            <div id="wb_TabMenu1" style="position:absolute;left:0px;top:215px;width:1224px;height:36px;z-index:5;overflow:hidden;">
                <ul id="TabMenu1">
                    <li>
                        <a href="./1ChooseRoom.html">1 Choose your Room </a>
                    </li>
                    <li>
                        <a href="./2bookingDetailsTab.html">2 Enter Booking Details</a>
                    </li>
                    <li>
                        <a href="./3paymentMethod.html">3 Enter Payment Method</a>
                    </li>
                    <li>
                        <a href="#">4 Booking Confirmation </a>
                    </li>
                </ul>
            </div>
            <div id="wb_Form2" style="position:absolute;left:0px;top:181px;width:1226px;height:34px;z-index:6;">
                <form name="Form2" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form2">
                    <div id="wb_Text2" style="position:absolute;left:97px;top:6px;width:58px;height:20px;z-index:0;">
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;">Offers</span>
                    </div>
                    <div id="wb_Text3" style="position:absolute;left:178px;top:6px;width:61px;height:20px;z-index:1;">
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;">Resorts</span>
                    </div>
                    <div id="wb_Text4" style="position:absolute;left:261px;top:5px;width:105px;height:20px;z-index:2;">
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;"><a href="ContactUS.html">Contact Us</a></span>
                    </div>
                    <div id="wb_Text1" style="position:absolute;left:15px;top:6px;width:82px;height:20px;z-index:3;">
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;"><a href="index.php">Home</a></span>
                    </div>
                </form>
            </div>
            <div id="wb_Form3" style="position:absolute;left:5px;top:260px;width:893px;height:573px;z-index:7;">
                <form name="Form3" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form3">
                    <div id="wb_Form4" style="position:absolute;left:0px;top:0px;width:719px;height:330px;z-index:4;">
                        <form name="Form4" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form4">
                        </form>
                    </div>
                </form>
            </div>
            <table style="position:absolute;left:0px;top:272px;width:667px;height:103px;z-index:8;" id="Table2">
                <tr>
                    <th class="cell0">
                        <span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Bed   </span>
                    </th>
                    <th class="cell1">
                        <span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Room Description   </span>
                    </th>
                    <th class="cell0">Non Smoking </th>
                    <th class="cell0">Price/ night</th>
                    <th class="cell0">&nbsp;</th>
                    <th class="cell0">&nbsp;</th>
                </tr>

                <?php 
                       if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>'; 
                                echo '<td class="cell0"> <span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;">'.$row["bedType"]. ' </span>  </td> ' ;
                                echo '<td class="cell1"> <span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;">'.$row["room_desc"].' </span> </td> ' ;
                                echo '<td class="cell0">'.$row["non_smoking"].'</td> ' ;
                                echo '<td class="cell0">$'.$row["rate"].'.00</td>';
                                
                                echo '<td class="cell0">'; 
                                    echo '<input type="button" value="Choose" />';
                                echo '</td>' ;
                                
                                echo '<td class="cell0">&nbsp;</td>' ;
                            echo '</tr>'; 

                        }
                    }
                
                ?>
            </table>
        </form>
    </div>
    <marquee direction="left" scrolldelay="90" scrollamount="6" behavior="scroll" loop="0" style="position:absolute;left:0px;top:137px;width:1225px;height:38px;z-index:16;"
        id="Marquee1">
        <span style="color:#0000CD;font-family:Georgia;font-size:20px;">Welcome!!!</span>
    </marquee>
    <picture id="wb_Picture1" style="position:absolute;left:0px;top:0px;width:1227px;height:137px;z-index:17">
        <img src="images/images.jpg" id="Picture1" alt="" srcset="">
    </picture>

</body>

</html>