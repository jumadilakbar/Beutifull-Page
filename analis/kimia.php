
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
 <form action="add-kimia.php" method="POST">
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
  <h4>Pemeriksaan Klinik Kimia</h4>
  <hr>
  <div class="row">
    <div class="col-6">
    <fieldset>
      <div class="form-group">
        <label for="exampleInputEmail1">Kolesterol Total</label>
        <input type="text" name="KT" class="form-control"  placeholder="Kolesterol Total">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Asam Urat</label>
        <input type="text" name="asam_urat" class="form-control"  placeholder="Asam Urat">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Trigliserida</label>
        <input type="text" name="trigliserida" class="form-control"  placeholder="Trigliserida">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">HDL</label>
        <input type="text" name="hdl" class="form-control"  placeholder="HDL">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">LDL</label>
        <input type="text" name="ldl" class="form-control"  placeholder="LDL">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Gula Darah PP</label>
        <input type="text" name="GDPP" class="form-control"  placeholder="Gula Darah PP">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">SGOT</label>
        <input type="text" name="sgot" class="form-control" placeholder="SGOT">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">SGPT</label>
        <input type="text" name="sgpt" class="form-control" placeholder="SGPT">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  <!-- batas  -->
    </div>
    <div class="col-6">
      <fieldset>

        <div class="form-group">
          <label for="exampleInputEmail1">Warna Urine</label>
          <input type="text" name="WU" class="form-control" placeholder="N.Batang">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Kekeruhan Urine</label>
          <input type="text" name="KU" class="form-control" placeholder="N.Segmen">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">BJ Urine</label>
          <input type="text" name="BU" class="form-control" placeholder="Limfosit">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">pH Urine</label>
          <input type="text" name="pHU" class="form-control" placeholder="Monosit">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Protein Urine</label>
          <input type="text" name="PU" class="form-control" placeholder="Monosit">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Glukosa Urine</label>
          <input type="text" name="GU" class="form-control" placeholder="Monosit">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Urobilinogen</label>
          <input type="text" name="urobilinogen" class="form-control" placeholder="Monosit">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Sedimen Urine</label>
          <input type="text" name="sedimen_urine" class="form-control" placeholder="Monosit">
        </div>
      </fieldset>
    </div>
  </div>
</form>
