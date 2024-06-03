<?php

class ChildClass2 extends ParentClass {
    private $childProperty2;

    public function __construct($property1, $property2, $childProperty2) {
        parent::__construct($property1, $property2);
        $this->childProperty2 = $childProperty2;
    }

    public function getChildProperty2() {
        return $this->childProperty2;
    }

    public function setChildProperty2($value) {
        $this->childProperty2 = $value;
    }

    public function multiplyWithParentProperties() {
        return $this->getProperty1() * $this->getProperty2() * $this->childProperty2;
    }

    public function power($exponent) {
        return pow($this->getProperty2(), $exponent);
    }
}
