<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 14:58:41
         compiled from "includes/templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100709487751cc3701742459-44342638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dfbeb5ab4fbbe4c7fea2d26a1be25e51968c8e6' => 
    array (
      0 => 'includes/templates/contact.tpl',
      1 => 1372322988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100709487751cc3701742459-44342638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorState' => 0,
    'errorFormMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc3701799f61_52359301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc3701799f61_52359301')) {function content_51cc3701799f61_52359301($_smarty_tpl) {?>

<article class="contact span12">
    <section class="span6">
        <h1>Contact</h1>

        <!--form of contact-->
    <form name="contact" method="post" action="">
        <fieldset>
            <p>
                <label for="firstname">First name</label>
                <input type="text" name="firstname">
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['firstname']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['firstname'];?>
</p><?php }?>
            </p>
            
            <p>
                <label for="name">Name</label>
                <input type="text" name="name">
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['name']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['name'];?>
</p><?php }?>
            </p>
            
            <p>
                <label for="email">Email</label>
                <input type="email" name="email">
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['email']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['email'];?>
</p><?php }?>
            </p>
            
            <p>
                <label for="subject">Subject</label>
                <input type="text" name="subject">
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['subject']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['subject'];?>
</p><?php }?>
            </p>
            
            <p>
                <label for="message">Message</label>
                <textarea name="message"></textarea>
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['message']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['message'];?>
</p><?php }?>
            </p>
        </fieldset>
        <!--button send-->
        <input type="hidden" name="action" value="contact">
        <input type="submit" name="update" value="Send">
    </form>
    </section>
    <!--google map--> 
    <section class="span6">
        <h1>Find us</h1>
        <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=46.519931,6.565885&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=46.519931,6.565885&amp;output=embed"></iframe>
        <br />
        <small>
               <a href="https://maps.google.com/maps?q=46.519931,6.565885&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=46.519931,6.565885&amp;source=embed">Agrandir le plan</a>
        </small>
        <br/>
    </section>

</article><?php }} ?>