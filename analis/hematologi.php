
  <ul class="list-group">
  <li class="bg-info text-black list-group-item">
    <span class="tag tag-default tag-pill float-xs-right"> <b> Form Pemeriksaan Pasien </b></span>
  </li>
  </ul>
  <hr>
<?php
include 'koneksi.php';
$id_periksa=$_GET['id_periksa'];
$show=mysql_query("SELECT *FROM periksa WHERE id_periksa='$id_periksa'");
$data=mysql_fetch_array($show);
// $id_user = $_SESSION['id_user'];
$dokter = $data['id_user'];
$no_rm = $data['no_rm'];
// echo $dokter;
$show1=mysql_query("SELECT *FROM user WHERE id_user='$dokter'");
$data1=mysql_fetch_array($show1);
 ?>
 <form action="add-hematologi.php" method="POST">
  <div class="row">
    <div class="col-6">
    <fieldset>
      <div class="form-group">
        <label for="exampleInputEmail1">No Lab </label>
        <input type="hidden" name="id_periksa" value="<?php echo $id_periksa; ?>">
        <input type="hidden" name="no_rm" value="<?php echo $no_rm; ?>">
        <input type="number" name="no_lab" class="form-control"  placeholder="No Lab">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Pengirim</label>
        <input type="text" disabled name="" class="form-control" value=" <?php echo $data1['nama_lengkap']; ?> " placeholder="Berat Badan">
        <input type="hidden" name="dokter" value=" <?php echo $data1['nama_lengkap'];?> "  class="form-control"  placeholder="Berat Badan">
      </div>
    </fieldset>
    </div>
    <div class="col-6">
      <fieldset>
        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Periksa </label>
          <input type="date" name="tgl_periksa" class="form-control">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ATLM </label>
          <input type="text" name="atlm" class="form-control" placeholder="ATLM">
        </div>
      </fieldset>
    </div>
  </div>
  <h4>Pemeriksaan Hematologi</h4>
  <hr>
  <div class="row">
    <div class="col-6">
    <fieldset>
      <div class="form-group">
        <label for="exampleInputEmail1">Leukosit</label>
        <input type="text" name="leukosit" class="form-control"  placeholder="leukosit">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Eritrosit</label>
        <input type="text" name="eritrosit" class="form-control"  placeholder="eritrosit">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Hemoglobin</label>
        <input type="text" name="hemoglobin" class="form-control"  placeholder="hemoglobin">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Hematokrit</label>
        <input type="text" name="hematokrit" class="form-control"  placeholder="Hematokrit">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nilai MCV</label>
        <input type="text" name="mcv" class="form-control"  placeholder="MCV">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nilai MCH</label>
        <input type="text" name="mch" class="form-control"  placeholder="MCH">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nilai MCHC</label>
        <input type="text" name="mchc" class="form-control"  placeholder="MCHC">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  <!-- batas  -->
    </div>
    <div class="col-6">
      <fieldset>
        <div class="form-group">
          <label for="exampleInputEmail1">Leukosit Basofil</label>
          <input type="text" name="leuokosit_B" class="form-control" placeholder="Leukosit Basofil">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Eosinofil</label>
          <input type="text" name="eosinofil" class="form-control" placeholder="Eosinofil">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">N.Batang</label>
          <input type="text" name="batang" class="form-control" placeholder="N.Batang">
        </div><div class="form-group">
          <label for="exampleInputEmail1">N.Segmen</label>
          <input type="text" name="Segmen" class="form-control" placeholder="N.Segmen">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Limfosit</label>
          <input type="text" name="limfosit" class="form-control" placeholder="Limfosit">
        </div><div class="form-group">
          <label for="exampleInputEmail1">Monosit</label>
          <input type="text" name="monosit" class="form-control" placeholder="Monosit">
        </div>
      </fieldset>
    </div>
  </div>
</form>
