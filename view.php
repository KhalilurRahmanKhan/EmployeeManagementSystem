<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>view</title>
    <style>
        body{
            color: darkgreen;
            align-content: center;
            margin:0;
            padding:0;

        }
        table {
  border-collapse: collapse;
  width: 100%;

}

th, td {
  text-align: center;
  padding: 8px;
  font-size: 15px;
}

tr:nth-child(even){
    background-color: aliceblue;
    color:black;
    }

th {
  background-color: maroon;
  color: white;
  font-size: 15px;
  border-radius: 18px;
}
h1{
    text-align: center;
    background-color: coral;
    color: white;
    border-radius: 10px;
    margin-left:20%;
    margin-right: 20%;
}

#myInput {
            background-image: url('/css/ra.jpg');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 30%;
            font-size: 12px;
            padding: 10px 12px 8px 25px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myInput1 {
            background-image: url('/css/ra.jpg');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 30%;
            font-size: 12px;
            padding: 10px 12px 8px 25px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }
        .dd{
            font-size:2em;
            color: #FFFFFF;
            text-align:center;
            text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;
            padding:50px;
        }
        span{
            color:#fff ;
            font-size:25px;
        }

    </style>
</head>
<body>
<h1>Employee Information</h1>
<span>Search Employee</span>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By ID.." title="Type in a name">
    <input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search By Name.." title="Type in a name">



     <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empl";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM empl_info";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table id='myTable'>";
    echo "<tr><th>Employee ID</th><th> Name</th><th>Designation</th><th>Address</th><th>Phone</th><th>Action</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
        echo "<td>" . $row["empl_id"]. "</td><td>" . $row["empl_name"]. "</td><td>" .$row["empl_desi"]."</td><td>" . $row["empl_addr"]. "</td><td>".$row["empl_phone"]. "</td><td>"."<a href='delete.php?id=". $row["empl_id"]."'>Delete</a>"." | "."<a href='update.php?id=". $row["id"]."'>Update</a>"."</td>";

    echo "</tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}



mysqli_close($conn);
?>


<script>
        function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

    <script>
        function myFunction1() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput1");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
<br/>
<br/>
<center><a href="index.php"><b>Back to Home</b></a></center>

</body>
</html>