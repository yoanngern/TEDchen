<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 14:58:35
         compiled from "includes/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63411933551cc36fbe8cc65-83960014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9638a5ce80871ea25f3d35201e147676a3ba2f6' => 
    array (
      0 => 'includes/templates/home.tpl',
      1 => 1372189319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63411933551cc36fbe8cc65-83960014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events_single' => 0,
    'videos_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc36fbe95b73_63806998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc36fbe95b73_63806998')) {function content_51cc36fbe95b73_63806998($_smarty_tpl) {?><!--variables to pull events_single and videos_list in the home page-->
<?php echo $_smarty_tpl->tpl_vars['events_single']->value;?>

<?php echo $_smarty_tpl->tpl_vars['videos_list']->value;?>
<?php }} ?>