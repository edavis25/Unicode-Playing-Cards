<html>
<body>

<?php


$suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);

/* Next, we declare the faces*/

$faces = array (
    "Two"=>2, "Three"=>3, "Four"=>4, "Five"=>5, "Six"=>6, "Seven"=>7, "Eight"=>8,
    "Nine"=>9, "Ten"=>10, "Jack"=>10, "Queen"=>10, "King"=>10, "Ace"=>11
);

function evaluateHand($hand) {
    global $faces;
    $value = 0;
    foreach ($hand as $card) {
        if ($value > 11 && $card['face'] == 'Ace') {
            $value = $value + 1;
        } else {
            $value = intval($value) + intval($faces[$card['face']]);
        }
    }
    return $value;
}

/* Now build the deck by combining the faces and suits. */

$deck = array();

foreach ($suits as $suit) {
    $keys = array_keys($faces);
    foreach ($keys as $face) {
        $deck[] = array('face'=>$face, 'suit'=>$suit);
    }
}

/* Next, you can shuffle up the deck and pull a random card. */

shuffle($deck);

$hand = array();

if (empty($_POST)) {
    
    for ($i = 0; $i < 2; $i++) {
        $hand[] = array_shift($deck);
        $dealer[] = array_shift($deck);
    }

    $handstr = serialize($hand);
    $deckstr= serialize($deck);
    $dealerstr= serialize($dealer);
} else if ($_POST['submit'] == 'stay') {
    $dealer = unserialize($_POST['dealerstr']);
    $hand = unserialize($_POST['handstr']);
    $deck = unserialize($_POST['deckstr']);
    while(evaluateHand($dealer) < 17) {
        $dealer[] = array_shift($deck);
    }
    echo "Dealer hit " . evaluateHand($dealer) . "<br />\n";
    echo "You hit " . evaluateHand($hand) . "<br />\n";
    $handstr = $_POST['handstr'];
    $dealerstr = serialize($dealer);
    $deckstr= serialize($deck);
}
else

if ($_POST['submit'] == 'hit me')
{
    $dealer = unserialize($_POST['dealerstr']);
    $hand = unserialize($_POST['handstr']);
    $deck = unserialize($_POST['deckstr']);
    $hand[] = array_shift($deck);
    $dealerstr = $_POST['dealerstr'];
    $handstr = serialize($hand);
    $deckstr= serialize($deck);}


printf(
   "<form method='post'><fieldset>
   <input type='hidden' name='handstr' value='%s' />
   <input type='hidden' name='deckstr' value='%s' />
   <input type='hidden' name='dealerstr' value='%s' />",
   htmlspecialchars($handstr, ENT_QUOTES),
   htmlspecialchars($deckstr, ENT_QUOTES),
   htmlspecialchars($dealerstr, ENT_QUOTES)
); 


foreach ($hand as $index =>$card) {
    echo $card['face'] . ' of ' . $card['suit'] . "<br />";
}

?>
<p>You have : <?php echo evaluateHand($hand); ?></p>
<p>Dealer is showing the <?php echo $dealer[0]['face'] ?> of <?php echo $dealer[0]['suit'] ?></p>
<input type='submit' name='submit' value='hit me' />
<input type='submit' name='submit' value='stay' />
</fieldset></form>
<a href='index.php'>Try Again</a>

</body>
</html>

