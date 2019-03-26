<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      
    <title>Admin-Login</title>
    
    <style>
        label{
            width:130px;
            float:left;
        }
        wrong{
            font-family: monospace;
            font-size:20px;
            color:red;
        }
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        border: 1px solid #ffffff;
        background-color: #dddddd;
        }
    </style>

</head>
<body>

    <br><br>
    <div class="container">
        <div class="col-sm-6">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">        
            <h2>Worker Login</h2>
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
            <p>
            <br><br>
            <input type="submit" value="Submit">
            </form>
        </div>
        <div class="col-sm-6">
            <table style="border=2">
                <thead>
                <tr>
                <th>Username</th>
                <th>Status</th>
                <th>Complaint</th>
                </tr>
                </thead>
                <tbody>

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
            $sql="select * from workertable";
            $result=$conn->query($sql);
            $tempvar=0;
            if($result->num_rows>0){
     
            while($row=$result->fetch_assoc()){
                if($row["username"]==$user && $row["password"]==$pass){

                if($row["department"]=="level1"){
                    echo "level1"."<br>";
                    $tempvar=1;
                    $sql2="select * from complaintstable";
                    $result2=$conn->query($sql2);
                    if($result2->num_rows>0){
                        while($row2=$result2->fetch_assoc()){

                            if($row2["level"]==1){
                echo "<tr><td>".$row2["username"]."</td><td>".$row2["status"]."</td><td>".$row2["complaint"]."</td></tr>";
                                        
                                    }
                                    
                                }
                            }
                            



                        }
            if($row["department"]=="level2"){
            echo "level 2"."<br>";
            $tempvar=1;
            $sql3="select * from complaintstable";
            $result3=$conn->query($sql3);
            if($result3->num_rows>0){
                while($row3=$result3->fetch_assoc()){

                    if($row3["level"]==2){
                 echo "<tr><td>".$row3["username"]."</td><td>".$row3["status"]."</td><td>".$row3["complaint"]."</td></tr>";
                        
                    }
                    
                    }
                }
                
            }
                if($row["department"]=="level3"){
                    echo "level 3"."<br>";
                    $tempvar=1;
                    $sql4="select * from complaintstable";
                    $result4=$conn->query($sql4);
                    if($result4->num_rows>0){
                        while($row4=$result->fetch_assoc()){

                            if($row4["level"]==3){
                echo "<tr><td>".$row4["username"]."</td><td>".$row4["status"]."</td><td>".$row4["complaint"]."</td></tr>";
                                                        
                            }
                            
                        }
                    }
                }
                
                }
                }
            }
            if($tempvar==0){
                echo "<wrong><b>Not Valid<b>";
            }    

        }
    ?>
        </tr>
        </tbody>
        </table>

    <br><br><br>    
   <h2>Solve Queries:</h2>    
    <br><br><br>
    <form method="post" action="workerssuccess.php">    
    <input type="submit" value="Solve">
    </form>
    </div>
    </div>


</body>
</html>