<?php

//sanitize form inputs from users 
$sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);

//Collect user's inputs from the form into regular variable
$price = $sanitizer ['ticket'];
$mydate = $sanitizer ['set_date'];
$mytime = $sanitizer ['set_time'];
$myname = $sanitizer['myname'];
$email = $sanitizer['email'];
$phone = $sanitizer['phone'];
$product_name = "OSAMEDE THE PLAY";

if(empty($price) OR empty($mydate) OR empty($mytime) OR empty($myname) OR empty($email)){
  
 header("Location: ticket.html?error");

}else{
   session_start();
   $_SESSION['ticket']= $price;
   $_SESSION['set_date']= $mydate;
   $_SESSION['set_time']= $mytime;
   $_SESSION['myname'] = $myname;
   $_SESSION['email'] = $email;
   $_SESSION['phone'] = $phone;
   $_SESSION ["product_name"] = $product_name;

}
 
 ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment</title>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Nunito:wght@200;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
    
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
                    <li><a  href="index.html"  class="cool-link">HOME </a></li>
                    <li><a  href="thestageplay.html"  class="cool-link">THE STAGE PLAY</a></li>
                    <li><a  href="lilian.html"  class="cool-link">ABOUT</a>              
                        <ul class="olubiul2">
                            <li><a class="cast" href="lilian.html">EXECUTIVE PRODUCER</a></li> 
                            <li ><a  class="cast"href="olatunde.html">CO-EXECUTIVE PRODUCER</a></li> 
                            <li ><a class="cast" href="crew2.html">DIRECTOR/PRODUCER</a></li> 
                           <li><a class="cast"  href="gold.html">GOLD LILIES</a></li> 
                             </ul></li>
                    <li><a  href="ticket.html"  class="cool-link"> GET TICKET</a></li>
                    <li><a  href="cast.html"  class="cool-link"> CAST</a></li>
                     </ul>
                </nav>
                <div class="two"></div>
            </header>
                <div class="moveticket">
             <img class="logo2" src="./images/Osamede_Logo.png" alt="" >




 <form class="bigdiv">
<h3 class="regular">NAME:<?php echo $myname; ?></h3>
<h3 class="regular">TICKET:<?php echo $price; ?> </h3>
<h3 class="regular">DATE:<?php echo $mydate; ?> </h3>
<h3 class="regular">TIME:<?php echo $mytime; ?> </h3>
<h3 class="regular">EMAIL:<?php echo $email; ?> </h3>
<h3 class="regular">PHONE NO:<?php echo $phone; ?> </h3>
<h3 class="regular"><?php echo $product_name; ?> </h3>
<form >
<script src="https://js.paystack.co/v1/inline.js"></script></script>
  <button  type="button" onclick="payWithPaystack()"  class="paystack"> Pay </button> 
</form>
 
<script>
  function payWithPaystack(){
      const api = 'pk_live_d46b560de5f1bc423ccb181c72b3a23e772c624a';
    var handler = PaystackPop.setup({
      key: api,
      email: '<?php echo $email; ?>',
      amount: <?php echo $price; ?>,
     currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      firstname: '<?php echo $myname; ?>',
      phone: '<?php echo $phone; ?>',
   
      metadata: {
         custom_fields: [
            {
                display_name: "<?php echo $myname; ?>", 
                variable_name: "<?php echo $email; ?>",
                value: "<?php echo $phone; ?>",  
            }
         ]
      },
      callback: function(response){
       const referenced = response.reference;
       window.location.href='success.php?paymentsuccessful='+referenced;  
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>

                    </form>
                    <div class="royals">
                                <img class="queen3" src="./images/Queen_Benin.png" alt="">
                            </div>
                            <footer class="bottom">
                                 <div class="footerdiv2" style="text-align: center;padding-right:30px ;padding-left: 30px; padding-top: 30px;">

<a href="https://www.instagram.com/osamedetheplay/"><i class="fa fa-instagram" style="font-size:24px; color:#fff; margin-right: 20px; margin-top: -5px; margin-left: 50px;"></i></a>
<i class="fa fa-phone" style="font-size:16px; color:#fff; margin-right: 20px;margin-left: 20px;">+2348023130872</i>
<i class="fas fa-location" style="font-size:16px; color:#fff;  margin-left: 20px; margin-right: 20px;">Lekki,Lagos Nigeria</i>  
<i class="fa fa-copyright" style="font-size:16px; color:#fff;margin-left: 20px;  ">2021 Osamede Allrightreserved</i>


</div>
</footer> 
                     
                            </footer> 
                        </div>
            



          
                        <script src="./script.js"></script>
        
    </body>
</body>
</html>