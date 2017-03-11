<?php

class Shoe extends Deck {
    protected $shoe;
    protected $numDecks;

    public function __construct($deck, $numDecks = 1) {
        $this->numDecks = $numDecks;
        
        $this->deck = $deck;
        $tmp = $this->deck;
        for ($i = 1; $i < $numDecks; $i++) {
            $this->deck = array_merge($this->deck, $tmp);
        }
    }
    
    public function numberDecksInShoe() {
        return $this->numDecks;
    }
    
    public function numberCardsInShoe() {
        return sizeof($this->deck);
    }
    
    public function shuffleShoe() {
        shuffle($this->deck);
    }
}
