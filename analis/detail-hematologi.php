<ul class="list-group">
<li class="bg-info text-black list-group-item">
  <span class="tag tag-default tag-pill float-xs-right"></span>
  Data Pasien Poli Umum
</li>
</ul>

<br>
<table class="table table-bordered" cellspacing="0" width="100%">
<thead>
  <tr>
    <th>Keterangn</th>
    <th>Hasil</th>
  </tr>
</thead>

<tbody id="myTable">
  <?php
  include 'koneksi.php';
  $id_periksa = $_GET['id_periksa'];
  $sql=mysql_query("SELECT * FROM hematologi WHERE id_periksa='$id_periksa' ");
  $data=mysql_fetch_array($sql);
   ?>
   <tr>
     <td>No RM</td>
     <td> <?php echo $data['no_rm']; ?></td>
   </tr>
   <tr>
     <td>Tekanan Darah</td>
     <td> <?php echo $data['tekanan_darah']; ?></td>
   </tr>
   <tr>
     <td>Berat Badan</td>
     <td> <?php echo $data['berat_badan']; ?></td>
   </tr><tr>
     <td>Rujuk</td>
     <td> <?php echo $data['rujuk']; ?></td>
   </tr><tr>
     <td>Catatan</td>
     <td> <?php echo $data['catatan']; ?></td>
   </tr><tr>
     <td>Diagnosa</td>
     <td> <?php echo $data['diagnosa']; ?></td>
   </tr>
   <tr>
     <td>Keluhan</td>
     <td> <?php echo $data['keluhan']; ?></td>
   </tr>
   <tr>
     <td>Jenis Periksa</td>
     <td> <?php echo $data['jenis_periksa']; ?></td>
   </tr>
</tbody>
</table>
