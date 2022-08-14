<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Mahasiswa</title>
</head>
<body>
  <h1>Form Input Mahasiswa</h1>
  <form action="<?php echo base_url('index.php/mahasiswa/tambahmahasiswa'); ?>" method="post">
    <table>
      <tr>
        <td>NIM</td>
        <td><input type="text" name="nim" placeholder="NIM"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" placeholder="Nama"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="kelas" placeholder="Kelas"></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td><input type="text" name="prodi" placeholder="Prodi"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email" placeholder="Email"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Tambah"></td>
      </tr>
    </table>
  </form>

  
</body>
</html>