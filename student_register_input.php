<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include_once 'connections.php';
if (isset($_POST['save'])) {
$sid = $_POST['sid'];
$fn = $_POST['fn'];
$sn = $_POST['sn'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$degree = $_POST['degree'];
$address = $_POST['address'];
$cellphone = $_POST['cellphone'];
$email = $_POST['email'];
$dept = $_POST['dept'];
	
$insertq = "INSERT INTO Registration VALUES('$sid', '$fn',
'$sn', '$dob', '$gender', '$degree', '$address', '$cellphone',
'$email', '$dept')";

if ($conn->query($insertq) === TRUE) {
    echo "Records have been added successfully!";
} else {
    echo "Error adding records!: " . $conn->error;
}
echo "<br>";
$conn->close();
}
?>
</body>
</html>