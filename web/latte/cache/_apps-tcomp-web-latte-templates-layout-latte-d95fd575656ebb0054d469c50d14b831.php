<?php
// source: C:\Users\redas\phpApps\_apps\tcomp\web\latte/templates/layout.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('4946378730', 'html')
;
//
// main template
//
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php Latte\Macros\BlockMacros::callBlock($_b, 'title', $template->getParameters()) ?></title>
    </head>

    <body>
<?php Latte\Macros\BlockMacros::callBlock($_b, 'content', $template->getParameters()) ?>
    </body>
</html>
