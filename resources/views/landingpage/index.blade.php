<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halobid</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" sizes="16x16" href="dist/image/favicon/favicon.png">

</head>
<body>
    <!-- Header Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 ">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-primary block py-6">halobid</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 origin-top-left"></span>
                        <span class="hamburger-line transition duration-300"></span>
                        <span class="hamburger-line transition duration-300  origin-bottom-left"></span>
                    </button>
                    
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="#layanan" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Layanan</a>
                            </li>
                            <li class="group">
                                <a href="#mitra" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Mitra</a>
                            </li>
                            <li class="group">
                                <a href="#blog" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Blog</a>
                            </li>
                            <li class="group">
                                <a href="#konsultasi" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Konsultasi</a>
                            </li>
                            <li class="group">
                                <a href="/login" class="text-base font-bold text-dark py-2 mx-8 flex group-hover:text-primary">Login</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section STart -->
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl">Hidup sehat bersama <span class="block font-boldt text-dark text-4xl mt-1 lg:text-5xl">HaloBid</span></h1>
                    <!-- <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">Desainer & <span class="text-dark"> Content Creator</span></h2> -->
                    <p class="font-medium text-secondary mb-10 leading-relaxed">Chat bidan, kunjungi polindes, beli obat, cek lab dan update informasi seputar kesehatan ibu dan anak, semua bisa di <span class="text-dark font-bold">halobid!</span></p>
                    <a href="https://api.whatsapp.com/send?phone=6287886952551" target="_blank" class="text-basse font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Chat dengan Bidan</a>
                </div> 
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="dist/image/bidan.png" alt="Bidan" class="max-w-full mx-auto">
                        <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#3b82f6" d="M45.7,-47.4C55.9,-35.6,58.4,-17.8,57.8,-0.6C57.2,16.5,53.4,33.1,43.2,43.2C33.1,53.4,16.5,57.1,-0.4,57.5C-17.3,57.9,-34.5,54.8,-44.3,44.7C-54,34.5,-56.2,17.3,-53.7,2.6C-51.1,-12.1,-43.7,-24.3,-34,-36.1C-24.3,-47.9,-12.1,-59.5,2.8,-62.3C17.8,-65.2,35.6,-59.3,45.7,-47.4Z" transform="translate(100 100) scale (1.2)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Sectio End -->

    <!-- Layanan Section Start -->
    <section id="layanan" class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Layanan</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:5xl">HaloBid</h2>
                </div>
                <div class="w-full px-4">
                    <div class="flex flex-wrap items-center justify-center">
                        <a href="#" class="max-w-[120px] mx-4 py-4">
                            <img src="dist/image/layanan/imunisasi.png" alt="Imunisasi">
                        </a>
                        <a href="#" class="max-w-[120px] mx-4 py-4">
                            <img src="dist/image/layanan/penimbangan bayi.png" alt="Penimbangan bayi">
                        </a>
                        <a href="#" class="max-w-[120px] mx-4 py-4">
                            <img src="dist/image/layanan/periksa kehamilan.png" alt="Periksa Kehamilan">
                        </a>
                        <a href="#" class="max-w-[120px] mx-4 py-4">
                            <img src="dist/image/layanan/kb.png" alt="Keluarga Berencana">
                        </a>
                        {{-- <a href="#" class="max-w-[120px] mx-4 py-4">
                            <img src="dist/image/layanan/bantuan persalinan.png" alt="Bantuan Persalinan">
                        </a>
                        <a href="#" class="max-w-[120px] mx-4 py-4">
                            <img src="dist/image/layanan/baby spa.png" alt="Baby Spa">
                        </a>
                        <a href="#" class="max-w-[120px] mx-4 py-4">
                            <img src="dist/image/layanan/potong rambut.png" alt="Potong Rambut Bayi">
                        </a>
                        <a href="#" class="max-w-[120px] mx-4 py-4">
                            <img src="dist/image/layanan/homecare.png" alt="Homecare">
                        </a> --}}
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!-- Layanan Section End -->

    <!-- Mitra Section Start -->
    <section id="mitra" class="pt-36 pb-32 bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2 ">Mitra</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:5xl">HaloBid</h2>
                    <!-- <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique fuga vitae at. Nihil quisquam laudantium dolorum aspernatur? Voluptate, iure pariatur?</p> -->
                </div>
            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-40 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="dist/image/clients/pasean.png" alt="">
                    </a>
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-40 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="dist/image/clients/waru.png" alt="">
                    </a>
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-40 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="dist/image/clients/fajar.png" alt="">
                    </a>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Mitra Section End -->

    <!-- Blog Section Start -->
    <section id="blog" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="w-ful px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Blog</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:5xl">Tulisan Terkini</h2>
                    <!-- <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, esse.</p> -->
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/360x200?food" alt="Desainer" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Kandungan Gizi Buah Leci yang Baik untuk Kesehatan</a>
                            </h3>
                            <p class="font-medium text-base text-secondary mb-6">Rasanya manis dengan daging buah berwarna putih, buah leci ternyata kaya nutrisi yang sangat baik untuk kesehatan. Beberapa di antaranya yaitu serat, karbohidrat, dan protein.</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/360x200?water" alt="Technology" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Diet dan Nutrisi</a>
                            </h3>
                            <p class="font-medium text-base text-secondary mb-6">Diet pada dasarnya adalah pola makan, yang cara dan jenis makanannya diatur. Tujuannya adalah untuk menjaga kesehatan tubuh secara keseluruhan.</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/360x200?coffee" alt="programming" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Menikmati Secangkir Kopi</a>
                            </h3>
                            <p class="font-medium text-base text-secondary mb-6">Ketika kopi menjadi sahabat sejati, pagi bukan lagi sebuah misteri. Seperti kamu yang selalu ada di hati, selalu mengisi hari-hari.</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Konsultasi Section Start -->
    <section id="konsultasi" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-full mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Konsultasi</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi Bidan</h2>
                    <!-- <p class="font-medium text-md text-secondary md:text-lg">Butuh jasa desainer, hubungi kami</p> -->
                </div>
            </div>

            <form>
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base font-bold">Nama</label>
                        <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:outline-primary focus:ring-1 focus:border-primary">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="no_telepon" class="text-base font-bold">No. Telepon</label>
                        <input type="number" id="no_telepon" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:outline-primary focus:ring-1 focus:border-primary">
                    </div> 
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base font-bold">Email</label>
                        <input type="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:outline-primary focus:ring-1 focus:border-primary">
                    </div> 
                    <div class="w-full px-4 mb-8">
                        <label for="message" class="text-base font-bold">Pesan</label>
                        <textarea type="message" id="message" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:outline-primary focus:ring-1 focus:border-primary h-32"></textarea>
                    </div>
                    <div class="w-full">
                        <button class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim
                        </button>
                    </div>
                 </div>
            </form>
        </div>
    </section>  
    <!-- Konsultasi Section End -->

    <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                    <h2 class="font-bold text-4xl text-white mb-5">HaloBid</h2>
                    <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
                    <p>halobid@gmail.com</p>
                    <p>Jl. Raya Lang-dulang, Sana tengah Pasean</p>
                    <p>Pamekasan</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Kategori Tulisan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Kesehatan</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Gizi</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Gaya Hidup</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#home" class="inline-block text-base hover:text-primary mb-3">Beranda</a>
                        </li>
                        <li>
                            <a href="#layanan" class="inline-block text-base hover:text-primary mb-3">Layanan</a>
                        </li>
                        <li>
                            <a href="#mitra" class="inline-block text-base hover:text-primary mb-3">Mitra</a>
                        </li>
                        <li>
                            <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Blog</a>
                        </li>
                        <li>
                            <a href="#konsultasi" class="inline-block text-base hover:text-primary mb-3">Konsultasi</a>
                        </li>
                        <li>
                            <a href="login" class="inline-block text-base hover:text-primary mb-3">Login</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <!-- Youtube -->
                    <a href="https://www.youtube.com/c/wargainformatika" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                     <!-- Instagram -->
                     <a href="https://instagram.com/taufiqurrm_" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/taufiq.r.522/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/moh-taufiqur-rahman-ab315723b" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <!-- Tiktok -->
                    <a href="https://tiktok.com/@taufiqurrm" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </a>
                </div>
                <p class="font-medium text-xs text-slate-500 text-center">Copyright &copy; 2022 <a href="https://instagram.com/taufiqurrm_" target="_blank" class="font-bold text-primary">HaloBid</a></p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <script>
        //Navbar Fixed
        window.onscroll = function () {
            const header = document.querySelector('header');
            const FixedNav = header.offsetTop;

            if(window.pageYOffset > FixedNav) {
                header.classList.add('navbar-fixed');
            } else {
                header.classList.remove('navbar-fixed');
            }
        };

        //Hamburger
        const hamburger = document.querySelector('#hamburger');
        const navMenu = document.querySelector('#nav-menu');

        hamburger.addEventListener('click', function( ) {
            hamburger.classList.toggle('hamburger-active');
            navMenu.classList.toggle('hidden');
        });

    </script>
</body>
</html>