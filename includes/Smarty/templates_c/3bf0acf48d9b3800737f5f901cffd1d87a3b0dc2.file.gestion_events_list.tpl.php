<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 14:56:11
         compiled from "includes/templates/gestion_events_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188580867251cc366bf1b773-88308830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bf0acf48d9b3800737f5f901cffd1d87a3b0dc2' => 
    array (
      0 => 'includes/templates/gestion_events_list.tpl',
      1 => 1372189319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188580867251cc366bf1b773-88308830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc366c012990_66509333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc366c012990_66509333')) {function content_51cc366c012990_66509333($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/tedxEventManager/projet_mi/includes/Smarty/libs/plugins/modifier.date_format.php';
?>

<section class="gestion_events_list span12">
    <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
        <a href="?action=gestion_events_single&id=<?php echo $_smarty_tpl->tpl_vars['event']->value->getNo();?>
">
            <div class="grey_bar"></div>    
            <article>
                <header>
                    <h1><?php echo $_smarty_tpl->tpl_vars['event']->value->getMainTopic();?>
</h1>
                    <time><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value->getStartingDate(),"%d %B %Y");?>
</time>
                </header>    
                <p>
                 <!--ajouter le lien sur l'image-->
                    <img src="/tedxEventManager/projet_mi//htdocs/img/layout/arrows/arrowRight.png" alt="Picture of a right arrow" />
                </p>
            </article>
        </a>
    <?php } ?>
</section><?php }} ?>