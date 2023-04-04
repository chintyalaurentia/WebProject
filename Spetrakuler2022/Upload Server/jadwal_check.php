<?php 
include '../connect.php';

$output = '';
$nrp = $_POST['nrp'];


$search = "SELECT * FROM jadwal WHERE nrp_pendaftar = '$nrp' AND hasil_filepath != ''";
$check1 = mysqli_query($con,$search);
$check = mysqli_num_rows($check1);
// $output = $check;
// echo $output;
if($check > 0) {
    $output = 'ada';
    echo $output;
    
}


else{
    $output = 'ga ada';
    echo $output;
    
}
?>