<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 15:00:21
         compiled from "includes/templates/videos_all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160364299251cc3765654476-01669797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '502d02d733eb820586acd27c480292e3187b2e17' => 
    array (
      0 => 'includes/templates/videos_all.tpl',
      1 => 1372271991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160364299251cc3765654476-01669797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isTalk' => 0,
    'video_player' => 0,
    'talks' => 0,
    'talk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc37656a1da3_67861168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc37656a1da3_67861168')) {function content_51cc37656a1da3_67861168($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/tedxEventManager/projet_mi/includes/Smarty/libs/plugins/modifier.date_format.php';
?>

<!--wall of all videos-->
<article class="videos_all">

    <?php if ($_smarty_tpl->tpl_vars['isTalk']->value!=null){?>
        <?php echo $_smarty_tpl->tpl_vars['video_player']->value;?>

    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['talk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['talk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['talks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['talk']->key => $_smarty_tpl->tpl_vars['talk']->value){
$_smarty_tpl->tpl_vars['talk']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['talk']->value['imgURL']!=null){?>
            <section>
                <a href="?action=videos&eventId=<?php echo $_smarty_tpl->tpl_vars['talk']->value['talk']->getEventNo();?>
&speakerId=<?php echo $_smarty_tpl->tpl_vars['talk']->value['talk']->getSpeakerPersonNo();?>
">
                    <p><img src="<?php echo $_smarty_tpl->tpl_vars['talk']->value['imgURL'];?>
" /></p>
                    <p><h1><?php echo $_smarty_tpl->tpl_vars['talk']->value['talk']->getVideoTitle();?>
</h1></p>
                    <p><time><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['talk']->value['event']->getStartingDate(),"%d %B %Y");?>
</time></p>
                </a>
            </section>
        <?php }?>
    <?php } ?>  
</article>

<?php }} ?>