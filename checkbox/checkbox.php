<?php
    error_reporting(0);
    echo "<html>";
        echo "<head>";
            echo "<title> tag checkbox </title>";
        echo "</head>";
        echo "<body>";
            echo "<h1>Warteg Bahari</h1>";
            // Statement Pemilihan
            $nasigoreng=$_POST['nasigoreng'];
            $esjeruk=$_POST['esjeruk'];
            $eskelapa=$_POST['eskelapa'];
            $soto=$_POST['soto'];
            // Statement Harga
            if($nasigoreng) {
                $hnasgor=12500;
                echo "<p>Nasi Goreng</p> $hnasgor";
            } elseif ($esjeruk) {
                $hesjeruk=5000;
                echo "<p>Es Jeruk</p> $hesjeruk";
            } elseif ($eskelapa) {
                $heskelapa=9000;
                echo "<p>Es Kelapa</p> $heskelapa";
            } elseif ($soto) {
                $hsoto=12000;
                echo "<p>Soto</p> $hsoto";
            }
        echo "</body>";
    echo "</html>";
?>