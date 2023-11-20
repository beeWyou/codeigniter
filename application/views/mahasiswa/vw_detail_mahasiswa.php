<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                <form action="<?= base_url('Mahasiswa/detail') ?>" method="POST">
                    <h2 class="card-title"><?= $mahasiswa ['nama'] ?></h2>
                    <h6 class="card-subtitle mb-2-muted"><?= $mahasiswa['email'] ?></h6>
                    <div class="row">
                        <div class="col-md-4">NIM</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $mahasiswa ['nim'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $mahasiswa ['jenis_kelamin'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Prodi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $mahasiswa ['prodi'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Asal sekolah</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $mahasiswa ['asal_sekolah'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">No HP</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $mahasiswa ['no_hp'] ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">Alamat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $mahasiswa ['alamat'] ?></div>
                    </div>
                    <div class="card-footer justify-content-center">
                        <a href="<?= base_url('Mahasiswa') ?>"class="btn btn-danger">Tutup</a>
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