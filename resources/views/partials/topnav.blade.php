<div class="sm:items-center bg-white">
    <div class="fixed top-0 right-0 left-0 p-4 bg-white shadow z-50">
        <div class="flex items-center gap-2 container mx-auto">

            <!-- Logo -->
            <div class="flex items-center gap-2">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('storage/images/logo.png') }}" class="w-12" alt="Logo">
                </a>
            </div>

            <!-- Menu -->
            <div class="ml-auto mr-4 flex items-center gap-2">

                <a href="{{ route('index') }}"
                   class="text-sm font-medium text-gray-900 hover:bg-blue-50 hover:text-blue-600 transition p-3">
                    Beranda
                </a>

                <!-- Dropdown Tentang -->
                <div class="relative group">
                    <button
                        class="inline-flex items-center text-sm font-medium text-gray-900 hover:bg-blue-50 hover:text-blue-600 transition p-3">
                        Tentang
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 h-4 ml-1"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Sub Menu -->
                    <div
                        class="absolute left-0 hidden group-hover:block bg-white shadow-lg rounded-md mt-0 w-48 py-2 z-50">

                        <a href="{{ url('/page/mata-kuliah') }}"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                            Mata Kuliah
                        </a>

                        <a href="{{ url('/page/dosen') }}"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                            Dosen
                        </a>

                        <a href="{{ url('/page/asisten-dosen') }}"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                            Asisten Dosen
                        </a>
                    </div>
                </div>

                <a href="{{ route('category', 'materi') }}"
                   class="text-sm font-medium text-gray-900 hover:bg-blue-50 hover:text-blue-600 transition p-3">
                    Materi
                </a>

                <a href="{{ route('category', 'pengumuman') }}"
                   class="text-sm font-medium text-gray-900 hover:bg-blue-50 hover:text-blue-600 transition p-3">
                    Pengumuman
                </a>

                {{-- <a href="{{ url('/') }}"
                   class="text-sm font-medium text-gray-900 hover:bg-blue-50 hover:text-blue-600 transition p-3">
                    Kontak
                </a> --}}
            </div>

            <!-- Button -->
            <a href="{{ route('login') }}"
               class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition">
                Log in
            </a>

            <a href="{{ route('register') }}"
               class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition">
                Register
            </a>

        </div>
    </div>
</div>