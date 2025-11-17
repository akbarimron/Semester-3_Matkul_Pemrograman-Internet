<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'GYMUPI') }} - Mahasiswa Sehat & Cerdas</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Tailwind CSS CDN for quick development -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#ff5252',
                        secondary: '#181A1F',
                        accent: '#e53935',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <!-- Header Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-secondary shadow-lg">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-xl">GYM</span>
                    </div>
                    <span class="text-white font-bold text-xl">GYMUPI</span>
                </div>
                
                <!-- Navigation Links -->
                <ul class="hidden md:flex items-center space-x-8">
                    <li><a href="#about" class="text-gray-300 hover:text-white transition duration-200 font-medium">About UPIGYM</a></li>
                    <li><a href="#gallery" class="text-gray-300 hover:text-white transition duration-200 font-medium">Gallery</a></li>
                    <li><a href="#trainer" class="text-gray-300 hover:text-white transition duration-200 font-medium">Personal Trainer</a></li>
                    <li><a href="#terms" class="text-gray-300 hover:text-white transition duration-200 font-medium">Terms & Condition</a></li>
                    <li><a href="#bmi" class="text-gray-300 hover:text-white transition duration-200 font-medium">Cek BMI</a></li>
                </ul>
                
                <!-- CTA Button -->
                @auth
                    <a href="{{ route('dashboard') }}" class="hidden md:block bg-primary hover:bg-accent text-white font-semibold px-6 py-3 rounded-lg transition duration-300 transform hover:scale-105">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('register') }}" class="hidden md:block bg-primary hover:bg-accent text-white font-semibold px-6 py-3 rounded-lg transition duration-300 transform hover:scale-105">
                        Daftar Sekarang
                    </a>
                @endauth
                
                <!-- Mobile Menu Button -->
                <button class="md:hidden text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </nav>
    </header>
    <main class="pt-16">
        <!-- Hero Section -->
        <section id="hero" class="relative bg-gradient-to-br from-gray-800 to-gray-900 text-white min-h-screen flex items-center">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="container mx-auto px-6 relative z-10">
                <div class="max-w-3xl">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6">
                        Mahasiswa Gak Cuma Harus Cerdas<br>
                        <span class="text-primary">Tapi Juga Sehat</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-300 mb-8">
                        Wujudkan tubuh ideal dan hidup sehat bersama GYMUPI 
                    </p>
                    @guest
                        <a href="{{ route('register') }}" class="inline-block bg-primary hover:bg-accent text-white font-bold px-8 py-4 rounded-lg text-lg transition duration-300 transform hover:scale-105 shadow-lg">
                            Mulai Sekarang
                        </a>
                    @else
                        <a href="{{ route('dashboard') }}" class="inline-block bg-primary hover:bg-accent text-white font-bold px-8 py-4 rounded-lg text-lg transition duration-300 transform hover:scale-105 shadow-lg">
                            Lihat Dashboard
                        </a>
                    @endguest
                </div>
            </div>
        </section>
        <!-- About Section -->
        <section id="about" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                            Gym Universitas Pendidikan Indonesia
                        </h2>
                        <p class="text-lg text-gray-600 leading-relaxed mb-6">
                            GYMUPI adalah fasilitas olahraga modern yang dirancang khusus untuk mahasiswa UPI. 
                            Kami menyediakan peralatan gym berkualitas tinggi dan lingkungan yang mendukung untuk 
                            mencapai tujuan kebugaran Anda.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Dengan instruktur berpengalaman dan program latihan yang terstruktur, kami siap membantu 
                            Anda membangun gaya hidup sehat sambil menjalani kehidupan kampus yang produktif.
                        </p>
                    </div>
                    <div class="relative">
                        <div class="bg-gray-200 rounded-2xl h-96 flex items-center justify-center shadow-xl">
                            <span class="text-gray-400 text-xl font-semibold">Gym Image</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Section -->
        <section id="pricing" class="py-20 bg-gradient-to-br from-primary to-accent text-white">
            <div class="container mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="relative">
                        <div class="bg-white/10 backdrop-blur rounded-2xl h-96 flex items-center justify-center shadow-xl">
                            <span class="text-white text-xl font-semibold">Pricing Image</span>
                        </div>
                    </div>
                    <div class="text-center md:text-left">
                        <p class="text-xl mb-4 opacity-90">Harga untuk umum: <span class="font-bold">Rp 5.000</span></p>
                        <h2 class="text-5xl md:text-6xl font-bold mb-6">
                            Khusus Mahasiswa UPI
                        </h2>
                        <p class="text-2xl md:text-3xl font-semibold mb-8">
                            BEBAS BEROLAHRAGA!
                        </p>
                        <a href="{{ route('register') }}" class="inline-block bg-white text-primary hover:bg-gray-100 font-bold px-8 py-4 rounded-lg text-lg transition duration-300 transform hover:scale-105 shadow-lg">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Personal Trainer Section -->
        <section id="trainer" class="py-20 bg-gray-900 text-white">
            <div class="container mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">
                            Personal Trainer Mulai
                        </h2>
                        <p class="text-xl text-gray-300 leading-relaxed mb-8">
                            Coba ngegym dengan bimbingan ahli yang berpengalaman. Dapatkan program latihan yang 
                            disesuaikan dengan kebutuhan dan tujuan fitness Anda.
                        </p>
                        <button class="bg-primary hover:bg-accent text-white font-bold px-8 py-4 rounded-lg transition duration-300 transform hover:scale-105">
                            Lihat Personal Trainer
                        </button>
                    </div>
                    <div class="relative">
                        <div class="bg-gray-800 rounded-2xl h-96 flex items-center justify-center shadow-xl">
                            <span class="text-gray-500 text-xl font-semibold">Trainer Image</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Goals Section -->
        <section id="goals" class="py-20 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl md:text-5xl font-bold text-center text-gray-900 mb-12">
                    Tentukan Goals Mu
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gradient-to-br from-primary to-accent rounded-2xl h-80 flex items-center justify-center shadow-lg hover:shadow-2xl transition duration-300 transform hover:scale-105">
                        <span class="text-white text-xl font-semibold">Muscle Gain</span>
                    </div>
                    <div class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl h-80 flex items-center justify-center shadow-lg hover:shadow-2xl transition duration-300 transform hover:scale-105">
                        <span class="text-white text-xl font-semibold">Weight Loss</span>
                    </div>
                    <div class="bg-gradient-to-br from-green-500 to-green-700 rounded-2xl h-80 flex items-center justify-center shadow-lg hover:shadow-2xl transition duration-300 transform hover:scale-105">
                        <span class="text-white text-xl font-semibold">Cardio</span>
                    </div>
                    <div class="bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl h-80 flex items-center justify-center shadow-lg hover:shadow-2xl transition duration-300 transform hover:scale-105">
                        <span class="text-white text-xl font-semibold">Flexibility</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Health Motivation Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Tentukan Hidup Sehat
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Kesehatan adalah investasi terbaik untuk masa depan. Mulai perjalanan fitness Anda hari ini 
                    dan rasakan perubahan positif dalam hidup Anda. Dengan dedikasi dan konsistensi, 
                    tubuh ideal dan hidup sehat bukan lagi impian.
                </p>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="py-20 bg-gray-100">
            <div class="container mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-gradient-to-br from-primary to-accent text-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-3xl font-bold mb-4">Ragu Buat Latihan Sendiri?</h3>
                        <p class="text-lg mb-6 opacity-90">Coba ngegym dengan personal trainer profesional kami</p>
                        <button class="bg-white text-primary hover:bg-gray-100 font-semibold px-6 py-3 rounded-lg transition duration-300">
                            Lihat Personal Trainer
                        </button>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-secondary text-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-3xl font-bold mb-4">Ingin Tahu Lebih Banyak?</h3>
                        <p class="text-lg mb-6 opacity-90">Tentang GYM UPI - Kami siap membantu</p>
                        <button class="bg-primary hover:bg-accent font-semibold px-6 py-3 rounded-lg transition duration-300">
                            Hubungi Kami
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section -->
        <section id="faq" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl md:text-5xl font-bold text-center text-gray-900 mb-12">
                    Frequently Asked Questions
                </h2>
                <div class="max-w-3xl mx-auto space-y-4">
                    <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition duration-200 cursor-pointer">
                        <h3 class="text-xl font-semibold text-gray-900">Berapa lama durasi latihan yang ideal?</h3>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition duration-200 cursor-pointer">
                        <h3 class="text-xl font-semibold text-gray-900">Apakah ada program untuk pemula?</h3>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition duration-200 cursor-pointer">
                        <h3 class="text-xl font-semibold text-gray-900">Bagaimana cara daftar membership?</h3>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition duration-200 cursor-pointer">
                        <h3 class="text-xl font-semibold text-gray-900">Jam operasional GYMUPI?</h3>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition duration-200 cursor-pointer">
                        <h3 class="text-xl font-semibold text-gray-900">Apakah tersedia locker?</h3>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition duration-200 cursor-pointer">
                        <h3 class="text-xl font-semibold text-gray-900">Fasilitas apa saja yang tersedia?</h3>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Gak Nemu Jawaban?</h3>
                    <button class="bg-primary hover:bg-accent text-white font-semibold px-8 py-4 rounded-lg transition duration-300 transform hover:scale-105">
                        Hubungi Kami
                    </button>
                </div>
            </div>
        </section>
        <!-- Contact Form Section -->
        <section id="contact" class="py-20 bg-gradient-to-br from-gray-800 to-gray-900 text-white">
            <div class="container mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12">
                    <div>
                        <h2 class="text-4xl font-bold mb-6">Langganan Newsletter</h2>
                        <p class="text-lg text-gray-300 leading-relaxed">
                            Dapatkan informasi terbaru tentang program latihan, tips kesehatan, dan promo spesial 
                            langsung ke email Anda. Jangan lewatkan kesempatan untuk menjadi bagian dari komunitas 
                            GYMUPI yang terus berkembang.
                        </p>
                    </div>
                    <div class="bg-white/10 backdrop-blur rounded-2xl p-8">
                        <form action="{{ route('newsletter.subscribe') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-4">
                                <input type="text" name="first_name" placeholder="Nama Depan" required class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" value="{{ old('first_name') }}">
                                <input type="text" name="last_name" placeholder="Nama Belakang" required class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" value="{{ old('last_name') }}">
                            </div>
                            <div class="grid md:grid-cols-2 gap-4">
                                <input type="email" name="email" placeholder="Email" required class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" value="{{ old('email') }}">
                                <input type="tel" name="phone" placeholder="Nomor Telepon" required class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" value="{{ old('phone') }}">
                            </div>
                            <textarea name="message" placeholder="Pesan (Opsional)" rows="4" class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-primary resize-none">{{ old('message') }}</textarea>
                            
                            @if(session('success'))
                                <div class="bg-green-500/20 border border-green-500 text-white px-4 py-3 rounded-lg">
                                    {{ session('success') }}
                                </div>
                            @endif
                            
                            @if($errors->any())
                                <div class="bg-red-500/20 border border-red-500 text-white px-4 py-3 rounded-lg">
                                    <ul class="list-disc list-inside">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                            <button type="submit" class="w-full bg-primary hover:bg-accent text-white font-semibold px-6 py-4 rounded-lg transition duration-300 transform hover:scale-105">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-secondary text-white">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                <!-- About -->
                <div>
                    <h3 class="text-xl font-bold mb-4">About UPI GYM</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Fasilitas gym modern untuk mahasiswa UPI yang ingin hidup sehat dan bugar.
                    </p>
                </div>
                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#about" class="text-gray-400 hover:text-primary transition">About</a></li>
                        <li><a href="#pricing" class="text-gray-400 hover:text-primary transition">Pricing</a></li>
                        <li><a href="#trainer" class="text-gray-400 hover:text-primary transition">Trainer</a></li>
                    </ul>
                </div>
                <!-- Services -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Services</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-400 hover:text-primary transition">Personal Training</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition">Group Class</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition">Nutrition Plan</a></li>
                    </ul>
                </div>
                <!-- Contact -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li>Email: info@gymupi.ac.id</li>
                        <li>Phone: (022) 1234-5678</li>
                        <li>Location: UPI Bandung</li>
                    </ul>
                </div>
                <!-- Social Media -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-primary hover:bg-accent rounded-full flex items-center justify-center transition">
                            <span class="text-sm font-bold">IG</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary hover:bg-accent rounded-full flex items-center justify-center transition">
                            <span class="text-sm font-bold">FB</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-primary hover:bg-accent rounded-full flex items-center justify-center transition">
                            <span class="text-sm font-bold">TW</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-700">
            <div class="container mx-auto px-6 py-6">
                <p class="text-center text-gray-400 text-sm">
                    © {{ date('Y') }} {{ config('app.name', 'GYMUPI') }} - Muhamad Akbar Imron. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>