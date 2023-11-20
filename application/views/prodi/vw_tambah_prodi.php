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
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center">
                Form Tambah Data Prodi
            </div>

            <div class="card-body">
                <form action="" method="POST">
                <div class="form-group mb-3">
                        <label for="namap">Nama Prodi</label>
                        <input type="text" name="namap" value="<?= set_value('namap')?>" class="form-control" id="namap" placeholder="Nama Prodi">
                        <?= form_error('namap', '<small class="text-danger p1-3" style="color:red;">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="ruang">Ruangan</label>
                        <input type="text" name="ruang" value="<?= set_value('ruang')?>" class="form-control" id="ruang" placeholder="Ruangan">
                        <?= form_error('ruang', '<small class="text-danger p1-3" style="color:red;">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="akre">Akreditasi</label>
                        <select name="akre" value="<?= set_value('akre')?>" class="form-control" id="akre" class="form-control">
                            <option value="">Akreditasi</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        <?= form_error('akre', '<small class="text-danger p1-3" style="color:red;">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jur">Jurusan</label>
                        <select name="jur" value="<?= set_value('jur')?>" class="form-control" id="jur" class="form-control">
                            <option value="">Jurusan</option>
                            <option value="JTI">JTI</option>
                            <option value="AKTP">AKTP</option>
                        </select>
                        <?= form_error('jur', '<small class="text-danger p1-3" style="color:red;">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="namaK">Nama Kaprodi</label>
                        <input type="text" value="<?= set_value('namaK')?>" name="namaK" class="form-control" id="namaK" placeholder="Nama Kaprodi">
                        <?= form_error('namaK', '<small class="text-danger p1-3" style="color:red;">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="thn">Tahun Berdiri</label>
                        <input type="text" name="thn" value="<?= set_value('thn')?>" class="form-control" id="thn" placeholder="Tahun Berdiri">
                        <?= form_error('thn', '<small class="text-danger p1-3" style="color:red;">', '</small>'); ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="lulus">Output Lulusan</label>
                        <input type="text" name="lulus" value="<?= set_value('lulus')?>" class="form-control" id="lulus" placeholder="Output Lulusan">
                        <?= form_error('lulus', '<small class="text-danger p1-3" style="color:red;">', '</small>'); ?>
                    </div>
                    
                    <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Prodi </button>
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