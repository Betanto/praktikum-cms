@extends('layouts.front')
@section('content')
<div class="bg-white">
    <div class="relative min-h-screen flex items-center justify-center overflow-hidden">

        <!-- Hero Background Image -->
        <div class="absolute inset-0">
            <img
                src="{{ asset('storage/images/hero.jpg') }}"
                alt="Hero Banner"
                class="w-full h-full object-cover"
            >

            <!-- Optional Dark Overlay -->
            <div class="absolute inset-0 bg-black/40"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold text-white">
                Selamat Datang di Praktikum CMS
            </h1>
        </div>

    </div>
    <div class="container mx-auto max-w-7xl px-4 py-[75px]">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Card Jumlah Kelas -->
            <div class="bg-white rounded-2xl shadow-md p-6 border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Jumlah Kelas</p>
                        <h2 class="text-3xl font-bold text-blue-600 mt-2">3</h2>
                    </div>

                    <div class="bg-blue-100 p-3 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8 text-blue-600"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 11H5m14-7H5m14 14H5" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card Jumlah Mahasiswa -->
            <div class="bg-white rounded-2xl shadow-md p-6 border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Jumlah Mahasiswa</p>
                        <h2 class="text-3xl font-bold text-green-600 mt-2">67</h2>
                    </div>

                    <div class="bg-green-100 p-3 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8 text-green-600"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17 20h5V4H2v16h5m10 0v-5a3 3 0 00-6 0v5m6 0H11" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card Jumlah Pertemuan -->
            <div class="bg-white rounded-2xl shadow-md p-6 border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Jumlah Pertemuan</p>
                        <h2 class="text-3xl font-bold text-orange-600 mt-2">14</h2>
                    </div>

                    <div class="bg-orange-100 p-3 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8 text-orange-600"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v11a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="bg-gray-100">
        <div class="container mx-auto max-w-7xl px-4 py-[75px]">
            <h1 class="text-2xl font-bold text-gray-800 uppercase">Tujuan Praktikum CMS</h1>
            <p>Praktikum CMS diselenggarakan untuk memberikan pemahaman teoritis dan keterampilan praktis kepada mahasiswa mengenai penggunaan Content Management System dalam pembuatan dan pengelolaan website. Melalui praktikum ini, mahasiswa diharapkan mampu memahami proses instalasi, konfigurasi, pengelolaan konten, hingga pengembangan fitur website secara efektif dan efisien. Selain itu, kegiatan praktikum juga bertujuan untuk meningkatkan kemampuan mahasiswa dalam menerapkan teknologi web berbasis CMS sebagai solusi pengembangan media informasi dan komunikasi digital yang sesuai dengan kebutuhan dunia kerja dan perkembangan teknologi saat ini.</p>
        </div>
    </div>
</div>
@endsection