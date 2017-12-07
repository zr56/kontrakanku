<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>registrasi</title>
  </head>
  <body>
    <div class="container">
      <div class="login-form col-md-4 offset-md-4">
        <h2 class="title">REGISTRASI</h2>
        <form role="form" enctype="multipart/form-data" method="GET">
          <input type="hidden" name="controller" value="login">
    			<input type="hidden" name="action" value="tambahuser">
          <div class="form-group">
            <input type="text" class="form-control" required name="nama" placeholder="nama lengkap">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" required name="username" placeholder="username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" required name="password" placeholder="password">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" required name="alamat" placeholder="alamat">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" required name="kontak" placeholder="no. hp">
          </div>
          <div class="form-group">
            <select class="form-control" id="sel1" name="jenis_kelamin">
              <option>Laki - Laki</option>
              <option>Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="sel1" name="level">
              <option>1</option>
              <option>2</option>
            </select>
            <label>* 1 (pencari kontrakan) & 2 (pemilik kontrakan) </label>
          </div>
            <button type="submit" class="btn btn-primary btn-block">DAFTAR</button>
        </form>
      </div>
    </div>
  </body>

  <style media="screen">
  body{
    background-image:url('assets/login/images/back.jpg');
  }
    label{
      color: red;
      font-size: 10px;
    }
    .login-form{
      margin: 0 auto;
      width: 35%;
      background-color: white;
      margin-top: 80px;
      box-shadow: 0 1px 5px 1px grey;
      padding-bottom: 20px;
      border-radius: 10px;
    }
    .form-control{
      height: 40px;
      font-size: 14px;
    }
    .btn{
      width: 100%;
      margin-top: 20px;
      border-radius: 5px;
      height: 40px;
      font-size: 14px;
    }
  </style>
</html>
