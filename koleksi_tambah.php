<h1 class="mt-4">Tambah koleksi buku</h1>
<div class="card">
  <div class="card-body">
  <div class="row">
  <div class="col-md-12">
    <form method="post">
      <?php
        if(isset($_POST['submit'])){
           $id_koleksi =$_POST['id_koleksi'];
           $id_buku =$_POST['id_buku'];
           $id_user =$_SESSION['user']['id_user'];
           $query= mysqli_query($koneksi, "INSERT INTO koleksipribadi(id_koleksi,id_user,id_buku) values('$id_koleksi','$id_user','$id_buku')");

           if($query){
            echo '<script>alert("Tambah data berhasil.");</script>';
            echo '<script> location.href="index.php?page=koleksi"</script>';
           }else{
            echo '<script>alert("Tambah data gagal.");</script>';
           }
        }
        ?>
       <div class="row mb-3">
            <div class="col-md-2">Buku</div>
            <div class="col-md-8">
                <select name="id_buku" class="form-control">
                <?php
                    $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                    while($buku = mysqli_fetch_array($buk)){
                        ?>
                        <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                        <?php
                    }
                    ?> 
                </select>
            </div>
        </div>
        <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <button type="submit" class="btn btn-primary" name="submit"value="submit">Simpan</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="?page=koleksi" class="btn btn-danger">Kembali</a>
        </div>
    </form>
  </div>
  </div>
  </div>
</div>