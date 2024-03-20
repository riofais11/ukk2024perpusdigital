<?php
include 'layout/header.php';
?>

<div class="container">
  <div class="row" style="margin-top: 1rem;">
    <div class="col">
      <h2>Data Anggota</h2>
    </div>
    <div class="col"></div>
    <table class="table my-3">
      <thead class="table-success">
        <tr>
          <th scope="col">ID User</th>
          <th scope="col">NIS</th>
          <th scope="col">Nama</th>
          <th scope="col">level</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <?php
        include '../koneksi/koneksi.php';

        $data = mysqli_query($koneksi, "SELECT * FROM user");
        while ($d = mysqli_fetch_array($data)) {

        
      ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $d['IDuser'];?></th>
          <td><?php echo $d['nis'];?></td>
          <td><?php echo $d['namalengkap'];?></td>
          <td><?php echo $d['level'];?></td>
          <td>
            <a href="data/detail_anggota.php?iduser=<?php echo $d['IDuser'];?>" class="btn btn-warning text-white">Detail</a>
            <a href="data/edit_anggota.php?iduser=<?php echo $d['IDuser'];?>" class="btn btn-info text-white">Edit</a>
            <a href="data/delete_anggota.php?iduser=<?php echo $d['IDuser'];?>" class="btn btn-danger text-white">Delete</a>
          </td>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
      <?php
          }
      ?>
    </table>
  </div>
</div>

<?php
include 'layout/footer.php';
?>
