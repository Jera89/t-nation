<?php

namespace Helpers;

use Helpers\ConfigHelper;

class ViewHelper {
    
    public static function getViewPath($view_name)
    {
        $view_name = trim($view_name);
        $view_name = str_replace('.', DIRECTORY_SEPARATOR, $view_name);
        $file_path = ConfigHelper::getConfig('base_view_path', 'views').DIRECTORY_SEPARATOR.trim($view_name).'.php';
        
        return $file_path;
    }
    
}

