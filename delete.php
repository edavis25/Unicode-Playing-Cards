<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include_once 'EuchreDeck.php';
            session_start();
            
            $euc = unserialize($_SESSION['test']);
            
            echo $euc->numberCardsInDeck() + "<br />";
                        
            $card = $euc->drawCard();
            echo "<span style='font-size: 50px;'>" . $card->showCard() . "</span>";
        ?>
    </body>
</html>
