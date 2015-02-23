<!DOCTYPE HTML>
<html>
<head>
<title>KOMBUR :: MEDAN</title>
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="web/js/jquery.min.js"></script>
<script src="web/js/jquery-1.7.2.js"></script>
<script src="web/js/jquery.validate.js"></script>
<script>
	$(document).ready(function(){
			$("#form_registrasi").validate({
							'rules' : {
								'nama_lengkap' : 'required',
								'email' : {
										'required' : true,
										'email' : true
									},
								'tempat_lahir' : 'required',
								'alamat_tinggal' : 'required',
								'username' : {
										'required' : true,
										'minlength' : 10
									}
								}
						});
						
			$("#username").keyup(function(){
				var msg = $(this).val();
				alert(msg);
			});	
	});
</script>
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
				<a href="./">KOMBUR MEDAN</a>
			</div>
			<!-- /logo -->
			<!-- top-nav -->
		<div class="top-nav">
			<span class="menu"> </span>
				<ul>
					<li><a href="./index">Beranda</a></li>
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
			 				<h3>Registrasi User</h3>
			 				<p><a href="./">Beranda</a> / REGISTRASI</p>
			 			</div>
			 	<div class="contact_top">
			 		<div class="container">
					       <div class="col-md-8 contact_left">
							  <form method="post" action="./Submit_Register" id="form_registrasi" name="frm_register">
								 <div class="form_details">
					               <table border="0" cellspacing="3">  
										<tr>
											<td>Nama Lengkap</td><td>&nbsp;&nbsp;</td>
											<td class="msg"> <input type="text" class="text" name="nama_lengkap" placeholder="Nama Lengkap">
											</td>
										</tr>
										<tr>
											<td>Tanggal Lahir</td><td> </td>
											<td><select name="tanggal" style="width:120px;">
													<option value='' selected="selected">===Tanggal===</option>
													<?
														for($d = 1; $d <= 31; $d++){
															if($d < 10){
																$val = "0".$d;
																echo "<option value=\"$val\">$val</option>";
															}else{
																echo "<option value=\"$d\">$d</option>";
															}
														}
													?>
												</select>&nbsp;
												<select name="bulan" style="width:120px;">
													<option value='' selected="selected">====Bulan===</option>
													<?
														for($m = 1; $m <= 12; $m++){
															if($m < 10){
																$val = "0".$m;
																echo "<option value=\"$val\">$val</option>";
															}else{
																echo "<option value=\"$m\">$m</option>";
															}	
														}
													?>
												</select>&nbsp;
												<select name="tahun" style="width:120px;">
													<option value='' selected="selected">====Tahun===</option>
													<?
														for($t = 1970; $t <= date('Y'); $t++){
															echo "<option value=\"$t\">$t</option>";
														}
													?>
												</select>&nbsp;
											</td>
										</tr>
										<tr><td>Alamat Email</td><td>&nbsp;&nbsp;</td>
											<td class="msg"><input type="text" class="text" name="email" placeholder="Email Anda"></td>
										</tr>
										<tr><td>Tempat Lahir</td><td>&nbsp;&nbsp;</td>
											<td class="msg"><input type="text" class="text" name="tempat_lahir" placeholder="Tempat Lahir"></td>
										</tr>
										<tr><td>Alamat Tinggal</td><td>&nbsp;&nbsp;</td>
											<td class="msg"><input type="text" class="text" name="alamat_tinggal" placeholder="Alamat Tinggal"></td>
										</tr>
										<tr><td>Gender</td><td>&nbsp;&nbsp;</td>
											<td><select name="jenkel" class="text">
													<option value='' selected="selected">===Pilih Gender==</option>
													<option value="Pria">Pria</option>
													<option value="Wanita">Wanita</option>
												</select>
											</td>
										</tr><br/>
										<tr><td>Upload Foto Profil</td><td>&nbsp;&nbsp;</td>
											<td><input type="file" class="text" name="profpic" value="Upload Foto"></input></td>
										</tr>
										<tr><td>Username</td><td>&nbsp;&nbsp;</td>
											<td class="msg"><input type="text" id="username" class="text" name="username" placeholder="Username"></td>
										</tr>
										<tr><td>Password</td><td>&nbsp;&nbsp;</td>
											<td><input type="password" id="password" class="text" name="password" placeholder="Masukkan Password"></td>
										</tr>
										<tr><td>Konfirmasi Password</td><td>&nbsp;&nbsp;</td>
											<td><input type="password" class="text" name="password2" placeholder="Konfirmasi Password Anda"></td>
										</tr>
										<tr>
											<td colspan="3"><input name="submit" type="submit" value="Submit" onclick="check()"></td>
										</tr>	
									</table> 
						          </div>
						       </form>
					        </div>
					        <div class="col-md-4 company-right">
					        	<div class="company_ad">
							     		<h3>Alamat Tim :</h3>
			      						<address>
											 <p>Jl.Universitas No.3 Kampus USU, Padang Bulan</p>
											 <p>Medan, Sumatera Utara</p>
									   		<p>Telepone : 087868354751</p>
									   		<p>Website : it.usu.ac.id</p>
									 	 	
							   			</address>
							   		</div>
							   		<div class="contact-icons">
						    			<h3>Follow Kami Di:</h3>
										<ul>
											<li><a class="twitter" href="#"><span> </span></a></li>
											<li><a class="fb" href="#"><span> </span></a></li>
											<li><a class="pin" href="#"><span> </span></a></li>
											<li><a class="gg" href="#"><span> </span></a></li>
											<div class="clearfix"> </div>
										</ul>
									</div>
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
			 					<a href="./"><i class="icon1" ></i>
			 					<h3>Situs Favorit</h3></a>
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
						<div style="float:left;color:white;">
							<p>
								<a href="./Find_People">Find People</a>
							</p>
						</div>
						<div class="copy-right">
							<p>&copy; 2014 by &nbsp;<a href="">Bootstrap</a></p>
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