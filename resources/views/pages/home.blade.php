@extends('components.layouts.app')

@section('title', 'Kanaya Organizer | Wedding Organizer')

@section('content')

<section
    class="relative min-h-[650px] overflow-hidden bg-cover bg-center px-6 pt-8 pb-20 md:min-h-[750px] md:pt-10"
    style="background-image: url('{{ asset('img/wedding-bg.jpg') }}');">
    {{-- Overlay gelap pada foto --}}
    <div class="absolute inset-0 bg-black/30"></div>

    {{-- Nama Kanaya tepat di bawah navbar --}}
    <div class="relative z-10 flex items-center justify-center gap-5">
        <span class="h-px w-10 bg-white"></span>

        <p class="font-heading text-sm tracking-[0.25em] text-white">
            KANAYA ORGANIZER
        </p>

        <span class="h-px w-10 bg-white"></span>
    </div>

    {{-- Judul dan tombol di tengah foto --}}
    <div class="relative z-10 mx-auto flex max-w-4xl flex-col items-center text-center pt-24 md:pt-32">

        <h1 class="font-heading text-4xl leading-tight text-white sm:text-5xl md:text-6xl">
            <span class="italic">Creating Your</span>
        </h1>

        <h2 class="font-heading text-4xl leading-tight text-[#E4B65D] sm:text-5xl md:text-6xl">
            Perfect Moment
        </h2>

        <p class="font-heading mx-auto mb-8 mt-10 max-w-2xl text-base leading-7 text-white md:text-lg">
            "Wujudkan pernikahan impianmu dengan konsep yang elegan,
            terencana, dan berkesan bersama Kanaya."
        </p>

        <a
            href="{{ route('packages') }}"
            class="inline-block rounded-none border border-[#E4B65D] bg-transparent px-8 py-3 font-semibold text-[#E4B65D] transition-colors duration-300 hover:bg-[#E4B65D] hover:text-white"
        >
            Lihat Paket Kami
        </a>

    </div>
</section>

@endsection