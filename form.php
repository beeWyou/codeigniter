<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- My Css -->
    <link rel="stylesheet" href="asset/style/style.css">
    <title>Form Pendaftaran Siswa Baru</title>
  </head>
  <body>
    <h1> PENDAFTARAN SISWA BARU </h1>
    <div class="container">
      <!-- Judul -->
      <h2 class="alert alert-primary text-center mt-2">Form Pendaftaran Siswa Baru SMKN 20 Jakarta</h2>

      <!-- Nama Lengkap & Nama Panggilan -->
      <form class="form-group">
        <div class="row">
          <div class="col-md-6">
            <label for="NamaLengkap">Nama Lengkap :</label>
            <input type="text" class="form-control" id="NamaLengkap" placeholder="Masukkan Nama Lengkap Anda">
          </div>
          <div class="col-md-6">
            <label for="NamaPanggil">Nama Panggilan :</label>
            <input type="text" class="form-control" id="NamaPanggil" placeholder="Masukkan Nama Panggilan Anda">
          </div>
        </div>

        <!-- Tempat Lahir & Tanggal Lahir -->
        <div class="row mt-2">
          <div class="col-md-6">
            <label for="TempatLahir">Tempat Lahir :</label>
            <input type="text" class="form-control" id="TempatLahir" placeholder="Masukkan Tempat Lahir Anda">
          </div>
          <div class="col-md-6">
            <label for="TanggalLahir">Tanggal Lahir :</label>
            <input type="date" class="form-control" id="TanggalLahir">
          </div>
        </div>

        <!-- Email -->
        <div class="form-group mt-2">
          <label for="email">Email :</label>
          <input type="email" class="form-control" id="email" placeholder="Masukkan Alamat Email Anda">
        </div>

        <!-- Password -->
        <div class="form-group mt-2">
          <label for="password">Password :</label>
          <input type="password" class="form-control" id="password" placeholder="Masukkan password Anda">
          <small>Password harus terdiri dari angka dan huruf</small>
        </div>

        <!-- Jurusan -->
        <div class="form-group mt-2">
          <label for="">Pilih Jurusan :</label>
          <select class="form-control" name="">
            <option value="">1. Administrasi Perkantoran</option>
            <option value="">2. Akuntansi</option>
            <option value="">3. Pemasaran</option>
            <option value="">4. Perbankan Syariah</option>
          </select>
        </div>

        <!-- Alasan Memilih Jurusan -->
        <div class="form-group">
          <label for="">Alasan Memilih Jurusan :</label>
          <textarea  class="form-control" name="" rows="4" cols="80"></textarea>
        </div>

        <!-- Jenis Kelamin -->
        <div class="row">
          <div class="form-group col-md-6">
            <label for="">Jenis Kelamin :</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio-jenis-kelamin" name="jenis-kelamin" value="">
              <label for="">Laki-laki</label>
            </div>

            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio-jenis-kelamin" name="jenis-kelamin" value="">
              <label for="">Perempuan</label>
            </div>
          </div>

          <div class="form-group col-md-6">
            <label for="">Hobi :</label><br>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="" value="">Futsal<br>
              <input type="checkbox" class="form-check-input" name="" value="">Berenang<br>
              <input type="checkbox" class="form-check-input" name="" value="">Bermain Game<br>
              <input type="checkbox" class="form-check-input" name="" value="">Membuat Program<br>
              <input type="checkbox" class="form-check-input" name="" value="">Membantu Ibu<br>
            </div>
          </div>
        </div>

        <!-- Upload File -->
        <div class="row mt-3">
          <div class="form-group col-md-6">
            <label for="">Upload Nilai Kelas 8 Semester 1</label>
            <input type="file" class="form-control-file" name="" value="">
            <small>Upload File dengan maksimal 2 MB</small>
          </div>

          <div class="form-group col-md-6">
            <label for="">Upload Nilai Kelas 8 Semester 2</label>
            <input type="file" class="form-control-file" name="" value="">
            <small>Upload File dengan maksimal 2 MB</small>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-6">
            <label for="">Upload Nilai Kelas 9 Semester 1</label>
            <input type="file" class="form-control-file" name="" value="">
            <small>Upload File dengan maksimal 2 MB</small>
          </div>

          <div class="form-group col-md-6">
            <label for="">Upload Nilai Kelas 9 Semester 2</label>
            <input type="file" class="form-control-file" name="" value="">
            <small>Upload File dengan maksimal 2 MB</small>
          </div>
        </div>

        <!-- Button -->
        <button type="submit" class="btn btn-primary"name="">SUBMIT</button>
        <button type="reset" class="btn btn-danger"name="">RESET</button>
      </form>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>