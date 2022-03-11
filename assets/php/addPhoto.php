<?php 
    include "db.php";

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    $sql = 'SELECT * FROM photos WHERE name = "'.basename( $_FILES["fileToUpload"]["name"]).'"';
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) == 0 && $uploadOk == 1){
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        $conn->query(
            'INSERT INTO photos (name) VALUES ("'.basename( $_FILES["fileToUpload"]["name"]).'" )'
        );
        header("Location: http://localhost/zamecnictvi-tolar/fotogalerie.php");
    } else {
        echo "Někde stala chyba, soubor nebyl nahrán.";
    }




    
?>
