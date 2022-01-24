$(function() {
   $('.tombolTambahData').on('click', function() {
      $('#formModalLabel').html('Tambah Data Pelajar');
      $('.modal-footer button[type=submit]').html('Tambah Data');
   });



   $('.tampilModalUbah').on('click', function() {

      $('#formModalLabel').html('Ubah Data Pelajar');
      $('.modal-footer button[type=submit]').html('Ubah Data');
      $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/pelajar/ubah');

      const id = $(this).data('id');
      
      $.ajax({
          url: 'http://localhost/phpmvc/public/pelajar/getubah',
          data: {id : id},
          method: 'post',
          dataType: 'json',
          success: function(data) {
              $('#nama').val(data.nama);
              $('#nrp').val(data.nrp);
              $('#email').val(data.email);
              $('#jurusan').val(data.jurusan);
              $('#id').val(data.id);
          }
      });

   });

});
