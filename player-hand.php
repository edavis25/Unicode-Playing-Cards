<?php
    include_once 'Deck.php';
    
    session_start();
    
    $cards = unserialize($_SESSION['playerHand']);
    echo sizeof($cards);
    $i = 1;
    foreach ($cards as $card) {
        echo "Card $i: ";
        echo $card->getValue() . " of " . $card->getSuit();
        echo "<br />";
        $i++;
    }
?>