<ul class="list-group">
<li class="bg-info text-black list-group-item">
  <span class="tag tag-default tag-pill float-xs-right"></span>
  Data Pasien Poli Umum
</li>
</ul>
<?php if(isset($_GET['stat'])){
  if($_GET['stat']=='berhasil'){
    echo '<script type="text/javascript">
            swal("Good job!", "Data Berhasil ditambahakan", "success");
          </script>';
  }
  else if($_GET['stat']=='hapus'){
    echo '<script type="text/javascript">
            swal("Good job!", "Data Berhasil dihapus", "success");
          </script>';
  }
  else if($_GET['stat']=='edit'){
    echo '<script type="text/javascript">
            swal("Good job!", "Data Berhasil diubah", "success");
          </script>';
  }

} ?>
<br>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>
<table class="table table-bordered" cellspacing="0" width="100%">
<thead>
  <tr>
    <th>No.RM</th>
    <th>Nama</th>
    <th>Tanggal Lahir</th>
    <th>No Telepon</th>
    <th>Hasil Pemeriksaan</th>
  </tr>
</thead>
<tfoot>
  <tr>
    <th>No.RM</th>
    <th>Nama</th>
    <th>Tanggal Lahir</th>
    <th>No Telepon</th>
    <th>Hasil Pemeriksaan</th>
  </tr>
</tfoot>
<tbody id="myTable">
  <?php
  include 'koneksi.php';
  $sql=mysql_query("SELECT *FROM pasien");
  while ($data=mysql_fetch_array($sql)) {
    echo '<tr>';
    echo '<td>'.$data['no_rm'].'</td>';
    echo '<td>'.$data['nama'].'</td>';
    echo '<td>'.$data['tanggal_lahir'].'</td>';
    echo '<td>'.$data['no_hp'].'</td>';
    echo '<td>';
    $test1= mysql_query("SELECT *FROM hematologi");
    $query1=mysql_fetch_array($test1);
    $test2= mysql_query("SELECT *FROM imunologi");
    $query2=mysql_fetch_array($test2);
    $test3= mysql_query("SELECT *FROM kimia");
    $query3=mysql_fetch_array($test3);
    $test4= mysql_query("SELECT *FROM mikrobiologi");
    $query4=mysql_fetch_array($test4);
    // if($query1['no_rm']==$data['no_rm'] || $query2['no_rm']==$data['no_rm'] || $query3['no_rm']==$data['no_rm'] || $query4['no_rm']==$data['no_rm'] ){
      echo '  <a class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="Pemeriksaan Hematologi" href="?rute=detail-rekap&No_RM='.$data['no_rm'].'">
        <i class="fa fa-bars" aria-hidden="true"></i> Detail</a>';
    // }
    // else{
    //   echo '<p class="text-danger">Belum Di Lakukan Pemeriksaan</p>';
    // }

    echo '</td></tr>';
}
   ?>
</tbody>
</table>
<script type="text/javascript">
$(document).ready(function(){
$("#myInput").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $("#myTable tr").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});
});

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
