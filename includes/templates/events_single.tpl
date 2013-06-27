{*
Smarty variables available:
    $event (Object)
    $location (Object) [0..1]
    $slots (Object) [0..1]
    $speakers (Array [Slot][Place][Speaker][Person]) [0..1]
    
    $speakers (Array [Speakers] => Array
		(	
			[Slot] => Registration Object
			[Speakers] => Array
			    (
			        [Speaker] => Speaker Object
			    )
        )
*}

<article class="events_single offset2 span8">

    <!--event header-->
    <header>

        <div class="grey_bar"></div>

        <h1>{$event->getMainTopic()}</h1>
        <time>{$event->getStartingDate()|date_format:"%d %B %Y"}</time>
    </header>

    <!-- <nav id="subnav">-->
    <nav class="offset3 span6">
        <ul>
            <li>
                <a class="event_info" href="#" title="Infos">Infos</a>
            </li>
            <li>                
                <a class="event_details" href="#" title="Details">Details</a>
            </li>
            <li>
                <a class="event_speakers" href="#" title="Speakers">Speakers</a> 
            </li>
        </ul>
    </nav>
    <!--</nav>-->        
    
    <div class="grey_bar2"></div>

    <!--infos tab-->
    <section class="events_single_infos">
        <!--event tab-->
        <section class="span8">
            <h2>Programme</h2>
            <p>
                <!--Our inspired team, in collaboration with TEDxLausanne, is pleased to announce TEDxLausanneChange 2013. This event, themed “positive disruption”, will feature a 
                live stream of the main TEDxChange program in Seattle, Washington and three presentations by dynamic local speakers. Join us for an event that will challenge 
                preconceived ideas, spark discussion, engage leaders and shed light on new perspectives.-->
                {$event->getDescription()}
            </p>
        </section>
        <!--end event tab-->
        <!-- schedule tab-->
        <section class="span4">
            <h2>Schedule</h2>
            <dl>
                <dt>{$event->getStartingTime()|date_format:"%R"}</dt>
                <dd>Starting</dd>
                
                <!--<dt>13:30-15:00</dt>
                <dd>Slot 1</dd>
                <dt>15:30-16:30</dt>
                <dd>Slot 2</dd>
                <dt>16:30-17:45</dt>
                <dd>Slot 3</dd>-->

                {foreach from=$slots item=slot}
                    <dt>{$slot->getStartingTime()|date_format:"%R"}-{$slot->getEndingTime()|date_format:"%R"}</dt>
                    <dd>Slot {$slot->getNo()} </dd>
                {/foreach}

                <dt>{$event->getEndingTime()|date_format:"%R"}</dt>
                <dd>Closing</dd>  
            </dl>
        </section>
        <!--end schedule tab-->  
    </section>
    <!--end infos tab-->


    <!--details tab-->
    <section class="events_single_details">
        {if ($location != null)}
            <!-- location tab-->
            <section class="span6">
                <h2>Location</h2>
                <p>{$location->getName()}</p>
                <p>{$location->getAddress()}</p>
                <p>{$location->getCity()}</p>
                <p>{$location->getCountry()}</p> 
            </section>
            <!--end location tab-->
        {/if}
        <!--dress code-->
        <section class="span6">
            <h2>Dress Code</h2>
            <p>At TEDxLausanne 2012, Steve Edge, one of our speakers, encouraged the attendees to “dress for a party and the party will come to you”. We also encourage you to “dress for a party” while still expressing who you really are.</p>
        </section>
        <!--end dress code-->
        <!--language-->
        <section class="span6">
            <h2>Languages</h2>
            <p>Our programme for 2013 contains presentations in English.</p>
        </section>
        <!--end language-->
    </section>
    <!--end section tab-->

    <!--speaker tab-->
    <section class="events_single_speakers">
        <!--speaker slot-->
        <section class="span12">
            {counter start=0 skip=1 print=false}
            {foreach from=$speakers item=slot}
                <h2>Slot {counter}</h2>
                {if $slot.speakers != null}
                    <ul>
                        <li>           
                            {foreach from=$slot.speakers item=speaker}
                                {if $speaker!=null}{$speaker->getName()}{/if}
                            {/foreach}  
                        </li>
                    </ul>
                {/if}
            {/foreach}
        </section>
    <!--end speaker slot-->            
</section>
<!--end speaker tab-->

<!--registration button-->           
<a class="theButton offset2 span8" href="?action=events_registration&id={$event->getNo()}">Register</a>
<!--end registration button--> 
</article>
