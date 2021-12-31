<?php
$servername = "localhost";

$username = "root";

$password = "";

$dbname = "db1";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT idno, name, dept, email, mobno, desg  FROM registeruser";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["idno"]. "Name: " . $row["name"]. "Department:" . $row["dept"]."Email:" . $row["email"]."mobile no:" . $row["mobno"]."Designation:" . $row["desg"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>




</body>
</html>
