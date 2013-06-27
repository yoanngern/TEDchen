<article class="events_registration offset2 span8">

    <!--registration header-->
    <header class="span12">            
        <h1>{$event->getMainTopic()}</h1>
        <time>{$event->getStartingDate()|date_format:"%d %B %Y"}</time>
<!--
        <nav class="offset2 span8">
            <a href="#event_user_infos"><span>infos</span></a>
            <a href="#event_user_details"><span>details</span></a>
            <a href="#event_user_adress"><span>address</span></a>   
            <a href="#event_user_motivation"><span>motivation</span></a>
        </nav>
-->
    </header>
    <!--end registration header-->


    <section class="span12">
    <!--form-->
        <form method="post" action="">
            
        <!--user_infos-->
            <fieldset id="event_user_infos">
                <h3>General informations</h3>
                <!--user_firstName-->
                <p>
                    <label for="firsname">First name</label>
                    <input type="text" name="firstname"/>
                    {if $errorState != null && !$errorState.firstname}<p class="errorvalue">{$errorFormMessage.firstname}</p>{/if}
                    
                </p>

                <!--user_name-->
                <p>
                    <label for="name">Name</label>
                    <input type="text" name="name"/>
                    {if $errorState != null && !$errorState.name}<p class="errorvalue">{$errorFormMessage.name}</p>{/if}
                </p>

                <!--user_email-->
                <p>
                    <label for="email">Email </label>
                    <input type="email" name="email"/>
                    {if $errorState != null && !$errorState.email}<p class="errorvalue">{$errorFormMessage.email}</p>{/if}
                </p>

                <p>
                    <label for="email">Repeat email </label>
                    <input type="email" name="email_repeat"/>
                    {if $errorState != null && !$errorState.email_repeat}<p class="errorvalue">{$errorFormMessage.email_repeat}</p>{/if}
                </p>

                <!--user_pw-->
                <p>
                    <label for="password">Password </label>
                    <input type="password" name="password"/>
                    {if $errorState != null && !$errorState.password}<p class="errorvalue">{$errorFormMessage.password}</p>{/if}
                </p>

                <p>
                    <label for="password">Repeat password </label>
                    <input type="password" name="password_repeat"/>
                    {if $errorState != null && !$errorState.password_repeat}<p class="errorvalue">{$errorFormMessage.password_repeat}</p>{/if}
                </p>
            </fieldset>
        
            <!--go ahead button-->
            <!--    <a href="#event_user_details">next</a> -->
            <!--end button-->
        
        <!--user details-->
            <fieldset id="event_user_details">
            <h3>And a bit more details...</h3>
            
                <!--user_dateofbirth-->
                <p>
                    <label for="dateOfBirth">Date of birth valid</label>
                    <input type="date" name="dateOfBirth"/>
                    {if $errorState != null && !$errorState.dateOfBirth}<p class="errorvalue">{$errorFormMessage.dateOfBirth}</p>{/if}
                </p>

                <!--user_phone-->
                <p>
                    <label for="phoneNumber">Phone number </label>
                    <input type="text" name="phoneNumber"/> 
                    {if $errorState != null && !$errorState.phoneNumber}<p class="errorvalue">{$errorFormMessage.phoneNumber}</p>{/if}
                </p>

                <!--message-->
                <p>
                    <label for="description">Description </label>
                    <textarea type="text" name="description"></textarea>
                    {if $errorState != null && !$errorState.description}<p class="errorvalue">{$errorFormMessage.description}</p>{/if}
                </p>
            </fieldset>
        
            <!--go ahead button-->
               <!-- <a href="#event_user_adress">next</a> -->
            <!--end button-->
            
<!--user adress tab-->
            <fieldset id="adress">
            <h3>Please give us your adress</h3>
               <!--user_street-->
                <p>
                    <label for="address">Street </label> 
                    <input type="text" name="address"  />
                    {if $errorState != null && !$errorState.address}<p class="errorvalue">{$errorFormMessage.address}</p>{/if}
                </p>

                <!--user_city-->

                <p>
                    <label for="city">City </label>
                    <input type="text" name="city"/>
                    {if $errorState != null && !$errorState.city}<p class="errorvalue">{$errorFormMessage.city}</p>{/if}
 
                </p>

                <!--user_country-->
                <p>
                    <label for="country">Country </label>
                    <input type="text" name="country"/>
                    {if $errorState != null && !$errorState.country}<p class="errorvalue">{$errorFormMessage.country}</p>{/if}
            </fieldset>

                    
            <!--go ahead button-->
               <!-- <a href="#event_user_motivation">next</a> -->
            <!--end button-->

    <!--user_motivation tab-->
            <fieldset id="event_user_motivation">
            <h3>Show us your motivations!</h3>

                    <!--user_keywords-->
                    <p>
                        <label for="keyword1">Keyword 1 </label>
                        <input type="text" name="keyword1" />
                        {if $errorState != null && !$errorState.keyword1}<p class="errorvalue">{$errorFormMessage.keyword}</p>{/if}
                    </p>
                    <p>
                        <label for="keyword2">Keyword 2 </label>
                        <input type="text" name="keyword2"  />
                        {if $errorState != null && !$errorState.keyword2}<p class="errorvalue">{$errorFormMessage.keyword}</p>{/if}
                    </p>
                    <p>
                        <label for="keyword3">Keyword 3 </label>
                        <input type="text" name="keyword3"  />
                        {if $errorState != null && !$errorState.keyword3}<p class="errorvalue">{$errorFormMessage.keyword}</p>{/if}
                    </p>

                    <!--user_motivation-->
                    <p>
                        <label for="motivation">Motivation </label>
                        <textarea type="text" name="motivation"></textarea>
                        {if $errorState != null && !$errorState.motivation}<p class="errorvalue">{$errorFormMessage.motivation}</p>{/if}
                    </p>
            </fieldset>
    
            <p>
                <input type="hidden" name="id" value="{$event->getNo()}" />
                <input type="hidden" name="action" value="events_registration" />
                <input class="buttonSave" type="submit" name="update" value="Save" />
            </p>
                
        </form>
  
    </section>
</article>