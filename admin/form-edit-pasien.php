
  <ul class="list-group">
  <li class="bg-info text-black list-group-item">
    <span class="tag tag-default tag-pill float-xs-right"> <b> Form Edit Pasien </b></span>

    <!-- <a href="?rute=form-pasien" class="btn btn-info">pasien</a> -->
  </li>
  </ul>
  <hr>
<?php
include 'koneksi.php';
$No_RM=$_GET['No_RM'];
$show=mysql_query("SELECT *FROM pasien WHERE no_rm='$No_RM'");
$data=mysql_fetch_array($show);
?>
<!-- <br> -->
<div class="row">
  <div class="col-6">
    <form action="update-pasien.php" method="POST">
  <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1">No.RM</label>
      <input type="text" disabled class="form-control" value="<?php echo $No_RM;?>"  placeholder="No.RM">
      <input type="hidden" name="No_RM" class="form-control" value="<?php echo $No_RM;?>"  placeholder="No.RM">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Tempat Lahir</label>
      <input type="text" name="tempatlahir" class="form-control" value="<?php echo $data['tempat_lahir']; ?>"  placeholder="tempat lahir">
    </div>

    <div class="form-group">
      <label for="exampleSelect1">Jenis Kelamin</label>
      <select class="form-control" name="jk" id="exampleSelect1">
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Alamat</label>
      <textarea class="form-control" id="exampleTextarea" name="alamat" rows="3"> <?php echo $data['alamat']; ?> </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </fieldset>

<!-- batas  -->
  </div>
  <div class="col-6">
    <fieldset>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>"  placeholder="Nama Lengkap">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Lahir / Usia</label>
        <div class="row">
          <div class="col-9">
            <input type="date" name="tanggallahir" class="form-control" value="<?php echo $data['tanggal_lahir']; ?>" >
          </div>
          <div class="col-3">
            <input type="number" name="usia" class="form-control" value="<?php echo $data['usia']; ?>" >
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">No Telepon</label>
        <input type="text" name="no_telepon" class="form-control" value="<?php echo $data['no_hp']; ?>"  placeholder="No Telepon">
      </div>
    </fieldset>
  </form>
  </div>
</div>
