<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Contrail+One&family=Ga+Maamli&family=Permanent+Marker&display=swap" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Jersey+25&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- Css -->
    @vite(['resources/css/music.css'])
</head>
<body>

    <div class="big">
        <section id="metro">
            <div class="container">
                <div class="nav-container">
                    <div class="nav">
                        <ul class="nav-links">
                            <li class="nav-link services">
                                <a href="index.html">HOME</a>
                            </li>
                            <li class="nav-link services">
                                <a href="">APPAREL
                                    <span class="material-icons dropdown-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </a>
                                <ul class="drop-down">
                                    <li><a id="a" href="#">Metro Boomin</a></li>
                                    <li><a id="a" href="#">Billie Eilish</a></li>
                                    <li><a id="a" href="#">CAS</a></li>
                                    <li><a id="a" href="#">Eminem</a></li>
                                    <li><a id="a" href="#">Russ</a></li>
                                    <li><a id="a" href="#">Joji</a></li>
                                </ul>
                            </li>
                            <li class="nav-link services">
                                <a href="">MUSIC
                                    <span class="material-icons dropdown-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </a>
                                <ul class="drop-down">
                                    <li><a id="a" href="#metro">Metro Boomin</a></li>
                                    <li><a id="a" href="#billie">Billie Eilish</a></li>
                                    <li><a id="a" href="#cas">CAS</a></li>
                                    <li><a id="a" href="#eminem">Eminem</a></li>
                                    <li><a id="a" href="#russ">Russ</a></li>
                                    <li><a id="a" href="#joji">Joji</a></li>
                                </ul>
                            </li>
                            <li class="nav-link services">
                                <a href="">TICKETS
                                    <span class="material-icons dropdown-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </span>
                                </a>
                                <ul class="drop-down">
                                    <li><a id="a" href="#">Metro Boomin</a></li>
                                    <li><a id="a" href="#">Billie Eilish</a></li>
                                    <li><a id="a" href="#">CAS</a></li>
                                    <li><a id="a" href="#">Eminem</a></li>
                                    <li><a id="a" href="#">Russ</a></li>
                                    <li><a id="a" href="#">Joji</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="icons">
                            <a href="#"><i class="bi bi-person"></i></a>
                            <a href="#"><i class="bi bi-cart2"></i></a>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left">
                                    <img src="{{asset('assets/image/metro/metroboomin1.jpg')}}" alt="">
                                    <div class="title">
                                        <h1>Metro Boomin</h1>
                                    </div>
                                    <div class="text">
                                        <div class="hov"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/metro/metro1.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>ACROSS THE SPIDER-VERSE...</h5>
                                                    <h4>$10.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/metro/metro-homepage2.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>CREEPIN' (EXPLICIT) DIGITAL SINGLE</h5>
                                                    <h4>$1.29</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/metro/metro3.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>HEROES & VILLAINS (VILLAINS VERSION)</h5>
                                                    <h4>$15.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/metro/metro55.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>HEROES & VILLAINS DIGITAL ALBUMS</h5>
                                                    <h4>$10.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/metro/metro5.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>NOT ALL HEROES WEAR CAPES DIGITAL ALBUM</h5>
                                                    <h4>$10.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/metro/metro-tokio.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>(TOKIO AOYAMA DESIGN) VINYL</h5>
                                                    <h4>$26.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- <div class="carousel">
                        <div class="left__carousel"></div>
                        <div class="right__carousel"></div>
                        <div class="carousel__inner">
                          <div class="item">
                            <img src="images/carousel/1.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/2.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/3.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/4.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/5.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/6.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/5.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/4.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/3.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/2.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/1.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/4.png" alt="">
                          </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>


        <section id="cas">
            <div class="container">
                <div class="nav-container">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left">
                                    <img src="{{asset('assets/image/cas-image/cas-slide2.jpg')}}" alt="">
                                    <div class="title">
                                        <h1>Cigarettes after sex</h1>
                                    </div>
                                    <div class="text">
                                        <div class="hov"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/cas-image/cas-music1.webp')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>X's 12" Deluxe LP</h5>
                                                    <h4>$25.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/cas-image/cas-music4.webp')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>X's Cassette</h5>
                                                    <h4>$8.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/cas-image/cas-music7.webp')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>X's 'Baby Blue Movie' 12"...</h5>
                                                    <h4>$31.99</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/cas-image/cas-music9.webp')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>X's CD + Cassette</h5>
                                                    <h4>$14.99</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/cas-image/cas-music10.webp')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>X's 'Dark Vacay' 12"...</h5>
                                                    <h4>$31.99</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/cas-image/cas-music12.webp')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>Bubblegum 7" Vinyl Single</h5>
                                                    <h4>$10.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- <div class="carousel">
                        <div class="left__carousel"></div>
                        <div class="right__carousel"></div>
                        <div class="carousel__inner">
                          <div class="item">
                            <img src="images/carousel/1.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/2.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/3.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/4.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/5.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/6.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/5.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/4.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/3.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/2.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/1.png" alt="">
                          </div>
                          <div class="item">
                            <img src="images/carousel/4.png" alt="">
                          </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>


        <section id="billie">
            <div class="container">
                <div class="nav-container">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left">
                                    <img src="{{asset('assets/image/billie/billie5.jpg')}}" alt="">
                                    <div class="title">
                                        <h1>Billie Eilish</h1>
                                    </div>
                                    <div class="text">
                                        <div class="hov"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/billie/billie-music1.webp')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>HIT ME HARD & SOFT EXCL.VINYL</h5>
                                                    <h4>$33.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/billie/billie-music2.webp')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>'HAPPIER THAN EVER' EXCLUSIVE GOLDEN YELLOW VINYL</h5>
                                                    <h4>$35.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/billie/billie-music3.webp')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>'DONT SMILE AT ME' LP</h5>
                                                    <h4>$22.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/billie/billie-music4.webp')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>'WHEN WE ALL FALL ASLEEP WHERE DO WE GO?' ORANGE VINYL</h5>
                                                    <h4>$30.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </section>


        <section id="eminem">
            <div class="container">
                <div class="nav-container">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left">
                                    <img src="{{asset('assets/image/eminem/eminem1.jpg')}}" alt="">
                                    <div class="title">
                                        <h1>EMINEM</h1>
                                    </div>
                                    <div class="text">
                                        <div class="hov"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/eminem/eminem-music6.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>VENOM</h5>
                                                    <h4>$25.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/eminem/eminem-music4.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>LAST ONE STANDING</h5>
                                                    <h4>$38.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/eminem/eminem-music3.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>THE EMINEM SHOW 20TH ANNIVERSARY EXPANDED EDITION 2CD</h5>
                                                    <h4>$20.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/eminem/eminem-music2.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>THE KING AND I</h5>
                                                    <h4>$14.99</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/eminem/eminem-music55.webp')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>MUSIC TO BE MURDERED BY - SIDE B</h5>
                                                    <h4>$48.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/eminem/eminem-music66.webp')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>CURTAIN CALL 2 ORANGE VINYL</h5>
                                                    <h4>$10.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="russ">
            <div class="container">
                <div class="nav-container">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left">
                                    <img src="{{asset('assets/image/russ/russ-background2.jpg')}}" alt="">
                                    <div class="title">
                                        <h1>RUSS</h1>
                                    </div>
                                    <div class="text">
                                        <div class="hov"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/russ/russ-1.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>ZOO</h5>
                                                    <h4>$21.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/russ/russ-2.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>THERE'S REALLY A WOLF</h5>
                                                    <h4>$24.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/russ/russ-3.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>SANTIAGO</h5>
                                                    <h4>$32.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/russ/russ-4.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>BRAIN DEAD</h5>
                                                    <h4>$18.99</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/russ/russ-55.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>SILENCE</h5>
                                                    <h4>$16.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/russ/russ-6.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>APPOLO 13</h5>
                                                    <h4>$30.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="joji">
            <div class="container">
                <div class="nav-container">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left">
                                    <img src="{{asset('assets/image/joji/joji-background2.jpg')}}" alt="">
                                    <div class="title">
                                        <h1>JOJI</h1>
                                    </div>
                                    <div class="text">
                                        <div class="hov"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/joji/joji-music1.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>ZOO</h5>
                                                    <h4>$21.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/joji/joji-music55.webp')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>THERE'S REALLY A WOLF</h5>
                                                    <h4>$24.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/joji/joji-background1.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>SANTIAGO</h5>
                                                    <h4>$32.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/joji/joji-music4.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>BRAIN DEAD</h5>
                                                    <h4>$18.99</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/joji/joji-2.jpg')}}" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>SILENCE</h5>
                                                    <h4>$16.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="music__container">
                                            <a href="#"><img src="{{asset('assets/image/joji/joji-66.jpg')}}" height="152px" alt=""></a>
                                            <div class="text">
                                                <a href="#">
                                                    <h5>APPOLO 13</h5>
                                                    <h4>$30.00</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


















    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
