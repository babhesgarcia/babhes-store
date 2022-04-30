  <?php include __DIR__ . '/config/app.php'; ?>

  <!-- controller | logic -->
  <?php

  //  .. start new session
  session_start();

  $url = $_SERVER['REQUEST_URI'];

  include __DIR__ . '/includes/controllers/index.php'; ?>

  <!-- header -->
  <?php include __DIR__ . '/includes/header.php' ?>

  <!-- wrapper -->
  <div class="wrapper">
    <!-- nav -->
    <?php include __DIR__ . '/includes/nav.php' ?>


    <!-- main -->
    <main class="main">

      <?php
      // include __DIR__ . '/includes/pages/home.php';
      $page = isset($_GET['source']) ? $_GET['source'] : 'home';
      include  get_pages($page, 'home', 'frontpage');
      ?>

    </main>

    <!-- copyright -->
    <?php include __DIR__ . '/includes/components/copyright.php'; ?>

  </div>

  <!-- footer -->
  <?php include __DIR__ . '/includes/footer.php'; ?>