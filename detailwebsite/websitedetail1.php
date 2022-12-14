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
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Design Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/detail.css" echo time>
    <link rel="shortcut icon" type="image" href="../assets/img/sayyid.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
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
                        <li class="nav__item"><a href="#portfolio" class="nav__link">My Design</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>
        
    <!--===== PRODUCT DETAILS =====-->
    <br><br><br>
    <section class="design" id="portfolio">
    <h2 class="section-title">My Design</h2>
    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "../assets/img/website1.png" alt = "Design by sayyid">
              <img src = "../assets/img/website2.png" alt = "Design by sayyid">
              <img src = "../assets/img/website3.png" alt = "Design by sayyid">
              <img src = "../assets/img/website4.png" alt = "Design by sayyid">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "../assets/img/website1.png" alt = "Design by sayyid">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "../assets/img/website2.png" alt = "Design by sayyid">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "../assets/img/website3.png" alt = "Design by sayyid">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "../assets/img/website4.png" alt = "Design by sayyid">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">Bubur Gowes</h2>
          <a href = "#" class = "product-link">e-commerce website</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span> 4.7(21)</span>
          </div>

          <!-- ====== HARGA DULU DAN SEKARANG ====== -->
          <div class = "product-price">
            <!-- <p class = "last-price">Old Price: <span>$257.00</span></p> -->
            <p class = "new-price">Price : <span>$5</span></p>
          </div>

          <div class = "product-detail">
            <h2>about this Design : </h2>
            <p>today I made a design remake for the chicken porridge business venture in Bandung . Indonesia</p>
            <p>=========</p>
              
             <p> In contribution for ToDesign Challenge. If you’re interested to join the challenge, feel free to contact me through DM.
              ToDesign Together!</p>

             <p> Don't forget to like 🥰 in this post.</p>
             <p>thanks🙏</p>

             <p> ______ </p>
             <p>Design by sayyidusy syauqi al Ghiffari @sayyidusy_alghifari</p>
              
             <p>Design tools :Figma🌈</p>
             <p> ______</p>
        
             <p>In contribution for ToDesign Challenge. If you’re interested to join the challenge, feel free to contact me through DM.
              ToDesign Together! 🔥🔥🔥</p>
           
              <!-- ======= deskripsi warna ======== -->
            <!-- <ul>
              <li>Color: <span>Black</span></li>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Shoes</span></li>
              <li>Shipping Area: <span>All over the world</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul> -->
          </div>

          <!-- ======== JUMLAH PEMBELIAN ======== -->
          <a type="submit" name="submit" href="https://www.buymeacoffee.com/sayyidusyaN/extras" class="contact__button" style="text-align: center;">Buy Me!</a>
          <!-- <div class = "purchase-info">
            <input type = "number" min = "0" value = "1">
            <button type = "button" class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
            <button type = "button" class = "btn">Compare</button>
          </div> -->

          <!-- ======== SOCIAL MEDIA ======== -->
          <!-- <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div> -->

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
        <script src="../assets/js/detail.js"></script>
    </body>
</html>