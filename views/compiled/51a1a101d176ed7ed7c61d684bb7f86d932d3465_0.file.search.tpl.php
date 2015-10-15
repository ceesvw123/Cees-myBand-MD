<?php /* Smarty version 3.1.27, created on 2015-10-06 10:14:48
         compiled from "/Applications/MAMP/htdocs/php/myband/views/search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:943287678561382f85ab150_01971766%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51a1a101d176ed7ed7c61d684bb7f86d932d3465' => 
    array (
      0 => '/Applications/MAMP/htdocs/php/myband/views/search.tpl',
      1 => 1443369652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '943287678561382f85ab150_01971766',
  'variables' => 
  array (
    'searchResult' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561382f85cd298_07813653',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561382f85cd298_07813653')) {
function content_561382f85cd298_07813653 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '943287678561382f85ab150_01971766';
?>
<section>
    <?php
$_from = $_smarty_tpl->tpl_vars['searchResult']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['result']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
$foreach_result_Sav = $_smarty_tpl->tpl_vars['result'];
?>
        <article id="articlelist">
            <h1 id="red2"><?php echo $_smarty_tpl->tpl_vars['result']->value['title'];?>
</h1>
            <h4 class="date"><?php echo $_smarty_tpl->tpl_vars['result']->value['date_created'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['result']->value['content'];?>
</p>
            <img src="<?php echo $_smarty_tpl->tpl_vars['result']->value['image'];?>
" height="200">
            <hr class="style5">
        </article>

    <?php
$_smarty_tpl->tpl_vars['result'] = $foreach_result_Sav;
}
?>
</section><?php }
}
?>