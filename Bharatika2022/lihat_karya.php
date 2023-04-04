<?php 
    include '../connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><!-- LINK JQUERY-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

    <!-- data tables -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Karya</title>

    <style>
        body,html{
            margin: 0;
            padding: 0;
            background-color: whitesmoke;
        }

        .container{
            width: 100%;
            margin: 100px auto;
        }

    </style>

</head>
<body>
    <div class="container">
        <div style="overflow-x: auto;">
            <table style="text-align: center;" class="table table-responsive table-hover text-center" id="data-table">
                <thead>
                    <tr>
                        <th scope="col" style="min-width: 2vw; max-width: 2vw">No.</th>
                        <th scope="col" style="min-width: 7vw; max-width: 7vw">Nama Peserta</th>
                        <th scope="col" style="min-width: 10vw; max-width: 10vw;">Lomba</th>
                        <th scope="col" style="min-width: 10vw; max-width: 10vw;">Karya</th>
                        <th scope="col">Status</th>
                        <th scope="col" style="min-width: 5vw; max-width: 5vw">Approve/Reject</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = mysqli_query($conn,"SELECT status, u.id_lomba, nama_lengkap, karya, id_lomba, lomba, karya FROM upload_karya u JOIN coba_lomba l ON u.id_lomba = l.id");
                    $no = 1;
                    while($row = mysqli_fetch_array($query))
                     { 
                        if($row[0] == 0){?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nama_lengkap']; ?></td>
                            <td><?php echo $row['lomba']; ?></td>
                            <td><a href="download_karya.php?file=<?php echo basename($row['karya']); ?>" type="button" class="btn btn-success" style="font-size: 14px;"  data-role= "down_karya" data-karya="<?php echo $row['karya']; ?>">Download Karya</a></td>
                            <td id="<?php echo $row['nama_lengkap']; ?>"><img src="http://bharatikafest.petra.ac.id/lalala2022lalala/asset/images/uncheck.png" style="min-width: 1.5vw; max-width: 1.5vw"></td>
                            <td><button id="editBtn<?= $row['nama_lengkap']; ?>" data-role = "editButton" type="button" class="btn btn-warning" data-nama="<?php echo $row['nama_lengkap']; ?>" data-lomba="<?php echo $row['lomba']; ?>">Edit</button></td>
                            
                        </tr>
                        <?php }
                        else{ ?>
                        <tr>
                        <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nama_lengkap']; ?></td>
                            <td><?php echo $row['lomba']; ?></td>
                            <td><a href="download_karya.php?file=<?php echo basename($row['karya']); ?>" type="button" class="btn btn-success" style="font-size: 14px;"  data-role= "down_karya" data-karya="<?php echo $row['karya']; ?>">Download Karya</a></td>
                            <td id="<?php echo $row['nama_lengkap']; ?>"><img src="http://bharatikafest.petra.ac.id/lalala2022lalala/asset/images/check.png" style="min-width: 1.5vw; max-width: 1.5vw"></td>
                            <td><button id="editBtn<?= $row['nama_lengkap']; ?>" data-role = "editButton" type="button" class="btn btn-warning disabled">Edit</button></td>
                            
                        </tr>
                        
                        
                    <?php }} ?>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="apre" id="flexRadioDefault1" value=1>
                        <label class="form-check-label" for="flexRadioDefault1"> Approve </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="apre" id="flexRadioDefault2" checked value=0>
                        <label class="form-check-label" for="flexRadioDefault2"> Reject </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="saveBtn" type="button" class="btn btn-primary">Save Changes</button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#data-table').DataTable();

            $(document).on("click", "button[data-role=editButton]", function(){
                var nama = $(this).data("nama");
                var lomba = $(this).data("lomba");
                $('#modalEdit').modal('toggle');
                $('#modalTitle').text(nama + " - " + lomba);
            })

            $('#saveBtn').click(function(){
                var arr = $('#modalTitle').text().split(" - ");
                var nama = arr[0];
                var lomba = arr[1];
                var radioValue = $("input[name='apre']:checked").val();
                $.ajax({
                    url: 'status.php',
                    method: 'POST',
                    data: {nama: nama, lomba: lomba, radioValue: radioValue},
                    success: function(res){
                        if(res==1){
                            Swal.fire({
                                    position: 'top',
                                    icon: 'success',
                                    title: 'Karya Berhasil di Approve',
                                    showConfirmButton: false,
                                    timer: 1500
                            });
                            $('#modalEdit').modal('hide');
                            $('#'+nama).replaceWith("<img src='http://bharatikafest.petra.ac.id/lalala2022lalala/asset/images/check.png' style='min-width: 3vw; max-width: 3vw'>");
                            $('#editBtn'+nama).prop('disabled', true);
                        }
                        else if(res==0){
                            alert('Karya Rejected');
                            $('#modalEdit').modal('hide');
                        }
                        else if(res=="fail"){
                            alert('Gagal di verifikasi');
                            $('#modalEdit').modal('hide');
                        }
                        else{
                            alert("Data tidak ada");
                            $('#modalEdit').modal('hide');
                        }
                    }
                })
            })


        })
            
        
    </script>

</body>
</html>