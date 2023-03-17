<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Registrasi</title>
  </head>
  <body>

<div class="container">
  <h2>Form registrasi</h2>
  <?php echo @$message; ?>
  <form class="user" method="post" action="<?= base_url ('auth/registrasi');?>">
    <div class="form-group">
      <label>Nama Lengkap:</label>
      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
    </div>
    <div class="form-group">
      <label>Username:</label>
      <input type="email" class="form-control" name="username" placeholder="Masukkan Username">
    </div>

	<div class="form-group">
      <label>Email:</label>
      <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
    </div>

	<div class="form-group">
      <label>Password:</label>
      <input type="text" class="form-control" name="password" placeholder="Masukkan Password">
    </div>

    <div class="form-group">
      <label>Gambar:</label>
      <input type="text" class="form-control" name="gambar" placeholder="Pilih Gambar">
    </div>

    <button type="submit" name="register" class="btn btn-success" value="Register">Register</button>
  </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>