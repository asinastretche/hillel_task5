<?php

class SubChild2 extends ChildClass1 {
    private $subChildProperty2;

    public function __construct($property1, $property2, $childProperty1, $subChildProperty2) {
        parent::__construct($property1, $property2, $childProperty1);
        $this->subChildProperty2 = $subChildProperty2;
    }

    public function getSubChildProperty2() {
        return $this->subChildProperty2;
    }

    public function setSubChildProperty2($value) {
        $this->subChildProperty2 = $value;
    }

    public function subtractFromChildProperty() {
        return $this->getChildProperty1() - $this->subChildProperty2;
    }

    public function subtractFromParentProperty1() {
        return $this->getProperty1() - $this->subChildProperty2;
    }
}