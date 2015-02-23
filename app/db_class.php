<?php
class APP_DB {

	var $host;
	var $username;
	var $dbName;
	var $password;
	var $con;
	
	function __construct($host, $user, $db, $pass){
		$this->host = $host;
		$this->username = $user;
		$this->dbName = $db;
		$this->password = $pass;
		
		//create connection
		$this->con = new mysqli($this->host, $this->username, $this->password, $this->dbName);
		
	}
	
	public function insertDataAccount($id, $nama, $email, $tgl, $tmp, $jenkel, $profpic, $reg_date){
		$statement = $this->con->prepare("INSERT INTO tbl_account(id_account,nama,email,tanggal_lahir,tempat_lahir,jenkel,
					profpic,reg_date) VALUES(?,?,?,?,?,?,?,?)");
		
		$statement->bind_param($id, $nama ,$email, $tgl ,$tmp ,$jenkel ,$profpic ,$reg_date);
		
		return $statement->execute();	
	}
	
	public function multi_query($query){
		return $this->con->multi_query($query);
	}
	
	public function updateAccount($id_account, $nama, $tgl_lahir, $tmp_lahir, $jenkel, $profpic, $reg_date){
		return $this->con->query("UPDATE tbl_account SET nama = '$nama', tanggal_lahir = '$tgl_lahir', tempat_lahir = '$tmp_lahir', 
							jenkel = '$jenkel', profpic = '$profpic', reg_date = '$reg_date' WHERE id_account = '$id_account'");
	}
	
	public function deleteAccount($id){
		return $this->con->query("DELETE FROM tbl_account WHERE id_account = '$id'");
	}
	
	public function executeQuery($query){
		return $this->con->query($query);
	}
	
	public function checkUserRows($query){
		$exec = $this->executeQuery($query) or die(mysql_error());
		return mysql_num_rows($exec);
	}
		
}