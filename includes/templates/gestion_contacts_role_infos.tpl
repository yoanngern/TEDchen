{*
Smarty variables available:
	$teamRoles (Array of Object) [0..1]
	$errorFormMessage (Array of error Formular message)
	$errorState (Array of status about uncorrect values)
	$isTeamRole (Object of TeamRole)
*}

<section class="gestion_contacts_role_infos offset2 span8">
    <form method="post" action="">
        <fieldset>
        <p>
            <input type="hidden" name="id" value="{if $isTeamRole != null}{$isTeamRole->getName()}{/if}" />
            <input type="hidden" name="action" value="gestion_contacts_role_infos" />
            <input class="buttonRoleInfos" type="submit" name="update" value="Save" />
        </p>
        <h1>Team role</h1>             
        <p>
            <label for="teamrole">Name</label>
            <input type="text" name="teamrole" value="{if $isTeamRole != null}{$isTeamRole->getName()}{/if}"/>
            <p class="errorvalue">Please enter a name</p>
        </p>
        </fieldset>
    </form>
</section>