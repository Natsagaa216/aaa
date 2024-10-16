<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduce</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Contrail+One&family=Ga+Maamli&family=Permanent+Marker&display=swap" rel="stylesheet">
    <!-- Css -->
    {{-- <link rel="stylesheet" href="{{asset('assets/css/intro-style.css')}}" type="text/css"> --}}
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Jersey+25&display=swap" rel="stylesheet">
     @vite(['resources/css/intro-style.css'])
</head>
<body>
    <div class="big-container">

        <section class="one">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left">
                            <div class="text1">
                                <h1>Metro Boomin</h1>
                            </div>

                            <div class="nav">
                                <ul class="nav-links">
                                    <li class="nav-link services">
                                        <a href="{{url('layouts/app')}}">HOME</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="{{url('frontend/apparel')}}">APPAREL</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="{{url('frontend/music')}}">MUSIC</a>
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
                            </div>


                            <div class="small">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content1">
                                            <img src="{{asset('assets/image/metro/Metro_Boomin1.webp')}}" alt="">
                                            <div class="btn-6">
                                                <a class="btn-content" href="#">
                                                    <span class="btn-title">Upcoming Shows</span>
                                                    <span class="icon-arrow">
                                                      <svg
                                                        width="50px"
                                                        height="43px"
                                                        viewBox="0 0 66 43"
                                                        version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                      >
                                                        <g
                                                          id="arrow"
                                                          stroke="none"
                                                          stroke-width="1"
                                                          fill="none"
                                                          fill-rule="evenodd"
                                                        >
                                                          <path
                                                            id="arrow-icon-one"
                                                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-two"
                                                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-three"
                                                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content1">
                                            <img src="{{asset('assets/image/metro/metroboomin.jpg')}}" alt="">
                                            <div class="btn-6">
                                                <a class="btn-content" href="#">
                                                    <span class="btn-title">Buy Ticket</span>
                                                    <span class="icon-arrow">
                                                      <svg
                                                        width="50px"
                                                        height="43px"
                                                        viewBox="0 0 66 43"
                                                        version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                      >
                                                        <g
                                                          id="arrow"
                                                          stroke="none"
                                                          stroke-width="1"
                                                          fill="none"
                                                          fill-rule="evenodd"
                                                        >
                                                          <path
                                                            id="arrow-icon-one"
                                                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-two"
                                                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-three"
                                                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <img src="{{asset('assets/image/metro/metroboomin1.jpg')}}" alt="">
                            <div class="text">
                                <div class="hov"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-slide">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/metro/metro1.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "METRO BOOMIN PRESENTS SPIDER-MAN:"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/metro/metro2.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Creepin"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/metro/metro3.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Heroes & Villains"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/metro/metro55.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Heroes & Villains"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/metro/metro5.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Not all heroes wear capes"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/metro/metro-tokio.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Heroes & Villains"</h3></a>
                            </div>

                        </div>
                        <h3 class="text0">ALBUM</h3>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </section>

        <section class="one">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left">
                            <div class="text1">
                                <h1>Cigarettes after sex</h1>
                            </div>

                            <div class="nav">
                                <ul class="nav-links">
                                    <li class="nav-link services">
                                        <a href="">HOME</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="{{url('frontend/apparel')}}">APPAREL</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="{{url('frontend/music')}}">MUSIC</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="">TICKETS
                                            <span class="material-icons dropdown-icon">
                                                <i class="bi bi-chevron-down"></i>
                                            </span>
                                        </a>
                                        <ul class="drop-down">
                                            <li>Metro Boomin</li>
                                            <li>Billie Eilish</li>
                                            <li>CAS</li>
                                            <li>Eminem</li>
                                            <li>Russ</li>
                                            <li>Joji</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="small">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content1">
                                            <img src="{{asset('assets/image/cas-image/cas-slide.jpg')}}" alt="">
                                            <div class="btn-6">
                                                <a class="btn-content" href="upcoming.html">
                                                    <span class="btn-title">Upcoming Shows</span>
                                                    <span class="icon-arrow">
                                                      <svg
                                                        width="50px"
                                                        height="43px"
                                                        viewBox="0 0 66 43"
                                                        version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                      >
                                                        <g
                                                          id="arrow"
                                                          stroke="none"
                                                          stroke-width="1"
                                                          fill="none"
                                                          fill-rule="evenodd"
                                                        >
                                                          <path
                                                            id="arrow-icon-one"
                                                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-two"
                                                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-three"
                                                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content1">
                                            <img src="{{asset('assets/image/cas-image/casmusic1.jpg')}}" alt="">
                                            <div class="btn-6">
                                                <a class="btn-content" href="#">
                                                    <span class="btn-title">Buy Ticket</span>
                                                    <span class="icon-arrow">
                                                      <svg
                                                        width="50px"
                                                        height="43px"
                                                        viewBox="0 0 66 43"
                                                        version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                      >
                                                        <g
                                                          id="arrow"
                                                          stroke="none"
                                                          stroke-width="1"
                                                          fill="none"
                                                          fill-rule="evenodd"
                                                        >
                                                          <path
                                                            id="arrow-icon-one"
                                                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-two"
                                                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-three"
                                                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <img src="{{asset('assets/image/cas-image/cas-slide2.jpg')}}" alt="">
                            <div class="text">
                                <div class="hov"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-slide">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic7.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "YOU'RE All I WANT"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic14.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "AFFECTION"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic3.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "DARK VACAY"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic4.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Motion Picture Soundtrack"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic5.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Bubblegum"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic6.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Pistol"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic1.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "X's"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic8.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Cry"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic9.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Falling In Love"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic10.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Heavenly"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic11.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Neon Moon"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic12.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Crush"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic13.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Cigarettes After Sex"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic2.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Baby Blue Movie"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/cas-image/casmusic15.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "I."</h3></a>
                            </div>

                        </div>
                        <h3 class="text0">ALBUM</h3>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </section>

        <section class="one">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left">
                            <div class="text1">
                                <h1>Billie Eilish</h1>
                            </div>

                            <div class="nav">
                                <ul class="nav-links">
                                    <li class="nav-link services">
                                        <a href="">HOME</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="">APPAREL</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="{{url('frontend/music')}}">MUSIC</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="">TICKETS
                                            <span class="material-icons dropdown-icon">
                                                <i class="bi bi-chevron-down"></i>
                                            </span>
                                        </a>
                                        <ul class="drop-down">
                                            <li>Metro Boomin</li>
                                            <li>Billie Eilish</li>
                                            <li>CAS</li>
                                            <li>Eminem</li>
                                            <li>Russ</li>
                                            <li>Joji</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="small">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content1">
                                            <img src="{{asset('assets/image/billie/billie7.jpg')}}" alt="">
                                            <div class="btn-6">
                                                <a class="btn-content" href="#">
                                                    <span class="btn-title">Upcoming Shows</span>
                                                    <span class="icon-arrow">
                                                      <svg
                                                        width="50px"
                                                        height="43px"
                                                        viewBox="0 0 66 43"
                                                        version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                      >
                                                        <g
                                                          id="arrow"
                                                          stroke="none"
                                                          stroke-width="1"
                                                          fill="none"
                                                          fill-rule="evenodd"
                                                        >
                                                          <path
                                                            id="arrow-icon-one"
                                                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-two"
                                                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-three"
                                                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content1">
                                            <img src="{{asset('assets/image/billie/billie8.jpg')}}" alt="">
                                            <div class="btn-6">
                                                <a class="btn-content" href="#">
                                                    <span class="btn-title">Buy Ticket</span>
                                                    <span class="icon-arrow">
                                                      <svg
                                                        width="50px"
                                                        height="43px"
                                                        viewBox="0 0 66 43"
                                                        version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                      >
                                                        <g
                                                          id="arrow"
                                                          stroke="none"
                                                          stroke-width="1"
                                                          fill="none"
                                                          fill-rule="evenodd"
                                                        >
                                                          <path
                                                            id="arrow-icon-one"
                                                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-two"
                                                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-three"
                                                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <img src="{{asset('assets/image/billie/billie5.jpg')}}" alt="">
                            <div class="text">
                                <div class="hov"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-slide">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/billie/billie11.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Hit me hard and soft"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/billie/billie33.webp')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Happier than ever"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/billie/billie44.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Copycat"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/billie/billie22.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "When we all fall asleep..."</h3></a>
                            </div>
                        </div>
                        <h3 class="text0">ALBUM</h3>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </section>

        <section class="one">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left">
                            <div class="text1">
                                <h1>Eminem</h1>
                            </div>

                            <div class="nav">
                                <ul class="nav-links">
                                    <li class="nav-link services">
                                        <a href="">HOME</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="">APPAREL</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="{{url('frontend/music')}}">MUSIC</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="">TICKETS
                                            <span class="material-icons dropdown-icon">
                                                <i class="bi bi-chevron-down"></i>
                                            </span>
                                        </a>
                                        <ul class="drop-down">
                                            <li>Metro Boomin</li>
                                            <li>Billie Eilish</li>
                                            <li>CAS</li>
                                            <li>Eminem</li>
                                            <li>Russ</li>
                                            <li>Joji</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="small">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content1">
                                            <img src="{{asset('assets/image/eminem/eminem2.jpg')}}" alt="">
                                            <div class="btn-6">
                                                <a class="btn-content" href="upcoming.html">
                                                    <span class="btn-title">Upcoming Shows</span>
                                                    <span class="icon-arrow">
                                                      <svg
                                                        width="50px"
                                                        height="43px"
                                                        viewBox="0 0 66 43"
                                                        version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                      >
                                                        <g
                                                          id="arrow"
                                                          stroke="none"
                                                          stroke-width="1"
                                                          fill="none"
                                                          fill-rule="evenodd"
                                                        >
                                                          <path
                                                            id="arrow-icon-one"
                                                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-two"
                                                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-three"
                                                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content1">
                                            <img src="{{asset('assets/image/eminem/eminem3.jpg')}}" alt="">
                                            <div class="btn-6">
                                                <a class="btn-content" href="#">
                                                    <span class="btn-title">Buy Ticket</span>
                                                    <span class="icon-arrow">
                                                      <svg
                                                        width="50px"
                                                        height="43px"
                                                        viewBox="0 0 66 43"
                                                        version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                      >
                                                        <g
                                                          id="arrow"
                                                          stroke="none"
                                                          stroke-width="1"
                                                          fill="none"
                                                          fill-rule="evenodd"
                                                        >
                                                          <path
                                                            id="arrow-icon-one"
                                                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-two"
                                                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-three"
                                                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <img src="{{asset('assets/image/eminem/eminem1.jpg')}}" alt="">
                            <div class="text">
                                <div class="hov"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-slide">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/eminem/eminem-music6.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Venom"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/eminem/eminem-music4.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Last One Standing"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/eminem/eminem-music3.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "The Eminem Show"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/eminem/eminem-music2.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "The King and I"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/eminem/eminem-music5.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Music To Be Murdered By - Side B"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/eminem/eminem-music1.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "Curtain Call 2 "</h3></a>
                            </div>
                        </div>
                        <h3 class="text0">ALBUM</h3>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </section>

        <section class="one">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left">
                            <div class="text1">
                                <h1>Russ</h1>
                            </div>

                            <div class="nav">
                                <ul class="nav-links">
                                    <li class="nav-link services">
                                        <a href="">HOME</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="">APPAREL</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="{{url('frontend/music')}}">MUSIC</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="">TICKETS
                                            <span class="material-icons dropdown-icon">
                                                <i class="bi bi-chevron-down"></i>
                                            </span>
                                        </a>
                                        <ul class="drop-down">
                                            <li>Metro Boomin</li>
                                            <li>Billie Eilish</li>
                                            <li>CAS</li>
                                            <li>Eminem</li>
                                            <li>Russ</li>
                                            <li>Joji</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="small">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content1">
                                            <img src="{{asset('assets/image/russ/russ111.webp')}}" alt="">
                                            <div class="btn-6">
                                                <a class="btn-content" href="upcoming.html">
                                                    <span class="btn-title">Upcoming Shows</span>
                                                    <span class="icon-arrow">
                                                      <svg
                                                        width="50px"
                                                        height="43px"
                                                        viewBox="0 0 66 43"
                                                        version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                      >
                                                        <g
                                                          id="arrow"
                                                          stroke="none"
                                                          stroke-width="1"
                                                          fill="none"
                                                          fill-rule="evenodd"
                                                        >
                                                          <path
                                                            id="arrow-icon-one"
                                                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-two"
                                                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-three"
                                                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content1">
                                            <img src="{{asset('assets/image/russ/russ22.jpg')}}" alt="">
                                            <div class="btn-6">
                                                <a class="btn-content" href="#">
                                                    <span class="btn-title">Buy Ticket</span>
                                                    <span class="icon-arrow">
                                                      <svg
                                                        width="50px"
                                                        height="43px"
                                                        viewBox="0 0 66 43"
                                                        version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                      >
                                                        <g
                                                          id="arrow"
                                                          stroke="none"
                                                          stroke-width="1"
                                                          fill="none"
                                                          fill-rule="evenodd"
                                                        >
                                                          <path
                                                            id="arrow-icon-one"
                                                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-two"
                                                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-three"
                                                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <img src="{{asset('assets/image/russ/russ-background2.jpg')}}" alt="">
                            <div class="text">
                                <div class="hov"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-slide">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/russ/russ-6.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "APPOLO 13"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/russ/russ-4.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "BRAIN DEAD"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/russ/russ-music1.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "SANTIAGO"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/russ/russ-2.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "THERE'S REALLY A WOLF"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/russ/russ-5.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "SILENCE""</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/russ/russ-1.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "ZOO"</h3></a>
                            </div>
                        </div>
                        <h3 class="text0">ALBUM</h3>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </section>

        <section class="one">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left">
                            <div class="text1">
                                <h1>Joji</h1>
                            </div>

                            <div class="nav">
                                <ul class="nav-links">
                                    <li class="nav-link services">
                                        <a href="">HOME</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="">APPAREL</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="{{url('frontend/music')}}">MUSIC</a>
                                    </li>
                                    <li class="nav-link services">
                                        <a href="">TICKETS
                                            <span class="material-icons dropdown-icon">
                                                <i class="bi bi-chevron-down"></i>
                                            </span>
                                        </a>
                                        <ul class="drop-down">
                                            <li>Metro Boomin</li>
                                            <li>Billie Eilish</li>
                                            <li>CAS</li>
                                            <li>Eminem</li>
                                            <li>Russ</li>
                                            <li>Joji</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="small">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content1">
                                            <img src="{{asset('assets/image/joji/joji-background1.jpg')}}" alt="">
                                            <div class="btn-6">
                                                <a class="btn-content" href="upcoming.html">
                                                    <span class="btn-title">Upcoming Shows</span>
                                                    <span class="icon-arrow">
                                                      <svg
                                                        width="50px"
                                                        height="43px"
                                                        viewBox="0 0 66 43"
                                                        version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                      >
                                                        <g
                                                          id="arrow"
                                                          stroke="none"
                                                          stroke-width="1"
                                                          fill="none"
                                                          fill-rule="evenodd"
                                                        >
                                                          <path
                                                            id="arrow-icon-one"
                                                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-two"
                                                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-three"
                                                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content1">
                                            <img src="{{asset('assets/image/joji/joji1.jpg')}}" alt="">
                                            <div class="btn-6">
                                                <a class="btn-content" href="#">
                                                    <span class="btn-title">Buy Ticket</span>
                                                    <span class="icon-arrow">
                                                      <svg
                                                        width="50px"
                                                        height="43px"
                                                        viewBox="0 0 66 43"
                                                        version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                      >
                                                        <g
                                                          id="arrow"
                                                          stroke="none"
                                                          stroke-width="1"
                                                          fill="none"
                                                          fill-rule="evenodd"
                                                        >
                                                          <path
                                                            id="arrow-icon-one"
                                                            d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-two"
                                                            d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                          <path
                                                            id="arrow-icon-three"
                                                            d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                            fill="#FFFFFF"
                                                          ></path>
                                                        </g>
                                                      </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <img src="{{asset('assets/image/joji/joji-background2.jpg')}}" alt="">
                            <div class="text">
                                <div class="hov"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-slide">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/joji/joji-1.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "NECTAR"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/joji/joji-5.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "LOST BALLADS"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/joji/joji-3.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "BALLADS 1"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/joji/joji-4.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "IN TONGUES"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/joji/joji-2.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "SMITHEREENS"</h3></a>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/image/joji/joji-6.jpg')}}" alt="">
                                <a href="#" id="text1"><h3 class="text1">LISTEN: "LOST INSTRUMENTS"</h3></a>
                            </div>
                        </div>
                        <h3 class="text0">ALBUM</h3>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </section>


    </div>














     <!-- bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <script type="module" src="/src/main.jsx"></script>
     <!-- Swiper JS -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
     <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            });
        </script>

     <script>
         ScrollReveal({
             // reset: true,
             distance: '60px',
             duration: 2500,
             delay: 400
         });

         // ScrollReveal().reveal('.main-title, .section-title', { delay: 500, origin: 'left' });
         // ScrollReveal().reveal('.sec-01 .image, .info', { delay: 600, origin: 'bottom' });
         // ScrollReveal().reveal('.text-box', { delay: 700, origin: 'right' });
         // ScrollReveal().reveal('.media-icons i', { delay: 500, origin: 'bottom', interval: 200 });
         // ScrollReveal().reveal('.sec-02 .image, .sec-03 .image', { delay: 500, origin: 'top' });
         ScrollReveal().reveal('.media-info li', { delay: 500, origin: 'left', interval: 200 });
     </script>

     {{-- <script type="text/javascript" src="particles.js"></script>
     <script type="text/javascript" src="app.js"></script> --}}
</body>
</html>
