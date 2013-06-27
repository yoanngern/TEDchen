<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 15:28:04
         compiled from "includes/templates/gestion_events_role_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87358175051cc3de4ca1e21-57960722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fa8c63484136c097ef2894b7e769647ff1b5bba' => 
    array (
      0 => 'includes/templates/gestion_events_role_infos.tpl',
      1 => 1372280971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87358175051cc3de4ca1e21-57960722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role' => 0,
    'events' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc3de4ce1fd3_54242340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc3de4ce1fd3_54242340')) {function content_51cc3de4ce1fd3_54242340($_smarty_tpl) {?>
<div class="span6">
                <p>
                <input type="hidden" name="action" value="gestion_events_role_send" />
                <input type="submit" name="gestion_events_role_send" value="Save" />
            </p>
<article class="gestion_events_role_infos">
    <form name="gestion_event_role_infos" method="post" action="">
            <!--button save-->


        <legend>Choose event</legend>   
        <select>
            
            <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value->getEventNo();?>
">Choose event</option>
            <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event']->getNo();?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['event']->getMainTopic();?>
</option>
            <?php } ?>
        </select>
       
       
        <label for="eventRoleName">Event role name</label>
        <input type="text" name="role" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->getName();?>
" />
        
       
        <!--
        <legend>Chose level</legend>   
        <select>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option> 
        </select>
        -->
 
    </form>
</article>
</div><?php }} ?>