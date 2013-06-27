{*
Smarty variables available:
    $location (Object)
    $errorFormMessage (Array of error Formular message)
*}

<div class="span6">
<!--form to create new locations-->
<article class="gestion_locations_infos">
    <!--add form location-->
    <form name="gestion_locations_infos" method="post" action="">
        <!--button save-->
        <p>
            {if $location != null}<input type="hidden" name="id" value="{$location->getName()}" />{/if}
            <input type="hidden" name="action" value="gestion_locations_infos" />
            <input type="submit" name="update" value="Save" />
        </p>

        <!--name-->
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" value="{if $location != null}{$location->getName()}{/if}"/>
            {if $errorState != null && !$errorState.name}<p class="errorvalue">{$errorFormMessage.name}</p>{/if}
        </p>
        <!--direction-->
        <p>
            <label for="direction">Direction</label>
            <input type="text" name="direction" value="{if $location != null}{$location->getDirection()}{/if}"/>

        </p>
        <!--address-->
        <p>
            <label for="address">Address</label>
            <input type="text" name="address" value="{if $location != null}{$location->getAddress()}{/if}"/>
            {if $errorState != null && !$errorState.address}<p class="errorvalue">{$errorFormMessage.address}</p>{/if}
        </p>

        <!--city-->
        <p>
            <label for="city">City</label>
            <input type="text" name="city" value="{if $location != null}{$location->getCity()}{/if}"/>
            {if $errorState != null && !$errorState.city}<p class="errorvalue">{$errorFormMessage.city}</p>{/if}
        </p>

        <!--country-->
        <p>
            <label for="country">Country</label>
            <input type="text" name="country" value="{if $location != null}{$location->getCountry()}{/if}"/>
            {if $errorState != null && !$errorState.country}<p class="errorvalue">{$errorFormMessage.country}</p>{/if}
        </p>  
   </form>
   <!--end add form location-->         
</article>
</div>