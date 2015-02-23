<?php
	// Validation Phase
	if($_POST['nama_lengkap'] == '' OR $_POST['tahun'] == '' OR $_POST['bulan'] == '' OR $_POST['tanggal'] == '' OR $_POST['email'] == '' 
	OR $_POST['tempat_lahir'] == '' OR $_POST['alamat_tinggal'] == '' OR $_POST['username'] == ''){
?>		
			<script>
				alert("ohh, maaf, registrasi gagal karena data tidak lengkap !!");
				document.location.href="./Registrasi";
			</script>
<?			
		exit;
	}else if($_POST['password'] != $_POST['password2']){
?>
		<script>
				alert("upss, maaf lae, konfirmasi password mu salah !!");
				document.location.href="./Registrasi";
		</script>
<?	
		exit;
	}
	
	// variabel POST
	$nama = $sub->sanitizeInput($_POST['nama_lengkap']);
	$tgl_lahir = $sub->sanitizeInput($_POST['tahun'])."-".$sub->sanitizeInput($_POST['bulan'])."-".$sub->sanitizeInput($_POST['tanggal']);
	$email = $sub->sanitizeInput($_POST['email']);
	$tempat_lahir = $sub->sanitizeInput($_POST['tempat_lahir']);
	$alamat = $sub->sanitizeInput($_POST['alamat_tinggal']);
	$username = $sub->sanitizeInput($_POST['username']);
	$jenkel = $sub->sanitizeInput($_POST['jenkel']);
	$pass = $sub->sanitizeInput($_POST['password']);
	$pass2 = $sub->sanitizeInput($_POST['password2']);
	
	// File Upload
	if($_FILES['profpic']['name'] != ''){
		$fname = $_FILES['profpic']['name'];
		$tmp = $_FILES['profpic']['tmp_name'];
		$type = $_FILES['profpic']['type'];
	}else{
?>
			<script>
				alert('Sorry!!, No File is Selected');
				document.location.href="./Registrasi";
			</script>
<?		
		exit;
	}
	
	$ext = "";
	// Determine the extension
	if($type == "image/jpeg" OR $type == "image/pjpeg"){
		$ext = ".jpg";
	}else if($type == "image/png"){
		$ext = ".png";
	}else if($type == "image/gif"){
		$ext = ".gif";
	}else{
		$ext = ".png";
	}
	
	$Account_ID = $sub->getAccountID();
	$reg_date = $sub->regdate();
	$id_user = $sub->getIdUser();
	$level = 3;
	// New File
	$img_name = $Account_ID . $ext;
	$new_dir = "./Data/profpic/". $img_name;
	
	$hash = md5($password);
	
	$SQL = "INSERT INTO tbl_account VALUES('$Account_ID','$nama','$email','$tgl_lahir','$tempat_lahir','$alamat', 
			'$jenkel','$img_name','$reg_date');";
	$SQL .= "INSERT INTO tbl_user VALUES('$id_user','$Account_ID','$username','$hash','$level','active');";
	
	$insert = $db->multi_query($SQL);
	
	if($insert){
?>
		<script>
			alert("Registrasi Sukses, Anda Sudah bisa login dengan \n username ataupun email anda.");
			document.location.href="./";
		</script>
<?		
	}else{
?>
		<script>
			alert("Maaf, Proses Registrasi gagal !!");
			document.location.href="./Registrasi";
		</script>
<?		
	}
	
	