<?php
    $server = "localhost";
    $user = "root";
    $pass = "" ;
    $db = "db_041" ;
    $koneksi = mysqli_connect($server,$user,$pass,$db);

    $query = "SELECT * FROM tbl_chendy ";
    $hasil = mysqli_query($koneksi,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
    <h1>DATA KU</h1>
    <button><a href="form.php" style="text-decoration:none; background-color:clay;"> TAMBAH DATA </a></button> <br>
    <table align="center" border="1">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>email</th>
            <th>Alamat</th>
            <th colspan="2">EDIT</th>
        </tr>
        <?php
		   while($baris=mysqli_fetch_assoc($hasil)) {
        ?>
        <tr>
            <td><?php echo $baris['id_chendy']?></td>
            <td><?php echo $baris['nama_chendy']?></td>
            <td><?php echo $baris['email_chendy']?></td>
            <td><?php echo $baris['alamat_chendy']?></td>
            <td>
            <a href="update.php?id=<?php echo $baris["id_chendy"]?>">UPDATE</a></button>
            <button>
                <a href="delete.php?id=<?php echo $baris["id_chendy"] ?>" 
				onclick="return confirm('Apakah anda yakin akan menghapusdata ini?')" role="button">Delete</a>
            </button>
            </td>
        </tr>

        <?php }?>

    </table>
</body>
</html>