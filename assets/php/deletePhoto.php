<?php
    include "db.php";

    $sql = 'DELETE FROM photos WHERE id_photo = "'.$_GET["q"].'"';
    $result = $conn->query($sql);
    header("Location: http://localhost/zamecnictvi-tolar/fotogalerie.php");
?>