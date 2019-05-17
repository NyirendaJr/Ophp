<?php
namespace Config\Core;
  class FileManager {
    /*
    ** This function upload only a single file from the request
    */
    public static function uploadSingleFile($path, $resource){
        $current_dir = __DIR__."/../../static/";
        $data_to_append = ((string)(round(microtime(true) * 1000)))
            .str_replace('.','-',uniqid('78442',true))."."
            .pathinfo(basename($_FILES[$resource]["name"]), PATHINFO_EXTENSION);
        $fileName = $current_dir.$path.$data_to_append;
        $fileName1 = $path.$data_to_append;
        if($_FILES[$resource]["error"]){
          return null;
        }
        if (move_uploaded_file($_FILES[$resource]["tmp_name"], $fileName)) {
            return $fileName1;
        }
        return null;
    }
    /*
    ** This function upload multiple files while returning the url
    */
     public static function doTheUPloadMultiple($path,$names){
        $resources = $_FILES[$names];
        $resourcesList = array();
        $fileCount = count($resources);
        if ($fileCount>0) {
              for ($i=0;$i<$fileCount;$i++) {
                    $name=$path.((string)(round(microtime(true) * 1000)))
                    .str_replace('.','-',uniqid('78442',true))."."
                    .pathinfo(basename($resources['name'][$i]), PATHINFO_EXTENSION);
                    if(!(move_uploaded_file($resources['tmp_name'][$i],$name))){
                              foreach ($resourcesList as $resource) {
                                  self::deleteFile($path);
                              }
                              return false;
                     }
                    $resourcesList[]=$name;
              }
        }else{
          return null;
        }
        return $resourcesList;
     }
     /*
     ** This static function serves as a file deleter
     */
     public static function deleteFile($filePath){
         $current_dir = __DIR__."/../../static/";
       if( unlink($current_dir.$filePath) ) {
          return true;
       }
       return false;
     }

      public static function url(){
          return sprintf(
              "%s://%s%s",
              isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
              $_SERVER['SERVER_NAME'],
              $_SERVER['REQUEST_URI']
          );
      }
  }
?>
