/************************************************************/
/*Animation javascript pour le site TEDx Lausanne*/
/*Groupe 143/dreamteam/projet_mi*/
/************************************************************/
$(document).ready(function(){


/**********************************************/
/* Animation event_single.tpl*/
/* Changement des onglets infos, détails et 
 * speakers.
/**********************************************/

   $(".events_single_infos").show();
   $(".events_single_details").hide();
   $(".events_single_speakers").hide();

  $(".events_single .event_info").click(function(){
   $(".events_single_infos").delay(200).fadeIn();
   $(".events_single_details").fadeOut(200);
   $(".events_single_speakers").fadeOut(200);
  });


  $(".events_single .event_details").click(function(){
   $(".events_single_details").delay(200).fadeIn();
   $(".events_single_infos").fadeOut(200);
   $(".events_single_speakers").fadeOut(200);
  });
  
  
    $(".events_single .event_speakers").click(function(){
    $(".events_single_speakers").delay(200).fadeIn();
    $(".events_single_details").fadeOut(200);
    $(".events_single_infos").fadeOut(200);
  });
  
  
  
  
  
  /**********************************************/
/* Animation event_single.tpl*/
/* Changement des événements*/
/**********************************************/

/**
 *Initialisation du compteur d'events
 */

var currentEvent = 1;
var nbEvents = $(".events>.events_single").length;


/**
 *Cachage de tous les events
 */

$(".events .events_single").hide();


/**
 *Affichage du dernier events_single en fonction de son ordre dans la balise 
 *article ayant la classe .events 
 *l'events en premier de liste est le plus récent
 */

$(".events .events_single:nth-child("+currentEvent+")").show();


/**
 *ajoute le titre et la date de l'évenement précédent au bouton précédent
 */
function previousButton(){
var previousTitle = $(".events_single:nth-child("+(currentEvent-1)+") header h1").text();
var previousDate  = $(".events_single:nth-child("+(currentEvent-1)+") header time").text();
$(".events_nav .previous h1").remove();
$(".events_nav .previous time").remove();
$(".events_nav .previous").append("<h1>"+previousTitle+"</h1><time>"+previousDate+"</time>");
}


/**
 ajoute le titre et la date de l'évenement suivant au bouton suivant
 */
function nextButton(){
var nextTitle = $(".events_single:nth-child("+(currentEvent+1)+") header h1").text();
var nextDate  = $(".events_single:nth-child("+(currentEvent+1)+") header time").text();
$(".events_nav .next h1").remove();
$(".events_nav .next time").remove();
$(".events_nav .next").append("<h1>"+nextTitle+"</h1><time>"+nextDate+"</time>");
}




/**
 *fonctions d'apparitions des boutons previous et next
 *aux moments opportuns
 */
function displayButton(){
    switch (currentEvent)
    {
    case 1:
      $(".events_nav .previous").hide();
      nextButton();
    break;
    case nbEvents:
      $(".events_nav .next").hide();
      previousButton();
    break;
    default:
      $(".events_nav .next").show();
      $(".events_nav .previous").show();
    }
}



/**
 *Initialisation des bouttons
 */
displayButton();
   
        
/**
 *Bouton précédent
 */        
        
$(".events_nav .previous").click(function(){
     if(currentEvent>1){
             $(".events_single:nth-child("+currentEvent+")").hide();
             currentEvent-=1;
             $(".events_single:nth-child("+currentEvent+")").show();
             previousButton();
             nextButton();
             displayButton();
    }
});


/**
 *Bouton suivant
 */

$(".events_nav .next").click(function(){
    if(currentEvent<nbEvents){
             $(".events_single:nth-child("+currentEvent+")").hide();
            currentEvent+=1;
            $(".events_single:nth-child("+currentEvent+")").show();
            previousButton();
            nextButton();
            displayButton();
    }
});


/************************************************************/
});