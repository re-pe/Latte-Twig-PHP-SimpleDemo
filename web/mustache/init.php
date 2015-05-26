<?php
require_once __DIR__ . '/vendor/autoload.php';

$data['renderTemplate'] = function ($file, array $params = [])
{
    
    $mustache = new Mustache_Engine([
        'template_class_prefix' => '__MyTemplates_',
        'cache' => dirname(__FILE__).'/cache',
        'cache_file_mode' => 0666, // Please, configure your umask instead of doing this :)
        'cache_lambda_templates' => true,
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates'),
        'escape' => function($value) {
            return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        },
        'charset' => 'utf-8',
        'logger' => new Mustache_Logger_StreamLogger('php://stderr'),
        'strict_callables' => true,
        'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
    ]);

    $template = $mustache->loadTemplate('layout'); // loads __DIR__.'/views/foo.mustache';
    echo $template->render($params);
};
 