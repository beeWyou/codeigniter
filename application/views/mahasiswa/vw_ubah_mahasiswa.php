<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Tautan ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <!-- ... (Kode Anda yang ada di header) -->

<div class="container">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center">
                Form Tambah Data Mahasiswa
            </div>

            <div class="card-body">
                <form action="<?= base_url('Mahasiswa/update/'. $mahasiswa['id']) ?>" method="POST">
                <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" class="form-control" id="nama" placeholder="Nama">

                    </div>
                    <div class="form-group mb-3">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" value="<?= $mahasiswa['nim']; ?>" class="form-control" id="nim" placeholder="NIM">

                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" class="form-control">
                            <option value="<?= $mahasiswa['jenis_kelamin']; ?>" selected><?= $mahasiswa['jenis_kelamin']; ?></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?= $mahasiswa['nim']; ?>" class="form-control" id="email" placeholder="Email">

                    </div>
                    <div class="form-group mb-3">
                        <label for="prodi">Prodi</label>
                        <select name="prodi" class="form-control" id="prodi" class="form-control">
                            <option value="<?= $mahasiswa['prodi']; ?>" selected><?= $mahasiswa['prodi']; ?></option>
                            <option value="teknik_informatika">Teknik Informatika</option>
                            <option value="sistem_informasi">Sistem Informasi</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">

                    </div>
                    <div class="form-group mb-3">
                        <label for="no_hp">NO HP</label>
                        <input type="text" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>" class="form-control" id="no_hp" placeholder="NO HP">

                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?= $mahasiswa['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat">

                    </div>
                    
                    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="edit" class="btn btn-primary float right">Edit Data </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>