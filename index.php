<?php
    $req_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    switch ($req_path){
        case '/faq': header("Location: /faq.php"); die(); break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $TITLE = 'HOME';
        require('components/head.php');
    ?>
    <script src="./RSShandle.js"></script>
</head>

<body>

    <div id="carouselExampleIndicators" class="carousel slide carouselmain" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <object data="Assets/OFOGAnimation.svg" type=""
                    style="background-color: black; border-bottom-left-radius: 50px;border-bottom-right-radius: 50px;"></object>
                <!-- <img class="d-block w-100" src="Assets/Carouselfoto2.png" alt="Second slide"> -->
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Assets/Carouselfoto1.png" alt="First slide">
            </div>

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
            <span>Upcoming Event</span>
        </div>
        <div class="upcomingeventdata">
            <a href="http://http.himti.or.id/" class="linkupcoming" target="_blank">
                <div class="upcomingeventrow">
                    <div style="height: 100%; display: flex;">
                        <img src="Assets/TECHNOLOGO.png" alt="" class="logo">
                    </div>

                    <div class="upcomingeventitem">
                        <p>Techno 2021: ERA</p>
                        <p id="timetechno"></p>
                        <p>16 September 2021</p>
                    </div>
                </div>
            </a>
            <a href="http://hishot.himti.or.id/" class="linkupcoming" target="_blank">
                <div class="upcomingeventrow">
                    <div style="height: 100%; display: flex;">
                        <img src="Assets/HISHOTLOGO.png" alt="" class="logo">
                    </div>
                    <div class="upcomingeventitem">
                        <p>HISHOT 2021: Stronger</p>
                        <p id="timehishot"></p>
                        <p>18 September 2021</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="upcomingeventdata">
            <a href="http://http.himti.or.id/" class="linkupcoming" target="_blank">
                <div class="upcomingeventrow">
                    <div style="height: 100%; display: flex;">
                        <img src="Assets/TECHNOLOGO.png" alt="" class="logo">
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
                        <img src="Assets/HISHOTLOGO.png" alt="" class="logo">
                    </div>
                    <div class="upcomingeventitem">
                        <p>HISHOT 2021: Stronger</p>
                        <p> TIME</p>
                        <p>18 September 2021</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="testimonies">
        <div class="title">
            <span>TESTIMONI</span>
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
                        <div class="left">
                            <img src="Assets/JavierPhoto.png" alt="">
                            <div class="testimoniprofile">
                                <p class="testimoniname">Javier Fransiscus</p>
                                <p class="testimoniposition">Apple Developer Academy ( Learner)</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Koor WebDev</p>
                            </div>
                        </div>
                        <div class="right">
                            <p>Banyak kenangan seru yang tak terlupakan dari acara bareng-bareng, perform di
                                farewell/HTTP, latihan HIMTI band, main tournament valorant semuanya sangat berkesan.
                                Berada di HIMTI memungkinkan aku untuk bertemu dengan banyak teman teman SOCS termasuk
                                yang senior yang dapat memberikan insight untuk internship nanti. HIMTI juga melatih
                                kita untuk lebih bertanggung jawab. Responsi calculus dari HIMTI sangat membantu dalam
                                pembelajaran. Bagi aktivis HIMTI enjoy the moment while you can dan bagi para calon
                                aktivis disini tempat yang tepat untuk berpengalaman berorganisasi.
                            </p>
                            <a href="" class="readmorebutton">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left">
                            <img src="Assets/FelixPhoto.png" alt="">
                            <div class="testimoniprofile">
                                <p class="testimoniname">Felix</p>
                                <p class="testimoniposition">Application Developer di PT Mayora Indah Tbk<br>
                                    UIUX Designer di Corn Learning
                                </p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">General Manager Commision Three</p>
                            </div>
                        </div>
                        <div class="right">
                            <p>Selama menjadi pengurus di HIMTI banyak banget yang bisa dipelajarin. HIMTI sendiri
                                menurut aku adalah tempat dimana kita bisa belajar dengan metode trial and error untuk
                                berinovasi membuat
                                hal baru, dimana di dunia pekerjaan tidak bisa asal melakukan kesalahan untuk
                                mencoba hal baru. Untuk para calon aktivis yang mau coba masuk HIMTI, tidak
                                perlu takut atau ragu untuk menuangkan ide atau gagasan. Mungkin ga berhasil sekarang
                                yang penting bukan masalah bagus atau jelek, tapi berbeda itu jauh lebih bagus.

                            </p>
                            <a href="" class="readmorebutton">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left">
                            <img src="Assets/BayuArdanaPhoto.png" alt="">
                            <div class="testimoniprofile">
                                <p class="testimoniname">Bayu Ardana</p>
                                <p class="testimoniposition">Co-Founder of ignitevent.id</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Vice President of HISHOT 2020 <br> PIC of HIMTIBAND 2020
                                    <br>Publication & Marketing Staff
                                </p>
                            </div>
                        </div>
                        <div class="right">
                            <p>Kesan aku selama di HIMTI ya.. gimana ya.. yang pasti seru, dan yang lebih pasti lagi
                                capek. tapi aku bener-bener tidak nyesel sih dulu memutuskan untuk join HIMTI. Pastinya
                                aku belajar banyak sekali di HIMTI. Di HIMTI, aku juga ketemu orang-orang yang sekarang
                                jadi teman-teman aku yang paling berharga. Momen yang paling memorable selama 2 tahun
                                aku di HIMTI tidak lain tidak bukan adalah pas aku lagi mempersiapkan visu bareng yg
                                lain untuk HTTP 2019. Wah dari mulai senang, sedih, cape, malu, dan bangga aku rasain
                                semua selama visu hahahahah.
                                Sampai kapanpun, HIMTI adalah highlight dari kehidupan kuliah aku. Pesan aku buat HIMTI
                                kedepannya tidak banyak kok, hehe. Pertama, aku mau ngingetin aja HIMTI itu adalah wadah
                                buat nambah pengalaman dan wawasan, tapi tetap tergantung orangnya dulu mau atau tidak
                                untuk pakai wadah tersebut. Kalau kalian join HIMTI tapi tidak mau aktif, ya tidak akan
                                dapat benefitnya, jadi percuma deh. Terakhir, tolong banget nih HIMTInya disayang ya.
                                Kalau kalian udah sayang sama HIMTI dari awal, secapek apapun kalian kerjanya bakal
                                tetep ikhlas dan enjoy.

                            </p>
                            <a href="" class="readmorebutton">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left">
                            <img src="Assets/HanifKusumaPhoto.png" alt="">
                            <div class="testimoniprofile">
                                <p class="testimoniname">Hanif Kusuma</p>
                                <p class="testimoniposition">Web Developer Intern at PT Kalbe Farma, Tbk <br> Co-Founder
                                    of ignitevent.id</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Vice President of HISHOT 2020 <br> President of HIMTI
                                    Anniversary 2020</p>
                            </div>
                        </div>
                        <div class="right">
                            <p>Bersyukur banget sih masuk HIMTI. Bisa dapet temen banyak, bahkan sampai antar region
                                kampus. Banyak pengalaman sama skill yang didapatkan dari HIMTI, karena mengurus event
                                sebagai ketua atau sebagai anggota di banyak divisi berbeda, jadi banyak knowledge yang
                                bisa diambil dari situ. Selama di HIMTI tidak pernah ada yang disesali sih, walaupun ada
                                masa-masa down-nya tapi karena dilewati bareng temen-temen yang lain jadi dibawa enjoy
                                aja. Masa-masa itu sekarang jadi cerita yang berkesan kalau diinget-inget lagi. Pesannya
                                adalah kalau udah masuk HIMTI harus aktif, karena HIMTI itu hanya tempat yang
                                menyediakan. Kita yang harus aktif cari ilmu sebanyak-banyaknya, cari teman
                                sebanyak-banyaknya. Jangan takut salah karena kalau salah paling bakal dirundingin lagi
                                bareng-bareng. Kalo masalah tidak pede, usahain jalanin dulu aja asal ide atau hal yang
                                mau dilakuin itu masuk akal. Bisa saja, itu menjadi inovasi baru di HIMTI. Semangat
                                terus di HIMTI, kalau ketemu masalah ajak teman sebanyak-banyaknya buat stress bareng.
                            </p>
                            <a href="" class="readmorebutton">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left">
                            <img src="Assets/SalsabilaPhoto.png" alt="">
                            <div class="testimoniprofile">
                                <p class="testimoniname">Salsabila Azaria</p>
                                <p class="testimoniposition">Software Development Engineer Intern at DANA Indonesia</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Head of HRD HIMTI Alam Sutera (2020)</p>
                            </div>
                        </div>
                        <div class="right">
                            <p>HIMTI is really something for me. Di HIMTI ini aku belajar banyak banget, bukan hanya
                                belajar gimana caranya handle event / menjalankan organisasi secara umum, tapi belajar
                                juga tipe-tipe orang tuh kayak apa aja dan gimana handlenya, belajar buat terus
                                beradaptasi dan berinovasi dengan kondisi yang ada, pokoknya banyak belajar nilai-nilai
                                kehidupan yang akhirnya sampai sekarang ilmunya diterapin di daily-life aku sendiri.
                                Temen-temen di HIMTI udah kayak keluarga kedua buat aku sih. Kalau lagi suntuk sama
                                kuliah, coping mechanism nya malah ngurusin HIMTI. Sepusing-pusingnya, sepadat-padatnya
                                jadwal, entah kenapa ada aja waktu buat HIMTI. Waktu yang dipake buat HIMTI gak pernah
                                sia-sia sih, justru malah merasa tumbuh menjadi orang yang lebih baik dan nge-recharge
                                diri dengan ketemu anak-anak HIMTI.<br><br>

                                Semoga HIMTI kedepannya bisa semakin sukses, visi dan misinya tercapai dengan baik, dan
                                terus berguna untuk sekitar! #OneFamilyOneGoal

                            </p>
                            <a href="" class="readmorebutton">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left">
                            <img src="Assets/KennyOngkoPhoto.png" alt="">
                            <div class="testimoniprofile">
                                <p class="testimoniname">Kenny Ongko</p>
                                <p class="testimoniposition">Google Bangkit, Cloud Computing</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">President of HIMTI Alam Sutera </p>
                            </div>
                        </div>
                        <div class="right">
                            <p>Dari kesan, aku sangat senang sudah menjadi salah satu keluarga HIMTI. Menurut aku HIMTI
                                udah merupakan rumah kedua, yang mana aku bisa berbagi cerita dan pengamalan. Buatlah
                                himti sebagai taman bermain, bukan hanya untuk mencari teman dan bersenang, tapi juga
                                sebagai tempat bereskperimen untuk tumbuh dan berkembang. Good luck! Tetap semangat and
                                have fun di HIMTI. Selamat bereksperimen!
                            </p>
                            <a href="" class="readmorebutton">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left">
                            <img src="Assets/MesyellaPhoto.png" alt="">
                            <div class="testimoniprofile">
                                <p class="testimoniname">Mesyella</p>
                                <p class="testimoniposition">Data Science di PT Global Digital Niaga (Blibli.com)</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Vice President of HIMTI Alam Sutera</p>
                            </div>
                        </div>
                        <div class="right">
                            <p>Masuk HIMTI itu salah satu moment yang cukup precious and memorable di masa kuliah. Aku
                                dapat sebuah keluarga yang gokil dan keren banget! Kita seneng, susah, sedih, takut,
                                semuanya kita laluin bareng-bareng. Ga cuman itu, disini aku juga belajar banyak banget
                                hal karena di HIMTI aku dikasih kesempatan buat bisa keluar dari comfort zone dan
                                mencoba hal-hal yang mungkin ga akan aku bisa coba di masa kerja ataupun ketika lulus
                                kuliah. I feel lucky and grateful to become one of this family and I hope u can feel and
                                experience what I feel too!
                            </p>
                            <a href="" class="readmorebutton">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left">
                            <img src="Assets/MarissaLevianiPhoto.png" alt="">
                            <div class="testimoniprofile">
                                <p class="testimoniname">Marissa Leviani </p>
                                <p class="testimoniposition">Google Bangkit, Cloud Computing</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Secretary of HIMTI Alam Sutera </p>
                            </div>
                        </div>
                        <div class="right">
                            <p>Masuk HIMTI banyak banget pengalaman dan pelajaran yang aku dapet buat ngembangin diri
                                aku sendiri. Pastinya sih di HIMTI aku jadi punya banyak temen yang udah berasa kaya
                                keluarga sendiri gitu bisa sharing-sharing, ketawa bareng, belajar bareng, nyelesain
                                masalah bareng dan bahkan nongkrong bareng. Jangan sia-sia in masa-masa kuliah kalian
                                dengan pasif, ga ikut berorganisasi apalagi ga ikut HIMTI, karena banyak hal yang ga
                                bisa kalian coba atau lakuin setelah lulus kuliah nanti. Semoga kalian dapet hal-hal
                                positif dari HIMTI kaya hal-hal positif yang aku dapet dari ikut himpunan ini yaitu
                                bukan cuma tentang relasi, tetapi juga tentang skill kalian. Semangat
                            </p>
                            <a href="" class="readmorebutton">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left">
                            <img src="Assets/ErikaNataliaNugrohoPhoto.png" alt="">
                            <div class="testimoniprofile">
                                <p class="testimoniname">Erika Natalia Nugroho</p>
                                <p class="testimoniposition">Front end developer maybank</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Sekretaris Kemanggisan</p>
                            </div>
                        </div>
                        <div class="right">
                            <p>selama dulu di himti, banyak banget pengalaman pengalaman seru yang ga bisa dilupain.
                                seneng banget bisa ketemu banyak temen teman baru yang udah kaya keluarga sendiri.
                                pokoknya sukses terus himti! untuk aktivis sekarang, semangat yaa jalanin job desc-job
                                desc nya! dan jangan sia-siakan kesempatan ini untuk upgrade softskill kalian. untuk
                                calon aktivis nanti, jangan ragu-ragu buat masuk himti karena disini kalian banyak dapet
                                ilmu-ilmu baru yang ga kalian dapetin di kuliah. semangat semuanya!!. </p>
                            <a href="" class="readmorebutton">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonicarousel">
                        <div class="left">
                            <img src="Assets/FeliciaAngelinePhoto.png" alt="">
                            <div class="testimoniprofile">
                                <p class="testimoniname">Felicia Angeline</p>
                                <p class="testimoniposition">Data Engineer BCA</p>
                                <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                                <p class="testimoniexperience">Divisi PM ( 2019 )<br> Chairman Himti ( 2020 )</p>
                            </div>
                        </div>
                        <div class="right">
                            <p>Dulu pas pertama kali daftar HIMTI kiranya pas keluar cuman buat menuh-menuhin CV, tapi
                                nyatanya aku dapat keluarga baru yang ngasih aku banyak banget pengalaman berharga.
                                Pesan aku buat temen-temen baru yang mau bergabung sama HIMTI, jadikan HIMTI tempat
                                bermain kamu. Jangan takut buat explore diri dan kemampuan kamu untuk berkembang. Jangan
                                takut untuk jatuh dan belajar bangkit dari kesalahan karena disitulah kalian bisa
                                berkembang jadi versi diri kalian yang paling baik. Jangan ragu buat mengambil
                                kesempatan sekarang karena kalau nggak sekarang, masa mau tunggu lulus? Semoga kalian
                                yang mutusin untuk gabung sama HIMTI, bisa juga dapat pengalaman berharga sama rasa
                                kekeluargaan yang gw rasain.
                            </p>
                            <a href="" class="readmorebutton">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonidata container">
            <div class="testimonirow">
                <img src="Assets/FeliciaAngelinePhoto.png" alt="" width="100%">
                <div class="testimoniitem">
                    <p class="testimoniname">Felicia Angeline</p>
                    <p class="testimoniposition">Data Engineer BCA</p>
                    <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                    <p class="testimoniexperience">Divisi PM (2019)<br>Chairman Himti (2020)</p>
                </div>
            </div>
            <div class="testimonirow">
                <img src="Assets/SalsabilaPhoto.png" alt="" width="100%">
                <div class="testimoniitem">
                    <p class="testimoniname">Salsabila Azaria</p>
                    <p class="testimoniposition">Software Development Engineer Intern at DANA Indonesia</p>
                    <p class="testimoniperiode">Kepengurusan HIMTI 2019-2020</p>
                    <p class="testimoniexperience">Head of HRD HIMTI Alam Sutera (2020)</p>
                </div>
            </div>
            <div class="testimonirow">
                <img src="Assets/FelixPhoto.png" alt="" width="100%">
                <div class="testimoniitem">
                    <p class="testimoniname">Felix</p>
                    <p class="testimoniposition">Application Developer di PT Mayora Indah Tbk<br>
                        UIUX Designer di Corn Learning</p>
                    <p class="testimoniperiode">Kepengurusan Himti : 2019- 2020</p>
                    <p class="testimoniexperience">General Manager of Commision Three HIMTI Alam Sutera ( 2020 )</p>
                </div>
            </div>
            <div class="testimonirow">
                <img src="Assets/KennyOngkoPhoto.png" alt="" width="100%">
                <div class="testimoniitem">
                    <p class="testimoniname">Kenny Ongko</p>
                    <p class="testimoniposition">Google Bangkit, Cloud Computing</p>
                    <p class="testimoniperiode">Kepengurusan Himti : 2019- 2020</p>
                    <p class="testimoniexperience">President of HIMTI Alam Sutera ( 2020 )</p>
                </div>
            </div>
        </div>
        <div class="viewtestimoni"><a href="#" class="btn btn-sm animated-button thar-three ">Testimoni</a>
        </div>
    </div>
    <div class="ourarticle">
        <div class="title">
            <span>Our Article</span>
        </div>
        <div class="container">
            <div class="row" id="RSSarticle">

            </div>

        </div>
        <div class="articledata d-flex" style="overflow-x: auto;">

        </div>
        <div class="card-carouselcustom">
            <!-- <div class="my-card1">
                <div class="ourarticlerow">
                    <img src="Assets/Artikel1.png" alt="" width="100%">
                    <div class="ourarticleitem">

                        <p>Mitos dan Fakta mengenai 5G yang ada di Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="my-card1">
                <div class="ourarticlerow"><img src="Assets/Artikel2.png" alt="" width="100%">
                    <div class="ourarticleitem">

                        <p>Perusahaan Berbasis Data Lebih Optimistis Hadapi Masa Depan</p>
                    </div>
                </div>
            </div>
            <div class="my-card1">
                <div class="ourarticlerow">
                    <img src="Assets/Artikel3.png" alt="" width="100%">
                    <div class="ourarticleitem">
                        <p>Ingin Coba Sinyal 5G Indosat? Ini Syarat yang Harus Dipenuhi
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-card1">
                <div class="ourarticlerow">
                    <img src="Assets/Artikel4.png" alt="" width="100%">
                    <div class="ourarticleitem">
                        <p>Marak "Google Terus Berhenti" di Android, Begini Cara Mengatasinya
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-card1">
                <div class="ourarticlerow">
                    <img src="Assets/Artikel1.png" alt="" width="100%">
                    <div class="ourarticleitem">
                        <p>Mitos dan Fakta mengenai 5G yang ada di Indonesia</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="titlewhite" style="background-color: #0c0217;">
        <span>Our Journey</span>
    </div>
    <div class="OURJOURNEY">

        <div class="circletab">
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
                    <img src="Assets/HEXIONLOGO.png" alt="" width="25%"><br>
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
                <img src="Assets//CircleTab.png" alt="" class="backgroundtab">
            </div>
        </div>

    </div>
    <div class="pattern">
        <object data="Assets/Transition.svg" alt="pattern-contact" class="objectdata"></object>
    </div>
    <div class="FAQ">
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
        <div class="viewtestimoni"><a href="/faq" class="btn btn-sm animated-button thar-three ">View FAQ</a>
        </div>
    </div>
    <script src="script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script src="Assets/JS/vanilla-tilt.min.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".upcomingeventrow"), {
            max: 25,
            speed: 400
        });

        //It also supports NodeList
        VanillaTilt.init(document.querySelectorAll(".upcomingeventrow"));
    </script>
</body>

</html>
