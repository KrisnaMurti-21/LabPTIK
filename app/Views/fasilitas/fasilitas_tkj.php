<?= $this->extend('layout') ?>

<?= $this->section('kontainer') ?>
<!--Page Title-->
<section class="page-title" style="background-image: url(<?= base_url()?>/assets/images/thomas-jensen-ISG-rUel0Uw-unsplash.jpg);">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                <div class="content-box clearfix">
                    <div class="title pull-left">
                        <h1>Fasilitas Rekayasa Perangkat Lunak</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Penejelasan Fasilitas -->
<div class="container p-5">
    <div class="row">
        <div class="col-sm-4">
            <img src="<?= base_url()?>/assets/images/coding-g8e1443f78_1920.jpg" class="rounded">
        </div>
        <div class="col-sm-8">
            <p>Fasilitas pada Laboratorium Jaringan Lunak di fasilitasi dengan failitas yang dapat mendukung
                kegiatan mahasiswa ataupun dosen untuk melakukan kegiatan instrumentasi jaringan. </p>
        </div>
    </div>
</div>
<!-- Akhir Penejelasan Fasilitas -->

<!-- Tabel Fasilitas -->
<div class="auto-container">
    <div class="row">
        <div class="col-sm-12 bg-white shadow-lg p-3 mb-5 bg-white rounded-lg">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>No</th>
                        <th>Barang</th>
                        <th>Gambar</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($item as $isi) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <p class="fw-normal mb-1"><?= $isi['nama_barang'] ?></p>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url()?>/assets/images/<?= $isi['gambar'] ?>"
                                    alt="" style="width: 100px; height: 100px" class="rounded-lg"/>
                            </div>
                        </td>
                        <td>
                            <p><?= $isi['jumlah'] ?></p>
                        </td>
                    </tr><?php  }; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Akhir Tabel Fasilitas -->
<?= $this->endSection();?>