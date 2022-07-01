<?= $this->extend('layout') ?>

<?= $this->section('kontainer') ?>
<!-- blog-details -->
<section class="blog-details sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="blog-details-content">
                    <div class="news-block-three">
                        <div class="inner-box">

                            <figure class="image-box"><img src="<?= base_url()?>/assets/images/<?= $hasil['foto']?>"
                                    alt=""></figure>
                            <div class="lower-content">
                                <ul class="post-info clearfix">
                                    <li><i class="fas fa-user"></i><a href="#">By Admin</a></li>
                                </ul>
                                <h3>
                                    <?php 
                                            if ($hasil['id_lab'] == 1) { echo "Software Engineering"; }
                                            else if ($hasil['id_lab'] == 2) { echo "Multimedia Studio"; }
                                            else if ($hasil['id_lab'] == 3) { echo "Computer Network And Instrumentation"; }
                                        ?>
                                </h3>
                                <div class="text">
                                    <p><?= $hasil['isi']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="auto-container">
        <!-- Heading -->
        <div class="col-lg-12 mt-5 shadow-lg p-3 mb-5 rounded">
            <h3 class="mb-3">Jadwal Peminjaman Laboratorium</h3>
            <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Laboratorium</th>
                    <th>Peminjam</th>
                    <th>Status</th>
                    <th>Tangggal</th>
                    <th>Mulai</th>
                    <th>Akhir</th>
                </tr>
            </thead>
                <tbody>
                <?php
                foreach ($item as $isi) { ?>
                    <tr>
                        <td>
                            <p><?php 
                                if ($isi['id_lab'] == 1) { echo 'Software Engineering Laboratory'; }
                                else if ($isi['id_lab'] == 2) { echo 'Multimedia Studio'; }
                                else if ($isi['id_lab'] == 3) { echo 'Network and Instrumentation Laboratory'; }
                            ?></p>
                        </td>
                        <td>
                            <p><?= $isi['peminjam'] ?></p>
                        </td>
                        <td>
                            <?php 
                                if ($isi['status'] == 1) { echo '<span class="badge badge-success rounded-pill d-inline">Verify </span>'; }
                                else if ($isi['status'] == 0) { echo '<span class="badge badge-primary rounded-pill d-inline">In Wait</span>'; }
                            ?>
                        </td>
                        <td>
                            <?= $isi['tgl_pakai'] ?>
                        </td>
                        <td><?= $isi['time_a']; ?></td>
                        <td><?= $isi['time_b']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
        </table>
        </div>
    </div>
</section>
<!-- blog-details end -->

<?= $this->endSection();?>