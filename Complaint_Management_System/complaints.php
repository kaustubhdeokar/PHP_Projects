<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style>
        label{
        width:100px;
        float:left;
        }
        label1{
        width:100px;
        float:left;
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
	<title>Complaints Page</title>
</head>
<body>
   
    <div class="container">
      
        <h2 id="header-2">Complaints Page</h2>
        <div class="col-sm-4">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <br>
            <h4>New Users Post Complaints Here</h4>
            <br><br>
            <p>
            <label>Username:</label>
            <input type="text" name="username" id="username" required>
            </p>
            <br><br>
            <p>
            <label>Level:</label>
            <input type="number" name="level" id="level" required>
            </p>
            <br><br>
            <p>
            <label>Status:</label>
            <select name="status" id="status">
            <option value="unsolved">Unsolved</option>
            <option value="solved">Solved</option>
            </select>
            </p>
            <br><br>
            <p>
            <label>Complaint:</label>
            <br>
            <textarea rows="5" cols="35" name="complaint" id="complaint">    
            </textarea>    
            </p>
            <br>
            <input type="submit" value="Submit">
            <br><br>
            </form>

            <?php
            $user=filter_input(INPUT_POST,'username');
            $level=filter_input(INPUT_POST,'level');
            $status=filter_input(INPUT_POST,'status');
            $complaint=filter_input(INPUT_POST,'complaint');
            
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
                $temp=0;

                $sql2="select * from user";
                $result2=$conn->query($sql2);
                if($result2->num_rows>0){
                    while($row2=$result2->fetch_assoc()){
                        echo "here".$row2["username"];
                        if($row2["username"]==='$user'){
                            echo $row2["username"];
                            $temp=1;
                        }
                        
                    }

                }
                if($temp==1){
                    $sql="insert into complaintstable(username,level,status,complaint) values ('$user','$level','$status','$complaint')";
                    if($conn->query($sql)){
                        echo "<br>";echo "<br>";echo "<br>";
                        echo "query inserted successfully";
                    }
                    else{
                        echo "please register in the new registers link";
                    }
                }

            }
            $sql2="delete from complaintstable where level=0";
            $result=$conn->query($sql2);
            ?>
            <br><br>
            <br><br>                
              
        </div>

        
        <div class="col-sm-8">
                <a href="newuser.php">Click for New User login</a>
                <br><br>
                <a href="admin.php">Click for admin login</a>
                <br><br>
                <a href="workers.php">Click for workers login.</a>

            <h1>Complaints management</h1>
            <h3>What is complaints management?</h3><br>
            Complaints management is about resolving individual complaints and identifying 
            opportunities to make systemic improvements.<br>
            Every organisation that deals with the public will receive complaints.
            The community expects government organisations to be customer-focused and responsive 
            to complaints.<br>
            Government organisations are required to have complaints management systems (CMS) 
            in place and be accountable for their decisions and actions.
            <br><br>
            <table>
                <thead>
                    <tr>
                    <td>Category</td>
                    <td> Expected Punishment </td>
                    <td> Examples</td>
                    <td> Level </td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                    <td>Misdemeanor </td>
                    <td>90 days in jail and/or up to Rs.1,000 fine </td>
                    <td> Driving without a license;Simple assault (such as punching someone); 
                        First-time DWI;Theft of property worth less than  Rs.500*</td>
                    <td> 1 </td>
                    </tr>
                    <tr>
                    <td> Gross Misdemeanor </td>
                    <td>One year in jail and/or up to Rs.3,000 fine </td>
                    <td> Second DWI in ten years; Second assault in ten years against same victim;
                    Theft of property worth between Rs.500 and Rs.1,000*</td>
                    <td>2</td>
                    </tr>
                    <tr>
                    <td> Felony</td>
                    <td> Over one year imprisonment and/or up to maximum fine specified in law. 
                        Maximum imprisonment penalties range from 366 days to life imprisonment.</td>
                    <td>Murder and manslaughter; Most criminal sexual conduct crimes;
                    Theft of property worth more than Rs.1,000* </td>
                    <td>3 </td>
                    </tr>
                </tbody>
    
        </div>

    </div>
</body>        
</html>
