<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 15:43:49
         compiled from "includes/templates/gestion_events_motivation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101696586151cc39ad723078-71906770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7add69870f70af6e1a0096569f6a2453be1998c7' => 
    array (
      0 => 'includes/templates/gestion_events_motivation.tpl',
      1 => 1372339983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101696586151cc39ad723078-71906770',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc39ad763be2_19367657',
  'variables' => 
  array (
    'registrations' => 0,
    'registration' => 0,
    'motivation' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc39ad763be2_19367657')) {function content_51cc39ad763be2_19367657($_smarty_tpl) {?>
<article class="gestion_events_motivation span12">
    
<?php  $_smarty_tpl->tpl_vars['registration'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['registration']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['registrations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['registration']->key => $_smarty_tpl->tpl_vars['registration']->value){
$_smarty_tpl->tpl_vars['registration']->_loop = true;
?>  

    <section class="span12">
        <ul>
            <a href="?action=motivation_refuse"><li class="refuse"></li></a>
            <a href="?action=motivation_wait"><li class="wait"></li></a>
            <a href="?action=motivation_accept"><li class="accept"></li></a>
        </ul>
        <h1><?php echo $_smarty_tpl->tpl_vars['registration']->value['person']->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['registration']->value['person']->getName();?>
</h1>
        <h2>Motivation :</h2>
        <p class="motivation">
        <?php  $_smarty_tpl->tpl_vars['motivation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['motivation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['registration']->value['motivations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['motivation']->key => $_smarty_tpl->tpl_vars['motivation']->value){
$_smarty_tpl->tpl_vars['motivation']->_loop = true;
?>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis ante sapien, in imperdiet lectus imperdiet in. Nam varius dolor vel magna condimentum, eu euismod ante facilisis. Sed quis scelerisque sem. Maecenas imperdiet eros volutpat, laoreet eros vestibulum, sollicitudin metus. Proin mollis hendrerit lobortis. Fusce nibh lacus, ullamcorper vel lacus sit amet, bibendum ornare magna. Nulla sodales ligula at odio hendrerit, sit amet ultricies libero porta. Sed pulvinar mauris non augue gravida, sed varius odio tincidunt. Aliquam erat volutpat. Ut diam neque, lobortis vitae turpis vel, iaculis consequat ante. Maecenas nec orci id nisl vehicula lobortis. Proin ut tincidunt felis. Maecenas felis ipsum, suscipit a accumsan non, blandit non libero. Ut laoreet erat non leo consequat, sed commodo metus vulputate.</p>-->
                <?php echo $_smarty_tpl->tpl_vars['motivation']->value->getText();?>

        <?php }
if (!$_smarty_tpl->tpl_vars['motivation']->_loop) {
?>
        </p>
        <p>There is no entry for the motivation</p>
        <?php } ?>
        
    </section>

<?php }
if (!$_smarty_tpl->tpl_vars['registration']->_loop) {
?>
    <p>There is no entry for the whole participant</p>
<?php } ?>
        
</article>   

    <!--<article>
        <h1>Jean-Paul Gaucher</h1>
        <p>
            Nam auctor pellentesque diam, vitae vehicula urna elementum et Ut placerat, erat et varius aliquet, purus sem viverra lorem, nec molestie quam erat at nisl. 
            Donec gravida quam sodales, lacinia elit ac, auctor nisi. Aliquam porttitor justo lorem, at rutrum turpis pretium et. Praesent in ornare tortor, eget euismod elit. 
            Suspendisse vitae tempus lacus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
        <section>
            <ul>
                <li><a href="?action=motivation_refuse">REFUSE</a></li
                <li><a href="?action=motivation_wait">WAIT</a></li>
                <li><a href="?action=motivation_accpet">ACCEPT</a></li>
            </ul>
        </section>
    </article>

    <article>
        <h1>Jean-Marie Le Pet</h1>
        <p>
            Nam auctor pellentesque diam, vitae vehicula urna elementum et Ut placerat, erat et varius aliquet, purus sem viverra lorem, nec molestie quam erat at nisl. 
            Donec gravida quam sodales, lacinia elit ac, auctor nisi. Aliquam porttitor justo lorem, at rutrum turpis pretium et. Praesent in ornare tortor, eget euismod elit. 
            Suspendisse vitae tempus lacus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
        <section>
            <ul>
                <li><a href="?action=motivation_refuse">REFUSE</a></li
                <li><a href="?action=motivation_wait">WAIT</a></li>
                <li><a href="?action=motivation_accpet">ACCEPT</a></li>
            </ul>
        </section>
    </article>

    <article>
        <h1>Henri Sale Vador</h1>
        <p>
            Nam auctor pellentesque diam, vitae vehicula urna elementum et Ut placerat, erat et varius aliquet, purus sem viverra lorem, nec molestie quam erat at nisl. 
            Donec gravida quam sodales, lacinia elit ac, auctor nisi. Aliquam porttitor justo lorem, at rutrum turpis pretium et. Praesent in ornare tortor, eget euismod elit. 
            Suspendisse vitae tempus lacus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
        <section>
            <ul>
                <li><a href="?action=motivation_refuse">REFUSE</a></li
                <li><a href="?action=motivation_wait">WAIT</a></li>
                <li><a href="?action=motivation_accpet">ACCEPT</a></li>
            </ul>
        </section>
    </article>
</section>
        -->
<?php }} ?>