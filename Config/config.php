<?php

$root_directory = dirname(dirname(__FILE__));

return [
    'root_directory' => $root_directory,
    'log_file' => $root_directory.DIRECTORY_SEPARATOR.'Logs'.DIRECTORY_SEPARATOR.'log.txt',
    'log_date_format' => 'Y.m.d H:i',
    'base_view_path' => $root_directory.DIRECTORY_SEPARATOR.'views',
];

