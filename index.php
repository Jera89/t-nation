<?php

require 'autoload.php';
//$config = require 'Config'.DIRECTORY_SEPARATOR.'config.php';

use Models\Bus;
use Models\Car;
use Models\TollStation;
use Models\TrailerTruck;
use Models\Truck;
use Models\Vehicle;
use Models\Worker;
use Interfaces\LoggerInterface;
use Helpers\Logger;
use Helpers\ConfigHelper;
use Helpers\ViewHelper;

$logger = new Logger(ConfigHelper::getConfig('log_file'));

$car = new Car('BMW', 'M5', 'white', $logger);
$truck = new Truck('MAN', 'D26', 'black', $logger);
$trailer_truck = new TrailerTruck('Scania', 'S730', 'grey', $logger);
$bus = new Bus('Volvo', '9400', 'blue', $logger);
$toll_station = TollStation::getInstance();

$workers_array = [];

$worker1 = new Worker($toll_station, 'Petar', 'Markovic', $logger);
$workers_array[] = $worker1;
$worker2 = new Worker($toll_station, 'Dragan', 'Petrovic', $logger);
$workers_array[] = $worker2;

$worker1->chargeToll($car);
$worker1->chargeToll($trailer_truck);

$worker2->chargeToll($truck);
$worker2->chargeToll($bus);

require ViewHelper::getViewPath('index-view');
