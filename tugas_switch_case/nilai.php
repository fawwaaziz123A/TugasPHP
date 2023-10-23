<?php
$a = 95; // Ganti dengan nilai yang ingin Anda kategorikan

if ($a >= 90 && $a <= 100) {
    echo "A. Nilai $a termasuk dalam kategori A (Sangat Baik).";
} else {
    echo "A. Nilai $a tidak termasuk dalam kategori A (Sangat Baik).";
}
echo"<hr>";

$a = 85; // Ganti dengan nilai yang ingin Anda kategorikan

if ($a >= 90 && $a <= 100) {
    echo "B. Nilai $a termasuk dalam kategori A (Sangat Baik).";
} elseif ($a >= 80 && $a < 90) {
    echo "B. Nilai $a termasuk dalam kategori B (Baik).";
} else {
    echo "Nilai $a tidak termasuk dalam kategori A (Sangat Baik) atau B (Baik).";
}
echo"<hr>";

$a = 75; // Ganti dengan nilai yang ingin Anda kategorikan

if ($a >= 90 && $a <= 100) {
    echo "C. Nilai $a termasuk dalam kategori A (Sangat Baik).";
} elseif ($a >= 80 && $a < 90) {
    echo "C. Nilai $a termasuk dalam kategori B (Baik).";
} elseif ($a >= 70 && $a < 80) {
    echo "C. Nilai $a termasuk dalam kategori C (Cukup Baik).";
} else {
    echo "C. Nilai $a tidak termasuk dalam kategori A (Sangat Baik), B (Baik), atau C (Cukup Baik).";
}
echo"<hr>";

$a = 65; // Ganti dengan nilai yang ingin Anda kategorikan

if ($a >= 90 && $a <= 100) {
    echo "D. Nilai $a termasuk dalam kategori A (Sangat Baik).";
} elseif ($a >= 80 && $a < 90) {
    echo "D. Nilai $a termasuk dalam kategori B (Baik).";
} elseif ($a >= 70 && $a < 80) {
    echo "D. Nilai $a termasuk dalam kategori C (Cukup Baik).";
} else {
    echo "D. Nilai $a termasuk dalam kategori D (Kurang Baik) atau E (Tidak Lulus).";
}
?>