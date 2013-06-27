{*
    Smarty variables available:
    $speaker (Object)
    $keywords (Array of Object)
    $talks (Array of Object)
*}

<article class="gestion_events_speaker_infos">

    {if $speaker != null}<h1><span>{$speaker->getFirstname()}</span> <span>{$speaker->getName()}</span></h1>{/if}
    
    
    
    
    <form method="post" action="">
    
    <!--button-->
    <input type="hidden" name="id" value="{if $speaker != null}{$speaker->getNo()}{/if}" />
    <input type="hidden" name="action" value="gestion_speaker_infos" />
    <input type="submit" name="update" value="Save" />

        <fieldset>
            <legend>Keywords</legend>
            {assign var="i" value=1} 
            {foreach from=$keywords item=keyword}
                <input type="text" name="keyword{$i}" value="{$keyword->getValue()}" />
                {$i = $i+1}
            {/foreach}
            {for $foo=$i to 3 max=3}
                <input type="text" name="keyword{$foo}" value="" />
            {/for}
        </fieldset>
    
        <!--talk link-->
        
        {foreach from=$talks item=talk}
            <fieldset>
                <legend>Talk's video</legend>
                <label>Title</label>
                <input type="text" name="videoTitle" value="{$talk->getVideoTitle()}" />
                
                <label>Description</label>
                <textarea name="videoDescription">{$talk->getVideoDescription()}"</textarea>
                
                <label>URL</label>
                <input type="text" name="videoURL" value="{$talk->getVideoURL()}" />
            </fieldset>
        {/foreach}

    </form>
</article>