<?php
    include_once 'Deck.php';
    //session_destroy();
    session_start();
    $deck = new StandardDeck();
    //$deck->shuffleDeck();
    //$player = array();
    $player = $deck->drawCards(3);

    $_SESSION['playerHand'] = serialize($player);
    