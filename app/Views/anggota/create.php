<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
 
 <div class="container">
        <h2>Form Tambah Data Anggota</h2>

        <?php echo form_open('anggota/save', ['enctype' => 'multipart/form-data']); ?>

        <?php if (session()->has('err')) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo session('err'); ?>
        </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-sm-2">
                <img src="/Asset/alumniCSSJS/gambar/Anggota/default.png" class="img-thumbnail img-preview">
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text"
                        class="form-control <?php echo (isset($validation) && $validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                        id="nama" name="nama" value="<?php echo old('nama'); ?>">
                    <?php if (isset($validation) && $validation->hasError('nama')) : ?>
                    <div class="invalid-feedback">
                        <?php echo $validation->getError('nama'); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="no_anggota">Nomor Alumni</label>
                    <input type="text"
                        class="form-control <?php echo (isset($validation) && $validation->hasError('no_anggota')) ? 'is-invalid' : ''; ?>"
                        id="no_anggota" name="no_anggota" value="<?php echo old('no_anggota'); ?>">
                    <?php if (isset($validation) && $validation->hasError('no_anggota')) : ?>
                    <div class="invalid-feedback">
                        <?php echo $validation->getError('no_anggota'); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="hp">No. HP</label>
                    <input type="text"
                        class="form-control <?php echo (isset($validation) && $validation->hasError('hp')) ? 'is-invalid' : ''; ?>"
                        id="hp" name="hp" value="<?php echo old('hp'); ?>">
                    <?php if (isset($validation) && $validation->hasError('hp')) : ?>
                    <div class="invalid-feedback">
                        <?php echo $validation->getError('hp'); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="sampul">Sampul</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="previewImg()">
                        <label class="custom-file-label" for="sampul">Pilih Gambar</label>
                    </div>
                    <?php if (isset($validation) && $validation->hasError('sampul')) : ?>
                    <div class="invalid-feedback">
                        <?php echo $validation->getError('sampul'); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo form_close(); ?>
    </div>



    

<?= $this->endSection(); ?>

