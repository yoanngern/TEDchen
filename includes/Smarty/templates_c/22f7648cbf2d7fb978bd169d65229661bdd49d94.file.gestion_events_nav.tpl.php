<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 14:56:11
         compiled from "includes/templates/gestion_events_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158086802851cc366bed11d7-03459186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22f7648cbf2d7fb978bd169d65229661bdd49d94' => 
    array (
      0 => 'includes/templates/gestion_events_nav.tpl',
      1 => 1372189319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158086802851cc366bed11d7-03459186',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc366befbdc8_41243925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc366befbdc8_41243925')) {function content_51cc366befbdc8_41243925($_smarty_tpl) {?><nav class="gestion_events_nav gestion_subnav">
    <div class="grey_bar"></div>  
    <h1>Event</h1>
    <ul>
        <li><a href="?action=gestion_events">All events</a></li>
        <li><a href="?action=gestion_events_single">Create event</a></li>
        <li><a href="?action=gestion_events_motivation">Participants</a></li>
        <li><a href="?action=gestion_events_mail">Mailing</a>   </li>
        <li><a href="?action=gestion_events_role">Event role</a></li>
   </ul>
</nav><?php }} ?>