<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "db1";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){

    die('Could not Connect MySql Server:' .mysql_error());

  }else{

                   
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                      
                      $sql = "SELECT id, name, dept, email, mobno, desg  FROM registeruser";
                      $result = $conn->query($sql);

if(isset($_POST["idno"]) && !empty($_POST["idno"])){
    
    
    $id=$_REQUEST['idno'];
 
    $sql = "DELETE * FROM registeruser WHERE id= ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        
        mysqli_stmt_bind_param($stmt, "i", $param_idno);
        
       
        $param_idno = trim($_POST["id"]);
        
        
        if(mysqli_stmt_execute($stmt)){
            
            header("location: DetailView.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    
    $conn->close();
} else{
    
    if(empty(trim($_GET["id"]))){
       
        header("location: error.php");
        exit();
    }
}
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="idno" value="<?php echo trim($_GET["idno"]); ?>"/>
                            <p>Are you sure you want to delete this User record?</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="ListView.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
