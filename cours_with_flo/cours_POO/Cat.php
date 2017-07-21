<?php

class Cat
{
    const FATIGUE_MAX = 100;
    const FATIGUE_INCR = 10;

    /**
     * Le nom dui chat
     * @var String
     */
    private $name;

    /**
     * Le collier du chat
     * @var Collar
     */
    private $collar;

    /**
     * La couleur du chat
     * @var String
     */
    private $color;

    /**
     * Niveau de fatigue du chat (de 0 à 100).
     * @var integer
     */
    private $fatigue = 0;

    private $image;

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @return Cat
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param String $name
     * @return Cat
     */
    public function setName(String $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Collar
     */
    public function getCollar()
    {
        return $this->collar;
    }

    /**
     * @param Collar $collar
     * @return Cat
     */
    public function setCollar(Collar $collar)
    {
        $this->collar = $collar;
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
     * @return Cat
     */
    public function setColor(String $color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return int
     */
    public function getFatigue()
    {
        return $this->fatigue;
    }

    /**
     * @param int $fatigue
     * @return Cat
     */
    public function setFatigue(int $fatigue)
    {
        $this->fatigue = $fatigue;
        return $this;
    }

    /**
     * Indique si le chat est fatigué
     * @return bool
     */
    public function isTired()
    {
        $result = false;
        if ($this->fatigue >= self::FATIGUE_MAX) {
            $result = true;
        }
        return $result;
    }

    /**
     * Pour que note chat soit en pleine forme !
     */
    public function rest()
    {
        $this->fatigue = 0;
    }

    /**
     * Le chat marche et surtout se dépense.
     */
    public function walk()
    {
        if ($this->getFatigue() < self::FATIGUE_MAX) {
            $this->setFatigue($this->getFatigue() + self::FATIGUE_INCR);
        }
    }

    /**
     * Cat constructor.
     * @param $color
     * @param Collar|null $collar
     */
    public function __construct($name, $color, Collar $collar = null)
    {
        $this->name = $name;
        $this->color = $color;
        if ($collar !== null) {
            $this->collar = $collar;
        }
    }

    /**
    *return property of collar
    */

    public function __toString() {

        $str = "Le nom du chat est " . $this->name . " sa couleur est " . $this->color . ", son état de fatigue est " . $this->fatigue . " et sa photo est <img src='" . $this->image . "' alt='image du chat'/>. son collier " . $this->collar . '<br>'; 

        return $str;
    }

}