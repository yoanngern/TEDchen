<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 14:21:59
         compiled from "includes/templates/gestion_locations_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38456390951cc276bbc1951-07985353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '826537cac235999c9ef43223b9ab1baf9f3fbdb2' => 
    array (
      0 => 'includes/templates/gestion_locations_infos.tpl',
      1 => 1372335716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38456390951cc276bbc1951-07985353',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc276bc534e5_13311404',
  'variables' => 
  array (
    'location' => 0,
    'errorState' => 0,
    'errorFormMessage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc276bc534e5_13311404')) {function content_51cc276bc534e5_13311404($_smarty_tpl) {?>

<div class="span6">
<!--form to create new locations-->
<article class="gestion_locations_infos">
    <!--add form location-->
    <form name="gestion_locations_infos" method="post" action="">
        <!--button save-->
        <p>
            <?php if ($_smarty_tpl->tpl_vars['location']->value!=null){?><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['location']->value->getName();?>
" /><?php }?>
            <input type="hidden" name="action" value="gestion_locations_infos" />
            <input type="submit" name="update" value="Save" />
        </p>

        <!--name-->
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php if ($_smarty_tpl->tpl_vars['location']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['location']->value->getName();?>
<?php }?>"/>
            <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['name']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['name'];?>
</p><?php }?>
        </p>
        <!--direction-->
        <p>
            <label for="direction">Direction</label>
            <input type="text" name="direction" value="<?php if ($_smarty_tpl->tpl_vars['location']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['location']->value->getDirection();?>
<?php }?>"/>

        </p>
        <!--address-->
        <p>
            <label for="address">Address</label>
            <input type="text" name="address" value="<?php if ($_smarty_tpl->tpl_vars['location']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['location']->value->getAddress();?>
<?php }?>"/>
            <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['address']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['address'];?>
</p><?php }?>
        </p>

        <!--city-->
        <p>
            <label for="city">City</label>
            <input type="text" name="city" value="<?php if ($_smarty_tpl->tpl_vars['location']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['location']->value->getCity();?>
<?php }?>"/>
            <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['city']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['city'];?>
</p><?php }?>
        </p>

        <!--country-->
        <p>
            <label for="country">Country</label>
            <input type="text" name="country" value="<?php if ($_smarty_tpl->tpl_vars['location']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['location']->value->getCountry();?>
<?php }?>"/>
            <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['country']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['country'];?>
</p><?php }?>
        </p>  
   </form>
   <!--end add form location-->         
</article>
</div><?php }} ?>