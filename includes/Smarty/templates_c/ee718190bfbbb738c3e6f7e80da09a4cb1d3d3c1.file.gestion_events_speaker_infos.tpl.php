<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 14:59:39
         compiled from "includes/templates/gestion_events_speaker_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49538570351cc373b258097-63755503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee718190bfbbb738c3e6f7e80da09a4cb1d3d3c1' => 
    array (
      0 => 'includes/templates/gestion_events_speaker_infos.tpl',
      1 => 1372280167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49538570351cc373b258097-63755503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'speaker' => 0,
    'keywords' => 0,
    'i' => 0,
    'keyword' => 0,
    'foo' => 0,
    'talks' => 0,
    'talk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc373b2d3289_52999160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc373b2d3289_52999160')) {function content_51cc373b2d3289_52999160($_smarty_tpl) {?>

<article class="gestion_events_speaker_infos">

    <?php if ($_smarty_tpl->tpl_vars['speaker']->value!=null){?><h1><span><?php echo $_smarty_tpl->tpl_vars['speaker']->value->getFirstname();?>
</span> <span><?php echo $_smarty_tpl->tpl_vars['speaker']->value->getName();?>
</span></h1><?php }?>
    
    
    
    
    <form method="post" action="">
    
    <!--button-->
    <input type="hidden" name="id" value="<?php if ($_smarty_tpl->tpl_vars['speaker']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['speaker']->value->getNo();?>
<?php }?>" />
    <input type="hidden" name="action" value="gestion_speaker_infos" />
    <input type="submit" name="update" value="Save" />

        <fieldset>
            <legend>Keywords</legend>
            <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(1, null, 0);?> 
            <?php  $_smarty_tpl->tpl_vars['keyword'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keyword']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['keywords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['keyword']->key => $_smarty_tpl->tpl_vars['keyword']->value){
$_smarty_tpl->tpl_vars['keyword']->_loop = true;
?>
                <input type="text" name="keyword<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value->getValue();?>
" />
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
            <?php } ?>
            <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)min(ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - ($_smarty_tpl->tpl_vars['i']->value) : $_smarty_tpl->tpl_vars['i']->value-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step)),3);
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['i']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                <input type="text" name="keyword<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" value="" />
            <?php }} ?>
        </fieldset>
    
        <!--talk link-->
        
        <?php  $_smarty_tpl->tpl_vars['talk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['talk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['talks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['talk']->key => $_smarty_tpl->tpl_vars['talk']->value){
$_smarty_tpl->tpl_vars['talk']->_loop = true;
?>
            <fieldset>
                <legend>Talk's video</legend>
                <label>Title</label>
                <input type="text" name="videoTitle" value="<?php echo $_smarty_tpl->tpl_vars['talk']->value->getVideoTitle();?>
" />
                
                <label>Description</label>
                <textarea name="videoDescription"><?php echo $_smarty_tpl->tpl_vars['talk']->value->getVideoDescription();?>
"</textarea>
                
                <label>URL</label>
                <input type="text" name="videoURL" value="<?php echo $_smarty_tpl->tpl_vars['talk']->value->getVideoURL();?>
" />
            </fieldset>
        <?php } ?>

    </form>
</article><?php }} ?>