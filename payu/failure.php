<!DOCTYPE html>
<html>
<head>
<title>Ably Shop A Ecommerce Category Flat Bootstrap Responsive Website| Checkout</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="../css/style4.css" rel="stylesheet" type="text/css" media="all" />	

<!--//theme-style-->
<script src="../js/jquery.min.js"></script>
<!--- start-rate---->

</head>

<body>
<!--header-->

<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a style="color:orange;font-size:20px;" href="../index.php">AblyShop</a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
						<li><a href="../login.php"></a></li>
						<li><a href="../register.php"></a></li>
						<li><a href="../checkout.php"></a></li>
					</ul>
				</div>
				</div>
</div>

<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];

$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="tjjGJx1GjP";

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
	else {	  

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
		 $hash = hash("sha512", $retHashSeq);
  
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   }
	   else {
		?>
		<div style="margin:100px;">
		<?php
         echo "<h3>Your order status is ". $status .".</h3><br><br>";
         echo "<h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";
        
	 
		 } 
?>
<!--Please enter your website homepagge URL -->
<br><br>
<p><a href=http://localhost/web class="btn btn-info btn-md"> Try Again</a></p>
</div>
</body>
</html>
