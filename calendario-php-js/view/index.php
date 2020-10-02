<?php
    realpath(require_once(__DIR__).'/../controller/functions.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALENDARIO</title>
    <link type="text/css" rel="stylesheet" href="../style.css">
    
</head>
<body>
    <header>
        <h1>CALENDARIO</h1>
        <div class="menu" id="">
            <select>
                <option id="padrao" onclick="corPadrao()">TEMAS</option>
                <option id="verde" onclick="corVerde()" class="opt">green</option>
                <option id="cinza" onclick="corCinza()" class="opt">gray</option>
                <option id="azul" onclick="corAzul()" class="opt">blue</option>
                <option id="vermelho" onclick="corVermelho()" class="opt">red</option>
                <option id="laranja" onclick="corLaranja()" class="opt">orange</option>
                <option id="rosa" onclick="corRosa()" class="opt">pink</option>
                
            </select>
            <select>
                <option id="default" onclick="fontDefault()">FONTES</option>
                <option id="arial" onclick="fonteArial()">arial</option>
                <option id="timesNewRomam" onclick="fonteTimesNewRomam()">Times New Romam</option>
                <option id="palatino" onclick="fontePalatino()">Palatino</option>
                <option id="courier" onclick="fonteCourier()">Courier</option>
                <option id="cursive" onclick="fonteCursive()">Cursive</option>
            
            </select>
        </div>
    </header>
    <div>
        
            <?php
              
                montaCalendario();

            ?>
        
    </div>
    <script src="/controller/functions.js"></script>
</body>
</html>
