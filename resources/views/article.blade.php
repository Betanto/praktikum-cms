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
            <div class="grid grid-cols-3 gap-8">
                <!-- Left Side Image -->
                <div class="col-span-1">
                    <img
                        src="{{ asset('storage/images/' . $data['image']) }}"
                        alt="Content Image"
                        class="w-full aspect-square object-cover object-top rounded-2xl shadow-md"
                    >
                </div>

                <!-- Right Side Content -->
                <div class="col-span-2">
                    {!! $data['content'] !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection