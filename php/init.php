<?php
$data['renderTemplate'] = function($__file, array $__params = array())
{
	extract($__params, EXTR_SKIP);
	require __DIR__ . '/templates/' . $__file . '.php';
};
