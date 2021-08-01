<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $USE_BOOTSTRAP = true;
        $TITLE = 'FAQ';
        require('components/head.php');
    ?>
</head>
<body>
    <?php require_once('components/navbar.php'); ?>
    <div class="container-fluid py-5 shadow-lg">

        <h1 class="title">
            <span class="header text-center text-uppercase pb-3">Frequently Asked Questions</span>
        </h1>
        <div class="container py-5">
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                    Apa kepanjangan HIMTI BINUS?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        HIMTI BINUS merupakan kepanjangan dari Himpunan Mahasiswa Teknik Informatika Universitas Bina Nusantara.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Ada berapa komisi dan divisi dalam HIMTI?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        Di HIMTI BINUS sendiri terdapat tiga komisi yang terdiri dari dua divisi di tiap komisi. <br>
                        Komisi 1 yaitu <strong>‘Education’</strong> terdiri dari divisi Programming Class dan divisi Responsi. Komisi 2 yaitu <strong>‘Relation Expansion’</strong> terdiri dari divisi Publication and Marketing dan divisi HIMTI Care.
                        Terakhir, Komisi 3 yaitu <strong>‘Research and Development’</strong> terdiri dari divisi Creative and Design dan divisi Web Development. <br><br> Untuk penjelasan lebih lengkapnya lagi, kamu dapat mengunjungi laman
                        <!-- link divisi dalam HIMTI -->
                        <a href="#">ini</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                      Mengapa saya harus menjadi aktivis/pengurus HIMTI?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        Dengan menjadi aktivis/pengurus HIMTI, kamu bisa mendapatkan banyak sekali manfaat seperti menambah relasi, mengembangkan soft skill serta hard skill, bagaimana mengelola waktu dengan lebih baik, dan tentunya masih banyak lagi manfaat lainnya yang akan kamu rasakan ketika sudah menjadi aktivis/pengurus.<br>
                        Yakin gak mau join? :)
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                    Apakah menjadi aktivis/pengurus HIMTI mengganggu aktivitas perkuliahan?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                    <div class="accordion-body">
                        Tentu saja tidak. Dengan catatan, kamu dapat mengatur dan membagi waktu kamu dengan baik mulai dari aktivitas perkuliahan, organisasi, dan beragam aktivitas lainnya. <br>Time management yang baik itu penting, loh.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                    Siapa saja yang boleh mendaftarkan diri menjadi aktivitas HIMTI?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                    <div class="accordion-body">
                        Semua mahasiswa School of Computer Science (SoCS) boleh mendaftarkan diri menjadi aktivis HIMTI, kok. Tidak ada batasan bagi para mahasiswa SoCS untuk mengembangkan diri. Yuk join! ;)
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                    Saya belum memiliki pengalaman di organisasi apapun sebelumnya. Apakah saya tetap bisa mendaftarkan diri menjadi aktivis / pengurus HIMTI?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                    <div class="accordion-body">
                        Pendaftaran menjadi aktivis HIMTI terbuka untuk seluruh mahasiswa School of Computer Science; bagi yang sudah pernah maupun yang belum pernah mengikuti kegiatan organisasi. Malah, HIMTI dapat menjadi salah satu pilihan yang tepat untuk menambahkan pengalaman kamu dalam berorganisasi. Hanya dengan minat dan niat, kamu bisa berkesempatan menjadi bagian dari anggota aktif HIMTI. Tunggu apa lagi?
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                    Bagaimana saya mendaftar menjadi seorang aktivis HIMTI?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                    <div class="accordion-body">
                        Kamu dapat mengetahui segala informasi mengenai pendaftaran HIMTI pada sesi EXPO organisasi yang diselenggarakan selama kegiatan <i>Freshmen Enrichment Program</i> (FEP).
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                    Apa saja event yang telah diadakan oleh HIMTI?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                    <div class="accordion-body">
                        Event yang diadakan oleh HIMTI terbagi menjadi dua, yakni event lingkup besar dan event lingkup kecil.
                        Event lingkup besar yang telah diadakan HIMTI antara lain HISHOT (HIMTI Seminar Workshop and Study Tour), HTTP (HIMTI Togetherness and Top Performance), HILET (HIMTI Leadership Training), dan Computerun.
                        Event-event seperti workshop, kelas responsi, dan acara internal pengurus merupakan bagian dari event lingkup kecil yang diadakan oleh HIMTI.
                        Segala informasi dan dokumentasi dapat kamu lihat di instagram HIMTI (<a href="https://www.instagram.com/himti_binus/">instagram.com/himti_binus</a>).
                        Jangan lupa di follow, ya! Agar selalu up to date dengan seluruh kegiatan HIMTI kedepannya.

                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                    Saya bertanya kepada siapa jika memiliki pertanyaan mengenai HIMTI?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
                    <div class="accordion-body">
                        Kamu dapat bertanya kepada seluruh aktivis atau pengurus HIMTI yang kamu tahu. Jika masih malu-malu, kamu dapat juga bertanya melalui direct message Instagram HIMTI ataupun menggunakan fitur “Tell Us” yang terdapat pada website ini. Kita tentu akan sangat senang dan terbuka untuk menjawab semua pertanyaan kalian terkait HIMTI.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false" aria-controls="panelsStayOpen-collapseTen">
                    Apakah saya dapat menjadi Chairman HIMTI?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTen">
                    <div class="accordion-body">
                        Tentunya bisa, dong! Namun, terdapat beberapa syarat yang harus kamu ikuti agar cita-citamu menjadi chairman HIMTI tercapai. Syarat-syarat tersebut dapat kamu ketahui jika sudah menjadi aktivis HIMTI. Oleh karena itu, pastikan dulu kamu ikut dan aktif dalam kegiatan organisasi ini.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-heading11">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse11" aria-expanded="false" aria-controls="panelsStayOpen-collapse11">
                    Berapa lama masa jabatan anggota aktif HIMTI?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse11" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading11">
                    <div class="accordion-body">
                        Masa jabatan aktivis dan pengurus HIMTI adalah satu tahun kepengurusan. Jika kamu masih ingin menjadi bagian dari anggota aktif HIMTI setelah satu tahun pertama, jangan khawatir. Kamu dapat terus melanjutkannya di tahun berikutnya, kok. Dengan catatan, semester yang kamu jalani masih dibawah semester enam.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-heading12">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse12" aria-expanded="false" aria-controls="panelsStayOpen-collapse12">
                    Jika saya menjadi aktivis HIMTI, apakah saya masih bisa menjadi aktivis UKM lainnya?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse12" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading12">
                    <div class="accordion-body">
                        Pendaftaran menjadi aktivis HIMTI BINUS tidak membatasi kamu untuk menjadi aktivis UKM lainnya, kok. Jika kamu dapat menjalani dan menikmati seluruh kegiatan HIMTI bersamaan dengan kegiatan UKM lainnya, kami juga ikut senang.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-heading13">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse13" aria-expanded="false" aria-controls="panelsStayOpen-collapse13">
                    Apakah saya dapat mendaftar lagi jika saya tidak sempat mendaftar pada tahun pertama?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse13" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading13">
                    <div class="accordion-body">
                        Cukup <i>stay tune</i> dengan semua informasi perekrutan anggota HIMTI yang disampaikan lewat sosial media, tahun kedua atau tahun kepengurusan berikutnya dapat menjadi kesempatan kedua bagi kamu. <i>Turn on notifications</i> apabila perlu!
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-heading14">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse14" aria-expanded="false" aria-controls="panelsStayOpen-collapse14">
                    Apakah kakak tingkat HIMTI galak-galak?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse14" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading14">
                    <div class="accordion-body">
                        Tentu saja… tidak! Hoax. Buang jauh-jauh imajinasi “kakak tingkat HIMTI galak” dari benakmu. Sebaliknya, kakak tingkat HIMTI memberikan kesan baik dan ramah dalam berelasi dengan anggota baru. “One Family One Goal” bukanlah slogan semata, namun juga diterapkan pada setiap anggotanya untuk mementingkan rasa kekeluargaan antar sesama. #OFOG
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-heading15">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse15" aria-expanded="false" aria-controls="panelsStayOpen-collapse15">
                    Bagaimana saya menjadi panitia dalam sebuah event HIMTI?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse15" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading15">
                    <div class="accordion-body">
                        Jika kamu ingin menjadi bagian dalam kepanitiaan event HIMTI, maka pastikan kamu terdaftar sebagai aktivis terlebih dahulu. Setelahnya, kamu dapat mendaftarkan diri menjadi panitia event-event asik yang akan diselenggarakan oleh HIMTI.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="panelsStayOpen-heading17">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse17" aria-expanded="false" aria-controls="panelsStayOpen-collapse17">
                    Apa slogan HIMTI BINUS?
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse17" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading17">
                    <div class="accordion-body">
                        “One Family One Goal” atau yang disingkat “OFOG” merupakan slogan dari HIMTI BINUS. Slogan ini memiliki arti bahwa kami, yang tergabung dalam HIMTI, merupakan satu keluarga yang berjuang bersama untuk mencapai satu tujuan yang sama. Untuk mencapai tujuan tersebut mungkin tidaklah mudah, tentu akan terdapat kendala. Namun, dengan rasa kekeluargaan yang dibangun sejak awal kepengurusan, setiap kendala dapat bersama-sama dilalui dengan baik.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-white row p-5 justify-content-center" style="background-color: #0C0217;" id="location">
        <div class="col-12 col-md-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7932.9600455831915!2d106.78103213488771!3d-6.2002268999999925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6c2f89d2b67%3A0xe18cf42b220d8e7d!2sBINUS%20University%2C%20Kampus%20Syahdan!5e0!3m2!1sen!2sid!4v1625144645165!5m2!1sen!2sid" style="border:0; width: 90%; height: 400px" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class ="col-12 align-self-center col-md-4">
            <p class="fs-2"><i class="bi bi-geo-alt"></i> Location</p>
            <p class="fs-4 fw-bolder">BINUS @ Kemanggisan</p>
            <p class="fs-4 fw-normal " >Jl. Kyai H.Syahdan No.9, RW.12, Palmerah, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
