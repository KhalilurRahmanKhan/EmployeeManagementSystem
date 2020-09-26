<?php
    include "db/conf.php";
    include "db/db.php";
    include "db/session.php";
    Session::checkSession();
    $db = new Database();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      
      $empl_id = $_POST["empl_id"];
      $name = $_POST["name"];
      $date = $_POST["date"];
      $status = $_POST["status"];
     $query = "INSERT INTO attendence_report(`empl_id`,`name`, `date`, `status`) VALUES ('$empl_id','$name','$date','$status')"; 
      $result = $db->insert($query);
      if($result == true){
        header("Location:attendance.php?msg='Information insert successful.'");
      }else{
        header("Location:attendance.php?msg='Something is wrong! Please try again.'");
      }
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Attendance </title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      
      form{
        margin-top: 100px;
      }



    </style>
  </head>
  
  <body>
    <center>


    <div class="main">
     

  
      <form method="post" action="attendance.php">
         <b>Id</b><br>
        <input id="i" type="number" name="empl_id" required="1"><br><br>
          <b>Name</b><br>
        <input id="i" type="text" name="name" required="1"><br><br>
          <b>Date</b><br>
        <input id="i" type="date" name="date" required="1"><br><br>
        <b>Status</b><br>
        <select name="status">
              <option value="select">Select</option>
              <option value="present">Present</option>
              <option value="absent">Absent</option>
        </select><br><br>
         
          <br>

        <button type="submit">Save</button><br><br>
      </form>
      
      <br>
     
      <a href="attendance_report.php"><b>Attendance Report</b></a><br><br>
      <a href="index.php"><b>Back to Home</b></a>
      <br>
      <br>

      </div>
    </center>
      <?php
        if(isset($_GET["msg"])){
          $msg = $_GET["msg"];
      ?>
      <script>
        window.alert(<?php echo $msg;?>);
        window.location = "attendance.php";
      </script>
      <?php
        }
      ?>
  </body>
</html>