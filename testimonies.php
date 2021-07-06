<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://allfont.net/allfont.css?fonts=franklin-gothic-book" rel="stylesheet" type="text/css" />
    <link href="https://allfont.net/allfont.css?fonts=franklin-gothic-heavy" rel="stylesheet" type="text/css" />
    <link href="https://allfont.net/allfont.css?fonts=franklin-gothic-demi" rel="stylesheet" type="text/css" />
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #0C0217;
            font-family: 'Franklin Gothic Book', arial;
        }

        .title > h1{
            font-size: 3rem;
            margin: 0;
            font-family: 'Franklin Gothic Heavy', arial;
        }

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
            font-size: 1.5rem;
            font-family: 'Franklin Gothic Heavy', arial;
        }

        .job{
            font-size: 1rem;
            font-family: 'Franklin Gothic Demi', arial;
        }

        .experience{
            font-size: 1rem;
        }

        .story{
            font-size: 1rem;
            text-align: justify;
        }

        main > div > div > div > .story{
            margin-top: 0;
        }

        @media screen and (max-width:768px){
            main > div:nth-child(3) > div:nth-child(1) > *, main > div:nth-child(3) > .card, main > div:nth-child(4) > div:nth-child(2) > *, main > div:nth-child(4) > div:nth-child(3) > *{
                margin: 0 3vw;
            }

            .story{
                margin-top: 5.5vw;
            }
        }

        @media screen and (min-width:768px) and (max-width:1024px){
            .name{
                font-size: 3rem;
            }

            .job{
                font-size: 2.5rem;
            }

            .experience{
                font-size: 2rem;
            }

            .story{
                font-size: 2rem;
                margin-top: 5vw;
            }
        }
    </style>
</head>
<body>
    <main>
        <div class="title d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-white">TESTIMONIES</h1>
            <hr>
        </div>
        <div class="row d-flex flex-row align-items-stretch justify-content-around align-items-center">
            <div class="col-12 col-xl-6 d-flex flex-row justify-content-center testimony-card">
                <div class="card p-3 m-3 me-xl-1">
                    <div class="row">
                        <div class="col-12 col-xl-5 d-flex flex-column">
                            <img src="/testimonies/assets/Felicia angeline.jpg" class="img-thumbnail rounded p-0">
                            <div class="name">
                                Felicia Angeline
                            </div>
                            <div class="job">
                                Data Engineer BCA
                            </div>
                            <div class="experience">
                                Kepengurusan HIMTI : 2019 - 2020 <br>
                                Divisi PM (2019) <br>
                                Chairman HIMTI (2020)
                            </div>
                        </div>
                        <div class="story col-12 col-xl-7">
                            Dulu pas pertama kali daftar HIMTI kiranya pas keluar
                            cuman buat menuh-menuhin CV, tapi nyatanya aku
                            dapat keluarga baru yang ngasih aku banyak banget
                            pengalaman berharga. Pesan aku buat temen-temen
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
                <div class="card m-3 p-3 ms-xl-1">
                    <div class="row">
                        <div class="col-12 col-xl-5 d-flex flex-column">
                            <img src="/testimonies/assets/Erika Natalia Nugroho.jpg" class="img-thumbnail rounded p-0">
                            <div class="name">
                                Erika Natalia Nugroho
                            </div>
                            <div class="job">
                                Front End Developer Maybank
                            </div>
                            <div class="experience">
                                Kepengurusan HIMTI : 2019 - 2020 <br>
                                Sekretaris Kemanggisan
                            </div>
                        </div>
                        <div class="story col-12 col-xl-7">
                            Selama dulu di himti, banyak banget pengalaman pengalaman seru yang ga bisa dilupain.
                            seneng banget bisa ketemu banyak temen teman baru yang udah kaya keluarga sendiri.
                            pokoknya sukses terus himti! untuk aktivis sekarang, semangat yaa jalanin job desc-job desc nya!
                            dan jangan sia-siakan kesempatan ini untuk upgrade softskill kalian. untuk calon aktivis nanti,
                            jangan ragu-ragu buat masuk himti karena disini kalian banyak dapet ilmu-ilmu baru yang ga kalian dapetin di kuliah.
                            semangat semuanya!! &lt;3.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex flex-row align-items-stretch justify-content-between align-items-center">
            <div class="col-12 col-xl-3 d-flex flex-column">
                <div class="card p-3 m-3 me-xl-1 flex-grow-1">
                    <img src="/testimonies/assets/Javier Fransiscus.jpg" class="img-thumbnail rounded p-0">
                    <div class="name">
                        Javier Fransiscus
                    </div>
                    <div class="job">
                        Apple Developer Academy (Learner)
                    </div>
                    <div class="experience">
                        Kepengurusan HIMTI : 2019 - 2020 <br>
                        Koor WebDev
                    </div>
                    <div class="story">
                        <br>
                        Banyak kenangan seru yang tak terlupakan dari acara bareng-bareng,
                        perform di farewell/HTTP, latihan HIMTI band, main tournament valorant
                        semuanya sangat berkesan. Berada di HIMTI memungkinkan aku untuk bertemu
                        dengan banyak teman teman SOCS termasuk yang senior yang dapat memberikan
                        insight untuk internship nanti. HIMTI juga melatih kita untuk lebih bertanggung jawab.
                        Responsi calculus dari HIMTI sangat membantu dalam pembelajaran.
                        Bagi aktivis HIMTI enjoy the moment while you can dan bagi para calon aktivis disini
                        tempat yang tepat untuk berpengalaman berorganisasi.
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3 d-flex flex-column">
                <div class="card p-3 m-3 mx-xl-1 flex-grow-1">
                    <img src="/testimonies/assets/Kenny Ongko.jpg" class="img-thumbnail rounded p-0">
                    <div class="name">
                        Kenny Ongko
                    </div>
                    <div class="job">
                        Google Bangkit, Cloud Computing
                    </div>
                    <div class="experience">
                        Kepengurusan HIMTI : 2019 - 2020 <br>
                        Divisi PM (2019) <br>
                        President of HIMTI Alam Sutera (2020)
                    </div>
                    <div class="story">
                        <br>
                        “Dari kesan, aku sangat senang sudah menjadi salah satu keluarga HIMTI.
                        Menurut aku HIMTI udah merupakan rumah kedua, yang mana aku bisa berbagi cerita dan pengamalan.
                        Buatlah himti sebagai taman bermain, bukan hanya untuk mencari teman dan bersenang,
                        tapi juga sebagai tempat bereskperimen untuk tumbuh dan berkembang.
                        Good luck! Tetap semangat and have fun di HIMTI. Selamat bereksperimen!”
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex flex-column align-items-stretch justify-content-center">
                <div class="row flex-grow-1">
                    <div class="col-12 d-flex flex-row justify-content-center">
                        <div class="card m-3 p-3 ms-xl-1">
                            <div class="row">
                                <div class="col-12 col-xl-5 d-flex flex-column">
                                    <img src="/testimoniesassets/Felix.jpg" class="img-thumbnail rounded p-0">
                                    <div class="name">
                                        Felix
                                    </div>
                                    <div class="job">
                                        Application Developer di PT Mayora Indah Tbk <br>
                                        UIUX Designer di Corn Learning
                                    </div>
                                    <div class="experience">
                                        Kepengurusan HIMTI : 2019 - 2020 <br>
                                        Divisi PM (2019) <br>
                                        General Manager of Commission Thre HIMTI Alam Sutera (2020)
                                    </div>
                                </div>
                                <div class="story col-12 col-xl-7">
                                    “Selama menjadi pengurus di HIMTI banyak banget yang bisa dipelajarin.
                                    HIMTI sendiri menurut aku adalah tempat dimana kita bisa belajar dengan metode trial
                                    and error untuk berinovasi membuat hal baru, dimana di dunia pekerjaan tidak bisa asal
                                    melakukan kesalahan untuk mencoba hal baru. Untuk para calon aktivis yang mau coba masuk HIMTI,
                                    tidak perlu takut atau ragu untuk menuangkan ide atau gagasan. Mungkin ga berhasil sekarang
                                    yang penting bukan masalah bagus atau jelek, tapi berbeda itu jauh lebih bagus.”
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row flex-grow-1">
                    <div class="col-12 d-flex flex-row justify-content-center">
                        <div class="card m-3 p-3 ms-xl-1">
                            <div class="row">
                                <div class="col-12 col-xl-5 d-flex flex-column">
                                    <img src="/testimoniesassets/Marissa Leviani.jpg" class="img-thumbnail rounded p-0">
                                    <div class="name">
                                        Marissa Leviana
                                    </div>
                                    <div class="job">
                                        Google Bangkit, Cloud Computing
                                    </div>
                                    <div class="experience">
                                        Kepengurusan HIMTI : 2019 - 2020 <br>
                                        Secretary of HIMTI Alam Sutera
                                    </div>
                                </div>
                                <div class="story col-12 col-xl-7">
                                    “Masuk HIMTI banyak banget pengalaman dan pelajaran yang aku dapet buat ngembangin diri aku sendiri.
                                    Pastinya sih di HIMTI aku jadi punya banyak temen yang udah berasa kaya keluarga sendiri
                                    gitu bisa sharing-sharing, ketawa bareng, belajar bareng, nyelesain masalah bareng dan
                                    bahkan nongkrong bareng. Jangan sia-sia in masa-masa kuliah kalian dengan pasif, ga ikut
                                    berorganisasi apalagi ga ikut HIMTI, karena banyak hal yang ga bisa kalian coba atau lakuin
                                    setelah lulus kuliah nanti. Semoga kalian dapet hal-hal positif dari HIMTI kaya hal-hal positif
                                    yang aku dapet dari ikut himpunan ini yaitu bukan cuma tentang relasi, tetapi juga tentang skill kalian.
                                    Semangat!”
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
                        <div class="card m-3 p-3 me-xl-1">
                            <div class="row">
                                <div class="col-12 col-xl-5 d-flex flex-column">
                                    <img src="/testimoniesassets/Hanif Kusuma.jpg" class="img-thumbnail rounded p-0">
                                    <div class="name">
                                        Hanif Kusuma
                                    </div>
                                    <div class="job">
                                        Web Developer Intern at PT Kalbe Farma Tbk & Co-Founder of Ignitivent.Id
                                    </div>
                                    <div class="experience">
                                        Kepengurusan HIMTI : 2019 - 2020 <br>
                                        Vice President if HISHOT (2020) <br>
                                        President of HIMTI Anniversary (2020)
                                    </div>
                                </div>
                                <div class="story col-12 col-xl-7">
                                    “Bersyukur banget sih masuk HIMTI. Bisa dapet temen banyak, bahkan sampai antar
                                    region kampus. Banyak pengalaman sama skill yang didapatkan dari HIMTI, karena
                                    mengurus event sebagai ketua atau sebagai anggota di banyak divisi berbeda, jadi
                                    banyak knowledge yang bisa diambil dari situ. Selama di HIMTI tidak pernah ada
                                    yang disesali sih, walaupun ada masa-masa down-nya tapi karena dilewati bareng
                                    temen-temen yang lain jadi dibawa enjoy aja. Masa-masa itu sekarang jadi cerita
                                    yang berkesan kalau diinget-inget lagi. Pesannya adalah kalau udah masuk HIMTI
                                    harus aktif, karena HIMTI itu hanya tempat yang menyediakan. Kita yang harus aktif
                                    cari ilmu sebanyak-banyaknya, cari teman sebanyak-banyaknya. Jangan takut salah
                                    karena kalau salah paling bakal dirundingin lagi bareng-bareng. Kalo masalah tidak
                                    pede, usahain jalanin dulu aja asal ide atau hal yang mau dilakuin itu masuk akal.
                                    Bisa saja, itu menjadi inovasi baru di HIMTI. Semangat terus di HIMTI, kalau ketemu
                                    masalah ajak teman sebanyak-banyaknya buat stress bareng.”
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row flex-grow-1">
                    <div class="col-12 d-flex flex-row justify-content-center">
                        <div class="card m-3 p-3 me-xl-1">
                            <div class="row">
                                <div class="col-12 col-xl-5 d-flex flex-column">
                                    <img src="/testimoniesassets/Mesyella.jpg" class="img-thumbnail rounded p-0">
                                    <div class="name">
                                        Mesyella
                                    </div>
                                    <div class="job">
                                        Data Science di PT Global Digital Niaga (Blibli.com)
                                    </div>
                                    <div class="experience">
                                        Kepengurusan HIMTI : 2019 - 2020 <br>
                                        Vice President of HIMTI Alam Sutera
                                    </div>
                                </div>
                                <div class="story col-12 col-xl-7">
                                    “Masuk HIMTI itu salah satu moment yang cukup precious and memorable di masa kuliah.
                                    Aku dapat sebuah keluarga yang gokil dan keren banget! Kita seneng, susah, sedih,
                                    takut, semuanya kita laluin bareng-bareng. Ga cuman itu, disini aku juga belajar
                                    banyak banget hal karena di HIMTI aku dikasih kesempatan buat bisa keluar dari
                                    comfort zone dan mencoba hal-hal yang mungkin ga akan aku bisa coba di masa kerja
                                    ataupun ketika lulus kuliah.  I feel lucky and grateful to become one of this family
                                    and I hope u can feel and experience what I feel too!”
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3 d-flex flex-column">
                <div class="card p-3 m-3 mx-xl-1 flex-grow-1">
                    <img src="/testimoniesassets/Bayu Ardana.jpeg" class="img-thumbnail rounded p-0">
                    <div class="name">
                        Bayu Ardana
                    </div>
                    <div class="job">
                        Co-Founder of Ignitivent.Id
                    </div>
                    <div class="experience">
                        Kepengurusan HIMTI : 2019 - 2020 <br>
                        Vice President of HISHOT (2020) <br>
                        PIC of HIMTIBAND (2020) <br>
                        Publication & Marketing Staff (2020)
                    </div>
                    <div class="story">
                        <br>
                        “Kesan aku selama di HIMTI ya.. gimana ya.. yang pasti seru, dan yang lebih pasti lagi capek.
                        tapi aku bener-bener tidak nyesel sih dulu memutuskan untuk join HIMTI. Pastinya aku belajar
                        banyak sekali di HIMTI. Di HIMTI, aku juga ketemu orang-orang yang sekarang jadi teman-teman
                        aku yang paling berharga.  Momen yang paling memorable selama 2 tahun aku di HIMTI tidak lain
                        tidak bukan adalah pas aku lagi mempersiapkan visu bareng yg lain untuk HTTP 2019. Wah dari
                        mulai senang, sedih, cape, malu, dan bangga aku rasain semua selama visu hahahahah.

                        <br>
                        Sampai kapanpun, HIMTI adalah highlight dari kehidupan kuliah aku. Pesan aku buat HIMTI kedepannya
                        tidak banyak kok, hehe. Pertama, aku mau ngingetin aja HIMTI itu adalah wadah buat nambah pengalaman
                        dan wawasan, tapi tetap tergantung orangnya dulu mau atau tidak untuk pakai wadah tersebut. Kalau
                        kalian join HIMTI tapi tidak mau aktif, ya tidak akan dapat benefitnya, jadi percuma deh.  Terakhir,
                        tolong banget nih HIMTInya disayang ya. Kalau kalian udah sayang sama HIMTI dari awal, secapek apapun
                        kalian kerjanya bakal tetep ikhlas dan enjoy.”
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3 d-flex flex-column">
                <div class="card p-3 m-3 ms-xl-1 flex-grow-1">
                    <img src="/testimoniesassets/Salsabila Azaria.jpg" class="img-thumbnail rounded p-0">
                    <div class="name" >
                        Salsabila Azaria
                    </div>
                    <div class="job">
                        Software Development Engineer <br>
                        Intern at DANA Indonesia
                    </div>
                    <div class="experience">
                        Kepengurusan HIMTI : 2019 - 2020 <br>
                        HRD Alsut (2020)
                    </div>
                    <div class="story">
                        <br>
                        “HIMTI is really something for me. Di HIMTI ini aku belajar banyak banget, bukan hanya belajar
                        gimana caranya handle event / menjalankan organisasi secara umum, tapi belajar juga tipe-tipe
                        orang tuh kayak apa aja dan gimana handlenya, belajar buat terus beradaptasi dan berinovasi
                        dengan kondisi yang ada, pokoknya banyak belajar nilai-nilai kehidupan yang akhirnya sampai
                        sekarang ilmunya diterapin di daily-life aku sendiri. Temen-temen di HIMTI udah kayak keluarga
                        kedua buat aku sih. Kalau lagi suntuk sama kuliah, coping mechanism nya malah ngurusin HIMTI.
                        Sepusing-pusingnya, sepadat-padatnya jadwal, entah kenapa ada aja waktu buat HIMTI. Waktu yang
                        dipake buat HIMTI gak pernah sia-sia sih, justru malah merasa tumbuh menjadi orang yang lebih
                        baik dan nge-recharge diri dengan ketemu anak-anak HIMTI.

                        <br>
                        Semoga HIMTI kedepannya bisa semakin sukses, visi dan misinya tercapai dengan baik, dan terus
                        berguna untuk sekitar! #OneFamilyOneGoal”
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
