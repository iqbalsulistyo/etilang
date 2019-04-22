<!DOCTYPE html>
<!--
  Transit by TEMPLATED
  templated.co @templatedco
  Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Tilang</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="<?php print base_url('assets/themes/transit/js/jquery.min.js'); ?>"></script>
    <script src="<?php print base_url('assets/themes/transit/js/skel.min.js'); ?>"></script>
    <script src="<?php print base_url('assets/themes/transit/js/skel-layers.min.js'); ?>"></script>
    <script src="<?php print base_url('assets/themes/transit/js/init.js'); ?>"></script>
    
      <link rel="stylesheet" href="<?php print base_url('assets/themes/transit/css/skel.css'); ?>" />
      <link rel="stylesheet" href="<?php print base_url('assets/themes/transit/css/style.css'); ?>" />
      <link rel="stylesheet" href="<?php print base_url('assets/themes/transit/css/style-xlarge.css'); ?>" />
    
  </head>
  <body class="landing">

    <!-- Header -->
      <header id="header">
        <h1><a href="<?php print base_url('index.php'); ?>">Logo</a></h1>
        <nav id="nav">
          <ul>
            <li><a href="<?php print base_url('index.php'); ?>">Beranda</a></li>
            <li><a href="<?php print base_url('informasi.php'); ?>">Informasi</a></li>
            <li><a href="<?php print site_url('account'); ?>" class="button spesial">Login</a></li>
          </ul>
        </nav>
      </header>

    <!-- Banner -->
      <section id="banner">
        <h2>Sistem Informasi Tilang</h2>
        <p>Daerah Istimewa Yogyakarta</p>
      </section>

    <!-- One -->
      <section id="one" class="wrapper style1 special">
        <div class="container">
          <header class="major">
            <h2>Silahkan Melihat Data Tilang</h2>
          </header>
        <?php echo $output; ?>
        <!-- $this->load->view('awal.php'); -->
        </div>
      </section>

    
    <!-- Footer -->
      <footer id="footer">
        <div class="container">
          <section class="links">
            <div class="row">
              <section class="3u 6u(medium) 12u$(small)">
                <h3>Lorem ipsum dolor</h3>
                <ul class="unstyled">
                  <li><a href="#">Lorem ipsum dolor sit</a></li>
                  <li><a href="#">Nesciunt itaque, alias possimus</a></li>
                  <li><a href="#">Optio rerum beatae autem</a></li>
                  <li><a href="#">Nostrum nemo dolorum facilis</a></li>
                  <li><a href="#">Quo fugit dolor totam</a></li>
                </ul>
              </section>
              <section class="3u 6u$(medium) 12u$(small)">
                <h3>Culpa quia, nesciunt</h3>
                <ul class="unstyled">
                  <li><a href="#">Lorem ipsum dolor sit</a></li>
                  <li><a href="#">Reiciendis dicta laboriosam enim</a></li>
                  <li><a href="#">Corporis, non aut rerum</a></li>
                  <li><a href="#">Laboriosam nulla voluptas, harum</a></li>
                  <li><a href="#">Facere eligendi, inventore dolor</a></li>
                </ul>
              </section>
              <section class="3u 6u(medium) 12u$(small)">
                <h3>Neque, dolore, facere</h3>
                <ul class="unstyled">
                  <li><a href="#">Lorem ipsum dolor sit</a></li>
                  <li><a href="#">Distinctio, inventore quidem nesciunt</a></li>
                  <li><a href="#">Explicabo inventore itaque autem</a></li>
                  <li><a href="#">Aperiam harum, sint quibusdam</a></li>
                  <li><a href="#">Labore excepturi assumenda</a></li>
                </ul>
              </section>
              <section class="3u$ 6u$(medium) 12u$(small)">
                <h3>Illum, tempori, saepe</h3>
                <ul class="unstyled">
                  <li><a href="#">Lorem ipsum dolor sit</a></li>
                  <li><a href="#">Recusandae, culpa necessita nam</a></li>
                  <li><a href="#">Cupiditate, debitis adipisci blandi</a></li>
                  <li><a href="#">Tempore nam, enim quia</a></li>
                  <li><a href="#">Explicabo molestiae dolor labore</a></li>
                </ul>
              </section>
            </div>
          </section>
          <div class="row">
            <div class="8u 12u$(medium)">
              <ul class="copyright">
                <li>&copy; Presented by Iqbal Sulistyo</li>
                <li>Email   : iqbalsulistyo1@gmail.com</li>
                <li>Contact : 087827857852</li>
              </ul>
            </div>
            <div class="4u$ 12u$(medium)">
              <ul class="icons">
                <li>
                  <a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
                </li>
                <li>
                  <a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
                </li>
                <li>
                  <a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
                </li>
                <li>
                  <a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

  </body>
</html>

