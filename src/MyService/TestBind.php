<?php

namespace App\MyService;

class TestBind
{
    private $testSimon;

    public function __construct($testSimon)
    {
        $this->testSimon = $testSimon;
    }

    public function dumpTest()
    {
        dump($this->testSimon);die;
    }
}
