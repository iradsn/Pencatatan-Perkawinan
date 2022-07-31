<?php
if (!empty($_GET['file'])) {
    $FileName = basename($_GET['file']);
    $filePath = "../dataFoto/berkas/" . $FileName;

    if (!empty($FileName) && file_exists($filePath)) {
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$FileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Emcoding: binary");

        readfile($filePath);
        exit;
    } else {
        echo "File not exit";
    }
}
