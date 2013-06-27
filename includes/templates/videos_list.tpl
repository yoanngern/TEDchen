{*
Smarty variables available:
	$talks (Array [Talks] => Array
		(	
			[Talk] => Talk Object
			[imgURL] => link to YouTube Thumbnail
			[Speaker] => Speaker Object
			[Event] => Event Object
		)
	) [0..1]
*}

<!--list of videos in the home page-->
<article class="videos_list span12">
    <div class="grey_bar_video"></div>
    <h1>Videos of our previous events</h1>
    <nav class="span1">
        <a class="previous" title="Previous"></a>
    </nav>
    <ul class="span10">
        {assign var="i" value=0}
        {foreach from=$talks item=talk name=list}
            {if $talk.imgURL != null}
                {if $i == 3}
                    {break}
                {/if}
                {$i = $i +1}
                <li>
                    <a href="?action=videos&eventId={$talk.talk->getEventNo()}&speakerId={$talk.talk->getSpeakerPersonNo()}">
                        <img src="{$talk.imgURL}" />
                        <h1>{$talk.talk->getVideoTitle()}</h1>
                        <time>{$talk.event->getStartingDate()|date_format:"%d %B %Y"}</time>
                    </a>
                </li>
            {/if}
        {/foreach}     
    </ul>
    <nav class="span1">
        <a class="next" title="Next"></a>
    </nav>
</article>