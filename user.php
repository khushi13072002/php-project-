<?php
include 'conn.php';
class put extends conne
{

function in()
{   
	if(isset($_POST['check']))
     {
	$username=$_POST['username'];
	$password=$_POST['password'];
	echo "khushu";
	$sql="INSERT into class1(username,password) values('$username','$password')";
	$query=mysqli_query($this->connection,$sql);
	header('location:display.php');
}
}
}
$p=new put();
$p->db_connect();
$p->in();

	?>


<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post" action="user.php">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="check"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>