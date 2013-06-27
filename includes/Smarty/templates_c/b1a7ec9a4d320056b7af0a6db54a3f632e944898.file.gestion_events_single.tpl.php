<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 14:59:16
         compiled from "includes/templates/gestion_events_single.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12214820151cc37243101b0-17615010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1a7ec9a4d320056b7af0a6db54a3f632e944898' => 
    array (
      0 => 'includes/templates/gestion_events_single.tpl',
      1 => 1372307999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12214820151cc37243101b0-17615010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'event' => 0,
    'errorState' => 0,
    'errorFormMessage' => 0,
    'slots' => 0,
    'locations' => 0,
    'isLocation' => 0,
    'location' => 0,
    'speakers' => 0,
    'slot' => 0,
    'speaker' => 0,
    'isOrganizers' => 0,
    'isOrganizer' => 0,
    'roles' => 0,
    'isRole' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc372456c0d8_86717549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc372456c0d8_86717549')) {function content_51cc372456c0d8_86717549($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/Applications/MAMP/htdocs/tedxEventManager/projet_mi/includes/Smarty/libs/plugins/function.counter.php';
?>

<article class="gestion_events_single span12">
    <form id="" method="post" action="">
        <!--gestion_events_single subnav -->
        <!--
        <nav class="offset3 span6">
            <ul>
                <li><a href="#gestion_events_single_infos">Infos</a></li>
                <li><a href="#gestion_events_single_details">Details</a></li>
                <?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><li><a href="#gestion_events_single_speaker">Speaker</a></li><?php }?>
                <li><a href="#gestion_events_single_team">Team</a></li>  
                <li><a href="?action=gestion_event_export">Export</a></li>
            </ul>
        </nav>
        -->
        <!--button save-->
        <div class="span12">
            <?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['event']->value->getNo();?>
" /><?php }?>
            <input type="hidden" name="action" value="gestion_events_single" />
            <input type="submit" name="update" value="Save" />
        </div>

        <div class="offset1 span10">
            <!--date-->
            <fieldset id="gestion_events_single_infos">
                <legend>Starting date</legend>
                <input type="date" name="startingDate" value="<?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['event']->value->getStartingDate();?>
<?php }?>"/>
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['startingDate']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['startingDate'];?>
</p><?php }?>
                <!--problem with css solved with this div-->
                <div >
                    <legend>Ending date</legend>
                    <input type="date" name="endingDate" value="<?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['event']->value->getEndingDate();?>
<?php }?>"/>
                    <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['endingDate']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['endingDate'];?>
</p><?php }?>
                </div>
                
                <legend>Title</legend>                    
                <input type="title" name="mainTopic" value="<?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['event']->value->getMainTopic();?>
<?php }?>" />
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['mainTopic']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['mainTopic'];?>
</p><?php }?>
                <div id="troll">
                    <legend>Programme</legend>
                    <textarea type="text" name="description"><?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['event']->value->getDescription();?>
<?php }?></textarea>
                    <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['description']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['description'];?>
</p><?php }?>
                </div>

                <legend>Schedule</legend>
                <table>
                    <tr>&nbsp;</tr>
                        <td>&nbsp;</td>
                        <td><input type="time" name="startingTime" value="<?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['event']->value->getStartingTime();?>
<?php }?>" /></td>
                        <td>Start</td>
                        <td>
                        <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['startingTime']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['startingTime'];?>
</p><?php }?>
                        </td>
                    
                    <tr>&nbsp;</tr>
                        <td><input type="time" name="slot1StartingTime" value="<?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php if ($_smarty_tpl->tpl_vars['slots']->value[0]!=null){?><?php echo $_smarty_tpl->tpl_vars['slots']->value[0]->getStartingTime();?>
<?php }?><?php }?>" /></td>
                        <td><input type="time" name="slot1EndingTime" value="<?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php if ($_smarty_tpl->tpl_vars['slots']->value[0]!=null){?><?php echo $_smarty_tpl->tpl_vars['slots']->value[0]->getEndingTime();?>
<?php }?><?php }?>" /></td>
                        <td>Slot One</td>
                        <td>
                        <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['slot1StartingTime']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['slot1StartingTime'];?>
</p><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['slot1EndingTime']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['slot1EndingTime'];?>
</p><?php }?>
                        </td>
                    
                    <tr>&nbsp;</tr>
                        <td><input type="time" name="slot2StartingTime" value="<?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php if ($_smarty_tpl->tpl_vars['slots']->value[1]!=null){?><?php echo $_smarty_tpl->tpl_vars['slots']->value[1]->getStartingTime();?>
<?php }?><?php }?>" /></td>
                        <td><input type="time" name="slot2EndingTime" value="<?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php if ($_smarty_tpl->tpl_vars['slots']->value[1]!=null){?><?php echo $_smarty_tpl->tpl_vars['slots']->value[1]->getEndingTime();?>
<?php }?><?php }?>" /></td>
                        <td>Slot Two</td>
                        <td>
                        <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['slot2StartingTime']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['slot2StartingTime'];?>
</p><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['slot2EndingTime']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['slot2EndingTime'];?>
</p><?php }?>
                        </td>
                 
                    <tr>&nbsp;</tr>
                        <td><input type="time" name="slot3StartingTime" value="<?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php if ($_smarty_tpl->tpl_vars['slots']->value[2]!=null){?><?php echo $_smarty_tpl->tpl_vars['slots']->value[2]->getStartingTime();?>
<?php }?><?php }?>" /></td>
                        <td><input type="time" name="slot3EndingTime" value="<?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php if ($_smarty_tpl->tpl_vars['slots']->value[2]!=null){?><?php echo $_smarty_tpl->tpl_vars['slots']->value[2]->getEndingTime();?>
<?php }?><?php }?>" /></td>
                        <td>Slot Three</td>
                        <td>
                        <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['slot3StartingTime']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['slot3StartingTime'];?>
</p><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['slot3EndingTime']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['slot3EndingTime'];?>
</p><?php }?>
                        </td>
                    
                    <tr>&nbsp;</tr>
                        <td><input type="time" name="slot4StartingTime" value="<?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php if ($_smarty_tpl->tpl_vars['slots']->value[3]!=null){?><?php echo $_smarty_tpl->tpl_vars['slots']->value[3]->getStartingTime();?>
<?php }?><?php }?>" /></td>
                        <td><input type="time" name="slot4EndingTime" value="<?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php if ($_smarty_tpl->tpl_vars['slots']->value[3]!=null){?><?php echo $_smarty_tpl->tpl_vars['slots']->value[3]->getEndingTime();?>
<?php }?><?php }?>" /></td>
                        <td>Slot Four</td>
                        <td>
                        <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['slot4StartingTime']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['slot4StartingTime'];?>
</p><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['slot4EndingTime']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['slot4EndingTime'];?>
</p><?php }?>
                        </td>
                    
                    <tr>&nbsp;</tr>
                        <td>&nbsp;</td>
                        <td><input type="time" name="endingTime" value="<?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['event']->value->getEndingTime();?>
<?php }?>" /></td>
                        <td>End</td>
                        <td>
                        <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['endingTime']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['endingTime'];?>
</p><?php }?>
                        </td>
                </table>
            </fieldset>

            <!--
            <input type="hidden" name="action" value=""/>
            <input type="submit" name="add_slot" value="Add a slot" />
            -->
            
           <!-- <a href="#gestion_events_single_details">next</a> -->

            <!--end of gestion_events_single_infos-->

            <!--gestion_events_single_details-->
            <fieldset id="gestion_events_single_details">
                <legend>Location</legend>
                <select name="locationName">
                    <option value="noLocation">no location</option>
                    
                    <?php  $_smarty_tpl->tpl_vars['location'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['location']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['location']->key => $_smarty_tpl->tpl_vars['location']->value){
$_smarty_tpl->tpl_vars['location']->_loop = true;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['isLocation']->value!=null){?><?php if ($_smarty_tpl->tpl_vars['isLocation']->value->getName()==$_smarty_tpl->tpl_vars['location']->value->getName()){?>selected<?php }?><?php }?> value="<?php echo $_smarty_tpl->tpl_vars['location']->value->getName();?>
"><?php echo $_smarty_tpl->tpl_vars['location']->value->getName();?>
</option>
                    <?php } ?>
                </select>
                <?php if ($_smarty_tpl->tpl_vars['errorState']->value!=null&&!$_smarty_tpl->tpl_vars['errorState']->value['locationName']){?><p class="errorvalue"><?php echo $_smarty_tpl->tpl_vars['errorFormMessage']->value['locationName'];?>
</p><?php }?>
            </fieldset>
            <!--navigation buttons-->
            <!--
            <a href="#gestion_events_single_infos">previous</a>
            <a href="#gestion_events_single_speaker">next</a>
            <!--end of gestion_events_single_details-->
            
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?>
            <fieldset id="gestion_events_single_speaker">
    
                
                <?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'print'=>false),$_smarty_tpl);?>
 
                <?php  $_smarty_tpl->tpl_vars['slot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['speakers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->key => $_smarty_tpl->tpl_vars['slot']->value){
$_smarty_tpl->tpl_vars['slot']->_loop = true;
?>
                        <legend>Slot n°<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</legend>
                        <?php if ($_smarty_tpl->tpl_vars['slot']->value['speakers']!=null){?>
                            <?php  $_smarty_tpl->tpl_vars['speaker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['speaker']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slot']->value['speakers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['speaker']->key => $_smarty_tpl->tpl_vars['speaker']->value){
$_smarty_tpl->tpl_vars['speaker']->_loop = true;
?>
                                <a href="?action=gestion_speaker_infos&id=<?php echo $_smarty_tpl->tpl_vars['speaker']->value->getNo();?>
&eventId=<?php echo $_smarty_tpl->tpl_vars['event']->value->getNo();?>
"><span><?php echo $_smarty_tpl->tpl_vars['speaker']->value->getFirstname();?>
</span> <span><?php echo $_smarty_tpl->tpl_vars['speaker']->value->getName();?>
</span></a>
                            <?php } ?>
                        <?php }?>
                <?php } ?>
            </fieldset>
            
            
        <?php }?>
        
        
        
        
        
        <!--
        <a href="#gestion_events_single_details">previous</a>
        <a href="#gestion_events_single_team">next</a>
        -->
        <?php if ($_smarty_tpl->tpl_vars['event']->value!=null){?>
            <fieldset id="gestion_events_single_team">
                <legend>Organizers</legend>
                <?php  $_smarty_tpl->tpl_vars['isOrganizer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['isOrganizer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['isOrganizers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['isOrganizer']->key => $_smarty_tpl->tpl_vars['isOrganizer']->value){
$_smarty_tpl->tpl_vars['isOrganizer']->_loop = true;
?>
                    <fieldset>
                        <p>
                            <label for="role"><span><?php echo $_smarty_tpl->tpl_vars['isOrganizer']->value['organizer']->getFirstname();?>
</span> <span><?php echo $_smarty_tpl->tpl_vars['isOrganizer']->value['organizer']->getName();?>
</span></label>
                            <?php  $_smarty_tpl->tpl_vars['isRole'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['isRole']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['isOrganizer']->value['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['isRole']->key => $_smarty_tpl->tpl_vars['isRole']->value){
$_smarty_tpl->tpl_vars['isRole']->_loop = true;
?>
                                <select>
                                    <?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
                                        <option name="role" <?php if ($_smarty_tpl->tpl_vars['isRole']->value->getName()==$_smarty_tpl->tpl_vars['role']->value->getName()){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['role']->value->getName();?>
</option>
                                    <?php } ?>
                                </select>
                            <?php } ?>
                            
                        </p>
                    </fieldset>
                <?php } ?>
            </fieldset>
        <?php }?>
        <!--
        <input type="hidden" name="action4" value="add_organizer_to_event">
        <input type="submit" name="submit_add" value="Add organizer">
        -->
        
        
        <!--
        <a href="#gestion_events_single_speaker">previous</a>
        -->
        
    </form>
</article>

<?php }} ?>