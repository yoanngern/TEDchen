<nav class="events_nav">
 <a href="#" class="previous"><span>Previous</span></a>
 <a href="#" class="next"><span>Next</span></a>
 
        
            
                
        {*foreach from=$events item=event}
            <a href="?action=events_single&id={$event->getNo()}">
                <h1>{$event->getMainTopic()}</h1>
                <time>{$event->getStartingDate()|date_format:"%d %B %Y"}</time>
            </a>
         {/foreach*}

</nav>