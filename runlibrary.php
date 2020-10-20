<?php

require_once 'vendor/autoload.php';

$tarohida = new Tarohida\Tarohida\Tarohida('I use tarohida/tarohida!');
var_dump($tarohida->say());
