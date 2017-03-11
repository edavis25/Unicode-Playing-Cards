/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}

function deal() {
    var xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'deal.php', true);
    xhttp.send();
   
    showPlayerHand();
}

function showPlayerHand() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $('#player-hand').html(this.responseText);
        }
    };
    xhttp.open('GET', 'player-hand.php', true);
    xhttp.send();
}

function draw() {
    
}