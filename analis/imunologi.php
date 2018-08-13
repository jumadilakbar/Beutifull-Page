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
 <form action="add-imunologi.php" method="POST">
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
  <h4>Pemeriksaan Imunologi</h4>
  <hr>
  <div class="row">
    <div class="col-6">
    <fieldset>
      <div class="form-group">
       <label for="exampleSelect1"><input  type="checkbox" name="a" value="a">Typhi H Antigen</label>
       <select class="form-control" name="THA" id="exampleSelect1">
         <option value="Reaktif">Reaktif</option>
         <option value="Non Reaktif">Non Reaktif</option>
       </select>
     </div>
     <div class="form-group">
        <label for="exampleSelect1"><input  type="checkbox" name="b" value="b">Typhi O Antigen</label>
        <select class="form-control" name="TOA" id="exampleSelect1">
          <option value="Reaktif">Reaktif</option>
          <option value="Non Reaktif">Non Reaktif</option>
        </select>
      </div>
      <div class="form-group">
       <label for="exampleSelect1"><input  type="checkbox" name="c" value="c">Paratyphi A-O Antigen</label>
       <select class="form-control" name="PAOA" id="exampleSelect1">
         <option value="Reaktif">Reaktif</option>
         <option value="Non Reaktif">Non Reaktif</option>
       </select>
     </div>
     <div class="form-group">
      <label for="exampleSelect1"><input  type="checkbox" name="d" value="d">Paratyphi B-O Antigen</label>
      <select class="form-control" name="PBOA" id="exampleSelect1">
        <option value="Reaktif">Reaktif</option>
        <option value="Non Reaktif">Non Reaktif</option>
      </select>
    </div>
      <div class="form-group">
       <label for="exampleSelect1"><input  type="checkbox" name="e" value="e">Tes Kehamilan</label>
       <select class="form-control" name="tes_hamil" id="exampleSelect1">
         <option value="Positif">Positif</option>
         <option value="Negatif">Negatif</option>
       </select>
     </div>
     <div class="form-group">
      <label for="exampleSelect1"><input  type="checkbox" name="f" value="f">Golongan Darah</label>
      <select class="form-control" name="GolDar" id="exampleSelect1">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="O">O</option>
        <option value="AB">AB</option>
      </select>
    </div>
    <div class="form-group">
     <label for="exampleSelect1"><input  type="checkbox" name="g" value="g">HBsAg</label>
     <select class="form-control" name="HBsAg" id="exampleSelect1">
       <option value="Positif">Positif</option>
       <option value="Negatif">Negatif</option>
     </select>
   </div>
   <div class="form-group">
      <label for="exampleSelect1"><input  type="checkbox" name="h" value="h">Dengue Fever Ig M</label>
      <select class="form-control" name="DFIM" id="exampleSelect1">
        <option value="Positif">Positif</option>
        <option value="Negatif">Negatif</option>
      </select>
    </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  <!-- batas  -->
    </div>
    <div class="col-6">
      <fieldset>
        <div class="form-group">
         <label for="exampleSelect1"><input  type="checkbox" name="i" value="i">Dengue Fever Ig G</label>
         <select class="form-control" name="DFIG" id="exampleSelect1">
           <option value="Positif">Positif</option>
           <option value="Negatif">Negatif</option>
         </select>
       </div>
       <div class="form-group">
        <label for="exampleSelect1"><input  type="checkbox" name="j" value="j">Anti HIV</label>
        <select class="form-control" name="HIV" id="exampleSelect1">
          <option value="Reaktif">Reaktif</option>
          <option value="Non Reaktif">Non Reaktif</option>
        </select>
      </div>
      <div class="form-group">
       <label for="exampleSelect1"><input  type="checkbox" name="k" value="k">Toksoplasma Ig G</label>
       <select class="form-control" name="TIG" id="exampleSelect1">
         <option value="Positif">Positif</option>
         <option value="Equivocal">Equivocal</option>
         <option value="Negatif">Negatif</option>
       </select>
      </div>
      <div class="form-group">
       <label for="exampleSelect1"><input  type="checkbox" name="l" value="l">Toksoplasma Ig M</label>
       <select class="form-control" name="TIM" id="exampleSelect1">
         <option value="Positif">Positif</option>
         <option value="Grayzone">Grayzone</option>
         <option value="Negatif">Negatif</option>
       </select>
      </div>
      <div class="form-group">
       <label for="exampleSelect1"><input  type="checkbox" name="m" value="m">Rubella Ig G</label>
       <select class="form-control" name="RIG" id="exampleSelect1">
         <option value="Positif">Positif</option>
         <option value="Equivocal">Equivocal</option>
         <option value="Negatif">Negatif</option>
       </select>
      </div>
      <div class="form-group">
       <label for="exampleSelect1"><input  type="checkbox" name="n" value="n">Rubella Ig M</label>
       <select class="form-control" name="RIM" id="exampleSelect1">
         <option value="Positif">Positif</option>
         <option value="Grayzone">Grayzone</option>
         <option value="Negatif">Negatif</option>
       </select>
      </div>
      <div class="form-group">
       <label for="exampleSelect1"><input  type="checkbox" name="o" value="o">CMV IgG</label>
       <select class="form-control" name="CMV_IgG" id="exampleSelect1">
         <option value="Positif">Positif</option>
         <option value="Equivocal">Equivocal</option>
         <option value="Negatif">Negatif</option>
       </select>
      </div>
      <div class="form-group">
       <label for="exampleSelect1"><input  type="checkbox" name="p" value="p">CMV IgM</label>
       <select class="form-control" name="CMV_IgM" id="exampleSelect1">
         <option value="Positif">Positif</option>
         <option value="Equivocal">Equivocal</option>
         <option value="Negatif">Negatif</option>
       </select>
      </div>
      </fieldset>
    </div>
  </div>
</form>
