<?php 
include '../connect.php';

$output = '';
    if(isset($_POST['radioValue'])){
        // $output = 'helo';
        $radValue = $_POST['radioValue'];
        $nama = $_POST['nama'];
        $lomba = $_POST['lomba'];

        $check = "SELECT * FROM upload_karya u JOIN coba_lomba l ON u.id_lomba = l.id WHERE nama_lengkap = '$nama' AND l.lomba = '$lomba'";
        $checkQuery = mysqli_query($conn, $check);
        $checkValue = mysqli_num_rows($checkQuery);

        if($checkValue > 0){
            // $output = 'ada';
            // echo $output;
            if($radValue == 1){
                $query = "UPDATE upload_karya u JOIN coba_lomba l ON u.id_lomba = l.id SET status = $radValue WHERE nama_lengkap = '$nama' AND l.lomba = '$lomba'";
                $updateQuery = mysqli_query($conn, $query);
                if($updateQuery){
                    $output = '1';
                    echo $output;
                }
                else{
                    $output = 'fail';
                    echo $output;
                }
            }
            else if($radValue == 0){
                $output = '0';
                echo $output;
            }
            
            

        }
        else{
            $output = 'gaada';
            echo $output;
        }
        // 
    }

?>