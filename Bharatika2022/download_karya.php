<?php 
include '../connect.php';

    $file_path= $_SERVER["DOCUMENT_ROOT"]."/lalala2022lalala/Uploads/karya/".$_GET['file'];
    $filename=$_GET['file'];
    $ctype="application/octet-stream";
    if(!empty($file_path) && file_exists($file_path)){ //check keberadaan file
      header("Pragma:public");
        header("Expired:0");
      header("Cache-Control:must-revalidate");
      header("Content-Control:public");
      header("Content-Description: File Transfer");
      header("Content-Type: $ctype");
      header("Content-Disposition:attachment; filename=\"".$filename."\"");
      header("Content-Transfer-Encoding:binary");
      header("Content-Length:".filesize($file_path));
      flush();
      readfile($file_path);
      exit();
    }else{
      echo "The File does not exist.";
    }
?>