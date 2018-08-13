<ul class="list-group">
<li class="bg-info text-black list-group-item">
  <span class="tag tag-default tag-pill float-xs-right"></span>
<b>  Data Laboratorium Pasien</b>
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
    <th>#aksi</th>
  </tr>
</thead>
<tfoot>
  <tr>
    <th>No.RM</th>
    <th>Nama</th>
    <th>Tanggal Lahir</th>
    <th>No Telepon</th>
    <th>#aksi</th>
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
    echo '<td><a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Detail" href="?rute=detail&No_RM='.$data['no_rm'].'">
    <i class="fa fa-bars" aria-hidden="true"></i></a>
    <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit" href="?rute=edit-pasien&No_RM='.$data['no_rm'].'">
    <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
    <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" href="del.php?No_RM='.$data['no_rm'].'">
    <i class="fa fa-trash" aria-hidden="true"></i></a></tr>';
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
