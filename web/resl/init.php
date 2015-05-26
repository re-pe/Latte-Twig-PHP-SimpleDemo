<?php
    require_once __DIR__ . '/templates.php';

    $data['renderTemplate'] = function ($file, array $params = array()){
        $homepage = Leita\Resl\homePage($params);
        echo "<pre>homepage: ", htmlentities(\print_r($homepage, true)), "</pre>";
        $homepagestr = Leita\Resl\toHtml($homepage);
        echo "<pre>hompage: ", htmlentities($homepagestr), "</pre>";
    };
