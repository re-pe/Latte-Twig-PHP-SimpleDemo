<?php
require_once __DIR__ . '/vendor/autoload.php';
use Tonic\Tonic;

$data['renderTemplate'] = function ($file, array $params = array())
{
	$tpl = new Tonic();
	$tpl->load(__DIR__ . "/templates/layout.tonic");
	foreach($params as $key=>$value){
		$tpl->assign($key, $value);
	}
	$tpl->render();
};
