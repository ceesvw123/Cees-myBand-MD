<?php /* Smarty version 3.1.27, created on 2015-10-08 20:32:09
         compiled from "views/contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11872596515616b6a93de809_97229554%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '364f0fccffb49431a8a860371ad28c6315041020' => 
    array (
      0 => 'views/contact.tpl',
      1 => 1444323775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11872596515616b6a93de809_97229554',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5616b6a942a412_69799799',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5616b6a942a412_69799799')) {
function content_5616b6a942a412_69799799 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11872596515616b6a93de809_97229554';
?>
<h1>Contact Us</h1><br>

<form id="contact" action="?page=contact" method="POST" style="float: left">
    <div class="row">
        <label for="name">Your name:</label><br/>
        <input id="name" class="input" name="name" type="text" value="" size="30" /><br/><br>
    </div>
    <div class="row">
        <label for="email">Your email:</label><br />
        <input id="email" class="input" name="email" type="text" value="" size="30" /><br/><br>
    </div>
    <div class="row">
        <label for="message">Your massage:</label><br/><br>
        <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br/><br>
    </div>
    <input id="submit_button" type="image" src="img/send4.svg" value="Send email" width="22"/>
</form>
<div id="googleMap" style="width: 65%;height:410px; position: fixed; float: right; bottom: 80px"></div>





<?php echo '<script'; ?>
>
    var myCenter=new google.maps.LatLng(51.508742,-0.120850);

    function initialize()
    {
        var mapProp = {
            center:myCenter,
            zoom:8,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker=new google.maps.Marker({
            position:myCenter,
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
<?php echo '</script'; ?>
>
<?php }
}
?>