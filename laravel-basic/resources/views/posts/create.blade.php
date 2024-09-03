<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Buat Postingan baru</title>


    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}  " rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }} "
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</head>
<body>
    <h1>Buat Postingan Baru</h1>

    <form action="{{ url('posts') }}" method="POST"  class="form-control" >
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" placeholder="Masukkan judul anda" name="title" >
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" rows="3" name="content" ></textarea>
          </div>

          <button type="submit" class="btn btn-primary" >Simpan</button>

    </form>

</body>
</html>
