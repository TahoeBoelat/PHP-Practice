<html>
    <head>
        <title>Save Data Barang</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table>
        <?php
            // Koneksi Ke Database
            $dbname = "dataBarang";
            $host = "localhost";
            $username = "alfi";
            $password = "Alfian257";
            $koneksi = mysqli_connect($host, $username, $password, $dbname);
            // Akhir Koneksi Ke Database
            // Posting Data Ke Database
            $kodeBuku = $_POST['kodeBuku'];
            $namaBuku = $_POST['namaBuku'];
            $penulisBuku = $_POST['penulisBuku'];
            $hargaBuku = $_POST['hargaBuku'];
            $tahunBuku = $_POST['tahunBuku'];
            $penerbitBuku = $_POST['penerbitBuku'];

            $sql = "insert into TabelBarang values ('$kodeBuku', '$namaBuku', '$penulisBuku', '$hargaBuku', '$tahunBuku', '$penerbitBuku')";
            $hasil = mysqli_query($koneksi, $sql);
            // Akhir Posting Data Ke Database

            // Tampilkan di Website
            echo "<tr><td>Kode Buku</tr></td> $kodeBuku";
            echo "<tr><td>Nama Buku</tr></td> $namaBuku";
            echo "<tr><td>Penulis Buku</tr></td> $penulisBuku";
            echo "<tr><td>Harga Buku</tr></td> $hargaBuku";
            echo "<tr><td>Tahun Buku</tr></td> $tahunBuku";
            echo "<tr><td>Penerbit Buku</tr></td> $penerbitBuku";
            ?>
        </table>
        <p>Data Barang Telah Disimpan</p>
            <!-- Akhir Tampilan di Website -->
    </body>
</html>