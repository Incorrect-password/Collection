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
        $this->assertEquals('<div class="item"><form method="post"><p><span class="field">make : </span><span class="value">vw</span></p><p><input type="submit" value="Delete" name="submit"></p></form></div><div class="item"><form method="post"><p><span class="field">make : </span><span class="value">bmw</span></p><p><input type="submit" value="Delete" name="submit"></p></form></div>', $result);
    }
}
