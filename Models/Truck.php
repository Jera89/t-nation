<?php

namespace Models;

use Helpers\ConfigHelper;

class Truck extends Vehicle {
    
    public $toll_price = 350;

    public function getCreationLogMessage()
    {
        return '['.date(ConfigHelper::getConfig('log_date_format', 'Y.m.d H:i')).'] Kreiran Kamion bez prikolice.';
    }
}

