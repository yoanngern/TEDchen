<section class="events">
<!--
Il faut faire cette page pour que, lorsqu'on clique sur event, dans la barre de menu,
on tombe sur l'event le plus récent. 

et, lorsqu'on clique sur un event dans la bar de sélection de l'event qui se trouve dans
la partie inférieur de la page, cela nous affiche l'event choisi.
-->

<!--Affichage de l'event-->

{foreach from=$events item=event}
            {$event}
{/foreach}

<!--bar de sélection de l'event à afficher-->

{$events_nav}
                
</section>

