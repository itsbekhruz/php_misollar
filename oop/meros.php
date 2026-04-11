<?php

class pcsetup {
    public $name;
    public $model;

    public function __construct($name, $model) {
        $this->name = $name;
        $this->model = $model;
    }

    public function introduce() {
        return "nomi " . $this->name . " turi " . $this->model . ".";
    }
}

class laptop extends pcsetup {
    public $batareya;

    public function __construct($name, $model, $batareya) {
        parent::__construct($name, $model);
        $this->batareya = $batareya;
    }

   
}

$huawei = new laptop("Huawei", "MateBook X Pro", "56Wh");
echo $huawei->introduce();