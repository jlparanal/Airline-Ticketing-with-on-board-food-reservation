<?php
class config{
public function db_connect(){
		$con=null;
	try{
		$dbNameServer ="mysql:dbname=airline2; host=localhost";
		$user = "root";
		$password = "";
		$op = array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
						 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
			$this->con = new PDO ($dbNameServer, $user, $password, $op);
			return $this->con;
		}catch(PDOException $e){
			echo "Connection error:".$e->getMessage();
			}
		}

public function close_con(){
			$this->con=null;
		}

public function addfood($food){
	try{
		$db=$this->db_connect();
		$qry="INSERT INTO frequency(dish)VALUES(?)";
		$stmt=$db->prepare ($qry);
		$stmt1=$stmt->execute([$food]);
			if ($stmt){
			$this->close_con();
			return true;
		}else{
			
			$this->close_con();
			return false;
		}
	}catch(PDOException $e){
	echo $e->getMessage();
	}
	}
}


