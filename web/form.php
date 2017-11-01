
<!--
this form is for doctors 
-->
<!DOCTYPE html>
<html lang="us-EN">
<head>
	<title>Form Site</title>
</head>
<style type="text/css">
	form {
		padding-top: 20px;
		text-align:center;
		font-size: 15px;
	}
	input{
		align-content: center;
		width:200px;
		height: 20px;
		font-size: 15px;
	}
</style>
	<body>
	<h1><center>DBMS PROJECT</center></h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<center>
	<fieldset style=" height:300px;width:400px;"><br><br><br><br>
		Username:
			<input type="text"  name="username"><br><br>
		Password:
			<input type="password" name="password"><br><br>
															<br><br>	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<input type="submit" value="Submit">
	</fieldset>
	</center>
	</form>
	<br><br>
	<center>
	<a href="try_entry.php">Back to Home Page</a>
	</center>
<!--
php
-->
<?php
$tab="&nbsp &nbsp &nbsp &nbsp";
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$temp1=1;
$temp2=1;
echo "<br><br>-------------------------------------------------------------------------------------------------------------sql queries and answers-------------------------------------------------------------------------------------------------------------------"."<br><br>";
if(!empty($username))
	{
	if(!empty($password))
	{
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="dbms_project";
		//create connect
		$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
		$host2="localhost";
		$dbusername2="root";
		$dbpassword2="";
		$dbname2="dbms_project";
		//create connect
		$conn2=new mysqli($host,$dbusername,$dbpassword,$dbname);
		
		if(mysqli_connect_error())
		{
			echo "connection lost";
		}
		else
		{
			$sql="select *from doctor";
			$result=$conn->query($sql);
			if( $result -> num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{
				if($row["doc_id"]==$username and $row["password"]==$password )
				{
				echo "doc id is:".$row["doc_id"]."<br>"."name is:".$row["name"]."<br>"."department is:".$row["department"]."<br>"."patient id is:".$row["p_id"];
				$patient_id=$row["p_id"];
				$sql2="select *from patient";
				$result2=$conn2->query($sql2);
				//if($result2 -> num_rows>0)
				//{
					while($row=$result2->fetch_assoc())
					{
						if($row["p_id"]==$patient_id)
						{

								echo "patient id is:".$row["p_id"]."$tab"."name is".$row["name"]."$tab"."occupation is:".$row["occupation"]."$tab"."weight is:".$row["weight"]."$tab"."phone no:".$row["phone_no"]."$tab"."sex is:".$row["sex"]."$tab"."address is:".$row["address"]."disease is:".$row["disease"]."$tab"."admit_date".$row["admit_date"]."$tab"."discharge_date".$row["discharge_date"]."$tab"."m_id is:".$row["m_id"]."test_id is:".$row["test_id"]."$tab"."charges is:".$row["charges"]."$tab"."doc_id is:".$row["doc_id"]."r_id:".$row["r_id"];
									echo "<br><br>";

							//echo "<br>FOUND:"."id is :".$row["p_id"]."$tab name is:".$row["name"];
						}	
					}

				//}	
				$temp1=2;
				}
				else
				{
				$temp2=2;
				}
				}
			}
			elseif($temp1!=2 and $temp2=2)
			{
			echo "error:".$sql."<br>".$conn->error;
			}
		}

	}
	else
	{
	echo "password should not empty";
	die();
	}
	}
	else
	{
	echo"username should not be empty";
	die();
	}
?>
<!--
 -->
</body>
</html>
