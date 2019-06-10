<?php

class Rectangle implements Resizeable
{
    public $width;
    public $heigth;

    public function __construct($width,$heigth)
    {
        $this->width = $width;
        $this->heigth = $heigth;
    }
    public function getWith(){
        return $this->width;
    }
    public function getHeight(){
        return $this->heigth;
    }
    public function setWith($width){
        $this->width=$width;
    }
    public function setHeight($height){
        $this->heigth=$height;
    }
    public function getArea(){
        return $this->heigth*$this->width;
    }

    public function resize($size)
    {
        $this->width += $this->width * $size / 100;
        $this->heigth += $this->heigth * $size / 100;
    }
}