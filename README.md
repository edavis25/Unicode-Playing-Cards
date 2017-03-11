# Unicode-Playing-Cards
####PHP classes to create a deck/shoe of Unicode playing cards
---
A series of PHP classes that can be used to create decks of Unicode playing cards. Currently, this repo is nothing more than a set of objects and tests for creating different types of playing card decks. This project is simply an attempt at furthering my knowledge of fundamental OOP principles. Functions within the Card class can be called to return strings containing the HTML entities for displaying Unicode icons for playing cards.

OOP is fun :)

#### Basic Inheritance Model
- Card
- Deck (abstract class)
  - Shoe
  - Standard Deck
    - Euchre Deck
    - Deck w/ Jokers
    
--
A list of the Unicode values for card icons can be found <a href="https://en.wikipedia.org/wiki/Playing_cards_in_Unicode" target="_blank">here</a>
