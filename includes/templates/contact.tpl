{*
    Smarty variables available:
    $errorState (Array of status about uncorrect values)
	$errorFormMessage (Array of error Formular message)
*}

<article class="contact span12">
    <section class="span6">
        <h1>Contact</h1>

        <!--form of contact-->
    <form name="contact" method="post" action="">
        <fieldset>
            <p>
                <label for="firstname">First name</label>
                <input type="text" name="firstname">
                {if $errorState != null && !$errorState.firstname}<p class="errorvalue">{$errorFormMessage.firstname}</p>{/if}
            </p>
            
            <p>
                <label for="name">Name</label>
                <input type="text" name="name">
                {if $errorState != null && !$errorState.name}<p class="errorvalue">{$errorFormMessage.name}</p>{/if}
            </p>
            
            <p>
                <label for="email">Email</label>
                <input type="email" name="email">
                {if $errorState != null && !$errorState.email}<p class="errorvalue">{$errorFormMessage.email}</p>{/if}
            </p>
            
            <p>
                <label for="subject">Subject</label>
                <input type="text" name="subject">
                {if $errorState != null && !$errorState.subject}<p class="errorvalue">{$errorFormMessage.subject}</p>{/if}
            </p>
            
            <p>
                <label for="message">Message</label>
                <textarea name="message"></textarea>
                {if $errorState != null && !$errorState.message}<p class="errorvalue">{$errorFormMessage.message}</p>{/if}
            </p>
        </fieldset>
        <!--button send-->
        <input type="hidden" name="action" value="contact">
        <input type="submit" name="update" value="Send">
    </form>
    </section>
    <!--google map--> 
    <section class="span6">
        <h1>Find us</h1>
        <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=46.519931,6.565885&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=46.519931,6.565885&amp;output=embed"></iframe>
        <br />
        <small>
               <a href="https://maps.google.com/maps?q=46.519931,6.565885&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=46.519931,6.565885&amp;source=embed">Agrandir le plan</a>
        </small>
        <br/>
    </section>

</article>