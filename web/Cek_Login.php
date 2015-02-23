<?php
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$SQL = "SELECT * FROM tbl_user WHERE username = '$username' AND password = MD5('$password')";
	
	$otentik = $db->checkUserRows($SQL);
	
	if($otentik == 1){
		//start session
		session_start();
		$fq = mysql_query($SQL) or die(mysql_error());
		$fetch = mysql_fetch_array($fq);
	
		//create session Variables
		$_SESSION['username'] = $fetch['username'];
		$_SESSION['id_account'] = $fetch['id_account'];
		$_SESSION['level'] = $fetch['level_user'];
		$_SESSION['status'] = $fetch['status'];
?>
		<script>
			document.location.href="./";
		</script>
<?		
	}else{
?>
		<script>
			alert("Maaf, login ke aplikasi gagal !!");
			document.location.href="./";
		</script>
<?		
	}
