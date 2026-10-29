@extends('components.layouts.app')

@section('title', 'ABOUT US | Kanaya Organizer')

@section('content')

{{-- ABOUT US TITLE --}}
<section id="about" class="bg-black px-6 pb-8 pt-10 text-center">
    <div class="flex items-center justify-center gap-5">
        <span class="h-px w-8 bg-[#E4B65D]"></span>

        <h2 class="font-heading text-2xl tracking-widest text-[#E4B65D]">
            ABOUT US
        </h2>

        <span class="h-px w-8 bg-[#E4B65D]"></span>
    </div>
</section>

{{-- ABOUT US CONTENT --}}
<section class="bg-black px-6 pb-24 pt-8 text-white md:px-12 lg:px-20">
    <div class="mx-auto grid max-w-6xl grid-cols-1 items-center gap-10 md:grid-cols-2 md:gap-12">

        {{-- FOTO --}}
        <div class="relative mx-auto w-full max-w-md">
            <div class="absolute -left-4 -top-4 h-full w-full border border-[#E4B65D]/70"></div>

            <img
                src="{{ asset('img/tentang.jpg') }}"
                alt="Pernikahan bersama Kanaya Organizer"
                class="relative z-10 h-[400px] w-full object-cover md:h-[450px]"
            >
        </div>

        {{-- TEKS --}}
        <div class="mt-4 md:mt-0">
            <h1 class="font-heading text-4xl italic leading-tight md:text-4xl lg:text-5xl">
                The Story Behind
            </h1>

            <h2 class="font-heading mt-1 text-3xl font-bold text-[#E4B65D] md:text-4xl">
                Kanaya Organizer
            </h2>

            <div class="mt-5 h-px w-28 bg-[#E4B65D]/60"></div>

            <p class="mt-5 text-sm leading-6 text-white md:text-[14px]">
                Kanaya Organizer hadir untuk membantu setiap pasangan
                menciptakan pernikahan yang sesuai dengan impian mereka.
                Dengan pelayanan profesional dan perhatian terhadap setiap
                detail, kami memastikan setiap momen menjadi pengalaman
                yang berkesan.
            </p>

            {{-- STATISTIK --}}
            <div class="mt-7 grid grid-cols-3 gap-4 text-center">

                <div class="border-t border-[#E4B65D]/50 pt-4">
                    <p class="font-heading text-3xl text-[#E4B65D]">100+</p>
                    <p class="mt-1 text-[9px] tracking-wider text-[#BDA36B] md:text-[10px]">
                        WEDDINGS
                    </p>
                </div>

                <div class="border-t border-[#E4B65D]/50 pt-4">
                    <p class="font-heading text-3xl text-[#E4B65D]">6+</p>
                    <p class="mt-1 text-[9px] tracking-wider text-[#BDA36B] md:text-[10px]">
                        PROFESSIONAL TEAM
                    </p>
                </div>

                <div class="border-t border-[#E4B65D]/50 pt-4">
                    <p class="font-heading text-3xl text-[#E4B65D]">100%</p>
                    <p class="mt-1 text-[9px] tracking-wider text-[#BDA36B] md:text-[10px]">
                        PERSONALIZED
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>


{{-- OUR PROMISE --}}
<section id="promise" class="bg-[#0B0B0B] px-6 py-24 md:py-28">
    <div class="mx-auto max-w-7xl">

        {{-- JUDUL OUR PROMISE --}}
        <div class="mb-16 text-center">
            <div class="mb-4 flex items-center justify-center gap-5">
                <span class="h-px w-8 bg-[#8D713C]"></span>

                <p class="font-heading text-sm tracking-widest text-[#E4B65D]">
                    OUR PROMISE
                </p>

                <span class="h-px w-8 bg-[#8D713C]"></span>
            </div>

            <h2 class="font-heading text-3xl leading-tight md:text-5xl">
                <span class="italic font-normal text-white">Why</span>
                <span class="font-semibold text-[#E4B65D]">
                    Kanaya Organizer ?
                </span>
            </h2>
        </div>

        {{-- EMPAT KEUNGGULAN --}}
        <div class="grid grid-cols-1 gap-x-8 gap-y-12 sm:grid-cols-2 lg:grid-cols-4">

            {{-- 01: PROFESSIONAL TEAM --}}
            <div class="text-center">
                <div class="mx-auto mb-5 flex h-[76px] w-[80px] items-center justify-center
                            border border-[#8D713C] bg-[#1C1C1C]">
                    <span class="font-heading text-3xl text-[#E4B65D]">01</span>
                </div>

                <h3 class="mb-3 font-heading text-xl text-white">
                    Professional Team
                </h3>

                <p class="mx-auto max-w-xs text-xs leading-relaxed text-[#E4B65D]">
                    Tim berpengalaman 4+ tahun di industri pernikahan premium Indonesia.
                </p>
            </div>

            {{-- 02: PERSONALIZED CONCEPT --}}
            <div class="text-center">
                <div class="mx-auto mb-5 flex h-[76px] w-[80px] items-center justify-center
                            border border-[#8D713C] bg-[#1C1C1C]">
                    <span class="font-heading text-3xl text-[#E4B65D]">02</span>
                </div>

                <h3 class="mb-3 font-heading text-xl text-white">
                    Personalized Concept
                </h3>

                <p class="mx-auto max-w-xs text-xs leading-relaxed text-[#E4B65D]">
                    Setiap pernikahan dirancang unik, tidak ada dua Kanaya wedding yang sama.
                </p>
            </div>

            {{-- 03: TRANSPARENT PRICING --}}
            <div class="text-center">
                <div class="mx-auto mb-5 flex h-[76px] w-[80px] items-center justify-center
                            border border-[#8D713C] bg-[#1C1C1C]">
                    <span class="font-heading text-3xl text-[#E4B65D]">03</span>
                </div>

                <h3 class="mb-3 font-heading text-xl text-white">
                    Transparent Pricing
                </h3>

                <p class="mx-auto max-w-xs text-xs leading-relaxed text-[#E4B65D]">
                    Paket jelas tanpa biaya tersembunyi. Kepercayaan adalah fondasi kami.
                </p>
            </div>

            {{-- 04: ATTENTION TO DETAIL --}}
            <div class="text-center">
                <div class="mx-auto mb-5 flex h-[76px] w-[80px] items-center justify-center
                            border border-[#8D713C] bg-[#1C1C1C]">
                    <span class="font-heading text-3xl text-[#E4B65D]">04</span>
                </div>

                <h3 class="mb-3 font-heading text-xl text-white">
                    Attention to Detail
                </h3>

                <p class="mx-auto max-w-xs text-xs leading-relaxed text-[#E4B65D]">
                    Dari pita kartu undangan hingga rangkaian bunga, setiap detail kami jaga.
                </p>
            </div>

        </div>
    </div>
</section>

@endsection