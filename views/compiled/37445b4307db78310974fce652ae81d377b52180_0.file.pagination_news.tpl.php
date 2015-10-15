<?php /* Smarty version 3.1.27, created on 2015-10-05 20:37:28
         compiled from "views/pagination_news.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14733272725612c368e6cfe7_06275493%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37445b4307db78310974fce652ae81d377b52180' => 
    array (
      0 => 'views/pagination_news.tpl',
      1 => 1444070247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14733272725612c368e6cfe7_06275493',
  'variables' => 
  array (
    'page_nr' => 0,
    'total_pages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5612c368ef2c60_86902580',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5612c368ef2c60_86902580')) {
function content_5612c368ef2c60_86902580 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14733272725612c368e6cfe7_06275493';
?>
<ul class="pagination">
    <?php if ($_smarty_tpl->tpl_vars['page_nr']->value != 1) {?>
        <li><a href="?page=news&page_nr=<?php echo $_smarty_tpl->tpl_vars['page_nr']->value-1;?>
"><</a></li>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <li <?php if ($_smarty_tpl->tpl_vars['page_nr']->value == $_smarty_tpl->tpl_vars['i']->value) {?> id="active"<?php }?>><a class="pagination" href="?page=news&page_nr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
    <?php }} ?>

    <?php if ($_smarty_tpl->tpl_vars['page_nr']->value != $_smarty_tpl->tpl_vars['total_pages']->value) {?>
        <li><a href="?page=news&page_nr=<?php echo $_smarty_tpl->tpl_vars['page_nr']->value+1;?>
">></a></li>
    <?php }?>
</ul><?php }
}
?>