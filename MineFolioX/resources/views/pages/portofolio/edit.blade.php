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
                    <form action="{{ route('portofolio.update', $portofolio->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Field title -->
                        <div style="margin-top: 48px">
                            <h1 for="title">Title</h1>
                            <input type="text" name="title" class="input-title" value="{{ old('title', $portofolio->title) }}" autocomplete="off" required>
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Field name -->
                        <div style="margin-top: 15px">
                            <h1 for="name">Name</h1>
                            <input type="text" name="name" class="input-title" value="{{ old('name', $portofolio->name) }}" autocomplete="off" required>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Field description -->
                        <div style="margin-top: 20px">
                            <h1 for="description">Description</h1>
                            <textarea name="description" class="textarea-porto" required>{{ old('description', $portofolio->description) }}</textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Field image -->
                        <div style="margin-top: 87px">
                            <h1 for="image_path">Image</h1>
                            <input type="file" class="input-file" name="image_path" accept="image/*">
                            <p>Current Image: <img src="{{ asset('storage/' . $portofolio->image_path) }}" alt="Current Image" style="width: 100px;"></p>
                        </div>

                        <!-- Submit buttons -->
                        <div class="a-Submitt d-flex">
                            <button type="submit" class="a-submit me-3">Update</button>
                            <button type="button" class="btn-cancel" onclick="window.location='{{ route('profile') }}'">Cancel</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

</body>
</html>
