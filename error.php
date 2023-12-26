<?php
$page = "404 | ";
include("inc/head.php")
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">404 Error</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">ANASAYFA</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">404 Error</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- 404 Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4">Page Not Found</h1>
                <a class="btn btn-primary py-3 px-5" href="anasayfa">Ana Sayfaya Dön</a>
            </div>
        </div>
    </div>
</div>
<!-- 404 End -->

<?php
include("inc/footer.php")
?>