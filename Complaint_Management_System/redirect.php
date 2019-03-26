<?php
            $user=filter_input(INPUT_POST,'username');
            $password=filter_input(INPUT_POST,'password');
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
                $sql2="delete from complaintstable where level=0";
                $result=$conn->query($sql2);
            
                $temp=0;
                $sql3="select * from user where username='$user' and password='$password";  
                $result3=$conn->query($sql3);  
                
                if(!$result3)
                {
                    $temp=1;
                    echo "deosnt exist";
                }
                else{
                    $sql="insert into complaintstable(username,level,status,complaint) values ('$user','$level','$status','$complaint')";
                        if($conn->query($sql)){
                            echo "<br>";echo "<br>";echo "<br>";
                            echo "query inserted successfully";
                        }
                        else{
                            echo "not inserted";
                        }
                }        
            }
            $sql2="delete from complaintstable where level=0";
            $result=$conn->query($sql2);
            if($temp==1){
                header('Location:redirect.php');
            }
            ?>