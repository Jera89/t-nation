<?php

namespace Models;

class Worker {
    
    public $toll_station = null;
    public $name = '';
    public $surname = '';
    public $logger = null;
    private $charge_sum = 0;
    
    public function __construct($toll_station, $name, $surname, $logger) {
        $this->toll_station = $toll_station;
        $this->name = $name;
        $this->surname = $surname;
        $this->logger = $logger;
    }
    
    public function chargeToll($vehicle)
    {
        $this->increaseChargeSum($vehicle->toll_price);
        $this->toll_station->increaseChargeSum($vehicle->toll_price);
        $this->logger->logMessage($this->createChargeLogMessage($vehicle));
        return $vehicle->toll_price;
    }
    
    public function increaseChargeSum($charge_value)
    {
        $this->charge_sum += $charge_value;
    }
    
    public function getChargeSum()
    {
        return $this->charge_sum;
    }
    
    public function createChargeLogMessage($vehicle)
    {
        return '['.date('Y.m.d H:i:s').'] Radnik: '.$this->name.' '.$this->surname.' je naplatio putarinu u iznosu od: '.$vehicle->toll_price.'RSD, za Vozilo: '.$vehicle->brand.' '.$vehicle->model.' '.$vehicle->colour;
    }
    
}