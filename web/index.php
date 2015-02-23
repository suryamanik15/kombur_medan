<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
			
			function cekLogin(){
					var username = document.frm_login.username.value;
					var password = document.frm_login.password.value;
					
					if(username == ''){
						alert("Maaf, silahkan masukkan username anda !!");
						
					}else if(password == ''){
						alert("Maaf, password anda kosong !!");
					}else{
						document.frm_login.submit;
					}
				}
		</script>
<!---- start-smoth-scrolling---->
<!----- webfonts ------>
	<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic:400,100,600,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
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
				<a href="./"><span>KOMBUR MEDAN</span></a>
			</div>
			<!-- /logo -->
			<!-- top-nav -->
		<div class="top-nav">
			<span class="menu"> </span>
				<ul>
					<li class="active"><a href="./index">Beranda</a></li>
					<li><a href="./about">Tentang Kami</a></li>
					<li><a href="./projects">Info Medan</a></li>
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
		<!-- banner -->
			<div class="banner">
				<!-- banner-->
				 <div class="slider-caption">
					          	<h1>Selamat Datang, Segala Tentang Medan Ada Disini</h1>
					         	<div class="learn-button">
			          			<a class="slide-btn" href="./Registrasi">Registrasi</a>
			          		</div>
				 </div>
				 <!--//banner -->
					<div class="img-grids">
						 <h3>Login Aplikasi Kombur Medan</h3>       
						<div class="top-grids">
							<form class="form_details" method="POST" action="./Cek_Login" name="frm_login">
								<table border="0" cellspacing="4">
									<tr><td>Username</td>
										<td> : </td>
										<td><input type="text" name="username"/></td>
									</tr>
									<tr><td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
									<tr><td>Password</td>
										<td> : </td>
										<td><input type="password" name="password"/></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td colspan="2"><input type="submit" value="LOG IN" style="width:150px;" onclick="cekLogin()"/>
										&nbsp;&nbsp;
										<input type="reset" value="RESET" style="width:150px;"/></td>
									</tr>
								</table>
							</form>	
						</div>
						<div class="bottom-grids">
								<span></span>
						</div>
					 <div class="clearfix"> </div>
					</div>
				</div>
			<!-- slider -->
	<!----- //End-banner---->
	<!----- /start-services---->
			 <div id="services" class="Services">
	 			<div class="container">
	 					<div class="service-head">
	 						<h2>Apa Carik ??</h2>
							<h2>Tentukan Apa Yang Anda Inginkan</h2>
	 					</div>
		 			<div class="service-grids">
			 				<div class="col-md-3 service-grid">
			 					<i class="icon1"> </i>
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
								<p>&copy; 2014 By&nbsp;<a href="http://w3layouts.com">Bootstrap</a></p>
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