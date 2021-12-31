<?php



$name = $_POST["name"];

$department = $_POST["dept"];

$email = $_POST["email"];

$mobileno = $_POST["mobno"];

$designation = $_POST["desg"];




$servername = "localhost";

$username = "root";

$password = "";

$dbname = "db1";
$conn = mysqli_connect($servername,$username,$password,$dbname);



if(!$conn){

    die('Could not Connect MySql Server:' .mysql_error());

  }else{



    $sqlquery = "INSERT INTO registeruser (name,dept,email,mobno,desg) VALUES('$name','$department','$email','$mobileno','$designation')";




      if(mysqli_query($conn, $sqlquery)){

        echo "New record has been added successfully !";

      }else{

          echo 'fail';

      }

  }




  ?>