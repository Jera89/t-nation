<?php

namespace Models;

class TollStation {
  
    private static $instance = null;
    public $id = 1;
            
    private function __construct() 
    {
        
    }

    public static function getInstance()
    {
        if(!self::$instance){
            self::$instance = new TollStation();
        }
        
        return self::instance;
    }
  
}

