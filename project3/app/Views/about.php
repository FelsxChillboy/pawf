<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="/css/bootstrap.min.css">

<div class="container">
    <div class="row">
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Siapa Aku</h5>
                <p>saya adalah seoarang mahasiswa teknik informatika semeseter 6 yang sedang berusaha untuk meraih gelar S.Kom</p>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Bisa Apa
                    Aku</h5>
                <p>saya mahir di bidang FE, dan sedang belajar BE untuk mencapai fullstack </p>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Bagaimana
                    Aku</h5>
                <p>saya suka mengopkrek project ataupun sesuatu yang berhubungan teknik informatika.</p>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>