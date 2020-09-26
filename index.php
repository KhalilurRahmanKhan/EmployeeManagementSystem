<?php
	include "db/conf.php";
	include "db/db.php";
	include "db/session.php";
	Session::checkSession();
	if(isset($_GET["logout"])){
		Session::destroy();
	}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>index</title>
  <link rel="stylesheet" href="./style1.css">


</head>
<center>
<body>

<h1 style="font-size: 50px;">B-EXPRESS WEAR</h1>
<a href="information.php"> 
<button >
  Add Information
</button>
<br>
</a>
<a href="attendance.php"> 
<button >
  Attendence
</button>
</a>
<br>
<a href="salary.html"> 
  <button >
  Salary 
</button>
</a>
<br><br><br><br>

<a href="index.php?logout" style=" font-size: 30px;" > 

  Log out 
</a>
</center>

</body>
</html>