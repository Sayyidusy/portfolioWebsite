<?php 
session_start();
include 'config/config.php';
//mengecek apakah sudah di klik atau belum
if( isset($_POST["submit"])){   
    //cek apakah data berhasil ditambahkan atau tidak?
   if (kontak($_POST) > 0 ){
    //    echo "data berhasil ditambahkan!";
    echo "
        <script>
            alert ('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
    ";
   }else {
    //    echo "data gagal ditambahkan!";
    echo "
        <script>
            alert ('data gagal ditambahkan!');
            document.location.href = 'index.php';
        </script>
    ";
   }
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/web.css">
        <link rel="shortcut icon" type="image" href="assets/img/sayyid.png">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio Sayyidusy Al Ghiffari</title>
    </head>
    <body>

        <!-- ===== loading effect =====  -->
        
        <!-- <div class="bg-loader">
            <div class="loading">
                <div class="dot dot1"></div>
                <div class="dot dot2"></div>
                <div class="dot dot3"></div>
            </div>
        </div> -->


        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">sayyidusy alghiffari</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#portfolio" class="nav__link">Portfolio</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <h1 class="home__title"><span>WEL</span><br>COME.</h1>
                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-link"><i class='bx bx-up-arrow-alt' ></i>Scroll down</a>
                    </div>
                    <img src="assets/img/me1.png" alt="" class="home__img">
                </div>
            </section>
            
            <!--===== ABOUT =====-->
            <section class="about section" id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/me1.png" alt="">
                    </div>

                    <div>
                        <h2 class="about__subtitle">I'am Sayyidusy Al Ghiffari</h2>
                        <span class="about__profession">Front-End Developer</span>
                        <p class="about__text">I am a college from Telkom University.
                            Mastering basic Java programming language. 7+ years experience in graphic design. <br>
                            <br>
                            Mastering various software such as Adobe Illustrator, Adobe Photoshop, FIgma. Experienced in creating logos, posters, UI/UX and visuals for various marketing needs. Have good verbal and verbal communication skills
                            </p>

                        <div class="about__social">
                            <a href="https://www.linkedin.com/in/sayyidusy-alghiffari-858944219/" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                            <a href="https://github.com/Sayyidusy" class="about__social-icon"><i class='bx bxl-github' ></i></a>
                            <a href="https://dribbble.com/ghiffar" class="about__social-icon"><i class='bx bxl-dribbble' ></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">
                    <div class="skills__box">
                        <h3 class="skills__subtitle">Development</h3>
                        <span class="skills__name">HTML</span>
                        <span class="skills__name">CSS</span>
                        <span class="skills__name">PHP</span>
                        <span class="skills__name">Javascript</span>
                        <span class="skills__name">Laravel</span>
                        <span class="skills__name">Bootstrap</span>
                        <span class="skills__name">Scss</span>
                        <span class="skills__name">Java</span>
                        <span class="skills__name">Python</span>
                        <span class="skills__name">Dart</span>
                        <span class="skills__name">Flutter</span>
                       
                        
                        <h3 class="skills__subtitle">Design</h3>
                        <span class="skills__name">Adobe Illustrator</span>
                        <span class="skills__name">Adobe Photoshop</span>
                        <span class="skills__name">Adobe Lightroom</span>
                        <span class="skills__name">Adobe XD</span>
                        <span class="skills__name">Adobe Premiere</span>
                        <span class="skills__name">Figma</span>
                        
                    </div>

                    <div class="skills__img">
                        <img src="assets/img/skill.jpg" alt="">
                    </div>
                </div>
            </section>

            <!--===== PORTFOLIO =====-->
            <section class="portfolio section" id="portfolio">
                <h2 class="section-title">Portfolio</h2>
                <!-- poster -->
                <div class="portfolio__container bd-grid">
                    <div class="portfolio__img">
                        <img src="assets/img/work1.png" alt="">

                        <div class="portfolio__link">
                            <a href="portfolio/poster.php" class="portfolio__link-name">View All</a>
                        </div>
                    </div>
                    <!-- logo  -->
                    <div class="portfolio__img">
                        <img src="assets/img/work2.png" alt="">

                        <div class="portfolio__link">
                            <a href="portfolio/logo.php" class="portfolio__link-name">View All</a>
                        </div>
                    </div>
                    <!-- product  -->
                    <div class="portfolio__img">
                        <img src="assets/img/work3.png" alt="">

                        <div class="portfolio__link">
                            <a href="portfolio/product.php" class="portfolio__link-name">View All</a>
                        </div>
                    </div>
                    <!-- UI/UX  -->
                    <div class="portfolio__img">
                        <img src="assets/img/work4.png" alt="">

                        <div class="portfolio__link">
                            <a href="portfolio/uiux.php" class="portfolio__link-name">View All</a>
                        </div>
                    </div>
                    <!-- website  -->
                    <div class="portfolio__img">
                        <img src="assets/img/work5.png" alt="">

                        <div class="portfolio__link">
                            <a href="portfolio/website.php" class="portfolio__link-name">View All</a>
                        </div>
                    </div>
                    <!-- vector  -->
                    <div class="portfolio__img">
                        <img src="assets/img/work6.png" alt="">

                        <div class="portfolio__link">
                            <a href="portfolio/vector.php" class="portfolio__link-name">View All</a>
                        </div>
                    </div>
                    <!-- mobile programming  -->
                    <div class="portfolio__img">
                        <img src="assets/img/website.png" alt="">

                        <div class="portfolio__link">
                            <a href="portfolio/vector.php" class="portfolio__link-name">View All</a>
                        </div>
                    </div>
                    <!-- website programming  -->
                    <div class="portfolio__img">
                        <img src="assets/img/mobile.png" alt="">

                        <div class="portfolio__link">
                            <a href="portfolio/vector.php" class="portfolio__link-name">View All</a>
                        </div>
                    </div>
                    <!-- games programming  -->
                    <div class="portfolio__img">
                        <img src="assets/img/games.png" alt="">

                        <div class="portfolio__link">
                            <a href="portfolio/vector.php" class="portfolio__link-name">View All</a>
                        </div>
                    </div>

                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <div class="contact__info">
                        <h3 class="contact__subtitle">EMAIL</h3>
                        <span class="contact__text">sayyidusyalghiffari@gmail.com</span>

                        <h3 class="contact__subtitle">PHONE</h3>
                        <span class="contact__text">+62 895-3430-86057</span>

                        <h3 class="contact__subtitle">ADDRESS</h3>
                        <span class="contact__text">Bandung, JawaBarat. Indonesia</span>
                    </div>

                    <form action="" class="contact__form" method="post">
                        <div class="contact__inputs">
                            <input type="text" name="nama" id="nama"  placeholder="Name" class="contact__input" required>
                            <input type="mail" name="email" id="email" placeholder="Email" class="contact__input" required>
                        </div>

                        <textarea name="pesan" id="pesan" cols="0" rows="10" class="contact__input" placeholder="input text here" ></textarea>
                        <button type="submit" name="submit" class="contact__button">Submit!</button>
                        <!-- <input type="submit" value="Submit" class="contact__button"> -->
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer section">
            <div class="footer__container bd-grid">
                <div class="footer__data">
                    <h2 class="footer__title">sayyidusy alghiffari</h2>
                    <p class="footer__text">I'm sayyidusy alghiffari and this is my personal website</p>
                        <a href="admin/loginadmin/index.php">Admin</a>
                </div>

                <div class="footer__data">
                    <h2 class="footer__title">EXPLORE</h2>
                    <ul>
                        <li><a href="#home" class="footer__link">Home</a></li>
                        <li><a href="#about" class="footer__link">About</a></li>
                        <li><a href="#skills" class="footer__link">Skills</a></li>
                        <li><a href="#portfolio" class="footer__link">Portfolio</a></li>
                        <li><a href="#Contact" class="footer__link">Contact</a></li>

                    </ul>
                </div>
                
                <div class="footer__data">
                    <h2 class="footer__title">FOLLOW</h2>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://www.instagram.com/portfolio_bysayyid/" class="footer__social"><i class='bx bxl-instagram' ></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter' ></i></a>
                </div>


            </div>
        </footer>

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>