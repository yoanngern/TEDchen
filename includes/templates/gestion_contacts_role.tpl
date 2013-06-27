
{*
Smarty variables available:
	$teamRoles (Array of Object) [0..1]
	$errorFormMessage (Array of error Formular message)
	$errorState (Array of status about uncorrect values)
*}

<article class="gestion_contacts_role offset1 span10">
    <section class="span4">
        <p>  
            <a class="buttonRole" href="?action=gestion_contacts_role_infos">New</a>
        </p>
        <h1>Actual team role</h1>     
        <ul> 
            {foreach from=$teamRoles item=teamRole}
                <li>{$teamRole->getName()}</li> 
            {/foreach}
       </ul>
    </section>
    {$gestionContactsRoleInfos}
</article>
