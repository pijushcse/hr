<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Page</title>
    <meta name="generator" content="WYSIWYG Web Builder 12 Trial Version - http://www.wysiwygwebbuilder.com">
    <link href="Untitled9.css" rel="stylesheet">
    <link href="4confirmation.css" rel="stylesheet">
</head>

<?php

$checkInDate = $_POST["checkInDate"];  
$checkOutDate = $_POST["checkOutDate"];  
$noOfRoom = $_POST["noOfRoom"];  
$noOfAdults = $_POST["noOfAdults"];  
$noOfKids = $_POST["noOfKids"];  
$addressId = $_POST["addressId"];
$roomId  = $_POST["roomId"];
$customer_name = $_POST["customerName"];
$customer_email = $_POST["customerEmail"];
$customer_phone = $_POST["customerPhone"];
$country = $_POST["country"];

$cardNo =  $_POST["cardNo"];
$holderName =  $_POST["holderName"];
$month =  $_POST["month"];
$year =  $_POST["year"];

$servername = "localhost";
$username   = "root";
$password   = "";
$dbName     = "reservation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    $sql    = "INSERT INTO user_reservation (name, room_id_fk)  VALUES('".$customer_name."', '".$roomId."' )"  ;   
   $result = $conn->query($sql);

    }
?>

<body>
    <a href="http://www.wysiwygwebbuilder.com" target="_blank">
        <img src="images/builtwithwwb12.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:967px;border-width:0;z-index:250">
    </a>
    <div id="wb_Form1" style="position:absolute;left:2px;top:1px;width:1265px;height:824px;z-index:4;">
        <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
            <div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:1199px;height:140px;z-index:0;">
                <img src="images/images.jpg" id="Image1" alt="">
            </div>
            <div id="wb_TabMenu1" style="position:absolute;left:3px;top:132px;width:1194px;height:40px;z-index:1;overflow:hidden;">
                <ul id="TabMenu1">
                    <li>
                        <a href="#">1. Choose Your Room</a>
                    </li>
                    <li>
                        <a href="#">2. Enter Booking Details </a>
                    </li>
                    <li>
                        <a href="#">3. Enter Payment Method</a>
                    </li>
                    <li>
                        <a href="#">4. Booking Confirmation</a>
                    </li>
                </ul>
            </div>
            <marquee direction="left" scrolldelay="90" scrollamount="7" behavior="scroll" loop="0" style="position:absolute;left:131px;top:257px;width:793px;height:96px;z-index:2;"
                id="Marquee1">
                <span style="color:#4169E1;font-family:Georgia;font-size:24px;">Congratulations!!!!
                    <br>Booking is Confirmed...</span>
            </marquee>
        </form>
    </div>
</body>

</html>


<?php
  mysqli_close($conn);

?>