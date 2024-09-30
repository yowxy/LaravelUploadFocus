<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/scss/index.scss','resources/app/js'])
    <title>Document</title>
</head>
<body>
    @include('components.profile')

    <section id="form-upload" >
        <div class="container" >
            <div class="txt-upload" >
                <h1>Title</h1>
                <input type="text" class="input-upload" >
            </div>
            <div class="txt-upload1">
                <h1>Name</h1>
                <input type="text" class="input-upload" >
            </div>
            <div class="txt-upload1" >
                <h1>Description</h1>
                <input type="text" class="input-desc" >
            </div>
            <div class="a-Submitt" >
                <a href="" class="a-submit">Submit</a>
            </div>
        </div>
    </section>

    @include('components.footer')
</body>
</html>
