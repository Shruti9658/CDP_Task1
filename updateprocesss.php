<?php


$servername = "localhost";

$username = "root";

$password = "";

$dbname = "db1";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){

    die('Could not Connect MySql Server:' .mysql_error());

  }else{

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE registeruser set idno='" . $_POST['idno'] . "', name='" . $_POST['name'] . "', dept='" . $_POST['dept'] . "', email='" . $_POST['email'] . "', mobno='" . $_POST['mobno'] . "' ,desg='" . $_POST['desg'] . "' WHERE idno='" . $_POST['idno'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM registeruser WHERE idno='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
  }
?>
<html>
<head>
<title>Update User Data</title>
</head>
<body>
<form name="ListView" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="DetailView.php">User List</a>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</div>
ID: <br>
<input type="hidden" name="idno" class="txtField" value="<?php echo $row['idno']; ?>">
<input type="text" name="idno"  value="<?php echo $row['idno']; ?>">
</br>
Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Department :<br>
<input type="text" name="dept" class="txtField" value="<?php echo $row['dept']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
Mobile No:<br>
<input type="text" name="mobno" class="txtField" value="<?php echo $row['mobno']; ?>">
<br>

Designation:<br>
<input type="text" name="desg" class="txtField" value="<?php echo $row['desg']; ?>">
<br><br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>