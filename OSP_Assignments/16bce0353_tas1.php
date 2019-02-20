<?php
<html>
<body>
<h1>ABHISHEK GAJUL 16BCB0049</h1>
<form action="16bce0353_tas1.php" method="get">
<input type="text" placeholder="enter comma separated values (ex.)1,2,3" size="40"
name="a" id="a">
<input type="submit">
</form>
</body>
</html>



if(isset($_GET["a"]))
{
$htmlinput=$_GET["a"];
}
$arr = explode(",", $htmlinput);
function Averageev($x) {
    $sum=0;
    foreach($x as $v){
        if($v%2!=0){
            throw new Exception("It is an odd number....please specify an even number");
        }
        $sum=$sum+$v;
    }
    return $sum/count($x);
  }
try
{
    $aver=Averageev($arr);
    echo "the average of the number is".$aver;
}
catch(Exception $e){
    echo 'Error:'.$e->getMessage();
}

?>
