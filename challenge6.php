<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Hewan</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .even {
            background-color: #f2f2f2;
        }
        .odd {
            background-color: #d1e7dd;
        }
        img {
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center;">Galeri Hewan</h1>
    
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Jumlah Kaki</th>
            <th>Cari di Google</th>
        </tr>

        <?php
        // Data hewan menggunakan associative array
        $data = [
            ["nama" => "Ayam", "kaki" => 2],
            ["nama" => "Angsa", "kaki" => 2],
            ["nama" => "Bebek", "kaki" => 2],
            ["nama" => "Domba", "kaki" => 4],
            ["nama" => "Kalkun", "kaki" => 2],
            ["nama" => "Kambing", "kaki" => 4],
            ["nama" => "Kelinci", "kaki" => 4],
            ["nama" => "Kerbau", "kaki" => 4],
            ["nama" => "Kuda", "kaki" => 4],
            ["nama" => "Sapi", "kaki" => 4]
        ];

        // Urutkan berdasarkan nama hewan
        usort($data, function ($a, $b) {
            return strcmp($a["nama"], $b["nama"]);
        });

        // Menampilkan data dalam tabel
        $i = 1;
        foreach ($data as $hewan) {
            $class = ($i % 2 == 0) ? "even" : "odd"; // Cek baris ganjil/genap
            echo "<tr class='$class'>
                    <td>{$i}</td>
                    <td>{$hewan['nama']}</td>
                    <td><img src='img/" . strtolower($hewan['nama']) . ".jpg' width='50' height='50'></td>
                    <td>{$hewan['kaki']}</td>
                    <td><a href='https://www.google.com/search?q=" . urlencode($hewan['nama']) . "' target='_blank'>Cari</a></td>
                  </tr>";
            $i++;
        }
        ?>
    </table>

</body>
</html>
