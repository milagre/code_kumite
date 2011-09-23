<?php

class TestSuite extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        return new self();
    }

    public function __construct() {
        $this->addTestSuite('TestBowlingGame');
    }


}

