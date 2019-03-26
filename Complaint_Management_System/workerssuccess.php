<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style>
  </style>

</head>
<body>

    <br><br>
    <div class="container">
    
    <h1>Enter names whose problems are solved</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <br><br>
            <input type="text" name="solved" id="solved" required>
            <br><br><br>
            <input type="submit" value="Submit">
   </form>
    <?php

    
      $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="phpproject";
        $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
    
        $solved=filter_input(INPUT_POST,'solved');
        $arr=explode(",",$solved);
        $i=0;
        for($i=0;$i<sizeof($arr);$i++){

        if(mysqli_connect_error()){
            echo "connection lost";
        }
        else{

            $sql="delete from complaintstable where username='$arr[$i]'";
            $result=$conn->query($sql);
            echo "deleted";
        }


        }   



         ?>

        </div>
        </body>
        </html>