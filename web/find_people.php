<!DOCTYPE HTML>
<html>
<head>
<title>KOMBUR :: MEDAN</title>
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="web/js/jquery.min.js"></script>
 <!-- Custom Theme files -->
<link href="web/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
 <!---- start-smoth-scrolling---->
<script type="text/javascript" src="web/js/move-top.js"></script>
<script type="text/javascript" src="web/js/easing.js"></script>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
<!----- webfonts ------>
	<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic:400,100,600,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!----- webfonts ------>
<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
	<!----//End-top-nav-script---->
</head>
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<!-- logo -->
			<div class="logo">
				<a href="./">Kombur Medan</a>
			</div>
			<!-- /logo -->
			<!-- top-nav -->
		<div class="top-nav">
			<span class="menu"> </span>
				<ul>
					<li><a href="./index">Home</a></li>
					<li><a href="./about">Tentang Kami</a></li>
					<li><a href="./projects">Projects</a></li>
					<li><a href="./contact">Kontak Kami</a></li>
						<div class="clearfix"> </div>
				</ul>
		</div>
		<!-- script-for-nav -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(1000);
						});
					});
				</script>
		<!-- script-for-nav -->
		<!-- /top-nav -->
			<div class="clearfix"> </div>
		</div>
		<!-- /header -->
	</div>
	<!----- //End-banner---->
		<!----- /start-about---->
			 <div id="contact" class="Contact">
			 	<div class="contact-section">
			 			<div class="contact-head">
			 				<h3>Temukan Orang Lain</h3>
			 				<p><a href="./">Home</a> / Find People</p>
			 			</div>
			 	<div class="contact_top">
			 		<div class="container">
					       <div class="contact-bottom">
								 <?
								include "search_people.php";
							  ?>
							 
							</div>
					</div>	
				</div>
					</div>
				</div>
	<!----- /start-services---->
			 <div id="services" class="services">
	 			<div class="container">
	 					<div class="contact-bottom">
	 						<h2>Apa Carik ??</h2>
							<h2>Tentukan Apa Yang Anda Inginkan</h2>
	 					</div>
		 			<div class="service-grids">
			 				<div class="col-md-3 service-grid">
			 					<i class="icon1" target="./"> </i>
			 					<h3>Situs Favorit</h3>
			 				</div>
			 					<div class="col-md-3 service-grid">
			 					<i class="icon2"> </i>
			 					<h3>Tempat Shopping Favorit</h3>
			 				</div>
			 				<div class="col-md-3 service-grid">
			 					<i class="icon3"> </i>
			 					<h3>Photography</h3>
			 				</div>
			 				<div class="col-md-3 service-grid">
			 					<i class="icon4"> </i>
			 					<h3>Tempat Nyaman</h3>
			 				</div>
		 				<div class="clearfix"> </div>
		 			</div>
	 			</div>
			 </div>
	<!----- //End-services---->
		<!----- /start-footer---->
				<div class="footer">
					<div class="container">
						<div class="copy-right">
							<p>&copy; 2014 Template by &nbsp;<a href="http://w3layouts.com">W3Layouts</a></p>
						</div>
						</div>								
					</div>
					<!----- //End-footer---->
							<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
					<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>