<?php /* Smarty version 3.1.25-dev/0, created on 2015-05-25 01:20:02
         compiled from "C:/Users/redas/phpApps/_apps/tcomp/web/smarty/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3000755624e92c31997_99499029%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '031c597cbe82155dfc9d5fe01bb3f09e136386cc' => 
    array (
      0 => 'C:/Users/redas/phpApps/_apps/tcomp/web/smarty/templates/index.tpl',
      1 => 1432505960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3000755624e92c31997_99499029',
  'variables' => 
  array (
    'title' => 0,
    'engine' => 0,
    'pages' => 0,
    'page' => 0,
    'currentPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/0',
  'unifunc' => 'content_55624e9307d7a8_53607242',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55624e9307d7a8_53607242')) {
function content_55624e9307d7a8_53607242 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3000755624e92c31997_99499029';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0);
?>


    <h2><?php echo $_smarty_tpl->tpl_vars['engine']->value;?>
</h2>
    <?php if (isset($_smarty_tpl->tpl_vars['pages']->value) && is_array($_smarty_tpl->tpl_vars['pages']->value) > 0) {?>
        <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['pages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['page']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
$foreach_page_Sav = $_smarty_tpl->tpl_vars['page'];
?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['currentPage']->value) {?>
                <li class="current"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } else { ?>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['page'] = $foreach_page_Sav;
}
?>
        </ul>
    <?php } else { ?>
        <p>empty</p>
    <?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>