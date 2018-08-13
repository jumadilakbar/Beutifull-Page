<ul class="list-group">
<li class="bg-info text-black list-group-item">
  <span class="tag tag-default tag-pill float-xs-right"></span>
 <b>Data User</b>
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
<div class="row">
  <div class="col-2">
    <a class="btn btn-success" href="?rute=tambah-user"> + Tambah Data </a>
  </div>
  <div class="col-10">
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
  </div>
</div>

<br>
<table class="table table-bordered" cellspacing="0" width="100%">
<thead>
  <tr>
    <th>No</th>
    <th>Nama Lengkap</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th>#aksi</th>
  </tr>
</thead>
<tfoot>
  <tr>
    <th>No</th>
    <th>Nama Lengkap</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th>#aksi</th>
  </tr>
</tfoot>
<tbody id="myTable">
  <?php
  include 'koneksi.php';
  $no=1;
  $sql=mysql_query("SELECT *FROM user");
  while ($data=mysql_fetch_array($sql)) {
    echo '<tr>';
    echo '<td>'.$no.'</td>';
    echo '<td>'.$data['nama_lengkap'].'</td>';
    echo '<td>'.$data['username'].'</td>';
    echo '<td>'.$data['password'].'</td>';
    echo '<td>'.$data['level'].'</td>';
    echo '<td>
    <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" href="del-user.php?id_user='.$data['id_user'].'">
    <i class="fa fa-trash" aria-hidden="true"></i>Hapus</a></tr>';
    $no++;
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
