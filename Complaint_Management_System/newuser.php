<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      
    <title>Admin-Login</title>
    <style>
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
        wrong{
            color:red;
        }
        label{
            float:left;
            width:200px;
        }
        </style>

</head>
<body>

    <div class="container">
        <div class="col-sm-9">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <br><br>   
            <h2>Admin Login</h2>
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
            <p>
            <label>Confirm Password:</label>
            <input type="password" name="cpassword" id="cpassword" required>
            </p>
            <br><br>
            <input type="submit" value="Submit">
            </form>
            
        </div>

        <div class="col-sm-3">
        <br><br>   
        
        
        <?php

        $user=filter_input(INPUT_POST,'username');
        $pass=filter_input(INPUT_POST,'password');
        $cpass=filter_input(INPUT_POST,'cpassword');
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="phpproject";
        $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            echo "connection lost";
        }
        else{
            if($pass==$cpass){
            $sql="insert into user(username,password) values ('$user','$pass')";
            if($conn->query($sql)){
                echo "<br>";echo "<br>";echo "<br>";
                echo "query inserted successfully";
                header('Location:userstatus.php');
            }
            else{
                echo "not inserted";
            }

        }

        }

?>


  
        </div>
  
    </div>
    


</body>
</html>