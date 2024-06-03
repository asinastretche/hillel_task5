<?php

class ChildClass1 extends ParentClass {
    private $childProperty1;

    public function __construct($property1, $property2, $childProperty1) {
        parent::__construct($property1, $property2);
        $this->childProperty1 = $childProperty1;
    }

    public function getChildProperty1() {
        return $this->childProperty1;
    }

    public function setChildProperty1($value) {
        $this->childProperty1 = $value;
    }

    public function sumWithParentProperties() {
        return $this->getProperty1() + $this->getProperty2() + $this->childProperty1;
    }

    public function power($exponent) {
        return pow($this->getProperty1(), $exponent);
    }
}
