<?php
$nama   = $_POST['nama'];
$gol    = $_POST['gol'];
$jamkerja = $_POST['jamkerja'];

switch ($gol) {
    case 1:
        $gapok = 1486500;
        $tun_pengabdian = 250000;
        break;
    case 2:
        $gapok = 1926000;
        $tun_pengabdian = 300000;
        break;
    case 3:
        $gapok = 2456700;
        $tun_pengabdian = 350000;
        break;
    case 4:
        $gapok = 2899500;
        $tun_pengabdian = 400000;
        break;
    default:
        $gapok = 0;
        $tun_pengabdian = 0;
        break;
}


if ($jamkerja > 173) {
    $lembur = $jamkerja - 173;
} else {
    $lembur = 0;
}

//hitung gaji
$gaji_lembur = $lembur * 20000;
$pajakpokok = 0.05 * $gapok;
$pajak_lembur = 0.05 * $gaji_lembur;
$total_pajak = $pajakpokok + $pajak_lembur;
$gaji_bersih = (($gapok + $tun_pengabdian + $gaji_lembur) - $total_pajak);

echo "==========================================================<br>";
echo "====================Gaji Karyawan=========================<br>";
echo "==========================================================<br>";

echo "Nama Karyawan    : " . $nama . "<br>";
echo "Golongan         : " . $gol . "<br>";
echo "Jam Kerja        : " . $jamkerja . "<br>";
echo "===========================================================<br>";
echo "Gaji Pokok       : Rp " . number_format($gapok) . "<br>";
echo "Gaji Lembur      : Rp " . number_format($gaji_lembur) . "<br>";
echo "Pajak Gaji Pokok : Rp " . number_format($pajakpokok) . "<br>";
echo "Pajak Lembur     : Rp " . number_format($pajak_lembur) . "<br>";
echo "Total Pajak      : Rp " . number_format($total_pajak) . "<br>";
echo "Tunjangan Pengabdian : Rp " . number_format($tun_pengabdian) . "<br>";
echo "Gaji Bersih      : Rp " . number_format($gaji_bersih) . "<br>";
