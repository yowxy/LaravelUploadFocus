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
    @include('components.navbar')

    <section id="form-upload" >
        <div class="container" >
            <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="txt-upload">
                    <h1 for="title">Title</h1>
                    <input type="text" class="input-upload @error('title') is-invalid @enderror" name="title" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="txt-upload1">
                    <h1>Name</h1>
                    <input type="text" class="input-upload @error('name') is-invalid @enderror" name="name" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="txt-upload1">
                    <h1>Description</h1>
                    <textarea class="input-desc @error('description') is-invalid @enderror" name="description" required></textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="txt-upload1">
                    <h1>Image</h1>
                    <input type="file" class="input-upload @error('image_path') is-invalid @enderror" name="image_path" accept="image/*" required>
                    @error('image_path')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="txt-upload1">
                    <h1>Category</h1>
                    <select name="category_id" class="input-upload @error('category_id') is-invalid @enderror" required>
                        <option value="">Select a category</option>
                        @foreach($categories as $category)

                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="a-Submitt">
                    <button type="submit" class="a-submit">Submit</button>
                </div>
            </form>


        </div>
    </section>

    @include('components.footer')
</body>
</html>
