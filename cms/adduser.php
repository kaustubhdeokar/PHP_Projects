<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	 <div class="container">
        <div class="col-sm-4">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <br><br>   
            <h2>New User Login</h2>
            <br><br>
            <p>
            <label>Username:</label>
            <input type="text" name="username" id="username" required>
            </p>
            <br><br>
            <p>
            <label>Password:</label>
            <input type="password" name="password" id="password" required>
            </p>
            <br><br>
            <input type="submit" value="Submit">
            </form>
            
        </div>

        <div class="col-sm-8">
        <br><br>   
        <a href="complaints.php">Click for Registering Complaints after login.</a>
        <br><br>   
        <a href="index.html">Home</a>
               
        
        <?php

        $user=filter_input(INPUT_POST,'username');
        $pass=filter_input(INPUT_POST,'password');
            
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="phpproject";
        $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            echo "connection lost";
        }
        else{
			$sql="insert into user(username,password) values ('$user','$pass')";
	        if($conn->query($sql)){
	        echo "<br>";echo "<br>";echo "<br>";
	        echo "query inserted successfully";
	        }
	        else{
	       echo "not inserted";
	        }
		}

		?>



</div>
</div>


</body>
</html>