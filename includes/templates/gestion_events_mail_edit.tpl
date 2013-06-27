{*
Smarty variables available:
    $registrations (Array [Registrations] => Array
                (	
                    [Registration] => Registration Object
                    [Person] => Person Object
                )
    ) [0..1]

    $person (Object)
*}

<div class="span6">
    <form class="gestion_events_mail_edit" method="post" action="">

        <!--send email button-->
        <input type="hidden" name="action" value="gestion_events_mail_edit" />
        <input type="submit" name="update" value="Send" />

        <!--adress mail-->

        <fieldset>
            <label>Email</label>
            <input type="email" name="mail" value="{$person->getEmail()}">
            {*}<p class="errorvalue">Please enter an email</p>{*}

            <label>Subject</label>
            <input type="text" name="subject" value="">
            {*}<p class="errorvalue">Please enter a subject</p>{*}
            
            <label>Message</label>
            <textarea name="message"></textarea>
            {*}<p class="errorvalue">Please enter a message</p>{*}
        </fieldset>
    </form>
</div>