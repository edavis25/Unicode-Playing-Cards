<?php

class StandardDeckJokers extends StandardDeck {
    public function __construct($numJokers = 2) {
        // Create a standard deck
        parent::__construct();
        
        // Add jokers
        for ($i = 0; $i < $numJokers; $i++) {
            $this->deck[] = new Card('Joker', 'Joker');
        }
    }
}