{*
Smarty variables available:
	$errorState (Array of status about uncorrect values)
	$errorFormMessage (Array of error Formular message)
	$person (Object)
*}


<!--all user informations-->
<article class="user_infos span12">
    <!--modification informations form-->
    <section class="span6">
        <form name="user_infos" method="post" action="">
            <!--save modification button-->
            <p>
                <input type="hidden" name="action" value="user_infos" />
                <input class="buttonSaveModif" type="submit" name="update" value="Save" />
            </p>
            <!--title-->
            <legend>Profil edition</legend>
            <!--firstname-->
            <p>
                <label for="firstname">First name</label>
                <input type="text" name="firstname" value="{$person->getFirstname()}"/>
                {if $errorState != null && !$errorState.firstname}<p class="errorvalue">{$errorFormMessage.firstname}</p>{/if}
            </p>
            <!--surname-->
            <p>
                <label for="name">Name</label>
                <input type="text" name="name" value="{$person->getName()}"/>
                {if $errorState != null && !$errorState.name}<p class="errorvalue">{$errorFormMessage.name}</p>{/if}
            </p>
            <!--email-->
            <p>
                <label for="email">Email</label>
                <input type="email" name="email" value="{$person->getEmail()}"/>
                {if $errorState != null && !$errorState.email}<p class="errorvalue">{$errorFormMessage.email}</p>{/if}
            </p>
            <!--date-->
            <p>
                <label for="dateofbirth">Date of birth</label>
                <input type="date" name="dateOfBirth" value="{$person->getDateOfBirth()}"/>
                {if $errorState != null && !$errorState.dateOfBirth}<p class="errorvalue">{$errorFormMessage.dateOfBirth}</p>{/if}
            </p>
            <!--phoneNumber-->
            <p>
                <label for="phoneNumber">Phone number</label>
                <input type="text" name="phoneNumber" value="{$person->getPhoneNumber()}"/>
                {if $errorState != null && !$errorState.phoneNumber}<p class="errorvalue">{$errorFormMessage.phoneNumber}</p>{/if}
            </p>
            <!--address-->
            <p>
                <label for="address">Address</label>
                <input type="text" name="address" value="{$person->getAddress()}"/>
                {if $errorState != null && !$errorState.address}<p class="errorvalue">{$errorFormMessage.address}</p>{/if}
            </p>
            <!--City&npa-->
            <p>
                <label for="city">City</label>
                <input type="text" name="city" value="{$person->getCity()}"/>
                {if $errorState != null && !$errorState.city}<p class="errorvalue">{$errorFormMessage.city}</p>{/if}
            </p>
            <!--country-->
            <p>
                <label for="country">Country</label>
                <input type="text" name="country" value="{$person->getCountry()}"/>
                {if $errorState != null && !$errorState.country}<p class="errorvalue">{$errorFormMessage.country}</p>{/if}
            </p>
            <!--description-->
            <p>
                <label for="description">Description</label>
                <textarea type="text" name="description" value="{$person->getDescription()}"></textarea>
            </p>
            
        </form>  
    </section>
    <!--end modification informations form-->
    
    <!--new password form-->
    <section class="span6">
        <form name="user_password" method="post" action="">
            <!--save new password button-->
            <p>
                <input type="hidden" name="action" value="user_infos" />
                <input class="buttonSavePwd" type="submit" name="update_password" value="Save" />
            </p>
            <!--title-->
            <legend>Password edition</legend>
            {*}
            <p>
                <label for="current_password">Current Password</label>
                <input type="password" name="password" value="Current password"/>
                <p class="errorvalue">Please enter your current password</p>
            </p>
            {*}
            <p>
                <label for="password">New Password</label>
                <input type="password" name="password"/>
                {if $errorStatePass != null && !$errorStatePass.password}<p class="errorvalue">{$errorFormMessage.password}</p>{/if}
            </p>
            
            <p>
                <label for="password_repeat">Repeat New Password</label>
                <input type="password" name="password_repeat"/>
                {if $errorStatePass != null && !$errorStatePass.password_repeat}<p class="errorvalue">{$errorFormMessage.password_repeat}</p>{/if}
            </p>
            
        </form>  
    </section>
    <!--end new password form-->
</article>