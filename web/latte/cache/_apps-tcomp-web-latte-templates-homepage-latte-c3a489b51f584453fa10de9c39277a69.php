<?php
// source: C:\Users\redas.peskaitis\phpApps\_apps\tcomp\web\latte/templates/homepage.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('2239013719', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb223da0887c_title')) { function _lb223da0887c_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;echo Latte\Runtime\Filters::escapeHtml($title, ENT_NOQUOTES) ;
}}

//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb9fb1e3ed57_content')) { function _lb9fb1e3ed57_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <h2><?php echo Latte\Runtime\Filters::escapeHtml($engine, ENT_NOQUOTES) ?></h2>
<?php if ($pages) { ?>
        <ul>
<?php $iterations = 0; foreach ($pages as $page) { ?>            <li<?php if ($_l->tmp = array_filter(array($page == $currentPage ? 'current' : NULL))) echo ' class="' . Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT) . '"' ?>
><?php echo Latte\Runtime\Filters::escapeHtml($page, ENT_NOQUOTES) ?></li>
<?php $iterations++; } ?>        </ul>
<?php } else { ?>
        <p>empty</p>
<?php } 
}}

//
// end of blocks
//

// template extending

$_l->extends = "layout.latte"; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

//
// main template
// ?>

<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>


<?php call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 