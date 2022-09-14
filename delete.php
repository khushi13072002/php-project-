<?php
include 'conn.php';
class delete extends conne
{
	function deleted()
	{
		$id=$_GET['id'];
$sql="delete from class1 where id=$id";
mysqli_query($this->connection,$sql);
header('location:display.php');
}
}

$dele=new delete();
$dele->db_connect();
$dele->deleted();
?>





