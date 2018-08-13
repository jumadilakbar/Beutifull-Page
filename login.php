<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div class="container">
<div class="row justify-content-md-center">
<?php
session_start();
include 'koneksi.php';
if(isset($_POST['login'])){
  $username = mysql_real_escape_string(htmlentities($_POST['username']));
  $password = mysql_real_escape_string(htmlentities($_POST['password']));
  $sql = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'") or die(mysql_error());
  $data=mysql_fetch_array($sql);
  $cek=mysql_num_rows($sql);
  if($cek>=1){
      $_SESSION['level']=$data['level'];
      $_SESSION['username'] = $username;
      $_SESSION['id_user']=$data['id_user'];
      switch ($data['level']) {

        case 'admin':
          header("location:admin/index.php");
          break;
        case 'dokter':
          header("location:dokter/index.php");
          break;
        case 'analis':
          header("location:analis/index.php");
          break;
        case 'kasir':
          header("location:kasir/index.php");
          break;
        default:
          echo "Eror";
          break;
      }
  }
  else{
    echo '  <script type="text/javascript">
            swal( "Oops" ,  "Username atau Password Salah!" ,  "error" );
            </script>';
    }
}
?>
      <div class="jumbotron">
        <form class="form-horizontal" method="POST" action="" style="margin-top: 0%;">
         <fieldset>
           <legend><b>Sistem Informasi Klinik Rumah Sakit Sadewa Yogyakarta</b></legend>
           <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" aria-describedby="emailHelp" name="username" placeholder="Username">
            </div>
            <div class="form-group">
             <label for="exampleInputEmail1">Password</label>
             <input type="password" class="form-control"  aria-describedby="emailHelp" name="password" placeholder="Password">
           </div>
            <div class="form-group">
                 <button type="reset" class="btn btn-danger">Cancel</button>
                 <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
             </div>
         </fieldset>
        </form>
      </div>
    </div>
</div>
