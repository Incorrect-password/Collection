<?php

use PHPUNit\Framework\TestCase;

require('../functions.php');

class functions extends TestCase
{

    public function testDisplayData()
    {
        $cars = [['make'=>"vw"],['make'=>'bmw']];
        $result = displayData($cars);
        $this->assertTrue(is_string($result));
    }
}
