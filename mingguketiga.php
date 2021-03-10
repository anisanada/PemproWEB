<?php
    $arr = [
        [
            'nama' => 'nada',
            'nim' => '192410101089',
            'usia' => '19'
        ],
        [
            'nama' => 'haha',
            'nim' => '192410101000',
            'usia' => '21'
        ],
        [
            'nama' => 'hihi',
            'nim' => '192410101001',
            'usia' => '21'
        ]
    ];

    $arr2 = ['nada', '192410101089', '19']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr as $mhs): ?>
                <tr>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['usia'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>