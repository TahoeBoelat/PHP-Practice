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
        // Inisialisasi Nilai
        $BarangMouse = $_POST['JumlahBarangMouse'];
        $BarangKeyboard = $_POST['JumlahBarangKeyboard'];
        $BarangSpeaker = $_POST['JumlahBarangSpeaker'];
        $BarangPrinter = $_POST['JumlahBarangPrinter'];
        
        // Inisialisasi Array
        $hargaBarangM = ['Mouse' => 50000];
        $hargaBarangK = ['Keyboard' => 150000];
        $hargaBarangS = ['Speaker' => 300000];
        $hargaBarangP = ['Printer' => 1500000];

    ?>
    <p class="judul">Total Barang</p>
    <div class="formulir">
        <table class="tabelBeli">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                </tr>
            <tr>
                <td align="center">1</td>
                <td align="center">B001</td>
                <td align="center">Mouse</td>
                <td align="center">50000</td>
                <?php echo "<td>$BarangMouse</td>";?>
                <td>
                    <?php
                        foreach($hargaBarangM as $Mouse => $nilaiBarangM) {
                            $totalHargaMouse = $nilaiBarangM * 3;
                            echo $totalHargaMouse;
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td align="center">2</td>
                <td align="center">B002</td>
                <td align="center">Keyboard</td>
                <td align="center">150000</td>
                <?php echo "<td>$BarangKeyboard</td>";?>
                <td>
                    <?php
                        foreach($hargaBarangK as $Keyboard => $nilaiBarangK) {
                            $totalHargaKeyboard = $nilaiBarangK * 2;
                            echo $totalHargaKeyboard;
                        }
                    ?>
                </td>
            </tr> 
            <tr>
                <td align="center">3</td>
                <td align="center">B003</td>
                <td align="center">Speaker</td>
                <td align="center">300000</td>
                <?php echo "<td>$BarangSpeaker</td>";?>
                <td>
                    <?php
                        foreach($hargaBarangS as $Speaker => $nilaiBarangS) {
                        $totalHargaSpeaker = $nilaiBarangS * 3;
                        echo $totalHargaSpeaker;
                        }
                    ?>
                </td>
            </tr> 
            <tr>
                <td align="center">4</td>
                <td align="center">B004</td>
                <td align="center">Printer</td>
                <td align="center">1500000</td>
                <?php echo "<td>$BarangPrinter</td>";?>
                <td>
                    <?php
                        foreach($hargaBarangP as $Printer => $nilaiBarangP) {
                        $totalHargaPrinter = $nilaiBarangP * 2;
                        echo $totalHargaPrinter;
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="5">Total Barang</td>
                <td>
                    <?php
                        $totalSemuaBarang = $totalHargaMouse + $totalHargaKeyboard + $totalHargaSpeaker +$totalHargaPrinter;
                        echo $totalSemuaBarang;
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>