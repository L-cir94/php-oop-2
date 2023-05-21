<?php
/**
 * trait da usare su più classi
 */
trait weightable{
    public $weight;
    public function getWeight()
    {
        return $this-> weight;
    }
    public function setWeight($weight, $unit)
    {
        $this->weight=$weight . $unit;

    }
}