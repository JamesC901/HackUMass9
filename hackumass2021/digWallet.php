<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Digital Business card</title>
        <link rel="stylesheet" type = "text/css" href = "bootstrap-5.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <header>
        <a class="btn btn-primary" href="login.html" role="button">Log out</a>
        <a class="btn btn-primary" style="margin: 25px;" href="profile.html" role="button">Profile</a>
        <a class="btn btn-primary" href="view.php" role="button">Stored</a>

    </header>
    <body>

        <h1 class="centertitle">DigitalCard</h1>
        <div>
            <?php if(isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="my_image">
            <input type="submit" name="submit" value="Upload">
        </form>
<!--             <button id="uploadbtn" class="btn btn-success">Generate QR Code</button>
        </div>
        <div class="wrapper fadeInDown">
            <img id="QRcode" class="fadeIn first"/>
        </div>
    <script src="digGen.js"></script> -->
    </body>
</html>



