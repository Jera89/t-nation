<?php

namespace Models;

use Helpers\ConfigHelper;

class Car extends Vehicle {
    
    public $toll_price = 240;

    public function getCreationLogMessage()
    {
        return '['.date(ConfigHelper::getConfig('log_date_format', 'Y.m.d H:i')).'] Kreiran Automobil.';
    }
    
}

