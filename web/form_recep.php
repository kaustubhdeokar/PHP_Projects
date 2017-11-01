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
	<h1><center>Receptionist</center></h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<center>
	<fieldset style=" height:300px;width:400px;"><br><br><br><br>
		Name:
			<input type="text" name="name"><br><br>	
		Username:
			<input type="text"  name="userid"><br><br>
		Password:
			<input type="password" name="password"><br><br>
		Patient Id:
			<input type="id" name="id"><br><br>
												
	<center>
		<input type="submit" value="Submit">
	</center>
	</fieldset>
	</center>
	</form>
	<br><br>
	<center>
				<a href="try_entry.php">Back to Home Page</a>
	</center>
<?php
//echo "hello";
$tab="&nbsp &nbsp &nbsp &nbsp";
$userid=filter_input(INPUT_POST,'userid');
$password=filter_input(INPUT_POST,'password');
$name=filter_input(INPUT_POST, 'name');
$patientid=filter_input(INPUT_POST,'id');
$temp1=1;
$temp2=1;
	if(!empty($userid)||(!empty($password))||(!empty($name)))
	{
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="dbms_project";
		$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
		
		$host2="localhost";
		$dbusername2="root";
		$dbpassword2="";
		$dbname2="dbms_project";
		$conn2=new mysqli($host,$dbusername,$dbpassword,$dbname);
		$conn3=new mysqli($host,$dbusername,$dbpassword,$dbname);
		
		if(mysqli_connect_error())
		{
			echo "connection failed";
		}
		else
		{
			//echo "conn established";
			$sql="select *from receptionist";
			$result=$conn->query($sql);
				if($result -> num_rows >0)
				{
					while($row=$result->fetch_assoc())
					{
						if($row["name"]==$name)
						{$temp2=2;
							echo "Receptionist id:".$row["rec_id"]."<br>Name is:".$row["name"]."<br><br>";
							
							$sql2="select *from patient";
							$result2=$conn2->query($sql2);
							if($result2 -> num_rows > 0)
							{
								while($row2=$result2->fetch_assoc())
								{
									if($row2["p_id"]==$patientid)
									{	$temp1=2;
								echo "patient id is:".$row2["p_id"]."$tab"."name is".$row2["name"]."$tab"."occupation is:".$row2["occupation"]."$tab"."weight is:".$row2["weight"]."$tab"."phone no:".$row2["phone_no"]."$tab"."sex is:".$row2["sex"]."$tab"."address is:".$row2["address"]."disease is:".$row2["disease"]."$tab"."admit_date".$row2["admit_date"]."$tab"."discharge_date".$row2["discharge_date"]."$tab"."m_id is:".$row2["m_id"]."test_id is:".$row2["test_id"]."$tab"."charges is:".$row2["charges"]."$tab"."doc_id is:".$row2["doc_id"]."r_id:".$row2["r_id"];
								//cost and days
								$a=strtotime($row2["admit_date"]);
								$b=strtotime($row2["discharge_date"]);

								$c=$b-$a;	
								$days= ("$c")/(60*60*24)."<br>";
								echo "<br>"."days are ::$days";
								$d= $row2["r_id"];
								$sql3="select *from rooms";
								$result3=$conn3->query($sql3);
								if($result3 -> num_rows >0)
								{				
									while($row3=$result3 -> fetch_assoc())
									{
										if($row3["r_id"]==$d)
										{	
										echo "Room Cost per day is".$row3["cost"]."<br>";
										echo "As the patient is".$row2["place"]."staying patient";
										
										echo "<br>";						
										if($row2["place"]=='in')
										{echo "cost is :".($row3["cost"]*$days+$row2["charges"]);	
										}
										else
										{echo "cost is".$row2["charges"];}
										break;	
										}
									}
								}

									}
								}
							}


							//break;
						}
						
					}
				}	
		}
	
	}
	if($temp1!=2 and $temp2!=2)
	{
		echo "the record doesnt exists";
	}
		else if($temp1!=2 and $temp2!=2)
		{
		echo "input fields cannot be empty";
		}
	?>
</body>
</html>