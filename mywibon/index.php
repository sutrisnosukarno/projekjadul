<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="app/upload_twibon.php">Upload Twibon</a><br><br>

    <?php include('app/twibon_kontroller.php'); ?>

    <?php
        $twibon = new TwibonKontroller();
        $query = $twibon->allTwibon();
        $result = $query->fetch_all(MYSQLI_ASSOC);
    ?>


    <?php foreach($result as $res): ?>

       <a href="app/hapus_twibon.php?id=<?=$res['id_twibon'];?>&img=<?=$res['gambar_twibon'];?>">X</a>
        <a href="app/upload_gambar.php?twibon=<?=$res['id_twibon'];?>">
            <img src="upload/<?=$res['gambar_twibon'];?>" style="width:200px;height:200px; padding:10px;">
        </a>

    <?php endforeach; ?>

</body>
</html>