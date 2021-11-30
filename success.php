<?php
include_once("db.php");
session_start();
    if(!$_GET["paymentsuccessful"]){
     header("Location:ticket.html");
     //exit;
    }else{
$reference = $_GET["paymentsuccessful"];
}
$myname = $_SESSION["myname"];
$email = $_SESSION["email"];
$phone = $_SESSION["phone"];
$product_name = $_SESSION["product_name"];
$price = $_SESSION["ticket"];
$mydate = $_SESSION["set_date"];
$mytime = $_SESSION["set_time"];

//Insert into database
$sql  = " INSERT INTO Osamede(myname, email, phone, product_name, ticket, set_date, set_time, reference)
VALUES(:myname, :email, :phone, :product_name, :price, :mydate, :mytime, :reference)";
if($stmt =$pdo->prepare($sql)){
    //Bind parameters 
   $stmt->bindParam(':myname',$myname, PDO::PARAM_STR);
   $stmt->bindParam(':email', $email,  PDO::PARAM_STR);
   $stmt->bindParam(':phone', $phone,  PDO::PARAM_STR);
   $stmt->bindParam(':product_name', $product_name, PDO::PARAM_STR);
   $stmt->bindParam(':price', $price,  PDO::PARAM_STR);
   $stmt->bindParam(':mydate',$mydate, PDO::PARAM_STR);
   $stmt->bindParam(':mytime',$mytime, PDO::PARAM_STR);
   $stmt->bindParam(':reference',$reference, PDO::PARAM_STR);
  //Attempt to execute
   if($stmt->execute()){
    echo"<script>alert('Your payment went through!')</script>";
    //Prevent resubmission
    session_unset();
    session_destroy();
 }else{
  die("Sorry, something went wrong!");
}
 unset($stmt);
 //close connection
 unset($pdo);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Successful</title>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Nunito:wght@200;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
     <link rel="stylesheet" href="./phone.css">
        <link rel="stylesheet" href="./aboutli.css">
        <link rel="stylesheet" href="./about.css">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./ipad.css">
        <link rel="stylesheet" href="popup.css">
        <script defer src="./node_modules//swup/dist/swup.min.js"></script>
        
       
    </head>  
<body>
    <body>
        
         <div id="parent">

     
    <header class="header">
        <div class="one"></div>
             <nav class="navbar2">
  
                <div class="hamburger">
                <div class="menu"></div>
                <div class="menu"></div>
                <div class="menu"></div>
                
                </div>
                <ul class="nav-links ">
                    <li><a  href="index.html" onclick="slideIn('home');" class="cool-link">HOME </a></li>
                    <li><a  href="thestageplay.html"  onclick="slideIn('stageplay');" class="cool-link">THE STAGE PLAY</a></li>
                    <li><a  href="lilian.html"  onclick="slideIn('stageplay');" class="cool-link">ABOUT</a>              
                        <ul class="olubiul2">
                            <li><a class="cast" href="lilian.html">EXECUTIVE PRODUCER</a></li> 
                            <li ><a  class="cast"href="olatunde.html">CO-EXECUTIVE PRODUCER</a></li> 
                            <li ><a class="cast" href="crew2.html">DIRECTOR/PRODUCER</a></li> 
                           <li><a class="cast"  href="gold.html">GOLD LILIES</a></li> 
                             </ul></li>
                    <li><a  href="ticket.html" onclick="slideIn('ticket');"  class="cool-link"> GET TICKET</a></li>
                    <li><a  href="cast.html" onclick="slideIn('cast');"  class="cool-link"> CAST</a></li>
                     </ul>
                </nav>
                <div class="two"></div>
            </header>
                <div class="moveticket">
             <img class="logo2" src="./images/Osamede_Logo.png" alt="" >
                    <table class="bigdiv">

                    
                      <tr>
                          <th>Payment Summary</th>
                      </tr>

                      <tr>
                          <td>Name: <?php echo $myname; ?></td>
                      </tr>
                      
                      <tr>
                          <td>Email:<?php echo $email; ?></td>
                      </tr>
 

                      <tr>
                          <td>Ticket:<?php echo $phone ?></td>
                      </tr>
                      <tr>
                          <td>Ticket:<?php echo $product_name; ?></td>
                      </tr>
                      <tr>
                          <td>Price: <?php echo $price; ?> </td>
                      </tr>
                      <tr>
                          <td>Date: <?php echo $mydate ?> </td>
                      </tr>
                      <tr>
                          <td>Time: <?php echo $mytime; ?> </td>
                      </tr>

                      <tr>
                          <td>Reference Code: <?php echo $reference; ?></td>
                      </tr>

                      <tr>
                          <td><a href ="#">DOwnload Now!</a></td>
                      </tr>
</table>
                            <div class="royals">
                                <img class="queen3" src="./images/Queen_Benin.png" alt="">
                            </div>
                            <footer class="bottom">
                                <div class="footerdiv">
                                    <a href="https://www.instagram.com/osamedetheplay/"><i class="fa fa-instagram" style="font-size:24px; color:#fff; margin-right: 20px; margin-top: -5px; "></i></a>
                                    <i class="fa fa-phone" style="font-size:16px; color:#fff; margin-right: 20px;margin-left: 20px;">+2348023130872</i>
                                    <i class="fas fa-location" style="font-size:16px; color:#fff;  margin-left: 20px; margin-right: 20px;">Lekki,Lagos Nigeria</i>
                                   <a href="info@osamedetheplay.com" style="text-decoration: none;"><i class="fas fa-info" style="font-size:16px;color:#fff; margin-left: 20px; margin-right: 20px; ">info@osamedetheplay.com</i></a>    
                                    <i class="fa fa-copyright" style="font-size:16px; color:#fff;margin-left: 20px;  ">2021 OSAMEDE All right reserved</i>
                    
                                </div>
                            </footer> 
                        </div>
            



          
                        <script src="./script.js"></script>
        
    </body>
</body>
</html>