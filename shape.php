<?php


define('SHAPE_TYPE', '1');

class shape
{
    private $id;
    public $name;

    protected $width;
    protected $length;

    /**
     * shape constructor.
     * @param int $width
     * @param int $length
     */
    public function __construct($width = 0, $length = 0)
    {
        $this->id = date('YMDhms');
        $this->length = $length;
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * get area object
     * @return float|int
     */
    public function getArea()
    {
        return $this->length * $this->width;
    }

    /**
     * Obter o tipo de objecto
     * @return mixed
     */
    static public function getShapeType()
    {
        return self::SHAPE_TYPE;
    }

    /**
     * Obter uma copia do objecto
     * @return shape
     */
    public function getCopyObject()
    {
        $copy = $this;
        $copy->id = date('YMDhms');
        return $copy;
    }
}