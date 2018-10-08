<?php
    function drawButtons() {
        echo '<thead> <tr>'; 
        for ($i = 0; $i < 8; $i++) {
            echo "<th>"; 
            $numID = $i + 1; 

            if (onGameWinHA() || onGameWinVA() || onGameWinHB() || onGameWinVB()) {
                echo "<button name='b-$numID' value='$i' disabled>$numID</button>"; 
            }else {
                echo "<button name='b-$numID' value='$i'>$numID</button>"; 
            }
            echo "</th>"; 
        }
        echo '</tr> </thead>'; 
    }

    function drawMatrix() {
        $limit = 8; 

        $row1 = $_POST['row1']; 
        $row2 = $_POST['row2']; 
        $row3 = $_POST['row3']; 
        $row4 = $_POST['row4']; 
        $row5 = $_POST['row5']; 
        $row6 = $_POST['row6']; 

        echo '<tr>'; 
        for ($i = 0; $i < $limit; $i++) {

            if ($row6[$i] == 'A') {
                echo '<td><span class="rdot"></span></td>'; 
            }else if ($row6[$i] == 'B') {
                echo '<td><span class="bdot"></span></td>'; 
            }else {
                echo "<td> - </td>"; 
            }
        }
        echo '</tr>'; 

        echo '<tr>'; 
        for ($i = 0; $i < $limit; $i++) {
            if ($row5[$i] == 'A') {
                echo '<td><span class="rdot"></span></td>'; 
            }else if ($row5[$i] == 'B') {
                echo '<td><span class="bdot"></span></td>'; 
            }else {
                echo "<td> - </td>"; 
            }
        }
        echo '</tr>'; 

        echo '<tr>'; 
        for ($i = 0; $i < $limit; $i++) {
            if ($row4[$i] == 'A') {
                echo '<td><span class="rdot"></span></td>'; 
            }else if ($row4[$i] == 'B') {
                echo '<td><span class="bdot"></span></td>'; 
            }else {
                echo "<td> - </td>"; 
            }
        }
        echo '</tr>'; 

        echo '<tr>'; 
        for ($i = 0; $i < $limit; $i++) {
            if ($row3[$i] == 'A') {
                echo '<td><span class="rdot"></span></td>'; 
            }else if ($row3[$i] == 'B') {
                echo '<td><span class="bdot"></span></td>'; 
            }else {
                echo "<td> - </td>"; 
            }
        }
        echo '</tr>'; 

        echo '<tr>'; 
        for ($i = 0; $i < $limit; $i++) {
            if ($row2[$i] == 'A') {
                echo '<td><span class="rdot"></span></td>'; 
            }else if ($row2[$i] == 'B') {
                echo '<td><span class="bdot"></span></td>'; 
            }else {
                echo "<td> - </td>"; 
            }
        }
        echo '</tr>';

        echo '<tr>'; 
        for ($i = 0; $i < $limit; $i++) {
            if ($row1[$i] == 'A') {
                echo '<td><span class="rdot"></span></td>'; 
            }else if ($row1[$i] == 'B') {
                echo '<td><span class="bdot"></span></td>'; 
            }else {
                echo "<td> - </td>"; 
            }
        }
        echo '</tr>'; 
    }


    function drawTable() {
        echo '<table>'; 
        drawButtons(); 
        drawMatrix(); 
        echo '</table>'; 
        
    }?>