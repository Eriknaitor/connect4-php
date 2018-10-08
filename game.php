<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        header('Location: http://localhost/Conecta4/');
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juego - Conecta 4</title>
    <link rel="stylesheet" href="inc/style.css">
</head>

<body>
    <div class="table">
        <form method="POST">
            <?php
                include('inc/turn.php');
                include('inc/modifyTable.php');
                include('inc/printTable.php');
                include('inc/handler.php');
                $player = $_POST['player'];

                drawTable();    
                echo "<div class='turn'> Turno del jugador ". $player ."</div>";
                if (onGameWinHA() || onGameWinVA()) {
                    echo '<div class="winnerA">Ha ganado el jugador 1</div>';
                } 
    
                if (onGameWinHB() || onGameWinVB()) {
                    echo '<div class="winnerB">Ha ganado el jugador 2</div>';
                }
            ?>

            <input type="hidden" name="player" value="<?php echo $player ?>">
            <input type="hidden" name="row1" value="<?php echo $_POST['row1']?>">
            <input type="hidden" name="row2" value="<?php echo $_POST['row2']?>">
            <input type="hidden" name="row3" value="<?php echo $_POST['row3']?>">
            <input type="hidden" name="row4" value="<?php echo $_POST['row4']?>">
            <input type="hidden" name="row5" value="<?php echo $_POST['row5']?>">
            <input type="hidden" name="row6" value="<?php echo $_POST['row6']?>">
        </form>
    </div>
</body>

</html>