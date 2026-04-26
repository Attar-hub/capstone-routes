<?= $this->extend('layout/v_wrapper') ?> <?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profil Pengguna</h5>
                    <p class="card-text">Berikut adalah informasi akun Anda yang terdaftar di sistem:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Username:</strong> <?= $username ?></li>
                        <li class="list-group-item"><strong>Role:</strong> <?= $role ?></li>
                        <li class="list-group-item"><strong>Email:</strong> <?= $email ?></li>
                        <li class="list-group-item"><strong>Waktu Login:</strong> <?= $waktu ?></li>
                        <li class="list-group-item"><strong>Status Login:</strong> <span class="badge bg-success">Sudah Login</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>