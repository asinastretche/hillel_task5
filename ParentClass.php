<?php

abstract class ParentClass {
    private $property1;
    private $property2;

    public function __construct($property1, $property2) {
        $this->property1 = $property1;
        $this->property2 = $property2;
    }

    public function getProperty1() {
        return $this->property1;
    }

    public function setProperty1($value) {
        $this->property1 = $value;
    }

    public function getProperty2() {
        return $this->property2;
    }

    public function setProperty2($value) {
        $this->property2 = $value;
    }

    abstract public function power($exponent);
}