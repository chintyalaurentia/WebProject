<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- LINK JQUERY-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> -->
    <script src="https://kit.fontawesome.com/26176e1d71.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="asset/css/BlitzenDeer.css">
    <link rel="stylesheet" type="text/css" href="asset/css/MadeTommy.css">
    <title>About Us</title>
    <link rel="icon" href="http://bem.petra.ac.id/petramengajar/asset/images/logo PM fix.png">
    <link rel="stylesheet" href="aboutus.css">
</head>

<body>
    <?php include "navbar3.php"; ?>

    <div class="container aboutus">
        <h2 class="mb-6" id="titleAbout">About Us</h2>
        <p class="aboutUsContent">
            Petra Mengajar adalah tempat siswa-siswi bangsa memaksimalkan proses pembelajarannya dengan cara menjadi #SobatBelajar yang menyenangkan.
            <br>
            Kami memliki harapan besar untuk berdampak pada pendidikan siswa-siswi Sekolah Dasar agar lebih berkualitas melalui website Petra Mengajar.
        </p>
        <div class="container" id="contButton">
            <div class="row">
                <div class="col col-lg-6 col-md-12 col-sm-12" id="col">
                    <!-- <button class="btn btn-primary" id="kataMereka"  data-bs-toggle="modal" data-bs-target="#apaKata">Apa kata mereka ?</button> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary shadow-none" data-bs-toggle="modal" data-bs-target="#modalApa" id="kataMereka">
                        Apa kata mereka ?
                    </button>
                </div>
                <div class="col col-lg-6 col-md-12 col-sm-12" id="col">
                    <a class="btn btn-primary shadow-none" id="ig" href="https://instagram.com/petramengajar2022" role="button">
                        <i class="fa-brands fa-instagram"></i>
                        petramengajar2022
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" data-animate-in='animate__backInDown' data-animate-out='animate__zoomOut' id="modalApa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: transparent">
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" data-bs-target="modalApa" aria-label="Close" id="closeApa"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-8 col-sm-8 align-self-center my-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Keren banget kak websitenya!</h5>
                                    <p class="card-text"><i>anonymous</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 col-sm-8 align-self-center my-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Seru kak...</h5>
                                    <p class="card-text"><i>anonymous</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 col-sm-8 align-self-center  my-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Terima kasih aq jadi paham materinya.</h5>
                                    <p class="card-text"><i>anonymous</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 col-sm-8 align-self-center my-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Lucu banget video tutor pecahannya, terima kasih kak</h5>
                                    <p class="card-text"><i>anonymous</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 col-sm-8 align-self-center my-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Nilai mtk ku jadi bagus nih kak sejak ngikutin materinya</h5>
                                    <p class="card-text"><i>anonymous</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 col-sm-8 align-self-center my-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">bintang ⭐️⭐️⭐️⭐️⭐️ bagus bgt cara buatnya gimana kak</h5>
                                    <p class="card-text"><i>anonymous</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 col-sm-8 align-self-center my-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Aku udah nonton semua videonya nih... Mantap betul!</h5>
                                    <p class="card-text"><i>anonymous</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 col-sm-8 align-self-center my-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Animasinya kerennnnnnn</h5>
                                    <p class="card-text"><i>anonymous</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 col-sm-8 align-self-center my-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Soal latiannya keluar di ulanganku nih...</h5>
                                    <p class="card-text"><i>anonymous</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 col-sm-8 align-self-center my-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Penjelasannya mudah dipahami dan tidak bikin bosan!</h5>
                                    <p class="card-text"><i>anonymous</i></p>
                                </div>
                            </div>
                        </div>



                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>