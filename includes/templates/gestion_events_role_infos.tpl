{*
Smarty variables available:
	$events (Array [Events] => Array
		(	
			[Event] => Event Object
			[Roles] => Array
				(
					[Role] => Role Object
				)
		)
	) [0..1]
        
        $role (Role Object)
*}
<div class="span6">
                <p>
                <input type="hidden" name="action" value="gestion_events_role_send" />
                <input type="submit" name="gestion_events_role_send" value="Save" />
            </p>
<article class="gestion_events_role_infos">
    <form name="gestion_event_role_infos" method="post" action="">
            <!--button save-->


        <legend>Choose event</legend>   
        <select>
            
            <option value="{$role->getEventNo()}">Choose event</option>
            {foreach from=$events item=event}
                <option value="{$event.event->getNo()}">{$event.event->getMainTopic()}</option>
            {/foreach}
        </select>
       
       
        <label for="eventRoleName">Event role name</label>
        <input type="text" name="role" value="{$role->getName()}" />
        {*}<p class="errorvalue">Please enter an event role name</p>{*}
       
        <!--
        <legend>Chose level</legend>   
        <select>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option> 
        </select>
        -->
 
    </form>
</article>
</div>