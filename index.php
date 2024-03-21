<?php

require __DIR__ . '/vendor/autoload.php';
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->OutputFile('Teste.pdf');