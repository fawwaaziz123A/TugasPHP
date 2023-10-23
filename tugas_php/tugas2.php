<?php
for ($i = 9; $i >= 1; $i--) { // perulangan pertama yang mengatur baris ke-9 hingga baris ke-1 karena $i = 9 sampai $i >= 1 maka $i-- (decrement)
    for ($j = 1; $j <= $i; $j++) { //  perulangan untuk mencetak bintang dalam satu baris. $j = 1 dan berlanjut hingga $j kurang dari atau sama dengan nilai $i.
        echo "*"; // Mencetak bintang
    }
    echo "<br>"; // Mencetak baris baru
}
?>