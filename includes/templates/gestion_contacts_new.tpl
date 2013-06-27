{*
Smarty variables available:
	$teamRoles (Array of Object) [0..1]
	$errorFormMessage (Array of error Formular message)
	$errorState (Array of status about uncorrect values)
*}

<article class="gestion_contacts_new span12">

    <form id="contact" method="post" action="">
       <fieldset class="span6"> 
	        <h3>Informations about the new person</h3>
	        <p>
	            <label for="firstname">First name </label>
	            <input type="text" name="firstname" value=""/>
	            {if $errorState != null && !$errorState.firstname}<p class="errorvalue">{$errorFormMessage.firstname}</p>{/if}
	        </p>
	        <p>
	            <label for="name">Name </label>
	            <input type="text" name="name" value=""/>
	            {if $errorState != null && !$errorState.name}<p class="errorvalue">{$errorFormMessage.username}</p>{/if}
	        </p>
	        <p>
	            <label for="dateOfBirth">Date of birth</label>
	            <input type="date" name="dateOfBirth" value=""/>
	            {if $errorState != null && !$errorState.dateOfBirth}<p class="errorvalue">{$errorFormMessage.dateOfBirth}</p>{/if}
	        </p>
	        <p>
	            <label for="email">Email</label>
	            <input type="email" name="email" value=""/>
	            {if $errorState != null && !$errorState.email}<p class="errorvalue">{$errorFormMessage.email}</p>{/if}
	        </p> 
	        <p>
	            <label for="phoneNumber">Phone number</label>
	            <input type="text" name="phoneNumber" value=""/>
	            {if $errorState != null && !$errorState.phoneNumber}<p class="errorvalue">{$errorFormMessage.phoneNumber}</p>{/if}
	        </p>
	        <p>
	            <label for="address">Address </label>
	            <input type="text" name="address" value=""/>
	            {if $errorState != null && !$errorState.address}<p class="errorvalue">{$errorFormMessage.address}</p>{/if}
	        </p>
	        <p>
	            <label for="city">City</label>
	            <input type="text" name="city" value=""/>
	            {if $errorState != null && !$errorState.city}<p class="errorvalue">{$errorFormMessage.city}</p>{/if}
	        </p>
	        <p>
	            <label for="country">Country</label>
	            <input type="text" name="country" value=""/>
	            {if $errorState != null && !$errorState.country}<p class="errorvalue">{$errorFormMessage.country}</p>{/if}
	        </p>
	        <p>
	            <label for="description">Description</label>
	            <textarea name="description"></textarea>
	        </p>
        </fieldset>

        <fieldset class="span6">
            <p>
                <input type="hidden" name="action" value="gestion_contacts_new" />
                <input class="buttonSave" type="submit" name="update" value="Create" />
            </p>
            <h3>Role in TEDx</h3>   
            <ul>
                {foreach from=$teamRoles item=teamRole}
                    <li>
                       <input type="checkbox" name="teamrole" value="{$teamRole->getName()}">{$teamRole->getName()}
                    </li>
            	{/foreach}
            </ul>
        </fieldset>
    </form>
</article>