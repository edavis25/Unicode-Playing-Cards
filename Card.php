<?php
class Card {
    protected $suit;
    protected $value;
        
    public function __construct($suit, $val) {
        $this->suit = $suit;
    	$this->value = $val;
    }
    
    public function getSuit() {
        return $this->suit;
    }
    
    public function getValue() {
        return $this->value;
    }
    
    public function getCardArray() {
        return array('suit' => $this->suit, 'value' => $this->value);
    }
    
    public function showCardBack() {
        return "&#x1F0A0;";
    }
    
    // Unicode map: https://en.wikipedia.org/wiki/Playing_cards_in_Unicode
    public function showCard() {
        // Begin unicode string
        $result = "&#x1F0";
        
        // Get correct value for suit
        if ($this->suit == 'S') {
            $result .= "A";
        }
        else if ($this->suit == 'H') {
            $result .= "B";
        }
        else if ($this->suit == 'D') {
            $result .= "C";
        }
        else if ($this->suit == 'C') {
            $result .= "D";
        }
        else {  // Joker - return before checking value
            return $result .= "BF";
        }
        
        /* Get value
        if ($this->value == '10') {
            $result .= "A";
        }
        else if ($this->value == 'J') {
            $result .= "B";
        }
        else if ($this->value == 'Q') {
            $result .= "D";
        }
        else if ($this->value == 'K') {
            $result .= "E";
        }
        else if ($this->value =='A') {
            $result .= "1";
        }
        else {
            $result .= $this->value;
        }
        */
        
        switch ($this->value) {
            case '10':
                $result .= "A";
                break;
            case 'J':
                $result .= "B";
                break;
            case 'Q':
                $result .= "D";
                break;
            case 'K':
                $result .= "E";
                break;
            case 'A':
                $result .= "1";
                break;
            default:
                $result .= $this->value;
                break;
        }
        
        return $result;
    }
}

//  S         H       D        C
//  1F0A1 	1F0B1 	1F0C1 	1F0D1
