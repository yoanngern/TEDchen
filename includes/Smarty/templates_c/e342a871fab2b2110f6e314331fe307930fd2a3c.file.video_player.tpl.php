<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 15:00:21
         compiled from "includes/templates/video_player.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205158576151cc37655f9d70-60669767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e342a871fab2b2110f6e314331fe307930fd2a3c' => 
    array (
      0 => 'includes/templates/video_player.tpl',
      1 => 1372263679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205158576151cc37655f9d70-60669767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videoIframe' => 0,
    'isTalk' => 0,
    'isEvent' => 0,
    'isSpeaker' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc3765650785_39659742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc3765650785_39659742')) {function content_51cc3765650785_39659742($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/tedxEventManager/projet_mi/includes/Smarty/libs/plugins/modifier.date_format.php';
?>

<article class="video_player">
    <div class="align_left">
        <?php echo $_smarty_tpl->tpl_vars['videoIframe']->value;?>
  
    </div>
    <div class="align_right">
        <h1><?php if ($_smarty_tpl->tpl_vars['isTalk']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['isTalk']->value->getVideoTitle();?>
<?php }?></h1>
        <p>
            <time><?php if ($_smarty_tpl->tpl_vars['isEvent']->value!=null){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['isEvent']->value->getStartingDate(),"%d %B %Y");?>
<?php }?></time>
        </p>
        <p><?php if ($_smarty_tpl->tpl_vars['isTalk']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['isTalk']->value->getVideoDescription();?>
<?php }?></p>
        <p><span>Speaker : </span><span><?php if ($_smarty_tpl->tpl_vars['isSpeaker']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['isSpeaker']->value->getFirstname();?>
</span> <span><?php echo $_smarty_tpl->tpl_vars['isSpeaker']->value->getName();?>
<?php }?></span></p>
    </div>
</article><?php }} ?>