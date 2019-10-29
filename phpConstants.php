<!DOCTYPE html>
<html>
<body>

<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting Diezzle Consultants!";
  public function byebye() {
    echo self::LEAVING_MESSAGE; //accessing constant from within the class
  }
}
	
echo Goodbye::LEAVING_MESSAGE; //accessing constant from outside the class
echo "<br>";

$goodbye = new Goodbye();
$goodbye->byebye();
?>

</body>
</html>