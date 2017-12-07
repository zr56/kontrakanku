<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>Login</title>
  <link rel="stylesheet" href="assets/login/css/bootstrap.css">

</head>
  <body>
        <div class="container">
          <div class="login-form col-md-4 offset-md-4">
            <h1 class="title">LOGIN</h1>
            <form method="GET">
              <input type="hidden" name="controller" value="Login">
      							<input type="hidden" name="action" value="authentication">
              <div class="form-group">
                <input type="text" class="form-control" required name="username" placeholder="username" value="<?=isset($_GET['username']) ? $_GET['username'] : NULL?>">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" required name="password" placeholder="password" value="<?=isset($_GET['password']) ? $_GET['password'] : NULL?>">
              </div>
                <button class="btn btn-primary btn-block">MASUK</button>
            </form>
            <p>Belum punya akun? Silahkan daftar <a href="?controller=Login&action=registrasi">disini</a></p>
          </div>
        </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="assets/login/js/index.js"></script>
  </body>

  <style media="screen">
  body {
    background-image:url('assets/login/images/back.jpg');
  }
  .login-form{
    width: 30%;
    background-color: white;
    margin-top: 150px;
    box-shadow: 0 1px 5px 1px grey;
    padding-bottom: 10px;
    border-radius: 10px;
  }
  .form-control{
    height: 40px;
    font-size: 14px;
  }
  .title{
    margin-bottom: 20px;
    background-color: #007bbf;
    padding: 10px;
    text-align: center;
    color: white;
    border-radius: 0 0 10px 10px;
  }
  .btn{
    margin-top: 20px;
    border-radius: 5px;
    height: 40px;
    font-size: 14px;
    cursor: pointer;
  }
  p{
    margin-top: 10px;
    text-align: center;
  }
  </style>
</html>
