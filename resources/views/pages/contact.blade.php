@extends('components.layouts.app')

@section('title', 'CONTACT | Kanaya Organizer')

@section('content')

{{-- HERO CONTACT --}}
<section
    class="relative flex min-h-[560px] items-center justify-center overflow-hidden bg-black px-6 py-28 text-center md:min-h-[680px] lg:min-h-[720px]"
    style="background-image: linear-gradient(rgba(0,0,0,0.40), rgba(0,0,0,0.40)), url('{{ asset('img/kontak.jpg') }}'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="relative z-10 mx-auto max-w-4xl">

        {{-- JUDUL --}}
        <h1 class="font-heading text-4xl italic leading-tight text-white md:text-6xl lg:text-7xl">
            Your Dream Wedding
        </h1>

        <h2 class="font-heading mt-4 text-4xl font-bold text-[#E4B65D] md:text-6xl lg:text-7xl">
            Starts Here.
        </h2>

        {{-- DESKRIPSI --}}
        <p class="mt-5 font-heading text-sm font-semibold text-white md:text-base">
            Let Kanaya turns your dream wedding into a beautiful reality.
        </p>

        {{-- TOMBOL WHATSAPP --}}
        <a
            href="https://wa.me/6283101129408?text={{ urlencode('Halo Kanaya Organizer, saya ingin berkonsultasi mengenai pernikahan impian saya.') }}"
            target="_blank"
            rel="noopener noreferrer"
            class="mt-10 inline-block bg-[#E4B65D] px-8 py-4 font-heading text-sm font-bold text-black transition duration-300 hover:bg-white"
        >
            KONSULTASIKAN SEKARANG
        </a>

    </div>
</section>

@endsection