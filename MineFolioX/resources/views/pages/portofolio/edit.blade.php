<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/scss/index.scss', 'resources/app/js'])
    <title>Document</title>
</head>
<body>

    @include('components.navbar')

    <section id="portofolio-edit" >
        <div class="container" >
            <div class="edt-porto" >
                <h1 class="mt-4" >Edit Portofolio</h1>
                <p>Pada laman ini kita bisa merubah <br>
                    portofolio kita <br>
                </p>
                <div>
                    <div class="" style="margin-top: 48px" >
                        <h1 for="title" >Title</h1>
                        <input type="text" class="input-title"  autocomplete="off" autofocus  placeholder="Pastikan Title telah di input dengan benar ">
                    </div>
                    <div>
                        <h1 style="margin-top: 15px">Name</h1>
                        <input type="text" class="input-title" autocomplete="off" autofocus placeholder="Pastikan Name telah di input dengan benar " >
                    </div>
                    <div>
                        <h1 style="margin-top: 20px">Description</h1>
                        <textarea name="" id="" class="textarea-porto"></textarea>
                    </div>
                    <div>
                        <h1 style="margin-top: 87px" >Image</h1>
                        <input type="file" class="input-file" name="image" accept="image/*" required>
                    </div>
                    <div class="a-Submitt d-flex  ">
                        <button type="submit" class="a-submit me-3 ">Submit</button>
                        <button type="submit" class="btn-cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

</body>
</html>
