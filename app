<?php

require_once  __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('demo application');

$app->add(new \App\firstexample());
$app->add(new \App\secondexample());
$app->add(new \App\thirdexample());

$app->run();
