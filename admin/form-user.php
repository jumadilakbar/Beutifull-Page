
  <ul class="list-group">
  <li class="bg-info text-black list-group-item">
    <span class="tag tag-default tag-pill float-xs-right"> <b> Form Tambah User </b></span>
  </li>
  </ul>
  <hr>

<!-- <br> -->
<div class="row">
  <div class="col-6">
    <form action="add-user.php" method="POST">
  <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Lengkap</label>
      <input type="text" name="nama" class="form-control"  placeholder="Nama Lengkap">
    </div>
    <div class="form-group">
      <label for="exampleSelect1">Level User</label>
      <select class="form-control" name="level" id="exampleSelect1">
        <option value="analis">Analis</option>
        <option value="dokter">Dokter</option>
        <option value="kasir">Kasir</option>

      </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>

<!-- batas  -->
  </div>
  <div class="col-6">
    <fieldset>
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" name="username" class="form-control"  placeholder="Username">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" name="password" class="form-control"  placeholder="Username">
      </div>
    </fieldset>
  </form>
  </div>
</div>
