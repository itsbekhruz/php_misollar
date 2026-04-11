<?php

class automobillar{
    public $name;
    public $color;
    public $model;

    function __construct($name, $color, $model){
        $this->name = $name;
        $this->color = $color;
        $this->model = $model;
        
    }

    function bexruz(){
        echo "mashina nomi: " . $this->name ."<br>". " Rangi: " . $this->color ."<br>". " Modeli: " . $this->model ."<br>";
    }
}

$bmw = new automobillar("BMW", "Qora", "m5");
$bmw->bexruz();
