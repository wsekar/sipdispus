<div class="layout-container">
    <!-- Layout container -->
    <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

                <h4 class="fw-bold py-3 mb-4"><?= $title ?></h4>

                <!-- Basic Layout -->
                <div class="row">

                    <div class="col-xl">
                        <div class="card mb-4">
                            <form action="<?= base_url('admin/penilai/edit/') ?><?= $users['id_u']; ?>" id="form-tambah" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_u" id="id_u" value="<?= $users['id_u']; ?>" />
                                <div class="mb-3">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="profil-tab" data-bs-toggle="tab" href="#profil" role="tab" aria-controls="profil" aria-selected="true">Ubah Profil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="password-tab" data-bs-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">Ubah Password</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="profil" role="tabpanel" aria-labelledby="profil-tab">
                                            <div class="mb-3">
                                                <label class="form-label" for="nama_user">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="" value="<?= $users['nama_user'] ?>" />
                                                <?= form_error('nama_user', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="username">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="" value="<?= $users['username'] ?>" />
                                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-row mt-2">
                                                <div class="col-md-6">
                                                    <img src="<?= base_url('assets/img/profil/'); ?><?= $users['foto_profil']; ?>" class="img-thumbnail" width="200px"><br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="foto_profil">Foto Profil</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="foto_profil" class="form-control" id="file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?= base_url() . 'admin/penilai' ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i>&nbsp;&nbsp;Kembali</a>
                                            <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i>&nbsp;&nbsp;Simpan</button>
                            </form>

                        </div>
                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                            <form action="<?= base_url('admin/penilai/editpass/') ?><?= $users['id_u']; ?>" id="form-tambah" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_u" id="id_u" value="<?= $users['id_u']; ?>" />
                                <div class="mb-3 form-password-toggle validate-input" data-validate="Masukkan password">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password">Password Baru</label>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan Password" aria-describedby="password">
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i>&nbsp;&nbsp;Simpan</button>
                            </form>
                        </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>
</div>
</div>
</div>
</div>

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
</div>