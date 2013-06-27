{*
Smarty variables available:
	$errorState (Array of status about uncorrect values)
	$errorFormMessage (Array of error Formular message)
*}

<!--user-informations tab-->
<article class="register offset3 span6">
    <h1>Register</h1>

    <!--formulaire-->
    <form name="register" method="post" action="">
    
        <p>
            <input type="hidden" name="action" value="register"/>
            <input class="buttonRegister" type="submit" name="update" value="Save"/>
        </p>  

        <!--firstname-->
        <p>
            <label for="user_name">Firstname</label>
            <input type="text" name="firstname"/>
            {if $errorState != null && !$errorState.firstname}<p class="errorvalue">{$errorFormMessage.firstname}</p>{/if}
        </p>

        <!--name-->
        <p>
            <label for="name">Name</label>
            <input type="text" name="name"/>
            {if $errorState != null && !$errorState.name}<p class="errorvalue">{$errorFormMessage.name}</p>{/if}
        </p>
        
        <!--user_email-->
        <p>
            <label for="email">Email</label>
            <input type="email" name="email"/>
            {if $errorState != null && !$errorState.email}<p class="errorvalue">{$errorFormMessage.email}</p>{/if}
        </p>
        <!--user_repeat_email-->
        <p>
            <label for="email_repeat">Repeat email</label>
            <input type="email" name="email_repeat"/>
            {if $errorState != null && !$errorState.email_repeat}<p class="errorvalue">{$errorFormMessage.email_repeat}</p>{/if}
        </p>

        <!--user_pwd-->
        <p>
            <label for="user_password">Password</label>
            <input type="password" name="password"/>
            {if $errorState != null && !$errorState.password}<p class="errorvalue">{$errorFormMessage.password}</p>{/if}
        </p>
        <!--user_repeat_pwd-->
        <p>
            <label for="user_repeat_password">Repeat password</label>
            <input type="password" name="password_repeat"/>
            {if $errorState != null && !$errorState.password_repeat}<p class="errorvalue">{$errorFormMessage.password_repeat}</p>{/if}
        </p>
        
        <!--Date of Birth-->
        <p>
            <label for="dateOfBirth">Date of birth</label>
            <input type="date" name="dateOfBirth"/>
            {if $errorState != null && !$errorState.dateOfBirth}<p class="errorvalue">{$errorFormMessage.dateOfBirth}</p>{/if}
        </p>
        
        <!--Phone number-->
        <p>
            <label for="phoneNumber">Phone number</label>
            <input type="text" name="phoneNumber"/>
            {if $errorState != null && !$errorState.phoneNumber}<p class="errorvalue">{$errorFormMessage.phoneNumber}</p>{/if}
        </p>
        
        <!--Address-->
        <p>
            <label for="address">Address</label>
            <input type="text" name="address"/>
            {if $errorState != null && !$errorState.address}<p class="errorvalue">{$errorFormMessage.address}</p>{/if}
        </p>
        
        <!--City-->
        <p>
            <label for="city">City</label>
            <input type="text" name="city"/>
            {if $errorState != null && !$errorState.city}<p class="errorvalue">{$errorFormMessage.city}</p>{/if}
        </p>
        
        <!--Country-->
        <p>
            <label for="country">Country</label>
            <input type="text" name="country"/>
            {if $errorState != null && !$errorState.country}<p class="errorvalue">{$errorFormMessage.country}</p>{/if}
        </p>
     
    </form>
    <!--end formulaire-->
</article>