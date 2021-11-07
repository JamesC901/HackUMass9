
<!DOCTYPE html>
<html>
<head>
	<title> Business E-card </title>
    <style>
        body {
            background: #c1d1d6;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <h1> Upload an image of your business card here! </h1>
    <?php if(isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
	    <input type="file" name="my_image">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
