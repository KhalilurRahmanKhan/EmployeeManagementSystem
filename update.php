<?php
    include "db/conf.php";
    include "db/db.php";
    $db = new Database;
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        header("Location:view.php");
    }

    if(isset($_GET["update"])){
        $id = $_GET["id"];
        $user_id = $_GET["user_id"];
        $name = $_GET["name"];
        $desi = $_GET["desi"];
        $addr = $_GET["addr"];
        $phone = $_GET["phone"];
        $query = "UPDATE `empl_info` SET `empl_id`=$user_id,`empl_name`='$name',`empl_desi`='$desi',`empl_addr`='$addr',`empl_phone`=$phone WHERE id = $id";
        $update = $db->update($query);
        if($update){
            header("Location:view.php?msg='Information update successful.'");
        }else{
            header("Location:view.php?msg='Something is wrong! Please try again.'");
        }
    }
?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style1.css">
<style>
pre{
text-align:center;
}
body{
            background-color: lightblue;
            background-position: center;
            background-size: cover;
            height: 100vh;
            align-content: center;
            margin:0;
            padding:0;
            font-size: 16px;
        }

</style>
</head>
<body>


<pre>
    
<form action="update.php" method="GET">
<?php
    if($id){
        $query = "SELECT * FROM empl_info WHERE id = $id";
        $select = $db->select($query);
        if($select){
            while($row = $select->fetch_assoc()){
?>
<input type="hidden" name="id" value="<?php echo $row["id"]?>">
<b>ID:</b>
<input type="text" name="user_id" value="<?php echo $row["empl_id"]?>"><br>
<b>Name:</b>
<input type="text" name="name" value="<?php echo $row["empl_name"]?>"><br><br>
<b>Designation:</b>
<input type="text" name="desi" value="<?php echo $row["empl_desi"]?>"><br><br>
<b>Address:</b>
<input type="text" name="addr" value="<?php echo $row["empl_addr"]?>"><br><br>
<b>Phone:</b>
<input type="text" name="phone" value="<?php echo $row["empl_phone"]?>"><br>

<?php
            }
        }
    }
?>
<button type="submit" name="update" value="Update">Update</button>
</form>
<center><a href="index.php"><b>Back to Home</b></a></center>
</pre>

</body>
</html>