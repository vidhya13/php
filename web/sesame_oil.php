
<?php include('common/header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ably Shop A Ecommerce Category Flat Bootstrap Responsive Website| Checkout</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--theme-style-->
	<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<script src="js/jquery.min.js"></script>
	<!--- start-rate---->
	<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
	<script type="text/javascript">
		jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
				starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
				}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
						var val = Math.random();
						starbox.next().text(' '+val);
						return val;
					}
				})
			});
		});
	</script>
	<!---//End-rate---->
	<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        ul {
            padding-left:20px;
        }
        .cont{
            background-color: #DEDEDE;
            padding:15px;
        }
        .ben {
            margin-top:50px;
            background-color: #e3e3e3;
        }
    </style>
</head>

<body>
<div class="cont">
<div class="container">
<div class="row">


<div class="col-sm-4">
    <div class=" mid-pop">
    <div class="pro-img">
		<img src="images/oil.jpg" height="250" width="300">
        <div class="zoom-icon ">
            <a class="picture" href="images/oil.jpg"  class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
            <a href="#"><i class="glyphicon glyphicon-menu-right icon"></i></a>
        </div>
    </div>
    </div>
	<p>Wood Pressed Sesame Oil</p>


</div>

<div class="col-sm-6" style="margin-top:30px">

<h3>Making of Wood Pressed Sesame Oil</h3><br>

<p>Fresh Sesame Seeds are Cleaned and then Sun dried. This drying process, however, seems to be important to the resulting taste and quality of the oil.</p>
		<ul>
			<li>This dried Sesame Seeds is then placed into a Woodpress (Marachekku ) and pressed with Palm Jaggery ( Panai Karuppatti ) .</li>
			<li>This pressing yields oil with proteins.</li>
			<li>These Oil are allowed to “Settle” in settling tanks for 4 days.</li>
			<li>Oil is filtered & Packed , No Refinement Process & No Preservatives added.</li>
		</ul>
</div>
<div class="col-sm-12">
	<div class="col-md-7 single-top-in">
		<div class="span_2_of_a1 simpleCart_shelfItem">

			<div class="price_single">
				<h3>1000 ML </h3>  <span class="reducedfrom item_price"> &#8377; 280.00</span>

				<div class="clearfix"></div>
			</div>

			<div class="quantity">
				<div class="quantity-select">
					<div class="entry value-minus">&nbsp;</div>
					<div class="entry value"><span>1</span></div>
					<div class="entry value-plus active">&nbsp;</div>
				</div>
			</div>

			<script>
				$('.value-plus').on('click', function(){
					var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
					divUpd.text(newVal);
				});

				$('.value-minus').on('click', function(){
					var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
					if(newVal>=1) divUpd.text(newVal);
				});
			</script>


			<a href="#" class="add-to item_add hvr-skew-backward">Add to cart</a>
			<div class="clearfix"> </div>
		</div>

	</div>
	<div class="col-md-7 single-top-in">
		<div class="span_2_of_a1 simpleCart_shelfItem">

			<div class="price_single">
				<h3>500 ML </h3> <span class="reducedfrom item_price"> &#8377; 150.00</span>

				<div class="clearfix"></div>
			</div>


			<div class="quantity">
				<div class="quantity-select">
					<div class="entry value-minus">&nbsp;</div>
					<div class="entry value"><span>1</span></div>
					<div class="entry value-plus active">&nbsp;</div>
				</div>
			</div>

			<script>
				$('.value-plus').on('click', function(){
					var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
					divUpd.text(newVal);
				});

				$('.value-minus').on('click', function(){
					var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
					if(newVal>=1) divUpd.text(newVal);
				});
			</script>

			<a href="#" class="add-to item_add hvr-skew-backward">Add to cart</a>
			<div class="clearfix"> </div>
		</div>

	</div>
</div>
</div>
<div class="row ben" style="padding-top:10px">
    <div class="col-sm-12">
<h3>Benefits of Sesame Oil:</h3>
<br>

		<p><b>Hair Benefits:</b> Sesame seed oil is full of the nutrients needed for a healthy scalp and hair.</p><br>
		<p><b>Prevents Cancer:</b> Sesame seeds contain anti-cancer compounds including phytic acid, magnesium, and phytosterols. Sesame seeds have the highest phytosterol content of all seeds and nuts.</p><br>
		<p><b>Relieves Arthritis:</b> The high copper content in sesame seeds prevents and relieves arthritis, and strengthens bones, joints and blood vessels.</p><br>
		<p><b>Protects Your Liver from Alcohol:</b> Sesame helps protect you from alcohol’s impact on your liver, helping you maintain healthy liver function.</p><br>
		<p><b>Prevents Wrinkles:</b> Sesame seed oil prevents harmful ultraviolet rays of the sun from damaging your skin, preventing the appearance of wrinkles and pigmentation.</p><br>
		<p><b>Good for Oral Health:</b> Oil pulling has been used for oral health for thousands of years in Ayurveda to reduce dental plaque, whiten your teeth, and boost Oral health.</p><br>
		<p><b>Good for Respiratory Health:</b> The magnesium in sesame seeds helps prevent respiratory disorders by preventing airway spasm and asthma.</p><br>
		<p><b>Helps Prevent Diabetes:</b> Sesame seeds contain magnesium and other nutrients. Sesame oil has been shown to prevent diabetes, and it can also improve plasma glucose in hypersensitive diabetics.</p><br>
		<p><b>Reduces Blood Pressure:</b> Sesame oil lowers blood pressure in diabetics. Sesame seeds are full of magnesium – a key nutrient known to help lower blood pressure.</p><br>
</div>
</div>
</div>
</div>
<?php include('common/footer.php'); ?>
</body>
</html>


