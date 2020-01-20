<?php

namespace Models;

class Truck extends Vehicle {
    
    public $toll_price = 350;

    public function getCreationLogMessage()
    {
        return '['.date('Y.m.d H:i:s').'] Kreiran Kamion bez prikolice.';
    }
}

