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
  
  private static function parseDEST($dest)
  {
    $dest = $dest[0] !== "/" ? $dest : substr($dest, 1);
    return $dest;
  }
  
  public static function uploadFile($FILE, $DEST)
  {
    $FileTMP = $FILE["tmp_name"] == "" ? $FILE["full_path"] : $FILE["tmp_name"];
    
    $extension = pathinfo($FILE["name"],PATHINFO_EXTENSION);
    
    /* check extension */
    if (in_array($extension, self::$acceptExtension)) {
      $filename = uniqid().".".$extension;
      
      $finalDEST = self::parseDEST($DEST) . $filename;
      $relativeFolder = __DIR__."/../../public/";
      
      if (move_uploaded_file($FileTMP, $relativeFolder . $finalDEST)) {
        return $finalDEST;
      }
    }
    return false;
  }
}