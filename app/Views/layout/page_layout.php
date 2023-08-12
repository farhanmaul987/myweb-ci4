<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" href="<?= base_url() ?>img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="<?= base_url() ?>fa/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>bi/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <?= $this->include('layout/loading'); ?>

        <?= $this->include('layout/sidebar'); ?>
        <div class="content">
            <?= $this->include('layout/navbar'); ?>

            <?= $this->renderSection('content'); ?>

            <?= $this->include('layout/footer'); ?>
        </div>

        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const currentPath = window.location.pathname.split("/").pop(); // Get the current page's filename
            const sidebarLinks = document.querySelectorAll(".sidebar .nav-link");

            // Loop through sidebar links and add 'active' class to the link that matches the current page's filename
            sidebarLinks.forEach(link => {
                const linkPath = link.getAttribute("href").split("/").pop();
                if (linkPath === currentPath) {
                    link.classList.add("active");
                }
            });
        });
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>lib/chart/chart.min.js"></script>
    <script src="<?= base_url() ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url() ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url() ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>js/main.js"></script>
</body>

</html>