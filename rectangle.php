<?php


class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    //Tính tích
    public function getArea()
    {
        return $this->width * $this->height;
    }
    //Tính chu vi
    public function getPerimeter(){
        return ($this->width + $this->height) * 2;
    }
    //Hiển thị
    public function display(){
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}