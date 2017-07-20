

<?php include('common/header.php'); ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Register</h1>
		<em></em>
		<h2><a href="index.php">Home</a><label>/</label>Register</a></h2>
	</div>
</div>
<!--login-->
<div class="container">
		<div class="login">
			<form>
			<div class="col-md-6 login-do">
			<div class="login-mail">
					<input type="text" placeholder="Name" required="">
					<i  class="glyphicon glyphicon-user"></i>
				</div>
				<div class="login-mail">
					<input type="text" placeholder="Phone Number" required="">
					<i  class="glyphicon glyphicon-phone"></i>
				</div>
				<div class="login-mail">
					<input type="text" placeholder="Email" required="">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" required="">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					   </a>
				<label class="hvr-skew-backward">
					<input type="submit" value="Submit">
				</label>
			
			</div>
			<div class="col-md-6 login-right">
				 <h3>Completely Free Account</h3>
				 
				 <p>Welcome to Ably Shop</p>
				<a href="login.php" class="hvr-skew-backward">Login</a>

			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>

</div>

<!--//login-->

		<!--brand-->
		<div class="container">
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="images/ic.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic3.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<!--//brand-->
			</div>
			
		</div>
	<!--//content-->
	<div class="footer">
	<div class="footer-middle">
				<div class="container">
					<div class="col-md-3 footer-middle-in">
						<a href="index.php"><img src="" alt="">AblyShop</a>
						<p>We deliver valuable products</p>
					</div>
					
					<div class="col-md-3 footer-middle-in">
						<h6>Information</h6>
						<ul class=" in">
							<li><a href="404.php">About</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="contact.php">Site Map</a></li>
						</ul>
						<ul class="in in1">
							<li><a href="#">Order History</a></li>
							<li><a href="wishlist.php">Wish List</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Tags</h6>
						<ul class="tag-in">
							<li><a href="#">Computers</a></li>
							<li><a href="#">Laptops</a></li>
							<li><a href="#">Watches</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Books</a></li>
							<li><a href="#">Shoes</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Newsletter</h6>
						<span>Sign up for News Letter</span>
							<form>
								<input type="text" value="Enter your E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter your E-mail';}">
								<input type="submit" value="Subscribe">	
							</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
<?php include('common/footer.php'); ?>


</body>
</html>