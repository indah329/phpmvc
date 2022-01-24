<?php

class flasher {
  
    public static function setFlash($spesan, $aksi, $tipe)
    {
      $_SESSION['flash'] = [
          'pesan' => $pesan,
          'aksi'  => $aksi,
          'tipe'  => $tipe
      ];
    }

    public static function flash()
    {
       if( isset ($_SESSION['flash']) ) {
           echo '<div class="alert alert-warning alert-'. $_SESSION['flash']['tipe'] .'dismissible fade show" role="alert">
                  Data pelajar <strong>' .$_SESSION['flash']['pesan'] . 
                  '</strong> '. $_SESSION['flash']['aksi'] .'
                   <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button>
                 </div>';
                 unset($_SESSION['flash']);

    }
} }