<?php 
    require_once 'No 2.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Praktikum 5</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Praktikum 5</h2>
        <div class="row">
            <div class="mx-auto text-center border p-3 mt-2">
                <h4 class="">Info Gaji Manajer</h4>
                <?= 'Programmer ' . $programmer->nama . ' mendapatkan Gaji Rp. ' . ($programmer->infoGaji()) . ' serta Bonus Rp. ' . ($programmer->infoBonus()); ?>
            </div>
        </div>
    </div>
</body>

</html>