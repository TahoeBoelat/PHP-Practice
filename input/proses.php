<?php
    echo "<html>";
        echo "<head>";
            echo "<title>Tes1</title>";
        echo "</head>";
        echo "<body>";
            echo "<h1>Program Penjualan</h1>";
            echo "<hr>";
            echo "<table>";
            $namabarang=$_POST['namabarang'];
            $harga=$_POST['harga'];
            $jumlah=$_POST['jumlah'];

            $total=$harga*$jumlah;
                    echo "<tr><td> Nama Barang <td> $namabarang";
                    echo "<tr><td> Harga Barang <td> $harga";
                    echo "<tr><td> Jumlah Barang <td> $jumlah";
                    echo "<tr><td> Total Barang <td> $total";
            echo "</table>";
        echo "</body>";
    echo "</html>";
?>