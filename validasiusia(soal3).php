<?php
$umur = isset($_POST['umur']) ? (int)$_POST['umur'] : null;

if ($umur === null) {
    echo '<form method="post">Umur: <input name="umur" /> <button>Check</button></form>';
    exit;
}

if ($umur >= 18) {
    echo "Akses diberikan. Umur: $umur";
} else {
    echo "Akses ditolak. Anda harus berumur minimal 18 tahun. Umur Anda: $umur";
}
?>
