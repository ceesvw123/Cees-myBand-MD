<?php /* Smarty version 3.1.27, created on 2015-10-06 09:59:31
         compiled from "views/gallery.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:187503028256137f63bde118_21643653%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3a362afe6e3faddfdcad8c96064c7512f12fd26' => 
    array (
      0 => 'views/gallery.tpl',
      1 => 1444118370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187503028256137f63bde118_21643653',
  'variables' => 
  array (
    'data' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56137f63c4c0d6_05240133',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56137f63c4c0d6_05240133')) {
function content_56137f63c4c0d6_05240133 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '187503028256137f63bde118_21643653';
?>

<h1 style="text-align: center; ">Artworks</h1>
<hr class="style5" width="50%" style="margin-bottom: 35px">
<div class="image-zoom-container">
<section id="photos">
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
    <div class="zoom-container">

    <img src="<?php echo $_smarty_tpl->tpl_vars['result']->value['image'];?>
">

    </div>
    <?php
$_smarty_tpl->tpl_vars['result'] = $foreach_result_Sav;
}
?>
</section>
</div><?php }
}
?>