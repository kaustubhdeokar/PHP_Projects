<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title></title>

      <style type="text/css">
            table{
        border-collapse:collapse;
        color: #588c7e;
        font-family: monospace;
        text-align:left;
        width: 100%;
        }
        th{
            background-color:#588c7e;
            color:white;
        }
        tr:nth-child(even)
        {
            background-color:#f2f2f2;
        }
        label1{
            float:right;
            padding:30px;
            color:red;
        }
        querysolved{
            float:right;
            color:green;
            font-size: 20px;   
        }

      </style>

</head>
<body>
	<div class="container">
            <div class="col-sm-4">
                  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                  <br><br>   
                  <h2>User Login</h2>
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
                  <label1>
                  <a href="index.html">Home</a>
                  <br><br>
                  
                  </label1>
             <table style="border=2">          
            <thead>
            <tr>
            <th>Username</th>
            <th>Level</th>
            <th>Status</th>
            <th>Complaint</th>
            </tr>
            </thead>
            <tbody>
                  <?php
                    $user=filter_input(INPUT_POST,'username');
                    $password=filter_input(INPUT_POST,'password');

                  $host="localhost";
                  $dbusername="root";
                  $dbpassword="";
                  $dbname="phpproject";
                  $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
                  
                  if(mysqli_connect_error()){
                      echo "connection lost";
                  }
                  else{
                        
                  $temp1=0;
                   $sql="select * from complaintstable where username='$user'";
                   $result=$conn->query($sql);
                   
                   $sql2="select * from user where username='$user'";
                   $result2=$conn->query($sql2);

                   if($result->num_rows>0){
                        while($row=$result->fetch_assoc())
                         {
                         print "<tr> <td>";
                         echo $row["username"]; 
                        print "</td> <td>";
                        echo $row["level"];
                        print "</td> <td>";
                        echo $row["status"];
                        print "</td> <td>";
                        echo $row["complaint"];
                        print "</td> </tr>";
                        $temp1=1;
                        }
                   }

                   else if($temp1==0 && $result2->num_rows>0){
                        echo "<querysolved>$user query is :solved</querysolved>";
                       
                   }

                   else{
                        echo "<label1>wrong entry please register</label1>";
                   }
            

                  }

                  ?>
                    </tbody>
                    </table>
            </div>
      </div>
</body>
</html>