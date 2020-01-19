<?php

require_once 'autoload.php';
$config = require_once 'Config'.DIRECTORY_SEPARATOR.'config.php';

use Models\Bus;
use Models\Car;
use Models\TollStation;
use Models\TrailerTruck;
use Models\Truck;
use Models\Vehicle;
use Models\Worker;
use Helpers\Logger;

var_dump($config['log_file']);exit;

$logger = new Logger();

$car = new Car('BMW', 'M5', 'white', $logger);
$truck = new TrailerTruck('MAN', 'D26', 'black', $logger);
$trailer_truck = new TrailerTruck('Scania', 'S730', 'grey', $logger);
$bus = new Bus('Volvo', '9400', 'blue', $logger);
$toll_station = TollStation::getInstance();
$worker1 = new Worker($toll_station, 'Petar', 'Markovic');
$worker2 = new Worker($toll_station, 'Dragan', 'Petrovic');

$worker1_toll_sum = $worker1->chargeToll($car);
$worker1_toll_sum += $worker1->chargeToll($trailer_truck);
echo $worker1_toll_sum;

$worker2_toll_sum = $worker2->chargeToll($truck);
$worker2_toll_sum += $worker2->chargeToll($bus);
echo $worker2_toll_sum;
