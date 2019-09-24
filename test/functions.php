<?php

use PHPUNit\Framework\TestCase;

require('../functions.php');

class functionsTest extends TestCase
{

    public function testDisplayData()
    {
        $cars = [['make'=>"vw"],['make'=>'bmw']];
        $result = displayData($cars);
        $this->assertTrue(is_string($result));
        $this->assertEquals("<p>make : vw</p><p>make : bmw</p>", $result);
    }
}
