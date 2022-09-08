<?php
##############################################################
# LIBRARY META HACK ( lib encrypti & decrypti                #
# AUTHOR: RYUGENXD SDT PROJECTS TM                           #
##############################################################

class MetaHack {
   static $cip = "AES-128-CTR";
   static $iv = "08142004";
   static $key = "protectedbyryugenxd";
   static $op = 0;
   public function __construct() {
      openssl_cipher_iv_length(self::$cip);
   }
   public static function encHack($value) {
      $en = openssl_encrypt($value, self::$cip, self::$key, self::$op, self::$iv);
      return $en;
   }
   public static function decHack($value) {
      $de = openssl_decrypt($value, self::$cip, self::$key, self::$op, self::$iv);
      return $de;
   }
}