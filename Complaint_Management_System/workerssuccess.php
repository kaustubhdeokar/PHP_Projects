<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   
</head>
   <body>


    <div class="container">

        <h2>Enter the names of the problem Solved</h2>

        <br><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">        
        
        Names:  <input type="text" name="solved" id="solved">
        <br><br>
        <input type="submit" value="Submit">
        <br><br>
        
        </form>
        
        <?php

        $solved=filter_input(INPUT_POST,'solved');
      
        $arr=explode(",",$solved);
        $i=0;
        for($i=0;$i<sizeof($arr);$i++){

            $host="localhost";
            $dbusername="root";
            $dbpassword="";
            $dbname="phpproject";
            $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
            if(mysqli_connect_error()){
                echo "connection lost";
            }
            else{
                $sql="delete from complaintstable where username='$arr[$i]'";
                $result=$conn->query($sql);
            
        }
    }


        ?>

    <br><br>
    <a href="complaints.php">Click to register complaints</a>
    <br><br>
    <a href="workers.php">Click for workers login.</a>

        </div>

    </</body>
</html>
