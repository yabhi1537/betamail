<?php
$file = $_GET["id"];
$contenttype = "application/pdf.file";
header("Content-Type: " . $contenttype);
header("Content-Disposition: attachment; filename=\"" . basename($file) . "\";");
readfile("admin/upload".$file);
exit();
?>
// <?php
// if(!empty($_GET['file'])){
//     $filename = basename($_GET['file']);
//     $filepath = 'admin/uploade/'.$file;
//     if(!empty($filename) && file_exists($filepath)){
        
//             header("Cache-control: public");
//              header('Content-discription: file Transfer");
//              header('Content-Disposition: attachment; filename="' . $file . '"');
//               header("Content-type: application/pdf");

//     }
// }

// ?>