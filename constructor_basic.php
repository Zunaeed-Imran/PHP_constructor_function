<?php

class MyClass {
    public $property1;
    public $property2;

    public function __construct($value1, $value2) {
        $this->property1 = $value1;
        $this->property2 = $value2;
    }
}

$obj = new MyClass('Hello', 'World');
echo $obj;

?>