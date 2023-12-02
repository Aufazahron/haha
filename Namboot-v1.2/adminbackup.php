<?php 
include 'koneksi.php';

if (isset($_GET["id"])) {
	$id = $_GET['id'];

	$query = "DELETE FROM db_inventory WHERE id=$id";
mysqli_query($conn, $query);	
header("Location:adminventory.php");
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="adminventoryproses.php" method="post" enctype="multipart/form-data">
	<h1>Nama</h1><input type="text" name="name_inventory"><br>
	<h1>Foto</h1><input type="file" name="file" id="file"><br>
	<button type="submit" name="submit">Kirim</button>
</form>
<table>
<tr>
	<th>No</th>
	<th>Nama</th>
	<th>Foto</th>
	<th>Setting</th>
</tr>
<?php 
include 'koneksi.php';
$no = 1;
$data = mysqli_query($conn, "SELECT * FROM db_inventory");
while ($datasplit = mysqli_fetch_array($data)) {
?>

<tr>
	<td><?php echo $no++ ?></td>
	<td><?php echo $datasplit['name_inventory'] ?></td>
	<td><img style="width: 150px" src="./Img/Inventory/<?php echo $datasplit['pict_inventory'] ?>"></td>
	<td><a href="edit.php?id=<?php echo $datasplit['id']; ?>">Edit</a><a href="adminventory.php?id=<?php echo $datasplit['id']; ?>">Delete</a></td>
</tr>
<?php 
}
 ?>
 </table>
</body>
</html>