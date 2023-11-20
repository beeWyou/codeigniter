<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Personal - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="<?= base_url('assets/') ?>https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="<?= base_url('assets/') ?>https://cdn.jsdelivr.net/npm/bootstrap-ic2ons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Data</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <?php
                            if ($user['role'] == 'Admin') { ?>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('Mahasiswa') ?>">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                <span>  Mahasiswa</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="<?= site_url('Prodi') ?>">
                                <i class="fas fa-fw fa-users"></i>
                                <span>Prodi</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('auth/logout') ?>">
                                <i class="fas fa-fw fa-users"></i>
                                <span>Logout</span></a>
                            </li>
                            <?php } else {
                            ?>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('auth/logout') ?>">
                                <i class="fas fa-fw fa-users"></i>
                                <span>Logout</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/images/Profil/') . $user['gambar']; ?>">
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    
                </div>
            </nav> 