<?php

header('HTTP/1.1 200 OK');
header('Content-Type: text/html');

foreach ($workers_array as $worker) {
    echo 'Radnik '.$worker->name.' '.$worker->surname.' je ukupno naplatio: '.$worker->getChargedSum().' RSD. <br>';
}

echo 'Na naplatnoj stanici, ukupno je naplaceno: '.$toll_station->getChargedSum().' RSD.';

