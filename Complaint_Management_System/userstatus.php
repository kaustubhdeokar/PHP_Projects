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

            $sql="select * from complaintstable";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                $temp=0;
                while($row=$result->fetch_assoc())
                {
                     if($row["username"]==$user && $row["password"]==$pass){
                            
                        echo $row["username"];
                        echo $row["password"];
                        echo "<br><br>";
                     }                    
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