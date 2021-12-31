<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<title>Register User Form</title>

</head>
<body>
<div class="signup-form">
    <form action="db2.php" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">User Form</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="name" placeholder="Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="dept" placeholder="Department" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="mobno" placeholder="Mobile Number" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="desg" placeholder="Designation" required="required">
        </div>
        <div class="form-group">
            <input type="date" class="form-control" name="dob" placeholder="Date of joining" required="required">
        </div>
        
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Save</button>
    
	
</div>
</body>
</html>