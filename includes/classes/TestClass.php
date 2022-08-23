<?php
class TestClass {

	public function __construct(){
	}

	public function test() {
		hello();
		hello();
		$a = new AnotherTestClass();
		$a->example();
		//echo "This is the test function";
	}

}

?>