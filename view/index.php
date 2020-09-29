<?php
    include '../controller/functions.php';
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
                <option>TEMAS</option>
                <option id="verde" onclick="mudarCor()">green</option>
                <option id="cinza" onclick="mudarCor()">gray</option>
                <option id="azul" onclick="mudarCor()">blue</option>
                <option id="vermelho" onclick="mudarCor()">red</option>
                <option id="laranja" onclick="mudarCor()">orange</option>
                <option id="rosa" onclick="mudarCor()">pink</option>
                
            </select>
            <select>
                <option>FONTES</option>
                <option>arial</option>
                <option>arial</option>
                <option>arial</option>
                <option>arial</option>
                <option>arial</option>
                <option>arial</option>
            
            </select>
        </div>
    </header>
    <div>
        
            <?php
              
                montaCalendario();

            ?>
        
    </div>
    <script src="../controller/functions.js"></script>
</body>
</html>
