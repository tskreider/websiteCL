<!DOCTYPE html>
<html lang="en">
<head>
    <title> Warm Weather Waves - June 15th\</title>
    <meta name="description"
          content="Upload images to the gallery" />
    <meta name="author"
          content="Timothy Kreider" />

    <!--CSS -->
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!---->
    <!--MyCSS-->
    <link href="www.css" type="text/css"
          rel="stylesheet" />
    <!---->
    <!--Fonts-->                                                                               <!--TODO: get new fonts-->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Open+Sans+Condensed:300|Orbitron|Oswald|Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Monoton" rel="stylesheet">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119129323-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-119129323-1');
    </script>


    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="../../favicon/favicon.ico" />


</head>
<body>
    
    <header>
        <!--<img id="wwwfont" src="images/fontArtWWW.png" alt="Warm Weather Waves Color Logo" /> -->

    </header>

    

  <?php
        
    $fileName = $_FILES["fileToUpload"]["tmp_name"];
$target_dir = ("images/" . $fileName);
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
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    echo "</br>";
    $path = "uploads/" . $_FILES['fileToUpload']["name"];
    echo $path;
    
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $path )) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
        
        

        <!--bootstrap javascript-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <footer>
        <img src="../../images/divider.png" class="block center" alt="a pixelated spaceflower" height="100" width="150" />
        <p>Same Time Tomorrow - Est. May 9 2013. Website design by <a href="mailto:@timothkreider13@gmail.com">Timothy Kreider</a></p>
    </footer>

</body>
</html>