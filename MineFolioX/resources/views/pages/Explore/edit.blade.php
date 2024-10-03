<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/scss/index.scss','resources/app/js'])
    <title>Document</title>
</head>
<body>


    @include('components.profile')


    <section id="editPorto" >
        <div class="container" >
            <div class="PortoEdit">
                <h1>Edit Portofolio</h1>
                <p>
                    Pada laman ini kita bisa merubah  <br>
                    portofolio kita <br>
                </p>
                <div>
                    <form action="">
                        <div class="cardPorto" >
                            <h1>Title</h1>
                            <input type="text"  placeholder="Masukkan judul di sini ya" name="" id="cardPorto" >
                        </div>
                        <div class="cardPorto2">
                            <h1>Name</h1>
                            <input type="text" placeholder="Masukkan nama di sini" name="cardPorto2" id="cardPorto2" >
                        </div>
                        <div class="cardPorto3">
                            <h1>Description</h1>
                            <textarea class="custom-textarea"  placeholder="Silahkan masukkan deskripsi nya ya"></textarea>
                        </div>
                        <div  class="cardPorto4" >
                            <h1>Image</h1>
                            <input type="file" accept="image/*"  class="custom-textarea1"  placeholder="silahkan masukkan gambar anda sebagi portofolio anda">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
</body>
</html>
