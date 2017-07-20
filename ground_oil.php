
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
		<img src="images/Groundnut Oil.jpg" height="250" width="300">
        <div class="zoom-icon ">
            <a class="picture" href="images/Groundnut Oil.jpg"  class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
            <a href="#"><i class="glyphicon glyphicon-menu-right icon"></i></a>
        </div>
    </div>
    </div>
	<p>Wood Pressed Groundnut Oil</p>


</div>

<div class="col-sm-6" style="margin-top:30px">

<h3>Making of Wood Pressed Groundnut Oil</h3>
<br>
        <p>Fresh Groundnut is Cleaned and then Sun dried. This drying process, however, seems to be important to the resulting taste and quality of the oil.</p>
        <ul>
            <li>This dried Groundnut is then placed into a Woodpress (Marachekku ) and pressed.</li>
            <li>This pressing yields oil with proteins.</li>
            <li> These Oil are allowed to “Settle” in settling tanks for 4 days.</li>
            <li>Oil is filtered & Packed, No Refinement Process & No Preservatives added</li>
        </ul>
</div>
<div class="col-sm-12">
	<div class="col-md-7 single-top-in">
		<div class="span_2_of_a1 simpleCart_shelfItem">

			<div class="price_single">
				<h3>1000 ML </h3>  <span class="reducedfrom item_price"> &#8377; 250.00</span>

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
				<h3>500 ML </h3> <span class="reducedfrom item_price"> &#8377; 130.00</span>

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
<h3>Benefits of Groundnut Oil:</h3>


<br>
        <p><b>Strengthen body:</b> Peanut oil is a very rich source of protein . It should be consumed in a moderate amount daily for building muscles and for body strengthening.</p><br>
        <p><b>Heart Health:</b> Rich in mono-unsaturated fatty acids (MUFA) that lower “bad cholesterol” and increase “good cholesterol” in the blood. This helps to prevent coronary artery disease and heart attacks by maintaining a healthy blood lipid profile.</p><br>
        <p><b>Blood flow:</b> Peanut oil contains linoleic acid which helps in Improving Blood Flow.</p><br>
        <p><b>High blood pressure:</b> Peanut oil contains monounsaturated fats that are useful to lower high blood pressure. This indirectly helps to reduce the risk of heart diseases.</p><br>
        <p><b>Stomach problems:</b> Peanut oil helps to prevent many disorders of the stomach. This is an excellent remedy to cure disorders like constipation, digestive problems, diarrhoea, etc.</p><br>
        <p><b>Skin & Hair care:</b>
            Many lotions and creams contain peanut oil.
            Peanut oil reduces protein loss, thickens the hair, adds moisture to split ends and regenerates damaged hair. It also reduces flaking of the scalp</p><br>
</div>
</div>
</div>
</div>
<?php include('common/footer.php'); ?>
</body>
</html>





