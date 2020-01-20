<?php

namespace Helpers;

use Interfaces\LoggerInterface;

class Logger implements LoggerInterface {
    
    public $log_file = '';
    
    public function __construct($log_file) {
        $this->log_file = $log_file;
    }


    public function logMessage($message)
    {
        $message = $message.PHP_EOL;
        return file_put_contents($this->log_file, $message, FILE_APPEND);
    }
    
    
    
}

