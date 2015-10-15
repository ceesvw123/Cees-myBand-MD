<?php /* Smarty version 3.1.27, created on 2015-10-08 19:08:37
         compiled from "views/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19664990205616a31511ee67_08480961%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060abf0b97e0af3d1307708ca95b6c89fd7a5b4a' => 
    array (
      0 => 'views/header.tpl',
      1 => 1444324116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19664990205616a31511ee67_08480961',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5616a315182348_11739967',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5616a315182348_11739967')) {
function content_5616a315182348_11739967 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19664990205616a31511ee67_08480961';
?>
<header>
    <nav>
        <ul class="input-list style-4 clearfix">
            <li><a href="?page=damien" id="red">Damien Hirst</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 'news') {?>class="active2" <?php }?>><a class="atag" href="?page=news">News</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 'gallery') {?>class="active2" <?php }?>><a class="atag" href="?page=gallery">Gallery</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 'agenda') {?>class="active2" <?php }?>><a class="atag" href="?page=agenda">Agenda</a></li>
            <form method="post" action="?page=search" id="search">
                <input type="text" name="searchText" onkeyup="showResult(this.value)" autofocus autocomplete="off">
                <input type="image" name="searchButton" src="img/search.svg" width="22" alt="Search" id="hove">
                <div id="livesearch"></div>
            </form>
        </ul>
    </nav>
</header><?php }
}
?>