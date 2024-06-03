<?php

final class ChildClass3 extends ParentClass {
    private $childProperty3;

    public function __construct($property1, $property2, $childProperty3) {
        parent::__construct($property1, $property2);
        $this->childProperty3 = $childProperty3;
    }

    public function getChildProperty3() {
        return $this->childProperty3;
    }

    public function setChildProperty3($value) {
        $this->childProperty3 = $value;
    }

    public function subtractFromParentProperties() {
        return $this->getProperty1() - $this->getProperty2() - $this->childProperty3;
    }

    public function power($exponent) {
        return pow($this->getProperty1() - $this->getProperty2(), $exponent);
    }
}
