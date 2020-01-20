<?php

namespace Models;

abstract class Vehicle {
    
    public $brand = '';
    public $model = '';
    public $colour = '';
    public $logger = null;
    
    public function __construct($brand, $model, $colour, $logger) {
        $this->brand = $brand;
        $this->model = $model;
        $this->colour = $colour;
        $this->logger = $logger;
        $logger->logMessage($this->getCreationLogMessage());
    }
    
    public abstract function getCreationLogMessage();
    
}

