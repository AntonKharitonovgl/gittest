<?php
use \App\FirstExample;
use \App\SecondExample;
use \App\ThirdExample;

require_once  __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('demo application');

$app->add(new FirstExample());
$app->add(new SecondExample());
$app->add(new ThirdExample());

$app->run();
