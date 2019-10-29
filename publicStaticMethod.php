<!DOCTYPE html>
<html>
<body>

<?php
class greeting {
	public static function welcome() {
		echo "Hello World!";
	}
	public function __construct() {
		self::welcome(); //Accessing a static method from another method in the same class
	}
}

new greeting();
	
class greetings {
  public static function welcome() {
    echo "Hello World!";
  }
}

class SomeOtherClass {
  public function message() {
    greetings::welcome(); //Calling a Static method from another methods in different class
  }
}
	
class domain {
	protected static function getWebsiteName() {
		return "DiezzleConsultants.co.za";
	}
}

class domainDC extends domain {
	public $websiteName;
	public function __construct() {
		$this -> websiteName = parent::getWebsiteName(); //calling a static method from a child class
	}	
}

$domaindc = new domainDC;
echo $domaindc -> websiteName;
?>
 
</body>
</html>