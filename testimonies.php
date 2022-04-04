<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $USE_BOOTSTRAP = true;
        $TITLE = 'Testimonies';
        require_once('components/head.php');
    ?>
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #0C0217;
        }

        /*.title > h1{
            font-size: 3rem;
            margin: 0;
            font-weight: 900;
        }*/

        .title > hr{
            width: 30vw;
            background-color: rgba(19, 71, 55, 1);
            height: 5px;
            margin: 0;
        }

        .row div{
            border-radius: 5px;
        }

        main > .row{
            margin: 0 2.5vw 0 2.5vw;
        }

        .img-thumbnail rounded p-0{
            border: none;
        }

        .name{
            font-weight: 900;
        }

        .job{
            font-weight: 600;
        }

        .story{
            /* font-size: 1rem; */
            text-align: justify;
        }

        .story b{
            color: #233269;
        }

        ul.experience li:nth-child(n+2){
            margin-top: 0.5rem
        }

        @media screen and (max-width:768px){
            main > div:nth-child(3) > div:nth-child(1) > *, main > div:nth-child(3) > .card, main > div:nth-child(4) > div:nth-child(2) > *, main > div:nth-child(4) > div:nth-child(3) > *{
                margin: 0 3vw;
            }
        }
    </style>
</head>
<body>
    <?php require_once('components/navbar.php'); ?>
    <main>
        <h1 class="title white">
            <span>TESTIMONIES</span>
        </h1>
        <div class="row d-flex flex-row align-items-stretch justify-content-around align-items-center">
            <div class="col-12 col-xl-6 d-flex flex-row justify-content-center testimony-card">
                <div class="card p-3 m-3 mx-xl-1">
                    <div class="row">
                        <div class="col-12 col-xl-5 d-flex flex-column">
                            <div class="row">
                                <picture class="col-6 col-sm-4 col-md-3 col-xl-12">
                                    <source srcset="assets/img/testimonies-thumbnail/FeliciaAngelinePhoto.webp" type="image/webp">
                                    <source srcset="assets/img/testimonies-thumbnail/FeliciaAngelinePhoto.png" type="image/png">
                                    <img width="100%" src="assets/img/testimonies-thumbnail/FeliciaAngelinePhoto.png" alt="Felicia Angeline">
                                </picture>
                                <div class="col-12 col-md-9 col-xl-12 p-lg-3 mt-3 mt-md-0">
                                    <h1 class="name fs-3">
                                        Felicia Angeline
                                    </h1>
                                    <p class="job">
                                        Data Engineer, PT. Bank Central Asia (BCA) Tbk.
                                    </p>
                                    <p class="experience">
                                        <b>Kepengurusan HIMTI:</b> 2019 - 2020
                                    </p>
                                    <ul class="experience">
                                        <li><b>Anggota Divisi Publication and Marketing</b> (2019)</li>
                                        <li><b>Chairman HIMTI BINUS University</b> (2020)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="story col-12 col-xl-7 mt-3 mt-xl-0">
                            <b>Dulu pas pertama kali daftar HIMTI kiranya pas keluar
                            cuman buat menuh-menuhin CV, tapi nyatanya aku
                            dapat keluarga baru yang ngasih aku banyak banget
                            pengalaman berharga.</b> Pesan aku buat temen-temen
                            baru yang mau bergabung sama HIMTI, jadikan HIMTI
                            tempat bermain kamu. Jangan takut buat explore diri dan kemampuan kamu untuk berkembang. Jangan
                            takut untuk jatuh dan belajar bangkit dari kesalahan
                            karena disitulah kalian bisa berkembang jadi versi diri
                            kalian yang paling baik. Jangan ragu buat mengambil
                            kesempatan sekarang karena kalau nggak sekarang,
                            masa mau tunggu lulus? Semoga kalian yang mutusin
                            untuk gabung sama HIMTI, bisa juga dapat
                            pengalaman berharga sama rasa kekeluargaan yang
                            gw rasain.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex flex-row justify-content-center testimony-card">
                <div class="card m-3 p-3 mx-xl-1">
                    <div class="row">
                        <div class="col-12 col-xl-5 d-flex flex-column">
                            <div class="row">
                                <picture class="col-6 col-sm-4 col-md-3 col-xl-12">
                                    <source srcset="assets/img/testimonies-thumbnail/ErikaNataliaNugrohoPhoto.webp" type="image/webp">
                                    <source srcset="assets/img/testimonies-thumbnail/ErikaNataliaNugrohoPhoto.png" type="image/png">
                                    <img width="100%" src="assets/img/testimonies-thumbnail/ErikaNataliaNugrohoPhoto.png" alt="Erika Natalia Nugroho">
                                </picture>
                                <div class="col-12 col-md-9 col-xl-12 p-lg-3 mt-3 mt-md-0">
                                    <h1 class="name fs-3">
                                        Erika Natalia Nugroho
                                    </h1>
                                    <p class="job">
                                        Front End Developer, PT. Bank Maybank Indonesia Tbk.
                                    </p>
                                    <p class="experience">
                                        <b>Kepengurusan HIMTI:</b> 2019 - 2020
                                    </p>
                                    <ul class="experience">
                                        <li><b>Secretary of HIMTI Kemanggisan</b> (2020)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="story col-12 col-xl-7 mt-3 mt-xl-0">
                            <b>Selama dulu di HIMTI, banyak banget pengalaman pengalaman seru yang ga bisa dilupain.</b>
                            Seneng banget bisa ketemu banyak temen teman baru yang udah kaya keluarga sendiri.
                            Pokoknya sukses terus HIMTI! Untuk aktivis sekarang, semangat yaa jalanin job desc-job desc nya!
                            dan jangan sia-siakan kesempatan ini untuk upgrade softskill kalian. Untuk calon aktivis nanti,
                            jangan ragu-ragu buat masuk HIMTI karena di sini kalian banyak dapet ilmu-ilmu baru yang ga kalian dapetin di kuliah.
                            Semangat semuanya!! &lt;3.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex flex-row align-items-stretch justify-content-between align-items-center">
            <div class="col-12 col-xl-3 d-flex flex-column">
                <div class="card p-3 m-3 mx-xl-1 flex-grow-1" id="javier-fransiscus">
                    <div class="row">
                        <picture class="col-6 col-sm-4 col-md-3 col-xl-12">
                            <source srcset="assets/img/testimonies-thumbnail/JavierFransiscusPhoto.webp" type="image/webp">
                            <source srcset="assets/img/testimonies-thumbnail/JavierFransiscusPhoto.png" type="image/png">
                            <img width="100%" src="assets/img/testimonies-thumbnail/JavierFransiscusPhoto.png" alt="Javier Fransiscus">
                        </picture>
                        <div class="col-12 col-md-9 col-xl-12 p-lg-3 mt-3 mt-md-0 pb-xl-0">
                            <h1 class="name fs-3">
                                Javier Fransiscus
                            </h1>
                            <p class="job">
                                Peserta (<i>Learner</i>), Apple Developer Academy
                            </p>
                            <p class="experience">
                                <b>Kepengurusan HIMTI:</b> 2019 - 2020
                            </p>
                            <ul class="experience">
                                <li><b>Anggota Divisi Web Development</b> (2019)</li>
                                <li><b>Koordinator Divisi Web Development</b> (2020)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="story mt-3 mt-xl-0">
                        Banyak kenangan seru yang tak terlupakan dari acara bareng-bareng,
                        perform di farewell/HTTP, latihan HIMTI band, main tournament valorant
                        semuanya sangat berkesan. <b>Berada di HIMTI memungkinkan aku untuk bertemu
                        dengan banyak teman teman SOCS termasuk yang senior yang dapat memberikan
                        insight untuk internship nanti.</b> HIMTI juga melatih kita untuk lebih bertanggung jawab.
                        Responsi calculus dari HIMTI sangat membantu dalam pembelajaran.
                        Bagi aktivis HIMTI enjoy the moment while you can dan bagi para calon aktivis di sini
                        tempat yang tepat untuk berpengalaman berorganisasi.
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3 d-flex flex-column">
                <div class="card p-3 m-3 mx-xl-1 flex-grow-1">
                    <div class="row">
                        <picture class="col-6 col-sm-4 col-md-3 col-xl-12">
                            <source srcset="assets/img/testimonies-thumbnail/KennyOngkoPhoto.webp" type="image/webp">
                            <source srcset="assets/img/testimonies-thumbnail/KennyOngkoPhoto.png" type="image/png">
                            <img width="100%" src="assets/img/testimonies-thumbnail/KennyOngkoPhoto.png" alt="Kenny Ongko">
                        </picture>
                        <div class="col-12 col-md-9 col-xl-12 p-lg-3 mt-3 mt-md-0 pb-xl-0">
                            <h1 class="name fs-3">
                                Kenny Ongko
                            </h1>
                            <p class="job">
                                Cloud Computing, Google Bangkit
                            </p>
                            <p class="experience">
                                <b>Kepengurusan HIMTI:</b> 2019 - 2020
                            </p>
                            <ul class="experience">
                                <li><b>Anggota Divisi Publication and Marketing</b> (2019)</li>
                                <li><b>President of HIMTI Alam Sutera</b> (2020)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="story mt-3 mt-xl-0">
                        Dari kesan, aku sangat senang sudah menjadi salah satu keluarga HIMTI.
                        Menurut aku HIMTI udah merupakan rumah kedua, yang mana aku bisa berbagi cerita dan pengamalan.
                        <b>Buatlah HIMTI sebagai taman bermain, bukan hanya untuk mencari teman dan bersenang,
                        tapi juga sebagai tempat bereskperimen untuk tumbuh dan berkembang.</b>
                        Good luck! Tetap semangat and have fun di HIMTI. Selamat bereksperimen!
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex flex-column align-items-stretch justify-content-center">
                <div class="row flex-grow-1">
                    <div class="col-12 d-flex flex-row justify-content-center">
                        <div class="card m-3 p-3 mx-xl-1">
                            <div class="row">
                                <div class="col-12 col-xl-5 d-flex flex-column">
                                    <div class="row">
                                        <picture class="col-6 col-sm-4 col-md-3 col-xl-12">
                                            <source srcset="assets/img/testimonies-thumbnail/FelixPhoto.webp" type="image/webp">
                                            <source srcset="assets/img/testimonies-thumbnail/FelixPhoto.png" type="image/png">
                                            <img width="100%" src="assets/img/testimonies-thumbnail/FelixPhoto.png" alt="Felix">
                                        </picture>
                                        <div class="col-12 col-md-9 col-xl-12 p-lg-3 mt-3 mt-md-0">
                                            <h1 class="name fs-3">
                                                Felix
                                            </h1>
                                            <p class="job">
                                                Application Developer, PT. Mayora Indah Tbk.
                                            </p>
                                            <p class="job">
                                                UIUX Designer di Corn Learning
                                            </p>
                                            <p class="experience">
                                                <b>Kepengurusan HIMTI:</b> 2019 - 2020
                                            </p>
                                            <ul class="experience">
                                                <li><b>Anggota Divisi Publication and Marketing</b> (2019)</li>
                                                <li><b>General Manager Commission III, HIMTI Alam Sutera</b> (2020)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="story col-12 col-xl-7 mt-3 mt-xl-0">
                                    Selama menjadi pengurus di HIMTI banyak banget yang bisa dipelajarin.
                                    <b>HIMTI sendiri menurut aku adalah tempat dimana kita bisa belajar dengan metode trial
                                    and error untuk berinovasi membuat hal baru,</b> dimana di dunia pekerjaan tidak bisa asal
                                    melakukan kesalahan untuk mencoba hal baru. Untuk para calon aktivis yang mau coba masuk HIMTI,
                                    tidak perlu takut atau ragu untuk menuangkan ide atau gagasan. Mungkin ga berhasil sekarang
                                    yang penting bukan masalah bagus atau jelek, tapi berbeda itu jauh lebih bagus.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row flex-grow-1">
                    <div class="col-12 d-flex flex-row justify-content-center">
                        <div class="card m-3 p-3 mx-xl-1">
                            <div class="row">
                                <div class="col-12 col-xl-5 d-flex flex-column">
                                    <div class="row">
                                        <picture class="col-6 col-sm-4 col-md-3 col-xl-12">
                                            <source srcset="assets/img/testimonies-thumbnail/MarissaLevianiPhoto.webp" type="image/webp">
                                            <source srcset="assets/img/testimonies-thumbnail/MarissaLevianiPhoto.png" type="image/png">
                                            <img width="100%" src="assets/img/testimonies-thumbnail/MarissaLevianiPhoto.png" alt="Marissa Leviani">
                                        </picture>
                                        <div class="col-12 col-md-9 col-xl-12 p-lg-3 mt-3 mt-md-0">
                                            <h1 class="name fs-3">
                                                Marissa Leviani
                                            </h1>
                                            <p class="job">
                                                Cloud Computing, Google Bangkit
                                            </p>
                                            <p class="experience">
                                                <b>Kepengurusan HIMTI:</b> 2019 - 2020
                                            </p>
                                            <ul class="experience">
                                                <li><b>Secretary of HIMTI Alam Sutera</b> (2020)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="story col-12 col-xl-7 mt-3 mt-xl-0">
                                    Masuk HIMTI banyak banget pengalaman dan pelajaran yang aku dapet buat ngembangin diri aku sendiri.
                                    Pastinya sih di HIMTI aku jadi punya banyak temen yang udah berasa kaya keluarga sendiri
                                    gitu bisa sharing-sharing, ketawa bareng, belajar bareng, nyelesain masalah bareng dan
                                    bahkan nongkrong bareng. <b>Jangan sia-sia in masa-masa kuliah kalian dengan pasif, ga ikut
                                    berorganisasi apalagi ga ikut HIMTI, karena banyak hal yang ga bisa kalian coba atau lakuin
                                    setelah lulus kuliah nanti.</b> Semoga kalian dapet hal-hal positif dari HIMTI kaya hal-hal positif
                                    yang aku dapet dari ikut himpunan ini yaitu bukan cuma tentang relasi, tetapi juga tentang skill kalian.
                                    Semangat!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex flex-row align-items-stretch justify-content-between align-items-center">
            <div class="col-12 col-xl-6 d-flex flex-column justify-content-center">
                <div class="row flex-grow-1">
                    <div class="col-12 d-flex flex-row justify-content-center">
                        <div class="card m-3 p-3 mx-xl-1">
                            <div class="row">
                                <div class="col-12 col-xl-5 d-flex flex-column">
                                    <div class="row">
                                        <picture class="col-6 col-sm-4 col-md-3 col-xl-12">
                                            <source srcset="assets/img/testimonies-thumbnail/HanifKusumaPhoto.webp" type="image/webp">
                                            <source srcset="assets/img/testimonies-thumbnail/HanifKusumaPhoto.png" type="image/png">
                                            <img width="100%" src="assets/img/testimonies-thumbnail/HanifKusumaPhoto.png" alt="Hanif Kusuma">
                                        </picture>
                                        <div class="col-12 col-md-9 col-xl-12 p-lg-3 mt-3 mt-md-0">
                                            <h1 class="name fs-3">
                                                Hanif Kusuma
                                            </h1>
                                            <p class="job">
                                                Web Developer Intern, PT. Kalbe Farma Tbk.
                                            </p>
                                            <p class="job">
                                               Co-Founder of ignitevent.id
                                            </p>
                                            <p class="experience">
                                                <b>Kepengurusan HIMTI:</b> 2019 - 2020
                                            </p>
                                            <ul class="experience">
                                                <li><b>Vice President of HISHOT 2020: IGNITE</b> (2020)</li>
                                                <li><b>President of HIMTI Anniversary</b> (2020)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="story col-12 col-xl-7 mt-3 mt-xl-0">
                                    Bersyukur banget sih masuk HIMTI. Bisa dapet temen banyak, bahkan sampai antar
                                    region kampus. Banyak pengalaman sama skill yang didapatkan dari HIMTI, karena
                                    mengurus event sebagai ketua atau sebagai anggota di banyak divisi berbeda, jadi
                                    banyak knowledge yang bisa diambil dari situ. <b>Selama di HIMTI tidak pernah ada
                                    yang disesali sih, walaupun ada masa-masa down-nya tapi karena dilewati bareng
                                    temen-temen yang lain jadi dibawa enjoy aja. Masa-masa itu sekarang jadi cerita
                                    yang berkesan kalau diinget-inget lagi.</b> Pesannya adalah kalau udah masuk HIMTI
                                    harus aktif, karena HIMTI itu hanya tempat yang menyediakan. Kita yang harus aktif
                                    cari ilmu sebanyak-banyaknya, cari teman sebanyak-banyaknya. Jangan takut salah
                                    karena kalau salah paling bakal dirundingin lagi bareng-bareng. Kalo masalah tidak
                                    pede, usahain jalanin dulu aja asal ide atau hal yang mau dilakuin itu masuk akal.
                                    Bisa saja, itu menjadi inovasi baru di HIMTI. Semangat terus di HIMTI, kalau ketemu
                                    masalah ajak teman sebanyak-banyaknya buat stress bareng.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row flex-grow-1">
                    <div class="col-12 d-flex flex-row justify-content-center">
                        <div class="card m-3 p-3 mx-xl-1">
                            <div class="row">
                                <div class="col-12 col-xl-5 d-flex flex-column">
                                    <div class="row">
                                        <picture class="col-6 col-sm-4 col-md-3 col-xl-12">
                                            <source srcset="assets/img/testimonies-thumbnail/MesyellaPhoto.webp" type="image/webp">
                                            <source srcset="assets/img/testimonies-thumbnail/MesyellaPhoto.png" type="image/png">
                                            <img width="100%" src="assets/img/testimonies-thumbnail/MesyellaPhoto.png" alt="Mesyella">
                                        </picture>
                                        <div class="col-12 col-md-9 col-xl-12 p-lg-3 mt-3 mt-md-0">
                                            <h1 class="name fs-3">
                                                Mesyella
                                            </h1>
                                            <p class="job">
                                                Data Science, Blibli.com (PT. Global Digital Niaga)
                                            </p>
                                            <p class="experience">
                                                <b>Kepengurusan HIMTI:</b> 2019 - 2020
                                            </p>
                                            <ul class="experience">
                                                <li><b>Vice President of HIMTI Alam Sutera</b> (2020)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="story col-12 col-xl-7 mt-3 mt-xl-0">
                                    Masuk HIMTI itu salah satu moment yang cukup precious and memorable di masa kuliah.
                                    Aku dapat sebuah keluarga yang gokil dan keren banget! Kita seneng, susah, sedih,
                                    takut, semuanya kita laluin bareng-bareng. Ga cuman itu, <b>di sini aku juga belajar
                                    banyak banget hal karena di HIMTI aku dikasih kesempatan buat bisa keluar dari
                                    comfort zone dan mencoba hal-hal yang mungkin ga akan aku bisa coba di masa kerja
                                    ataupun ketika lulus kuliah.</b> I feel lucky and grateful to become one of this family
                                    and I hope u can feel and experience what I feel too!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3 d-flex flex-column">
                <div class="card p-3 m-3 mx-xl-1 flex-grow-1">
                    <div class="row">
                        <picture class="col-6 col-sm-4 col-md-3 col-xl-12">
                            <source srcset="assets/img/testimonies-thumbnail/BayuArdanaPhoto.webp" type="image/webp">
                            <source srcset="assets/img/testimonies-thumbnail/BayuArdanaPhoto.png" type="image/png">
                            <img width="100%" src="assets/img/testimonies-thumbnail/BayuArdanaPhoto.png" alt="Bayu Ardana">
                        </picture>
                        <div class="col-12 col-md-9 col-xl-12 p-lg-3 mt-3 mt-md-0">
                            <h1 class="name fs-3">
                                Bayu Ardana
                            </h1>
                            <p class="job">
                                Co-Founder of ignitevent.id
                            </p>
                            <p class="experience">
                                <b>Kepengurusan HIMTI:</b> 2019 - 2020
                            </p>
                            <ul class="experience">
                                <li><b>Vice President of HISHOT 2020: IGNITE</b> (2020)</li>
                                <li><b>PIC of HIMTI BAND</b> (2020)</li>
                                <li><b>Anggota Divisi Publication and Marketing</b> (2019-2020)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="story mt-3 mt-xl-0">
                        Kesan aku selama di HIMTI ya.. gimana ya.. yang pasti seru, dan yang lebih pasti lagi capek.
                        tapi aku bener-bener tidak nyesel sih dulu memutuskan untuk join HIMTI. Pastinya aku belajar
                        banyak sekali di HIMTI. Di HIMTI, aku juga ketemu orang-orang yang sekarang jadi teman-teman
                        aku yang paling berharga.  Momen yang paling memorable selama 2 tahun aku di HIMTI tidak lain
                        tidak bukan adalah pas aku lagi mempersiapkan visu bareng yg lain untuk HTTP 2019. Wah dari
                        mulai senang, sedih, cape, malu, dan bangga aku rasain semua selama visu hahahahah
                        <br><br>
                        Sampai kapanpun, HIMTI adalah highlight dari kehidupan kuliah aku. Pesan aku buat HIMTI kedepannya
                        tidak banyak kok, hehe. Pertama, aku mau ngingetin aja <b>HIMTI itu adalah wadah buat nambah pengalaman
                        dan wawasan, tapi tetap tergantung orangnya dulu mau atau tidak untuk pakai wadah tersebut.</b> Kalau
                        kalian join HIMTI tapi tidak mau aktif, ya tidak akan dapat benefitnya, jadi percuma deh. Terakhir,
                        tolong banget nih HIMTInya disayang ya. Kalau kalian udah sayang sama HIMTI dari awal, secapek apapun
                        kalian kerjanya bakal tetep ikhlas dan enjoy.
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3 d-flex flex-column">
                <div class="card p-3 m-3 mx-xl-1 flex-grow-1">
                    <div class="row">
                        <picture class="col-6 col-sm-4 col-md-3 col-xl-12">
                            <source srcset="assets/img/testimonies-thumbnail/SalsabilaAzariaPhoto.webp" type="image/webp">
                            <source srcset="assets/img/testimonies-thumbnail/SalsabilaAzariaPhoto.png" type="image/png">
                            <img width="100%" src="assets/img/testimonies-thumbnail/SalsabilaAzariaPhoto.png" alt="Salsabila Azaria">
                        </picture>
                        <div class="col-12 col-md-9 col-xl-12 p-lg-3 mt-3 mt-md-0">
                            <h1 class="name fs-3">
                                Salsabila Azaria
                            </h1>
                            <p class="job">
                                Software Development Engineer Intern, DANA Indonesia (PT. Espay Debit Indonesia Koe)
                            </p>
                            <p class="experience">
                                <b>Kepengurusan HIMTI:</b> 2019 - 2020
                            </p>
                            <ul class="experience">
                                <li><b>Head of Human Resources Department, HIMTI Alam Sutera</b> (2020)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="story mt-3 mt-xl-0">
                        HIMTI is really something for me. <b>Di HIMTI ini aku belajar banyak banget,</b> bukan hanya belajar
                        gimana caranya handle event / menjalankan organisasi secara umum, tapi <b>belajar juga tipe-tipe
                        orang tuh kayak apa aja dan gimana handlenya, belajar buat terus beradaptasi dan berinovasi
                        dengan kondisi yang ada, pokoknya banyak belajar nilai-nilai kehidupan yang akhirnya sampai
                        sekarang ilmunya diterapin di daily-life aku sendiri.</b> Temen-temen di HIMTI udah kayak keluarga
                        kedua buat aku sih. Kalau lagi suntuk sama kuliah, coping mechanism nya malah ngurusin HIMTI.
                        Sepusing-pusingnya, sepadat-padatnya jadwal, entah kenapa ada aja waktu buat HIMTI. Waktu yang
                        dipake buat HIMTI gak pernah sia-sia sih, justru malah merasa tumbuh menjadi orang yang lebih
                        baik dan nge-recharge diri dengan ketemu anak-anak HIMTI.
                        <br><br>
                        Semoga HIMTI kedepannya bisa semakin sukses, visi dan misinya tercapai dengan baik, dan terus
                        berguna untuk sekitar! <b>#OneFamilyOneGoal</b>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once('components/footer.php') ?>
</body>
</html>
