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

    @include('components.navbar')


    {{-- Hero Section --}}

    <section id="hero-section" class= " mb-28 position-relative" >
        <div class="container text-center">
            <p class="txt-h1 pt-5">We are a website <br />that hosts your portfolio</p>
            <p class="text-center text-white fs-4 ">Showcase Your Brilance</p>
            <div class="d-flex justify-content-center align-items-center gap-2">
                <a class="btn-explore d-flex align-items-center text-decoration-none " href="{{ route('detail') }}">
                    Explore Now
                    <img src="{{ url('images/arrow.png') }}" alt="Arrow Icon" class="ms-2">
                </a>
            </div>

            <div class="d-flex position-relative mt-5 justify-content-center ">
                <div class="box-yellow me-3 img-hover"> <!-- Add margin-end (me-3) to give space -->
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

                <div class="box-green me-3 img-hover">
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


                <div class="box-red img-hover">
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
    <section id="information-section" class="pt-4 position-relative mb-12">
        <div class="container pt-4 d-flex flex-column flex-md-row justify-content-start align-items-start" data-aos="fade-left" >
            <div class="text-section me-md-4 custom-margin">
                <h1 class="fw-semibold">Share Your Portfolio on this Website</h1>
                <p>
                    The best platform to share your portfolio work <br>
                    Easy upload, just swipe! Your works can be uploaded <br>
                    immediately without any hassle. It's like posting on social <br>
                    media, fast and simple!
                </p>
            </div>
            <div class="img-section ms-4 ms-md-4 mx-10">
                <img src="{{ url('images/laptop.png') }}" alt="laptop sains" class="img-fluid  img-hover ">
            </div>
        </div>
    </section>

    {{-- info2 section --}}

    <section id="info2-section" class="position-relative">
        <div class="container pt-4 d-flex flex-column flex-md-row justify-content-start align-items-center" data-aos="fade-right" >
            <img src="{{ url('images/UIUX2.png') }}" alt="" class="img-UI  img-hover" data-aos="fade-up">
            <div class=" me-md-5  txt-custom pt-2  mx-auto">
                <h1 class="ms-2 fw-semibold" >Why should you choose <br>
                    our website? <br>
                </h1>
                <p class="mx-2">
                    MineFolioX is a portfolio platform designed for Gen Z, offering a simple <br>
                    and modern way to create, manage and showcase your work. <br>
                    With easy-to-use features such as secure login, registration,  <br>
                    and efficient search tools, you can quickly connect with <br>
                    potential clients or audiences.  <br>
                </p>
            </div>
        </div>
    </section>


    {{-- save personal section  --}}
    <section id="save-personal" class="py-5 ">
        <div class="container text-center">
            <h1 class="fw-semibold mb-4">To save your personal Portfolio</h1>
            <img src="{{ url('images/personal.png') }}" alt="personal" class="img-fluid img-save" data-aos="fade-up">
        </div>
    </section>


    <footer id="footer-last">
        <div class="container">
            <h1 class="text-white pt-5  mx-auto">MineFolioX</h1>
            <div class="mx-1">
                <img src="{{ url('images/instagram.png') }}" alt="instagram" class="me-2 ">
                <img src="{{ url('images/facebook.png') }}" alt="facebook" class="me-2" >
                <img src="{{ url('images/X.png') }}" alt="X" class="me-2" >
            </div>
        </div>
    </footer>




</body>

</html>
