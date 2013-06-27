<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 14:58:35
         compiled from "includes/templates/events_single.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155465159451cc36fbae7cf7-03399832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b3b80e8c60b4a1aacbb1f01cccede417f625227' => 
    array (
      0 => 'includes/templates/events_single.tpl',
      1 => 1372320342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155465159451cc36fbae7cf7-03399832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'event' => 0,
    'slots' => 0,
    'slot' => 0,
    'location' => 0,
    'speakers' => 0,
    'speaker' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc36fbba1020_46596263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc36fbba1020_46596263')) {function content_51cc36fbba1020_46596263($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/tedxEventManager/projet_mi/includes/Smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_counter')) include '/Applications/MAMP/htdocs/tedxEventManager/projet_mi/includes/Smarty/libs/plugins/function.counter.php';
?>

<article class="events_single offset2 span8">

    <!--event header-->
    <header>

        <div class="grey_bar"></div>

        <h1><?php echo $_smarty_tpl->tpl_vars['event']->value->getMainTopic();?>
</h1>
        <time><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value->getStartingDate(),"%d %B %Y");?>
</time>
    </header>

    <!-- <nav id="subnav">-->
    <nav class="offset3 span6">
        <ul>
            <li>
                <a class="event_info" href="#" title="Infos">Infos</a>
            </li>
            <li>                
                <a class="event_details" href="#" title="Details">Details</a>
            </li>
            <li>
                <a class="event_speakers" href="#" title="Speakers">Speakers</a> 
            </li>
        </ul>
    </nav>
    <!--</nav>-->        
    
    <div class="grey_bar2"></div>

    <!--infos tab-->
    <section class="events_single_infos">
        <!--event tab-->
        <section class="span8">
            <h2>Programme</h2>
            <p>
                <!--Our inspired team, in collaboration with TEDxLausanne, is pleased to announce TEDxLausanneChange 2013. This event, themed “positive disruption”, will feature a 
                live stream of the main TEDxChange program in Seattle, Washington and three presentations by dynamic local speakers. Join us for an event that will challenge 
                preconceived ideas, spark discussion, engage leaders and shed light on new perspectives.-->
                <?php echo $_smarty_tpl->tpl_vars['event']->value->getDescription();?>

            </p>
        </section>
        <!--end event tab-->
        <!-- schedule tab-->
        <section class="span4">
            <h2>Schedule</h2>
            <dl>
                <dt><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value->getStartingTime(),"%R");?>
</dt>
                <dd>Starting</dd>
                
                <!--<dt>13:30-15:00</dt>
                <dd>Slot 1</dd>
                <dt>15:30-16:30</dt>
                <dd>Slot 2</dd>
                <dt>16:30-17:45</dt>
                <dd>Slot 3</dd>-->

                <?php  $_smarty_tpl->tpl_vars['slot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slots']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->key => $_smarty_tpl->tpl_vars['slot']->value){
$_smarty_tpl->tpl_vars['slot']->_loop = true;
?>
                    <dt><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['slot']->value->getStartingTime(),"%R");?>
-<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['slot']->value->getEndingTime(),"%R");?>
</dt>
                    <dd>Slot <?php echo $_smarty_tpl->tpl_vars['slot']->value->getNo();?>
 </dd>
                <?php } ?>

                <dt><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value->getEndingTime(),"%R");?>
</dt>
                <dd>Closing</dd>  
            </dl>
        </section>
        <!--end schedule tab-->  
    </section>
    <!--end infos tab-->


    <!--details tab-->
    <section class="events_single_details">
        <?php if (($_smarty_tpl->tpl_vars['location']->value!=null)){?>
            <!-- location tab-->
            <section class="span6">
                <h2>Location</h2>
                <p><?php echo $_smarty_tpl->tpl_vars['location']->value->getName();?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['location']->value->getAddress();?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['location']->value->getCity();?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['location']->value->getCountry();?>
</p> 
            </section>
            <!--end location tab-->
        <?php }?>
        <!--dress code-->
        <section class="span6">
            <h2>Dress Code</h2>
            <p>At TEDxLausanne 2012, Steve Edge, one of our speakers, encouraged the attendees to “dress for a party and the party will come to you”. We also encourage you to “dress for a party” while still expressing who you really are.</p>
        </section>
        <!--end dress code-->
        <!--language-->
        <section class="span6">
            <h2>Languages</h2>
            <p>Our programme for 2013 contains presentations in English.</p>
        </section>
        <!--end language-->
    </section>
    <!--end section tab-->

    <!--speaker tab-->
    <section class="events_single_speakers">
        <!--speaker slot-->
        <section class="span12">
            <?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'print'=>false),$_smarty_tpl);?>

            <?php  $_smarty_tpl->tpl_vars['slot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['speakers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->key => $_smarty_tpl->tpl_vars['slot']->value){
$_smarty_tpl->tpl_vars['slot']->_loop = true;
?>
                <h2>Slot <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</h2>
                <?php if ($_smarty_tpl->tpl_vars['slot']->value['speakers']!=null){?>
                    <ul>
                        <li>           
                            <?php  $_smarty_tpl->tpl_vars['speaker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['speaker']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slot']->value['speakers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['speaker']->key => $_smarty_tpl->tpl_vars['speaker']->value){
$_smarty_tpl->tpl_vars['speaker']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['speaker']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['speaker']->value->getName();?>
<?php }?>
                            <?php } ?>  
                        </li>
                    </ul>
                <?php }?>
            <?php } ?>
        </section>
    <!--end speaker slot-->            
</section>
<!--end speaker tab-->

<!--registration button-->           
<a class="theButton offset2 span8" href="?action=events_registration&id=<?php echo $_smarty_tpl->tpl_vars['event']->value->getNo();?>
">Register</a>
<!--end registration button--> 
</article>
<?php }} ?>