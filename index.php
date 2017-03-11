<?php
    if ($_POST) {
        if ($_POST['submit'] == 'hit') {
            echo 'TESTING';
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            fieldset {
                height: 250px;
                width: 500px;
                border: 2px solid #000000;
                margin: 10px;
            }
        
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="ajax-calls.js"></script>
    </head>
    
    <fieldset>
        <legend>Dealer Hand</legend>
    </fieldset>
    
    <input type='button' value='Deal' onclick="deal();"/>
    <input type='button' value='Draw' />

    <fieldset>
        <legend>Player Hand</legend>
        <div id='player-hand'>
           
        </div>
    </fieldset>
    <form method='post'>
        <input type='submit' name='submit' value='hit' />
    </form>
</html>