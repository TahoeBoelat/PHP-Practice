<?php
    echo "<html>";
        echo "<head>";
            echo "<title> tag select </title>";
        echo "</head>";
        echo "<body>";
            echo "<h1>Program Gaji Pegawai</h1>";
            echo "<hr>";

            // Statement ambil data
            $namapegawai=$_POST['namapegawai'];
            $jabatan=$_POST['jabatan'];
            $tahunmasuk=$_POST['tahunmasuk'];

            $lamakerja=2020-$tahunmasuk;

            // Statement olah data
            if($jabatan=='Manajer') {
                $gajipokok=10000000;
            } elseif ($jabatan=='Marketing') {
                $gajipokok=5500000;
            } elseif ($jabatan=='Produksi') {
                $gajipokok=5000000;
            } elseif ($jabatan=='HRD') {
                $gajipokok=4500000;
            } elseif ($jabatan=='OB') {
                $gajipokok=3000000;
            }
            $tunjangan=0.05*$gajipokok*$lamakerja;
            $gajitotal=$gajipokok+$tunjangan;
            echo "<table>";
                echo "<tr><td>Nama Pegawai :$namapegawai</td>";
                echo "<tr><td>Jabatan Pegawai :$jabatan</td>";
                echo "<tr><td>Tahun Masuk :$tahunmasuk</td>";
                echo "<tr><td>Lama Kerja :$lamakerja</td>";
                echo "<tr><td>Gaji Pokok :$gajipokok</td>";
                echo "<tr><td>Tunjangan Pegawai :$tunjangan</td>";
                echo "<tr><td>Gaji Total :$gajitotal</td>";
            echo "</table>";
        echo "</body>";
    echo "</html>";
?>