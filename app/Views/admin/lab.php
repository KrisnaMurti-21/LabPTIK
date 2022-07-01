<?= $this->extend('layout') ?>

<?= $this->section('kontainer') ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman Lab</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Lab</h4>
                                <!-- <div class="ml-auto">
                                    <button class="btn btn-outline-primary btn-block" data-toggle="modal"
                                        data-target="#modal-lab"><i class="fa fa-plus-circle"></i> Tambah
                                        lab</button>
                                </div> -->
                            </div>
                            <div class="card-body">
                                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <h4>Periksa Entrian Form</h4>
                                    </hr />
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                                <?php endif; ?>
                                <div class="table-responsive">
                                    <table class="table table-striped w-100" id="table-lab">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Nama Lab</th>
                                                <th>Keterangan</th>
                                                <th>Gambar</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $x = 0; foreach ($fac as $isi) {  ?>
                                            <tr>
                                                <td>
                                                    <?= $x+1 ?>
                                                </td>
                                                <td><?php 
                                                if ($isi['id_lab'] == "1") { 
                                                    echo "Software Engineering"; 
                                                } else if ($isi['id_lab'] == "2") {
                                                    echo "Computer Network And Instrumentation"; 
                                                } else {
                                                    echo "Multimedia Studio"; 
                                                }?>
                                                </td>
                                                <td class="align-middle">
                                                    <?= $isi['isi']?>
                                                </td>
                                                <td>
                                                    <img alt="image"
                                                        src="<?= base_url()?>/assets/images/<?= $isi['foto']?>"
                                                        class="rounded-circle" width="65" data-toggle="tooltip"
                                                        title="Wildan Ahdian">
                                                </td>
                                                <td>
                                                    <?php if ($isi['status'] == 0) { ?>
                                                        <div class="badge badge-warning">Tidak Tersedia</div>
                                                    <?php } else { ?>
                                                        <div class="badge badge-success">Tersedia</div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success btn-editlab"
                                                        data-id="<?= $isi['id']; ?>"
                                                        data-kategori="<?= $isi['id_lab'];?>"
                                                        data-name="<?= $isi['isi']?>"
                                                        data-gambar="<?= $isi['foto'];?>" data-toggle="modal"
                                                        data-target="#editmodal">Edit</a>
                                                    <!-- <a href="#" class="btn btn-danger btn-deletelab" data-id="<?= $isi['id']?>">Hapus</a> -->
                                                </td>
                                            </tr>
                                            <?php $x++;} ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal -->
<!-- <div class="modal fade" id="modal-lab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah lab</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url()?>/admin/simpanlab" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Pilih Katagori Lab</label>
                        <select class="form-control" name="kategori">
                            <option value="rpl">Software Engineering</option>
                            <option value="mulmed">Multimedia Studio</option>
                            <option value="tkj">Computer Network And Instrumentation</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Barang</label>
                        <input type="number" class="form-control" name="jumlah_barang" placeholder="Jumlah Barang">
                    </div>
                    <div class="form-group">
                        <label>Gambar Barang</label>
                        <input type="file" class="form-control" id="gambar_lab" name="gambar_lab">
                        <small id="gambarHelp" class="form-text text-muted">
                            Hanya berkas yang berformat <b>.jpg</b> dan <b>.png</b>.
                        </small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="simpan_lab" type="submit" class="btn btn-primary">Tambah lab</button>
            </div>
            </form>
        </div>
    </div>
</div> -->

<form action="<?= base_url()?>/admin/ubahLab" method="post">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah lab</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="edit_kategori">
                            <option value="1">Software Engineering</option>
                            <option value="2">Computer Network And Instrumentation</option>
                            <option value="3">Multimedia Studio</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Keterangan Lab</label>
                        <input type="text" class="form-control edit_namalab" name="edit_namalab"
                            placeholder="Nama lab">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="product_id" class="product_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Modal Edit Product-->

<!-- Modal Delete Product-->
<!-- <form action="<?= base_url()?>/admin/hapuslab" method="post">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h4>Kamu yakin ingin menghapus lab ini?</h4>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="product_id" class="product_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</form> -->
<!-- End Modal Delete Product-->

<?= $this->endSection();?>

