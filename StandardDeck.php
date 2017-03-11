<?php
include_once 'Deck.php';

class StandardDeck extends Deck {
    
    protected $suits = array('H', 'D', 'C', 'S');
    protected $cardValues = array('2','3','4','5','6','7','8','9','10','J','Q','K','A');
    
    public function __construct() {
        parent::__construct($this->suits, $this->cardValues);
    }
}