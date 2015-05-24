<?php
require_once __DIR__ . '/vendor/autoload.php';

$data['renderTemplate'] = function ($file, array $params = array())
{
    $latte = new Latte\Engine();
    $latte->setTempDirectory(__DIR__ . '/cache');
    $latte->render(__DIR__ . '/templates/' . $file . '.latte', $params);
};
