<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobHuntly - Discover more than 5000+ Jobs</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    @livewireStyles
</head>

<body>


    <header class="login-header">
        <div class="container">
            <div class="py-3">
                <div class="logo">
                    <a href="{{ route('home')}}" wire:navigate>
                        <img src="assets/images/logo.png" alt="JobHunty Logo">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="signup-wrapper">
        <div class="signup-left">

            <div class="image-box">
                <img src="assets/images/auth/hired.png" alt="User" class="hired absulate">
                <img src="assets/images/auth/person.png" alt="User" class="absulate man">
                <img src="assets/images/auth/testimonial.png" alt="User" class="testimonial absulate">
            </div>

        </div>

        <!-- content -->
        @yield('content')


    </div>

    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    @livewireScripts
</body>

</html>