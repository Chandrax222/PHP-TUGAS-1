<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 1</title>
</head>
<body>
        <?php   
            $daftar_menu = [
                            [
                                "Cireng", "Es Duren", "Es Milo", "Es Teh", "Piscok",
                                "1000", "15000", "20000", "5000", "1000"
                            ] 
                            ];
        ?>

        <h1>DAFTAR MENU</h1>
            <?php foreach($daftar_menu as $menu) : ?>
            <?php $chandra = 1; ?>                
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                </tr>
                <tr>
                    <td>1. </td>
                    <td><?= $menu["0"]; ?></td>
                    <td><?= $menu["5"]; ?></td>
                </tr>
                <tr>
                    <td>2. </td>
                    <td><?= $menu["1"]; ?></td>
                    <td><?= $menu["6"]; ?></td>
                </tr>
                <tr>
                    <td>3. </td>
                    <td><?= $menu["2"]; ?></td>
                    <td><?= $menu["7"]; ?></td>
                </tr>
                <tr>
                    <td>4. </td>
                    <td><?= $menu["3"]; ?></td>
                    <td><?= $menu["8"]; ?></td>
                </tr>
                <tr>
                    <td>5. </td>
                    <td><?= $menu["4"]; ?></td>
                    <td><?= $menu["9"]; ?></td>
                </tr>
            </table>
            <?php $chandra++; ?>
            <?php endforeach; ?>
</body>
</html>