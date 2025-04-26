<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 PHP</title>
</head>
<body>
<h2 >Tabel Perkalian 1 - 10</h2>
    <table border="1" style = "border: 2px solid black;">
        <tr>
            <th style="background-color: white; color: black; font-weight: bold; border: 2px solid black; padding: 10px; text-align: left;">Bilangan</th>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<th style='background-color: limegreen; color: black; font-weight: bold; border: 2px solid black; padding: 10px; text-align: left;'>$i</th>";
            }
            ?>
        </tr>

        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th style='background-color: limegreen; color: black; font-weight: bold; border: 2px solid black; padding: 10px; text-align: left;'>$i</th>";
            for ($j = 1; $j <= 10; $j++) {
                $hasil = $i * $j;
                if ($hasil % 2 == 0) {
                    // Genap → warna merah
                    echo "<td style='background-color: red; color: black; font-weight: bold; border: 2px solid black; padding: 10px; text-align: left;'>$hasil</td>";
                } else {
                    // Ganjil → warna kuning
                    echo "<td style='background-color: yellow; color: black; font-weight: bold; border: 2px solid black; padding: 10px; text-align: left;'>$hasil</td>";
                }
            }
            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>