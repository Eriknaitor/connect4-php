<?php
    $token;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['player'] == 1) {
            $_POST['player'] = 2;
            $token = 'A';
        } else {
            $_POST['player'] = 1;
            $token = 'B';
        }
    } else {
        $_POST['player'] = 1;
        $token = 'A';
    }
?>