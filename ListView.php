<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>List View</title>
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
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                    <a href="Welcome.php" class="btn btn-success pull-left">Back</a> <br><br>
                        <h2 class="pull-left">User List</h2><br>
                        <a href="RegisterUserForm.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New User</a>
                    </div>
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
                      
                    
                    
                    
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>id</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Department</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>mobile no</th>";
                                        echo "<th>Designation</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['idno'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['dept'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['mobno'] . "</td>";
                                        echo "<td>" . $row['desg'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="DetailView.php?id='. $row['idno'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="updateprocesss.php?id='. $row['idno'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="DeleteView.php?id='. $row['idno'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            
                            mysqli_free_result($result);
                             } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                     
 
                   
                    $conn->close();
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
