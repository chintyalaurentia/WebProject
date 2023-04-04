<?php 
    session_start();
    include 'connect.php';

    if(!isset($_SESSION['mail'])){
        $_SESSION['stat'] = '0';
        header("Location: http://bharatikafest.petra.ac.id/2022/main/index.php");
        exit();
    }
//  phpinfo(); 
    $kategori = mysqli_query($conn, "SELECT * FROM coba_kategori_lomba");
    $lomba = mysqli_query($conn,"SELECT * FROM coba_kategori_lomba k JOIN coba_lomba l ON k.id = l.id_kategori");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="description" content="Bharatika Creative Design Festival pertama kali dibentuk oleh Fakultas Seni dan Desain Universitas Kristen Petra sejak tahun 2016 sebagai salah satu bentuk apresiasi terhadap karya insan muda kreatif. Secara keseluruhan, Bharatika dibentuk untuk menjadi wadah bagi insan muda kreatif untuk menyalurkan bakat, menambah wawasan, dan mengekspresikan diri terutama pada bidang seni dan desain. Kegiatan tersebut memiliki berbagai rangkaian acara, seperti pameran, talkshow, workshop, dan lomba. Bharatika memiliki empat kategori lomba, antara lain Tirta yang berarti air (Desain Komunikasi Visual), Agni yang berarti api (Desain Interior), Bayu yang berarti angin (Desain Produk), dan Buana yang berarti tanah (SMA).">

        <!-- Google / Search Engine Tags -->
        <meta itemprop="name" content="Bharatika 2022 | UK Petra">
        <meta itemprop="description" content="Bharatika Creative Design Festival pertama kali dibentuk oleh Fakultas Seni dan Desain Universitas Kristen Petra sejak tahun 2016 sebagai salah satu bentuk apresiasi terhadap karya insan muda kreatif. Secara keseluruhan, Bharatika dibentuk untuk menjadi wadah bagi insan muda kreatif untuk menyalurkan bakat, menambah wawasan, dan mengekspresikan diri terutama pada bidang seni dan desain. Kegiatan tersebut memiliki berbagai rangkaian acara, seperti pameran, talkshow, workshop, dan lomba. Bharatika memiliki empat kategori lomba, antara lain Tirta yang berarti air (Desain Komunikasi Visual), Agni yang berarti api (Desain Interior), Bayu yang berarti angin (Desain Produk), dan Buana yang berarti tanah (SMA).">
        <meta itemprop="image" content="http://bharatikafest.petra.ac.id/2022/main/assets/pngImg/Logokolaborasik2.png">

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://bharatikafest.petra.ac.id/2022/main/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Bharatika 2022 | UK Petra">
        <meta property="og:description" content="Bharatika Creative Design Festival pertama kali dibentuk oleh Fakultas Seni dan Desain Universitas Kristen Petra sejak tahun 2016 sebagai salah satu bentuk apresiasi terhadap karya insan muda kreatif. Secara keseluruhan, Bharatika dibentuk untuk menjadi wadah bagi insan muda kreatif untuk menyalurkan bakat, menambah wawasan, dan mengekspresikan diri terutama pada bidang seni dan desain. Kegiatan tersebut memiliki berbagai rangkaian acara, seperti pameran, talkshow, workshop, dan lomba. Bharatika memiliki empat kategori lomba, antara lain Tirta yang berarti air (Desain Komunikasi Visual), Agni yang berarti api (Desain Interior), Bayu yang berarti angin (Desain Produk), dan Buana yang berarti tanah (SMA).">
        <meta property="og:image" content="http://bharatikafest.petra.ac.id/2022/main/assets/pngImg/Logokolaborasik2.png">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Bharatika 2022 | UK Petra">
        <meta name="twitter:description" content="Bharatika Creative Design Festival pertama kali dibentuk oleh Fakultas Seni dan Desain Universitas Kristen Petra sejak tahun 2016 sebagai salah satu bentuk apresiasi terhadap karya insan muda kreatif. Secara keseluruhan, Bharatika dibentuk untuk menjadi wadah bagi insan muda kreatif untuk menyalurkan bakat, menambah wawasan, dan mengekspresikan diri terutama pada bidang seni dan desain. Kegiatan tersebut memiliki berbagai rangkaian acara, seperti pameran, talkshow, workshop, dan lomba. Bharatika memiliki empat kategori lomba, antara lain Tirta yang berarti air (Desain Komunikasi Visual), Agni yang berarti api (Desain Interior), Bayu yang berarti angin (Desain Produk), dan Buana yang berarti tanah (SMA).">
        <meta name="twitter:image" content="http://bharatikafest.petra.ac.id/2022/main/assets/pngImg/Logokolaborasik2.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    
    <!-- swal -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Logo -->
    <link rel="icon" href="http://bharatikafest.petra.ac.id/2022/favicon.ico">
    
    <title>Upload Karya</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-image: url('asset/images/bg-upload.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
            overflow: overlay;
        }

        body:after{
            content:"";
            position:fixed; /* stretch a fixed position to the whole screen */
            top:0;
            height:100vh; /* fix for mobile browser address bar appearing disappearing */
            left:0;
            right:0;
            z-index:-1; /* needed to keep in the background */
            background: url('asset/images/bg-upload.png') center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        ::-webkit-scrollbar {
            width: 5px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #fff;
            border-radius: 20px;
        }

        .title{
            text-align: center;
            margin: 40px auto;
            text-transform: uppercase;
        }
        
        .container{
            margin-top: -70px;
            margin-bottom: 5rem;
            /* top: -50%; */
            position: relative;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            /* margin-left: auto;
            margin-right: auto; */
            z-index:1;
            padding: 2rem;
            border: 0px solid #fff;
            border-radius: 5px;
            width: 50%;
            background-image: linear-gradient(to bottom right, rgba(255,255,255, 0.3) , transparent);
        }

        .inputForm{
            margin: 15px auto;
        }

        input, select{
            background-color: transparent !important;
        }
        
        .btnSubmit{
            display: inline-block;
            margin: 10px auto;
            width: 20%;
			border: 1px solid #fff;
			color: #fff;
			font-size: 15px;
			font-weight: bold;
			text-transform: uppercase;
			text-align: center;
			text-decoration: none;
			line-height: 20px;
			box-sizing: border-box;
            padding: 5px 5px 5px 5px;
			border-radius: 5px;
			background-color: #f7b21a;
			outline: none;
			transition: all ease 0.3s;
		}

        .btnSubmit:hover{
            box-shadow: 0px 0px 15px #fff;
            border: 2px solid #fff;
            color: #f7b21a;
            background: #fff;
        }

        #karya::file-selector-button, #ktm::file-selector-button, #pasFoto::file-selector-button{
            background: #da4327;
            color: white;
        }


        #gmbr-upload, #gmbr-karya, #gmbr-seru{
            /* display: block; */
            position: relative;
        }
        #gmbr-upload{
            width: 95%;
            left: 15%;
        }

        #gmbr-karya{
            width: 95%;
            left: 15%;
        }

        #gmbr-seru{
            width: 80%;
            /* left: 5%; */
            transform: rotate(30deg);
            top: 30%;
        }

        #gmbr-burger{
            width: 30%;
            position: fixed;
            right: 0%;
            top: 40%;
            transform: rotate(-10deg);
        }

        #gmbr-plane{
            width: 35%;
            position: fixed;
            top: 30%;
            left: 1%;
        }

        #gmbr-boom{
            width: 10%;
            position: fixed;
            top: 70%;
            left: 10%;
            transform: rotate(25deg);
        }

        @media only screen and (max-width:992px) {
            .container{
                margin-top: -20px;
                width: 60%;
            }
           
        }

        @media only screen and (max-width:576px) {
            body{
                background-image: url('asset/images/bg-upload-hp.png');
            }
            body:after{
                content:"";
                position:fixed; /* stretch a fixed position to the whole screen */
                top:0;
                height:100vh; /* fix for mobile browser address bar appearing disappearing */
                left:0;
                right:0;
                z-index:-1; /* needed to keep in the background */
                background: url('asset/images/bg-upload-hp.png') center center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .container{
                margin-top: -20px;
                width: 60%;
            }
            #gmbr-upload{
                width: 80%;
                transform: rotate(10deg);
                left: 5%;
            }

            #gmbr-karya{
                width: 70%;
                left: 5%;
                top: -20%;
                transform: rotate(-5deg);
            }

            #gmbr-seru{
                width: 30%;
                top: -120%;
                left: 65%;
                transform: rotate(30deg);
            }
            
            #gmbr-burger{
                visibility: hidden;
            }

            #gmbr-plane{
                visibility: hidden;
            }

            #gmbr-boom{
                visibility: hidden;
            }
            .container{
                margin-top: -7rem;
                width: 80%;
            }
            .btnSubmit{
                width: 40%;
		    }
           
        }

       


        
    </style>
</head>
<body>
    <?php 
        date_default_timezone_set('Asia/Jakarta');
        $timenow = date('Y-m-d:H:i'); 
        if($timenow <= "2022-04-21:20:05") {
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <img id="gmbr-upload" src="http://bharatikafest.petra.ac.id/2022/asset/images/upload.png"></img>

            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
                <img id="gmbr-karya" src="http://bharatikafest.petra.ac.id/2022/asset/images/karya.png"></img>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <img id="gmbr-seru" src="http://bharatikafest.petra.ac.id/2022/asset/images/tanda-seru.png"></img>

            </div>
        </div>
    </div>
    
    

    <div class="container">
        <!-- <div class="row">
            <h1 class="title">Unggah Karya Anda </h1>
        </div> -->
        
        <div class="row inputForm">
            <div class="col-lg-3 col-sm-12">
                <label>Lomba yang diikuti</label>
            </div>

            <div class="col-lg-9 col-sm-12">
                <select class="form-select" aria-label="Default select example" id="lomba">
                    <option selected disabled value="">Lomba yang sudah dibayar</option>
                    <?php while ($row = mysqli_fetch_assoc($lomba)) : ?>
                        <option value="<?php echo $row["id"] ?>"> <?= $row["lomba"]; ?>
                        </option>
                    <?php endwhile; ?>
                  </select>
            </div>
        </div>

        <div class="row inputForm">
            <div class="col-lg-3 col-sm-12">
                <label>Nama Lengkap</label>
            </div>

            <div class="col-lg-9 col-sm-12">
                <input class="form-control" type="text" aria-label="default input example" id="nama">
            </div>
        </div>

        <div class="row inputForm">
            <div class="col-lg-3 col-sm-12">
                <label>Email</label>
            </div>

            <div class="col-lg-9 col-sm-12">
                <input type="email" class="form-control" id="email">
            </div>
        </div>

        <div class="row inputForm">
            <div class="col-lg-3 col-sm-12">
                <label>Alamat rumah</label>
            </div>

            <div class="col-lg-9 col-sm-12">
                <input type="text" class="form-control" id="alamat">
            </div>
        </div>

        <div class="row inputForm">
            <div class="col-lg-3 col-sm-12">
                <label>No. HP</label>
            </div>

            <div class="col-lg-9 col-sm-12">
                <input class="form-control" type="tel" aria-label="default input example" id="noHP">
            </div>
        </div>

        <div class="row inputForm">
            <div class="col-lg-3 col-sm-12">
                <label>Line ID</label>
            </div>

            <div class="col-lg-9 col-sm-12">
                <input class="form-control" type="text" aria-label="default input example" id="lineID">
            </div>
        </div>

        <div class="row inputForm">
            <div class="col-lg-3 col-sm-12">
                <label>Asal Sekolah/Universitas</label>
            </div>

            <div class="col-lg-9 col-sm-12">
                <input class="form-control" type="text" aria-label="default input example" id="sekolah">
            </div>
        </div>

        <div class="row inputForm">
            <div class="col-lg-3 col-sm-12">
                <label>Foto/Scan KTM (Max 2mb)</label>
            </div>

            <div class="col-lg-9 col-sm-12">
                <input class="form-control" type="file" id="ktm" accept=".jpg">
            </div>
        </div>

        <div class="row inputForm">
            <div class="col-lg-3 col-sm-12">
                <label>Pas Foto 3x4 (Max 2mb)</label>
            </div>

            <div class="col-lg-9 col-sm-12">
                <input class="form-control" type="file" id="pasFoto" accept=".jpg">
            </div>
        </div>

        <div class="row inputForm">
            <div class="col-lg-3 col-sm-12">
                <label>Unggah Karya</label>
            </div>

            <div class="col-lg-9 col-sm-12">
                <input class="form-control" type="file" id="karya" accept=".zip">
            </div>
        </div>

        <p>Notes : Untuk peserta team, KTM dan Pas foto anggota dijadikan satu image menggunakan grid.</p>

        <div style="text-align: right; margin-top: 15px;" class="row ">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12 ">
                <!-- <button style="text-align: center; margin: 20px auto;align-items: center;">helo</button> -->
                <button id="submit" class="btnSubmit"><p class="submitP" style="margin: 5px auto; transition: all ease 0.3s;">Submit</p></button>
            </div>

        </div>
    </div>
    
    <img id="gmbr-plane" src="http://bharatikafest.petra.ac.id/2022/asset/images/plane.png"></img>
    <img id="gmbr-boom" src="http://bharatikafest.petra.ac.id/2022/asset/images/boom.png"></img>
    <img id="gmbr-burger" src="http://bharatikafest.petra.ac.id/2022/asset/images/burger.png"></img>
    <?php } 
    
    else{?>
        <div class="container" align="center" style="margin-top:15em;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 break" >
                    <div style=" padding: 5%;">
                        <h2>Mohon maaf pengumpulan karya sudah ditutup. <br> Terima kasih atas partisipasinya😊</h2>
                    </div>
                </div>
            </div>
        </div>
        <img id="gmbr-plane" src="http://bharatikafest.petra.ac.id/2022/asset/images/plane.png"></img>
        <img id="gmbr-boom" src="http://bharatikafest.petra.ac.id/2022/asset/images/boom.png"></img>
        <img id="gmbr-burger" src="http://bharatikafest.petra.ac.id/2022/asset/images/burger.png"></img>
    <?php } ?>

    <script>
        $(document).ready(function(){
            $("#submit").click(function(){
                if($('#lomba').val() != "" && $('#nama').val() != "" && $('#email').val() != "" && $('#alamat').val() != "" && $('#noHP').val() != "" && $('#lineID').val() != "" && $("#sekolah").val() != "" && $('#ktm')[0].files.length !== 0 && $('#pasFoto')[0].files.length !== 0 && $('#karya')[0].files.length !== 0){
                    // $(".submitP").fadeOut("fast");
                    $('.submitP').remove();
                    $(this).append("<div style='padding: 5px 5px 5px 5px;'><span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span><span class='sr-only'>Uploading...</span></div>");
                    $('#submit').prop('disabled', true);
                    // alert("hiii");
                    var lomba = $('#lomba').val();
                    var nama = $('#nama').val();
                    var email = $('#email').val();
                    var alamat = $('#alamat').val();
                    var nohp = $('#noHP').val();
                    var lineid = $('#lineID').val();
                    var sekolah = $("#sekolah").val();
                    var ktm = $('#ktm')[0].files;
                    var pasFoto = $('#pasFoto')[0].files;
                    var karya = $('#karya')[0].files;

                    let fd = new FormData();
                    fd.append("ktm", ktm[0]);
                    fd.append("pasFoto", pasFoto[0]);
                    fd.append("karya",karya[0]);
                    fd.append("lomba",lomba);
                    fd.append("nama",nama);
                    fd.append("email",email);
                    fd.append("alamat",alamat);
                    fd.append("nohp",nohp);
                    fd.append("lineid",lineid);
                    fd.append("sekolah",sekolah);
                    $.ajax({
                        url: "upload_karya_action.php",
                        method: "POST",
                        data: fd,
                        processData: false,
                                        contentType: false,
                        success: function (res) {
                            // alert(res);
                            if(res == 'Unggah Karya Berhasil'){
                                setTimeout(function(){
                                    $('#submit').empty();
                                    $("#submit").append("<p class='submitP' style='margin: 5px auto;'>Submit</p>");
                                    $('#submit').prop('disabled', false);
                                }, 1000);

                                // setTimeout(function(){
                                //     $("#submit").removeClass("active");
                                //     $("#submit").removeClass("success");
                                // }, 5000);

                                Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Karya berhasil diunggah!',
                                showConfirmButton: false,
                                timer: 2000
                                })

                                $('#lomba').val("");
                                $('#nama').val("");
                                $('#email').val("");
                                $('#alamat').val("");
                                $('#noHP').val("");
                                $('#lineID').val("");
                                $("#sekolah").val("");
                                $('#ktm').val("");
                                $('#pasFoto').val("");
                                $('#karya').val("");
                            }
                            else if(res=='blm acc'){
                                setTimeout(function(){
                                    $('#submit').empty();
                                    $("#submit").append("<p class='submitP' style='margin: 5px auto;'>Submit</p>");
                                    $('#submit').prop('disabled', false);
                                }, 1000);

                                Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Anda belum di approve atau di reject'
                                })

                                $('#lomba').val("");
                                $('#nama').val("");
                                $('#email').val("");
                                $('#alamat').val("");
                                $('#noHP').val("");
                                $('#lineID').val("");
                                $("#sekolah").val("");
                                $('#ktm').val("");
                                $('#pasFoto').val("");
                                $('#karya').val("");
                            }
                            else if(res=='ktm gede'){
                                setTimeout(function(){
                                    $('#submit').empty();
                                    $("#submit").append("<p class='submitP' style='margin: 5px auto;'>Submit</p>");
                                    $('#submit').prop('disabled', false);
                                }, 1000);

                                Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'File KTM terlalu besar'
                                })

                                $('#lomba').val("");
                                $('#nama').val("");
                                $('#email').val("");
                                $('#alamat').val("");
                                $('#noHP').val("");
                                $('#lineID').val("");
                                $("#sekolah").val("");
                                $('#ktm').val("");
                                $('#pasFoto').val("");
                                $('#karya').val("");
                            }
                            else if(res=='pasFoto gede'){
                                setTimeout(function(){
                                    $('#submit').empty();
                                    $("#submit").append("<p class='submitP' style='margin: 5px auto;'>Submit</p>");
                                    $('#submit').prop('disabled', false);
                                }, 1000);

                                Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'File Pas Foto terlalu besar'
                                })

                                $('#lomba').val("");
                                $('#nama').val("");
                                $('#email').val("");
                                $('#alamat').val("");
                                $('#noHP').val("");
                                $('#lineID').val("");
                                $("#sekolah").val("");
                                $('#ktm').val("");
                                $('#pasFoto').val("");
                                $('#karya').val("");
                            }
                            else if(res=='karya gede'){
                                setTimeout(function(){
                                    $('#submit').empty();
                                    $("#submit").append("<p class='submitP' style='margin: 5px auto;'>Submit</p>");
                                    $('#submit').prop('disabled', false);
                                }, 1000);

                                Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'File Karya terlalu besar'
                                })

                                $('#lomba').val("");
                                $('#nama').val("");
                                $('#email').val("");
                                $('#alamat').val("");
                                $('#noHP').val("");
                                $('#lineID').val("");
                                $("#sekolah").val("");
                                $('#ktm').val("");
                                $('#pasFoto').val("");
                                $('#karya').val("");
                            }
                            else if(res=='ada'){
                                setTimeout(function(){
                                    $('#submit').empty();
                                    $("#submit").append("<p class='submitP' style='margin: 5px auto;'>Submit</p>");
                                    $('#submit').prop('disabled', false);
                                }, 1000);

                                Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Karya untuk lomba ini sudah di upload'
                                })

                                $('#lomba').val("");
                                $('#nama').val("");
                                $('#email').val("");
                                $('#alamat').val("");
                                $('#noHP').val("");
                                $('#lineID').val("");
                                $("#sekolah").val("");
                                $('#ktm').val("");
                                $('#pasFoto').val("");
                                $('#karya').val("");
                            }
                            else if(res=='salah'){
                                setTimeout(function(){
                                    $('#submit').empty();
                                    $("#submit").append("<p class='submitP' style='margin: 5px auto;'>Submit</p>");
                                    $('#submit').prop('disabled', false);
                                }, 1000);

                                Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Lomba yang dimasukkan tidak sesuai'
                                })

                                $('#lomba').val("");
                                $('#nama').val("");
                                $('#email').val("");
                                $('#alamat').val("");
                                $('#noHP').val("");
                                $('#lineID').val("");
                                $("#sekolah").val("");
                                $('#ktm').val("");
                                $('#pasFoto').val("");
                                $('#karya').val("");
                            }
                            else if(res=='peserta gada'){
                                setTimeout(function(){
                                    $('#submit').empty();
                                    $("#submit").append("<p class='submitP' style='margin: 5px auto;'>Submit</p>");
                                    $('#submit').prop('disabled', false);
                                }, 1000);

                                Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Mohon cek kembali data Anda'
                                })

                                $('#lomba').val("");
                                $('#nama').val("");
                                $('#email').val("");
                                $('#alamat').val("");
                                $('#noHP').val("");
                                $('#lineID').val("");
                                $("#sekolah").val("");
                                $('#ktm').val("");
                                $('#pasFoto').val("");
                                $('#karya').val("");
                            }
                            else if(res=='timeout'){
                                Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Waktu pengumpulan sudah habis'
                                })
                                $('.container').html('<div align="center"><div class="row"><div class="col-lg-12 col-md-12 col-sm-12 break" ><div style=" padding: 5%;"><h2>Mohon maaf pengumpulan karya sudah ditutup. <br> Terima kasih atas partisipasinya😊</h2></div></div></div>');
                                $('.container-fluid').css("visibility","hidden");
                            }
                            else{
                                setTimeout(function(){
                                    $('#submit').empty();
                                    $("#submit").append("<p class='submitP' style='margin: 5px auto;'>Submit</p>");
                                    $('#submit').prop('disabled', false);
                                }, 1000);

                                Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Mohon memastikan agar file karya tidak melebihi 8 mb'
                                })

                                $('#lomba').val("");
                                $('#nama').val("");
                                $('#email').val("");
                                $('#alamat').val("");
                                $('#noHP').val("");
                                $('#lineID').val("");
                                $("#sekolah").val("");
                                $('#ktm').val("");
                                $('#pasFoto').val("");
                                $('#karya').val("");
                            }
                        },
                        error: function () {
                            setTimeout(function(){
                                $('#submit').empty();
                                $("#submit").append("<p class='submitP' style='margin: 5px auto;'>Submit</p>");
                                $('#submit').prop('disabled', false);
                            }, 1000);
                            alert("Gagal");

                            $('#lomba').val("");
                                $('#nama').val("");
                                $('#email').val("");
                                $('#alamat').val("");
                                $('#noHP').val("");
                                $('#lineID').val("");
                                $("#sekolah").val("");
                                $('#ktm').val("");
                                $('#pasFoto').val("");
                                $('#karya').val("");
                            } 
                    });
                }
                else{
                    setTimeout(function(){
                        $('#submit').empty();
                        $("#submit").append("<p class='submitP' style='margin: 5px auto;'>Submit</p>");
                        $('#submit').prop('disabled', false);
                    }, 1000);
                    Swal.fire('Data belum lengkap!');

                    $('#lomba').val("");
                    $('#nama').val("");
                    $('#email').val("");
                    $('#alamat').val("");
                    $('#noHP').val("");
                    $('#lineID').val("");
                    $("#sekolah").val("");
                    $('#ktm').val("");
                    $('#pasFoto').val("");
                    $('#karya').val("");
                }
            });
        })
    </script>


</body>
</html>