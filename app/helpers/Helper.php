<?php


// /images/some.jpg
class Helper {
  private static $acceptExtension = [
    "jpg",
    "jpeg",
    "png",
    "gif",
    "webp",
    "mp4",
  ];
  
  private static function getFileNAME($dest)
  {
    $splited = explode("/", $dest);
    return $splited[end($splited)];
  }
  
  public static function uploadFile($FILES, $DEST)
  {
    
    $FileTMP = $FILES["tmp_name"] == "" ? $FILES["full_path"] : $FILES["tmp_name"];
    $pathfile = $FILES["name"];
    $extension = pathinfo($pathFile,PATHINFO_EXTENSION);
    
    /* check extension */
    if (in_array(self::$acceptExtension, $extension)) {
      $filename = self::getFileNAME();
      if (move_uploaded_file($FileTMP, $DEST)) {
        return $DEST;
      }
    }
    return false;
  }
}