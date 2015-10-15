<?php /* Smarty version 3.1.27, created on 2015-10-08 18:40:48
         compiled from "views/head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:115991584156169c90a8a501_91610898%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bae71229d2d60c95598ba3d88740cd5863a4dc88' => 
    array (
      0 => 'views/head.tpl',
      1 => 1444322448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115991584156169c90a8a501_91610898',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56169c90ae69e4_71044943',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56169c90ae69e4_71044943')) {
function content_56169c90ae69e4_71044943 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '115991584156169c90a8a501_91610898';
?>
<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <?php echo '<script'; ?>
 src="search/script.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://maps.googleapis.com/maps/api/js"><?php echo '</script'; ?>
>
    <link rel="shortcut icon" href="../img/flavicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]--><?php }
}
?>