<?php /* Smarty version 3.1.27, created on 2015-10-09 11:19:14
         compiled from "views/damien.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:132333956356178692e8d916_10522730%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57f98bee77638398c14dd3e9aaa2a43f9d6df087' => 
    array (
      0 => 'views/damien.tpl',
      1 => 1444382352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132333956356178692e8d916_10522730',
  'variables' => 
  array (
    'data2' => 0,
    'result' => 0,
    'data1' => 0,
    'data3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56178692f2d9f8_65352576',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56178692f2d9f8_65352576')) {
function content_56178692f2d9f8_65352576 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '132333956356178692e8d916_10522730';
?>
<div id="captioned-gallery">
    <figure class="slider">
        <figure>
            <img src="https://static-secure.guim.co.uk/sys-images/Guardian/Pix/pictures/2014/4/8/1396969917643/Damien-Hirst-in-front-of--012.jpg" alt>
            <figcaption>Hobbiton, New Zealand</figcaption>
        </figure>
        <figure>
            <img src="http://whatsonwalsall.co.uk/UserFiles/image/The%20New%20Art%20Gallery/DamienHirst/Away%20from%20the%20Flock.670x352.jpg" alt>
            <figcaption>Wanaka, New Zealand</figcaption>
        </figure>
        <figure>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/utah-peak.jpg" alt>
            <figcaption>Utah, United States</figcaption>
        </figure>
        <figure>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/bryce-canyon-utah.jpg" alt>
            <figcaption>Bryce Canyon, Utah, United States</figcaption>
        </figure>
        <figure>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/hobbiton-lake.jpg" alt>
            <figcaption>Hobbiton, New Zealand</figcaption>
        </figure>
    </figure>
</div>


<section>
    <h1 id="red2">Latest Artworks</h1>

    <div class="image-zoom-container">
        <section id="photos2">
            <?php
$_from = $_smarty_tpl->tpl_vars['data2']->value;
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
    </div>
</section>
<hr class="style5" style="margin-bottom: 35px">
<section>
    <h1 id="red2">Latest News</h1>

    <?php
$_from = $_smarty_tpl->tpl_vars['data1']->value;
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
            <h4 class="date2"><?php echo $_smarty_tpl->tpl_vars['result']->value['date_created'];?>
</h4>
                <img class="img" src="<?php echo $_smarty_tpl->tpl_vars['result']->value['image'];?>
" height="200">
                <p><?php echo $_smarty_tpl->tpl_vars['result']->value['content'];?>
</p>
        </article>
    <?php
$_smarty_tpl->tpl_vars['result'] = $foreach_result_Sav;
}
?>
</section>
<hr class="style5" style="margin-bottom: 35px">



<section style="margin-bottom: 200px">
    <h1 id="red2">Latest Exhibitions</h1>

    <?php
$_from = $_smarty_tpl->tpl_vars['data3']->value;
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
            <h4 class="date2"><?php echo $_smarty_tpl->tpl_vars['result']->value['dates'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['result']->value['location'];?>
</p>
            <a class="atag" href="http://<?php echo $_smarty_tpl->tpl_vars['result']->value['website'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['result']->value['website'];?>
</p></a>
        </article>
    <?php
$_smarty_tpl->tpl_vars['result'] = $foreach_result_Sav;
}
?>
</section><?php }
}
?>