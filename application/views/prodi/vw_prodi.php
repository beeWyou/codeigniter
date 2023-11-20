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
            <div class="col-md-6"><a href="<?= base_url('Prodi/tambah') ?>" class="btn btn-info mb-2">Tambah Prodi</a></div>
            <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Prodi</td>
                            <td>Ruangan</td>
                            <td>Jurusan</td>
                            <td>Akreditasi</td>
                            <td>Nama Kaprodi</td>
                            <td>Tahun Berdiri</td>
                            <td>Autput Lulusan</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($prodi as $pro) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $pro['nama']?></td>
                                <td><?= $pro['ruangan']?></td>
                                <td><?= $pro['jurusan']?></td>
                                <td><?= $pro['akreditasi']?></td>
                                <td><?= $pro['nama_kaprodi']?></td>
                                <td><?= $pro['tahun_berdiri']?></td>
                                <td><?= $pro['output_lulusan']?></td>
                                <td>
                                    <a href="<?= base_url('Prodi/hapus/') . $pro['id']; ?>" class="btn btn-danger">Hapus</a>
                                    <a href="<?= base_url('Prodi/edit/') . $pro['id']; ?>" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                        <?php $i++;?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
