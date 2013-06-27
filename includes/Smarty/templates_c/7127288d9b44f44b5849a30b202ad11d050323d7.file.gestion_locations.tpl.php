<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 13:52:11
         compiled from "includes/templates/gestion_locations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68104811551cc276bc8dd64-39355757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7127288d9b44f44b5849a30b202ad11d050323d7' => 
    array (
      0 => 'includes/templates/gestion_locations.tpl',
      1 => 1372189319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68104811551cc276bc8dd64-39355757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gestionLocationsNav' => 0,
    'gestionLocationsList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc276bc99dd2_62435782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc276bc99dd2_62435782')) {function content_51cc276bc99dd2_62435782($_smarty_tpl) {?><!--variables to pull gestion_locations_list & gestion_locations_infos in the home location page-->
<?php echo $_smarty_tpl->tpl_vars['gestionLocationsNav']->value;?>

<?php echo $_smarty_tpl->tpl_vars['gestionLocationsList']->value;?>
<?php }} ?>