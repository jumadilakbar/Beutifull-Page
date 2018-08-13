<span class="tag tag-default tag-pill float-xs-right"> <b>  </b></span>
<h3>Data  Pasien</h3>
<!-- </li>
</ul> -->
<hr>
<?php
include 'koneksi.php';
$No_RM=$_GET['No_RM'];
$identitas = mysql_query("SELECT *FROM pasien WHERE no_rm='$No_RM'");
$data_identitas=mysql_fetch_array($identitas);
echo ' <ul class="list-group">
<li class="bg-info text-black list-group-item">
<center>
<span class="tag tag-default tag-pill float-xs-right"> <b>Biodata Pasien</b></span>
</center>
</li>
</ul> ';
echo '<table class="table table-hover">
      <thead>
        <tr class="table-active">
          <th scope="col">NO. RM  </th>
          <th scope="col">'.$data_identitas['no_rm'].'</th>
          <th scope="col">NAMA LENGKAP</th>
          <th scope="col">'.$data_identitas['nama'].'</th>
        </tr>
        <tr class="table-active">
          <th scope="col">TEMPAT LAHIR</th>
          <th scope="col">'.$data_identitas['tempat_lahir'].'</th>
          <th scope="col">TANGGAL LAHIR</th>
          <th scope="col">'.$data_identitas['tanggal_lahir'].'</th>
        </tr>
        <tr class="table-active">
          <th scope="col">USIA</th>
          <th scope="col">'.$data_identitas['usia'].' tahun</th>
          <th scope="col">JENIS KELAMIN</th>
          <th scope="col">'.$data_identitas['jk'].'</th>
        </tr>
        <tr class="table-active">
          <th scope="col">ALAMAT</th>
          <th scope="col">'.$data_identitas['alamat'].'</th>
          <th scope="col">NO HP</th>
          <th scope="col">'.$data_identitas['no_hp'].'</th>
        </tr>
      </thead>
    </table> ';
    ?>
