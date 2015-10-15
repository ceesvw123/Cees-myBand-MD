<?php /* Smarty version 3.1.27, created on 2015-10-05 21:46:17
         compiled from "views/newsarticles.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7982448515612d389643560_03243518%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a5f4b5596e58361f517860f8b37beb43c98474' => 
    array (
      0 => 'views/newsarticles.tpl',
      1 => 1444074376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7982448515612d389643560_03243518',
  'variables' => 
  array (
    'data' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5612d3896df584_41725435',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5612d3896df584_41725435')) {
function content_5612d3896df584_41725435 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7982448515612d389643560_03243518';
?>

<section>
    <h1>News</h1>
    <hr class="style5">
    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['result']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
$foreach_result_Sav = $_smarty_tpl->tpl_vars['result'];
?>
        <article style="margin-bottom: 25px;">
            <h1 id="red2"><?php echo $_smarty_tpl->tpl_vars['result']->value['title'];?>
</h1>
            <h4 class="date"><?php echo $_smarty_tpl->tpl_vars['result']->value['date_created'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['result']->value['content'];?>
</p>
            <img class="img" src="<?php echo $_smarty_tpl->tpl_vars['result']->value['image'];?>
" height="200">
            <hr class="style5">
        </article>
    <?php
$_smarty_tpl->tpl_vars['result'] = $foreach_result_Sav;
}
?>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("pagination_news.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>