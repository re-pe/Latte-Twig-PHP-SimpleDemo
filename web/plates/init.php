<?php
require_once __DIR__ . '/vendor/autoload.php';

$data['renderTemplate'] = function ($file, array $params = array())
{
    $plates = new League\Plates\Engine(__DIR__ . '/templates', 'plate');
    echo $plates->render('homepage', $params);
};

 