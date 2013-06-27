<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 15:27:56
         compiled from "includes/templates/gestion_events_mail_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126611125851cc3ddca8aa90-95565596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'accd34cc8925b8e9e32b8c541a9abe0b39df29ca' => 
    array (
      0 => 'includes/templates/gestion_events_mail_edit.tpl',
      1 => 1372280444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126611125851cc3ddca8aa90-95565596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'person' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc3ddcab5cd7_62855357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc3ddcab5cd7_62855357')) {function content_51cc3ddcab5cd7_62855357($_smarty_tpl) {?>

<div class="span6">
    <form class="gestion_events_mail_edit" method="post" action="">

        <!--send email button-->
        <input type="hidden" name="action" value="gestion_events_mail_edit" />
        <input type="submit" name="update" value="Send" />

        <!--adress mail-->

        <fieldset>
            <label>Email</label>
            <input type="email" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->getEmail();?>
">
            

            <label>Subject</label>
            <input type="text" name="subject" value="">
            
            
            <label>Message</label>
            <textarea name="message"></textarea>
            
        </fieldset>
    </form>
</div><?php }} ?>