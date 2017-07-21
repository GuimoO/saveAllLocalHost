<?php

class Collar
{
    /**
     * La taille du collier
     * @var Integer
     */
    private $size;

    /**
     * La couleur du collier
     * @var String
     */
    private $color;

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return Collar
     */
    public function setSize(int $size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return String
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param String $color
     * @return Collar
     */
    public function setColor(String $color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Collar constructor.
     * @param $size
     * @param $color
     */
    public function __construct($size, $color)
    {
        $this->size = $size;
        $this->color = $color;
    }

    /**
    *return property of collar
    */
    public function __toString(){

        $str = 'La taille du collier est ' . $this->size . ' et sa couleur est ' . $this->color;
        return $str;
    }
}