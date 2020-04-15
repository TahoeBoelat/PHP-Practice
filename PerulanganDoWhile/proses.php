<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan Do While</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Inisialisasi Nilai
        $BarangMouse = $_POST['JumlahBarangMouse'];
        $BarangKeyboard = $_POST['JumlahBarangKeyboard'];
        $BarangSpeaker = $_POST['JumlahBarangSpeaker'];
        $BarangPrinter = $_POST['JumlahBarangPrinter'];   
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
                        if(isset($BarangMouse)) {
                            $i = 3;
                            do {
                                $tBarangMouse = $BarangMouse * 50000;
                                echo $tBarangMouse;
                                $i++;
                            } while($i <= $BarangMouse);
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
                        if(isset($BarangKeyboard)) {
                            $i = 2;
                            do {
                                $tBarangKeyboard = $BarangKeyboard * 150000;
                                echo $tBarangKeyboard;
                                $i++;
                            } while ($i <= $BarangKeyboard);
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
                        if(isset($BarangSpeaker)) {
                            $i = 3;
                            do {
                                $tBarangSpeaker = $BarangSpeaker * 300000;
                                echo $tBarangSpeaker;
                                $i++;
                            } while ($i <= $BarangSpeaker);
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
                    if(isset($BarangPrinter)) {
                        $i = 2;
                        do {
                            $tBarangPrinter = $BarangPrinter * 1500000;
                            echo $tBarangPrinter;
                            $i++;
                        } while ($i <= $BarangPrinter);
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td colspan="5">Total Barang</td>
                <td>
                    <?php
                        $totalHargaSemuaBarang = $tBarangMouse + $tBarangKeyboard + $tBarangSpeaker + $tBarangPrinter;
                        echo $totalHargaSemuaBarang;
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>