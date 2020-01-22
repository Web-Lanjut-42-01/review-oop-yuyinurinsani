<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BERAT BADAN</title>
</head>
<body>
      <h2>==MENGHITUNG BERAT BADAN IDEAL==</h2>
<form action="yuyibb.php" method="POST">
    <table>
        <tr>
            <td>Nama : </td>
            <td><input type="text" name="nama" required=""></td>
        </tr>
        
        <tr>
            <td>Berat Badan : </td>
            <td><input type="number" name="bb" required=""> kg</td>
        </tr>
        <tr>
            <td>Tinggi Badan : </td>
            <td><input type="number" name="tb" required=""> cm</td>
        </tr>
         <tr>
            <td>Jenis Kelamin : </td>
            <td><input type="radio" name="jk" value="Laki-laki" required=""> Laki-laki</td>
            <td><input type="radio" name="jk" value="Perempuan" required=""> Perempuan</td>
        </tr>
       
    </table>
    <input type="submit" name="submit" value="kirim">
</form>
    <?php 
    
    ?>
</body>
</html>