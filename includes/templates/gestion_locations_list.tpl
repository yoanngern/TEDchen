{*
Smarty variables available:
$locations (Array of Object)
*}

<!--page with a list of the already existing locations -->
<article class="gestion_locations_list span12">
    <div class="span6">
        <!--CSS button done-->
        <a href="?action=gestion_locations_new" class="theButton">New</a>
        <!--Locations List-->    
        <div class="scroll">
        <ul>
            {foreach from=$locations item=location}
                <li><a href="?action=gestion_locations_infos&id={$location->getName()}">{$location->getName()}</a></li>
            {/foreach}
        </ul>
        </div>
    </div>
       
    {$gestionLocationsInfos}
</article>