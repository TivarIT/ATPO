<?php
class MyClassTest extends PHPUnit\Framework\TestCase{
    public function testMultiply(){
        $myclass = new App\MyClass;
        $result = $myclass->multiply(6);
        $this->assertEquals(12, $result);
    }
}
?>
