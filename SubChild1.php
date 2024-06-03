<?php

class SubChild1 extends ChildClass1 {
    private $subChildProperty1;

    public function __construct($property1, $property2, $childProperty1, $subChildProperty1) {
        parent::__construct($property1, $property2, $childProperty1);
        $this->subChildProperty1 = $subChildProperty1;
    }

    public function getSubChildProperty1() {
        return $this->subChildProperty1;
    }

    public function setSubChildProperty1($value) {
        $this->subChildProperty1 = $value;
    }

    public function addToChildProperty() {
        return $this->getChildProperty1() + $this->subChildProperty1;
    }

    public function addToParentProperty1() {
        return $this->getProperty1() + $this->subChildProperty1;
    }
}