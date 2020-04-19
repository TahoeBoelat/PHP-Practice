<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Statement Ambil Data
        $namaMahasiswa = $_POST['nama'];
        $mataKuliah = $_POST['matkul'];
        $TugasMahasiswa = $_POST['tugas'];
        $UTSMahasiswa = $_POST['uts'];
        $UASMahasiswa = $_POST['uas'];

        // Total Nilai Akhir
        $nilaiAkhir = ($TugasMahasiswa * 0.20) + ($UTSMahasiswa * 0.30) + ($UASMahasiswa * 0.50);

        // Penjumlahan Indeks
        if( $nilaiAkhir > '80') {
            $Indeks='A';
        } elseif ($nilaiAkhir > '70') {
            $Indeks='B';
        } elseif ($nilaiAkhir > '60') {
            $Indeks='C';
        } elseif ($nilaiAkhir > '50') {
            $Indeks='D';
        } elseif ($nilaiAkhir < '40') {
            $Indeks='E';
        }

    ?>
    <div class="row">
        <h1>Indeks Nilai Anda</h1>
        <table class="Datatable" border="1">
            <tr>
                <th>Nama Siswa</th>
                <th>Nama Matkul</th>
                <th>Nilai Tugas</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Indeks</th>
            </tr>
            <tr>
                <!-- Input Berdasarkan Variabel -->
                <?php echo "<td>$namaMahasiswa</td>";?>
                <?php echo "<td>$mataKuliah</td>";?>
                <?php echo "<td>$TugasMahasiswa</td>";?>
                <?php echo "<td>$UTSMahasiswa</td>";?>
                <?php echo "<td>$UASMahasiswa</td>";?>
                <?php echo "<td>$nilaiAkhir</td>";?>
                <?php echo "<td>$Indeks</td>";?>
            </tr> 
        </table>
    </div>
</body>
</html>