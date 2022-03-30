<!DOCTYPE html>
<html>

<head>
<?php 
        include "head.php";
        include "assets/php/db.php";
        session_start();
    ?>
</head>

<body>
<?php 
        include "header.php";
    ?>
    <main class="page pricing-table-page">
    <section class="clean-block slider dark">
        <div class="block-heading">
            <h2 class="text-info">Fotogalerie <i class="fas fa-image" ></i><?php 
                    
                    if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])) {
                        echo ' <span id="photo-add-btn" style="cursor:pointer"><i class="fas fa-plus" ></i></span>';      
                    }
                ?></h2>
        </div>
        <div class="container">
            <div class="row add-photo-form">
                <div class="col-md-4">
                <form action="assets/php/addPhoto.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="photo">Přidejte fotografii</label>
                    <input class="form-control" type="file" name="fileToUpload">
                    </div>
                    
                    <input type="submit" value="Odeslat">
                </form>
                <br>
                </div>
            </div>
            
            
            <div class="row flex-box flex-wrap-wrap">
              <?php 
              /*
                    $sql = 'SELECT name, id_photo FROM photos ORDER BY upload_date desc';
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])) {
                                echo '<div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1" title="" href="assets/php/uploads/'.$row["name"].'"><img class="img-fluid" src="assets/php/uploads/'.$row["name"].'" /></a><a href="assets/php/deletePhoto.php?q='.$row["id_photo"].'" style="color:inherit"><i class="fa fa-trash" aria-hidden="true"></i></a></div>';    
                            }else{
                                echo '<div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1" title="" href="assets/php/uploads/'.$row["name"].'"><img class="img-fluid" src="assets/php/uploads/'.$row["name"].'" /></a></div>';
                            }
                        }
                    }
                */
                $dirname = "assets/img/gallery/";
                $images = glob($dirname."*.jpg");

                foreach($images as $image) {
                    echo '<div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1" title="" href="'.$image.'"><img class="img-fluid" src="'.$image.'"/></a></div>';
                }    
                    
            ?>
            </div>
        </div>
    </section>
        
    </main>
    <?php 
        include "footer.php";
    ?>
</body>
<script>
    $(".add-photo-form").hide();
    $("#photo-add-btn").on("click", () => {
        $(".add-photo-form").toggle();

    });

</script>

</html>