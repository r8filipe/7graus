<?php

define('SHAPE_TYPE', '3');

class circle extends shape
{
    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
        parent::__construct();
    }

    /**
     * get area circle
     * @return float
     */

    public function getArea()
    {
        return 3.14 * $this->radius;
    }

    public function getCopyObject()
    {
        $copy = $this;
        return $copy;
    }
}