<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-black-300 text-gray-800">

    <!-- Navbar -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
            <h1 class="text-2xl font-bold text-indigo-600">Landing</h1>
            <nav class="space-x-6">
                <a href="#home" class="hover:text-indigo-600">Home</a>
                <a href="#about" class="hover:text-indigo-600">About</a>
                <a href="#features" class="hover:text-indigo-600">Features</a>
                <a href="#contact" class="hover:text-indigo-600">Contact</a>
            </nav>
            <div>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-4 py-2 text-indigo-600 font-semibold hover:underline">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 text-white text-center">
        <div>
            <h2 class="text-5xl font-bold mb-4">Selamat Datang </h2>
            <p class="text-lg mb-6">Bangun website modern dengan template </p>
            <a href="#about" class="px-6 py-3 bg-white text-indigo-600 font-semibold rounded-lg shadow hover:bg-gray-100">
                Mulai Sekarang
            </a>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="max-w-5xl mx-auto px-6 py-20">
        <h3 class="text-3xl font-bold text-center mb-8">Tentang Kami</h3>
        <p class="text-center text-lg text-gray-600">
            Kami menyediakan solusi digital untuk membuat website cepat, aman, dan responsif.
            Dengan Laravel dan TailwindCSS, kamu bisa membuat web modern tanpa ribet.
        </p>
    </section>

    <!-- Features -->
    <section id="features" class="bg-gray-100 py-20">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-12">Fitur Utama</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow p-6 text-center">
                    <h4 class="text-xl font-semibold mb-2">⚡ Cepat</h4>
                    <p class="text-gray-600">Website ringan dengan performa tinggi.</p>
                </div>
                <div class="bg-white rounded-xl shadow p-6 text-center">
                    <h4 class="text-xl font-semibold mb-2">🔒 Aman</h4>
                    <p class="text-gray-600">Laravel menjamin keamanan aplikasi webmu.</p>
                </div>
                <div class="bg-white rounded-xl shadow p-6 text-center">
                    <h4 class="text-xl font-semibold mb-2">🎨 Modern</h4>
                    <p class="text-gray-600">Desain responsif dengan TailwindCSS.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="max-w-5xl mx-auto px-6 py-20 text-center">
        <h3 class="text-3xl font-bold mb-8">Hubungi Kami</h3>
        <p class="mb-6 text-gray-600">Ingin bekerja sama? Silakan hubungi kami melalui email.</p>
        <a href="mailto:info@example.com" class="px-6 py-3 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700">
            Kirim Email
        </a>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 text-center py-6">
        <p>&copy; {{ date('Y') }} Landing. All rights reserved.</p>
    </footer>

</body>
</html>
