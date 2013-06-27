{*
Smarty variables available:
	$subAction (String)
*}

<!--menu navigation of gestion pages-->
<ul id="subnav" class="gestion_nav span12" >
    <li {if $subAction==gestion_events}class="selected"{/if}><a href="?action=gestion_events">Events</a></li>
    <li {if $subAction==gestion_locations}class="selected"{/if}><a  href="?action=gestion_locations">Locations</a></li>
    <li {if $subAction==gestion_contacts}class="selected"{/if}><a href="?action=gestion_contacts">Contacts</a></li>
</ul>