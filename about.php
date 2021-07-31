<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $USE_TAILWIND = true;
        $TITLE = 'About Us';
        require('components/head.php');
    ?>
</head>
</head>
<body>
    <!-- <nav id="Navbar" class="nav sticky shadow-2xl">
        <div class="max-w-screen-2xl m-auto py-4 px-12 flex justify-between items-center text-white">
            <a href="#">
                <img id="himti-icon" src="assets/img/icons/himti-icon.svg" alt="">
            </a>
            <ul class="list-none">
                <li class="p inline-block "><a href="index.html">Home</a></li>
                <li class="p inline-block font-bold pl-10">About Us</li>
                <li class="p inline-block pl-10"><a href="index.html">Learn Coding</a></li>
                <li class="p inline-block pl-10"><a href="index.html">Tell Us</a></li>
                <li class="p inline-block pl-10"><a href="index.html">Events</a></li>
            </ul>
        </div>
    </nav> -->

    <?php require('components/navbar.php'); ?>
    <div class="wrapper-dark">
        <div class="container">
            <h1 class="title white">
                <span>Our Vision & Mission</span>
            </h1>

            <div class="lg:flex py-6 lg:py-12 block">
                <div class="half border-b lg:border-b-0 lg:border-r border-gray-100 pb-12 w-full lg:w-1/2">
                    <h2 class="h2 pb-10">Vision</h2>
                    <p class="p">"Menjadikan HIMTI BINUS University sebagai Himpunan Mahasiswa yang dikenal se-Asia Tenggara pada tahun 2025"</p>
                </div>
                <div class="half pt-6 pt-12 lg:pt-0 w-full lg:w-1/2">
                    <h2 class="h2 pb-10">Mission</h2>
                    <p class="p">
                        Memperkuat ikatan antar sesama anggota keluarga HIMTI dengan pengetahuan, pengalaman, dan nilai-nilai baik dalam membentuk satu keluarga HIMTI yang solid.
                        <br /><br />
                        Menanamkan dan mengembangkan sikap profesional dalam setiap individu di dalam HIMTI, agar siap menghadapi dunia industri, karir, dan pengembangan lingkungan global.
                        <br /><br />
                        Menjunjung tinggi rasa nasionalisme, menunjukkan bahwa HIMTI berbakti pada Indonesia.
                    </p>
                </div>
            </div>
        </div>
        <div class="container ">
            <h1 class="title white">
                <span>Mars HIMTI</span>
            </h1>

            <div class="md:flex pt-8 lg:pt-16">
                <div class="half pb-4 w-full sm:w-4/5 h-72 md:h-80 xl:h-96 max-w-screen-sm mx-auto md:w-1/2 lg:pr-0">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/qSEqg0m1cAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
                <div class="half w-full md:w-1/2">
                    <p class="p pb-8">
                        Mari semua melangkah maju
                        <br />
                        Bulatkanlah tekadmu
                        <br />
                        Berkarya bagi nusa dan bangsa
                        <br />
                        Wujudkan cita-cita mulia
                    </p>
                    <p class="p pb-8">
                        Derapkanlah langkah kakimu
                        <br />
                        Menyosong masa depanmu
                        <br />
                        Siap berbakti dan mengabdi
                        <br />
                        Bagi Univ Bina Nusantara
                    </p>
                    <p class="p pb-8">
                        Maju terus pantang mundur
                        <br />
                        Membangun pendidikan bangsa
                        <br />
                        Galang persatuan dan kesatuan
                        <br />
                        HIMTI Bina Nusantara
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="h-32">
        <div class="transition">
        </div>
    </div>

    <div class="wrapper-light">
        <div class="container px-0 xl:px-6">
            <h1 class="title">
                <span>Organizational Structure</span>
            </h1>

            <img src="assets/img/about/organization-structure.svg" alt="">
        </div>

        <div class="container h-64 md:h-96">
            <h1 class="title">
                <span>Our Logo</span>
            </h1>
        </div>
    </div>

    <div class="wrapper-dark">
        <div class="container px-2 md:px-8">
            <div class="logo-info">
                <img id="logo-info-img" src="assets/img/about/logo-infographic.svg" alt="">
            </div>
        </div>
        
        <div class="container pt-8 md:pt-16">
            <h1 class="title white">
                <span>Commissions</span>
            </h1>

            <div class="py-8 border-b border-gray-100">
                <div class="cd-wrapper">
                    <h2 class="h2 lg:hidden max-w-lg mx-auto font-extrabold pt-6">Commission 1: Education</h2>
                    <div class="cd-img-container">
                        <img class="cd-img" src="assets/img/about/responsi-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">Responsi Division</h3>
                            <p class="text-justify">Divisi ini memberikan pengayaan lebih dalam mengenai materi perkuliahan berupa kelas belajar yang membantu para mahasiswa/i Teknik Informatika.</p>
                        </div>
                    </div>
                    <div class="hidden lg:block cd-img-container">
                        <img class="com-logo cd-img" src="assets/img/about/komsat-logo.svg" alt="">
                    </div>
                    <div class="cd-img-container">
                        <img class="cd-img" src="assets/img/about/progclass-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">Programming Class Division</h3>
                            <p class="text-justify">Divisi ini mengadakan kelas <i>programming</i> dengan materi yang tidak didapatkan selama perkuliahan pada umumnya sebagai bekal untuk meningkatkan kemampuan di bidang <i>IT</i>.</p>
                        </div>
                    </div>             
                </div>
            </div>

            <div class="py-8 border-b border-gray-100">
                <div class="cd-wrapper">
                    <h2 class="h2 lg:hidden max-w-lg mx-auto font-extrabold pt-6">Commission 2: Relation Expansion</h2>
                    <div class="cd-img-container">
                        <img class="cd-img" src="assets/img/about/pm-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">Publication and Marketing Division</h3>
                            <p class="text-justify">Divisi ini bertanggung jawab dalam pengembangan relasi dan komunikasi HIMTI terhadap berbagai pihak yang lainnya, serta bertugas sebagai pihak promotor dan distributor berbagai produk buatan HIMTI.</p>
                        </div>
                    </div>
                    <div class="hidden lg:block cd-img-container">
                        <img class="com-logo cd-img" src="assets/img/about/komdu-logo.svg" alt="">
                    </div>
                    <div class="cd-img-container">
                        <img class="cd-img" src="assets/img/about/hc-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">HIMTI Care Division</h3>
                            <p class="text-justify">Divisi ini mengurus hal-hal yang berkaitan dengan <i>study tour</i> internal, <i>fellowship</i> antar aktivis, dan juga bakti sosial.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-8">
                <div class="cd-wrapper">
                    <h2 class="h2 lg:hidden max-w-lg mx-auto font-extrabold pt-6">Commission 3: Research and Development</h2>
                    <div class="cd-img-container">
                        <img class="cd-img" src="assets/img/about/cnd-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">Creative and Design Division</h3>
                            <p class="text-justify">Divisi ini merupakan divisi yang berkontribusi dalam pembuatan setiap <i>design</i> logo, poster, dan <i>banner</i> yang ada di HIMTI BINUS University.</p>
                        </div>
                    </div>
                    <div class="hidden lg:block cd-img-container">
                        <img class="com-logo cd-img" src="assets/img/about/komtig-logo.svg" alt="">
                    </div>
                    <div class="cd-img-container">
                        <img class="cd-img" src="assets/img/about/webdev-logo.svg" alt="">
                        <div class="overlay-text">
                            <h3 class="h-cd">Web Development Division</h3>
                            <p class="text-justify">Divisi ini bertanggung jawab dalam pengembangan dan pengelolaan <i>official website</i> HIMTI dan setiap <i>website event</i> yang ada di HIMTI BINUS University.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-32">
        <div class="transition">
        </div>
    </div>

    <div class="wrapper-light">
        <div class="container pb-12">
            <h1 class="title">
                <span>History</span>
            </h1>
            <div class="text-justify py-10 px">
                <div class="block md:flex">
                    <img class="half max-w-screen-sm w-full sm:w-4/5 pb-6 md:pb-0 md:w-1/2 mx-auto pl-0 xl:px-12 w-2/5 animate-pulse" src="assets/img/about/history-img.svg" alt="">
                    <div class="half w-full px-0 sm:px-4 md:pl-0 lg:pr-12 xl:pl-4 w-3/5">
                        <p class="p">
                        <b>Himpunan Mahasiswa Teknik Informatika Universitas Bina Nusantara</b> atau yang sering kita sebut <b>HIMTI</b> berdiri pertama kali pada tahun 1992, tepatnya pada 14 September 1992. Pencetus ide HIMTI merupakan mantan ketua Jurusan Teknik Informatika yaitu Bpk. Ir. Toto Widyanto, MSc. Pada saat itu, HIMTI dipimpin oleh koordinator umum bernama  Sdr. Yusuf Setiyono HIMTI sendiri merupakan organisasi kemahasiswaan yang memiliki bentuk sebagai himpunan antar jurusan School of Computer Science (SOCS). 
                        </p>
                        <br />
                        <p class="p hidden xl:block">
                        Bpk. Ir. Toto Widyanto, MSc. berharap dengan didirikannya HIMTI, organisasi ini dapat memberikan bantuan secara nyata demi mengembangkan IT di Indonesia serta mampu menjadi sarana pelatihan kemampuan kepemimpinan dan manajemen dalam suatu organisasi.
                        </p>
                    </div>
                </div>
                <div class="xl:pt-8 px-0 sm:px-4 lg:px-12">
                    <p class="p xl:hidden">
                        Bpk. Ir. Toto Widyanto, MSc. berharap dengan didirikannya HIMTI, organisasi ini dapat memberikan bantuan secara nyata demi mengembangkan IT di Indonesia serta mampu menjadi sarana pelatihan kemampuan kepemimpinan dan manajemen dalam suatu organisasi.
                        <br /><br />
                    </p>
                    <p class="p">
                    Suatu organisasi pasti memiliki visi dan misi, begitu juga dengan HIMTI BINUS. HIMTI BINUS memiliki visi yaitu menjadi Himpunan Mahasiswa yang dikenal se-Asia Tenggara pada tahun 2025, dan misi berupa memperkuat ikatan antar sesama anggota HIMTI, menanamkan dan mengembangkan sikap professional dalam tiap-tiap individu, menjunjung tinggi rasa nasionalisme dan bakti terhadap Indonesia.
                    <br /><br />
                    Sesuai dengan lambang HIMTI yang berupa kubus 3 dimensi dengan tulisan TI didalamnya sehingga HIMTI diharapkan mampu menjadi wadah untuk memberikan kontribusi nyata bagi mahasiswa/i.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- <footer class="wrapper-dark">
        <div class="container">
            <div class="flex border-b border-gray-100 text-left pt-6 pb-12">
                <div class="map-container">
                    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4800629344318!2d106.78322081431001!3d-6.200221562464728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6c2f89d2b67%3A0xe18cf42b220d8e7d!2sBINUS%20University%2C%20Kampus%20Syahdan!5e0!3m2!1sen!2sid!4v1625374795883!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="half">
                    <div class="flex items-center py-6">
                        <img class="inline-block pr-4 w-14" src="assets/icon/location-icon.svg" alt="">
                        <h2 class="h2 normal-case text-left inline-block">Location</h2>
                    </div>
                    <h3 class="h3 pb-2">BINUS @ Kemanggisan</h3>
                    <p class="text-xl">Jl. Kyai H. Syahdan No. 9, RW 12, Palmerah, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480</p>
                </div>
            </div>

            <div class="flex justify-between items-end py-4">
                <div>
                    <img class="w-4/5" src="assets/himti-logo.svg" alt="">
                </div>
                <div>
                    <div class="flex items-center justify-end pb-2">
                        <a class="ic-social" href="mailto:himti.binusuniv@gmail.com">
                            <img src="assets/icon/mail-icon.svg" alt="">
                        </a>
                        <a class="ic-social w-10" href="https://twitter.com/HimtiBinus">
                            <img src="assets/icon/twitter-icon.svg" alt="">
                        </a>
                        <a class="ic-social" href="https://www.instagram.com/himti_binus">
                            <img src="assets/icon/instagram-icon.svg" alt="">
                        </a>
                        <a class="ic-social w-14" href="https://www.youtube.com/user/HimtiBinus">
                            <img src="assets/icon/youtube-icon.svg" alt="">
                        </a>
                    </div>
                    <p class="text-xl">© Copyright HIMTI BINUS University. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer> -->

    <script src="script.js"></script>
</body>
</html>