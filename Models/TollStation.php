<?php

namespace Models;

class TollStation {
  
    private static $instance = null;
    public $id = 1;
    private $charged_sum = 0;
            
    private function __construct() 
    {
        
    }

    public static function getInstance()
    {
        if(!self::$instance){
            self::$instance = new TollStation();
        }
        
        return self::$instance;
    }
    
    public function increaseChargeSum($charge_value)
    {
        return $this->charged_sum += $charge_value;
    }
    
    public function getChargeSum()
    {
        return $this->charged_sum;
    }
  
}

