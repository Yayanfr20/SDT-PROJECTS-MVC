<?php

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
    try {
      $FileTMP = $FILES["tmp_name"] == "" ? $FILES["full_path"] : $FILES["tmp_name"];
      $pathfile = $FILES["name"];
      $extension = pathinfo($pathFile,PATHINFO_EXTENSION);
      
      /* check extension */
      if (in_array(self::$acceptExtension, $extension)) {
        $filename = uniqid().$extension;
        
        $finalDEST = $DEST.$filename;
        if (move_uploaded_file($FileTMP, $finalDEST)) {
          return $finalDEST;
        }
      }
      return false;
      
    } catch (\Exeption $e) {
      throw new Exeption("failed to upload file : " . $e);
    }
  }
}