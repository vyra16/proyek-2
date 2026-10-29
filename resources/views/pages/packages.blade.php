@extends('components.layouts.app')

@section('title', 'PRICELIST | Kanaya Organizer')

@section('content')

<section class="bg-black px-6 py-16 text-center">
    <div class="mb-6 flex items-center justify-center gap-5">
        <span class="h-px w-10 bg-[#E4B65D]"></span>
        <p class="font-heading text-sm tracking-widest text-[#E4B65D]">
            INVESTMENT
        </p>
        <span class="h-px w-10 bg-[#E4B65D]"></span>
    </div>

    <h1 class="font-heading text-4xl md:text-6xl">
        <span class="italic text-white">Wedding</span>
        <span class="text-[#E4B65D]">Packages</span>
    </h1>
</section>

<section class="bg-black px-6 pb-16 pt-8">

    {{-- SATU GRID UNTUK TIGA KOTAK PAKET --}}
    <div class="mx-auto grid max-w-7xl grid-cols-1 items-start gap-8 md:grid-cols-3">

        <x-package-card
            name="Silver"
            price="Rp15.000.000"
            description="Pilihan untuk pernikahan sederhana dan intim."
            :features="[
                'Koordinasi acara',
                'Dekorasi sederhana',
                'Makeup pengantin',
                'Dokumentasi foto'
            ]"
        />

        <x-package-card
            name="Gold"
            price="Rp25.000.000"
            description="Paket dengan fasilitas lebih lengkap."
            :features="[
                'Perencanaan acara',
                'Dekorasi premium',
                'Makeup pengantin',
                'Dokumentasi foto dan video',
                'Koordinasi vendor'
            ]"
            :featured="true"
        />

        <x-package-card
            name="Platinum"
            price="Rp40.000.000"
            description="Pilihan untuk perayaan dengan layanan lebih menyeluruh."
            :features="[
                'Konsultasi konsep khusus',
                'Dekorasi eksklusif',
                'Makeup pengantin',
                'Dokumentasi foto dan video',
                'Koordinasi acara',
                'Bantuan pemilihan venue'
            ]"
        />

    </div>
    {{-- BARIS KEDUA --}}
<div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-3">

    <x-package-card
        name="Silver"
        price="Rp15.000.000"
        description="Pilihan untuk pernikahan sederhana dan intim."
        :features="[
            'Koordinasi acara',
            'Dekorasi sederhana',
            'Makeup pengantin',
            'Dokumentasi foto'
        ]"
    />

    <x-package-card
        name="Gold"
        price="Rp25.000.000"
        description="Paket dengan fasilitas lebih lengkap."
        :features="[
            'Perencanaan acara',
            'Dekorasi premium',
            'Makeup pengantin',
            'Dokumentasi foto dan video',
            'Koordinasi vendor'
        ]"
        :featured="true"
    />

    <x-package-card
        name="Platinum"
        price="Rp40.000.000"
        description="Pilihan untuk perayaan dengan layanan lebih menyeluruh."
        :features="[
            'Konsultasi konsep khusus',
            'Dekorasi eksklusif',
            'Makeup pengantin',
            'Dokumentasi foto dan video',
            'Koordinasi acara',
            'Bantuan pemilihan venue'
        ]"
    />

</div>

    <p class="mt-8 text-center text-sm text-gray-500">
        Harga merupakan ilustrasi dan dapat disesuaikan dengan kebutuhan acara.
    </p>

</section>

@endsection