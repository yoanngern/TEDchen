{*
Smarty variables available:
	$person (Object)
	$registrations (Array [Registrations] => Array
		(	
			[Registration] => Registration Object
			[Event] => Event Object
		)
	) [0..1]
	$talks (Array [Talks] => Array
		(	
			[Talk] => Talk Object
			[Event] => Event Object
		)
	) [0..1]
	$roles (Array of Object) [0..1]
	$teamRoles (Array of Object) [0..1]
	$errorState (Array of status about uncorrect values)
	$errorFormMessage (Array of error Formular message)
	$isTeamRole (Object of TeamRole)
*}

<article class="gestion_contacts_infos span12">

        
    <form id="contact" method="post" action="">
        <fieldset class="span6"> 
            <legend>Informations about this person</legend>
            <p>
                <label for="firstname">First name </label>
                <input type="text" name="firstname" value="{$person->getFirstname()}"/>
                {if $errorState != null && !$errorState.firstname}<p class="errorvalue">{$errorFormMessage.firstname}</p>{/if}
            </p>
            <p>
                <label for="name">Name </label>
                <input type="text" name="name" value="{$person->getName()}"/>
                {if $errorState != null && !$errorState.name}<p class="errorvalue">{$errorFormMessage.username}</p>{/if}
            </p>
            <p>
                <label for="dateOfBirth">Date of birth</label>
                <input type="date" name="dateOfBirth" value="{$person->getDateOfBirth()}"/>
                {if $errorState != null && !$errorState.dateOfBirth}<p class="errorvalue">{$errorFormMessage.dateOfBirth}</p>{/if}
            </p>
            <p>
                <label for="email">Email</label>
                <input type="email" name="email" value="{$person->getEmail()}"/>
                {if $errorState != null && !$errorState.email}<p class="errorvalue">{$errorFormMessage.email}</p>{/if}
            </p> 
            <p>
                <label for="phoneNumber">Phone Number</label>
                <input type="text" name="phoneNumber" value="{$person->getPhoneNumber()}"/>
                {if $errorState != null && !$errorState.phoneNumber}<p class="errorvalue">{$errorFormMessage.phoneNumber}</p>{/if}
            </p>
            <p>
                <label for="address">Address </label>
                <input type="text" name="address" value="{$person->getAddress()}"/>
                {if $errorState != null && !$errorState.address}<p class="errorvalue">{$errorFormMessage.address}</p>{/if}
            </p>
            <p>
                <label for="city">City</label>
                <input type="text" name="city" value="{$person->getCity()}"/>
                {if $errorState != null && !$errorState.city}<p class="errorvalue">{$errorFormMessage.city}</p>{/if}
            </p>
            <p>
                <label for="country">Country</label>
                <input type="text" name="country" value="{$person->getCountry()}"/>
                {if $errorState != null && !$errorState.country}<p class="errorvalue">{$errorFormMessage.country}</p>{/if}
            </p>
            <p>
                <label for="description">Description </label>
                <textarea type="text" name="description">{$person->getDescription()}</textarea>
            </p>
        </fieldset>

        <fieldset class="span6">
            <p>
                <input type="hidden" name="id" value="{$person->getNo()}" />
                <input type="hidden" name="action" value="gestion_contacts_infos" />
                <input class="buttonSave" type="submit" name="update" value="Save" />
            </p>
            <legend>Event's participation</legend>
            <table>
                <tr>
                    <th>Title of event</th>
                    <th>Date of event</th>
                </tr>

                {if $registrations != null}
                    {foreach from=$registrations item=registration}
                        <tr>
                            <td>{$registration.event->getMainTopic()}</td>
                            <td>{$registration.event->getStartingDate()|date_format:"%d %B %Y"}</td>
                        </tr>
                    {/foreach}
                {/if}
            </table>
            <legend>Event's talk</legend>
            <table>
                <tr>
                    <th>Title of the talk</th>
                    <th>Title of the event</th>
                </tr>
                {foreach from=$talks item=talk}
                    <tr>
                        <td>{$talk.talk->getVideoTitle()}</td>
                        <td>{$talk.event->getMainTopic()}</td>
                    </tr>
                {/foreach}
            </table>
            <legend>Event's organization</legend>
            <table>
                <tr>
                    <th>Title of event</th>
                    <th>Role in the event</th>
                </tr>
                {if $roles != null}
                    {foreach from=$roles item=role}
                        <tr>
                            <td>Title of event</td>
                            <td>{$role->getName()}</td>
                        </tr>
                    {/foreach}
                {/if}
            </table>
                <legend>Role in TEDx</legend>   
                <ul>
                {if $teamRoles != null}
                    {foreach from=$teamRoles item=teamRole}
                        <li>
                            <input {if $isTeamRole != null}{if in_array($teamRole, $isTeamRole)}checked="yes"{/if}{/if} type="checkbox" name="teamrole[]" value="{$teamRole->getName()}">{$teamRole->getName()}
                        </li>
                    {/foreach}
                {/if}
                </ul>
        </fieldset>
    </form>
</article>