<?php

namespace Models;

class Worker {
    
    public $toll_station = null;
    public $name = '';
    public $surname = '';
    
    public function __construct($toll_station, $name, $surname) {
        $this->toll_station = $toll_station;
        $this->name = $name;
        $this->surname = $surname;
    }
    
    public function chargeToll($vehicle)
    {
        return $vehicle->toll_price;
    }
    
}