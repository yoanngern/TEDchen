{*
Smarty variables available:
	$videoIframe (iframe of the video)
	$isTalk (Object of Talk)
	$isEvent (Object of Event)
	$isSpeaker (Object of Speaker)
*}

<article class="video_player">
    <div class="align_left">
        {$videoIframe}  
    </div>
    <div class="align_right">
        <h1>{if $isTalk != null}{$isTalk->getVideoTitle()}{/if}</h1>
        <p>
            <time>{if $isEvent != null}{$isEvent->getStartingDate()|date_format:"%d %B %Y"}{/if}</time>
        </p>
        <p>{if $isTalk != null}{$isTalk->getVideoDescription()}{/if}</p>
        <p><span>Speaker : </span><span>{if $isSpeaker != null}{$isSpeaker->getFirstname()}</span> <span>{$isSpeaker->getName()}{/if}</span></p>
    </div>
</article>