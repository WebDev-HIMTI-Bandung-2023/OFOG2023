<?php
    $req_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path_alias = ['about', 'faq', 'tellus', 'tellus-thanks', 'testimonies'];
    for ($i = 0; $i < count($path_alias); $i++) if ($req_path == "/$path_alias[$i]"){
        header("Location: /$path_alias[$i].php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $USE_BOOTSTRAP = true;
        require('components/head.php');
    ?>
</head>

<body>
    <div id="Preloader">
        <!-- <div id="loader">
			<div id="shadow"></div>
			<div id="box"></div>
		</div> -->
        <svg id="Logo" class="Line" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1080 1080"
            fill="none">
            <defs>
                <style>
                .cls-1 {
                    fill: #fff;
                }
                </style>
            </defs>
            <path id="Line1" class="cls-1"
                d="M209.81,334.39l-.13,428.74-15.87,7.29-13.77-7a.49.49,0,0,1-.28-.44l.56-428.57,14.76-7.89Z"
                stroke="white" stroke-width="5" />
            <polygon id="Line2" class="cls-1"
                points="539.72 946.01 193.85 770.42 193.85 753.35 209.71 743.99 553.3 919.22 553.05 939.23 539.72 946.01"
                stroke="white" stroke-width="5" />
            <path id="Line3" class="cls-1"
                d="M539.92,945.89l345-175.32V750.09l-14.73-6.77L526.1,919.21l.26,20,13.11,6.66A.51.51,0,0,0,539.92,945.89Z"
                stroke="white" stroke-width="5" />
            <path id="Line4" class="cls-1"
                d="M870.76,314.5,870.17,763l14.73,7.61,14.47-7.49a.49.49,0,0,0,.27-.44l.58-447.83a.51.51,0,0,0-.28-.45l-14.45-7Z"
                stroke="white" stroke-width="5" />
            <path id="Line5" class="cls-1"
                d="M540.21,134.1,885.49,307.32V326.8l-14.73,7.36L525.26,160.83V141.19l14.51-7.09A.49.49,0,0,1,540.21,134.1Z"
                stroke="white" stroke-width="5" />
            <path id="Line6" class="cls-1"
                d="M525.26,141.19,180.6,314.62a.49.49,0,0,0-.28.44v19.33L195.05,342,540,168.44V147.59Z" stroke="white"
                stroke-width="5" />



            <polygon id="Line7" class="cls-1"
                points="870.17 762.96 739.28 698.87 739.28 679.23 754.01 672.03 884.9 736.12 884.9 755.64 870.17 762.96"
                stroke="white" stroke-width="5" />
            <polygon id="Line8" class="cls-1"
                points="222.63 757.13 339.43 699.8 339.43 682.73 323.57 673.37 209.04 730.34 209.02 749.78 222.63 757.13"
                stroke="white" stroke-width="5" />

            <polygon id="Line9" class="cls-1"
                points="761.39 404.14 885.49 341.94 885.5 322.86 870.78 314.74 746.71 376.83 746.71 396.47 761.39 404.14"
                stroke="white" stroke-width="5" />
            <polygon id="Line10" class="cls-1"
                points="554.63 414.1 554.72 160.7 539.99 153.5 525.26 160.7 525.17 414.1 539.9 421.71 554.63 414.1"
                stroke="white" stroke-width="5" />



            <polygon id="Line11" class="cls-1"
                points="554.72 599.82 554.72 580.18 539.99 572.98 525.26 580.18 525.26 599.82 539.99 607.43 554.72 599.82"
                stroke="white" stroke-width="5" />
            <polygon id="Line12" class="cls-1"
                points="588.6 631.72 539.99 607.43 539.99 588.42 554.72 580.18 603.36 604.65 603.38 624.09 588.6 631.72"
                stroke="white" stroke-width="5" />
            <polygon id="Line13" class="cls-1"
                points="491.29 631.85 539.9 607.56 539.9 588.55 525.17 580.31 476.54 604.78 476.51 624.22 491.29 631.85"
                stroke="white" stroke-width="5" />

            <path id="Line14" class="cls-1"
                d="M614.91,444.72,412.64,343.57l-9.27-4.73-.09.05L278.91,276.7,202,334.21l.19,96,115.35,57.69V833.3l85.83,43.09L489.2,833.3V573.78l49,24.5,77.49-57.23ZM528.48,566.21l-135-67.46-.18,339.42-53.84-27-.18-339.48-129.1-64.52-.11-60.24,178.63,89,4.82,2.39h0l135.11,67.32Z"
                stroke="white" stroke-width="5" />


            <path id="Line15" class="cls-1"
                d="M761.44,381.94l-85.83-43.1-85.83,43.1V832.66l85.83,43.73,85.83-43.73Zm-22.23,430.2-53.83,27-.22-402.23L739.43,410Z"
                stroke="white" stroke-width="5" />





        </svg>
        <svg id="NewLogo2" class="Line" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1080 1080">
            <defs>
                <style>
                .cls-1 {
                    fill: #fff;
                }
                </style>
            </defs>
            <polygon class="cls-1"
                points="554.72 599.82 554.72 580.18 539.99 572.98 525.26 580.18 525.26 599.82 539.99 607.43 554.72 599.82" />
            <polygon class="cls-1"
                points="588.6 631.72 539.99 607.43 539.99 588.42 554.72 580.18 603.36 604.65 603.38 624.09 588.6 631.72" />
            <polygon class="cls-1"
                points="491.29 631.85 539.9 607.56 539.9 588.55 525.17 580.31 476.54 604.78 476.51 624.22 491.29 631.85" />
            <polygon class="cls-1"
                points="554.63 414.1 554.72 160.7 539.99 153.5 525.26 160.7 525.17 414.1 539.9 421.71 554.63 414.1" />
            <path class="cls-1"
                d="M614.91,444.72,412.64,343.57l-9.27-4.73-.09.05L278.91,276.7,202,334.21l.19,96,115.35,57.69V833.3l85.83,43.09L489.2,833.3V573.78l49,24.5,77.49-57.23ZM528.48,566.21l-135-67.46-.18,339.42-53.84-27-.18-339.48-129.1-64.52-.11-60.24,178.63,89,4.82,2.39h0l135.11,67.32Z" />
            <polygon class="cls-1"
                points="222.63 757.13 339.43 699.8 339.43 682.73 323.57 673.37 209.04 730.34 209.02 749.78 222.63 757.13" />
            <path class="cls-1"
                d="M525.26,141.19,180.6,314.62a.49.49,0,0,0-.28.44v19.33L195.05,342,540,168.44V147.59Z" />
            <polygon class="cls-1"
                points="761.39 404.14 885.49 341.94 885.5 322.86 870.78 314.74 746.71 376.83 746.71 396.47 761.39 404.14" />
            <path class="cls-1"
                d="M540.21,134.1,885.49,307.32V326.8l-14.73,7.36L525.26,160.83V141.19l14.51-7.09A.49.49,0,0,1,540.21,134.1Z" />
            <path class="cls-1"
                d="M761.44,381.94l-85.83-43.1-85.83,43.1V832.66l85.83,43.73,85.83-43.73Zm-22.23,430.2-53.83,27-.22-402.23L739.43,410Z" />
            <polygon class="cls-1"
                points="870.17 762.96 739.28 698.87 739.28 679.23 754.01 672.03 884.9 736.12 884.9 755.64 870.17 762.96" />
            <path class="cls-1"
                d="M870.76,314.5,870.17,763l14.73,7.61,14.47-7.49a.49.49,0,0,0,.27-.44l.58-447.83a.51.51,0,0,0-.28-.45l-14.45-7Z" />
            <path class="cls-1"
                d="M539.92,945.89l345-175.32V750.09l-14.73-6.77L526.1,919.21l.26,20,13.11,6.66A.51.51,0,0,0,539.92,945.89Z" />
            <path class="cls-1"
                d="M209.81,334.39l-.13,428.74-15.87,7.29-13.77-7a.49.49,0,0,1-.28-.44l.56-428.57,14.76-7.89Z" />
            <polygon class="cls-1"
                points="539.72 946.01 193.85 770.42 193.85 753.35 209.71 743.99 553.3 919.22 553.05 939.23 539.72 946.01" />
        </svg>
    </div>
    <?php $NAVBAR_SET_IMMERSIVE = true; require_once('components/navbar.php'); ?>
    <div id="carouselExampleIndicators" class="carousel slide carouselmain" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button> -->
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <object data="assets/OFOGAnimation.svg" type=""
                    style="background-color: black; border-bottom-left-radius: 50px;border-bottom-right-radius: 50px;"></object>
                <!-- <img class="d-block w-100" src="assets/Carouselfoto2.png" alt="Second slide"> -->
            </div>
            <!-- <div class="carousel-item">
                <img class="d-block w-100 himti-header-img" src="assets/carousel/himtiexpo.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 himti-header-img" src="assets/carousel/techno2021.jpg" alt="First slide">
            </div> -->

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="upcomingevent container">
        <div class="title">
            <span>Upcoming Events</span>
        </div>
        <div class="upcomingeventdata">
            <a href="http://techno.himti.or.id/" class="linkupcoming" target="_blank">
                <div class="upcomingeventrow">
                    <div style="height: 100%; display: flex;">
                        <img src="assets/TECHNOLOGO.png" alt="" class="logo">
                    </div>

                    <div class="upcomingeventitem">
                        <p>TECHNO 2021: ERA</p>
                        <p data-countdown-enabled="true" data-countdown-timestamp="2021-09-25 13:00:00"></p>
                        <p>25 September 2021</p>
                    </div>
                </div>
            </a>
            <a href="http://hishot.himti.or.id/" class="linkupcoming" target="_blank">
                <div class="upcomingeventrow">
                    <div style="height: 100%; display: flex;">
                        <img src="assets/HISHOTLOGO.png" alt="" class="logo">
                    </div>

                    <div class="upcomingeventitem">
                        <p>HISHOT 2021: STRONGER</p>
                        <p data-countdown-enabled="true" data-countdown-timestamp="2021-09-25 13:00:00"></p>
                        <p>25 September 2021</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- <div class="upcomingeventdata">
            <a href="http://http.himti.or.id/" class="linkupcoming" target="_blank">
                <div class="upcomingeventrow">
                    <div style="height: 100%; display: flex;">
                        <img src="assets/TECHNOLOGO.png" alt="" class="logo">
                    </div>

                    <div class="upcomingeventitem">
                        <p>Techno 2021: ERA</p>
                        <p>TIME</p>
                        <p>16 September 2021</p>
                    </div>
                </div>
            </a>
            <a href="http://hishot.himti.or.id/" class="linkupcoming" target="_blank">
                <div class="upcomingeventrow">
                    <div style="height: 100%; display: flex;">
                        <img src="assets/HISHOTLOGO.png" alt="" class="logo">
                    </div>
                    <div class="upcomingeventitem">
                        <p>HISHOT 2021: Stronger</p>
                        <p> TIME</p>
                        <p>18 September 2021</p>
                    </div>
                </div>
            </a>
        </div> -->
    </div>
    <div class="testimonies">
        <div class="title">
            <span>TESTIMONIES</span>
        </div>
        <div id="carouselExampleIndicators1" class="carousel slide container" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="6"
                    aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="7"
                    aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="8"
                    aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="9"
                    aria-label="Slide 10"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonicarousel">
                        <div class="left row m-0">
                            <picture class="col-6 col-md-12 offset-sm-3 offset-md-0">
                                <source srcset="assets/img/testimonies-thumbnail/JavierFransiscusPhoto.webp"
                                    type="image/webp">
                                <source srcset="assets/img/testimonies-thumbnail/JavierFransiscusPhoto.png"
                                    type="image/png">
                                <img src="assets/img/testimonies-thumbnail/JavierFransiscusPhoto.png"
                                    alt="Javier Fransiscus">
                            </picture>
                            <div class="testimoniprofile col-12 col-md-9  mt-3 mt-md-0" col-xl-12 p-lg-3 mt-3 mt-md-0">
                                <p class="testimoniname mt-2">Javier Fransiscus</p>
                                <!-- <p class="testimoniposition">Apple Developer Academy ( Learner)</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Koor WebDev</p> -->
                                <p>Web Development Coordinator (2020)<br><b>&#8594; Learner, Apple Developer Academy</b>
                                </p>
                            </div>
                        </div>
                        <div class="right mt-3 mt-md-0">
                            <p class="testimoniisi fs-5">
                                &ldquo;Berada di HIMTI memungkinkan aku untuk <b>bertemu dengan banyak teman teman
                                    SOCS</b> termasuk yang senior yang dapat memberikan insight untuk internship
                                nanti.&rdquo;
                                <br><br><a href="/testimonies.php#javier-fransiscus" class="readmorebutton">Read Full
                                    Story</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left row m-0">
                            <picture class="col-6 col-md-12 offset-sm-3 offset-md-0">
                                <source srcset="assets/img/testimonies-thumbnail/FelixPhoto.webp" type="image/webp">
                                <source srcset="assets/img/testimonies-thumbnail/FelixPhoto.png" type="image/png">
                                <img src="assets/img/testimonies-thumbnail/FelixPhoto.png" alt="Felix">
                            </picture>
                            <div class="testimoniprofile col-12 col-md-9  mt-3 mt-md-0" col-xl-12 p-lg-3 mt-3 mt-md-0">
                                <p class="testimoniname mt-2">Felix</p>
                                <!-- <p class="testimoniposition">Application Developer di PT Mayora Indah Tbk<br>
                                    UIUX Designer di Corn Learning
                                </p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">General Manager Commision Three</p> -->
                                <p>Commission III General Manager (2020)<br><b>&#8594; Application Developer, Mayora</b>
                                </p>
                            </div>
                        </div>
                        <div class="right mt-3 mt-md-0">
                            <p class="testimoniisi fs-5">
                                &ldquo;HIMTI sendiri menurut aku adalah tempat dimana kita <b>bisa belajar dengan metode
                                    trial and error untuk berinovasi membuat hal baru</b>, dimana di dunia pekerjaan
                                tidak bisa asal melakukan kesalahan untuk mencoba hal baru.&rdquo;
                                <br><br><a href="/testimonies.php#felix" class="readmorebutton">Read Full Story</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left row m-0">
                            <picture class="col-6 col-md-12 offset-sm-3 offset-md-0">
                                <source srcset="assets/img/testimonies-thumbnail/BayuArdanaPhoto.webp"
                                    type="image/webp">
                                <source srcset="assets/img/testimonies-thumbnail/BayuArdanaPhoto.png" type="image/png">
                                <img src="assets/img/testimonies-thumbnail/BayuArdanaPhoto.png" alt="Bayu Ardana">
                            </picture>
                            <div class="testimoniprofile col-12 col-md-9  mt-3 mt-md-0" col-xl-12 p-lg-3 mt-3 mt-md-0">
                                <p class="testimoniname mt-2">Bayu Ardana</p>
                                <!-- <p class="testimoniposition">Co-Founder of ignitevent.id</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Vice President of HISHOT 2020 <br> PIC of HIMTIBAND 2020
                                    <br>Publication & Marketing Staff -->
                                <p>PIC of HIMTI Band (2020)<br><b>&#8594; Co-Founder, ignitevent.id</b></p>
                                </p>
                            </div>
                        </div>
                        <div class="right mt-3 mt-md-0">
                            <p class="testimoniisi fs-5">
                                &ldquo;Kalau kalian udah sayang sama HIMTI dari awal, <b>secapek apapun kalian kerjanya
                                    bakal tetep ikhlas dan enjoy</b>.&rdquo;
                                <br><br><a href="/testimonies.php#bayu-ardana" class="readmorebutton">Read Full
                                    Story</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left row m-0">
                            <picture class="col-6 col-md-12 offset-sm-3 offset-md-0">
                                <source srcset="assets/img/testimonies-thumbnail/HanifKusumaPhoto.webp"
                                    type="image/webp">
                                <source srcset="assets/img/testimonies-thumbnail/HanifKusumaPhoto.png" type="image/png">
                                <img src="assets/img/testimonies-thumbnail/HanifKusumaPhoto.png" alt="Hanif Kusuma">
                            </picture>
                            <div class="testimoniprofile col-12 col-md-9  mt-3 mt-md-0" col-xl-12 p-lg-3 mt-3 mt-md-0">
                                <p class="testimoniname mt-2">Hanif Kusuma</p>
                                <!-- <p class="testimoniposition">Web Developer Intern at PT Kalbe Farma, Tbk <br> Co-Founder
                                    of ignitevent.id</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Vice President of HISHOT 2020 <br> President of HIMTI
                                    Anniversary 2020</p> -->
                                <p>President of HIMTI Anniversary 2020<br><b>&#8594; Co-Founder, ignitevent.id</b></p>
                            </div>
                        </div>
                        <div class="right mt-3 mt-md-0">
                            <p class="testimoniisi fs-5">
                                &ldquo;Selama di HIMTI tidak pernah ada yang disesali sih, <b>walaupun ada masa-masa
                                    down-nya tapi karena dilewati bareng temen-temen yang lain jadi dibawa enjoy
                                    aja</b>. Masa-masa itu sekarang jadi cerita yang berkesan kalau diinget-inget
                                lagi.&rdquo;
                                <br><br><a href="/testimonies.php#hanif-kusuma" class="readmorebutton">Read Full
                                    Story</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left row m-0">
                            <picture class="col-6 col-md-12 offset-sm-3 offset-md-0">
                                <source srcset="assets/img/testimonies-thumbnail/SalsabilaAzariaPhoto.webp"
                                    type="image/webp">
                                <source srcset="assets/img/testimonies-thumbnail/SalsabilaAzariaPhoto.png"
                                    type="image/png">
                                <img src="assets/img/testimonies-thumbnail/SalsabilaAzariaPhoto.png"
                                    alt="Salsabila Azaria">
                            </picture>
                            <div class="testimoniprofile col-12 col-md-9  mt-3 mt-md-0" col-xl-12 p-lg-3 mt-3 mt-md-0">
                                <p class="testimoniname mt-2">Salsabila Azaria</p>
                                <!-- <p class="testimoniposition">Software Development Engineer Intern at DANA Indonesia</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Head of HRD HIMTI Alam Sutera (2020)</p> -->
                                <p>Head of HRD HIMTI Alam Sutera (2020)<br><b>&#8594; Software Engineer, DANA
                                        Indonesia</b></p>
                            </div>
                        </div>
                        <div class="right mt-3 mt-md-0">
                            <p class="testimoniisi fs-5">
                                &ldquo;Di HIMTI ini aku bukan hanya belajar gimana caranya menjalankan event dan
                                organisasi secara umum, tapi juga <b>nilai-nilai kehidupan yang akhirnya sampai sekarang
                                    ilmunya diterapin di daily-life aku sendiri</b>.&rdquo;
                                <br><br><a href="/testimonies.php#salsabila-azaria" class="readmorebutton">Read Full
                                    Story</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left row m-0">
                            <picture class="col-6 col-md-12 offset-sm-3 offset-md-0">
                                <source srcset="assets/img/testimonies-thumbnail/KennyOngkoPhoto.webp"
                                    type="image/webp">
                                <source srcset="assets/img/testimonies-thumbnail/KennyOngkoPhoto.png" type="image/png">
                                <img src="assets/img/testimonies-thumbnail/KennyOngkoPhoto.png" alt="Kenny Ongko">
                            </picture>
                            <div class="testimoniprofile col-12 col-md-9  mt-3 mt-md-0" col-xl-12 p-lg-3 mt-3 mt-md-0">
                                <p class="testimoniname mt-2">Kenny Ongko</p>
                                <!-- <p class="testimoniposition">Google Bangkit, Cloud Computing</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">President of HIMTI Alam Sutera </p> -->
                                <p>President of HIMTI Alam Sutera (2020)<br><b>&#8594; Cloud Computing, Google
                                        Bangkit</b></p>
                            </div>
                        </div>
                        <div class="right mt-3 mt-md-0">
                            <p class="testimoniisi fs-5">
                                &ldquo;<b>Buatlah HIMTI sebagai taman bermain,</b> bukan hanya untuk mencari teman dan
                                bersenang, <b>tapi juga sebagai tempat bereskperimen untuk tumbuh dan
                                    berkembang</b>.&rdquo;
                                <br><br><a href="/testimonies.php#kenny-ongko" class="readmorebutton">Read Full
                                    Story</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left row m-0">
                            <picture class="col-6 col-md-12 offset-sm-3 offset-md-0">
                                <source srcset="assets/img/testimonies-thumbnail/MesyellaPhoto.webp" type="image/webp">
                                <source srcset="assets/img/testimonies-thumbnail/MesyellaPhoto.png" type="image/png">
                                <img src="assets/img/testimonies-thumbnail/MesyellaPhoto.png" alt="Mesyella">
                            </picture>
                            <div class="testimoniprofile col-12 col-md-9  mt-3 mt-md-0" col-xl-12 p-lg-3 mt-3 mt-md-0">
                                <p class="testimoniname mt-2">Mesyella</p>
                                <!-- <p class="testimoniposition">Data Science di PT Global Digital Niaga (Blibli.com)</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Vice President of HIMTI Alam Sutera</p> -->
                                <p>Vice President of HIMTI Alam Sutera (2020)<br><b>&#8594; Data Science, Blibli.com</b>
                                </p>
                            </div>
                        </div>
                        <div class="right mt-3 mt-md-0">
                            <p class="testimoniisi fs-5">
                                &ldquo;Di sini, aku juga belajar banyak banget hal karena di HIMTI <b>aku dikasih
                                    kesempatan buat bisa keluar dari comfort zone</b> dan mencoba hal-hal yang mungkin
                                ga akan aku bisa coba di masa kerja ataupun ketika lulus kuliah.&rdquo;
                                <br><br><a href="/testimonies.php#mesyella" class="readmorebutton">Read Full Story</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left row m-0">
                            <picture class="col-6 col-md-12 offset-sm-3 offset-md-0">
                                <source srcset="assets/img/testimonies-thumbnail/MarissaLevianiPhoto.webp"
                                    type="image/webp">
                                <source srcset="assets/img/testimonies-thumbnail/MarissaLevianiPhoto.png"
                                    type="image/png">
                                <img src="assets/img/testimonies-thumbnail/MarissaLevianiPhoto.png"
                                    alt="Marissa Leviani">
                            </picture>
                            <div class="testimoniprofile col-12 col-md-9  mt-3 mt-md-0" col-xl-12 p-lg-3 mt-3 mt-md-0">
                                <p class="testimoniname mt-2">Marissa Leviani </p>
                                <!-- <p class="testimoniposition">Google Bangkit, Cloud Computing</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Secretary of HIMTI Alam Sutera </p> -->
                                <p>HIMTI Alam Sutera Secretary (2020)<br><b>&#8594; Cloud Computing, Google Bangkit</b>
                                </p>
                            </div>
                        </div>
                        <div class="right mt-3 mt-md-0">
                            <p class="testimoniisi fs-5">
                                &ldquo;<b>Jangan sia-sia in masa-masa kuliah kalian dengan pasif</b>, ga ikut
                                berorganisasi apalagi ga ikut HIMTI, karena <b>banyak hal yang ga bisa kalian coba atau
                                    lakuin setelah lulus kuliah nanti</b>.&rdquo;
                                <br><br><a href="/testimonies.php#marissa-leviani" class="readmorebutton">Read Full
                                    Story</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left row m-0">
                            <picture class="col-6 col-md-12 offset-sm-3 offset-md-0">
                                <source srcset="assets/img/testimonies-thumbnail/ErikaNataliaNugrohoPhoto.webp"
                                    type="image/webp">
                                <source srcset="assets/img/testimonies-thumbnail/ErikaNataliaNugrohoPhoto.png"
                                    type="image/png">
                                <img src="assets/img/testimonies-thumbnail/ErikaNataliaNugrohoPhoto.png"
                                    alt="Erika Natalia Nugroho">
                            </picture>
                            <div class="testimoniprofile col-12 col-md-9 mt-3 mt-md-0" col-xl-12 p-lg-3 mt-3 mt-md-0">
                                <p class="testimoniname mt-2">Erika Natalia Nugroho</p>
                                <!-- <p class="testimoniposition">Front end developer maybank</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Sekretaris Kemanggisan</p> -->
                                <p>HIMTI Kemanggisan Secretary (2020)<br><b>&#8594; Front-End Developer, Maybank</b></p>
                            </div>
                        </div>
                        <div class="right mt-3 mt-md-0">
                            <p class="testimoniisi fs-5">
                                &ldquo;Selama dulu di HIMTI, banyak banget pengalaman pengalaman seru yang ga bisa
                                dilupain. <b>Seneng banget bisa ketemu banyak temen teman baru yang udah kaya keluarga
                                    sendiri.</b>&rdquo;
                                <br><br><a href="/testimonies.php#erika-natalia-nugroho" class="readmorebutton">Read
                                    Full
                                    Story</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left row m-0">
                            <picture class="col-6 col-md-12 offset-sm-3 offset-md-0">
                                <source srcset="assets/img/testimonies-thumbnail/FeliciaAngelinePhoto.webp"
                                    type="image/webp">
                                <source srcset="assets/img/testimonies-thumbnail/FeliciaAngelinePhoto.png"
                                    type="image/png">
                                <img src="assets/img/testimonies-thumbnail/FeliciaAngelinePhoto.png"
                                    alt="Felicia Angeline">
                            </picture>
                            <div class="testimoniprofile col-12 col-md-9  mt-3 mt-md-0" col-xl-12 p-lg-3 mt-3 mt-md-0">
                                <p class="testimoniname mt-2">Felicia Angeline</p>
                                <!-- <p class="testimoniposition">Data Engineer BCA</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Divisi PM ( 2019 )<br> Chairman Himti ( 2020 )</p> -->
                                <p>Chairman HIMTI 2020<br><b>&#8594; Data Engineer, BCA</b></p>
                            </div>
                        </div>
                        <div class="right mt-3 mt-md-0">
                            <p class="testimoniisi fs-5">
                                &ldquo;Dulu pas pertama kali daftar HIMTI kiranya pas keluar cuman buat menuh-menuhin
                                CV, tapi nyatanya <b>aku dapat keluarga baru yang ngasih aku banyak banget pengalaman
                                    berharga</b>.&rdquo;
                                <br><br><a href="/testimonies.php#felicia-angeline" class="readmorebutton">Read Full
                                    Story</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonidata container">
            <div class="testimonirow">
                <picture width="100%">
                    <source srcset="assets/img/testimonies-thumbnail/FeliciaAngelinePhoto.webp" type="image/webp">
                    <source srcset="assets/img/testimonies-thumbnail/FeliciaAngelinePhoto.png" type="image/png">
                    <img width="100%" src="assets/img/testimonies-thumbnail/FeliciaAngelinePhoto.png"
                        alt="Felicia Angeline">
                </picture>
                <div class="testimoniitem">
                    <p class="testimoniname mt-2">Felicia Angeline</p>
                    <p class="testimoniposition">Data Engineer BCA</p>
                    <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                    <p class="testimoniexperience">Divisi PM (2019)<br>Chairman Himti (2020)</p>
                </div>
            </div>
            <div class="testimonirow">
                <picture width="100%">
                    <source srcset="assets/img/testimonies-thumbnail/SalsabilaAzariaPhoto.webp" type="image/webp">
                    <source srcset="assets/img/testimonies-thumbnail/SalsabilaAzariaPhoto.png" type="image/png">
                    <img width="100%" src="assets/img/testimonies-thumbnail/SalsabilaAzariaPhoto.png"
                        alt="Salsabila Azaria">
                </picture>
                <div class="testimoniitem">
                    <p class="testimoniname mt-2">Salsabila Azaria</p>
                    <p class="testimoniposition">Software Development Engineer Intern at DANA Indonesia</p>
                    <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                    <p class="testimoniexperience">Head of HRD HIMTI Alam Sutera (2020)</p>
                </div>
            </div>
            <div class="testimonirow">
                <picture width="100%">
                    <source srcset="assets/img/testimonies-thumbnail/FelixPhoto.webp" type="image/webp">
                    <source srcset="assets/img/testimonies-thumbnail/FelixPhoto.png" type="image/png">
                    <img width="100%" src="assets/img/testimonies-thumbnail/FelixPhoto.png" alt="Felix">
                </picture>
                <div class="testimoniitem">
                    <p class="testimoniname mt-2">Felix</p>
                    <p class="testimoniposition">Application Developer di PT Mayora Indah Tbk<br>
                        UIUX Designer di Corn Learning</p>
                    <p class="testimoniperiode">Kepengurusan Himti : 2019- 2020</p>
                    <p class="testimoniexperience">General Manager of Commision Three HIMTI Alam Sutera ( 2020 )</p>
                </div>
            </div>
            <div class="testimonirow">
                <picture width="100%">
                    <source srcset="assets/img/testimonies-thumbnail/KennyOngkoPhoto.webp" type="image/webp">
                    <source srcset="assets/img/testimonies-thumbnail/KennyOngkoPhoto.png" type="image/png">
                    <img width="100%" src="assets/img/testimonies-thumbnail/KennyOngkoPhoto.png" alt="Kenny Ongko">
                </picture>
                <div class="testimoniitem">
                    <p class="testimoniname mt-2">Kenny Ongko</p>
                    <p class="testimoniposition">Google Bangkit, Cloud Computing</p>
                    <p class="testimoniperiode">Kepengurusan Himti : 2019- 2020</p>
                    <p class="testimoniexperience">President of HIMTI Alam Sutera ( 2020 )</p>
                </div>
            </div>
        </div>
        <div class="viewtestimoni"><a href="/testimonies.php" class="btn btn-sm animated-button thar-three ">View All
                Testimonies</a>
        </div>
    </div>
    <div class="ourarticle">
        <div class="title">
            <span>Our Articles</span>
        </div>
        <div class="container">
            <div class="row" id="RSSarticle">

            </div>

        </div>
        <div class="articledata d-flex" style="overflow-x: auto;">

        </div>

        <div class="viewtestimoni mt-3"><a href="https://student-activity.binus.ac.id/himti"
                class="btn btn-light btn-lg text-dark">View All Articles</a></div>
    </div>
    <div class="title white" style="background-color: #0c0217;">
        <span>Our Journey</span>
    </div>
    <div class="OURJOURNEY">

        <div class="circletab" style="max-width: 1536px; margin: 0 auto;">
            <div class="journeylist">

                <div id="journey4" class="datajourney">
                    Acara HIMTI Togetherness & Top Performance (HTTP) pertama kali diselenggarakan pada tahun 2012.
                    Event ini khusus dibuat untuk menyambut mahasiswa/i baru yang berada di naungan School of
                    Computer
                    Science (SOCS). Pada tahun pertama diselenggarakan, HTTP mengambil tema TRUST (Together Reach
                    Unique
                    & Solid Team). Acara ini diselenggarakan pada tanggal 15 September 2012 di Gedung BPPT II.
                </div>
                <div id="journey5" class="datajourney">
                    HIMTI mengadakan event HIESTA (HIMTI Seminar Workshop and Study Tour Alam Sutera) yang bertema
                    “BEAT
                    (Be Experienced in Advanced Technology)". Dalam acara ini selain Seminar dan Workshop, tersedia
                    acara Study Tour Luar Negeri ke Singapore.

                    HIMTI juga mengadakan event Euphoria yang merupakan event khusus yang dibuat bagi para mahasiswa
                    untuk melepas penat setelah UTS. Dalam event ini, HIMTI sukses memecahkan rekor MURI: "Papan
                    Permainan Ular Tangga berisi Fakta Teknologi Terbanyak dan Terpanjang di Indonesia".

                </div>
                <div id="journey3" class="datajourney activejourney">
                    <img src="assets/HEXIONLOGO.png" alt="" width="25%"><br>
                    Tahun ini menjadi tahun pertama HIMTI menyelenggarakan acara “HEXION”. HEXION merupakan HIMTI
                    Expo
                    and
                    Competition, disini adanya expo HIMTI serta lomba-lomba yang bertujuan untuk mengasah skill
                    peserta
                    tentunya dalam bidang teknologi. HEXION pertama kali diselenggarakan pada tanggal 29 November
                    2011 -
                    3
                    Desember 2011 di Kampus Anggrek Binus University.<br><br>

                    Pada tahun ini juga, HIMTI mengadakan event "HISTORIA". HISTORIA merupakan HIMTI Study Tour In
                    Asia.
                    Event bertema "Learn.Fun.Experience." ini dibagi menjadi 2, yaitu study tour dalam negeri dan
                    study
                    tour
                    luar negeri. Acara ini berlangsung dari tanggal 5 - 9 September 2011. Study tour dalam negeri
                    pertama
                    kali kita mengunjungi Pabrik Sari Roti dan perusahaan Indogamers. Untuk study tour luar negeri,
                    kita
                    mengunjungi Thailand (Bangkok - Pattaya).
                </div>
                <div id="journey1" class="datajourney">
                    HIMTI dipimpin oleh Sdr. Petrus Rudy dan Sdr. Bayu Waseso sebagai ketua dan wakil. Pada masa
                    kepengurusan ini, mulai banyak kegiatan-kegiatan HIMTI yang dilakukan. Salah satu kegiatannya
                    adalah
                    Responsi.
                </div>
                <div id="journey2" class="datajourney">
                    Pada tahun ini, ide Bapak Ir. Toto Widyanto, MSc. direalisasikan yaitu mendirikan suatu wadah
                    bagi
                    para mahasiswa jurusan Teknik Informatika sehingga memberikan sumbangsih yang nyata dalam
                    perkembangan IT di Indonesia sekaligus melatih kemampuan manajemen kepemimpinan dalam
                    berorganisasi.
                    Organisasi itu diberi nama HIMTI (Himpunan Mahasiswa Teknik Informatika).
                </div>

                <div id="journey6" class="datajourney">
                    Di tahun ini, HIMTI berhasil menyelenggarakan event kolaborasi baru bersama HIMSISFO yaitu
                    Computerun. Computerun merupakan acara terbesar yang dibuat untuk menantang mahasiswa/i dalam
                    membuat karyanya di bidang Business-IT. Untuk pertama kalinya, Computerun mengambil tema
                    “Insight”
                    dan diselenggarakan mulai dari bulan Oktober 2020 hingga bulan Januari 2021.

                </div>
                <div id="journey7" class="datajourney">
                    Di tahun 2018, HIMTI pertama kali berkolaborasi dengan tiga organisasi kemahasiswaan lainnya.
                    Event
                    kolaborasi ini dinamai ICF yang merupakan kepanjangan dari International Computer Festival.
                    Event
                    ini bertujuan untuk mengasah skill-skill mahasiswa/i dalam bidang IT tentunya.

                </div>
            </div>
        </div>
        <div>
            <div id="circularMenu1" class="circular-menu circular-menu-left active">



                <menu class="items-wrapper">
                    <!-- <button id="1" onclick="changeposition(this.id)" class="menu-item deg0">2011</button>
                    <button id="2" onclick="changeposition(this.id)" class="menu-item deg36">1994</button> -->
                    <!-- <button id="1" onclick="changeposition(this.id)" class="menu-item deg72 ">1992</button> -->
                    <button id="1" onclick="changeposition(this.id)" class="menu-item deg108">2013</button>
                    <button id="2" onclick="changeposition(this.id)" class="menu-item deg144">2012</button>
                    <button id="3" onclick="changeposition(this.id)" class="menu-item deg180 activetab">2011</button>
                    <button id="4" onclick="changeposition(this.id)" class="menu-item deg216">1994</button>
                    <button id="5" onclick="changeposition(this.id)" class="menu-item deg252">1992</button>
                    <button id="6" onclick="changeposition(this.id)" class="menu-item deg288">2020</button>
                    <button id="7" onclick="changeposition(this.id)" class="menu-item deg324">2018</button>


                </menu>
                <img src="assets//CircleTab.png" alt="" class="backgroundtab">
            </div>
        </div>

    </div>
    <div class="pattern">
        <object data="assets/Transition.svg" alt="pattern-contact" class="objectdata"></object>
    </div>
    <div class="gallery min-vh-100">
        <div class="title" style="padding-top: 0;">
            <span>Gallery</span>
        </div>
        <div class="container-lg pt-5">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <img src="assets/img/gallery/1.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="assets/img/gallery/2.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="assets/img/gallery/3.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="assets/img/gallery/4.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="assets/img/gallery/5.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="assets/img/gallery/6.jpg" class="gallery-item" alt="gallery">
                </div>
            </div>
        </div>
    </div>
    <div class="FAQ mb-5">
        <div class="title" style="padding-top: 0;">
            <span>FREQUENTLY ASKED QUESTIONS</span>
        </div>
        <div class="container col-sm-12 my-5">
            <div class="accordion" id="accordionSection">
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne">Apa
                            kepanjangan HIMTI BINUS?</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseOne" data-bs-parent="#accordionSection">
                        <div class="accordion-body">
                            HIMTI BINUS merupakan kepanjangan dari Himpunan
                            Mahasiswa Teknik Informatika Universitas Bina Nusantara.
                        </div>
                    </div>

                </div>
                <div class="accordion-item  mb-3">
                    <h2 class="accordion-header">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">Ada
                            berapa komisi dan divisi dalam HIMTI?</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionSection">
                        <div class="accordion-body">
                            Di HIMTI BINUS sendiri terdapat tiga komisi yang terdiri dari dua divisi di tiap
                            komisi.<br>
                            Komisi 1 yaitu ‘Education’ terdiri dari divisi Programming Class dan divisi Responsi.
                            <br>Komisi
                            2 yaitu ‘Relation Expansion’ terdiri dari divisi Publication and Marketing dan divisi
                            HIMTI
                            Care.<br>
                            Terakhir, Komisi 3 yaitu ‘Research and Development’ terdiri dari divisi Creative and
                            Design
                            dan divisi Web Development.<br>
                            <br>

                            Untuk penjelasan lebih lengkapnya lagi, kamu dapat mengunjungi laman ini

                        </div>
                    </div>

                </div>
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree">Mengapa
                            saya harus menjadi aktivis/pengurus HIMTI?</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionSection">
                        <div class="accordion-body">
                            Dengan menjadi aktivis/pengurus HIMTI, kamu bisa mendapatkan banyak sekali manfaat
                            seperti
                            menambah relasi, mengembangkan soft skill serta hard skill, bagaimana mengelola waktu
                            dengan
                            lebih baik, dan tentunya masih banyak lagi manfaat lainnya yang akan kamu rasakan ketika
                            sudah menjadi aktivis/pengurus.
                            Yakin gak mau join? :)

                        </div>
                    </div>

                </div>
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour">Apakah
                            menjadi aktivis/pengurus HIMTI mengganggu aktivitas perkuliahan?</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseFour" data-bs-parent="#accordionSection">
                        <div class="accordion-body">
                            Tentu saja tidak. Dengan catatan, kamu dapat mengatur dan membagi waktu kamu dengan baik
                            mulai dari aktivitas perkuliahan, organisasi, dan beragam aktivitas lainnya. Time
                            management
                            yang baik itu penting, loh.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="viewtestimoni"><a href="/faq.php" class="btn btn-sm animated-button thar-three ">View All FAQs</a>
        </div>
    </div>

    <?php require_once('components/footer.php') ?>
    <script src="script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="assets/js/vanilla-tilt.min.js"></script>
    <script>
    VanillaTilt.init(document.querySelectorAll(".upcomingeventrow"), {
        max: 25,
        speed: 400
    });

    //It also supports NodeList
    VanillaTilt.init(document.querySelectorAll(".upcomingeventrow"));
    </script>
    <script src="./RSShandle.js"></script>
</body>

</html>