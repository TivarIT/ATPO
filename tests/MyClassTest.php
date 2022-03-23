<?php
class MyClassTest extends PHPUnit\Framework\TestCase{
    public function testMultiply(){
        $myclass = new App\MyClass;
        $result1 = $myclass->multiply(6, 2);
        $this->assertEquals(12, $result1);
    }
    public function testDivision(){
        $myclass = new App\MyClass;
        $result2 = $myclass->division(6, 2);
        $this->assertEquals(3, $result2);
    }
}
?>
