
<?php


$servername = "localhost";

$username = "root";

$password = "";

$dbname = "db1";
$conn = mysqli_connect($servername,$username,$password,$dbname);
$keywords = $_POST['keywords'];
echo $keywords;
// if(!$conn){

//   die('Could not Connect MySql Server:' .mysql_error());

// }else{
  
//   $keywords = isset($_GET['keywords']) ? '%'.$_GET['keywords'].'%' : '';

// $result = mysql_query($conn,"SELECT name FROM registeruser where name like '$keywords'");
// while ($row = mysql_fetch_assoc($result)) {
//     echo "<div id='link' onClick='addText(\"".$row['name']."\");'>" . $row['name'] . "</div>";  
// }
// $conn->close();
// }
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM registeruser WHERE idno = $keywords";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
    echo  " Idno: " . $row["idno"]."<br>";
    echo  " Name: " . $row["name"]."<br>"; 
    echo "Dept: " . $row["dept"]."<br>";
    echo "Email: " . $row["email"]."<br>";
    echo "Mobno: " . $row["mobno"]."<br>";
    echo "Desg: " . $row["desg"]."<br>";
  }
} else {
  echo "0 results";
}

    ?>