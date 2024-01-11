<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Halaman Dosen</h1>
        </div>
    </div>
    <div class="row mt-3">
        <?php
        $dosenList = [
            [
                'foto' => '/img/dosen1.png',
                'nama' => 'Dosen 1',
                'nip' => '12345678901',
                'keterangan' => 'Keterangan tambahan tentang Dosen 1.',
            ],
            [
                'foto' => '/img/dosen1.png',
                'nama' => 'Dosen 2',
                'nip' => '12345678902',
                'keterangan' => 'Keterangan tambahan tentang Dosen 2.',
            ],
            [
                'foto' => '/img/dosen1.png',
                'nama' => 'Dosen 3',
                'nip' => '12345678903',
                'keterangan' => 'Keterangan tambahan tentang Dosen 3.',
            ],
            [
                'foto' => '/img/dosen1.png',
                'nama' => 'Dosen 4',
                'nip' => '12345678904',
                'keterangan' => 'Keterangan tambahan tentang Dosen 4.',
            ],
            [
                'foto' => '/img/dosen1.png',
                'nama' => 'Dosen 5',
                'nip' => '12345678905',
                'keterangan' => 'Keterangan tambahan tentang Dosen 5.',
            ],
            [
                'foto' => '/img/dosen1.png',
                'nama' => 'Dosen 6',
                'nip' => '12345678906',
                'keterangan' => 'Keterangan tambahan tentang Dosen 6.',
            ],
        ];

        foreach ($dosenList as $dosen) : ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="<?= $dosen['foto'] ?>" class="card-img-top" alt="Foto <?= $dosen['nama'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $dosen['nama'] ?></h5>
                        <p class="card-text">NIP: <?= $dosen['nip'] ?></p>
                        <p class="card-text"><?= $dosen['keterangan'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>
