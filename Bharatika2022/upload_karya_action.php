<?php
include 'connect.php';

$output = '';
date_default_timezone_set('Asia/Jakarta');
$timenow = date('Y-m-d:H:i'); 
if($timenow <= "2022-04-21:20:05") {
    if(isset($_POST['lomba']) && $_POST['lomba'] != ""){
        // $output = 'Unggah Karya Berhasil';
        // echo $output;
        $idLomba = htmlspecialchars($_POST['lomba']);
        $nama_peserta = htmlspecialchars($_POST['nama']);
        $email_peserta = htmlspecialchars($_POST['email']);
        $alamat_peserta = htmlspecialchars($_POST['alamat']);
        $nohp_peserta = htmlspecialchars($_POST['nohp']);
        $lineid_peserta = htmlspecialchars($_POST['lineid']);
        $sekolah_peserta = htmlspecialchars($_POST['sekolah']);
        $ktm = $_FILES['ktm']['tmp_name'];
        $pasFoto = $_FILES['pasFoto']['tmp_name'];
        $hasil_karya = $_FILES['karya']['tmp_name'];
        
        $namaFileFoto = hash('md5',$nama_peserta).".jpg";
        $namaFileKarya = hash('md5',$nama_peserta).".zip";

        $path_ktm = $_SERVER["DOCUMENT_ROOT"]."/2022/Uploads/ktm/".hash('md5',$nama_peserta).".jpg";
        $path_pas_foto = $_SERVER["DOCUMENT_ROOT"]."/2022/Uploads/pas_foto/".hash('md5',$nama_peserta).".jpg";
        $path_karya = $_SERVER["DOCUMENT_ROOT"]."/2022/Uploads/karya/".hash('md5',$nama_peserta).".zip";

        $file_ktm = '/2022/Uploads/ktm/'.$namaFileFoto;
        $file_pas_foto = '/2022/Uploads/pas_foto/'.$namaFileFoto;
        $file_karya = '/2022/Uploads/karya/'.$namaFileKarya;

        //cek peserta daftar ato ga
        $cekPeserta = "SELECT * FROM member_regist WHERE email='$email_peserta'";
        $cekPesertaQuery = mysqli_query($conn, $cekPeserta);
        $cekPesertaValue = mysqli_num_rows($cekPesertaQuery);

        //cek bener daftar lomba itu apa ga 
        $cekLomba = "SELECT * FROM member_pendaftaran WHERE email='$email_peserta' && lomba = '$idLomba'";
        $cekLombaQuery = mysqli_query($conn, $cekLomba);
        $cekLombaValue = mysqli_num_rows($cekLombaQuery);

        //cek sudah di acc/belum
        $cekAcc = "SELECT * FROM member_pendaftaran WHERE email='$email_peserta' && lomba = '$idLomba' && status=1"; 
        $cekAccQuery = mysqli_query($conn, $cekAcc);
        $cekAccValue = mysqli_num_rows($cekAccQuery);


        //cek udah upload belum 
        $cekUpload = "SELECT * FROM upload_karya WHERE email='$email_peserta' && id_lomba='$idLomba'";
        $cekUploadQuery = mysqli_query($conn, $cekUpload);
        $cekUploadValue = mysqli_num_rows($cekUploadQuery);

        //cek peserta daftar ato ga
        if($cekPesertaValue > 0){
            //cek bener daftar lomba itu apa ga 
            if($cekLombaValue > 0){
                //cek udh di acc/belum
                if($cekAccValue > 0){
                    //cek udah upload belum
                    if($cekUploadValue > 0){
                        $output = 'ada';
                        echo $output;
                    }
                    else{
                        if($_FILES['ktm']['size'] < 2097152){
                            if($_FILES['pasFoto']['size'] < 2097152){
                                if($_FILES['karya']['size'] < 104857600){
                                    if(move_uploaded_file($ktm, $path_ktm)){
                                        if(move_uploaded_file($pasFoto, $path_pas_foto)){
                                            if(move_uploaded_file($hasil_karya, $path_karya)){
                                                $insert = "INSERT INTO `upload_karya`(`id`, `id_lomba`, `nama_lengkap`, `email`, `alamat`, `no_hp`, `line_id`, `sekolah`, `KTM`, `pasFoto`, `karya`, `Status`) VALUES (NULL,'$idLomba','$nama_peserta','$email_peserta','$alamat_peserta','$nohp_peserta','$lineid_peserta','$sekolah_peserta','$file_ktm','$file_pas_foto','$file_karya',0)";
                                                $insertqry = mysqli_query($conn, $insert);
                                                $output = 'Unggah Karya Berhasil';
                                                echo $output;
                                            }
                                            else{
                                                echo "File Gagal Diunggah";
                                            }
                                        }
                                        else{
                                            echo "File Gagal Diunggah";
                                        }
                                        
                                    }
                                    else {
                                        echo "File Gagal Diunggah";
                                    }
                                    
                                }
                                else{
                                    $output = 'karya gede';
                                    echo $output;
                                }
                            }
                            else{
                                $output = 'pasFoto gede';
                                echo $output;
                            }
                        }
                        else{
                            $output = 'ktm gede';
                            echo $output;
                        }
                    }
                }
                else{
                    $output = 'blm acc';
                    echo $output;
                }
            
                
            }
            else{
                $output = 'salah';
                echo $output;
            }
        }

        else{
            $output = 'peserta gada';
            echo $output;
        }

        
        
        
    }

    else{
        $output = 'Unggah Karya Gagal';
        echo $output;
    }
}

else{
    $output = 'timeout';
    echo $output;
}
?>