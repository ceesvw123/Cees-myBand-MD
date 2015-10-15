<?php /* Smarty version 3.1.27, created on 2015-10-08 20:04:50
         compiled from "views/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17568673255616b0428e00a0_16874615%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1e834f4c77b46cf623037da69a6fe45cfb8ef7' => 
    array (
      0 => 'views/footer.tpl',
      1 => 1444327488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17568673255616b0428e00a0_16874615',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5616b042940bc9_90523965',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5616b042940bc9_90523965')) {
function content_5616b042940bc9_90523965 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17568673255616b0428e00a0_16874615';
?>
<footer>
    <ul class="input-list style-4 clearfix">
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 'contact') {?> <?php }?>><a class="contact" href="?page=contact">Contact</a></li>
        <div id="social">
            <a href="https://twitter.com/hirst_official" class="socialIcon">
                <img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter1.png" width="35" height="35" />
            </a>
            <a href="https://www.linkedin.com/grp/home?gid=3927911" class="socialIcon">
                <img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin1.png" width="35" height="35" />
            </a>
            <a href="https://www.facebook.com/Damien-Hirst-official-111242142343717/timeline/" class="socialIcon">
                <img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook1.png" width="35" height="35" />
            </a>
            <a href="https://www.pinterest.com/arslog/damien-hirst/" class="socialIcon">
                <img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest1.png" width="35" height="35" />
            </a>
        </div>
        <p id="left">&copyCees van Wanrooy</p>
    </ul>
</footer>
</body>
</html><?php }
}
?>