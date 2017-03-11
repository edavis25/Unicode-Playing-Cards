<?php
include_once 'Card.php';

abstract class Deck {
    
    protected $deck;
    
    public function __construct($suitsArr, $cardVals) {
       
        $this->deck = $this->buildDeck($suitsArr, $cardVals);
    }
    
    private function buildDeck($suits, $values) {
        $arr = array();
        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $arr[] = new Card($suit, $value);
            }
        }
        return $arr;
    }
    
    public function getDeck() {
        return $this->deck;
    }
    
    public function drawCard() {
        return array_shift($this->deck);
    }
    
    public function drawCards($num = 1) {
        return array_slice($this->deck, 0, $num);
    }
    
    public function shuffleDeck() {
        shuffle($this->deck);
    }
    
    public function numberCardsInDeck() {      
        return sizeof($this->deck);
    }
}

