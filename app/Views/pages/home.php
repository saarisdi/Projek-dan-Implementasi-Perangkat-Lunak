<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<body>
    <h3 class="centered-text">
        Universitas Jenderal Achmad Yani
        <small class="text-scnd">Prodi Informatika</small>
    </h3>
    <img src="/img/mqdefault.jpg" class="img-fluid" alt="...">
</body>
<style>
    .centered-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: 'Poppins';
        font-size: calc(1.525rem + 3.3vw);
        color: white;
    }

    .text-scnd {
        color: orange;
    }
</style>
<?= $this->endSection(); ?>