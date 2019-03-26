<?php
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$temp1=1;
$temp2=1;
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
				echo "doc id is:".$row["doc_id"]."      name is:".$row["name"]."     department is:".$row["department"]."     patient id is:".$row["p_id"];
				
				$sql2="select *from patient";
				$result2=$conn2->query($sql2);
				//if($result2 -> num_rows>0)
				//{
				//	while($row=$result2->fetch_assoc())
				//	{
						echo "<br>";
						echo "pateintid is:".$row["p_id"]."\t name is:".$row["name"];
						
				//		}

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
 