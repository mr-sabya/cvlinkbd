<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobHuntly - Discover more than 5000+ Jobs</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    @livewireStyles
</head>

<body>

    <!-- header -->
    <livewire:theme.header />

    <!-- content -->
    @yield('content')

    <!-- footer -->
    <livewire:theme.footer />

    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    @livewireScripts
</body>

</html>