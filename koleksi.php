<h1 class="mt-4">koleksi pribadi</h1>
<div class="card">
    <div class="card-body">
<div class="row">
   <div class="table-responsive col-md-12">
   <a href="?page=koleksi_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Koleksi</a>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <tr>
        <th>No</th>
        <th>User</th>
        <th>Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Aksi</th>
      </tr>
      <?php
      $i=1;
      $query = mysqli_query($koneksi, "SELECT*FROM koleksipribadi LEFT JOIN user on user.id_user=koleksipribadi.id_user LEFT JOIN buku on buku.id_buku= koleksipribadi.id_buku");
        while($data = mysqli_fetch_array($query)){
          ?>
          <tr>
             <td><?php echo $i++; ?></td>
             <td><?php echo $data['nama']; ?></td>
             <td><?php echo $data['judul']; ?></td>
             <td><?php echo $data['penulis']; ?></td>
             <td><?php echo $data['penerbit']; ?></td>
             <td>
                <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=koleksi_hapus&&id=<?php echo $data['id_koleksi']; ?>" class="btn btn-danger">hapus</a>
             </td>
          </tr>
          <?php
        }
        ?>
    </table>
   </div>
</div>
    </div>
</div>