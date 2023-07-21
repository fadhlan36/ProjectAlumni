
<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

    <div class="container m-tab">
    <div class="row mar-create shadow">
        <div class="col">
        <h2 class="title-table">Buat Akun</h2>
        <form action="<?= url_to('register') ?>" method="post" class="user">

                    <?= csrf_field() ?>

                    <div >

                    <div class="input-group flex-nowrap in-grup col-lg-7">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="email" class="form-control  <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                        name="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>" aria-label="Username" aria-describedby="addon-wrapping"> 
                    </div>


                    <div class="input-group flex-nowrap in-grup col-lg-7">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text"
                            class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"
                            name="username" placeholder="<?=lang('Auth.username')?>"
                            value="<?= old('username') ?>">
                    </div>

                    <div class="input-group flex-nowrap in-grup col-lg-7">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="password"
                            class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                            name="password" placeholder="<?=lang('Auth.password')?>"
                            autocomplete="off">
                    </div>

                    <div class="input-group flex-nowrap in-grup col-lg-7">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="password" name="pass_confirm"
                            class="form-control  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                            placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                    </div>

                    <button type="submit" class="btn btn-primary btnReg md-10"> <?=lang('Auth.register')?>
                                        </button>

                    </div>

                    </form>
        </div>
    </div>
    
        <div class="row mar-user">
            <div class="col">
                
                <h2 class="mt-2 title-table">Daftar Alumni</h2>
                
                <div class="alert alert-success" role="alert">
                    
                </div>
                
                <hr>
                <table class="table shadow">
                    <thead class="table-dark ">
                        <tr>
                            <th scope="col title-th">No.</th>
                            <th scope="col title-th">Foto</th>
                            <th scope="col title-th">Nama</th>
                            <th scope="col title-th">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                     
                        <tr>
                            <th scope="row"></th>
                            <td><img src="/Asset/alumniCSSJS/gambar/Anggota/" alt="" class="sampul">
                            </td>
                            <td></td>
                            <td>
                                <a href="" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>