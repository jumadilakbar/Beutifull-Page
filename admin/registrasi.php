
  <ul class="list-group">
  <li class="bg-info text-black list-group-item">
    <span class="tag tag-default tag-pill float-xs-right"> <b> Form Pendaftaran Pasien </b></span>
  </li>
  </ul>
  <hr>

<!-- <br> -->
<div class="row">
  <div class="col-6">
    <form action="add-pasien.php" method="POST">
  <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1">No.RM</label>
      <input type="text" name="No_RM" class="form-control"  placeholder="No.RM">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Tempat Lahir</label>
      <input type="text" name="tempatlahir" class="form-control"  placeholder="tempat lahir">
    </div>

    <div class="form-group">
      <label for="exampleSelect1">Jenis Kelamin</label>
      <select class="form-control" name="jk" id="exampleSelect1">
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Alamat</label>
      <textarea class="form-control" id="exampleTextarea" name="alamat" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </fieldset>

<!-- batas  -->
  </div>
  <div class="col-6">
    <fieldset>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" name="nama" class="form-control"  placeholder="Nama Lengkap">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Lahir / Usia</label>
        <div class="row">
          <div class="col-9">
            <input type="date" name="tanggallahir" class="form-control" id="datepicker">
          </div>
          <div class="col-3">
            <input type="number" name="usia" class="form-control" id="datepicker">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">No Telepon</label>
        <input type="text" name="no_telepon" class="form-control"  placeholder="No Telepon">
      </div>
    </fieldset>
  </form>
  </div>
</div>
