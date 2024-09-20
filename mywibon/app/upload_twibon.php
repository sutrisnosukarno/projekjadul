<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include('twibon_kontroller.php'); ?>

<h4>UPLOAD GAMBAR TRANSPARAN 1:1</h4>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="twibon">
    <input type="submit" name="kirim" value="KIRIM">
</form>
    
<?php

    if(isset($_POST['kirim'])){
        $twibon_name = $_FILES['twibon']['name'];
        $twibon_name_ok = mt_rand(0000, 9999) . "-" . preg_replace('/[()\s]/', '', $twibon_name);
        $twibon_file = $_FILES['twibon']['tmp_name'];

        $twibon = new TwibonKontroller();
        $isinsert = $twibon->uploadTwibon($twibon_name_ok);

        if($isinsert){
            move_uploaded_file($twibon_file, '../upload/' . $twibon_name_ok);
            header("Location:../index.php");
        }
    }

?>


</body>
</html>