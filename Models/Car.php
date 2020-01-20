<?php

namespace Models;

class Car extends Vehicle {
    
    public $toll_price = 240;

    public function getCreationLogMessage()
    {
        return '['.date('Y.m.d H:i:s').'] Kreiran Automobil.';
    }
    
}

