<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 13:52:11
         compiled from "includes/templates/gestion_locations_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80766693951cc276bc623d4-82251359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f96d60a41e84d8830c983d0b06c947345d3e6342' => 
    array (
      0 => 'includes/templates/gestion_locations_list.tpl',
      1 => 1372189319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80766693951cc276bc623d4-82251359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'locations' => 0,
    'location' => 0,
    'gestionLocationsInfos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc276bc884a4_52961709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc276bc884a4_52961709')) {function content_51cc276bc884a4_52961709($_smarty_tpl) {?>

<!--page with a list of the already existing locations -->
<article class="gestion_locations_list span12">
    <div class="span6">
        <!--CSS button done-->
        <a href="?action=gestion_locations_new" class="theButton">New</a>
        <!--Locations List-->    
        <div class="scroll">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value){
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
                <li><a href="?action=gestion_locations_infos&id=<?php echo $_smarty_tpl->tpl_vars['location']->value->getName();?>
"><?php echo $_smarty_tpl->tpl_vars['location']->value->getName();?>
</a></li>
            <?php } ?>
        </ul>
        </div>
    </div>
       
    <?php echo $_smarty_tpl->tpl_vars['gestionLocationsInfos']->value;?>

</article><?php }} ?>