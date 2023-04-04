<?php
    session_start();
    include '../links.php';
    include '../connect.php';
    // $_SESSION['id_admin'] = '1';
    // $admin = $_SESSION['id_admin'];
    if (!isset($_SESSION["nrp_panitia"])) {
        header("location: http://bem.petra.ac.id/spetrakuler/oprec/admin/index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="http://bem.petra.ac.id/spetrakuler/assets/images/icon-32px.png">
    <!-- bootstrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->

    <!-- data tables -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- swal -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Spetrakuler 2021</title>

    <style>
        body,html{
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            background-image: linear-gradient(to left bottom, #fbc793, #fbf6d4, #a2d9d3, #5ed3a6, #b19a78);
        }
        .container{
            width: 100%;
            margin: 100px auto;
            
        }
        
        /* .fade {
            opacity: 0;
            -webkit-transition: opacity 1s linear;
            transition: opacity 1s linear;
        } */

    </style>
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <div style="overflow-x: auto;">
            <table style="text-align: center;" class="table table-responsive table-hover text-center" id="data-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="min-width: 7vw; max-width: 7vw">Tanggal</th>
                        <th scope="col">Jam</th>
                        <th scope="col" style="min-width: 5vw; max-width: 5vw">NRP</th>
                        <th scope="col" style="min-width: 10vw; max-width: 10vw">Nama</th>
                        <th scope="col" style="min-width: 5vw; max-width: 5vw">Pil 1</th>
                        <th scope="col" style="min-width: 5vw; max-width: 5vw">Pil 2</th>
                        <th scope="col" style="min-width: 10vw; max-width: 10vw">Data & Berkas</th>
                        <th scope="col" style="min-width: 5vw; max-width: 5vw">ID_LINE</th>
                        <th scope="col" style="min-width: 15vw; max-width: 15vw">Pewawancara</th>
                        <th scope="col" style="min-width: 5vw; max-width: 5vw">Sudah Wawancara</th>
                        <th scope="col" style="min-width: 15vw; max-width: 15vw">Lihat Hasil Wawancara</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = mysqli_query($con,"SELECT hasil_filepath, hari_tgl_wawancara, wkt_wawancara, p.nrp as nrp_pendaftar, p.nama as nama_pendaftar, d.nama as divisi1, e.nama as divisi2, motivasi, id_line, ipk, alamat_sekarang, kota_sekarang, pengalaman_panit, panit_sekarang, ju.jurusan as namaJurusan, ju.fakultas as namaFakultas, a.nama as pewawancara, komentar, link_recording, pertanyaan_1, pertanyaan_2, pertanyaan_3, filepath_skkk, filepath_transkrip FROM pendaftar p JOIN jadwal j ON j.id_jadwal = p.jadwal_wawancara JOIN divisi d ON p.divisi1 = d.id_divisi JOIN divisi e ON p.divisi2 = e.id_divisi JOIN pewawancara w ON j.id_pewawancara = w.id_pewawancara JOIN admin a ON a.id_admin = w.id_admin JOIN jurusanpcu ju ON ju.jurusan = p.jurusan WHERE j.nrp_pendaftar IS NOT NULL");
                    $no = 1;
                    while($row = mysqli_fetch_array($query))
                    { 
                        if($row[0] != NULL) {?>
                            <tr id="<?php echo $row['nrp_pendaftar']; ?>">
                                <td><?php echo $no++; ?></td>
                                <td data-target="hari_tgl_wawancara"><?php echo $row['hari_tgl_wawancara']; ?></td>
                                <td data-target="wkt_wawancara"><?php echo $row['wkt_wawancara']; ?></td>
                                <td data-target="nrp_pendaftar"><?php echo $row['nrp_pendaftar']; ?></td>
                                <td data-target="nama_pendaftar"><?php echo $row['nama_pendaftar']; ?></td>
                                <td data-target="divisi1"><?php echo $row['divisi1']; ?></td>
                                <td data-target="divisi2"><?php echo $row['divisi2']; ?></td>
                                <td><button class="btn btn-danger btn-sm text-white" data-role="viewBerkas" data-nrp="<?= $row['nrp_pendaftar']; ?>" data-ipk="<?= $row['ipk']; ?>" data-alamat="<?= $row['alamat_sekarang']; ?>" data-kota="<?= $row['kota_sekarang']; ?>" data-pengalaman="<?= $row['pengalaman_panit']; ?>" data-motivasi="<?= $row['motivasi']; ?>" data-jurusan="<?= $row['namaJurusan']; ?>" data-fakultas="<?= $row['namaFakultas']; ?>" data-panit="<?= $row['panit_sekarang']; ?>" data-pertanyaan1="<?= $row['pertanyaan_1']; ?>" data-pertanyaan2="<?= $row['pertanyaan_2']; ?>" data-pertanyaan3="<?= $row['pertanyaan_3']; ?>" data-skkk="<?= $row['filepath_skkk']; ?>" data-transkrip="<?= $row['filepath_transkrip']; ?>" style="font-weight: 600;">&nbsp;View Berkas</button></td>
                                <td data-target="id_line"> <a class="btn btn-warning" href="https://line.me/ti/p/~<?php echo $row['id_line']; ?>" target="_blank" role="button"><?php echo $row['id_line']; ?></a></td>
                                <td data-target="pewawancara"><?php echo $row['pewawancara']; ?></td>
                                <td><img src="http://bem.petra.ac.id/spetrakuler/assets/images/check.png" style="min-width: 2vw; max-width: 2vw"></td>
                                <td><button class="btn btn-success btn-sm text-white" id="hasil<?= $row['nrp_pendaftar']; ?>" data-role = "viewHasil" data-nrp="<?= $row['nrp_pendaftar']; ?>" data-komentar="<?= $row['komentar']; ?>" data-hasil="<?= $row['hasil_filepath']; ?>" data-link="<?= $row['link_recording']; ?>" style="font-weight: 600;">&nbsp;View Hasil Wawancara</button></td>
                            </tr>
                        <?php }
                        else{ ?>
                            <tr id="<?php echo $row['nrp_pendaftar']; ?>">
                                <td><?php echo $no++; ?></td>
                                <td data-target="hari_tgl_wawancara"><?php echo $row['hari_tgl_wawancara']; ?></td>
                                <td data-target="wkt_wawancara"><?php echo $row['wkt_wawancara']; ?></td>
                                <td data-target="nrp_pendaftar"><?php echo $row['nrp_pendaftar']; ?></td>
                                <td data-target="nama_pendaftar"><?php echo $row['nama_pendaftar']; ?></td>
                                <td data-target="divisi1"><?php echo $row['divisi1']; ?></td>
                                <td data-target="divisi2"><?php echo $row['divisi2']; ?></td>
                                <td><button class="btn btn-danger btn-sm text-white" data-role="viewBerkas" data-nrp="<?= $row['nrp_pendaftar']; ?>" data-ipk="<?= $row['ipk']; ?>" data-alamat="<?= $row['alamat_sekarang']; ?>" data-kota="<?= $row['kota_sekarang']; ?>" data-pengalaman="<?= $row['pengalaman_panit']; ?>" data-motivasi="<?= $row['motivasi']; ?>" data-jurusan="<?= $row['namaJurusan']; ?>" data-fakultas="<?= $row['namaFakultas']; ?>" data-panit="<?= $row['panit_sekarang']; ?>" data-pertanyaan1="<?= $row['pertanyaan_1']; ?>" data-pertanyaan2="<?= $row['pertanyaan_2']; ?>" data-pertanyaan3="<?= $row['pertanyaan_3']; ?>" data-skkk="<?= $row['filepath_skkk']; ?>" data-transkrip="<?= $row['filepath_transkrip']; ?>" style="font-weight: 600;">&nbsp;View Berkas</button></td>
                                <td data-target="id_line"> <a class="btn btn-warning" href="https://line.me/ti/p/~<?php echo $row['id_line']; ?>" target="_blank" role="button"><?php echo $row['id_line']; ?></a></td>
                                <td data-target="pewawancara"><?php echo $row['pewawancara']; ?></td>
                                <td><img src="http://bem.petra.ac.id/spetrakuler/assets/images/uncheck.png" style="min-width: 1.5vw; max-width: 1.5vw"></td>
                                <td><button class="btn btn-success btn-sm text-white" id="hasil<?= $row['nrp_pendaftar']; ?>" data-role = "viewHasil" data-nrp="<?= $row['nrp_pendaftar']; ?>" data-komentar="<?= $row['komentar']; ?>" data-hasil="<?= $row['hasil_filepath']; ?>" data-link="<?= $row['link_recording']; ?>" style="font-weight: 600;" disabled>&nbsp;Belum Upload</button></td>
                            </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
        
       
        
        <!-- Modal view berkas -->
        <div class="modal fade" id="modalView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Berkas & Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row mb-3 mx-3">
                            <div class="col-12 ">
                                <label  class="form-label">Nama Pendaftar</label>
                                <input class="form-control" id="namaDaftar" type="text" placeholder="" aria-label="Disabled input example" disabled>
                            </div>
                        </div> 

                        <div class="row mb-3 mx-3">
                            <div class="col-6">
                                <label  class="form-label">NRP Pendaftar</label>
                                <input class="form-control" id="nrpDaftar" type="text" placeholder="" aria-label="Disabled input example" disabled>
                            </div>

                            <div class="col-6">
                                <label for="ipk" class="form-label">IPK</label>
                                <input class="form-control" id="ipk" type="text" placeholder="" aria-label="Disabled input example" disabled>
                            </div>
                        </div>

                        <div class="row mb-3 mx-3">
                            <div class="col-8">
                                <label for="fak" class="form-label">Fakultas - Jurusan</label>
                                <input class="form-control" id="fak" type="text" placeholder="" aria-label="Disabled input example" disabled>
                            </div>

                            <div class="col-4">
                                <label for="idline" class="form-label">ID Line</label>
                                <input class="form-control" id="idline" type="text" placeholder="" aria-label="Disabled input example" disabled>
                            </div>

                            
                        </div>

                        <div class="row mb-3 mx-3">
                            <div class="col-8">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input class="form-control" id="alamat" type="text" placeholder="" aria-label="Disabled input example" disabled>
                            </div>

                            <div class="col-4">
                                <label for="kota" class="form-label">Kota</label>
                                <input class="form-control" id="kota" type="text" placeholder="" aria-label="Disabled input example" disabled>
                            </div>
                        </div>

                        <div class="row mb-3 mx-3">
                            <div class="col-6">
                                <label for="pil1" class="form-label">Pilihan Divisi 1</label>
                                <input class="form-control" id="pil1" type="text" placeholder="" aria-label="Disabled input example" disabled>
                            </div>

                            <div class="col-6">
                                <label for="pil2" class="form-label">Pilihan Divisi 2</label>
                                <input class="form-control" id="pil2" type="text" placeholder="" aria-label="Disabled input example" disabled>
                            </div>
                        </div>

                        <div class="row mb-3 mx-3">
                            <div class="col-12">
                                <label for="pengalaman" class="form-label">Pengalaman Kepanitiaan atau Organisasi</label>
                                <textarea class="form-control" id="pengalaman" type="text" placeholder="" aria-label="Disabled input example" disabled></textarea>
                            </div>
                        </div>

                        <div class="row mb-3 mx-3">
                            <div class="col-12">
                                <label for="kepanitiaan" class="form-label">Kepanitiaan atau Organisasi Saat Ini</label>
                                <textarea class="form-control" id="kepanitiaan" type="text" placeholder="" aria-label="Disabled input example" disabled></textarea>
                            </div>
                        </div>

                        <div class="row mb-3 mx-3">
                            <div class="col-12">
                                <label for="motivasi" class="form-label">Motivasi</label>
                                <textarea class="form-control" id="motivasi" type="text" placeholder="" aria-label="Disabled input example" disabled></textarea>
                            </div>
                        </div>

                        <div class="row mb-3 mx-3">
                            <div class="col-12">
                                <label for="pert1" class="form-label">Pertanyaan 1: Apakah Anda bersedia untuk melakukan paid promote, PO, dan garage sale ?</label>
                                <textarea class="form-control" id="pert1" type="text" placeholder="" aria-label="Disabled input example" disabled></textarea>
                            </div>
                        </div>

                        <div class="row mb-3 mx-3">
                            <div class="col-12">
                                <label for="pert2" class="form-label">Pertanyaan 2: Apakah Anda bersedia untuk membayar kontribusi panitia ? (kontribusi ini diluar baju kepanitiaan) </label>
                                <textarea class="form-control" id="pert2" type="text" placeholder="" aria-label="Disabled input example" disabled></textarea>
                            </div>
                        </div>

                        <div class="row mb-3 mx-3">
                            <div class="col-12">
                                <label for="pert3" class="form-label">Pertanyaan 3: Apakah Anda memiliki kenalan pihak sponsor ? </label>
                                <textarea class="form-control" id="pert3" type="text" placeholder="" aria-label="Disabled input example" disabled></textarea>
                            </div>
                        </div>

                        <div class="row mb-3 mx-3">
                            <div class="col-6">
                                <label class="form-label">SKKK</label> 
                                <a id="btnSKKK" class="btn btn-outline-light" href="" target="_blank" role="button"><img id="imgSKKK" src="" style="width: 50%;"></a>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Transkrip</label>
                                <a id="btnTranskrip" class="btn btn-outline-light" href="" target="_blank" role="button"><img id="imgTranskrip" src="" style="width: 50%;"></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal view hasil -->
        <div class="modal fade" id="modalHasil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hasil Wawancara</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="pdf" class="form-label">Hasil Pdf Wawancara</label>
                            <!-- open file pdf -->
                            <div class="row">
                                <div class="col-9">
                                    <input class="form-control" id="pdf" type="text" placeholder="" aria-label="Disabled input example" disabled>
                                </div>
                                <div class="col-3">
                                    <button type="button" id="linkPdf" href="#" role="button" class="btn btn-primary">Open File</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- open recording -->
                        <div class="mb-3">
                            <label for="linkRec" class="form-label">Link Recording</label>
                            <div class="row">
                                <div class="col-9">
                                    <input class="form-control" id="linkRec" type="text" placeholder="" aria-label="Disabled input example" disabled>
                                </div>
                                <div class="col-3">
                                    <button type="button" id="rec" href="#" role="button" class="btn btn-primary">Open Rec</button>
                                </div>
                            
                            </div>      
                        </div>

                        <div class="mb-3">
                            <label for="komen" class="form-label">Komentar</label>
                            <textarea class="form-control" id="komen" type="text" placeholder="" aria-label="Disabled input example" disabled></textarea>
                        </div>

                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div>

    </div>

    
    <script>
        $(document).ready(function() {
            $('#data-table').DataTable();

            

            // $('th').width('50%');
            $(document).on("click", "button[data-role=viewHasil]", function(){
                var nrp = $(this).data('nrp');
                var hasil = $(this).data('hasil');
                var link = $(this).data('link');
                var komentar = $(this).data('komentar');
                var nama_pendaftar = $('#'+nrp).children('td[data-target=nama_pendaftar]').text();
                $('#namaP').val(nama_pendaftar);
                $('#nrpP').val(nrp);
                $('#pdf').val(hasil);
                $('#linkRec').val(link);
                $('#komen').val(komentar);
                
                // alert(hasil+' '+link+' '+komentar);
                $('#modalHasil').modal('toggle');
                
            })

            $('#linkPdf').click(function(){
                var file = $('#pdf').val();
                window.open(file, "_blank");
            })

            $('#rec').click(function(){
                var recording = $('#linkRec').val();
                window.open(recording, "_blank");
            })

                
            
            $(document).on("click", "button[data-role=viewBerkas]", function(){
                var nrp = $(this).data('nrp');
                var ipk = $(this).data('ipk');
                var alamat = $(this).data('alamat');
                var kota = $(this).data('kota');
                var panitia = $(this).data('panit');
                var pengalaman = $(this).data('pengalaman');
                var motivasi = $(this).data('motivasi');
                var jurusan = $(this).data('jurusan');
                var fakultas = $(this).data('fakultas');
                var divisi1 = $('#'+nrp).children('td[data-target=divisi1]').text();
                var divisi2 = $('#'+nrp).children('td[data-target=divisi2]').text();
                var idLine = $('#'+nrp).children('td[data-target=id_line]').text();
                var nama_pendaftar = $('#'+nrp).children('td[data-target=nama_pendaftar]').text();
                var pertanyaan1 = $(this).data('pertanyaan1');
                var pertanyaan2 = $(this).data('pertanyaan2');
                var pertanyaan3 = $(this).data('pertanyaan3');
                var linkSKKK = $(this).data('skkk');
                var linkTranskrip = $(this).data('transkrip');

                $('#namaDaftar').val(nama_pendaftar);
                $('#nrpDaftar').val(nrp);
                $('#ipk').val(ipk);
                $('#idline').val(idLine);
                $('#fak').val(fakultas+' - '+jurusan)
                $('#alamat').val(alamat);
                $('#kota').val(kota);
                $('#pil1').val(divisi1);
                $('#pil2').val(divisi2);
                $('#motivasi').val(motivasi);
                $('#pengalaman').val(pengalaman);
                $('#kepanitiaan').val(panitia);
                $('#pert1').val(pertanyaan1);
                $('#pert2').val(pertanyaan2);
                $('#pert3').val(pertanyaan3);
                $('#imgSKKK').attr("src",linkSKKK);
                $('#btnSKKK').attr("href",linkSKKK);
                $('#imgTranskrip').attr("src",linkTranskrip);
                $('#btnTranskrip').attr("href",linkTranskrip);
                $('#modalView').modal('toggle');
            })
                
            
        } );

        
        
        

    </script>
</body>
</html>