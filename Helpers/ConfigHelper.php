<?php

namespace Helpers;

class ConfigHelper {
    
    public static function getConfig($key, $default_value = null)
    {
        $config = require dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'Config'.DIRECTORY_SEPARATOR.'config.php';
        
        if(isset($config[$key])){
            return $config[$key];
        }
        if($default_value !== null){
            return $default_value;
        }
        
        return null;
    }
    
}

