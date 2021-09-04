<?php
use Fernando\Gazpacho\Gazpacho;
use PHPUnit\Framework\TestCase;

class GazpachoTest extends TestCase
{
    public function testNothing()
    {
        $this->assertTrue(true);
    }

    public function testGazpachoHasTomatoes()
    {
        $gazpacho = new Gazpacho();
        $this->assertTrue($gazpacho->hasTomatoes());
    }
}