<?php 
 
$nama = "Mamat sutardi";
$umur = 23;
$nilai = 87.5;
$status = true;

echo "Nama : $nama<br>";
echo 'Umur :' . $umur . '<br>';
printf ("Nilai : %.3f <br>",$nilai);
if ($status) {
    echo "status siswa aktif";
} else {
    echo "status siswa tidak aktif";
}

?>