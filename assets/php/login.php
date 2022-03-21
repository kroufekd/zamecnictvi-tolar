<?php 
    session_start();
    include 'db.php';

    //$password_input_hashed = password_hash($_POST["password"], PASSWORD_DEFAULT);


    $sql = 'SELECT * FROM users WHERE email="' . $_POST["email"] . '"';
    $result = $conn -> query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        if(password_verify($_POST["password"], $row["password"])){
            $_SESSION["id_user"] = $row["id_user"];
            header("Location: http://zamecnictvitolar.cz/fotogalerie.php");
        } else {
            header("Location: http://zamecnictvitolar.cz/admin.php?error=badpassword");
        }
    } else{
        header("Location: http://zamecnictvitolar.cz/admin.php?error=bademail");
    }

    


    
    

?>