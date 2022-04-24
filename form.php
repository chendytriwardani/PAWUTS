<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TAMBAHKAN DATA</h1>
    <form action="tambahdata.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="nama_chendy"> nama : </label><br>
                    <input type="text" name="nama_chendy" id="nama_chendy">                
                </td>
            <tr>
                <td>
                    <label for="email_chendy"> email : </label><br>
                    <input type="text" name="email_chendy" id="email_chendy">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="alamat_chendy"> alamat </label><br>
                    <input type="text" name="alamat_chendy" id="alamat_chendy">
                </td>
            </tr>
                <td>
                    <button type="submit" >submit</button>
                </td>
            </tr>      
        </table>
    </form>
    
</body>
</html>