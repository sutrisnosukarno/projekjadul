<?php include('twibon_kontroller.php'); ?>

<?php
    $id = $_REQUEST['id'];
    $gambar = $_REQUEST['img'];

    $twibon = new TwibonKontroller();
    $query = $twibon->hapusTwibon($id);

    if($query){
        unlink('../upload/' . $gambar);
        header("Location:../index.php");
    }
?>