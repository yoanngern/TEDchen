<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 14:58:35
         compiled from "includes/templates/videos_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159430031451cc36fbe3f706-91910006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f2136f8f17d9782ee5a90016ab0e0937f6e00e5' => 
    array (
      0 => 'includes/templates/videos_list.tpl',
      1 => 1372321339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159430031451cc36fbe3f706-91910006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'talks' => 0,
    'talk' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc36fbe872a1_25085747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc36fbe872a1_25085747')) {function content_51cc36fbe872a1_25085747($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/tedxEventManager/projet_mi/includes/Smarty/libs/plugins/modifier.date_format.php';
?>

<!--list of videos in the home page-->
<article class="videos_list span12">
    <div class="grey_bar_video"></div>
    <h1>Videos of our previous events</h1>
    <nav class="span1">
        <a class="previous" title="Previous"></a>
    </nav>
    <ul class="span10">
        <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['talk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['talk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['talks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['talk']->key => $_smarty_tpl->tpl_vars['talk']->value){
$_smarty_tpl->tpl_vars['talk']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['talk']->value['imgURL']!=null){?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value==3){?>
                    <?php break 1?>
                <?php }?>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                <li>
                    <a href="?action=videos&eventId=<?php echo $_smarty_tpl->tpl_vars['talk']->value['talk']->getEventNo();?>
&speakerId=<?php echo $_smarty_tpl->tpl_vars['talk']->value['talk']->getSpeakerPersonNo();?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['talk']->value['imgURL'];?>
" />
                        <h1><?php echo $_smarty_tpl->tpl_vars['talk']->value['talk']->getVideoTitle();?>
</h1>
                        <time><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['talk']->value['event']->getStartingDate(),"%d %B %Y");?>
</time>
                    </a>
                </li>
            <?php }?>
        <?php } ?>     
    </ul>
    <nav class="span1">
        <a class="next" title="Next"></a>
    </nav>
</article><?php }} ?>