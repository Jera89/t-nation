<?php

namespace Models;

class TrailerTruck extends Vehicle {
    
    public $toll_price = 450;

    public function getCreationLogMessage()
    {
        return '['.date('Y.m.d H:i:s').'] Kreiran Kamion sa prikolicom.';
    }
    
}

