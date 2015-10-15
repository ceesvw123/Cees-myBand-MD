<?php /* Smarty version 3.1.27, created on 2015-10-05 20:43:25
         compiled from "views/agenda.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14436876415612c4cdd5d955_29127640%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd81c212df4d949e23d0bda4bedb3f0f8e9ba51a9' => 
    array (
      0 => 'views/agenda.tpl',
      1 => 1444070605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14436876415612c4cdd5d955_29127640',
  'variables' => 
  array (
    'data' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5612c4cde1d423_18114815',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5612c4cde1d423_18114815')) {
function content_5612c4cde1d423_18114815 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14436876415612c4cdd5d955_29127640';
?>

<section>
    <h1>Exhibitions</h1>
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
            <h4 class="date"><?php echo $_smarty_tpl->tpl_vars['result']->value['dates'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['result']->value['location'];?>
</p>
            <a class="atag" href="http://<?php echo $_smarty_tpl->tpl_vars['result']->value['website'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['result']->value['website'];?>
</p></a>
            <hr class="style5">
        </article>
    <?php
$_smarty_tpl->tpl_vars['result'] = $foreach_result_Sav;
}
?>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("pagination_exhibition.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>