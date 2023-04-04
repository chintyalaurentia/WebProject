<?php 
include 'links.php';
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://bem.petra.ac.id/explotion/assets/icon-circle.png" sizes="20">


    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/fonts/fonts.css">
    
    <!-- <script type="module">
    import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'

    const swiper = new Swiper(...)
    </script> -->
   
    <title>Step Up</title>

    <style>
        body{
                /* background-color: #5c2e90; */
                background-image: url('assets/bg-stepup.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                overflow:overlay;
            }
            body:after{
                content:"";
                position:fixed; /* stretch a fixed position to the whole screen */
                top:0;
                height:100vh; /* fix for mobile browser address bar appearing disappearing */
                left:0;
                right:0;
                z-index:-1; /* needed to keep in the background */
                background: url('assets/bg-stepup.png') center top;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                /* background-repeat: no-repeat; */
            }
        
        header{
            height: 100vh !important;
            padding-top: 130px;
        }
        .container{
            text-align: center;
        }

        header h1{
            font-size: 180px;
            font-family: NoirPro-SemiBold, 'Arial';
            color: #dd2b4a;
            
            
            text-shadow: 2px 2px 5px #fdd506;
            animation: title infinite 5s;
           
            text-transform: uppercase;
            cursor: pointer;
            
        }

        header p{
            margin: 1vw;
            font-size: 20px;
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

        #exhi-sections h1, #ex{
            color: #fdd506;
            font-family: NoirPro-Bold, 'Arial';
            font-size: 60px; 
            text-align: center;
            padding: 3rem;
            text-shadow: 2px 2px #ff0000;
        }


        .videoBtn{
            margin: 7rem auto;
            text-align: center;
            border: 1px solid #ffff;
            border-radius: 10px;
            color: black;
            background: #fff;
            font-family: NoirPro-SemiBold, 'Arial';
            font-size: 20px;
            text-decoration: none;
            cursor: pointer;
            opacity: 0;
            transition: all linear 0.3s;
        }


        .modal-content{
            background: transparent;
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

        #rowBest{
            width: 60%;
            display: block; 
            margin-left: auto; 
            margin-right: auto;
        }
        

        @media screen and (max-width: 900px) {
            body{
                background-image: url("assets/bg-stepup-tab.png");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                overflow:overlay;
            }
            body:after{
                background: url("assets/bg-stepup-tab.png") center top;
                content:"";
                position:fixed; /* stretch a fixed position to the whole screen */
                top:0;
                height:100vh; /* fix for mobile browser address bar appearing disappearing */
                left:0;
                right:0;
                z-index:-1; /* needed to keep in the background */
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            header{
                padding-top: 18em;
            }

            header h1{
                font-size: 10em;
            }

            header p{
                margin-top: 1em;
                margin-bottom: 3em;
                font-size: 2em;
            }

            #home-button, #exhi-button{
                font-size: 3em;
            }

            iframe{
                margin: 30% auto;
                width: 90%;
                height: 50%;
            }

            .videoBtn{
                margin: 30% auto;
            }

        }


        @media screen and (max-width: 530px) {
            header{
                padding-top: 2em;
            }

            header h1{
                font-size: 8em;
            }
            header p{
                font-size: 1em;
            }

            #home-button, #exhi-button{
                font-size: 1em;
            }


        }

        @media screen and (max-width: 490px) { 
            header{
                padding-top: 100px;
            }

            header h1{
                font-size: 125px;
            }

            header p{
                margin: 0.5vw;
                font-size: 30px;
            }

            #home-button, #exhi-button{
                font-size: 25px;
            }

            iframe{
                margin: 40% auto;
                width: 100%;
                height: 40%;
            }
        }

        @media screen and (max-width: 425px) {
            body{
                background: url("assets/bg-stepup-hp.png");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                overflow:overlay;
            }
            body:after{
                background: url("assets/bg-stepup-hp.png") center top;
                content:"";
                position:fixed; /* stretch a fixed position to the whole screen */
                top:0;
                height:100vh; /* fix for mobile browser address bar appearing disappearing */
                left:0;
                right:0;
                z-index:-1; /* needed to keep in the background */
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .videobtn{
                margin: 40% auto;
            }

            #exhi-sections h1, #ex{
                padding-bottom: 2rem;
                font-size: 3em;
            }

            #rowBest{
                width: 100%;
            }

        }

    </style>
</head>
<body>
    <?php include 'exhimodal.php' ?>
    <header>
        <div class="container">
                <div style="transform: skewY(-5deg);" class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <h1>Step Up</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p>Modelling, Martografi, Dance</p>
                    </div>
                </div>
                
                
                
                <div class="row mt-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <a class="btn btn-primary my-2" id="home-button" href="index.php" role="button">Home</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <a class="btn btn-primary my-2" id="exhi-button"  data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">Exhibition</a>
                    </div>
                </div>
               
                
        </div>
    </header>

    <div id="exhi-sections">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Best Video</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                <!-- <img style="object-fit: cover; width: 50%;" class="kumpVid" data-link="1q186HZcfOw" src="https://img.youtube.com/vi/1q186HZcfOw/0.jpg" /> -->

                    <div class="ratio ratio-16x9" id="rowBest">
                        <img style="object-fit: cover; " class="kumpVid" data-link="1q186HZcfOw" src="https://img.youtube.com/vi/1q186HZcfOw/0.jpg" />
                    </div>

                    <h6 class="name mt-2">Angelina Nikita</h6>
                    
                </div>
            </div>
             <!-- <div class="swiper-slide" style="background-image:url(https://img.youtube.com/vi/1q186HZcfOw/0.jpg); border-radius: 10px;">
                        <div>
                            <button data-link="1q186HZcfOw" class="btn videoBtn" href="#" role="button">Play</button> 
                        </div>
                    </div> -->
           
            
        </div>  
            
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 id="ex">Exhibition</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-1">
            <?php 
            
            $query = mysqli_query($con,"SELECT * FROM stepup");
            while($row = mysqli_fetch_array($query)){
            ?>

            <div class="col-lg-4 col-md-6 col-sm-12 my-4" data-bs-toggle="modal" data-bs-target="#videoModal">
                <div class="ratio ratio-16x9">
                    <img data-link="<?php echo $row['yt']; ?>" class="kumpVid" src="https://img.youtube.com/vi/<?php echo $row['yt']; ?>/0.jpg" />
                </div>
                <h6 class="name mt-2"><?php echo $row['name']; ?></h6>
            </div>

            <!-- <div class="col-lg-4 col-sm-6 col-12 mt-5">
                <button data-link="<?php echo $row['yt']; ?>" class="btn kumpVid" href="#" role="button"><img style="width: 100%; border-radius: 10px;" src="https://img.youtube.com/vi/<?php echo $row['yt']; ?>/0.jpg"></button> 
                <h6 class="name"><?php echo $row['name']; ?></h6>
                    
            </div> -->
            <?php }
            ?>
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

<!-- <iframe width="420" height="315" src="https://www.youtube.com/embed/XTVeJS_Tnr8" frameborder="0" allowfullscreen iframe-video></iframe> -->