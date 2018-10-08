<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio - Conecta 4</title>
    <link rel="stylesheet" href="inc/style.css">
</head>

<body>
    <form action="game.php" method="POST">
        <div class="title">
            Bienvenid@ al Conecta 4 de Eriknaitor <br>
            <input type="submit" class="start" value="Empezar la partida">
        </div>
        
        <input type="hidden" name="row1" value="--------">
        <input type="hidden" name="row2" value="--------">
        <input type="hidden" name="row3" value="--------">
        <input type="hidden" name="row4" value="--------">
        <input type="hidden" name="row5" value="--------">
        <input type="hidden" name="row6" value="--------">
        <input type="hidden" name="player" value="">
    </form>
</body>

</html>