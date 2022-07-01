<?= $this->extend('layout') ?>

<?= $this->section('kontainer') ?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Halaman User</h1>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Daftar User</h4>
            <div class="ml-auto">
              <button class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#modal-User"><i
                  class="fa fa-plus-circle"></i> Tambah
                User</button>
            </div>
          </div>
          <div class="card-body p-3">
          <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <h4>Periksa Entrian Form</h4>
                                    </hr />
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                                <?php endif; ?>
            <div class="table-responsive">
              <table class="table table-striped mb-0" id="tabel-user">
                <thead>
                  <tr>
                    <th width="25">#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $x=1; foreach ($fac as $data) { ?>
                  <tr>
                    <td width="25"><?= $x++?></td>
                    <td width="100">
                      <a href="#" class="font-weight-600"><?= $data['nama']?></a>
                    </td>
                    <td width="80"><?= $data['email']?></td>
                    <td width="80"><?= $data['alamat']?></td>
                    <td width="80"><?= $data['username']?></td>
                    <td width="80">
                      <?php if ($data['level'] == 1) { ?>
                      <div class="badge badge-success">Admin</div>
                      <?php } else { ?>
                      <div class="badge badge-warning">Member</div>
                      <?php } ?>
                    </td>
                    <td width="100">
                      <?php if ($data['status'] == 0) { ?>
                      <form action="<?= base_url()?>/admin/verif/" method="POST">
                        <a href="#" class="btn btn-danger btn-deleteFasilitas" data-id="<?= $data['id_user']?>"><i class="fas fa-trash"></i></a>
                        <input type="hidden" id="product_id" name="product_id" value="<?= $data['id_user']?>">
                        <button type="submit" class="btn btn-success btn-action"><i class="fas fa-check"></i></button>
                      </form>
                      <?php } else { ?>
                        <a href="#" class="btn btn-primary btn-edituser"
                                                    data-id="<?= $data['id_user']; ?>"
                                                    data-email="<?= $data['email'];?>"
                                                    data-nama="<?= $data['nama']?>"
                                                    data-alamat="<?= $data['alamat']?>"
                                                    data-username="<?= $data['username']?>"
                                                    data-password="<?= $data['password']?>"
                                                    data-level="<?= $data['level']?>"
                                                    data-toggle="modal"
                                                    data-target="#editmodal"><i
                            class="fas fa-pencil-alt"></i></a>
                        <a href="#" class="btn btn-danger btn-deleteFasilitas" data-id="<?= $data['id_user']?>"><i class="fas fa-trash"></i></a>
                      <?php } ?>
                    </td>
                  </tr>
                  <?php }  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-User" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <form method="post" action="<?= base_url()?>/admin/simpanUser" id="simpanUser"> -->
                <form action="<?= base_url()?>/admin/simpanUser" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Pilih Level User</label>
                        <select class="form-control" name="level">
                            <option value="1">Admin</option>
                            <option value="0">User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" class="form-control" name="nama_user" placeholder="Nama User">
                    </div>
                    <div class="form-group">
                        <label>Alamat User</label>
                        <input type="text" class="form-control" name="alamat_user" placeholder="Alamat User">
                    </div>
                    <div class="form-group">
                        <label>Username User</label>
                        <input type="text" class="form-control" name="username_user" placeholder="Username User">
                    </div>
                    <div class="form-group">
                        <label>Email User</label>
                        <input type="email" class="form-control" name="email_user" placeholder="Email User">
                    </div>
                    <div class="form-group">
                        <label>Password User</label>
                        <input type="password" class="form-control" name="password_user" placeholder="Password User">
                    </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="simpan_User" type="submit" class="btn btn-primary">Tambah User</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<form action="<?= base_url()?>/admin/ubahUser" method="post">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Pilih Level User</label>
                        <select class="form-control" name="level">
                            <option value="1">Admin</option>
                            <option value="0">User</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nama user</label>
                        <input type="text" class="form-control edit_namauser" name="edit_namauser"
                            placeholder="Nama user">
                    </div>

                    <div class="form-group">
                        <label>Email user</label>
                        <input type="email" class="form-control edit_emailuser" name="edit_emailuser"
                            placeholder="Email user">
                    </div>

                    <div class="form-group">
                        <label>password user</label>
                        <input type="password" class="form-control edit_passworduser" name="edit_passworduser"
                            placeholder="password user">
                    </div>

                    <div class="form-group">
                        <label>Alamat user</label>
                        <input type="text" class="form-control edit_alamatuser" name="edit_alamatuser"
                            placeholder="alamat user">
                    </div>

                    <div class="form-group">
                        <label>username user</label>
                        <input type="text" class="form-control edit_usernameuser" name="edit_usernameuser"
                            placeholder="username user">
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
<!-- Edit Modal -->

<!-- Modal Delete Product-->
<form action="<?= base_url()?>/admin/hapusUser" method="post">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
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