<?php

class EuchreDeck extends StandardDeck {
    
    public function __construct() { 
        // Splice the values array for only cards 9-A
        $this->cardValues = array_splice($this->cardValues, -6);
        parent::__construct();
    }
}