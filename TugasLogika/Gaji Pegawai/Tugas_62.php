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
        $namaPegawai = $_POST['NamaPegawai'];
        $Departemen = $_POST['departemen'];
        $lamaKerja = $_POST['tahun'];
        $tunjanganTransport = $_POST['transport'];
        $tunjanganMakan = $_POST['makan'];
        $tunjanganKesehatan = $_POST['kesehatan'];

        // Logika Gaji Pokok
        if($Departemen =='HRD') {
            $gajipokok=8000000;
        } elseif ($Departemen=='Marketing') {
            $gajipokok=7000000;
        } elseif ($Departemen=='Produksi') {
            $gajipokok=6000000;
        } 

        // Logika Bonus
        if($lamaKerja == '1') {
           $bonus =  500000;
        } elseif ($lamaKerja == '2') {
            $bonus =  1000000;
        } elseif ($lamaKerja == '3') {
            $bonus =  1500000;
        }

        // Logika Tunjangan
        if($tunjanganTransport) {
            $jumlahTunjangan=1000000;;
        } elseif ($tunjanganMakan) {
            $jumlahTunjangan=600000;
        } elseif ($tunjanganKesehatan) {
            $jumlahTunjangan=1500000;
        }

        //total gaji
        $totalgaji = $gajipokok + $bonus + $tunjangan;

    ?>
    <div class="row">
        <h1>Program Gaji Anda</h1>
        <table class="Datatable" border="1">
            <tr>
                <th>Nama Pegawai</th>
                <th>Departemen</th>
                <th>Lama Kerja</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan</th>
                <th>Bonus</th>
                <th>Total Gaji</th>
            </tr>
            <tr>
                <!-- Input Berdasarkan Variabel -->
                <?php echo "<td>$namaPegawai</td>";?>
                <?php echo "<td>$Departemen</td>";?>
                <?php echo "<td>$lamaKerja</td>";?>
                <?php echo "<td>$gajipokok</td>";?>
                <?php echo "<td>$jumlahTunjangan</td>";?>
                <?php echo "<td>$bonus</td>";?>
                <?php echo "<td>$totalgaji</td>";?>
            </tr> 
        </table>
    </div>
</body>
</html>