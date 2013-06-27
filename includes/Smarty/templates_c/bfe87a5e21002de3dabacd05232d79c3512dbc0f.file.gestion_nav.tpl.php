<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 13:52:11
         compiled from "includes/templates/gestion_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82314123151cc276bb835c6-72958567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe87a5e21002de3dabacd05232d79c3512dbc0f' => 
    array (
      0 => 'includes/templates/gestion_nav.tpl',
      1 => 1372189319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82314123151cc276bb835c6-72958567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subAction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc276bbb8548_73861103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc276bbb8548_73861103')) {function content_51cc276bbb8548_73861103($_smarty_tpl) {?>

<!--menu navigation of gestion pages-->
<ul id="subnav" class="gestion_nav span12" >
    <li <?php if ($_smarty_tpl->tpl_vars['subAction']->value=='gestion_events'){?>class="selected"<?php }?>><a href="?action=gestion_events">Events</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['subAction']->value=='gestion_locations'){?>class="selected"<?php }?>><a  href="?action=gestion_locations">Locations</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['subAction']->value=='gestion_contacts'){?>class="selected"<?php }?>><a href="?action=gestion_contacts">Contacts</a></li>
</ul><?php }} ?>