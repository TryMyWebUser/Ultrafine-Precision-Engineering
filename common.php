<?php
ob_start(); // Start output buffering
    include "temp/header.php";

    // Check if 'data' exists
    if (!isset($_GET['data'])) {
        // Redirect properly
        header("Location: index.php");
        exit(); // Always exit after header() to stop further execution
    }

    $getData = $_GET['data'];
    
    $products = Operations::getProductPage($getData, $conn);
ob_end_flush(); // Send the buffered output
?>

        <main>
            <!-- Breadcrumb area start  -->
            <div class="breadcrumb__area breadcrumb-space overly theme-bg-heading-primary overflow-hidden">
                <div class="breadcrumb__background" data-background="assets/imgs/breadcrumb/breadcrumb.png"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-12">
                            <div class="breadcrumb__content text-center">
                                <h1 class="breadcrumb__title color-white title-animation"><?= $getData ?></h1>
                                <div class="breadcrumb__menu d-inline-flex justify-content-center">
                                    <nav>
                                        <ul>
                                            <li>
                                                <span>
                                                    <a href="index.php">
                                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1 5.9L7.5 1L14 5.9V13.6C14 13.9713 13.8478 14.3274 13.5769 14.5899C13.306 14.8525 12.9386 15 12.5556 15H2.44444C2.06135 15 1.69395 14.8525 1.42307 14.5899C1.15218 14.3274 1 13.9713 1 13.6V5.9Z"
                                                                stroke="white"
                                                                stroke-width="1.5"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path d="M5.33398 15V8H9.66732V15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>

                                                        Home
                                                    </a>
                                                </span>
                                            </li>
                                            <li class="active"><span><?= $getData ?></span></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb area start  -->

            <!-- Product Start -->
            <section class="team-details">

                <div class="container">
                    <div class="col-12">
                        <div class="section__title-wrapper text-center mt-60 mt-sm-40 mt-xs-35">
                            <span class="section__subtitle justify-content-center mb-13 ml-0" style="margin-left: 50px;"><span data-width="40px" class="left-separetor" style="width: 40px; opacity: 1;"></span>Our Products<span data-width="40px" class="right-separetor" style="width: 40px; opacity: 1;"></span></span>
                        </div>
                    </div>

                    <?php
                        if (!empty($products)) {
                            foreach ($products as $pro) { 
                    ?>
                    <div class="row py-5">
                        <div class="col-lg-5">
                            <div class="team-details__media">
                                <img src="assets/<?= $pro['img'] ?>" alt="image not found" />
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="team-details__content">
                                <h2 class="mb-10"><?= $pro['title'] ?></h2>
                                <p class="mb-0"><?= $pro['dec'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } } else { echo "<p>Product Not Found</p>"; } ?>

                </div>
            </section>
            <!-- Product End -->
        </main>

<?php

    include "temp/footer.php";

?>