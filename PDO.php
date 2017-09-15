<?php 
final class PDOMysql{
	private $db_type="mysql";
	private $db_host="localhost";
	private $db_port="3306";
	private $db_user="root";
	private $db_pass="123456";
	private $db_name="blog";
	private $charset="utf8";
	private $pdo;
	function __construct(){
		$dsn="{$this->db_type}:host={$this->db_host};dbname={$this->db_name};charset={$this->charset}";
		$this->pdo=new PDO($dsn,$this->db_user,$this->db_pass);
	}
	function fetchAll($sql){
		$res=$this->pdo->query($sql);
		$row=$res->fetchAll(PDO::FETCH_ASSOC);
		return $row;
	}
}
$pdo=new PDOMysql;
$sql="select *from links";
$row=$pdo->fetchAll($sql);
	echo "<pre>";
	print_r($row);
	echo "</pre>";
	echo "<hr>";
?>
