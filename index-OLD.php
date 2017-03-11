<?php
    include_once 'Card.php';
    include_once 'StandardDeck.php';
    include_once 'StandardDeckJokers.php';
    include_once 'Shoe.php';
    include_once 'tests.php';
    include_once 'EuchreDeck.php';
    
    // Standard Deck
    $card = new Card('H', '9');
    $deck = new StandardDeck();
    $drawnCard = $deck->drawCard();
    $deck->shuffleDeck();
    $drawnCard2 = $deck->drawCard();
    $cards = $deck->drawCards(2);
    
    // Jokers
   $jokers = new StandardDeckJokers(2);
   
   // Shoe
   $shoe = new Shoe((new StandardDeck)->getDeck(), 2);
   
   // Euchre
   $euchre = new EuchreDeck();
?>

<!DOCTYPE html>
<html>
    <body>
        <script src="ajax-calls.js"></script>
        <input type="button" onclick="increment()" value="Click" />
        Single Card: <?php echo $card->getSuit(); ?>
        <br />
        Drawn Card 1:  <?php echo $drawnCard->getValue() . " of " . $drawnCard->getSuit(); ?>
        <br />
        Drawn Card 2: <?php echo $drawnCard2->getValue() . " of " . $drawnCard2->getSuit(); ?>
        <br />
        <?php echo "cards: " . sizeof($cards); ?>
        <?php 
            foreach ($cards as $i) {
                echo $i->getValue() . " of " . $i->getSuit();
            }
        ?>
        <br />
        Size of standard deck: <?php echo $deck->numberCardsInDeck() ?>
        <br />
        Size of jokers deck : <?php echo $jokers->numberCardsInDeck() ?>
        <br /> 
        <?php 
            $jk = array_splice($jokers->getDeck(), -1, 1);
            echo $jk[0]->getSuit();
        ?>
        <br />
        <hr />
        Num Decks/Shoe: <?php echo $shoe->numberDecksInShoe(); ?> <br />
        Num Cards/Shoe: <?php echo $shoe->numberCardsInShoe(); ?> <br />
        Num Cards/Deck(S)L <?php echo $shoe->numberCardsInDeck(); ?> <br />
        Drawn Shoe: <?php $shoe->drawCard(); echo $shoe->numberCardsInShoe(); ?>
        <hr />
        Euchre: <?php echo $euchre->numberCardsInDeck(); ?> <br />
        <?php echo dumpDeck($jokers->getDeck()); ?>
        
        <span style="font-size: 100px"><?php $euchre->shuffleDeck(); $c = $euchre->drawCard(); echo $c->showCardBack(); ?></span>
        <br />
        <span style="font-size: 100px"><?php echo $c->showCard();?></span>
        <br />
        EUCHRE DECK SIZE: 
        <?php 
            echo $euchre->numberCardsInDeck();
           
            session_start(); 
            $_SESSION['test'] = serialize($euchre);
        ?>
        <a href='delete.php'>Test</a>
    </body>
</html> 