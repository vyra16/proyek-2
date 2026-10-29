@extends('components.layouts.app')

@section('title', 'REVIEW | Kanaya Organizer')

@section('content')

<section id="testimonials" class="min-h-screen bg-[#0B0B0B] px-6 py-24 md:px-12">

    <div class="mx-auto max-w-6xl">

        {{-- JUDUL --}}
        <div class="mb-16 text-center">
            <div class="mb-3 flex items-center justify-center gap-5">
                <span class="h-px w-3 bg-[#E4B65D]"></span>

                <p class="font-heading text-sm tracking-widest text-[#E4B65D]">
                    CLIENT STORIES
                </p>

                <span class="h-px w-3 bg-[#E4B65D]"></span>
            </div>

            <h1 class="font-heading text-3xl italic md:text-5xl">
                <span class="text-white">What Our </span>
                <span class="text-[#E4B65D]">Couples Say</span>
            </h1>
        </div>

        {{-- KARTU REVIEW --}}
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">

            {{-- REVIEW 1 --}}
            <div class="flex min-h-[230px] flex-col border border-[#8D713C] bg-[#1C1C1C] p-6">
                <div class="mb-6 flex gap-2 text-2xl text-[#E4B65D]">
                    ☆ ☆ ☆ ☆ ☆
                </div>

                <p class="text-sm leading-6 text-white">
                    Kanaya mengubah visi kami menjadi kenyataan yang jauh
                    lebih indah dari yang kami bayangkan. Tim mereka luar
                    biasa profesional dan penuh perhatian.
                </p>

                <div class="mt-auto pt-6">
                    <div class="mb-4 border-t border-[#8D713C]/50"></div>
                    <p class="font-heading text-sm text-[#E4B65D]">
                        Putri &amp; Waluyo
                    </p>
                </div>
            </div>

            {{-- REVIEW 2 --}}
            <div class="flex min-h-[230px] flex-col border border-[#8D713C] bg-[#1C1C1C] p-6">
                <div class="mb-6 flex gap-2 text-2xl text-[#E4B65D]">
                    ☆ ☆ ☆ ☆ ☆
                </div>

                <p class="text-sm leading-6 text-white">
                    Hari pernikahan kami sempurna tanpa satu pun hambatan.
                    Kanaya menangani semuanya dengan sangat elegan dan
                    terorganisir.
                </p>

                <div class="mt-auto pt-6">
                    <div class="mb-4 border-t border-[#8D713C]/50"></div>
                    <p class="font-heading text-sm text-[#E4B65D]">
                        Aziz &amp; Nadya
                    </p>
                </div>
            </div>

            {{-- REVIEW 3 --}}
            <div class="flex min-h-[230px] flex-col border border-[#8D713C] bg-[#1C1C1C] p-6">
                <div class="mb-6 flex gap-2 text-2xl text-[#E4B65D]">
                    ☆ ☆ ☆ ☆ ☆
                </div>

                <p class="text-sm leading-6 text-white">
                    Dekorasi yang Kanaya hadirkan membuat seluruh tamu
                    terpesona. Investasi terbaik untuk hari paling
                    berkesan dalam hidup kami.
                </p>

                <div class="mt-auto pt-6">
                    <div class="mb-4 border-t border-[#8D713C]/50"></div>
                    <p class="font-heading text-sm text-[#E4B65D]">
                        Nailinnajah &amp; Dickyauliansyah
                    </p>
                </div>
            </div>

        </div>
    </div>

</section>

@endsection