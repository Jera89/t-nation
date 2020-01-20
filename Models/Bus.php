<?php

namespace Models;

use Helpers\ConfigHelper;

class Bus extends Vehicle {
    
    public $toll_price = 300;

    public function getCreationLogMessage()
    {
        return '['.date(ConfigHelper::getConfig('log_date_format', 'Y.m.d H:i')).'] Kreiran Autobus.';
    }
}

