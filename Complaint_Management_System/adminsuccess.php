<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      
    <title>Admin-Success</title>
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
        </style>

</head>
<body>

    <div class="container">
      
    <br><br>
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

        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="phpproject";
        $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            echo "connection lost";
        }
        else{

            $sql="delete from complaintstable where level=0";
            $result=$conn->query($sql);
            $sql2="select * from complaintstable";
            $result=$conn->query($sql2);
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
                    
                     
                    
                }
            }
        }

?>
        </tbody>
        </table>


       
        <h2>Admin Solve problems</h2>
        <a href="workerssuccess.php">Solve problems</a>
        
        <br><br>
        <a href="complaints.php">Click to register complaints</a>
        <br><br>
        <a href="workers.php">Click for workers login.</a>

    

        <br><br>
       
        <br><br>

        </div>
        


    </body>
</html>