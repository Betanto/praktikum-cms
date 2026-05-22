@extends('layouts.front')
@section('content')
<div class="bg-white">
    <div class="relative h-75 flex items-center justify-center overflow-hidden">

        <!-- Hero Background Image -->
        <div class="absolute inset-0">
            <img
                src="{{ asset('storage/images/default-hero.jpg') }}"
                alt="Hero Banner"
                class="w-full h-75 object-cover"
            >

            <!-- Optional Dark Overlay -->
            <div class="absolute inset-0 bg-black/40"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold text-white">
                {{ $data['title'] }}
            </h1>
        </div>

    </div>
    <div class="bg-white">
        <div class="container mx-auto max-w-7xl px-4 py-[75px]">
            @if (isset($data['child']))
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($data['child']['title'] as $index => $title)
                        <a href="{{ route('article', ['slug' => \Illuminate\Support\Str::slug($title)]) }}"
                        class="card block bg-gray-100 p-4 rounded-lg shadow-md hover:shadow-lg transition">

                            <div class="flex gap-4 items-center">

                                <!-- LEFT : IMAGE -->
                                <div class="w-1/3">
                                    <img
                                        src="{{ asset('storage/images/' . $data['child']['image'][$index]) }}"
                                        alt="Content Image"
                                        class="w-full h-24 object-cover rounded-md"
                                    >
                                </div>

                                <!-- RIGHT : TITLE -->
                                <div class="w-2/3">
                                    <h3 class="text-lg font-bold leading-snug">
                                        {{ $title }}
                                    </h3>
                                </div>

                            </div>

                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection