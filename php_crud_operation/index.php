<?php

include "connection.php";

try{
    
    $db = new PDO("mysql:host=localhost;dbname=latihan","root","",[PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION]);
    
}catch(Exception $error){
    echo $error->getMessage();
}

$siswa=$db->query("select * from siswa");

$data_siswa=$siswa->fetchAll();

// /
// foreach ($data_siswa as $key) {
//     // echo $key['nama']." ".$key['pekerjaan']."<br>";
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Buku cerita</title>
  </head>
  <body>
<div class="d-flex">
  <h2 class="d-flex flex-column mx-auto"> ~ Nama Buku Yang Ingin Anda Tambahkan ~ </h2>
</div>

  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Buku</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
   <?php  foreach ($data_siswa as $key) :  ?>
   <tr>
      <td><?php echo $key['nama']; ?></td>
      <td><?php echo $key['pekerjaan']; ?></td>
      <td><a href="delete.php?id_siswa=<?php echo $key['id_siswa']; ?>">hapus</a> | 
      <a href="edit.php?id_siswa=<?php echo $key['id_siswa']; ?>">edit</a></td>
   </tr>
   <?php endforeach; ?>
  </tbody>
</table>

<div class="container">
    <div class="row">
        <div class="col-4">
        <form action="input.php" method="POST">
       <div class="form-group">
             <label for="exampleInputEmail1">Buku</label>
             <input type="text" name="Nama" class="form-control">
      </div>
    
      <div class="form-group">
             <label for="exampleInputEmail1">Penerbit</label>
             <input type="text" name="Pekerjaan" class="form-control">
      </div>
            <button type="submit"  class="btn btn-primary">Simpan</button>
       </form>
        </div>
        <div class="col-4">
           <img class="ml-5" src="img/book.png" alt="fto" width="200px">
        </div>
        <div class="col-4">
           <p style="font-family:'Times New Roman'">Dengan membaca buku dapat memberikan andil untuk meningkatkan kualitas otak kita dalam proses mengingat, berbagai macam hal yang telah kita baca. Setiap memori dapat membantu untuk menempa jalur otak serta memperkuatnya. Selain itu juga dengan melakukan kegiatan membaca dapat menstabilkan suasana hati seseorang.</p>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="d-flex bg-dark">
  <h2 class="d-flex flex-column mx-auto">~ Terima Kasih Atas Kerjasamanya ~</h2>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>