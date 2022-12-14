<?php 
session_start();
include '../config/config.php';
//mengecek apakah sudah di klik atau belum
if( isset($_POST["submit"])){   
    //cek apakah data berhasil ditambahkan atau tidak?
   if (kontak($_POST) > 0 ){
    //    echo "data berhasil ditambahkan!";
    echo "
        <script>
            alert ('data berhasil ditambahkan!');
            document.location.href = '../index.php';
        </script>
    ";
   }else {
    //    echo "data gagal ditambahkan!";
    echo "
        <script>
            alert ('data gagal ditambahkan!');
            document.location.href = '../index.php';
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
        <link rel="stylesheet" href="../assets/css/styles.css">
        <link rel="shortcut icon" type="image" href="../assets/img/sayyid.png">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio Sayyidusy Al Ghiffari</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">sayyidusy alghiffari</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="../index.php" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="#portfolio" class="nav__link active">Portfolio</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            

            <!--===== PORTFOLIO =====-->
            <section class="portfolio section" id="portfolio">
                <h2 class="section-title">Product Design</h2>

                <div class="portfolio__container bd-grid">
                    <div class="portfolio__img">
                        <img src="../assets/img/chips.png" alt="">

                        <div class="portfolio__link">
                            <a href="../detailproduk/produkdetail1.php" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="../assets/img/comingsoon.png" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="../assets/img/comingsoon.png" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="../assets/img/comingsoon.png" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="../assets/img/comingsoon.png" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="../assets/img/comingsoon.png" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>

                    <div class="portfolio__img">
                        <img src="../assets/img/comingsoon.png" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>

                    <div class="portfolio__img">
                        <img src="../assets/img/comingsoon.png" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>

                    <div class="portfolio__img">
                        <img src="../assets/img/comingsoon.png" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
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
        <script src="../assets/js/main.js"></script>
    </body>
</html>