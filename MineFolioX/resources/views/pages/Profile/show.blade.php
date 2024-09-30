<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/scss/index.scss', 'resources/app/js'])
</head>

<body>
    @include('components.profile')


    <section id="detail-profile">
        <div class="container">
            <div class="txt-judul">
                <h1>Alexander</h1>
                <h2>Hello World</h2>
                <div class="card-detailProfile">

                </div>

                <p class="txt-p" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, veniam? Odio modi ab corrupti amet
                    quos asperiores, ipsam ullam <br> tempora rerum tempore dolor rem maiores nemo earum exercitationem
                    dicta officiis!Tempora commodi consectetur dolor cupiditate <br>reprehenderit, vel odio recusandae
                    sit amet omnis repellendus asperiores, facilis modi voluptates. Facere odio facilis ducimus
                    <br>debitis non delectus, minima dolorum placeat aut quis culpa.
                    <br>
                </p>
            </div>
        </div>
    </section>

    @include('components.footer')
</body>

</html>
