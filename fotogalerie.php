<!DOCTYPE html>
<html>

<head>
<?php 
        include "head.php";
    ?>
</head>

<body>
<?php 
        include "header.php";
    ?>
    <main class="page pricing-table-page">
    <section class="clean-block slider dark">
        <div class="block-heading">
            <h2 class="text-info">Fotogalerie</h2>
        </div>
        <div class="container">
            <div class="row flex-box flex-wrap-wrap">
              <?php 
                    $dirname = "assets/img/gallery/";
                    $images = glob($dirname."*.jpg");
                    
                    foreach($images as $image) {
                        echo '<div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1" title="" href="'.$image.'"><img class="img-fluid" src="'.$image.'" /></a></div>';
                    }
                    $dirname1 = "assets/img/gallery/";
                    $images1 = glob($dirname1."*.JPG");
                    
                    foreach($images1 as $image1) {
                        echo '<div class="col-sm-4 flex-box flex-justify-center flex-align-center"><a class="fancybox" rel="gallery1" title="" href="'.$image1.'"><img class="img-fluid" src="'.$image1.'" /></a></div>';
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

</html>