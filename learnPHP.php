<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!<br>";
	
	$x = 5;
	$z = 10;// global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
	
	echo "-----------------------------------------------------------------------";
	
function myTest1() {
    $y = 5; // local scope
    echo "<p>Variable x inside function is: $y</p>";
}
myTest1();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $y</p>";
	
	echo "-----------------------------------------------------------------------";
	echo "<br>";

// php global keyword
	function myTest2() {
    global $x, $z;
    $z = $x + $z; // or  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['z'];
}

myTest2(); // run function
echo $z; // output the new value for variable $z
	echo "<br>";
print "Data type and value: ";
	echo var_dump($z);
	
echo $_SERVER['SERVER_PORT'];
?>

</body>
</html>
