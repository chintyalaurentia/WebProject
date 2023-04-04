<?php
    include '../connect.php';
    $output = '';

    $nrp_pendaftar = $_POST['nrp'];
    $file = $_FILES['filedoc']['tmp_name'];
    $link = $_POST['link'];
    $komentar = $_POST['komentar'];
    $admin = $_POST['admin'];
    // $tgl_wawancara = $_POST['tgl_wawancara'];
    // $jam_wawancara = $_POST['jam_wawancara'];

    $namaFile = $nrp_pendaftar.".pdf";
    $pathFile = $_SERVER["DOCUMENT_ROOT"]."/spetrakuler/assets/file/".$nrp_pendaftar.".pdf";
    $filePdf = 'http://bem.petra.ac.id/spetrakuler/assets/file/'.$namaFile;
    // $output = $komentar;
    // echo $output;
    //     echo $output;
    if(move_uploaded_file($file, $pathFile)){
        $insert = "UPDATE `jadwal` SET `hasil_filepath` = '$filePdf', `link_recording` = '$link', `komentar` = '$komentar', `sdh_wawancara` = 1 WHERE nrp_pendaftar = '$nrp_pendaftar'";
        // $insert = "INSERT INTO `jadwal`(`id_jadwal`, `id_pewawancara`, `hari_tgl_wawancara`, `wkt_wawancara`, `nrp_pendaftar`, `hasil_filepath`, `link_recording`, `komentar`, `sdh_wawancara`) VALUES (NULL,NULL,NULL,NULL,NULL,'$filePdf','$link','$komentar',TRUE)";
        $insertqry = mysqli_query($con, $insert);
        $output = 'ok';
        echo $output;
    }
    else{
        echo "no";
    }
?>