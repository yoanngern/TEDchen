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

<!--wall of all videos-->
<article class="videos_all">

    {if $isTalk != null}
        {$video_player}
    {/if}
    {foreach from=$talks item=talk}
        {if $talk.imgURL != null}
            <section>
                <a href="?action=videos&eventId={$talk.talk->getEventNo()}&speakerId={$talk.talk->getSpeakerPersonNo()}">
                    <p><img src="{$talk.imgURL}" /></p>
                    <p><h1>{$talk.talk->getVideoTitle()}</h1></p>
                    <p><time>{$talk.event->getStartingDate()|date_format:"%d %B %Y"}</time></p>
                </a>
            </section>
        {/if}
    {/foreach}  
</article>

