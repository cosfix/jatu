<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jatu Saccos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/style.css" rel="stylesheet" />
    </head>
    <body>
         <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a style="color: green;" class="navbar-brand js-scroll-trigger" href="#">Nyumbani</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Ingia</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/register')}}">Jiunge</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="background-image: url('/image/saccos4.jpg');">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">

                        <h1 class="text-uppercase text-white font-weight-bold">Karibu Jatu Saccos</h1>
                        
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Lengo kuu la hizi sacoss huwa ni kujenga ushirikiano wenye lengo la kuondoa umasikini na kuinua uchumi wa mwanachama mmoja mmoja na jamii kwa ujumla</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#">Jifunze Zaidi</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">JATU SACCOS Ni Nini?</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Hii ni saccos ya wanaJatu ambayo huwakopesha wanachama wake kwa riba na masharti nafuu. Saccos ya Jatu huwasaidia wanachama wake kwa kuwakopesha vitendea kazi pamoja na pembejeo za kilimo, lakini pia mwanachama wa jatu anayeshiriki kilimo kwa kushirikiana na Jatu huweza kupatiwa mkopo kiasi cha mara tatu ya fedha yake aliyotunza kwenye saccos na mkopo huo huwa hauna riba kabisa.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Anza Nasi!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section  class="page-section" id="services">
            <div  class="container">
                <h2 class="text-center mt-0">Huduma Zetu</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-dollar-sign text-primary mb-4" style="font-size:48px;"></i>
                            <h3 class="h4 mb-2">Mikopo</h3>
                            <p class="text-muted mb-0">Mwanachama inakuwezesha kupata mikopo ya Dharura na Maendeleo</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-hospital text-primary mb-4" style="font-size:48px;"></i>
                            <h3 class="h4 mb-2">Bima Ya Afya</h3>
                            <p class="text-muted mb-0">Inakuwezesha kupata Bima ya matibabu</p>
                        </div>
                    </div>
                </div>
            </div>

                  
        </section>
        <!-- Portfolio-->
     
        <!-- Call to action-->
       
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Kwa Maelezo Zaidi</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Tupigie Simu au Tuma Ujumbe kwa Barua Pepe</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>0800 7500 97</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="#">info@jatu.co.tz</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - <a href="jatu.co.tz">Jatu PLC</a></div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    
    </body>
</html>
