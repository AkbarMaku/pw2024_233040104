<?php

function cetak_angka($baris) {
    for ($i = 1; $i <= $baris ; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo "$i";
            if ($j == $i) {
                echo "<br>";
            }
        }
    }
}

cetak_angka(5);


