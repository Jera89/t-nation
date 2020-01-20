<?php

namespace Models;

use Helpers\ConfigHelper;

class Worker {
    
    public $toll_station = null;
    public $name = '';
    public $surname = '';
    public $logger = null;
    private $charged_sum = 0;
    
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
        $this->charged_sum += $charge_value;
    }
    
    public function getChargedSum()
    {
        return $this->charged_sum;
    }
    
    public function createChargeLogMessage($vehicle)
    {
        return '['.date(ConfigHelper::getConfig('log_date_format', 'Y.m.d H:i')).'] Radnik: '.$this->name.' '.$this->surname.' je naplatio putarinu u iznosu od: '.$vehicle->toll_price.'RSD, za Vozilo: '.$vehicle->brand.' '.$vehicle->model.' '.$vehicle->colour;
    }
    
}