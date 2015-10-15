<?php /* Smarty version 3.1.27, created on 2015-10-07 10:01:24
         compiled from "views/pagination_exhibition.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16436498725614d154040b07_64668254%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07fb16c3bbfd2372b532d433132c2dea331875f1' => 
    array (
      0 => 'views/pagination_exhibition.tpl',
      1 => 1444204882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16436498725614d154040b07_64668254',
  'variables' => 
  array (
    'page_nr' => 0,
    'total_pages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5614d1540d0885_36414636',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5614d1540d0885_36414636')) {
function content_5614d1540d0885_36414636 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16436498725614d154040b07_64668254';
?>
<ul class="pagination">
    <?php if ($_smarty_tpl->tpl_vars['page_nr']->value != 1) {?>
        <li><a class="atag" href="?page=agenda&page_nr=<?php echo $_smarty_tpl->tpl_vars['page_nr']->value-1;?>
"><</a></li>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li <?php if ($_smarty_tpl->tpl_vars['page_nr']->value == $_smarty_tpl->tpl_vars['i']->value) {?> id="active"<?php }?>><a class="pagination" href="?page=agenda&page_nr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
    <?php }} ?>

    <?php if ($_smarty_tpl->tpl_vars['page_nr']->value != $_smarty_tpl->tpl_vars['total_pages']->value) {?>
        <li><a class="atag" href="?page=agenda&page_nr=<?php echo $_smarty_tpl->tpl_vars['page_nr']->value+1;?>
">></a></li>
    <?php }?>
</ul><?php }
}
?>