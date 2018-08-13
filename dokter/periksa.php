
  <ul class="list-group">
  <li class="bg-info text-black list-group-item">
    <span class="tag tag-default tag-pill float-xs-right"> <b> Form Pemeriksaan Pasien </b></span>
  </li>
  </ul>
  <hr>
<?php
include 'koneksi.php';
$No_RM=$_GET['No_RM'];
$show=mysql_query("SELECT *FROM pasien WHERE no_rm='$No_RM'");
$data=mysql_fetch_array($show);
$id_user = $_SESSION['id_user'];
 ?>
<div class="row">
  <div class="col-6">
    <form action="add-periksa.php" method="POST">
  <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1">Tekanan Darah </label>
      <input type="hidden" name="no_rm" value="<?php echo $No_RM; ?>">
      <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
      <input type="number" name="tekanandrh" class="form-control"  placeholder="Tekanan Darah">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Berat Badan</label>
      <input type="number" name="berat_badan" class="form-control"  placeholder="Berat Badan">
    </div>

    <div class="form-group">
      <label for="exampleSelect1">Di Rujuk Ke Leb </label>
      <select class="form-control" name="rujuk" id="exampleSelect1">
        <option value="Ya">Ya</option>
        <option value="Tidak">Tidak</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Catatan</label>
      <textarea class="form-control" id="exampleTextarea" name="catatan" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

  </fieldset>

<!-- batas  -->
  </div>
  <div class="col-6">
    <fieldset>
      <div class="form-group">
        <label for="exampleTextarea">Diagnosa</label>
        <textarea class="form-control" id="exampleTextarea" name="diagnosa" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleTextarea">Keluhan</label>
        <textarea class="form-control" id="exampleTextarea" name="keluhan" rows="3"></textarea>
      </div>
      <div class="form-check">
        <b>Jenis Periksa</b><br>
        <label class="form-check-label">
          <input type="checkbox" name="JP[]" value="Hematologi" class="form-check-input">Hematologi<br>
          <input type="checkbox" name="JP[]" value="Kimia Klinik" class="form-check-input"> Kimia Klinik<br>
          <input type="checkbox" name="JP[]" value="Mikrobiologi" class="form-check-input">Mikrobiologi<br>
          <input type="checkbox" name="JP[]" value="Imunologi" class="form-check-input">Imunologi<br>
        </label>
      </div>
    </fieldset>
  </form>
  </div>
</div>
