<?php

function addToken($column) {
    global $token; 

    if ($_POST['row1'][$column] == '-') {
        $_POST['row1'][$column] = $token; 
    } else if ($_POST['row2'][$column] == '-') {
        $_POST['row2'][$column] = $token; 
    } else if ($_POST['row3'][$column] == '-') {
        $_POST['row3'][$column] = $token; 
    } else if ($_POST['row4'][$column] == '-') {
        $_POST['row4'][$column] = $token; 
    } else if ($_POST['row5'][$column] == '-') {
        $_POST['row5'][$column] = $token; 
    } else if ($_POST['row6'][$column] == '-') {
        $_POST['row6'][$column] = $token; 
    } else {
        echo 'Has llegado al tope de la columna, saltando el turno'; 
    }
}

function onGameWinHA() {
    for ($i = 1; $i <= 6; $i++) {
        $getRow = 'row' . $i; 
        if (strpos($_POST[$getRow], 'AAAA') !== false) {
            return true; 
        }
    }
}

function onGameWinHB() {
    for ($i = 1; $i <= 6; $i++) {
        $getRow = 'row' . $i; 
        if (strpos($_POST[$getRow], 'BBBB') !== false) {
            return true; 
        }
    }
}

function onGameWinVA() {
    for ($column = 0; $column <= 7; $column++) {
        $row = $_POST['row1'][$column] . $_POST['row2'][$column] . $_POST['row3'][$column] . $_POST['row4'][$column] . $_POST['row5'][$column] . $_POST['row6'][$column]; 
        if (strpos($row, 'AAAA') !== false) {
            return true; 
        }
    }
}

function onGameWinVB() {
    for ($column = 0; $column <= 7; $column++) {
        $row = $_POST['row1'][$column] . $_POST['row2'][$column] . $_POST['row3'][$column] . $_POST['row4'][$column] . $_POST['row5'][$column] . $_POST['row6'][$column]; 
        if (strpos($row, 'BBBB') !== false) {
            return true; 
        }
    }
}