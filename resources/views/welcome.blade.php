<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Components / Modal - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .modal-dialog.modal-dialog-centered {
            max-width: 850px !important;
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-footer {
            border-top: none;
        }
        li.ol {
            line-height: 2.5;
        }

        .buttons-section {
            position: absolute;
            bottom: 36px;
            left: 23px;
        }

        i.bx.bxs-video {
            padding: 0px 10px 0 0;
        }

        a.video-button {
            color: #00aced;
            padding: 0 17px;
        }

        .col-6.left-section {
            background: #f8f9fc;
            border-radius: 8px 0 0 8px;
            padding: 1.2rem;
        }

        .text-right-side {
            direction: rtl;
        }

        button.btn.btn-light {
            background-color: #fff !important;
        }

        p.first-line {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            border-bottom: 8px solid #00b9f5;
            height: 0;
            width: 100%;
        }

        p.second-line {
            border-bottom: 8px solid #012b72;
            content: '';
            position: absolute;
            left: 0;
            bottom: -16px;
            height: 0;
            width: 100%;
        }

        .row.login-body {
            --bs-gutter-x: 0;
        }
        @media only screen and (max-width: 724px) {
            button.btn.btn-light {
                width: 100% !important;

            }
            .buttons-section {
                position: unset;
            }
        }
    </style>
</head>

<body>
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <div>
                            <!-- Vertically centered Modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#verticalycentered">
                                Vertically centered
                            </button>
                            <div class="modal fade" id="verticalycentered" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body1">
                                            <div class="row login-body">
                                                <div class="col-6 left-section p-4">
                                                    <h5 class="modal-title"><b>To Login into your Paytm Web account</b>
                                                    </h5>
                                                    <ol>
                                                        <li class="ol">Open Paytm App</li>
                                                        <li class="ol">Tap Scanoption available at the bottom</li>
                                                        <li class="ol">Point Paytm Scan at QR Code to login</li>
                                                    </ol>
                                                    <a href="" class="video-button"
                                                        style="padding: 0 17px;"><i class="bx bxs-video"></i>Watch
                                                        Video</a>
                                                    <div class="buttons-section">
                                                        <p>To create an account download Paytm App</p>
                                                        <button type="button" class="btn btn-light"> <i
                                                                class="bx bxl-play-store"></i> Google Play</button>
                                                        <button type="button" class="btn btn-light"> <i
                                                                class="bx bxl-apple"></i> App Store</button>
                                                    </div>
                                                </div>
                                                <div class="col-6 p-3">
                                                    <div class="text-right-side">
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="col p-5">
                                                        <img width="100%"
                                                            src="https://cdn.ttgtmedia.com/rms/misc/qr_code_barcode.jpg"
                                                            alt="">
                                                        <p class="text-center">Scan QR code with Paytm App to login</p>
                                                    </div>
                                                </div>
                                                <p class="first-line"></p>
                                                <p class="second-line"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Vertically centered Modal-->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
