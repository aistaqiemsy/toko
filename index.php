<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko AQ</title>
</head>
<body>
    <script src="jsValidasi.js"></script>
    
    <img src="gambar/gambarku.JPG" width="100" height="100d">
    <form action="#" method="get">
        <table>
            <tr>
                <td>Item</td>
                <td>Harga ( Per Kg )</td>
                <td>Jumlah Kg</td>
            </tr>
            <tr>
                <td>Jeruk</td>
                <td><input type="number" name="harga1" id="inputHarga"></td>
                <td><input type="number" name="kgHarga1"></td>
            <tr>
                <td>Anggur</td>
                <td><input type="number" name="harga2"></td>
                <td><input type="number" name="kgHarga2"></td>               
            </tr>
            <tr>
                <td>Mangga</td>
                <td><input type="number" name="harga3"></td>
                <td><input type="number" name="kgHarga3"></td>               
            </tr> 
            <tr>
                <td></td>
                <td><input type="submit" value="Hitung" name="hitung"></td>
                <td></td>
            </tr>           
        </table>
        
    </form>
    <?php
            if(isset($_GET['hitung'])) {
            $harga1 = $_GET['harga1'];
            $harga2 = $_GET['harga2'];
            $harga3 = $_GET['harga3'];

            $total = $harga1 + $harga2 + $harga3;
            $diskon = ($total/100)*20;
            if ($total>100000) {
                $hargaAkhir = $total - $diskon;
                echo "Selamat! Anda dapat diskon $diskon, harga menjadi $hargaAkhir";
            } else {
                echo "Harga : ".$total;
            }
            }










        // if(isset($_GET['hitung'])) {
        //     $harga1 = $_GET['harga1'];
        //     $harga2 = $_GET['harga2'];
        //     $harga3 = $_GET['harga3'];

        //     $total = $harga1+$harga2+$harga3;

        //     if($total>100000) {
        //         $diskon = ($total/100)*20;
        //         $hargaAkhir = $total - $diskon;
        //         echo "Selamat! Diskon 20% ( Rp. $diskon ), harga menjadi Rp. ".$hargaAkhir;
        //     } else {
        //         echo "Harga Rp. ".$total;
        //     }
        // }
    ?>
</body>
</html>