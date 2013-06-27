<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 15:03:03
         compiled from "includes/templates/events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208742828951cc3807b43406-91120899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f21f130eb1269367b50d765749c57466acf2b78' => 
    array (
      0 => 'includes/templates/events.tpl',
      1 => 1372189319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208742828951cc3807b43406-91120899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
    'events_nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc3807b597b2_07299601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc3807b597b2_07299601')) {function content_51cc3807b597b2_07299601($_smarty_tpl) {?><section class="events">
<!--
Il faut faire cette page pour que, lorsqu'on clique sur event, dans la barre de menu,
on tombe sur l'event le plus récent. 

et, lorsqu'on clique sur un event dans la bar de sélection de l'event qui se trouve dans
la partie inférieur de la page, cela nous affiche l'event choisi.
-->

<!--Affichage de l'event-->

<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['event']->value;?>

<?php } ?>

<!--bar de sélection de l'event à afficher-->

<?php echo $_smarty_tpl->tpl_vars['events_nav']->value;?>

                
</section>

<?php }} ?>