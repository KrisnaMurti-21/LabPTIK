<?= $this->extend('layout') ?>

<?= $this->section('kontainer') ?>
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Halaman Reservasi</h1>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table id="tabel-reservasi" class="table table-striped" >
                      <thead>
                      <tr>
                        <th>Kode Reservasi</th>
                        <th>Peminjam</th>
                        <th>Lab</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Berakhir</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($fac as $data) {?>
                      <tr>
                        <td><a href="#"><?= $data['kode_reservasi']?></a></td>
                        <td class="font-weight-600"><?= $data['peminjam']?></td>
                        <?php if ($data['id_lab'] == 1) { ?>
                          <td> Software Engineering </td>
                        <?php } else if ($data['id_lab'] == 2) { ?>
                          <td> Computer Network And Instrumentation </td>
                        <?php } else { ?>
                          <td> Multimedia Studio </td>
                        <?php } ?>
                        <td><?= $data['tanggal_pinjam']?></td>
                        <td><?= $data['tanggal_berakhir']?></td>
                        <td>
                          <?php if ($data['status'] == 0) { ?>
                            <div class="badge badge-warning">Belum Selesai</div>
                          <?php } else { ?>
                            <div class="badge badge-success">Sudah Selesai</div>
                          <?php } ?>
                        </td>
                        <td>
                          <?php if ($data['status'] == 0) { ?>
                              <form action="<?= base_url()?>/admin/selesaikan/" method="POST">
                              <input type="hidden" id="product_id" name="product_id" value="<?= $data['id']?>">
                              <input type="hidden" id="id_lab" name="id_lab" value="<?= $data['id_lab']?>">
                              <button type="submit" class="btn btn-primary">Selesaikan</button>
                              </form>
                          <?php } ?>
                        </td>
                      </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>

<?= $this->endSection();?>