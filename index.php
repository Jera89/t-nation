<?php

require 'autoload.php';

use Models\Bus;
use Models\Car;
use Models\TollStation;
use Models\TrailerTruck;
use Models\Truck;
use Models\Vehicle;
use Models\Worker;
use Helpers\Logger;

$logger = new Logger();
var_dump($logger);

$bus = new Bus('Volvo', '9400', 'blue', $logger);
var_dump($bus);