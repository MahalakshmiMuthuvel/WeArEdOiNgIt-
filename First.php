<!DOCTYPE html>
<html>
<head>
<title>
 My First
 </title>
</head>
<body>
<?php
echo "My first PHP script ! <br>";
$x=3;//Global Variable
function myTest()
{
	global $x;
	echo $x."<br>";
}
myTest(); //Function Call - Only if it is given function is executed
{
}
function learn()
{
	static $y=50;
	echo $y."<br>";
	++$y;	
}
learn();
learn();
learn();
echo "The Value Of x is $x .<br>";
echo "The Value Of x is ".$x."<br>";
echo $x+7;
function PRINTLEARN()
{
	echo "<h1>H1 FONT</h1> <br>";
	echo "THIS ","IS ","A ","MULTIPARAMETER<br>";
	print "Using Print Statement";
}
PRINTLEARN();
$z=12345;
var_dump($z);
$a=12.5;
var_dump($a);
$vechicals=array("Car","Bus","Auto");
var_dump($vechicals);
class Car
{
	function Car()
	{
		$this->model="Toyota";
	}
}
$obj=new Car();
echo $obj->model."<br>";
function LearnString()
{
	$str="Maha Is Not Going To Be A Lazy Girl ! ";
	echo($str)."<br>";
	echo strlen($str)."<br>";
	echo str_word_count($str)."<br>";
}
LearnString();
?>
</body>
</html>
