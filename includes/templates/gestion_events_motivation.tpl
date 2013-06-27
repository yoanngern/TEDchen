{*
Smarty variables available:
	$registrations (Array [Registrations] => Array
		(	
			[Registration] => Registration Object
			[Person] => Person Object
			[Motivations] => Array
				(
					[Motivation] => Motivation Object
				)
		)
	) [0..1]
*}
<article class="gestion_events_motivation span12">
    
{foreach from=$registrations item=registration}  

    <section class="span12">
        <ul>
            <a href="?action=motivation_refuse"><li class="refuse"></li></a>
            <a href="?action=motivation_wait"><li class="wait"></li></a>
            <a href="?action=motivation_accept"><li class="accept"></li></a>
        </ul>
        <h1>{$registration.person->getFirstName()} {$registration.person->getName()}</h1>
        <h2>Motivation :</h2>
        <p class="motivation">
        {foreach from=$registration.motivations item=motivation}
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis ante sapien, in imperdiet lectus imperdiet in. Nam varius dolor vel magna condimentum, eu euismod ante facilisis. Sed quis scelerisque sem. Maecenas imperdiet eros volutpat, laoreet eros vestibulum, sollicitudin metus. Proin mollis hendrerit lobortis. Fusce nibh lacus, ullamcorper vel lacus sit amet, bibendum ornare magna. Nulla sodales ligula at odio hendrerit, sit amet ultricies libero porta. Sed pulvinar mauris non augue gravida, sed varius odio tincidunt. Aliquam erat volutpat. Ut diam neque, lobortis vitae turpis vel, iaculis consequat ante. Maecenas nec orci id nisl vehicula lobortis. Proin ut tincidunt felis. Maecenas felis ipsum, suscipit a accumsan non, blandit non libero. Ut laoreet erat non leo consequat, sed commodo metus vulputate.</p>-->
                {$motivation->getText()}
        {foreachelse}
        </p>
        <p>There is no entry for the motivation</p>
        {/foreach}
        
    </section>

{foreachelse}
    <p>There is no entry for the whole participant</p>
{/foreach}
        
</article>   

    <!--<article>
        <h1>Jean-Paul Gaucher</h1>
        <p>
            Nam auctor pellentesque diam, vitae vehicula urna elementum et Ut placerat, erat et varius aliquet, purus sem viverra lorem, nec molestie quam erat at nisl. 
            Donec gravida quam sodales, lacinia elit ac, auctor nisi. Aliquam porttitor justo lorem, at rutrum turpis pretium et. Praesent in ornare tortor, eget euismod elit. 
            Suspendisse vitae tempus lacus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
        <section>
            <ul>
                <li><a href="?action=motivation_refuse">REFUSE</a></li
                <li><a href="?action=motivation_wait">WAIT</a></li>
                <li><a href="?action=motivation_accpet">ACCEPT</a></li>
            </ul>
        </section>
    </article>

    <article>
        <h1>Jean-Marie Le Pet</h1>
        <p>
            Nam auctor pellentesque diam, vitae vehicula urna elementum et Ut placerat, erat et varius aliquet, purus sem viverra lorem, nec molestie quam erat at nisl. 
            Donec gravida quam sodales, lacinia elit ac, auctor nisi. Aliquam porttitor justo lorem, at rutrum turpis pretium et. Praesent in ornare tortor, eget euismod elit. 
            Suspendisse vitae tempus lacus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
        <section>
            <ul>
                <li><a href="?action=motivation_refuse">REFUSE</a></li
                <li><a href="?action=motivation_wait">WAIT</a></li>
                <li><a href="?action=motivation_accpet">ACCEPT</a></li>
            </ul>
        </section>
    </article>

    <article>
        <h1>Henri Sale Vador</h1>
        <p>
            Nam auctor pellentesque diam, vitae vehicula urna elementum et Ut placerat, erat et varius aliquet, purus sem viverra lorem, nec molestie quam erat at nisl. 
            Donec gravida quam sodales, lacinia elit ac, auctor nisi. Aliquam porttitor justo lorem, at rutrum turpis pretium et. Praesent in ornare tortor, eget euismod elit. 
            Suspendisse vitae tempus lacus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
        <section>
            <ul>
                <li><a href="?action=motivation_refuse">REFUSE</a></li
                <li><a href="?action=motivation_wait">WAIT</a></li>
                <li><a href="?action=motivation_accpet">ACCEPT</a></li>
            </ul>
        </section>
    </article>
</section>
        -->
