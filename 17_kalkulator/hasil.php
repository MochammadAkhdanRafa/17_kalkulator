<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link a href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <form>
        <h1>Hasil kalkulasi</h1>
        <?php

            $angka1 =$_GET['angka1'];
            $angka2 =$_GET['angka2'];
            $operator =$_GET['operator'];

            if ($angka1 === null || $angka2 === null || $angka1 === '' || $angka2 === '') {
                echo "<p style='color: red;'>Error: input harus diisi!!!</p>";
                echo '<a href="index.php">Kembali</a>';
                exit;
            }
            else if ($operator =="+") {
                $hasil = $angka1 + $angka2;
                echo $angka1 . $operator . $angka2 . '=' . $hasil;
            } else if ($operator =="-") {
                $hasil = $angka1 - $angka2;
                echo $angka1 . $operator . $angka2 . '=' . $hasil;
            } else if ($operator ==":") {
                if ($angka2 == 0) {
                echo "Tidak bisa membagi dengan 0!!";
                echo '<a href="index.php">Kembali</a>';
                exit;
                }

                $hasil = $angka1 / $angka2;
                echo $angka1 . $operator . $angka2 . '=' . $hasil;
            } else if ($operator =="x") {
                $hasil = $angka1 * $angka2;
                echo $angka1 . $operator . $angka2 . '=' . $hasil;
            }
        ?>

        <a href="index.php">Kembali</a>


    </form>
</body>
</html>