<?php

// ALert
class Flasher
{
   public static function setFlash($pesan, $aksi, $tipe) {
      $_SESSION['flash'] = [
         'pesan' => $pesan,
         'aksi' => $aksi,
         'tipe' => $tipe
      ];
   }

   public static function flash() {
      if (isset($_SESSION['flash'])) {
         #echo "<script> new Alert({$_SESSION['flash']['pesan']},{$_SESSION['flash']['aksi']},{$_SESSION['flash']['tipe']}).getAlert();</script>";
         echo "<script> Swal.fire({
         position:'center',
         icon: '".$_SESSION['flash']['tipe']."',
         title: '".$_SESSION['flash']['pesan']."".$_SESSION['flash']['aksi']."',
         showConfirmButton: false,
         timer: 1500
      });
      </script>";

         unset($_SESSION['flash']);
      }
   }
}