<?php include __DIR__ . '/../config/app.php'; ?>

<?php

include __DIR__ . '/init.php';
?>

<!-- .. header -->
<?php include __DIR__ . '/includes/header.php'; ?>

<!-- wrapper -->
<div class="wrapper">

    <!-- .. nav -->
    <?php include __DIR__ . '/includes/nav.php'; ?>

    <!-- main -->
    <main class="main">
        <!-- .. tab -->

        <?php
        $page = isset($_GET['source']) ? $_GET['source'] : 'home';
        include get_pages($page, 'dashboard', 'admin'); ?>

    </main>

</div>

<!-- .. footer -->
<?php include __DIR__ . '/includes/footer.php'; ?>