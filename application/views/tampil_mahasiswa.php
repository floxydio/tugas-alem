<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampil Mahasiswa</title>
</head>
<body>

   <table border="1">
    <tbody>
      <tr>
        <td>No</td>
        <td>Nama Lengkap</td>
        <td>Kelas</td>
        <td>Program Studi</td>
        <td>Email</td>
        <td>Aksi</td>
      </tr>
    </tbody>
    <?php foreach ($results as $res) : ?>
       <tr>
        <td><?php echo $res->id?></td>
        <td><?php echo $res->nama?></td>
        <td><?php echo $res->kelas?></td>
        <td><?php echo $res->prodi?></td>
        <td><?php echo $res->email?></td>
        <td>
        <?php echo anchor('mahasiswa/delete/'.$res->id,'Hapus'); ?>

        </td>
      
      </tr>


    <?php endforeach ?>
   </table>
   
</body>
</html>