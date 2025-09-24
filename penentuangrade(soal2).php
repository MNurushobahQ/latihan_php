<?php
$nilai = isset($_POST['nilai']) ? (int)$_POST['nilai'] : null;

if ($nilai === null) {
    echo '<form method="post">Nilai: <input name="nilai" /> <button>Check</button></form>';
    exit;}

if ($nilai >= 85) {
    $grade = "A";} elseif ($nilai >= 70) {
    $grade = "B";} elseif ($nilai >= 55) {
    $grade = "C";} elseif ($nilai >= 40) {
    $grade = "D";} else 
    {
    $grade = "E";}
echo "Nilai: $nilai. Grade: $grade";
?>
