<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Race Calendar</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="calendar.css">
		<link rel="stylesheet" href="custom_1.css">
		<link rel="stylesheet" href="style.css">
		<script src="jquery.js"></script>
		<script src="jquery-migrate-1.2.1.js"></script>
		<script src="script.js"></script>
		<script src="superfish.js"></script>
		<script src="jquery.ui.totop.js"></script>
		<script src="jquery.equalheights.js"></script>
		<script src="jquery.mobilemenu.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="ie.css">
		<![endif]-->
	</head>
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="container_12">
					<div class="grid_12">
						<div class="socials">
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-google-plus"></a>
							<a href="#" class="fa fa-instagram"></a>
						</div>
						<h1>
							<a href="index.php">
								<img src="images/logo.png" alt="Your Happy Family">
							</a>
						</h1>
						<div class="menu_block ">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li><a href="index.php">Home</a></li>
									<li><a href="index-1.php">About  us</a></li>
									<li class="current"><a href="index-2.php">Race Calendar</a></li>
									<li><a href="index-3.php">Join Us Now</a></li>
									<li><a href="index-4.php">Contacts us</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</header>
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - April 21, 2014!</div>
				<div class="container_12">
					<div class="grid_12">
						<h3 class="h3__head1">Race Calendar</h3>
						<div class="custom-month-year">
							<div class="dateHolder">
								<span id="custom-month" class="custom-month"></span>
								<span id="custom-year" class="custom-year"></span>
							</div>
							<nav class="_nav">
								<span id="custom-prev" class="custom-prev"></span>
								<span id="custom-next" class="custom-next"></span>
							</nav>
						</div>
						<div id="calendar" class="fc-calendar-container"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
<footer>
	<div class="container_12">
		<div class="grid_12">
			<div class="f_logo">
				<a href="index.php"> Go Green Marathon</a>
			</div>
			<div class="f_contacts">
				<a href="#" class="mail_link"><span class="fa fa-envelope"></span>go green marathon</a>
				<div class="f_phone"><span class="fa fa-phone"></span>+1 900 559 76580</div>
			</div>
			<div class="copy">
				<span> lets run Marathon &copy; 2023| <a href="#"></a></span>
				designed by <a href="http://www.templatemonster.com/" rel="nofollow">Riya </a>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</footer>
<script src="js/jquery.countdown.js"></script>
<script src="js/cd_config.js"></script>
<script src="js/modernizr.custom.69142.js"></script>
<script type="text/javascript">
	Modernizr.load({
		test: Modernizr.csstransforms3d && Modernizr.csstransitions,
		yep : ['http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js','js/jquery.hoverfold.js'],
		nope: 'css/fallback.css',
		callback : function( url, result, key ) {
			if( url === 'js/jquery.hoverfold.js' ) {
				$( '#grid' ).hoverfold();
			}
		}
	});
</script>

		<script type="text/javascript" src="jquery.calendario.js"></script>
		<script type="text/javascript" src="data.js"></script>
		<script type="text/javascript">
			$(function() {
				var cal = $( '#calendar' ).calendario( {
					onDayClick : function( $el, $contentEl, dateProperties ) {
						for( var key in dateProperties ) {
							console.log( key + ' = ' + dateProperties[ key ] );
						}
					},
					caldata : codropsEvents
				} ),
				$month = $( '#custom-month' ).php( cal.getMonthName() ),
				$year = $( '#custom-year' ).php( cal.getYear() );
				$( '#custom-next' ).on( 'click', function() {
					cal.gotoNextMonth( updateMonthYear );
				} );
				$( '#custom-prev' ).on( 'click', function() {
					cal.gotoPreviousMonth( updateMonthYear );
				} );
				$( '#custom-current' ).on( 'click', function() {
					cal.gotoNow( updateMonthYear );
				} );
				function updateMonthYear() {
					$month.php( cal.getMonthName() );
					$year.php( cal.getYear() );
				}
			});
		</script>
	</body>
</html>