<?php include('image-upload-script.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Upload Image</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img style="width:60px;" class="card-img-top" src="./files/logo.png" alt="Card image cap">
            <button id="imageGallery" type="button" class="btn btn-outline-success">Image
                Library</button>
        </div>
    </nav>
    <br />
    <div class="card shadow-lg flex-column justify-content-center mx-auto" style="width: 25rem;">
        <img class="card-img-top" src="./files/UploadImage.png" alt="Card image cap">
        <div class="card-body">
            <div>
                <form method="post" enctype="multipart/form-data">
                    <input type="file" class="form-control" id="customFile" name="image_gallery[]" multiple />
                    <br />

                    <div>
                        <input type="submit" class="btn btn-outline-primary" value="Upload" name="submit">
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
    var btn = document.getElementById('imageGallery');
    btn.addEventListener('click', function() {
        document.location.href = 'show-image-gallery.php';
    });
    </script>
</body>

</html>