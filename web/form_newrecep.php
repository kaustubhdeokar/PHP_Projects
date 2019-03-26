<!--
THIS FORM IS FOR THE  new receptionist's
-->
<!DOCTYPE html>
<html>
<head>
	<title>New Form</title>
</head>
<body>
			<h1 style="font-size: 30px;"><center>Create Your Id Here(Receptionists)</center></h1>
<!--doctr name pass id dept 
-->
<form name="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">	
		<center>
		<fieldset style=" height:300px;width:400px;"><br><br><br><br>
		Name:
		<input type="text" id="name" name="name"><br><br>
		UserId:
			<input type="text" id="id" name="username"><br><br>
		Password:
			<input type="password" id="password" name="password"><br><br>
		Confirm Password:
		<input type="password" id="password2" name="password2"><br><br>													
		<script>
		var a = document.form["form"].password.value;
		var b=document.form["form"].password2.value;
		if(a!=b)
		{
			alert('error');
		}
		</script>
		<input type="submit" value="Submit">   
		</fieldset>
		<a href="try_entry.php">Back to Home</a>
		</center>
</form>

<?php
$userid=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$name=filter_input(INPUT_POST,'name');
$temp1=1;
$temp2=1;
	if(!empty($userid)||(!empty($password))||(!empty($name)))
	{
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="dbms_project";
		//create connect
		$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
		if(mysqli_connect_error())
		{
			echo "connection lost";
		}
		else
		{
			$sql="INSERT INTO receptionist(rec_id,name,password)values('$userid','$name','$password')";
			if($conn->query($sql))
			{
				echo "<br>";
				echo "<br>";echo "<br>";echo "<br>";
				echo "new record successfully inserted";
			}
			else
			{
				echo "not inserted";
			}
		}
	}
	else
	{
	echo "username should'nt be empty";
	}
?>
</body>
</html>