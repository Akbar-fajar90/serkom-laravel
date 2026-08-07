<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 3 Kendal - SKANEGA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preload" as="image" href="{{ asset('images/smk.webp') }}" type="image/webp">
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <!-- Header / Navbar -->
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-20">
            <div class="flex items-center gap-3">
                <div class="bg-blue-900 text-white p-2 rounded-lg font-bold text-xl tracking-wider">
                    SKANEGA
                </div>
                <div>
                    <h1 class="font-bold text-lg text-blue-950 leading-tight">SMK NEGERI 3 KENDAL</h1>
                    <p class="text-xs text-gray-500">Unggul, Berkarakter, & Berdaya Saing</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="relative bg-gray-900 text-white py-24 md:py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-40">
            <img src="{{ asset('images/smk.webp') }}" alt="Gedung SMKN 3 Kendal" class="w-full h-full object-cover" loading="eager">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left">
            <div class="max-w-2xl">
                <span class="bg-blue-600 text-xs uppercase px-3 py-1 rounded-full font-semibold tracking-wide">Selamat Datang</span>
                <h2 class="text-3xl md:text-5xl font-extrabold mt-4 leading-tight">Mewujudkan Generasi Siap Kerja & Berakhlak Mulia</h2>
                <p class="mt-4 text-gray-200 text-lg">SMK Negeri 3 Kendal berkomitmen mencetak lulusan berkompetensi tinggi di bidang keahlian rekayasa dan teknologi.</p>
            </div>
        </div>
    </section>

    <!-- Profil Section -->
    <section id="profil" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <img src="{{ asset('images/smk.webp') }}" alt="SMKN 3 Kendal Front" class="rounded-2xl shadow-xl w-full h-96 object-cover" loading="lazy">
                    <div class="absolute -bottom-6 -right-6 bg-blue-900 text-white p-6 rounded-2xl shadow-lg hidden sm:block">
                        <p class="text-3xl font-extrabold">A</p>
                        <p class="text-sm text-gray-300">Akreditasi Sekolah</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-blue-800 text-sm font-bold tracking-wider uppercase">Profil Sekolah</h3>
                    <h2 class="text-3xl font-bold mt-2 text-gray-900">Mencetak SDM Berkualitas Unggul</h2>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        SMK Negeri 3 Kendal merupakan salah satu sekolah kejuruan favorit di Kabupaten Kendal yang berfokus pada pengembangan keahlian terapan, karakter industri, dan jiwa kewirausahaan siswa.
                    </p>
                    <div class="mt-6 grid grid-cols-2 gap-4">
                        <div class="border-l-4 border-blue-800 pl-4">
                            <h4 class="font-bold text-gray-900">Visi</h4>
                            <p class="text-sm text-gray-600">Menjadi pusat pendidikan kejuruan yang profesional dan berkarakter.</p>
                        </div>
                        <div class="border-l-4 border-blue-800 pl-4">
                            <h4 class="font-bold text-gray-900">Misi</h4>
                            <p class="text-sm text-gray-600">Menyelenggarakan pembelajaran berbasis kompetensi industri.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jurusan Section -->
    <section id="jurusan" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-blue-800 text-sm font-bold tracking-wider uppercase">Program Keahlian</h3>
            <h2 class="text-3xl font-bold mt-2 text-gray-900">Jurusan Unggulan Kami</h2>

            <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card Jurusan 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition text-left border border-gray-100">
                    <div class="w-12 h-12 bg-blue-100 text-blue-800 rounded-xl flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900">RPL / PPLG</h4>
                    <p class="text-gray-600 text-sm mt-2">Pengembangan Perangkat Lunak dan Gim mencakup pemrograman web, mobile, serta basis data.</p>
                </div>

                <!-- Card Jurusan 2 -->
                <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition text-left border border-gray-100">
                    <div class="w-12 h-12 bg-blue-100 text-blue-800 rounded-xl flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900">TKJ / TJKT</h4>
                    <p class="text-gray-600 text-sm mt-2">Teknik Jaringan Komputer dan Telekomunikasi mendalami infrastruktur jaringan dan cyber security.</p>
                </div>

                <!-- Card Jurusan 3 -->
                <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition text-left border border-gray-100">
                    <div class="w-12 h-12 bg-blue-100 text-blue-800 rounded-xl flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-wrench"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900">Teknik Otomotif</h4>
                    <p class="text-gray-600 text-sm mt-2">Pemeliharaan dan perbaikan kendaraan bermotor standar industri manufaktur otomotif.</p>
                </div>
            </div>
        </div>
    </section>

     <section id="komentar" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-blue-800 text-sm font-bold tracking-wider uppercase text-center">Buku Tamu</h3>
            <h2 class="text-3xl font-bold mt-2 text-gray-900 text-center">Tinggalkan Pesan Anda</h2>

            {{-- Form Komentar --}}
            <div class="mt-10 max-w-3xl mx-auto bg-gray-50 p-8 rounded-2xl shadow-md border border-gray-100">
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">Berhasil!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <form action="{{ route('guestMessage.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                        <input type="text" name="username" id="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                        @error('username')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                        <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="pesan" class="block text-gray-700 text-sm font-bold mb-2">Pesan:</label>
                        <textarea name="pesan" id="pesan" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('pesan') border-red-500 @enderror">{{ old('pesan') }}</textarea>
                        @error('pesan')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Kirim Komentar
                        </button>
                    </div>
                </form>
            </div>

            {{-- Daftar Komentar --}}
            <div class="mt-12 max-w-3xl mx-auto">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Daftar Komentar</h3>
                @forelse ($guestMessages as $message)
                    <div class="bg-gray-50 p-6 rounded-xl shadow-sm mb-4 border border-gray-100">
                        <p class="text-gray-800 font-semibold">{{ $message->username }} <span class="text-gray-500 text-sm">- {{ $message->email }}</span></p>
                        <p class="text-gray-600 mt-2">{{ $message->pesan }}</p>
                        <p class="text-gray-400 text-xs mt-2">{{ $message->created_at->diffForHumans() }}</p>
                    </div>
                @empty
                    <p class="text-center text-gray-500">Belum ada komentar.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="bg-blue-950 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-3">SMK Negeri 3 Kendal</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Jl. Limbangan, Kendal, Jawa Tengah.<br>
                    Email: info@smkn3kendal.sch.id<br>
                    Telp: (0294) 381234
                </p>
            </div>
        </div>
        <div class="border-t border-blue-900 mt-8 pt-6 text-center text-xs text-gray-500">
            &copy; {{ date('Y') }} SMK Negeri 3 Kendal. All rights reserved.
        </div>
    </footer>

</body>

</html>