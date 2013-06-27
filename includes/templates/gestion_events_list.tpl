{*
Smarty variables available:
	$event(object)
*}

<section class="gestion_events_list span12">
    {foreach from=$events item=event}
        <a href="?action=gestion_events_single&id={$event->getNo()}">
            <div class="grey_bar"></div>    
            <article>
                <header>
                    <h1>{$event->getMainTopic()}</h1>
                    <time>{$event->getStartingDate()|date_format:"%d %B %Y"}</time>
                </header>    
                <p>
                 <!--ajouter le lien sur l'image-->
                    <img src="/tedxEventManager/projet_mi//htdocs/img/layout/arrows/arrowRight.png" alt="Picture of a right arrow" />
                </p>
            </article>
        </a>
    {/foreach}
</section>