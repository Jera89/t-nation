<?php

namespace Models;

use Helpers\ConfigHelper;

class TrailerTruck extends Vehicle {
    
    public $toll_price = 450;

    public function getCreationLogMessage()
    {
        return '['.date(ConfigHelper::getConfig('log_date_format', 'Y.m.d H:i')).'] Kreiran Kamion sa prikolicom.';
    }
    
}

