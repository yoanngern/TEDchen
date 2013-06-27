<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 14:58:45
         compiled from "includes/templates/user_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95686744351cc3705b66d12-17689255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fe33ebe7ade2c16a407ff11e2ee8ac2188c0219' => 
    array (
      0 => 'includes/templates/user_infos.tpl',
      1 => 1372317920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95686744351cc3705b66d12-17689255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'person' => 0,
    'errorState' => 0,
    'errorFormMessage' => 0,
    'errorStatePass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc3705c4bd89_21336046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc3705c4bd89_21336046')) {function content_51cc3705c4bd89_21336046($_smarty_tpl) {?>


<!--all user informations-->
<article class="user_infos span12">
    <!--modification informations form-->
    <section class="span6">
        <form name="user_infos" method="post" action="">
            <!--save modification button-->
            <p>
                <input type="hidden" name="action" value="user_infos" />
                <input class="buttonSaveModif" type="submit" name="update" value="Save" />
            </p>
            <!--title-->
            <legend>Profil edition</legend>
            <!--firstname-->
            <p>
                <label for="firstname">First name</label>
                <input type="text" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->getFirstname();?>
"/>
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['firstname']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['firstname'];?>
</p><?php }?>
            </p>
            <!--surname-->
            <p>
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->getName();?>
"/>
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['name']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['name'];?>
</p><?php }?>
            </p>
            <!--email-->
            <p>
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->getEmail();?>
"/>
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['email']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['email'];?>
</p><?php }?>
            </p>
            <!--date-->
            <p>
                <label for="dateofbirth">Date of birth</label>
                <input type="date" name="dateOfBirth" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->getDateOfBirth();?>
"/>
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['dateOfBirth']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['dateOfBirth'];?>
</p><?php }?>
            </p>
            <!--phoneNumber-->
            <p>
                <label for="phoneNumber">Phone number</label>
                <input type="text" name="phoneNumber" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->getPhoneNumber();?>
"/>
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['phoneNumber']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['phoneNumber'];?>
</p><?php }?>
            </p>
            <!--address-->
            <p>
                <label for="address">Address</label>
                <input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->getAddress();?>
"/>
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['address']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['address'];?>
</p><?php }?>
            </p>
            <!--City&npa-->
            <p>
                <label for="city">City</label>
                <input type="text" name="city" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->getCity();?>
"/>
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['city']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['city'];?>
</p><?php }?>
            </p>
            <!--country-->
            <p>
                <label for="country">Country</label>
                <input type="text" name="country" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->getCountry();?>
"/>
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['country']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['country'];?>
</p><?php }?>
            </p>
            <!--description-->
            <p>
                <label for="description">Description</label>
                <textarea type="text" name="description" value="<?php echo $_smarty_tpl->tpl_vars['person']->value->getDescription();?>
"></textarea>
            </p>
            
        </form>  
    </section>
    <!--end modification informations form-->
    
    <!--new password form-->
    <section class="span6">
        <form name="user_password" method="post" action="">
            <!--save new password button-->
            <p>
                <input type="hidden" name="action" value="user_infos" />
                <input class="buttonSavePwd" type="submit" name="update_password" value="Save" />
            </p>
            <!--title-->
            <legend>Password edition</legend>
            
            <p>
                <label for="password">New Password</label>
                <input type="password" name="password"/>
                <?php if ($_smarty_tpl->tpl_vars['errorStatePass']->value!=null&&!$_smarty_tpl->tpl_vars['errorStatePass']->value['password']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['password'];?>
</p><?php }?>
            </p>
            
            <p>
                <label for="password_repeat">Repeat New Password</label>
                <input type="password" name="password_repeat"/>
                <?php if ($_smarty_tpl->tpl_vars['errorStatePass']->value!=null&&!$_smarty_tpl->tpl_vars['errorStatePass']->value['password_repeat']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['password_repeat'];?>
</p><?php }?>
            </p>
            
        </form>  
    </section>
    <!--end new password form-->
</article><?php }} ?>