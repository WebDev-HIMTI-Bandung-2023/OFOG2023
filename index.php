<?php
$req_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path_alias = ['about', 'faq', 'tellus', 'tellus-thanks', 'testimonies'];
for ($i = 0; $i < count($path_alias); $i++) if ($req_path == "/$path_alias[$i]") {
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
    include('function/connection.php');
    $query = mysqli_query($koneksi, "SELECT * FROM carousel WHERE ActiveUntil >= current_timestamp");
    $CarouselData = array();
    while ($row = mysqli_fetch_array($query)) {
        $CarouselData[] = $row;
    }
    ?>
</head>

<body>
    <?php $NAVBAR_SET_IMMERSIVE = true;
    require_once('components/navbar.php'); ?>
    <div id="carouselExampleIndicators" class="carousel slide carouselmain" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php
            if ($CarouselData != null || count($CarouselData) != 0) {
                $Number = 0;
                foreach ($CarouselData as $row) {
                    if ($Number == 0) {
                        echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>';
                        $Number += 1;
                    } else {
                        echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $Number . '"
                aria-label="Slide ' . $Number + 1 . '"></button>';
                        $Number += 1;
                    }
                }
            } else {
                echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
            }
            ?>
        </div>
        <div class="carousel-inner">

            <?php
            $Number = 0;
            if ($CarouselData != null || count($CarouselData) != 0) {
                foreach ($CarouselData as $row) {
                    if ($Number == 0) {
                        echo '<div class="carousel-item active"><img class="d-block w-100 himti-header-img" src="' . $row['ImageLink'] . '" alt="' . $row['ImageName'] . '"></div>';
                        $Number += 1;
                    } else {
                        echo '<div class="carousel-item"><img class="d-block w-100 himti-header-img" src="' . $row['ImageLink'] . '" alt="' . $row['ImageName'] . '"></div>';
                        $Number += 1;
                    }
                }
            } else {
                echo '<div class="carousel-item active">
                            <object data="assets/OFOGAnimation.svg" type=""
                                style="background-color: black; border-bottom-left-radius: 50px;border-bottom-right-radius: 50px;"></object>
                        </div>';
            }
            ?>

        </div>
        <?php
        if ($CarouselData != null && count($CarouselData) > 1) {
            echo '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>';
        }
        ?>
    </div>

    <div class="upcomingevent container">
        <div class="title">
            <span>Upcoming Events</span>
        </div>
        <div class="upcomingeventdata">
            <a href="http://techno.himti.or.id/" class="linkupcoming" target="_blank">
                <div class="upcomingeventrow">
                    <div style="height: 100%; display: flex;">
                        <img src="assets/ComingSoon.png" alt="" class="logo">
                    </div>

                    <div class="upcomingeventitem">
                        <p>TECHNO 2022</p>
                        <!-- <p data-countdown-enabled="true" data-countdown-timestamp="2021-09-25 13:00:00"></p> -->
                        <p>COMING SOON</p>
                    </div>
                </div>
            </a>
            <a href="http://hishot.himti.or.id/" class="linkupcoming" target="_blank">
                <div class="upcomingeventrow">
                    <div style="height: 100%; display: flex;">
                        <img src="assets/HISHOT2022.png" alt="" class="logo">
                    </div>

                    <div class="upcomingeventitem">
                        <p>HISHOT 2022: CONNECT</p>
                        <p data-countdown-enabled="true" data-countdown-timestamp="2022-06-09 13:00:00"></p>
                        <p>09 June 2022</p>
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