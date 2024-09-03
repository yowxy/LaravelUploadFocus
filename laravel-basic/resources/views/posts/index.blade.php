<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}  " rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }} "
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- <link href="bootstrap-5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="bootstrap-5/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
    <style>
        .blog {
            padding: 5px;
            /* border-bottom: 1px solid lightgrey; */
            /* font-family: 'Poppins',sans-serif; */

        }

        small {
            color: gray;
        }
    </style>

</head>

<body>
    {{-- {{ $posts }} --}}

    <div class="container">
        <h1>
            Hello World

            <a class="btn btn-success"
                href="{{ url('posts/create') }}"
                >+ Buat Postingan
            </a>

        </h1>

        {{-- @php($number = 1) --}}
        @foreach ($post as $posts)

            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $posts->title }}</h5>
                    <p class="card-text">{{ $posts->content }}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated {{   date("d M Y H:i", strtotime($posts->created_at)) }}</small></p>
                    <a href="{{ url("posts/$posts->id") }}" class="btn btn-primary">Selengkapnya</a>
                    <a href="{{ url("posts/$posts->id/edit") }}" class="btn btn-info">Edit</a>
                </div>
            </div>

    @endforeach

    </div>
</body>

</html>
