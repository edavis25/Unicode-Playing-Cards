<?php
// Random testing functions

// Output an array of deck objects into pretty HTML list
function dumpDeck($deckArray) {
    $result = "<ol>";
    foreach ($deckArray as $card) {
        $result.="<li>";
        $result.= $card->getValue();
        $result.= " of ";
        $result.= $card->getSuit();
        $result.="</li>";
    }

    return $result . "</ol>";
}
