<script>
  $(document).ready(function () {
    'use strict';

    // get Edit lab
    $('.btn-editlab').on('click', function () {
      // get data from button edit
      const id = $(this).data('id');
      const category = $(this).data('kategori');
      const name = $(this).data('name');
      // Set data to Form Edit
      $('.product_id').val(id);
      $('.edit_namalab').val(name);
      $('.edit_kategori').val(category).trigger('change');
      // Call Modal Edit
      $('#editModal').modal('show');
    });

    // get Delete lab
    $('.btn-deletelab').on('click', function () {
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.product_id').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });


    $("#table-lab").dataTable({
      "columnDefs": [{
        "sortable": false,
        "targets": [2, 3]
      }]
    });

    // get Edit Fasilitas
    $('.btn-editFasilitas').on('click', function () {
      // get data from button edit
      const id = $(this).data('id');
      const category = $(this).data('kategori');
      const name = $(this).data('name');
      const jml = $(this).data('jumlah');
      const gmb = $(this).data('gambar');
      // Set data to Form Edit
      $('.product_id').val(id);
      $('.edit_namafasilitas').val(name);
      $('.edit_jumlahbarang').val(jml);
      $('.edit_gambar').val(gmb);
      $('.edit_kategori').val(category).trigger('change');
      // Call Modal Edit
      $('#editModal').modal('show');
    });

    // get Delete Fasilitas
    $('.btn-deleteFasilitas').on('click', function () {
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.product_id').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });


    $("#table-fasilitas").dataTable({
      "columnDefs": [{
        "sortable": false,
        "targets": [2, 3]
      }]
    });

    $("#tabel-reservasi").dataTable({
      "columnDefs": [{
        "sortable": true,
        "targets": [2, 3]
      }]
    });

    $("#tabel-user").dataTable({
      "columnDefs": [{
        "sortable": true,
        "targets": [2, 3]
      }]
    });

    // get Edit Fasilitas
    $('.btn-edituser').on('click', function () {
      // get data from button edit
      const id = $(this).data('id');
      const email = $(this).data('email');
      const nama = $(this).data('nama');
      const alamat = $(this).data('alamat');      
      const username = $(this).data('username');      
      const password = $(this).data('password');      
      // const level = $(this).data('level');      
      
      // Set data to Form Edit
      $('.product_id').val(id);
      $('.edit_emailuser').val(email);
      $('.edit_namauser').val(nama);
      $('.edit_alamatuser').val(alamat);
      $('.edit_usernameuser').val(username);
      $('.edit_passworduser').val(password);
      // $('.level').val(category).trigger('change');
      // Call Modal Edit
      $('#editModal').modal('show');
    });


  })
</script>