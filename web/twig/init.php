<?php
require_once __DIR__ . '/vendor/autoload.php';

$data['renderTemplate'] = function ($file, array $params = array())
{
	$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
	$twig = new Twig_Environment($loader, array('cache' => __DIR__ . '/cache'));
	echo $twig->render($file . '.twig', $params);
};
