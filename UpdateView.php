<?php
$servername = "localhost";

$username = "root";

$password = "";

$dbname = "db1";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){

    die('Could not Connect MySql Server:' .mysql_error());

  }else{
$result = mysqli_query($conn,"SELECT * FROM registeruser");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>ID No</td>
		<td>Name</td>
		<td>Department</td>
		<td>Email</td>
		<td>Mobile No</td>
		<td>Designation</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["idno"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["dept"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["mobno"]; ?></td>
        <td><?php echo $row["desg"]; ?></td>
		<td><a href="updateprocesss.php?id=<?php echo $row["idno"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
  }
?>
 </body>
</html>