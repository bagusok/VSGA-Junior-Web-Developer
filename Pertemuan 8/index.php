<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="box-border pb-20">
    <header class="w-full flex justify-center items-center h-16 bg-white mt-2">
        <h1 class="text-3xl font-medium">Biodata</h1>
    </header>
    <main class="w-full px-4 md:px-0 flex justify-center">
        <section class="md:w-96 w-full mt-5">
            <form action="profile.php" method="post" class="flex flex-col gap-2">
                <div class="form-group inline-flex gap-2">
                    <div class="w-1/2">
                        <label for="nama" class="text-sm">Nama Depan</label>
                        <input class="mt-1 p-2 rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm" type="text" name="nama-depan" placeholder="John" required>
                    </div>
                    <div class="w-1/2">
                        <label for="nama" class="text-sm">Nama Belakang</label>
                        <input class="mt-1 p-2 rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm" type="text" name="nama-belakang" placeholder="Doe" required>
                    </div>
                </div>
                <div class="form-group block">
                    <label for="email" class="text-sm">Email</label>
                    <input class="w-full mt-1 p-2 rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm" type="email" name="email" placeholder="johndoe@gmail.com" required>
                </div>
                <div class="form-group block">
                    <label for="no-hp" class="text-sm">Nomer Hp</label>
                    <input class="w-full mt-1 p-2 rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm" type="tel" name="no-hp" placeholder="08xxxxxx" required>
                </div>
                <div class="form-group w-full">
                    <label for="email" class="text-sm">Jenis Kelamin</label>
                    <div class="inline-flex justify-beetwen w-full">
                        <div class="flex items-center pl-3">
                            <input id="horizontal-list-radio-license" type="radio" value="Laki-Laki" name="jenis-kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="horizontal-list-radio-license" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-Laki</label>
                        </div>
                        <div class="flex items-center pl-3">
                            <input id="horizontal-list-radio-license" type="radio" value="Perempuan" name="jenis-kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                            <label for="horizontal-list-radio-license" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group block">
                    <label for="no-hp" class="text-sm">Pekerjaan</label>
                    <input class="w-full mt-1 p-2 rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm" type="text" name="pekerjaan" placeholder="Freelancer" required>
                </div>

                <h1 class="text-xl mt-3 text-center">Alamat Tempat Tinggal</h1>
                <div class="form-group inline-flex gap-2 mt-2">
                    <div class="w-1/2">
                        <label for="nama" class="text-sm">Provinsi</label>
                        <input class="mt-1 p-2 rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm" type="text" name="provinsi" placeholder="Provinsi" required>
                    </div>
                    <div class="w-1/2">
                        <label for="nama" class="text-sm">Kota/Kabupaten</label>
                        <input class="mt-1 p-2 rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm" type="text" name="kota" placeholder="Kota" required>
                    </div>
                </div>
                <div class="form-group inline-flex gap-2">
                    <div class="w-1/2">
                        <label for="nama" class="text-sm">Kecamatan</label>
                        <input class="mt-1 p-2 rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm" type="text" name="kecamatan" placeholder="Kecamatan" required>
                    </div>
                    <div class="w-1/2">
                        <label for="nama" class="text-sm">Kode Pos</label>
                        <input class="mt-1 p-2 rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm" type="text" name="kodepos" placeholder="Kodepos" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama" class="text-sm">Alamat Lengkap</label>
                    <textarea name="alamat-lengkap" id="alamat-lengkap" cols="30" rows="3" class="mt-1 p-2 w-full rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm"></textarea>
                </div>


                <h1 class="text-xl mt-3 text-center">Lainnya</h1>
                <div class="form-group">
                    <label for="nama" class="text-sm">Bio</label>
                    <textarea name="bio" id="bio" cols="30" rows="3" class="mt-1 p-2 w-full rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm"></textarea>
                </div>
                <div class="form-group inline-flex gap-2">
                    <div class="w-1/2">
                        <label for="nama" class="text-sm">Instagram</label>
                        <input class="mt-1 p-2 rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm" type="text" name="instagram" placeholder="@username" required>
                    </div>
                    <div class="w-1/2">
                        <label for="nama" class="text-sm">Linkedin</label>
                        <input class="mt-1 p-2 rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm" type="text" name="linkedin" placeholder="Username Linkedin" required>
                    </div>
                </div>
                <div class="form-group inline-flex gap-2">
                    <div class="w-1/2">
                        <label for="nama" class="text-sm">Github</label>
                        <input class="mt-1 p-2 rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm" type="text" name="github" placeholder="Username Github" required>
                    </div>
                    <div class="w-1/2">
                        <label for="nama" class="text-sm">Facebook</label>
                        <input class="mt-1 p-2 rounded focus:outline-none focus:border focus:border-slate-500 bg-slate-100 text-sm" type="text" name="facebook" placeholder="Username FB" required>
                    </div>
                </div>


                <div class="flex items-center mt-2">
                    <input id="link-checkbox" type="checkbox" value="true" name="setuju" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Saya Menyetujui <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Syarat dan Ketentuan</a>.</label>
                </div>
                <button class="mt-2 bg-blue-800 rounded-md text-white text-base py-2 text-center hover:opacity-70">Submit</button>
            </form>
        </section>
    </main>
</body>

</html>