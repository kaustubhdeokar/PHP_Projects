
<?php
$regno=filter_input(INPUT_POST,'regno');
$name=filter_input(INPUT_POST,'name');
$dob=filter_input(INPUT_POST,'dob');
$cgpa=filter_input(INPUT_POST,'cgpa');
$emailid=filter_input(INPUT_POST,'email');
$school=filter_input(INPUT_POST,'school');

$servername="localhost";
$username="root";
$password="";
$dbname="student";
$conn=new mysqli($servername,$username,$password,$dbname);

if(mysqli_connect_error())
{
    echo "connect error";
}
else
{
    $sql = "INSERT INTO entry 
    ( regno, name, dob, cgpa, emailid,school)
    VALUES ('$regno', '$name','$dob', '$cgpa','$emailid','$school')";
    
    if($conn->query($sql))
    {
    echo "<br>";
    echo "<br>";echo "<br>";echo "<br>";
    echo "new record successfully inserted";
    }
    else
    {
    echo "not inserted";
    }
    }
$conn->close();
?>
