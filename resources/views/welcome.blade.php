<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: relative; z-index: 10;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <!-- Logo di kiri -->
                        <img src="{{ asset('storage/img/icon.jpg') }}" alt="Foto" width="50" height="50" style="object-fit: cover">
        
                        <!-- Menu di kanan -->
                        <ul class="navbar-nav mb-2 mb-lg-0 gap-5">
                            <li class="nav-item">
                                <a class="nav-link" style="font-size: 20px" href="#AboutUs">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size: 20px" href="#">Portofolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size: 20px" href="#">Expertise</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size: 20px" href="#">Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="font-size: 20px" href="#">Lets Talk</a>
                            </li>
                        </ul>
                    </div>
                </div>
        
                <!-- Tombol untuk tampilan mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <section class="bg-light">
            <div class="p-3">
                <div class="py-4">
                    <h1 class="text-center">Build Valuable Product</h1>
                    <h4 class="text-center">Explore</h4>
                </div>
                <img src="{{ asset('storage/img/rocket.png') }}" alt="Foto" width="600" height="600" style="object-fit: contain; margin-top: -200px; margin-bottom: -300px; position: relative; z-index: 2;" class="mx-auto d-block">
                <p class="text-center" style="font-size: 150px; position: relative; z-index: 1;">Nightive</p>
            </div>    
        </section>
        <section>
            <div class="mx-3 py-3">
            <div class="row mx-3 g-3 align-items-stretch pt-5" style="min-height: 300px">
                <div class="col-lg-6 p-5">
                    <div class="text-primary">MODERN BUSINESS</div>
                    <div class="fw-bold" style="font-size: 60px">
                        We spend one-third of our life at work.
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                        <div class="bg-primary">
                            <div class="d-flex flex-column justify-content-between align-items-start p-5 h-100">
                                <div>
                                    <img src="{{ asset('storage/img/photo.jpg') }}" alt="photo" class="rounded-circle" width="80" height="80">
                                </div>
                                <div class="text-white" style="font-size: 22px">
                                    "Your site is always my only go to option for fragrances"
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom 3 -->
                    <div class="col-12 col-lg-3">
                        <div style="background-color: #0c0e39; min-height: 100px;"></div>
                    </div>
            </div>
            <br>

            <div class="row mx-3 g-3 align-items-stretch" style="min-height: 300px">
                <div class="col-lg-3">
                    <div class="bg-primary text-white p-0 h-100">
                        <img src="{{ asset('storage/img/geo.jpeg') }}" alt="" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="p-4 h-100 d-flex justify-content-center align-items-center" style="background-color: #e0e3ea">
                        <img src="{{ asset('storage/img/photo.jpg') }}" alt="photo" class="rounded-circle" width="200" height="200">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center" style="background-color: #0c0e39">
                        <div class="text-white text-center" style="font-size: 50px">
                            3.2X
                        </div>
                        <div class="text-white text-center" style="font-size: 18px">
                            Average revenue Growth per Successful Client
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bg-primary text-white p-0 h-100">
                        <img src="{{ asset('storage/img/geo.jpeg') }}" alt="" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>
            </div>

        </section>
        <section>
            <h5 id="AboutUs" class="text-center">About Us</h5>
            <div class="d-flex justify-content-center">
                <div class="text-center col-md-11 px-3" style="font-size: 60px">
                    We are a creative team that believes that every design has a story,
                    <span class="text-secondary">
                        and our job is to tell that story in the most impactful way possible.
                    </span>
                </div>
            </div>
            <div class="row mx-3 g-3 align-items-stretch" style="min-height: 300px">
                <div class="col-lg-4">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center" style="background-color: #e4ccff">
                        <div class="fw-bold text-center" style="font-size: 50px">
                            Portofolio 1
                        </div>
                        <div class="fw-bold text-center" style="font-size: 18px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center" style="background-color: #e4ccff">
                        <div class="fw-bold text-center" style="font-size: 50px">
                            Portofolio 2
                        </div>
                        <div class="fw-bold text-center" style="font-size: 18px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center" style="background-color: #e4ccff">
                        <div class="fw-bold text-center" style="font-size: 50px">
                            Portofolio 3
                        </div>
                        <div class="fw-bold text-center" style="font-size: 18px">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="text-center">
                Our Services
            </div>
            <div class="d-flex flex-column">
                <div class="row mx-3 g-3 align-items-stretch" style="min-height: 200px">
                    <div class="col-lg-1">
                        <div class="p-4 h-100 d-flex flex-column justify-content-center">
                            <div class="fw-bold text-center" style="font-size: 18px">
                                S/01
                            </div>
                            <div class="fw-bold text-center" style="font-size: 18px">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="p-4 h-100 d-flex flex-column justify-content-between">
                            <div class="fw-bold text-start" style="font-size: 64px">
                                Illustration
                            </div>
                            <div class="fw-bold text-start" style="font-size: 18px; color: #919191">
                                Our illustration services aim to deliver unique and characterful visuals, in line your brand identity from concept to final details.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-center py-4">
                        <div class="col-lg-4 d-flex align-items-center justify-content-end">
                            <img src="{{ asset('storage/img/photo.jpg') }}" alt="Photo" class="img-fluid rounded" style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="col-lg-4 d-flex align-items-center justify-content-end">
                            <img src="{{ asset('storage/img/photo.jpg') }}" alt="Photo" class="img-fluid rounded" style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="col-lg-4 d-flex align-items-center justify-content-end">
                            <img src="{{ asset('storage/img/photo.jpg') }}" alt="Photo" class="img-fluid rounded" style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mx-4">
            


            <!-- BLOK 1: Animation -->
            <div class="d-flex flex-column">
                <div class="row mx-3 g-3 align-items-stretch">
                    <!-- Kolom 1 -->
                    <div class="col-lg-1">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center">
                        <div class="fw-bold text-center" style="font-size: 18px">S/01</div>
                    </div>
                    </div>

                    <!-- Kolom 2 -->
                    <div class="col-lg-5">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center">
                        <div class="fw-bold text-start" style="font-size: 64px">Web Design</div>
                        <div id="descText1" class="fw-bold text-start mt-3" style="font-size: 18px; color: #919191; display: none;">
                        Our illustration services aim to deliver unique and characterful visuals, in line your brand identity from concept to final details.
                        </div>
                    </div>
                    </div>

                    <!-- Kolom 3 -->
                    <div class="col-lg-6">
                    <div class="d-flex justify-content-end align-items-center gap-3 h-100">
                        <img id="img1-1" src="{{ asset('storage/img/photo.jpg') }}" class="img-fluid rounded" style="width: 200px; height: 200px; object-fit: cover; display: none;">
                        <img id="img1-2" src="{{ asset('storage/img/photo.jpg') }}" class="img-fluid rounded" style="width: 200px; height: 200px; object-fit: cover; display: none;">
                        <img id="img1-3" src="{{ asset('storage/img/photo.jpg') }}" class="img-fluid rounded" style="width: 200px; height: 200px; object-fit: cover; display: none;">

                        <button id="seeMoreBtn1" class="btn btn-outline-dark">See More</button>
                    </div>
                    </div>
                </div>
            </div>

            <hr class="mx-4">

            <!-- BLOK 2: Web -->
            <div class="d-flex flex-column">
                <div class="row mx-3 g-3 align-items-stretch">
                    <!-- Kolom 1 -->
                    <div class="col-lg-1">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center">
                        <div class="fw-bold text-center" style="font-size: 18px">S/02</div>
                    </div>
                    </div>

                    <!-- Kolom 2 -->
                    <div class="col-lg-5">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center">
                        <div class="fw-bold text-start" style="font-size: 64px">Mobile App</div>
                        <div id="descText2" class="fw-bold text-start mt-3" style="font-size: 18px; color: #919191; display: none;">
                        We build modern and responsive websites tailored to your brand's goals and user experience.
                        </div>
                    </div>
                    </div>

                    <!-- Kolom 3 -->
                    <div class="col-lg-6">
                    <div class="d-flex justify-content-end align-items-center gap-3 h-100">
                        <img id="img2-1" src="{{ asset('storage/img/photo.jpg') }}" class="img-fluid rounded" style="width: 200px; height: 200px; object-fit: cover; display: none;">
                        <img id="img2-2" src="{{ asset('storage/img/photo.jpg') }}" class="img-fluid rounded" style="width: 200px; height: 200px; object-fit: cover; display: none;">
                        <img id="img2-3" src="{{ asset('storage/img/photo.jpg') }}" class="img-fluid rounded" style="width: 200px; height: 200px; object-fit: cover; display: none;">

                        <button id="seeMoreBtn2" class="btn btn-outline-dark">See More</button>
                    </div>
                    </div>
                </div>
            </div>

            <hr class="mx-4">

            <!-- BLOK 3: Web -->
            <div class="d-flex flex-column">
                <div class="row mx-3 g-3 align-items-stretch">
                    <!-- Kolom 1 -->
                    <div class="col-lg-1">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center">
                        <div class="fw-bold text-center" style="font-size: 18px">S/02</div>
                    </div>
                    </div>

                    <!-- Kolom 2 -->
                    <div class="col-lg-5">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center">
                        <div class="fw-bold text-start" style="font-size: 64px">Animation</div>
                        <div id="descText3" class="fw-bold text-start mt-3" style="font-size: 18px; color: #919191; display: none;">
                        We build modern and responsive websites tailored to your brand's goals and user experience.
                        </div>
                    </div>
                    </div>

                    <!-- Kolom 3 -->
                    <div class="col-lg-6">
                    <div class="d-flex justify-content-end align-items-center gap-3 h-100">
                        <img id="img3-1" src="{{ asset('storage/img/photo.jpg') }}" class="img-fluid rounded" style="width: 200px; height: 200px; object-fit: cover; display: none;">
                        <img id="img3-2" src="{{ asset('storage/img/photo.jpg') }}" class="img-fluid rounded" style="width: 200px; height: 200px; object-fit: cover; display: none;">
                        <img id="img3-3" src="{{ asset('storage/img/photo.jpg') }}" class="img-fluid rounded" style="width: 200px; height: 200px; object-fit: cover; display: none;">

                        <button id="seeMoreBtn3" class="btn btn-outline-dark">See More</button>
                    </div>
                    </div>
                </div>
            </div>

            <hr class="mx-4">

            <!-- JAVASCRIPT -->
            <script>
            // Fungsi tombol untuk blok 1
            document.getElementById('seeMoreBtn1').addEventListener('click', function () {
                document.getElementById('descText1').style.display = 'block';
                document.getElementById('img1-1').style.display = 'block';
                document.getElementById('img1-2').style.display = 'block';
                document.getElementById('img1-3').style.display = 'block';
                this.style.display = 'none';
            });

            // Fungsi tombol untuk blok 2
            document.getElementById('seeMoreBtn2').addEventListener('click', function () {
                document.getElementById('descText2').style.display = 'block';
                document.getElementById('img2-1').style.display = 'block';
                document.getElementById('img2-2').style.display = 'block';
                document.getElementById('img2-3').style.display = 'block';
                this.style.display = 'none';
            });

            // Fungsi tombol untuk blok 3
            document.getElementById('seeMoreBtn3').addEventListener('click', function () {
                document.getElementById('descText3').style.display = 'block';
                document.getElementById('img3-1').style.display = 'block';
                document.getElementById('img3-2').style.display = 'block';
                document.getElementById('img3-3').style.display = 'block';
                this.style.display = 'none';
            });
            </script>

        </section>
        <section>
            <div class="mx-3 py-3">
                <div class="row mx-3 g-3 align-items-stretch pt-5">
                    <div class="col-lg-12">
                        <div class="text-primary">ABOUT US</div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="fw-bold" style="font-size: 42px">We are at the forefront of technological innovation.</div>
                                <div class="col-7">Our Journey began over a decade ago, driven by a passion for delivering cutting-edge solutions to businesses worldwide.</div>
                                <br>
                                <div class="row">
                                    <div class="col-3">
                                        <strong style="font-size: 42px">15+</strong>
                                        <div>Years Of Experience</div>
                                    </div>
                                    <div class="col-3">
                                        <strong style="font-size: 42px">5000+</strong>
                                        <div>Satisfied Clients</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <img src="{{ asset('storage/img/photo.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </section>
        <section>
            <div class="text-center">
                Our Product
            </div>
            <div class="row mx-3 g-3 align-items-stretch" style="min-height: 300px">
                <div class="col-lg-3">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center" style="background-color: #e4ccff">
                        <div class="fw-bold text-center" style="font-size: 50px">
                            Nightive
                        </div>
                        <div class="fw-bold text-center" style="font-size: 18px">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center" style="background-color: #e4ccff">
                        <div class="fw-bold text-center" style="font-size: 50px">
                            Logorasa House
                        </div>
                        <div class="fw-bold text-center" style="font-size: 18px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center" style="background-color: #e4ccff">
                        <div class="fw-bold text-center" style="font-size: 50px">
                            Morph
                        </div>
                        <div class="fw-bold text-center" style="font-size: 18px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-4 h-100 d-flex flex-column justify-content-center" style="background-color: #e4ccff">
                        <div class="fw-bold text-center" style="font-size: 50px">
                            Tech Savy
                        </div>
                        <div class="fw-bold text-center" style="font-size: 18px">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="text-center">
                AWARDS
            </div>
            <div>Achievements</div>
            <div class="d-flex flex-column">
                {{-- <div class="row">
                    <div class="col-lg-5"><img src="" alt=""></div>
                    <div class="col-lg-1">S/01</div>
                    <div class="col-lg-5">Awwwards</div>
                </div>
                <div class="row">
                    <div class="col-lg-5"><img src="" alt=""></div>
                    <div class="col-lg-1">S/01</div>
                    <div class="col-lg-5">CSS Design Awards</div>
                </div>
                <div class="row">
                    <div class="col-lg-5"><img src="" alt=""></div>
                    <div class="col-lg-1">S/01</div>
                    <div class="col-lg-5">Red Dot Design Award</div>
                </div> --}}
            </div>
        </section>
        <section>
            <div class="p-5" style="background: linear-gradient(135deg, #000000, #0000ac);">
                <div class="m-3" style="font-size: 64px">
                    <div class="text-center text-white">Let's Collaborate and Create</div>
                    <div class="text-center text-white">Something Amazing!</div>
                </div>
                <div class="text-center text-white">Join us in transforming your project from concept to completion</div>
                <div class="d-flex justify-content-center align-items-center m-3" style="height: 100px;">
                    <button class="btn btn-light rounded-pill fw-bold px-4" style="font-size: 14px">
                        <i class="fw-bold bi bi-envelope" style="font-size: 18px"></i> LET'S TALK
                    </button>
                </div>

            </div>

        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </body>
</html>
