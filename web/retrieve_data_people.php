<?php 
$con = mysql_connect("localhost","root","");
mysql_select_db('suggest', $con) or die("Could not connect to Server");
if(isset($_POST['string'])){
	$s = mysql_real_escape_string($_POST['string']);
	$query = "select * from autosuggession_searchbox where f_name like '%$s%' || l_name like '%$s%' || CONCAT(f_name, ' ',l_name) like '%$s%' order by ID limit 5";
	$res = mysql_query($query);
	if(mysql_num_rows($res)>0){
	while($row = mysql_fetch_object($res)){?>
	<a target="_blank" href="http://www.facebook.com/<?php echo $row->username;?>" onclick="fillme('<?php echo $row->f_name." ".$row->l_name;?>');">
		<div class="user_div">
			<img src="web/images/imgs/<?php echo $row->ID;?>.png" style="border-radius:5px;float:left;">
			<div class="name"><?php echo $row->f_name?> <?php echo $row->l_name;?></div><br><div class="cntry"><?php echo $row->country;?></div>
		</div>
	</a>
	<?php }
	}else{?>
	<div class="no_data"><center>Tidak Menemukan Orang Yang Dicari...</center></div>
	<?php }
}
?>
