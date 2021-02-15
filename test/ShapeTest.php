<?php


class ShapeTest extends PHPUnit_Framework_TestCase
{

    public function testGetArea()
    {
        $s = new Shape(3,2);
        $this->assertEquals(6, $s->getArea());
    }

}
