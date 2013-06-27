<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 15:43:51
         compiled from "includes/templates/gestion_events_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149356404951cc3de36f6fd9-73547165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dd6559d9b4efaa4ff1669113636a5309881f22a' => 
    array (
      0 => 'includes/templates/gestion_events_role.tpl',
      1 => 1372339983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149356404951cc3de36f6fd9-73547165',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc3de373cda0_36129448',
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
    'role' => 0,
    'gestionEventsRoleInfos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc3de373cda0_36129448')) {function content_51cc3de373cda0_36129448($_smarty_tpl) {?>

<article class="gestion_events_role span12"> 
    <div class="span6">
        <!--button new-->
    <a href="?action=gestion_events_role_new" class="theButton">New</a>
    <div class="scroll">
    	<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
	    	<dl>
	            <dt><?php echo $_smarty_tpl->tpl_vars['event']->value['event']->getMainTopic();?>
</dt>
	            <?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event']->value['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
    				<dd><a href="?action=gestion_events_role_infos&name=<?php echo $_smarty_tpl->tpl_vars['role']->value->getName();?>
&event=<?php echo $_smarty_tpl->tpl_vars['role']->value->getEventNo();?>
&organizer=<?php echo $_smarty_tpl->tpl_vars['role']->value->getOrganizerPersonNo();?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value->getName();?>
</a></dd>
				<?php } ?>
	        </dl>
    	<?php } ?>
    </div>
    </div>
 <?php echo $_smarty_tpl->tpl_vars['gestionEventsRoleInfos']->value;?>

</article>


<?php }} ?>