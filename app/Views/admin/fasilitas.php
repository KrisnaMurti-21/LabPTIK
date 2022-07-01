<?= $this->extend('layout') ?>

<?= $this->section('kontainer') ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman Fasilitas</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Fasilitas</h4>
                                <div class="ml-auto">
                                    <button class="btn btn-outline-primary btn-block" data-toggle="modal"
                                        data-target="#modal-fasilitas"><i class="fa fa-plus-circle"></i> Tambah
                                        Fasilitas</button>
                                </div>
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
                                    <table class="table table-striped" id="table-fasilitas">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Nama Lab</th>
                                                <th>Nama Barang</th>
                                                <th>Gambar</th>
                                                <th>Jumlah</th>
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
                                                if ($isi['ruangan'] == "rpl") { 
                                                    echo "Software Engineering"; 
                                                } else if ($isi['ruangan'] == "tkj") {
                                                    echo "Computer Network And Instrumentation"; 
                                                } else {
                                                    echo "Multimedia Studio"; 
                                                }?>
                                                </td>
                                                <td class="align-middle">
                                                    <?= $isi['nama_barang']?>
                                                </td>
                                                <td>
                                                    <img alt="image"
                                                        src="<?= base_url()?>/assets/images/<?= $isi['gambar']?>"
                                                        class="rounded-circle" width="35" data-toggle="tooltip"
                                                        title="Wildan Ahdian">
                                                </td>
                                                <td><?= $isi['jumlah']?></td>
                                                <td>
                                                    <a href="#" class="btn btn-success btn-editFasilitas"
                                                        data-id="<?= $isi['id']; ?>"
                                                        data-kategori="<?= $isi['ruangan'];?>"
                                                        data-name="<?= $isi['nama_barang']?>"
                                                        data-jumlah="<?= $isi['jumlah']?>"
                                                        data-gambar="<?= $isi['gambar'];?>" data-toggle="modal"
                                                        data-target="#editmodal">Edit</a>
                                                    <a href="#" class="btn btn-danger btn-deleteFasilitas" data-id="<?= $isi['id']?>">Hapus</a>
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
<div class="modal fade" id="modal-fasilitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <form method="post" action="<?= base_url()?>/admin/simpanFasilitas" id="simpanFasilitas"> -->
                <form action="<?= base_url()?>/admin/simpanFasilitas" method="post" enctype="multipart/form-data">
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
                        <input type="file" class="form-control" id="gambar_fasilitas" name="gambar_fasilitas">
                        <small id="gambarHelp" class="form-text text-muted">
                            Hanya berkas yang berformat <b>.jpg</b> dan <b>.png</b>.
                        </small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="simpan_fasilitas" type="submit" class="btn btn-primary">Tambah Fasilitas</button>
            </div>
            </form>
        </div>
    </div>
</div>

<form action="<?= base_url()?>/admin/ubahFasilitas" method="post">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Fasilitas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="edit_kategori">
                            <option value="rpl">Software Engineering</option>
                            <option value="mulmed">Multimedia Studio</option>
                            <option value="tkj">Computer Network And Instrumentation</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control edit_namafasilitas" name="edit_namafasilitas"
                            placeholder="Nama Fasilitas">
                    </div>

                    <div class="form-group">
                        <label>Jumlah Barang</label>
                        <input type="text" class="form-control edit_jumlahbarang" name="edit_jumlahbarang"
                            placeholder="Jumlah Barang">
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
<form action="<?= base_url()?>/admin/hapusFasilitas" method="post">
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

                    <h4>Are you sure want to delete this product?</h4>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="product_id" class="product_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Modal Delete Product-->

<?= $this->endSection();?>