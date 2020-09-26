<?php
    include "db/conf.php";
    include "db/db.php";
    include "db/session.php";
    Session::checkSession();
    $db = new Database();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $id = $_POST["id"];
      $name = $_POST["name"];
      $desi = $_POST["desi"];
      $addr = $_POST["addr"];
      $phone = $_POST["phone"];
      $query = "INSERT INTO empl_info(`empl_id`, `empl_name`, `empl_desi`, `empl_addr`, `empl_phone`) VALUES ($id,'$name','$desi','$addr','$phone')";
      $result = $db->insert($query);
      if($result == true){
        header("Location:information.php?msg='Information insert successful.'");
      }else{
        header("Location:information.php?msg='Something is wrong! Please try again.'");
      }
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>information</title>
		<link rel="stylesheet" type="text/css" href="style1.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	
	</head>
	<body>
    <center>
      <h1 style="font-size: 50px;">Information</h1>

		<div class="main">
			
	
			<form method="post" action="information.php">
        <b>Id</b><br>
        <input type="text" name="id" required="1"><br>
          <b>Name</b><br>
        <input type="text" name="name" required="1"><br>
          <b>Designation</b><br>
        <input  type="text" name="desi" required="1"><br>
          <b>Address</b><br>
        <input type="text" name="addr" required="1"><br>
            <b>Phone</b><br>
        <input type="text" name="phone" required="1"><br>
        <button type="submit" class="light">Save</button><br><br>
      </form>

       <a href="view.php"> 
        
          View Information
        
      </a>
      <br><br>
      
      <br>
			<a href="index.php"><b>Back to Home</b></a>
	    </div>
    </center>
      <?php
        if(isset($_GET["msg"])){
          $msg = $_GET["msg"];
      ?>
      <script>
        window.alert(<?php echo $msg;?>);
        window.location = "information.php";
      </script>
      <?php
        }
      ?>
	</body>
</html>