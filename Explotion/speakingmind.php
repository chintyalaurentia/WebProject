<?php 
include 'links.php';
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="EXPLOTION merupakan singkatan dari “Exploration and Exhibition” atau terjemahannya, eksplorasi dan ekshibisi (pameran). Dalam kegiatan ini peserta disajikan dengan paket-paket workshop yang menarik dan bermanfaat untuk diikuti.">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="EXPLOTION 2022">
    <meta itemprop="description" content="EXPLOTION merupakan singkatan dari “Exploration and Exhibition” atau terjemahannya, eksplorasi dan ekshibisi (pameran). Dalam kegiatan ini peserta disajikan dengan paket-paket workshop yang menarik dan bermanfaat untuk diikuti.">
    <meta itemprop="image" content="http://bem.petra.ac.id/explotion/assets/icon.png">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://bem.petra.ac.id/explotion/index.php">
    <meta property="og:type" content="website">
    <meta property="og:title" content="EXPLOTION 2022">
    <meta property="og:description" content="EXPLOTION merupakan singkatan dari “Exploration and Exhibition” atau terjemahannya, eksplorasi dan ekshibisi (pameran). Dalam kegiatan ini peserta disajikan dengan paket-paket workshop yang menarik dan bermanfaat untuk diikuti.">
    <meta property="og:image" content="http://bem.petra.ac.id/explotion/assets/icon.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="EXPLOTION 2022">
    <meta name="twitter:description" content="EXPLOTION merupakan singkatan dari “Exploration and Exhibition” atau terjemahannya, eksplorasi dan ekshibisi (pameran). Dalam kegiatan ini peserta disajikan dengan paket-paket workshop yang menarik dan bermanfaat untuk diikuti.">
    <meta name="twitter:image" content="http://bem.petra.ac.id/explotion/assets/icon.png">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://bem.petra.ac.id/explotion/assets/icon-circle.png" sizes="20">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/fonts/fonts.css">
    
    <!-- <script type="module">
    import card from 'https://unpkg.com/card@7/card-bundle.esm.browser.min.js'

    const card = new card(...)
    </script> -->
   
    <title>Speaking Mind</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Sedgwick+Ave&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Outfit&display=swap');

        body{
            overflow: overlay;
        }
        
        
        ::-webkit-scrollbar {
            width: 5px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #fff;
            border-radius: 10px;
        }

        .awal{
            background-image: url('assets/bg-speakingmind.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            overflow: overlay;
            height: 100vh !important;
        }

        
        .awal:after{
            content:"";
            position:fixed; 
            height:100vh; 
            left:0;
            right:0;
            z-index:-1; 
            background: url('assets/bg-speakingmind.png') center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .container{
            text-align: center;
        }

        .awal h1{
            margin: 4rem auto;
            font-size: 100px;
            font-family: NoirPro-SemiBold, 'Arial';
            color: #dd2b4a;
            
            /* z-index: 10; */
            text-shadow: 2px 2px 5px #fdd506;
            animation: title infinite 5s;
            /* text-align: center; */
            text-transform: uppercase;
            cursor: pointer;
            
        }

        .awal p{
            margin: 1vw;
            font-size: 2em;
            font-family: NoirPro-Regular, 'Arial';
            cursor: pointer;
            text-align: center;
            color: #fff;
        }

        #home-button, #exhi-button{
            border: 1px solid #ffff;
            /* letter-spacing: 3px; */
            color: #5c2e90;
            background: #fff;
            font-family: NoirPro-Bold, 'Arial';
            font-size: 25px;
            cursor: pointer;
            box-shadow: 0px 0px 10px #888888;
            text-transform: uppercase;
            transition-duration: all 0.3s;
            animation: button2 infinite 5s;
            
        }

        #home-button:hover, #exhi-button:hover{
            box-shadow: 0px 0px 30px #5c2e90;
            /* -webkit-transform: scale(1.1);
            transform: scale(1.1); */
            border: 1px solid #5c2e90;
            color: #fff;
            background: #5c2e90;
            font-family: NoirPro-Bold, 'Arial';
        }

        @keyframes button2{
            0% {transform: scale(1.05);}
            50% {transform: scale(1);}
            100% {transform: scale(1.05);}
        }

        @keyframes title{
            0% {transform: translateY(0px);}
            50% {transform: translateY(-8px);}
            100% {transform: translateY(0px);}
        }

        .btns{
           margin-top: 90px;
        }


        .sections2 {
            background: linear-gradient(to left bottom, #dd2b4a, #7e4f9f, #fdd506);
            animation: bg 10s ease-in-out infinite;
            background-size: 400% 400%;
        }

        @keyframes bg{
            0% {background-position: 0 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0 50%;}
        }

        #exhi-sections h1, #ex{
            color: #fdd506;
            font-family: NoirPro-Bold, 'Arial';
            font-size: 60px; 
            text-align: center;
            padding: 1rem;
            text-shadow: 0px 0px 5px #fdd506;
        }

        .modal-content{
            background: transparent;
        }


        .swiper {
            /* margin: 10px auto; */
            width: 100%;
            /* height: 60%; */
            height: 90%;
            padding-top: 20px;
            padding-bottom: 200px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 510;
            -webkit-box-reflect: below 1px linear-gradient(transparent, transparent, #0006);

        }

        .videoBtn{
            margin: 8rem auto;
            text-align: center;
            border: 1px solid #7e4f9f;
            border-radius: 10px;
            color: #fff;
            background: #7e4f9f;
            font-family: NoirPro-SemiBold, 'Arial';
            font-size: 2em;
            text-decoration: none;
            cursor: pointer;
            opacity: 0;
            transition: all linear 0.3s;
        }


        iframe{
            margin: 5% auto;
            width: 75%;
            height: 75%;
            border-radius: 10px;
        }

        .name{
            font-family: NoirPro-Regular, 'Arial';
            font-size: 30px;
            color: #fff;
            cursor: context-menu;
            text-shadow: 2px 2px 3px #fdd506;
            transition: 400ms ease all;
        }

        .kumpVid{
            width: 100%; 
            border-radius: 10px;
            object-fit: cover;
        }

        .kumpVid:hover{
            transform: translateY(-3%);
            cursor: pointer;
        }

        ::-webkit-scrollbar {
            width: 5px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #fff;
            border-radius: 10px;
        }



        @media screen and (max-width: 1025px) {
            .awal{
                background: url("assets/bg-speakingmind-tab.png");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                overflow: overlay;
                height: 100vh;
            }
            .awal:after{
                content:"";
                position:fixed; 
                height:100vh; 
                left:0;
                right:0;
                z-index:-1; 
                background: url('assets/bg-speakingmind-tab.png') center center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .awal h1{
                margin-top: 1.5em;
                margin-bottom: 0;
                font-size: 9em;
            }

            .awal p{
                margin-top: 1em;
                margin-bottom: 5.5em;
                font-size: 3.5em;
            }

            #exhi-sections h1, #ex{
                /* margin-top: 3rem; */
                margin-bottom: 0;
                font-size: 3em; 
            }

            #home-button, #exhi-button{
                font-size: 2.5em;
            }
        }
       
        @media screen and (max-width: 900px) {
            .awal{
                background: url("assets/bg-speakingmind-tab.png");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                overflow: overlay;
                height: 100vh;
            }
            .awal:after{
                content:"";
                position:fixed; 
                height:100vh; 
                left:0;
                right:0;
                z-index:-1; 
                background: url('assets/bg-speakingmind-tab.png') center center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .awal h1{
                margin-top: 2em;
                margin-bottom: 0;
                font-size: 7em;
            }

            .awal p{
                margin-top: 1em;
                margin-bottom: 4em;
                font-size: 2.5em;
            }

            #exhi-sections h1, #ex{
                margin-bottom: 0;
                font-size: 3em; 
            }

            #home-button, #exhi-button{
                font-size: 2.5em;
            }
            .swiper {
                width: 100%;
                height: 50%;
            }
            .swiper-slide{
                width: 420;
            }

            iframe{
                margin: 30% auto;
                width: 90%;
                height: 50%;
            }

            .videoBtn{
                margin: 20% auto;
            }
        }

        @media screen and (max-width: 530px) {
            .swiper {
                width: 100%;
                height: 90%;
            }

        }

        @media screen and (max-width: 490px) { 
            iframe{
                margin: 40% auto;
                width: 100%;
                height: 40%;
            }

            .swiper-slide {
                width: 320;
            }
        }

        @media screen and (max-width: 425px) {
            .awal{
                background: url("assets/bg-speakingmind-hp.png");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment:scroll;
                overflow: overlay;
                height: 100vh !important;
            }
            .awal:after{
                content:"";
                position:fixed; 
                height:100vh; 
                left:0;
                right:0;
                z-index:-1; 
                background: url('assets/bg-speakingmind-hp.png') center center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .awal h1{
                margin-top: 8rem;
                margin-bottom: 0;
                font-size: 4.5em;
            }

            .awal p{
                margin-top: 2rem;
                margin-bottom: 2rem;
                font-size: 2em;
            }

            .videobtn{
                margin: 30% auto;
            }

            /* #exhi-sections h1{
                padding-bottom: 2rem;
            } */

            .swiper {
                width: 100%;
                height: 75%;
            }
            
            #home-button, #exhi-button{
                font-size: 1.5em;
            }
            
        }

        @media screen and (max-width: 380px) {
            .awal h1{
                margin-top: 8rem;
                margin-bottom: 0;
                font-size: 4em;
            }

            .awal p{
                margin-top: 1rem;
                margin-bottom: 5rem;
                font-size: 1.5em; 
            
            }

            #exhi-sections h1, #ex{
                font-size: 3em; 
            }

            #home-button, #exhi-button{
                font-size: 1.5em;
            }
        }

        @media screen and (max-width: 330px) {
            .awal h1{
                font-size: 3.5em;
            }

            #exhi-sections h1, #ex{
                font-size: 3em; 
            }

            .awal p{
                font-size: 1.5em; 
            }
            #home-button, #exhi-button{
                font-size: 1em;
                margin-top: 3rem;
            }
        }

        @media screen and (max-width: 302px) {
            .awal h1{
                margin-top: 7rem;
                font-size: 2.8em;
            }

            #exhi-sections h1, #ex{
                font-size: 3em; 
            }

            .awal p{
                font-size: 1em; 
                margin-bottom: 3rem;
            }
            #home-button, #exhi-button{
                font-size: 1em;
                margin-top: 3rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'exhimodal.php' ?>
    <!-- <header> -->
    <div class="awal">
        <div class="container">
                <div style="transform: skewY(-5deg);" class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h1>Speaking <br> Mind</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p>Pengembangan Diri, Debat, Essay</p>
                    </div>
                </div>
                
                
                <div class="row mt-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <a class="btn btn-primary my-2" id="home-button" href="index.php" role="button">Home</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <a class="btn btn-primary my-2" id="exhi-button" data-bs-toggle="modal" data-bs-target="#exampleModal "role="button">Exhibition</a>
                    </div>
                </div>
               
        </div>
    </div>
        
    <!-- </header>
     -->
     <div class="sections2">
     <div id="exhi-sections">
        <div class="container">
            <h1 class="pt-5">Best Video & MVP</h1>
            <div class="swiper">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide" style="background-image:url(https://img.youtube.com/vi/LuQS0qcEVYo/0.jpg); border-radius: 10px;">
                        <div>
                            <button data-link="LuQS0qcEVYo" class="btn videoBtn" href="#" role="button">Best Video</button> 
                        </div>
                    </div>

                    <div class="swiper-slide" style="background-image:url(https://img.youtube.com/vi/xhB5kEptbAE/0.jpg); border-radius: 10px;">
                        <div>
                            <button data-link="xhB5kEptbAE" class="btn videoBtn" href="#" role="button">MVP</button> 
                        </div>
                    </div>
                    
                    
                    <!-- Add Pagination -->
                   
                </div>
                <div class="swiper-pagination"></div>
            </div>
            
        </div>  
            
    </div>
                   

    <div class="container">
    <h1 id="ex">Exhibition</h1>
        <div class="row justify-content-center mt-1">
            <?php 
            
            $query = mysqli_query($con,"SELECT * FROM speakingmind WHERE nama!='Satu' AND nama!='BroadCast'");
            while($row = mysqli_fetch_array($query)){
            ?>

            <div class="col-lg-4 col-md-6 col-sm-12 my-4" data-bs-toggle="modal" data-bs-target="#videoModal">
                <div class="ratio ratio-16x9">
                    <img data-link="<?php echo $row['yt']; ?>" class="kumpVid" src="https://img.youtube.com/vi/<?php echo $row['yt']; ?>/0.jpg" />
                </div>
                <h6 class="name mt-2"><?php echo $row['nama']; ?></h6>
            </div>

            <!-- <div class="col-lg-4 col-sm-6 col-12 mt-5">
                <button data-link="<?php echo $row['yt']; ?>" class="btn kumpVid" href="#" role="button"><img style="width: 100%; border-radius: 10px;" src="https://img.youtube.com/vi/<?php echo $row['yt']; ?>/0.jpg"></button> 
                <h6 class="name"><?php echo $row['name']; ?></h6>
                    
            </div> -->
            <?php }
            ?>
        </div>
    </div>
    </div>

            
    <div class="modal fade" id="videoModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content">
                
                <div class="modal-body">
                    <button type="button" class="btn-close btn-close-white btn-lg" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <iframe class="vidIframe" src="" frameborder="0" allowfullscreen iframe-video></iframe>

                    </div>
                </div>
            
            </div>
        </div>
    </div>

    
  <script type="module">
        // import Swiper from 'swiper/swiper-bundle.esm.js';
        // import 'swiper/swiper-bundle.css';
        var swiper = new Swiper('.swiper', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 500,
            modifier: 1,
            slideShadows: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
            },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        loop:true,
        });
    </script>
  
    <script>
        $(document).ready(function() {
            $(".swiper-slide").hover(function(){
                $(this).find('button').css("opacity", "1");
                }, function(){
                $(this).find('button').css("opacity", "0");
            });

            $(".videoBtn").click(function(){
                $("#videoModal").modal("toggle");
                var link = $(this).data("link");
                // alert(link);
                $(".vidIframe").prop("src","https://www.youtube.com/embed/"+link);
            
            })

            $(".kumpVid").click(function(){
                $("#videoModal").modal("toggle");
                var link = $(this).data("link");
                // alert(link);
                $(".vidIframe").prop("src","https://www.youtube.com/embed/"+link);
            
            })

            
        
            $("#videoModal").on('hidden.bs.modal', function (e) {
                $(this).find("iframe").attr("src", $(this).find("iframe").attr("src"));
            });
        
    
    })
  </script>
  

  
    
</body>
</html>