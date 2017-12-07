<!DOCTYPE html>
<html lang="en">
<head>
</head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Kontrakanku</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">kontrakan</a></li>
            <li><a href="#contact">user</a></li>
            <li><a href="#profil">profil</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">k <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                  <li><a href="#">a</a></li>
                  <li><a href="#">a</a></li>
                  <li><a href="#">a</a></li>
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="isi">
        <h1>List Kontrakan</h1>
        <div class="widget-content">
          <table class="table table-condensed"><br>
            <a href="?controller=PanelAdminSupplier&action=klikTambah" role="button" class="btn btn-success">Tambah Data</a>
            <thead>
              <tr>
                <th width="20px">id</th>
                <th>pemilik</th>
                <th width="100px">luas (m2)</th>
                <th>alamat pemilik</th>
                <th>no. hp</th>
                <th>alamat kontrakan</th>
                <th>harga</th>
                <th>kamar</th>
                <th>dapur</th>
                <th>info umum</th>
              </tr>
            </thead>
            <tbody>
              <td>aku</td>
              <td>ya</td>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </body>
  <style media="screen">
    .container .isi{
      margin-top: 70px;
    }
    .btn{
      margin-bottom: 10px;
    }
  </style>
</html>
