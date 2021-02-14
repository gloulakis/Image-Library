<?php require('image-gallery-script.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Upload Image</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img style="width:60px;" class="card-img-top" src="./files/logo.png" alt="Card image cap">
            <button id="uploadImage" type="button" class="btn btn-outline-success">Upload
                Image</button>
        </div>
    </nav>
    <br />
    <br>

    <div class="row">

        <?php

  if(!empty($fetchImage))
  {
    $sn=1;
    foreach ($fetchImage as $img) {
        
?>

        <div class="column">
            <img src="uploads/
<?php
echo $img['image_name']; 
?>
" style="width:100%" onclick="openModal(); currentSlide(
<?php
echo $sn; 
?>
)" class="hover-shadow cursor">
        </div>
        <?php

 $sn++;}
  }else{
    echo "No Image is saved in database";
  }
?>

    </div>
    <div id="galleryModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>

        <div class="modal-content">

            <?php
  if(!empty($fetchImage))
  {
    $sn=1;
    foreach ($fetchImage as $img) {
?>
            <div class="gallerySlides">
                <img src="uploads/
<?php
echo $img['image_name']; 
?>
" style="width:100%">
            </div>
            <?php
 $sn++;}
  }else{
    echo "";
  }
?>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
                <p id="caption"></p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/gallery-script.js"></script>
    <script>
    var btn = document.getElementById('uploadImage');
    btn.addEventListener('click', function() {
        document.location.href = 'image-upload-form.php';
    });
    </script>
</body>

</html>