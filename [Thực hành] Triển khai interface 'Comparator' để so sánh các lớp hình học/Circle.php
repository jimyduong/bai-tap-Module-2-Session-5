<?php

class Circle
{
    public $radius;
    public function __construct($radius)
    {$this->radius=$radius;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function setRadius($radius){
        $this->radius=$radius;
    }
}