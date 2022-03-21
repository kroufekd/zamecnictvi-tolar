<?php
    include "db.php";

    $sql = 'DELETE FROM photos WHERE id_photo = "'.$_GET["q"].'"';
    $result = $conn->query($sql);
    header("Location: http://zamecnictvitolar.cz/fotogalerie.php");
?>