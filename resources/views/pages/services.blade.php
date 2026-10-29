@extends('components.layouts.app')

@section('title', 'SERVICES | Kanaya Organizer')

@section('content')

{{-- JUDUL LAYANAN --}}
<section class="bg-black px-6 pt-16 pb-10 text-center">

    <div class="flex items-center justify-center gap-5 mb-6">
        <span class="w-10 h-px bg-[#E4B65D]"></span>
        <p class="text-[#E4B65D] text-sm tracking-widest font-heading">
            WHAT WE OFFER
        </p>
        <span class="w-10 h-px bg-[#E4B65D]"></span>
    </div>

    <h1 class="font-heading text-4xl md:text-6xl">
        <span class="italic text-white">Our</span>
        <span class="text-[#E4B65D]"> Services</span>
    </h1>

</section>


{{-- DAFTAR LAYANAN --}}
<section class="bg-black text-white px-6 pb-16">

    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3">

        {{-- LAYANAN 1 --}}
        <div class="px-6 py-8 md:border-r border-[#6D5635]">
            <div class="text-[#A89070] mb-5">
                <svg class="w-8 h-8" fill="none" stroke="currentColor"
                    stroke-width="1.8" viewBox="0 0 24 24">
                    <rect x="3" y="6" width="18" height="14" rx="1"/>
                    <path d="M8 6V4h8v2M3 11h18"/>
                </svg>
            </div>

            <h2 class="font-heading text-xl mb-7">Wedding Planning</h2>
            <p class="text-[#D5C3A5] text-sm leading-5">
                Perencanaan menyeluruh dari detail terkecil hingga momen
                terbesar hari pernikahan Anda.
            </p>
        </div>

        {{-- LAYANAN 2 --}}
        <div class="px-6 py-8 md:border-r border-[#6D5635]">
            <div class="text-[#A89070] mb-5">
                <svg class="w-8 h-8" fill="none" stroke="currentColor"
                    stroke-width="1.8" viewBox="0 0 24 24">
                    <circle cx="9" cy="12" r="6"/>
                    <circle cx="15" cy="12" r="6"/>
                </svg>
            </div>

            <h2 class="font-heading text-xl mb-7">Wedding Organizer</h2>
            <p class="text-[#D5C3A5] text-sm leading-5">
                Koordinasi total pada hari H, memastikan setiap proses
                berjalan dengan sempurna.
            </p>
        </div>

        {{-- LAYANAN 3 --}}
        <div class="px-6 py-8">
            <div class="text-[#A89070] mb-5">
                <svg class="w-8 h-8" fill="none" stroke="currentColor"
                    stroke-width="1.8" viewBox="0 0 24 24">
                    <path d="M5 20V14M12 20V8M19 20V3"/>
                </svg>
            </div>

            <h2 class="font-heading text-xl mb-7">Decoration</h2>
            <p class="text-[#D5C3A5] text-sm leading-5">
                Dekorasi bespoke yang mencerminkan kepribadian dan
                estetika unik pasangan Anda.
            </p>
        </div>

        {{-- GARIS PEMISAH ANTARBARIS --}}
        <div class="hidden md:block md:col-span-3 border-t border-[#6D5635]"></div>

        {{-- LAYANAN 4 --}}
        <div class="px-6 py-8 md:border-r border-[#6D5635]">
            <div class="text-[#A89070] mb-5">
                <svg class="w-8 h-8" fill="none" stroke="currentColor"
                    stroke-width="1.8" viewBox="0 0 24 24">
                    <path d="M3 10 12 3l9 7v11h-6v-7H9v7H3z"/>
                </svg>
            </div>

            <h2 class="font-heading text-xl mb-7">Venue Management</h2>
            <p class="text-[#D5C3A5] text-sm leading-5">
                Seleksi dan manajemen venue premium sesuai dengan
                konsep dan kapasitas impian Anda.
            </p>
        </div>

        {{-- LAYANAN 5 --}}
        <div class="px-6 py-8 md:border-r border-[#6D5635]">
            <div class="text-[#A89070] mb-5">
                <svg class="w-8 h-8" fill="none" stroke="currentColor"
                    stroke-width="1.8" viewBox="0 0 24 24">
                    <circle cx="9" cy="8" r="3"/>
                    <path d="M3 20v-2a6 6 0 0 1 12 0v2M16 5a3 3 0 0 1 0 6M18 14a5 5 0 0 1 3 5v1"/>
                </svg>
            </div>

            <h2 class="font-heading text-xl mb-7">Vendor Coordination</h2>
            <p class="text-[#D5C3A5] text-sm leading-5">
                Jaringan vendor terpercaya — fotografer, katering,
                entertainment, dan lebih.
            </p>
        </div>

        {{-- LAYANAN 6 --}}
        <div class="px-6 py-8">
            <div class="text-[#A89070] mb-5">
                <svg class="w-8 h-8" fill="none" stroke="currentColor"
                    stroke-width="1.8" viewBox="0 0 24 24">
                    <path d="M8 12V4a1.5 1.5 0 0 1 3 0v7"/>
                    <path d="M11 10V3a1.5 1.5 0 0 1 3 0v8"/>
                    <path d="M14 10V5a1.5 1.5 0 0 1 3 0v8"/>
                    <path d="M8 10v-1a1.5 1.5 0 0 0-3 0v7a6 6 0 0 0 6 6h3a6 6 0 0 0 6-6v-3a1.5 1.5 0 0 0-3 0"/>
                </svg>
            </div>

            <h2 class="font-heading text-xl mb-7">Event Management</h2>
            <p class="text-[#D5C3A5] text-sm leading-5">
                Eksekusi mulus dari rehearsal dinner hingga after-party
                dengan standar luxury.
            </p>
        </div>

    </div>

</section>

@endsection