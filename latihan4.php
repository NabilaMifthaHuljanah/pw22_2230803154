<?php
$mahasiswa = [
    ["Joni", "123456", "Sistem Informasi", "joni@gmail.com"], 
    ["Budi", "65413", "Teknik Informatika", "budi@gmail.com"], 
    ["Angga", "789654", "Ilmu Komputer", "angga@gmail.com"], 
    ["896546", "Rio", "Teknik Jaringan", "rio@gmail.com"]

];
?>
<IDOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $mhs): ?>
<ul>
<L1><?= $mhs[0]; ?></li>
<11><?= $mhs[1]; ?></li>
<li><?= $mhs[2]; ?></11>
<11><?= $mhs[3]; ?></11>
</ul>
<?php endforeach; ?>
</body>
 </html