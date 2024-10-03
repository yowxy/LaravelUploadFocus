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

    @include('components.profile')


    <section id="editProfile" >
        <div class="container" >
            <div class="txtEdit">
                <h1>Edit Profile</h1>
                <p>
                    Pengaturan akun yang mungkin <br>
                    di butuh kan user <br>
                </p>

                <div id="input-edit" class="container mt-4" >
                    <form action="">
                        <div class="edit-name  text-center  ">
                            <h1 class="">Name</h1>
                            <input type="text" placeholder="pastikan nama nya di isi terlebih dahulu ya">
                        </div>
                        <div class="editEmail text-center mt-0 ">
                            <h1>Email</h1>
                            <input type="email" name="editEmail" id="editEmail" placeholder="pastikan email nya di isi ya" >
                        </div>
                        <div class="editPassword text-center">
                            <h1>Password</h1>
                            <input type="password" placeholder="pastikan passwordnya sudah di isi terlebih dahulu yah" >
                        </div>
                        <div class="editConfirmPass text-center ">
                            <h1>Confirm Password</h1>
                            <input type="password" placeholder="pastikan passwordnya sudah di isi terlebih dahulu yah" >
                        </div>
                        <div class="mt-5 border btnSave  text-center mx-auto ">
                            <a href="" class="text-decoration-none text-white ">Save My Profile</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    @include('components.footer')

</body>
</html>
