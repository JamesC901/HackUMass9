<!DOCTYPE html>
<html>
    <head>
        <style>
        header {
            float: left;
        }
        body {
            background: #c1d1d6;
            display: flex;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
    </head>
    <header>
        <a class="btn btn-primary" href=" http://localhost/hackumass2021/DigWallet/login.html" role="button">Log out</a>
        <a class="btn btn-primary" style="margin: 25px;" href=" http://localhost/hackumass2021/DigWallet/profile.html" role="button">Profile</a>
        <a class="btn btn-primary" href="view.php" role="button">Stored</a>
        <a class="btn btn-primary" href="http://localhost/DigWallet/digQR.html" role="button">digQR</a>
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
    </body>
</html>


