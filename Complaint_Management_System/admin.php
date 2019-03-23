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
        </style>

</head>
<body>

    <div class="container">
        <div class="col-sm-4">
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
            <input type="submit" value="Submit">
            </form>
            
        </div>

        <div class="col-sm-8">
        <br><br>   
        
        
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

            $sql="select * from admintable";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                $temp=0;
                while($row=$result->fetch_assoc())
                {
                     if($row["username"]==$user && $row["password"]==$pass){
                         $temp=1;
                        header('Location:adminsuccess.php');
                     }
                     else{
                     }
                    
                }
                if($temp==0){
                    echo "<wrong>please check the username and password</wrong>";
                }
            }
        }

?>


    <br><br>
    <a href="complaints.php">Click to register complaints</a>
    <br><br>
    <a href="workers.php">Click for workers login.</a>

        </div>
  
    </div>
    


</body>
</html>