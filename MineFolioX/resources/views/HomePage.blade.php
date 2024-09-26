<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MineFoliox</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/scss/index.scss','resources/app/js'])


</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container mx-auto">
            <a class="txt-a">MineFolioX</a>
            <div class="d-flex w-100 justify-content-center">
                <form class="d-flex justify-content-center align-items-center" role="search">
                    <div class="search-container d-flex align-items-center position-relative">
                        <img src="{{ url('images/search.png') }}" alt="Search Icon" class="search-icon">
                        <input class="input-search mx-2" type="search" placeholder="Search Your Portofolio"
                            aria-label="Search">
                    </div>
                    <div class="d-flex">
                        <button class="btn-sign-in mx-2 px-2" type="submit">Sign-Up</button>
                        <button class="btn-sign-in mx-2 px-2" type="submit">Sign-In</button>
                    </div>
                </form>

            </div>
        </div>
    </nav>


    {{-- Hero Section --}}

    <section id="hero-section">
        <div class="container text-center">
            <p class="txt-h1 pt-5">We are a website <br />that hosts your portfolio</p>
            <p class="text-center text-white fs-4 ">Showcase Your Brilance</p>
            <div class="d-flex justify-content-center align-items-center gap-2">
                <button class="btn-explore d-flex align-items-center">
                    Explore Now
                    <img src="{{ url('images/arrow.png') }}" alt="Arrow Icon" class="ms-2">
                </button>
            </div>

            <div class="d-flex position-relative mt-5 justify-content-center ">
                <div class="box-yellow me-3"> <!-- Add margin-end (me-3) to give space -->
                    <div style="width: 88px; height: 127px; left: 18px; top: 18px; position: absolute">
                        <div style="width: 84px; height: 63px; left: 4px; top: 0px; position: absolute">
                            <div class="uiux">UIX</div>
                            <div class="design">Design</div>
                        </div>
                        <div>
                            <img src="{{  url('images/UIUX.png') }}" alt="" class="img-uiux">
                        </div>
                    </div>
                </div>

                <div class="box-green me-3">
                    <div style="width: 88px; height: 127px; left: 18px; top: 18px; position: absolute">
                        <div style="width: 84px; height: 63px; left: 4px; top: 0px; position: absolute">
                            <div class="uiux  text-white ">Graphic </div>
                            <div class="design  text-white ">Design</div>
                        </div>
                        <div>
                            <img src="{{  url('images/PC.png') }}" alt="" class="img-pc">
                        </div>
                    </div>
                </div>


                <div class="box-red">
                    <div style="width: 88px; height: 127px; left: 18px; top: 18px; position: absolute">
                        <div style="width: 84px; height: 63px; left: 4px; top: 0px; position: absolute">
                            <div class="uiux  text-white ">Website</div>
                            <div class="design  text-white ">Development</div>
                        </div>
                        <div>
                            <img src="{{  url('images/Webdev.png') }}" alt="" class="img-pc">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    {{-- Information section  --}}
    

</body>

</html>
