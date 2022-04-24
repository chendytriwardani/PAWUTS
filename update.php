<?php
include "koneksi.php";

$id  = $_GET['id'] ;

$query="SELECT * FROM tbl_chendy WHERE id_chendy=".$id;

$hasil=mysqli_query($koneksi,$query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>UPDATE DATA</h1>
    <?php while($data=mysqli_fetch_array($hasil)){?>
    <form action="editdata.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="nama_chendy"> nama : </label>
                    <input type="text" name="nama_chendy" value="<?php echo $data['nama_chendy'] ?>" required>
                </td>
                <td>
                    <label for="email_chendy"> email : </label>
                    <input type="text" name="email_chendy" value="<?php echo $data['email_chendy'] ?>" required>
                </td>
                <td>
                    <label for="alamat_chendy"> email : </label>
                    <input type="text" name="alamat_chendy" value="<?php echo $data['alamat_chendy'] ?>" required>
                </td>
                <td>

                    <input type="hidden" name="id_chendy" value="<?php echo $data['id_chendy'] ?>">
                    <button type="submit" >submit</button>
                </td>
            </tr>
        </table>
    </form>
    <?php } ?>
    
</body>
</html>