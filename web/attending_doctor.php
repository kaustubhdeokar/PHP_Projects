<!--
THIS FORM IS FOR THE  new DOCTORs
-->
<!DOCTYPE html>
<html>
<head>
	<title>New Form</title>
</head>
<body>
			<h1 style="font-size: 30px;"><center>Urgent Services</center></h1>
<!--doctr name pass id dept 
-->
<form name="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">	
		<center>
		<fieldset style=" height:300px;width:400px;"><br><br><br><br>
		Name:
		<input type="text" id="name" name="name"><br><br><br><br>
		Department:																		
		<input type="text" id="department" name="department"><br><br><br><br>
		<input type="submit" name="submit"><br><br>
		</fieldset>
		<a href="try_entry.php">Back to Home</a>
		</center>
</form>

<?php
$department=filter_input(INPUT_POST,'department');

	if(!empty($department))
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
			$sql="select *from doctor";
			$result=$conn->query($sql);
			if($result -> num_rows>0)
			{
				while($row=$result->fetch_assoc())
				if($row["department"]==$department)
				{
					echo "name is:".$row["name"]."<br>";
				}	
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