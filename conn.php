<?php
class conne
{
	public $connection;
	public function db_connect()
	{
		
$this->connection=mysqli_connect('localhost','root','','class');
if(mysqli_connect_error())
{
	die("conenction failed");
}
}
}
$ab=new conne();
$ab->db_connect();
?>