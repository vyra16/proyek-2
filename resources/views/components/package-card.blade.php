@props([
    'name',
    'price',
    'description',
    'features' => [],
    'featured' => false
])

<div class="relative flex h-full flex-col overflow-hidden
    border bg-[#1F1F1F] text-white shadow-lg
    transition-all duration-300 hover:-translate-y-1
    {{ $featured
        ? 'border-[#E4B65D] border-2'
        : 'border-[#8B713D]' }}">

    {{-- Label Paket Unggulan --}}
    @if($featured)
        <div class="bg-[#E4B65D] px-4 py-2 text-center
                    text-sm font-bold tracking-wide text-black">
            PAKET POPULER
        </div>
    @endif

    <div class="flex flex-1 flex-col p-6 md:p-7">

        {{-- Nama Paket --}}
        <h3 class="font-heading text-xl font-semibold leading-snug
                   text-[#E4B65D] md:text-2xl">
            {{ $name }}
        </h3>

        {{-- Harga --}}
        <div class="mt-5">
            <p class="text-sm text-gray-300">
                Starting From
            </p>

            <p class="mt-2 text-2xl font-medium tracking-wide
                      text-[#E4B65D] md:text-3xl">
                {{ $price }}
            </p>
        </div>

        {{-- Deskripsi --}}
        @if(!empty($description))
            <p class="mt-5 text-sm leading-7 text-gray-300">
                {{ $description }}
            </p>
        @endif

        {{-- Daftar Fitur --}}
        @if(count($features))
            <ul class="mt-6 flex-1 space-y-4">
                @foreach($features as $feature)
                    <li class="flex items-start gap-3 text-sm
                               leading-6 text-gray-200 md:text-base">
                        <span class="mt-1 text-lg text-[#E4B65D]">•</span>
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        @endif

        {{-- Tombol Detail --}}
        <a href="{{ route('contact') }}"
           class="mt-8 block border border-[#E4B65D] px-5 py-3
                  text-center text-sm font-semibold tracking-wide
                  text-[#E4B65D] transition-colors duration-300
                  hover:bg-[#E4B65D] hover:text-black
                  {{ $featured ? 'bg-[#E4B65D] text-black hover:bg-transparent hover:text-[#E4B65D]' : 'bg-transparent' }}">
            LIHAT DETAIL
        </a>

    </div>
</div>