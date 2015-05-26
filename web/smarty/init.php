<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require_once __DIR__ . '/vendor/autoload.php';

//require '../libs/Smarty.class.php';

$data['renderTemplate'] = function ($file, array $params = array())
{
    $smarty = new Smarty;
    $smarty
        ->setTemplateDir(__DIR__ . '/templates')
        ->setCompileDir(__DIR__ . '/templates_c')
        ->setCacheDir(__DIR__ . './cache')
        ->setConfigDir(__DIR__ . './configs');
//    $smarty->enableSecurity();
    //$smarty->force_compile = true;
//    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 120;
//    $smarty->testInstall();

    if(count($params) > 0){
        $smarty->assign($params);
    }

    $smarty->display('index.tpl');
};