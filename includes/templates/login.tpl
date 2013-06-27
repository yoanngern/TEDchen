{*
Smarty variables available:
	$errorState (Array of status about uncorrect values)
	$errorFormMessage (Array of error Formular message)
*}

<article class="login span12">
    <!--login tab-->
    <section class="offset3 span6">
        <h1>Connexion</h1>
        <!--login form-->
        <form name="login" method="post" action="">
            <fieldset>
                <p>
                    <label for="email">Email</label>
                    <input type="text" name="email"></input>
                    {if $errorState != null && !$errorState.email}<p class="errorvalue">{$errorFormMessage.email}</p>{/if}
                </p>
                <p>
                    <label for="password">Password</label>
                    <input type="password" name="password"></input>
                    {if $errorState != null && !$errorState.password}<p class="errorvalue">{$errorFormMessage.login_password}</p>{/if}
                </p>
                <!--login button-->
                <p>
                    <input type="hidden" name="action" value="login"/>
                    <input class="button_login" type="submit" name="update" value="Login"/>
                <!--CSS register button-->
               </p>    
                    <a class="theButton" href="?action=register">Register</a>
            </fieldset>
        </form>

    </section>
</article>