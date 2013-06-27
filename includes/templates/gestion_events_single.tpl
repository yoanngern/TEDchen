{*
    Smarty variables available:
    $event (Object)
    $isLocation (Object) [0..1]
    $slots (Object) [0..1]
    $speakers (Array [Slot][Place][Speaker][Person]) [0..1]
    $gestionEventsSpeakerInfos (HTML from gestion_events_speaker_infos)
    $locations (Array of Location) [0..1]
    $errorFormMessage (Array of error Formular message)
    $organizers (Array of Object)
    $roles (Array of Object)
    $isOrganizers (Array [Organizers] 
            (
                [Organizer] => Object of Organizer,
                [Keywords] => Array
                    (
                        [Keyword] => Object of Keyword
                    )
            )
    )
*}

<article class="gestion_events_single span12">
    <form id="" method="post" action="">
        <!--gestion_events_single subnav -->
        <!--
        <nav class="offset3 span6">
            <ul>
                <li><a href="#gestion_events_single_infos">Infos</a></li>
                <li><a href="#gestion_events_single_details">Details</a></li>
                {if $event != null}<li><a href="#gestion_events_single_speaker">Speaker</a></li>{/if}
                <li><a href="#gestion_events_single_team">Team</a></li>  
                <li><a href="?action=gestion_event_export">Export</a></li>
            </ul>
        </nav>
        -->
        <!--button save-->
        <div class="span12">
            {if $event != null}<input type="hidden" name="id" value="{$event->getNo()}" />{/if}
            <input type="hidden" name="action" value="gestion_events_single" />
            <input type="submit" name="update" value="Save" />
        </div>

        <div class="offset1 span10">
            <!--date-->
            <fieldset id="gestion_events_single_infos">
                <legend>Starting date</legend>
                <input type="date" name="startingDate" value="{if $event != null}{$event->getStartingDate()}{/if}"/>
                {if $errorState != null && !$errorState.startingDate}<p class="errorvalue">{$errorFormMessage.startingDate}</p>{/if}
                <!--problem with css solved with this div-->
                <div >
                    <legend>Ending date</legend>
                    <input type="date" name="endingDate" value="{if $event != null}{$event->getEndingDate()}{/if}"/>
                    {if $errorState != null && !$errorState.endingDate}<p class="errorvalue">{$errorFormMessage.endingDate}</p>{/if}
                </div>
                
                <legend>Title</legend>                    
                <input type="title" name="mainTopic" value="{if $event != null}{$event->getMainTopic()}{/if}" />
                {if $errorState != null && !$errorState.mainTopic}<p class="errorvalue">{$errorFormMessage.mainTopic}</p>{/if}
                <div id="troll">
                    <legend>Programme</legend>
                    <textarea type="text" name="description">{if $event != null}{$event->getDescription()}{/if}</textarea>
                    {if $errorState != null && !$errorState.description}<p class="errorvalue">{$errorFormMessage.description}</p>{/if}
                </div>

                <legend>Schedule</legend>
                <table>
                    <tr>&nbsp;</tr>
                        <td>&nbsp;</td>
                        <td><input type="time" name="startingTime" value="{if $event != null}{$event->getStartingTime()}{/if}" /></td>
                        <td>Start</td>
                        <td>
                        {if $errorState != null && !$errorState.startingTime}<p class="errorvalue">{$errorFormMessage.startingTime}</p>{/if}
                        </td>
                    
                    <tr>&nbsp;</tr>
                        <td><input type="time" name="slot1StartingTime" value="{if $event != null}{if $slots[0] != null}{$slots[0]->getStartingTime()}{/if}{/if}" /></td>
                        <td><input type="time" name="slot1EndingTime" value="{if $event != null}{if $slots[0] != null}{$slots[0]->getEndingTime()}{/if}{/if}" /></td>
                        <td>Slot One</td>
                        <td>
                        {if $errorState != null && !$errorState.slot1StartingTime}<p class="errorvalue">{$errorFormMessage.slot1StartingTime}</p>{/if}
                        {if $errorState != null && !$errorState.slot1EndingTime}<p class="errorvalue">{$errorFormMessage.slot1EndingTime}</p>{/if}
                        </td>
                    
                    <tr>&nbsp;</tr>
                        <td><input type="time" name="slot2StartingTime" value="{if $event != null}{if $slots[1] != null}{$slots[1]->getStartingTime()}{/if}{/if}" /></td>
                        <td><input type="time" name="slot2EndingTime" value="{if $event != null}{if $slots[1] != null}{$slots[1]->getEndingTime()}{/if}{/if}" /></td>
                        <td>Slot Two</td>
                        <td>
                        {if $errorState != null && !$errorState.slot2StartingTime}<p class="errorvalue">{$errorFormMessage.slot2StartingTime}</p>{/if}
                        {if $errorState != null && !$errorState.slot2EndingTime}<p class="errorvalue">{$errorFormMessage.slot2EndingTime}</p>{/if}
                        </td>
                 
                    <tr>&nbsp;</tr>
                        <td><input type="time" name="slot3StartingTime" value="{if $event != null}{if $slots[2] != null}{$slots[2]->getStartingTime()}{/if}{/if}" /></td>
                        <td><input type="time" name="slot3EndingTime" value="{if $event != null}{if $slots[2] != null}{$slots[2]->getEndingTime()}{/if}{/if}" /></td>
                        <td>Slot Three</td>
                        <td>
                        {if $errorState != null && !$errorState.slot3StartingTime}<p class="errorvalue">{$errorFormMessage.slot3StartingTime}</p>{/if}
                        {if $errorState != null && !$errorState.slot3EndingTime}<p class="errorvalue">{$errorFormMessage.slot3EndingTime}</p>{/if}
                        </td>
                    
                    <tr>&nbsp;</tr>
                        <td><input type="time" name="slot4StartingTime" value="{if $event != null}{if $slots[3] != null}{$slots[3]->getStartingTime()}{/if}{/if}" /></td>
                        <td><input type="time" name="slot4EndingTime" value="{if $event != null}{if $slots[3] != null}{$slots[3]->getEndingTime()}{/if}{/if}" /></td>
                        <td>Slot Four</td>
                        <td>
                        {if $errorState != null && !$errorState.slot4StartingTime}<p class="errorvalue">{$errorFormMessage.slot4StartingTime}</p>{/if}
                        {if $errorState != null && !$errorState.slot4EndingTime}<p class="errorvalue">{$errorFormMessage.slot4EndingTime}</p>{/if}
                        </td>
                    
                    <tr>&nbsp;</tr>
                        <td>&nbsp;</td>
                        <td><input type="time" name="endingTime" value="{if $event != null}{$event->getEndingTime()}{/if}" /></td>
                        <td>End</td>
                        <td>
                        {if $errorState != null && !$errorState.endingTime}<p class="errorvalue">{$errorFormMessage.endingTime}</p>{/if}
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
                    
                    {foreach from=$locations item=location}
                        <option {if $isLocation != null}{if $isLocation->getName() == $location->getName()}selected{/if}{/if} value="{$location->getName()}">{$location->getName()}</option>
                    {/foreach}
                </select>
                {if $errorState != null && !$errorState.locationName}<p class="errorvalue">{$errorFormMessage.locationName}</p>{/if}
            </fieldset>
            <!--navigation buttons-->
            <!--
            <a href="#gestion_events_single_infos">previous</a>
            <a href="#gestion_events_single_speaker">next</a>
            <!--end of gestion_events_single_details-->
            
        </div>
        
        {if $event != null}
            <fieldset id="gestion_events_single_speaker">
    
                
                {counter start=0 skip=1 print=false} 
                {foreach from=$speakers item=slot }
                        <legend>Slot n°{counter}</legend>
                        {if $slot.speakers != null}
                            {foreach from=$slot.speakers item=speaker}
                                <a href="?action=gestion_speaker_infos&id={$speaker->getNo()}&eventId={$event->getNo()}"><span>{$speaker->getFirstname()}</span> <span>{$speaker->getName()}</span></a>
                            {/foreach}
                        {/if}
                {/foreach}
            </fieldset>
            
            {*}<a class="theButton" href="?action=gestion_speaker_infos&eventId={$event->getNo()}">Add Speaker</a>{*}
        {/if}
        
        
        
        
        
        <!--
        <a href="#gestion_events_single_details">previous</a>
        <a href="#gestion_events_single_team">next</a>
        -->
        {if $event != null}
            <fieldset id="gestion_events_single_team">
                <legend>Organizers</legend>
                {foreach from=$isOrganizers item=isOrganizer}
                    <fieldset>
                        <p>
                            <label for="role"><span>{$isOrganizer.organizer->getFirstname()}</span> <span>{$isOrganizer.organizer->getName()}</span></label>
                            {foreach from=$isOrganizer.roles item=isRole}
                                <select>
                                    {foreach from=$roles item=role}
                                        <option name="role" {if $isRole->getName() == $role->getName()}selected{/if}>{$role->getName()}</option>
                                    {/foreach}
                                </select>
                            {/foreach}
                            {*}
                            <p><input type="text" name="{$isOrganizer.organizer->getNo()}-keyword1" value="Keyword 1" /></p>
                            <p><input type="text" name="{$isOrganizer.organizer->getNo()}-keyword2" value="Keyword 2" /></p>
                            <p><input type="text" name="{$isOrganizer.organizer->getNo()}-keyword3" value="Keyword 3" /></p>
                            {*}
                        </p>
                    </fieldset>
                {/foreach}
            </fieldset>
        {/if}
        <!--
        <input type="hidden" name="action4" value="add_organizer_to_event">
        <input type="submit" name="submit_add" value="Add organizer">
        -->
        
        
        <!--
        <a href="#gestion_events_single_speaker">previous</a>
        -->
        
    </form>
</article>

