<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah Foto</title>
</head>
<body>
    <form action="adminventoryproses.php" method="post" enctype="multipart/form-data">
        <label for="file">Pilih file foto:</label>
        <input type="file" name="file" id="file">
        <input type="submit" value="Unggah Foto" name="submit">
    </form>
</body>
</html>
