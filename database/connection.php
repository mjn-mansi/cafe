<?php 

class Connection {
	/*private $server = 'localhost';
	private $username = 'root';
	private $password = '';
	private $dbName = 'cafe';
	public $conn;*/
	
	private $server = 'sql6.freemysqlhosting.net';
	private $username = 'sql6465154';
	private $password = 'NpbLpiejYF';
	private $dbName = 'sql6465154';
	public $conn;


	public function connect(){
		$this->conn = mysqli_connect($this->server, $this->username, $this->password, $this->dbName);
		return $this->conn;
	}
}
