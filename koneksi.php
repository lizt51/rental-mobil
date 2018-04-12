<?php
//error_reporting(0);

class KoneksiDatabase{
	
	private $db;
	private $host 		= "localhost";
	private $username 	= "root";
	private $password 	= "";
	private $database 	= "rentaldb";
	
	public function __construct(){
		$this->db = new mysqli(
						$this->host,
						$this->username,
						$this->password,
						$this->database
					);
		if($this->db->connect_errno > 0){
			exit(
				"ERROR CODE : ".$this->db->connect_errno."
				<br>MESSAGE : ".$this->db->connect_error
			);
		}
	}
	
	public function ambilSatu($strSQL){
		$result = $this->db->query($strSQL);
		if($result->num_rows > 0){
			return $result->fetch_assoc();
		}
		return null;
	}
	
	public function ambilBanyak($strSQL){
		$result = $this->db->query($strSQL);
		$data = array();
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				array_push($data,$row);
			}
		}
		return $data;
	}
	
	public function hapus($strSQL){
		$result = $this->db->query($strSQL);
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function tambah($strSQL){
		$result = $this->db->query($strSQL);
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function ubah($strSQL){
		$result = $this->db->query($strSQL);
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function lihatError(){
		return $this->db->error;
	}

}
	
?>