<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Page</title>
    <meta name="generator" content="WYSIWYG Web Builder 12 Trial Version - http://www.wysiwygwebbuilder.com">
    <link href="chooseRoom.css" rel="stylesheet">
    <link href="2bookingDetailsTab.css" rel="stylesheet">
</head>
<script> 

    function paymentConfirmation() {
        document.getElementById("bookingDetails").submit;

    }

</script>


<?php
    $checkInDate = $_POST["checkInDate"];  
    $checkOutDate = $_POST["checkoutDate"];  
    $noOfRoom = $_POST["noOfRoom"];  
    $noOfAdults = $_POST["noOfAdults"];  
    $noOfKids = $_POST["noOfKids"];  
    $addressId = $_POST["address"];
    $roomId  = $_POST["roomId"];

    
?>

<?php
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

    $sql    = "SELECT id, name FROM Country "  ;   
   $result = $conn->query($sql);

    }

?>

<body>
    <a href="http://www.wysiwygwebbuilder.com" target="_blank">
        <img src="images/builtwithwwb12.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:967px;border-width:0;z-index:250">
    </a>
    <div id="wb_Form1" style="position:absolute;left:0px;top:0px;width:1226px;height:967px;z-index:22;">
        <form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="Form1">
            <div id="wb_Pagination1" style="position:absolute;left:484px;top:881px;width:256px;height:39px;z-index:4;">
                <ul id="Pagination1">
                    <li>
                        <a href="./page3.html">&laquo; Prev</a>
                    </li>
                    <li>
                        <a href="">1</a>
                    </li>
                    <li>
                        <a href="">2</a>
                    </li>
                    <li>
                        <a href="">3</a>
                    </li>
                    <li>
                        <a href="">4</a>
                    </li>
                    <li>
                        <a href="./page5.html">Next &raquo;</a>
                    </li>
                </ul>
            </div>
            <div id="wb_TabMenu1" style="position:absolute;left:0px;top:231px;width:1224px;height:36px;z-index:5;overflow:hidden;">
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
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;">Contact Us</span>
                    </div>
                    <div id="wb_Text1" style="position:absolute;left:15px;top:6px;width:82px;height:20px;z-index:3;">
                        <span style="color:#0000FF;font-family:Georgia;font-size:17px;">Home</span>
                    </div>
                </form>
            </div>
          <form id="bookingDetails" method="POST" action="./paymentMethod.php">  
            <div id="wb_Text5" style="position:absolute;left:15px;top:303px;width:358px;height:20px;z-index:7;">
                <span style="color:#0000CD;font-family:Georgia;font-size:17px;">Please Enter Your&nbsp; Booking Details</span>
            </div>
            <div id="wb_Text6" style="position:absolute;left:15px;top:358px;width:165px;height:18px;z-index:8;">
                <span style="color:#191970;font-family:Georgia;font-size:16px;">First and Last Name :</span>
            </div>
            <input type="text" id="customerName" style="position:absolute;left:209px;top:354px;width:428px;height:16px;line-height:16px;z-index:9;"
                name="customerName" value="" spellcheck="false">
            <div id="wb_Text7" style="position:absolute;left:21px;top:410px;width:74px;height:18px;z-index:10;">
                <span style="color:#191970;font-family:Georgia;font-size:16px;">* E-mail :</span>
            </div>
            <input type="text" id="customerEmail" style="position:absolute;left:209px;top:410px;width:428px;height:16px;line-height:16px;z-index:11;"
                name="customerEmail" value="" spellcheck="false">
            <div id="wb_Text8" style="position:absolute;left:21px;top:467px;width:153px;height:18px;z-index:12;">
                <span style="color:#191970;font-family:Georgia;font-size:16px;">Phone :</span>
            </div>
            <input type="text" id="customerPhone" style="position:absolute;left:209px;top:459px;width:428px;height:16px;line-height:16px;z-index:13;"
                name="customerPhone" value="" spellcheck="false">
            <select name="country"  size="1" id="Combobox1" style="position:absolute;left:209px;top:505px;width:428px;height:16px;line-height:16px;z-index:14;">
                    <?php 
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option  value="'.$row["id"].' " >'.$row["name"].'</option>';
                        }
                    }        
                ?>
            </select>
            <div id="wb_Text9" style="position:absolute;left:15px;top:505px;width:250px;height:18px;z-index:15;">
                <span style="color:#000080;font-family:Georgia;font-size:16px;">Country of Residence:</span>
            </div>
            <input type="submit" id="Button1"  onclick="paymentConfirmation() ;return true;" name="" value="Continue" style="position:absolute;left:326px;top:601px;width:205px;height:25px;z-index:16;" />

                       <input type="hidden" id="roomId" name="roomId" value="<?php echo $roomId; ?>" />
                       <input type="hidden" id="checkInDate" name="checkInDate" value="<?php echo $checkInDate; ?>" />
                       <input type="hidden" id="checkOutDate" name="checkOutDate" value="<?php echo $checkOutDate; ?>"  />
                       <input type="hidden" id="noOfRoom" name="noOfRoom" value="<?php echo $noOfRoom; ?>"  />
                       <input type="hidden" id="noOfAdults" name="noOfAdults" value="<?php echo $noOfAdults; ?>"  />
                       <input type="hidden" id="noOfKids" name="noOfKids"  value="<?php echo $noOfKids; ?>"  />
                       <input type="hidden" id="addressId" name="addressId"  value="<?php echo $addressId; ?>"  />



        </form>
    </div>
    <marquee direction="left" scrolldelay="90" scrollamount="6" behavior="scroll" loop="0" style="position:absolute;left:0px;top:137px;width:1225px;height:38px;z-index:23;"
        id="Marquee1">
        <span style="color:#0000CD;font-family:Georgia;font-size:20px;">Welcome!!!</span>
    </marquee>
    <picture id="wb_Picture1" style="position:absolute;left:0px;top:0px;width:1227px;height:137px;z-index:24">
        <img src="images/images.jpg" id="Picture1" alt="" srcset="">
    </picture>

</body>

</html>


<?php
  mysqli_close($conn);

?>
