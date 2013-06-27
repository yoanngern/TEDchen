<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 15:27:54
         compiled from "includes/templates/gestion_events_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87353351751cc3dda7d3ae7-86924821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89862068da3416dc6bf26eb1986a8d5a08f4f9b6' => 
    array (
      0 => 'includes/templates/gestion_events_mail.tpl',
      1 => 1372195852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87353351751cc3dda7d3ae7-86924821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'registrations' => 0,
    'registration' => 0,
    'gestionEventsMailEdit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc3dda813486_37314282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc3dda813486_37314282')) {function content_51cc3dda813486_37314282($_smarty_tpl) {?>
<article class="gestion_events_mail span12">   

    <!--list participants tab-->
    <section>
        <!--mail nav -->
        
      <!--  <nav class="gestion_events_mail_nav offset2 span6">
            <a href="#refused">Refused</a>
            <a href="#waiting">Waiting</a>
            <a href="#accepted">Accepted</a>
        </nav>
      -->
        
        <section id="refused" class="span6">
            <div class="scroll">
                <?php  $_smarty_tpl->tpl_vars['registration'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['registration']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['registrations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['registration']->key => $_smarty_tpl->tpl_vars['registration']->value){
$_smarty_tpl->tpl_vars['registration']->_loop = true;
?>
                    <ul>
                        <li><a href="?action=gestion_events_mail_edit&id=<?php echo $_smarty_tpl->tpl_vars['registration']->value['person']->getNo();?>
">
                                <?php echo $_smarty_tpl->tpl_vars['registration']->value['person']->getName();?>

                                <?php echo $_smarty_tpl->tpl_vars['registration']->value['person']->getFirstName();?>

                                <div><?php echo $_smarty_tpl->tpl_vars['registration']->value['registration']->getStatus();?>
</div>
                            </a>
                        </li>
                    </ul>
                <?php }
if (!$_smarty_tpl->tpl_vars['registration']->_loop) {
?>
                    <p>There is no entry</p>
                <?php } ?>
            </div>
            </section>
    </section>

    <?php echo $_smarty_tpl->tpl_vars['gestionEventsMailEdit']->value;?>

</article>
    <!--end list participants tab-->
<?php }} ?>