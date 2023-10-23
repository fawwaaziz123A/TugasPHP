<?php
for ($i = 1; $i <= 9; $i++) { // untuk mengatur jumlah baris yang akan dicetak yangmana $i = 1 dan berlanjut hingga $i <= 9 maka $i++ (increment)
    for ($j = 0; $j < $i; $j++) { // mengatur berapa banyak angka yang akan dicetak dalam satu baris. $j = 0 dan berlanjut hingga $j kurang dari $i maka $j++
        echo "$j"; // mencetak angka
    }

    echo "<br>"; // mencetak baris baru
}
?>