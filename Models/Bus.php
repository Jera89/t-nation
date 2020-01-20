<?php

namespace Models;

class Bus extends Vehicle {
    
    public $toll_price = 300;

    public function getCreationLogMessage()
    {
        return '['.date('Y.m.d H:i:s').'] Kreiran Autobus.';
    }
}

