<!-- <ul class="list-group">
<li class="bg-info text-black list-group-item"> -->
  <span class="tag tag-default tag-pill float-xs-right"> <b>  </b></span>
  <h3>Data Pemeriksaan Pasien</h3>
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
            <th scope="col">'.$data_identitas['usia'].'</th>
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
$show1=mysql_query("SELECT *FROM periksa WHERE no_rm='$No_RM'");
$data1=mysql_fetch_array($show1);
  // $a =  $data1['jenis_periksa'];
  $pisah = explode(",",$data1['jenis_periksa']);
  $totalI = 0;
  $totalH = 0;
  $totalK = 0;
  $totalM = 0;

  foreach ($pisah as  $value) {
    if ($value=='Hematologi') {
?>
        <ul class="list-group">
        <li class="bg-info text-black list-group-item">
          <span class="tag tag-default tag-pill float-xs-right"></span>
          HASIL PEMERIKSAAN HEMATOLOGI
         </li>
        </ul>
        <br>
        <table class="table table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>KETERANGAN</th>
            <th>Hasil</th>
            <th>Harga</th>

          </tr>
        </thead>

        <tbody id="myTable">
          <?php
          include 'koneksi.php';
          // $no_rm = $_GET['id_periksa'];
          $ceksql=mysql_query("SELECT * FROM hematologi");
          $cekisi=mysql_fetch_array($ceksql);
          if($cekisi['no_rm']!=$No_RM){
            echo '<tr>
              <td colspan="3">Belum di lakukan Pemeriksaan</td>
            </tr>';
          }else{
          $sql=mysql_query("SELECT * FROM hematologi WHERE no_rm='$No_RM' ");
          $isi=mysql_fetch_array($sql);
          $data = explode("-",$isi['Hasil']);
          $DH = explode("-",$isi['bayar']);

          if ($data[0]!=0) {
            echo '<tr>
              <td>Leukosit</td>
              <td>'.$data[0].' µL</td>
              <td>'.$DH[0].'</td>
            </tr>';
          }
          if ($data[1]!=0) {
            echo '<tr>
              <td>Eritrosit</td>
              <td>'.$data[1].' (x10<sup>6</sup>/μL)</td>
              <td>'.$DH[1].'</td>
            </tr>';
          }
          if ($data[2]!=0) {
            echo '<tr>
              <td>Hemoglobin</td>
              <td>'.$data[2].' g/dL</td>
              <td>'.$DH[2].'</td>
            </tr>';
          }
          if ($data[3]!=0) {
            echo '<tr>
              <td>Hematokrit</td>
              <td>'.$data[3].' %</td>
              <td>'.$DH[3].'</td>
            </tr>';
          }
          if ($data[4]!=0) {
            echo '<tr>
              <td>Nilai MCV</td>
              <td>'.$data[4].' fL</td>
              <td>'.$DH[4].'</td>
            </tr>';
          }
          if ($data[5]!=0) {
            echo '<tr>
              <td>Nilai MCH</td>
              <td>'.$data[5].' pg</td>
              <td>'.$DH[5].'</td>
            </tr>';
          }
          if ($data[6]!=0) {
            echo '<tr>
              <td>Nilai MCHC</td>
              <td>'.$data[6].' %</td>
              <td>'.$DH[6].'</td>
            </tr>';
          }
          if ($data[7]!=0) {
            echo '<tr>
              <td>Jenis LeukositBasofil</td>
              <td>'.$data[7].' %</td>
              <td>'.$DH[7].'</td>
            </tr>';
          }
          if ($data[8]!=0) {
            echo '<tr>
              <td>Eosinofil</td>
              <td>'.$data[8].' %</td>
              <td>'.$DH[8].'</td>
            </tr>';
          }
          if ($data[9]!=0) {
            echo '<tr>
              <td> N. Batang</td>
              <td>'.$data[9].' %</td>
              <td>'.$DH[9].'</td>
            </tr>';
          }
          if ($data[10]!=0) {
            echo '<tr>
              <td> N. Segment</td>
              <td>'.$data[10].' %</td>
              <td>'.$DH[10].'</td>
            </tr>';
          }
          if ($data[11]!=0) {
            echo '<tr>
              <td>Limfosit</td>
              <td>'.$data[11].' %</td>
              <td>'.$DH[11].'</td>
            </tr>';
          }
          if ($data[12]!=0) {
            echo '<tr>
              <td>Monosit</td>
              <td>'.$data[12].' %</td>
              <td>'.$DH[12].'</td>
            </tr>';
          }
          foreach ($DH as  $value) {
            $totalH = $totalH + $value;
          }
        }
           ?>
        <tr>
          <td colspan="2"> <b>Jumlah</b> </td>
          <td><b>Rp. <?php echo $totalH;?></b></td>
        </tr>
        </tbody>
        </table>

  <?php
}
    else if ($value=='Kimia Klinik') {
      ?>
              <ul class="list-group">
              <li class="bg-info text-black list-group-item">
                <span class="tag tag-default tag-pill float-xs-right"></span>
                HASIL PEMERIKSAAN KIMIA
               </li>
              </ul>
              <br>
              <table class="table table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>KETERANGAN</th>
                  <th>Hasil</th>
                  <th>Harga</th>

                </tr>
              </thead>

              <tbody id="myTable">
                <?php

                $ceksql1=mysql_query("SELECT * FROM kimia");
                $cekisi1=mysql_fetch_array($ceksql1);
                if($cekisi1['no_rm']!=$No_RM){
                  echo '<tr>
                    <td colspan="3">Belum di lakukan Pemeriksaan</td>
                  </tr>';
                }else{
                $sql2=mysql_query("SELECT * FROM kimia WHERE no_rm='$No_RM' ");
                $isi2=mysql_fetch_array($sql2);
                $data2 = explode("-",$isi2['Hasil']);
                $DH2 = explode("-",$isi2['bayar']);

                if ($data2[0]!=0) {
                  echo '<tr>
                    <td>Kolesterol Total </td>
                    <td>'.$data2[0].' mg/dL</td>
                    <td>'.$DH2[0].'</td>
                  </tr>';
                }
                if ($data2[1]!=0) {
                  echo '<tr>
                    <td>Asam Urat</td>
                    <td>'.$data2[1].' mg/dL</td>
                    <td>'.$DH2[1].'</td>
                  </tr>';
                }
                if ($data2[2]!=0) {
                  echo '<tr>
                    <td>Trigliserida</td>
                    <td>'.$data2[2].' mg/dL</td>
                    <td>'.$DH2[2].'</td>
                  </tr>';
                }
                if ($data2[3]!=0) {
                  echo '<tr>
                    <td>HDL</td>
                    <td>'.$data2[3].' mg/dL</td>
                    <td>'.$DH2[3].'</td>
                  </tr>';
                }
                if ($data2[4]!=0) {
                  echo '<tr>
                    <td>LDL</td>
                    <td>'.$data2[4].' mg/dL</td>
                    <td>'.$DH2[4].'</td>
                  </tr>';
                }
                if ($data2[5]!=0) {
                  echo '<tr>
                    <td>GulaDarah
     2 jam PP
     </td>
                    <td>'.$data2[5].' mg/dL</td>
                    <td>'.$DH2[5].'</td>
                  </tr>';
                }
                if ($data2[6]!=0) {
                  echo '<tr>
                    <td>SGOT</td>
                    <td>'.$data2[6].' u/L</td>
                    <td>'.$DH2[6].'</td>
                  </tr>';
                }
                if ($data2[7]!=0) {
                  echo '<tr>
                    <td>SGPT</td>
                    <td>'.$data2[7].' u/L</td>
                    <td>'.$DH2[7].'</td>
                  </tr>';
                }
                if ($data2[8]!=0) {
                  echo '<tr>
                    <td> Warna Urine</td>
                    <td>'.$data2[8].'</td>
                    <td>'.$DH2[8].'</td>
                  </tr>';
                }
                if ($data2[9]!=0) {
                  echo '<tr>
                    <td>Kekeruhan Urine</td>
                    <td>'.$data2[9].'</td>
                    <td>'.$DH2[9].'</td>
                  </tr>';
                }
                if ($data2[10]!=0) {
                  echo '<tr>
                    <td>BJ Urine</td>
                    <td>'.$data2[10].'</td>
                    <td>'.$DH2[10].'</td>
                  </tr>';
                }
                if ($data2[11]!=0) {
                  echo '<tr>
                    <td>pH Urine</td>
                    <td>'.$data2[11].'</td>
                    <td>'.$DH2[11].'</td>
                  </tr>';
                }
                if ($data2[12]!=0) {
                  echo '<tr>
                    <td> Protein Urine</td>
                    <td>'.$data2[12].'</td>
                    <td>'.$DH2[12].'</td>
                  </tr>';
                }
                if ($data2[13]!=0) {
                  echo '<tr>
                    <td>  Glukosa Urine</td>
                    <td>'.$data2[13].' mg/24 jam</td>
                    <td>'.$DH2[13].'</td>
                  </tr>';
                }
                if ($data2[14]!=0) {
                  echo '<tr>
                    <td>Urobilinogen</td>
                    <td>'.$data2[14].' mg/24 jam</td>
                    <td>'.$DH2[14].'</td>
                  </tr>';
                }

                if ($data2[15]!=0) {
                  echo '<tr>
                    <td>Sedimen Urine</td>
                    <td>'.$data2[15].' Sel / Lapang padang</td>
                    <td>'.$DH2[15].'</td>
                  </tr>';
                }
                foreach ($DH2 as  $value2) {
                  $totalK = $totalK + $value2;
                }
              }
                 ?>
              <tr>
                <td colspan="2"> <b>Jumlah</b> </td>
                <td><b>Rp. <?php echo $totalK;?></b></td>
              </tr>
              </tbody>
              </table>

        <?php
  }
  else if ($value=='Mikrobiologi') {
    ?>
            <ul class="list-group">
            <li class="bg-info text-black list-group-item">
              <span class="tag tag-default tag-pill float-xs-right"></span>
              HASIL PEMERIKSAAN Mikrobiologi
             </li>
            </ul>
            <br>
            <table class="table table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>KETERANGAN</th>
                <th>Hasil</th>
                <th>Harga</th>

              </tr>
            </thead>

            <tbody id="myTable">
              <?php
              // include 'koneksi.php';
              // $no_rm = $_GET['id_periksa'];

              $ceksql2=mysql_query("SELECT * FROM mikrobiologi");
              $cekisi2=mysql_fetch_array($ceksql2);
              if($cekisi2['no_rm']!=$No_RM){
                echo '<tr>
                  <td colspan="3">Belum di lakukan Pemeriksaan</td>
                </tr>';
              }else{
              $sql3=mysql_query("SELECT * FROM mikrobiologi WHERE no_rm='$No_RM' ");
              $isi3=mysql_fetch_array($sql3);
              $data3 = explode("-",$isi3['Hasil']);
              $DH3 = explode("-",$isi3['bayar']);

              if ($data3[0]!=0) {
                echo '<tr>
                  <td>Bakteri Tahan Asam</td>
                  <td>'.$data3[0].' BTA/ 100 lapang pandang</td>
                  <td>'.$DH3[0].'</td>
                </tr>';
              }
              if ($data3[1]!=0) {
                echo '<tr>
                  <td>Infeksi Saluran Kemih</td>
                  <td>'.$data3[1].' CFU/mL</td>
                  <td>'.$DH3[1].'</td>
                </tr>';
              }

              foreach ($DH3 as  $value3) {
                $totalM = $totalM + $value3;
              }
            }
               ?>
            <tr>
              <td colspan="2"> <b>Jumlah</b> </td>
              <td><b>Rp. <?php echo $totalM;?></b></td>
            </tr>
            </tbody>
            </table>

      <?php
    }
    else if ($value=='Imunologi') {
      ?>
              <ul class="list-group">
              <li class="bg-info text-black list-group-item">
                <span class="tag tag-default tag-pill float-xs-right"></span>
                HASIL PEMERIKSAAN IMUNOLOGI
               </li>
              </ul>
              <br>
              <table class="table table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>KETERANGAN</th>
                  <th>Hasil</th>
                  <th>Harga</th>

                </tr>
              </thead>

              <tbody id="myTable">
                <?php
                include 'koneksi.php';
                // $no_rm = $_GET['id_periksa'];

                $ceksql3=mysql_query("SELECT * FROM imunologi");
                $cekisi3=mysql_fetch_array($ceksql3);
                if($cekisi3['no_rm']!=$No_RM){
                  echo '<tr>
                    <td colspan="3">Belum di lakukan Pemeriksaan</td>
                  </tr>';
                }else{
                $sql4=mysql_query("SELECT * FROM imunologi WHERE no_rm='$No_RM' ");
                $isi4=mysql_fetch_array($sql4);
                $data4 = explode("-",$isi4['Hasil']);
                $DH4 = explode("-",$isi4['bayar']);

                if ($data4[0]!='0') {
                  echo '<tr>
                    <td>Typhi H Antigen</td>
                    <td>'.$data4[0].'</td>
                    <td>'.$DH4[0].'</td>
                  </tr>';
                }
                if ($data4[1]!='0') {
                  echo '<tr>
                    <td>Typhi O Antigen</td>
                    <td>'.$data4[1].'</td>
                    <td>'.$DH4[1].'</td>
                  </tr>';
                }
                if ($data4[2]!='0') {
                  echo '<tr>
                    <td>Paratyphi A-O Antigen</td>
                    <td>'.$data4[2].'</td>
                    <td>'.$DH4[2].'</td>
                  </tr>';
                }
                if ($data4[3]!='0') {
                  echo '<tr>
                    <td>Paratyphi B-O Antigen</td>
                    <td>'.$data4[3].'</td>
                    <td>'.$DH4[3].'</td>
                  </tr>';
                }
                if ($data4[4]!='0') {
                  echo '<tr>
                    <td>Tes Kehamilan</td>
                    <td>'.$data4[4].'</td>
                    <td>'.$DH4[4].'</td>
                  </tr>';
                }
                if ($data4[5]!='0') {
                  echo '<tr>
                    <td>LGolongan Darah</td>
                    <td>'.$data4[5].'</td>
                    <td>'.$DH4[5].'</td>
                  </tr>';
                }
                if ($data4[6]!='0') {
                  echo '<tr>
                    <td>HBsAg</td>
                    <td>'.$data4[6].'</td>
                    <td>'.$DH4[6].'</td>
                  </tr>';
                }
                if ($data4[7]!='0') {
                  echo '<tr>
                    <td>Dengue Fever Ig M</td>
                    <td>'.$data4[7].'</td>
                    <td>'.$DH4[7].'</td>
                  </tr>';
                }
                if ($data4[8]!='0') {
                  echo '<tr>
                    <td>Dengue Fever Ig G</td>
                    <td>'.$data4[8].'</td>
                    <td>'.$DH4[8].'</td>
                  </tr>';
                }
                if ($data4[9]!='0') {
                  echo '<tr>
                    <td>Anti HIV</td>
                    <td>'.$data4[9].'</td>
                    <td>'.$DH4[9].'</td>
                  </tr>';
                }
                if ($data4[10]!='0') {
                  echo '<tr>
                    <td>Toksoplasma Ig G</td>
                    <td>'.$data4[10].'</td>
                    <td>'.$DH4[10].'</td>
                  </tr>';
                }
                if ($data4[11]!='0') {
                  echo '<tr>
                    <td>Toksoplasma Ig M</td>
                    <td>'.$data4[11].'</td>
                    <td>'.$DH4[11].'</td>
                  </tr>';
                }
                if ($data4[12]!='0') {
                  echo '<tr>
                    <td>Rubella Ig G</td>
                    <td>'.$data4[12].'</td>
                    <td>'.$DH4[12].'</td>
                  </tr>';
                }
                if ($data4[13]!='0') {
                  echo '<tr>
                    <td>Rubella Ig M</td>
                    <td>'.$data4[13].'</td>
                    <td>'.$DH4[13].'</td>
                  </tr>';
                }
                if ($data4[14]!='0') {
                  echo '<tr>
                    <td>CMV IgG</td>
                    <td>'.$data4[14].'</td>
                    <td>'.$DH4[14].'</td>
                  </tr>';
                }
                if ($data4[15]!='0') {
                  echo '<tr>
                    <td>CMV IgM</td>
                    <td>'.$data4[15].'</td>
                    <td>'.$DH4[15].'</td>
                  </tr>';
                }

                foreach ($DH4 as  $valueI) {
                  $totalI = $totalI + $valueI;
                }
              }
                 ?>
              <tr>
                <td colspan="2"> <b>Jumlah</b> </td>
                <td><b>Rp. <?php echo $totalI;?></b></td>
              </tr>
              </tbody>
              </table>

        <?php

  }

}
 ?>
 <ul class="list-group">
 <li class="bg-info text-black list-group-item">
   <span class="tag tag-default tag-pill float-xs-right"></span>
   <h3> TOTAL KESELURUHAN = Rp.<?php
     $total_all = $totalH+$totalK+$totalM+$totalI;
   echo $total_all; ?></h3>
  </li>
 </ul>
 <br>
