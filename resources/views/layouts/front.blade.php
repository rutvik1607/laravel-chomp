<!DOCTYPE html>
<html lang="en">
<?php
use App\Models\page as Pages;

$tmpURL = Request::path(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('public/favicon.svg') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/front.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="top-nav" style="background-image: url('public/images/2022/08/nav-top.svg');">
            <div class="container">
                <nav class="navbar justify-content-center">
                    <div class="text-nav">We're open and available for takeaway & delivery. <a href=""> Order
                            Now</a> </div>
                </nav>
            </div>
        </div>
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="">
                        <img src="public/images/2022/08/logo.svg" width="40" alt="">
                    </a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">

                            <?php $pages = Pages::where('show_front', '1')->get(); ?>
                            @foreach ($pages as $key => $item)
                                <div class="menu-item <?php echo $tmpURL == $item->name ? 'current-menu-item' : ''; ?>">
                                    <a href="{{ $item->name }}">{{ Str::ucfirst($item->name) }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="nav-right">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    {{ $slot }}

    <footer class="footer" style="background-image: url('public/images/2022/08/footer-bg.svg');">
        <div class="container">
            <!-- <footer class="py-5"> -->
            <div class="row">
                <div class="col-md-6 col-sm-4 col-6">
                    <div>
                        <a href="#"><img src="public/images/2022/08/logo.svg" width="60" alt="logo"></a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-4 col-6">
                    <div class="text-end">
                        @foreach ($pages as $key => $item)
                            <div>
                                <a href="{{ $item->name }}">{{ Str::ucfirst($item->name) }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between py-4 my-4 border-top icons-f">
                <p>Built by <a href="http://">Flowbase</a> · Powered by <a href="http://">Webflow</a></p>
                <div class="icons-f">
                    <div>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://twitter.com/login"><i class="fab fa-twitter-square"></i></a>
                                <a href="https://facebook.com/login"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://www.google.com/"><i class="fab fa-google-plus-square"></i></a>
                                <a href="https://share.com/login"><i class="fas fa-share-alt-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>
