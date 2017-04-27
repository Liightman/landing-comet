   var triggers = [
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching/HAVAS.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching/YOUSIGN.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching/card+renault+2.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching/engie.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching/make.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching/reezocar.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching/HAVAS.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching/YOUSIGN.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching/card+renault+2.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching/engie.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching/make.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching/reezocar.png',
  
]

var actions = [
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching_2/CARD_DATA_ENGINEER.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching_2/CARD_DEVELOPPEUR.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching_2/CARD_JUNIOR_SOFT.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching_2/CARD_INTERMEDIATE.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching_2/CARD_LEAD_DEV.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching_2/CARD_SENIOR_DATA.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching_2/CARD_DATA_ENGINEER.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching_2/CARD_DEVELOPPEUR.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching_2/CARD_JUNIOR_SOFT.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching_2/CARD_INTERMEDIATE.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching_2/CARD_LEAD_DEV.png',
  'https://s3.eu-west-2.amazonaws.com/comet-assets/cards_matching_2/CARD_SENIOR_DATA.png'
]

function buildSlotItem (imgURL) {
    return $('<div>').addClass('slottt-machine-recipe__item')
                     .css({'background-image': 'url(' + imgURL + ')'})
}

function buildSlotContents ($container, imgURLArray) {
  $items = imgURLArray.map(buildSlotItem);
  $container.append($items);
}

function popPushNItems ($container, n) {
    $children = $container.find('.slottt-machine-recipe__item');
    $children.slice(0, n).insertAfter($children.last());

    if (n === $children.length) {
      popPushNItems($container, 1);
    }
}

// After the slide animation is complete, we want to pop some items off
// the front of the container and push them onto the end. This is
// so the animation can slide upward infinitely without adding
// inifinte div elements inside the container.
function rotateContents ($container, n) {
    setTimeout(function () {
      popPushNItems($container, n);
      $container.css({top: 0});
    }, 300);    
}

function randomSlotttIndex(max) {
  var randIndex = (Math.random() * max | 0);
  return (randIndex > 10) ? randIndex : randomSlotttIndex(max);
}

function animate() {
  var triggerIndex = randomSlotttIndex(triggers.length);
  var actionIndex = randomSlotttIndex(actions.length);

  $trigger.animate({top: -triggerIndex*200}, 500, 'swing', function () {
     rotateContents($trigger, triggerIndex);
  });

  $action.animate({top: -actionIndex*200}, 700, 'swing', function () {
    rotateContents($action, triggerIndex);
  });
}

$(function () {
  $trigger = $('#trigger_slot .slottt-machine-recipe__items_container');
  buildSlotContents($trigger, triggers);  
  $action = $('#action_slot .slottt-machine-recipe__items_container');
  buildSlotContents($action, actions);
  
  setInterval(animate, 3500);
});