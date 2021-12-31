<?php



$name = $_POST["first_name"];

$email = $_POST["email"];

$user_password = $_POST["pass"];

$type = $_POST["flexRadioDefault"];

$type_code = 0;



if($type == "admin"){

    $type_code=1;

}else{

    $type_code=0;

}

$encryption_pass = md5($user_password);




$servername = "localhost";

$username = "root";

$password = "";

$dbname = "db1";
$conn = mysqli_connect($servername,$username,$password,$dbname);



if(!$conn){

    die('Could not Connect MySql Server:' .mysql_error());

  }else{



    $sqlquery = "INSERT INTO register (fname,email,type,password) VALUES('$name','$email','$type_code','$encryption_pass')";




      if(mysqli_query($conn, $sqlquery)){

        echo "New record has been added successfully !";

      }else{

          echo 'fail';

      }

  }




  ?>